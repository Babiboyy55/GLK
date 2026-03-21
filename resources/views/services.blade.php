@extends('layouts.app')

@section('content')
@php
$title = 'Lĩnh vực hoạt động - Gia Lộc Khang';

// 4 Nhóm dịch vụ trọng điểm (Hiển thị to có ảnh minh họa)
$coreServices = [
[
'title' => 'Thi Công Xây Dựng & Hạ Tầng',
'desc' => 'Chuyên thi công các công trình đường sắt, đường bộ, công trình công nghiệp, công ích và nhà ở các loại.',
'icon' => 'fa-building-shield',
'image' => '/images/Picture5.png'
],
[
'title' => 'Cơ Điện & Hoàn Thiện',
'desc' => 'Lắp đặt hệ thống điện, cấp thoát nước, điều hòa không khí và hoàn thiện toàn bộ công trình xây dựng.',
'icon' => 'fa-bolt',
'image' => '/images/Picture6.png'
],
[
'title' => 'Vật Tư & Thiết Bị Cơ Giới',
'desc' => 'Khai thác, buôn bán vật liệu xây dựng (đá, cát, sỏi). Mua bán và cho thuê máy móc, thiết bị khai khoáng, thi công.',
'icon' => 'fa-truck-monster',
'image' => '/images/Picture7.png'
],
[
'title' => 'Thí Nghiệm & Kiểm Định',
'desc' => 'Thí nghiệm vật liệu, kiểm định các chỉ tiêu nền móng, kết cấu mặt đường công trình giao thông, xây dựng.',
'icon' => 'fa-microscope',
'image' => '/images/Picture9.png'
]
];

// Danh sách chi tiết 15 dịch vụ kinh doanh từ Giấy phép
$detailedServices = [
'Xây dựng công trình đường sắt và đường bộ.',
'Xây dựng công trình công nghiệp.',
'Xây dựng công trình công ích.',
'Xây dựng nhà các loại.',
'Chuẩn bị mặt bằng & Phá dỡ công trình.',
'Hoàn thiện công trình xây dựng.',
'Lắp đặt hệ thống điện, cấp thoát nước, lò sưởi và điều hòa không khí.',
'Khai thác đá, cát, sỏi, đất sét.',
'Buôn bán vật liệu, thiết bị lắp đặt khác trong xây dựng.',
'Buôn bán máy móc, thiết bị và phụ tùng máy khai khoáng, xây dựng.',
'Cho thuê máy móc, thiết bị và đồ dùng kỹ thuật có liên quan.',
'Thí nghiệm và kiểm định vật liệu công trình giao thông.',
'Thí nghiệm các chỉ tiêu của nền móng, kết cấu mặt đường các công trình.'
];
@endphp

<section class="relative w-full h-[45vh] min-h-[350px] bg-[#003366] overflow-hidden">
    <img src="{{ asset('images/banner.jpg') }}" alt="Dịch vụ Gia Lộc Khang" class="absolute inset-0 w-full h-full object-cover opacity-30">
    <div class="absolute inset-0 bg-gradient-to-t from-[#003366] to-transparent"></div>
    <div class="relative max-w-7xl mx-auto px-4 h-full flex flex-col justify-center items-center text-center pt-10">
        <p class="text-[#E27121] font-bold tracking-[0.3em] uppercase mb-4 border-b-2 border-[#E27121] inline-block pb-1">Hệ Sinh Thái Dịch Vụ</p>
        <h1 class="text-4xl md:text-6xl font-black text-white uppercase tracking-wide leading-tight">
            Giải Pháp Toàn Diện <br> Cho Mọi Công Trình
        </h1>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-[#003366] text-3xl md:text-4xl font-black uppercase mb-4">Lĩnh Vực Hoạt Động Cốt Lõi</h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg">Gia Lộc Khang đóng vai trò là Tổng thầu cung cấp hệ sinh thái khép kín từ khâu cung ứng vật tư, thiết bị, trực tiếp thi công đến kiểm định chất lượng công trình.</p>
        </div>

        <div class="grid gap-8 md:grid-cols-2">
            @foreach ($coreServices as $item)
            <div class="flex flex-col md:flex-row bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl hover:border-[#003366]/30 transition duration-500 group">
                <div class="w-full md:w-2/5 h-48 md:h-auto overflow-hidden relative">
                    <img src="{{ asset($item['image']) }}" onerror="this.src='{{ asset('images/banner.jpg') }}'" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-[#003366]/20 group-hover:bg-transparent transition duration-500"></div>
                </div>
                <div class="w-full md:w-3/5 p-6 md:p-8 flex flex-col justify-center">
                    <div class="w-12 h-12 bg-[#003366]/10 text-[#003366] rounded-lg flex items-center justify-center text-2xl mb-4 group-hover:bg-[#E27121] group-hover:text-white transition-colors">
                        <i class="fa-solid {{ $item['icon'] }}"></i>
                    </div>
                    <h3 class="text-xl font-black text-[#003366] uppercase mb-3">{{ $item['title'] }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $item['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center gap-4 mb-10">
            <div class="w-2 h-10 bg-[#E27121]"></div>
            <h2 class="text-[#003366] text-2xl md:text-3xl font-black uppercase tracking-wide">Danh Mục Dịch Vụ Chi Tiết</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-4">
            @foreach ($detailedServices as $detail)
            <div class="flex items-start gap-3 bg-white p-4 rounded-lg shadow-sm border border-gray-100 hover:border-[#E27121] transition-colors">
                <div class="mt-0.5 text-[#E27121] shrink-0">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <p class="text-gray-700 font-medium">{{ $detail }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-[#003366] text-2xl font-black uppercase">Thông Tin Hồ Sơ Dịch Vụ Mở Rộng</h2>
            <div class="w-16 h-1 bg-[#E27121] mx-auto mt-4"></div>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            {{-- Vòng lặp lấy từ database của Laravel --}}
            @forelse ($services ?? [] as $service)
            <a href="{{ route('services.show', $service->slug ?? '#') }}" class="group block bg-gray-50 border border-gray-100 p-6 rounded-xl shadow-sm hover:shadow-xl hover:bg-[#003366] transition duration-300">
                <div class="w-10 h-10 bg-white text-[#003366] rounded-full flex items-center justify-center text-lg mb-4 group-hover:text-[#E27121] shadow">
                    <i class="fa-solid fa-folder-open"></i>
                </div>
                <h3 class="font-bold text-[#003366] group-hover:text-white transition-colors line-clamp-2 mb-2">
                    {{ $service->title ?? 'Tên dịch vụ' }}
                </h3>
                <p class="text-gray-500 text-sm group-hover:text-gray-300 line-clamp-3">
                    {{ strip_tags($service->excerpt ?? $service->description ?? 'Đọc thêm chi tiết về năng lực thi công và quy trình thực hiện...') }}
                </p>
            </a>
            @empty
            <div class="col-span-full p-8 text-center bg-gray-50 rounded-xl text-gray-500 border border-dashed border-gray-300">
                <i class="fa-solid fa-file-contract text-4xl mb-3 text-gray-400"></i>
                <p>Chi tiết các gói dịch vụ đang được cập nhật lên hệ thống...</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section class="py-16 bg-[#003366] text-white relative overflow-hidden">
    <div class="absolute left-0 bottom-0 w-[500px] h-[500px] bg-white opacity-5 rounded-full -ml-40 -mb-40 pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <h2 class="text-3xl font-black uppercase mb-4">Triển Khai Dự Án Cùng Gia Lộc Khang</h2>
        <p class="text-gray-300 mb-8 text-lg">Khảo sát tận nơi - Báo giá minh bạch - Cam kết tiến độ</p>
        <a href="tel:0984313131" class="inline-flex items-center gap-3 bg-[#E27121] hover:bg-orange-600 text-white font-bold uppercase py-4 px-10 rounded shadow-xl transition transform hover:-translate-y-1">
            <i class="fa-solid fa-phone-volume text-xl"></i> Yêu cầu tư vấn & báo giá
        </a>
    </div>
</section>
@endsection