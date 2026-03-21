@extends('layouts.app')

@section('content')
@php
$title = 'Dự án tiêu biểu - Gia Lộc Khang';

// Dữ liệu dự án thực tế từ HSNL Gia Lộc Khang
$portfolioProjects = [
[
'id' => 1,
'name' => 'Đường Vành Đai Phía Bắc Ninh Thuận',
'category_id' => 'giao-thong',
'category_name' => 'Cầu & Đường Giao Thông',
'client' => 'Sở GTVT Ninh Thuận',
'image' => '/images/Picture5.png'
],
[
'id' => 2,
'name' => 'KĐT Biển Bình Sơn - Ninh Chữ',
'category_id' => 'ha-tang',
'category_name' => 'Hạ Tầng & Thủy Lợi',
'client' => 'Ban QLDA Tỉnh Ninh Thuận',
'image' => '/images/Picture6.png'
],
[
'id' => 3,
'name' => 'Nhà Máy Điện Mặt Trời Phước Thái',
'category_id' => 'cong-nghiep',
'category_name' => 'Công Nghiệp & Dân Dụng',
'client' => 'Tập đoàn EVN',
'image' => '/images/Picture7.png'
],
[
'id' => 4,
'name' => 'Cải Tạo Tuyến Tránh QL.1 Phan Rang',
'category_id' => 'giao-thong',
'category_name' => 'Cầu & Đường Giao Thông',
'client' => 'Bộ Giao Thông Vận Tải',
'image' => '/images/Picture5.png'
],
[
'id' => 5,
'name' => 'Hệ Thống Thủy Lợi Sông Cái',
'category_id' => 'ha-tang',
'category_name' => 'Hạ Tầng & Thủy Lợi',
'client' => 'Sở NN & PTNT',
'image' => '/images/Picture6.png'
],
[
'id' => 6,
'name' => 'Đường Văn Lâm – Sơn Hải',
'category_id' => 'giao-thong',
'category_name' => 'Cầu & Đường Giao Thông',
'client' => 'UBND Tỉnh Ninh Thuận',
'image' => '/images/Picture7.png'
],
[
'id' => 7,
'name' => 'Hạ Tầng Khu Công Nghiệp Thành Hải',
'category_id' => 'cong-nghiep',
'category_name' => 'Công Nghiệp & Dân Dụng',
'client' => 'Ban Quản Lý KCN',
'image' => '/images/Picture5.png'
],
[
'id' => 8,
'name' => 'Nâng Cấp Hệ Thống Kênh Tấn Tài',
'category_id' => 'ha-tang',
'category_name' => 'Hạ Tầng & Thủy Lợi',
'client' => 'Sở NN & PTNT',
'image' => '/images/Picture6.png'
]
];
@endphp

<section class="relative w-full h-[40vh] min-h-[300px] bg-[#003366] overflow-hidden">
    <img src="{{ asset('images/banner.jpg') }}" alt="Dự án Gia Lộc Khang" class="absolute inset-0 w-full h-full object-cover opacity-30">
    <div class="absolute inset-0 bg-gradient-to-t from-[#003366] to-transparent"></div>
    <div class="relative max-w-7xl mx-auto px-4 h-full flex flex-col justify-end pb-12">
        <p class="text-[#E27121] font-bold tracking-[0.3em] uppercase mb-2">Hồ Sơ Năng Lực</p>
        <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-wide">Dự Án Tiêu Biểu</h1>
    </div>
</section>

<section class="py-16 bg-gray-50 min-h-screen"
    x-data="{ 
             currentTab: 'all', 
             modalOpen: false, 
             modalImage: '', 
             modalName: '', 
             modalClient: '',
             openModal(img, name, client) {
                 this.modalImage = img;
                 this.modalName = name;
                 this.modalClient = client;
                 this.modalOpen = true;
                 document.body.style.overflow = 'hidden'; // Khóa cuộn trang khi mở modal
             },
             closeModal() {
                 this.modalOpen = false;
                 document.body.style.overflow = ''; // Mở lại cuộn trang
             }
         }"
    @keydown.escape.window="closeModal()">

    <div class="max-w-7xl mx-auto px-4">

        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-[#003366] text-3xl font-black uppercase mb-4">Các Công Trình Đã Thực Hiện</h2>
            <p class="text-gray-600 leading-relaxed text-lg">
                Hơn 10 năm qua, Gia Lộc Khang tự hào ghi dấu ấn tại hàng loạt dự án trọng điểm khu vực Miền Trung, đáp ứng tiêu chuẩn kỹ thuật khắt khe và tiến độ thi công thần tốc.
            </p>
            <div class="w-24 h-1 bg-[#E27121] mx-auto mt-6"></div>
        </div>

        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button @click="currentTab = 'all'"
                :class="currentTab === 'all' ? 'bg-[#E27121] text-white border-[#E27121] shadow-md' : 'bg-white text-[#003366] border-gray-200 hover:border-[#003366]'"
                class="rounded-full border px-6 py-2.5 font-bold uppercase text-sm transition-all duration-300">
                Tất cả dự án
            </button>
            <button @click="currentTab = 'giao-thong'"
                :class="currentTab === 'giao-thong' ? 'bg-[#E27121] text-white border-[#E27121] shadow-md' : 'bg-white text-[#003366] border-gray-200 hover:border-[#003366]'"
                class="rounded-full border px-6 py-2.5 font-bold uppercase text-sm transition-all duration-300">
                Giao Thông
            </button>
            <button @click="currentTab = 'ha-tang'"
                :class="currentTab === 'ha-tang' ? 'bg-[#E27121] text-white border-[#E27121] shadow-md' : 'bg-white text-[#003366] border-gray-200 hover:border-[#003366]'"
                class="rounded-full border px-6 py-2.5 font-bold uppercase text-sm transition-all duration-300">
                Hạ Tầng & Thủy Lợi
            </button>
            <button @click="currentTab = 'cong-nghiep'"
                :class="currentTab === 'cong-nghiep' ? 'bg-[#E27121] text-white border-[#E27121] shadow-md' : 'bg-white text-[#003366] border-gray-200 hover:border-[#003366]'"
                class="rounded-full border px-6 py-2.5 font-bold uppercase text-sm transition-all duration-300">
                Công Nghiệp & Dân Dụng
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($portfolioProjects as $project)
            <div x-show="currentTab === 'all' || currentTab === '{{ $project['category_id'] }}'"
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                class="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-500 border border-gray-100 cursor-pointer flex flex-col"
                @click="openModal('{{ asset($project['image']) }}', '{{ $project['name'] }}', '{{ $project['client'] }}')">

                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset($project['image']) }}" onerror="this.src='{{ asset('images/banner.jpg') }}'" alt="{{ $project['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                    <div class="absolute inset-0 bg-[#003366]/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                        <div class="w-16 h-16 bg-[#E27121] text-white rounded-full flex items-center justify-center text-2xl transform scale-50 group-hover:scale-100 transition duration-500 delay-100">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </div>
                    </div>

                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-[#003366] text-xs font-bold px-3 py-1.5 uppercase rounded shadow-sm">
                        {{ $project['category_name'] }}
                    </div>
                </div>

                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-black text-[#003366] uppercase mb-2 group-hover:text-[#E27121] transition-colors line-clamp-2">
                            {{ $project['name'] }}
                        </h3>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100 flex items-center gap-2 text-sm text-gray-500 font-medium">
                        <i class="fa-solid fa-building-user text-[#E27121]"></i>
                        <span>CĐT: {{ $project['client'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <div x-show="modalOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6"
        style="display: none;">

        <div class="absolute inset-0 bg-[#003366]/90 backdrop-blur-sm" @click="closeModal()"></div>

        <div class="relative z-10 w-full max-w-5xl bg-white rounded-xl shadow-2xl flex flex-col overflow-hidden" @click.stop>

            <button type="button"
                class="absolute top-4 right-4 z-20 w-10 h-10 bg-black/50 hover:bg-[#E27121] text-white rounded-full flex items-center justify-center text-xl transition-colors"
                @click="closeModal()" aria-label="Đóng">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="w-full bg-gray-100 flex items-center justify-center overflow-hidden h-[50vh] md:h-[70vh]">
                <img :src="modalImage" :alt="modalName" class="max-w-full max-h-full object-contain">
            </div>

            <div class="p-5 md:p-6 bg-white border-t border-gray-200">
                <h3 class="font-black text-xl md:text-2xl text-[#003366] uppercase" x-text="modalName"></h3>
                <p class="text-gray-500 mt-2 font-medium flex items-center gap-2">
                    <i class="fa-solid fa-building-user text-[#E27121]"></i>
                    Chủ đầu tư: <span x-text="modalClient"></span>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection