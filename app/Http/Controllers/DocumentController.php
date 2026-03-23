<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index($category)
    {
        // Lấy danh sách tài liệu theo category
        $documents = Document::where('category', $category)->latest()->get();

        // Đặt tiêu đề cho trang dựa vào category
        $title = 'Thư viện Tài liệu';
        if ($category == 'excel-ung-dung') $title = 'Excel Ứng Dụng';
        if ($category == 'tieu-chuan-thi-cong') $title = 'Tiêu Chuẩn Thi Công';

        return view('library.index', compact('documents', 'title'));
    }

    public function download($id)
    {
        $document = Document::findOrFail($id);
        $filePath = 'public/' . $document->file_path; // File lưu trong thư mục storage/app/public

        if (Storage::exists($filePath)) {
            return Storage::download($filePath, $document->title . '.' . $document->file_extension);
        }

        return back()->with('error', 'File không tồn tại trên hệ thống!');
    }
    public function create()
    {
        return view('admin.documents.create');
    }

    public function adminIndex(Request $request)
    {
        $category = $request->query('category');
        $sort = $request->query('sort', 'newest');

        $documents = Document::query()
            ->when($category, function ($query, $categoryValue) {
                return $query->where('category', $categoryValue);
            })
            ->when($sort === 'oldest', function ($query) {
                return $query->orderBy('created_at', 'asc');
            }, function ($query) {
                return $query->orderBy('created_at', 'desc');
            })
            ->paginate(15)
            ->withQueryString();

        return view('admin.documents.index', compact('documents', 'category', 'sort'));
    }

    public function edit(Document $document)
    {
        return view('admin.documents.edit', compact('document'));
    }

    // Hàm 2: Nhận file, lưu vào thư mục và ghi vào Database
    public function store(Request $request)
    {
        // 1. Kiểm tra dữ liệu nhập vào (Validate)
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'file' => 'required|mimes:pdf,doc,docx,xls,xlsx,xlsm|max:10240', // Tối đa 10MB
        ], [
            'file.mimes' => 'Chỉ hỗ trợ file PDF, Word, Excel.',
            'file.max' => 'Dung lượng file không được vượt quá 10MB.',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Lấy thông tin file
            $extension = $file->getClientOriginalExtension();
            $sizeInBytes = $file->getSize();

            // Đổi Byte sang MB hoặc KB cho đẹp
            $size = $sizeInBytes > 1048576
                ? round($sizeInBytes / 1048576, 2) . ' MB'
                : round($sizeInBytes / 1024, 2) . ' KB';

            // Lưu file vào thư mục storage/app/public/documents
            // Laravel sẽ tự động tạo tên file ngẫu nhiên để không bị trùng
            $path = $file->store('documents', 'public');

            // Lưu thông tin vào Database
            Document::create([
                'title' => $request->title,
                'category' => $request->category,
                'file_path' => $path,
                'file_extension' => $extension,
                'file_size' => $size,
            ]);

            return back()->with('success', 'Đã tải tài liệu lên thành công!');
        }

        return back()->with('error', 'Có lỗi xảy ra, vui lòng thử lại.');
    }

    public function update(Request $request, Document $document)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'file' => 'nullable|mimes:pdf,doc,docx,xls,xlsx,xlsm|max:10240',
        ], [
            'file.mimes' => 'Chỉ hỗ trợ file PDF, Word, Excel.',
            'file.max' => 'Dung lượng file không được vượt quá 10MB.',
        ]);

        $data = $request->only(['title', 'category']);

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            if ($document->file_path && Storage::exists('public/' . $document->file_path)) {
                Storage::delete('public/' . $document->file_path);
            }

            $extension = $file->getClientOriginalExtension();
            $sizeInBytes = $file->getSize();
            $size = $sizeInBytes > 1048576
                ? round($sizeInBytes / 1048576, 2) . ' MB'
                : round($sizeInBytes / 1024, 2) . ' KB';

            $path = $file->store('documents', 'public');

            $data['file_path'] = $path;
            $data['file_extension'] = $extension;
            $data['file_size'] = $size;
        }

        $document->update($data);

        return redirect()->route('admin.documents.index')->with('success', 'Cập nhật tài liệu thành công!');
    }

    public function destroy(Document $document)
    {
        if ($document->file_path && Storage::exists('public/' . $document->file_path)) {
            Storage::delete('public/' . $document->file_path);
        }

        $document->delete();

        return back()->with('success', 'Đã xóa tài liệu.');
    }
}
