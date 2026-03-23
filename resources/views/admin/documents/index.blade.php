@extends('layouts.admin')

@section('content')
<div style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
    @if(session('success'))
    <div style="background: #dcfce7; color: #15803d; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-weight: 500;">
        <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
    </div>
    @endif

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
        <h2 style="margin: 0; font-family: 'Segoe UI', sans-serif; color: #2d3748; display: flex; align-items: center;">
            <i class="fa-solid fa-folder-open" style="margin-right: 12px; color: #4f46e5;"></i> Quản lý thư viện
        </h2>
        <a href="{{ route('admin.documents.create') }}" style="background: #4f46e5; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 14px; transition: 0.3s;">
            <i class="fa-solid fa-plus"></i> Thêm tài liệu
        </a>
    </div>

    <form method="GET" action="{{ route('admin.documents.index') }}" style="display: flex; gap: 12px; align-items: center; margin-bottom: 20px; font-family: 'Segoe UI', sans-serif; flex-wrap: wrap;">
        <label for="category" style="font-weight: 600; color: #475569; font-size: 13px;">Chuyên mục</label>
        <select name="category" id="category" style="padding: 8px 10px; border: 1px solid #cbd5e1; border-radius: 6px; background: white; font-size: 13px;">
            <option value="">Tất cả</option>
            <option value="tieu-chuan-thi-cong" {{ ($category ?? '') == 'tieu-chuan-thi-cong' ? 'selected' : '' }}>Tiêu chuẩn thi công</option>
            <option value="tieu-chuan-thi-nghiem" {{ ($category ?? '') == 'tieu-chuan-thi-nghiem' ? 'selected' : '' }}>Tiêu chuẩn thí nghiệm</option>
            <option value="excel-ung-dung" {{ ($category ?? '') == 'excel-ung-dung' ? 'selected' : '' }}>Excel - Ứng dụng</option>
        </select>
        <label for="sort" style="font-weight: 600; color: #475569; font-size: 13px;">Sắp xếp</label>
        <select name="sort" id="sort" style="padding: 8px 10px; border: 1px solid #cbd5e1; border-radius: 6px; background: white; font-size: 13px;">
            <option value="newest" {{ ($sort ?? 'newest') == 'newest' ? 'selected' : '' }}>Mới nhất</option>
            <option value="oldest" {{ ($sort ?? 'newest') == 'oldest' ? 'selected' : '' }}>Cũ nhất</option>
        </select>
        <button type="submit" style="background: #4f46e5; color: white; padding: 8px 14px; border: none; border-radius: 6px; font-weight: 600; font-size: 13px; cursor: pointer;">
            Lọc
        </button>
        @if(!empty($category) || ($sort ?? 'newest') !== 'newest')
        <a href="{{ route('admin.documents.index') }}" style="color: #64748b; text-decoration: none; font-size: 13px;">Xóa lọc</a>
        @endif
    </form>

    <table style="width: 100%; border-collapse: collapse; font-family: 'Segoe UI', sans-serif;">
        <thead>
            <tr style="background: #f8fafc; border-bottom: 2px solid #e2e8f0;">
                <th style="padding: 15px; text-align: left; color: #64748b; font-size: 13px; text-transform: uppercase;">Tên tài liệu</th>
                <th style="padding: 15px; text-align: left; color: #64748b; font-size: 13px; text-transform: uppercase;">Chuyên mục</th>
                <th style="padding: 15px; text-align: left; color: #64748b; font-size: 13px; text-transform: uppercase;">Dung lượng</th>
                <th style="padding: 15px; text-align: left; color: #64748b; font-size: 13px; text-transform: uppercase;">File</th>
                <th style="padding: 15px; text-align: left; color: #64748b; font-size: 13px; text-transform: uppercase;">Ngày tạo</th>
                <th style="padding: 15px; text-align: center; color: #64748b; font-size: 13px; text-transform: uppercase;">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @forelse($documents as $document)
            <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px;">
                    <div style="font-weight: 600; color: #1e293b; font-size: 14px;">{{ $document->title }}</div>
                </td>
                <td style="padding: 15px;">
                    <span style="color: #475569; background: #f1f5f9; padding: 3px 10px; border-radius: 6px; font-size: 12px;">
                        {{ $document->category }}
                    </span>
                </td>
                <td style="padding: 15px; color: #475569; font-size: 13px;">
                    {{ $document->file_size ?? 'N/A' }}
                </td>
                <td style="padding: 15px;">
                    @if($document->file_path)
                    <a href="{{ route('document.download', $document->id) }}" style="color: #2563eb; text-decoration: none; font-size: 13px;">
                        {{ basename($document->file_path) }}
                    </a>
                    @else
                    <span style="color: #94a3b8; font-size: 12px;">Chưa có</span>
                    @endif
                </td>
                <td style="padding: 15px; color: #475569; font-size: 13px;">
                    {{ $document->created_at ? $document->created_at->format('d/m/Y') : 'N/A' }}
                </td>
                <td style="padding: 15px; text-align: center;">
                    <div style="display: flex; justify-content: center; gap: 12px;">
                        <a href="{{ route('admin.documents.edit', $document->id) }}" style="color: #3b82f6;" title="Sửa">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <form action="{{ route('admin.documents.destroy', $document->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa tài liệu này?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:none; border:none; color: #ef4444; cursor: pointer; padding: 0;" title="Xóa">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="padding: 40px; text-align: center; color: #94a3b8;">Chưa có tài liệu nào được tạo.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    @if($documents->hasPages())
    <div style="margin-top: 20px; display: flex; align-items: center; justify-content: space-between; font-family: 'Segoe UI', sans-serif;">
        <div style="color: #64748b; font-size: 13px;">
            Hiển thị {{ $documents->firstItem() }}-{{ $documents->lastItem() }} / {{ $documents->total() }}
        </div>
        <div style="display: flex; gap: 8px;">
            @if($documents->onFirstPage())
            <span style="padding: 8px 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #cbd5e1; font-size: 13px;">Trước</span>
            @else
            <a href="{{ $documents->previousPageUrl() }}" style="padding: 8px 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #475569; text-decoration: none; font-size: 13px;">Trước</a>
            @endif

            @if($documents->hasMorePages())
            <a href="{{ $documents->nextPageUrl() }}" style="padding: 8px 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #475569; text-decoration: none; font-size: 13px;">Sau</a>
            @else
            <span style="padding: 8px 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #cbd5e1; font-size: 13px;">Sau</span>
            @endif
        </div>
    </div>
    @endif
</div>
@endsection