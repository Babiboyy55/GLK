@extends('layouts.app')

@section('content')
@php
// DATA DỊCH VỤ
$services = [
[
'title' => 'THI CÔNG CẦU ĐƯỜNG',
'desc' => 'Thi công các tuyến đường vành đai, cao tốc, quốc lộ và nút giao thông trọng điểm.',
'icon' => 'fa-bridge',
],
[
'title' => 'THI CÔNG HẠ TẦNG',
'desc' => 'San lấp mặt bằng, xây dựng hạ tầng khu dân cư, khu công nghiệp và hệ thống thủy lợi.',
'icon' => 'fa-city',
],
[
'title' => 'XÂY DỰNG DÂN DỤNG',
'desc' => 'Thi công nhà ở, công trình thương mại, đảm bảo an toàn, chất lượng và tiến độ.',
'icon' => 'fa-building',
],
];

// DATA DỰ ÁN TỪ HSNL
$portfolioProjects = [
[
'name' => 'Đường Vành Đai Phía Bắc',
'image' => '/images/Picture5.png',
'tag' => 'Giao thông'
],
[
'name' => 'KĐT Biển Bình Sơn Ninh Chữ',
'image' => '/images/Picture6.png',
'tag' => 'Hạ tầng'
],
[
'name' => 'Nhà Máy Điện Phước Thái',
'image' => '/images/Picture7.png',
'tag' => 'Công nghiệp'
],
[
'name' => 'Cải Tạo Tuyến Tránh QL.1',
'image' => '/images/Picture5.png',
'tag' => 'Giao thông'
],
[
'name' => 'Hệ Thống Thủy Lợi Sông Cái',
'image' => '/images/Picture6.png',
'tag' => 'Thủy lợi'
],
];
@endphp

<style>
    .custom-scrollbar::-webkit-scrollbar {
        height: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: #f1f5f9;
        border-radius: 10px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #003366;
        border-radius: 10px;
        cursor: pointer;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #E27121;
    }

    html {
        scroll-behavior: smooth;
    }

    /* Hỗ trợ cuộn mượt khi bấm menu */
</style>

<section class="relative w-full h-[85vh] min-h-[600px] bg-[#003366] overflow-hidden">
    <img src="{{ asset('images/banner.jpg') }}" alt="Gia Lộc Khang Banner" class="absolute inset-0 w-full h-full object-cover opacity-70">
    <div class="absolute inset-0 bg-gradient-to-r from-[#003366] via-[#003366]/80 to-transparent"></div>

    <div class="relative max-w-7xl mx-auto px-4 h-full flex items-center">
        <div class="max-w-3xl text-white">
            <p class="text-sm md:text-base font-bold tracking-[0.3em] uppercase mb-4 border-l-4 border-[#E27121] pl-4">
                Công ty TNHH Xây Dựng Gia Lộc Khang
            </p>
            <h1 class="text-4xl md:text-6xl font-black uppercase leading-[1.4] md:leading-[1.5] tracking-wide mb-6 pb-2 italic">
                XÂY DỰNG <span class="text-[#E27121]">UY TÍN -</span> <br>
                <span class="text-[#E27121]"> KIẾN TẠO BỀN </span>VỮNG
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
                GIẢI PHÁP TỐT NHẤT CHO GIAO THÔNG & CÔNG TRÌNH.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#phan-du-an" class="bg-[#E27121] hover:bg-orange-600 text-white font-bold uppercase py-3 px-8 rounded transition duration-300">
                    Xem Dự Án
                </a>
                <a href="/lien-he" class="bg-transparent border-2 border-white hover:bg-white hover:text-[#003366] text-white font-bold uppercase py-3 px-8 rounded transition duration-300">
                    Liên Hệ Ngay
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#003366] text-white border-b-4 border-[#E27121] sticky top-[72px] z-40 shadow-lg hidden md:block">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-3 text-center divide-x divide-white/20">
        <a href="#phan-gioi-thieu" class="py-4 font-bold uppercase tracking-wider hover:bg-white/10 transition">Về Chúng Tôi</a>
        <a href="#phan-dich-vu" class="py-4 font-bold uppercase tracking-wider hover:bg-white/10 transition">Lĩnh Vực Hoạt Động</a>
        <a href="#phan-du-an" class="py-4 font-bold uppercase tracking-wider hover:bg-white/10 transition">Dự Án Tiêu Biểu</a>
    </div>
</section>

<section id="phan-gioi-thieu" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <h4 class="text-[#E27121] font-bold uppercase tracking-widest text-sm">Về Gia Lộc Khang</h4>
            <h2 class="text-[#003366] text-3xl md:text-4xl font-black uppercase leading-tight">
                Nền tảng vững chắc <br> cho mọi công trình
            </h2>
            <p class="text-gray-600 leading-relaxed text-justify">
                Được thành lập từ năm 2014, Công ty TNHH Xây dựng Gia Lộc Khang đã nhanh chóng khẳng định vị thế trong lĩnh vực thi công hạ tầng giao thông, thủy lợi và dân dụng.
            </p>
            <p class="text-gray-600 leading-relaxed text-justify">
                Sở hữu đội ngũ kỹ sư lành nghề cùng hệ thống máy móc, thiết bị thi công cơ giới hiện đại, chúng tôi cam kết mang đến những công trình đạt chuẩn kỹ thuật, đúng tiến độ và an toàn tuyệt đối cho các Chủ đầu tư.
            </p>
            <ul class="space-y-3 mt-4 text-[#003366] font-semibold">
                <li class="flex items-center gap-3"><i class="fa-solid fa-check text-[#E27121]"></i> Cam kết chất lượng & tiến độ</li>
                <li class="flex items-center gap-3"><i class="fa-solid fa-check text-[#E27121]"></i> Năng lực thiết bị hiện đại</li>
                <li class="flex items-center gap-3"><i class="fa-solid fa-check text-[#E27121]"></i> Đội ngũ nhân sự chuyên môn cao</li>
            </ul>
        </div>
        <div class="grid grid-cols-2 gap-6">
            <div class="bg-gray-50 border-t-4 border-[#003366] p-8 text-center shadow-sm hover:shadow-md transition">
                <div class="text-5xl font-black text-[#003366] mb-2">10+</div>
                <div class="text-gray-500 font-bold uppercase text-sm tracking-wide">Năm Kinh Nghiệm</div>
            </div>
            <div class="bg-gray-50 border-t-4 border-[#E27121] p-8 text-center shadow-sm hover:shadow-md transition mt-6">
                <div class="text-5xl font-black text-[#003366] mb-2">23+</div>
                <div class="text-gray-500 font-bold uppercase text-sm tracking-wide">Dự Án Tiêu Biểu</div>
            </div>
            <div class="bg-gray-50 border-t-4 border-[#E27121] p-8 text-center shadow-sm hover:shadow-md transition -mt-6">
                <div class="text-5xl font-black text-[#003366] mb-2">150+</div>
                <div class="text-gray-500 font-bold uppercase text-sm tracking-wide">Nhân Sự & Kỹ Sư</div>
            </div>
            <div class="bg-gray-50 border-t-4 border-[#003366] p-8 text-center shadow-sm hover:shadow-md transition">
                <div class="text-5xl font-black text-[#003366] mb-2">100%</div>
                <div class="text-gray-500 font-bold uppercase text-sm tracking-wide">Đảm Bảo Tiến Độ</div>
            </div>
        </div>
    </div>
</section>

<section id="phan-dich-vu" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h4 class="text-[#E27121] font-bold uppercase tracking-widest text-sm mb-2">Dịch Vụ Cốt Lõi</h4>
            <h2 class="text-[#003366] text-3xl md:text-4xl font-black uppercase">LĨNH VỰC HOẠT ĐỘNG</h2>
            <div class="w-24 h-1 bg-[#E27121] mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($services as $service)
            <div class="bg-white p-10 text-center border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300 group">
                <div class="w-20 h-20 mx-auto bg-[#003366] text-white rounded-full flex items-center justify-center text-3xl mb-6 group-hover:bg-[#E27121] transition-colors">
                    <i class="fa-solid {{ $service['icon'] }}"></i>
                </div>
                <h3 class="text-xl font-black text-[#003366] uppercase mb-4 tracking-wide">{{ $service['title'] }}</h3>
                <p class="text-gray-600">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="phan-du-an" class="py-20 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap items-end justify-between mb-12 gap-4">
            <div>
                <h4 class="text-[#E27121] font-bold uppercase tracking-widest text-sm mb-2">Hồ Sơ Năng Lực</h4>
                <h2 class="text-[#003366] text-3xl md:text-4xl font-black uppercase">DỰ ÁN TIÊU BIỂU</h2>
            </div>
            <a href="/du-an" class="text-[#003366] font-bold hover:text-[#E27121] flex items-center gap-2 transition">
                Xem toàn bộ dự án <i class="fa-solid fa-arrow-right-long"></i>
            </a>
        </div>

        <div class="relative group" data-carousel>
            <button type="button" class="absolute -left-5 top-1/2 -translate-y-1/2 z-10 h-12 w-12 rounded-full bg-[#003366] text-white shadow-xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-[#E27121]" data-carousel-prev>
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <button type="button" class="absolute -right-5 top-1/2 -translate-y-1/2 z-10 h-12 w-12 rounded-full bg-[#003366] text-white shadow-xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-[#E27121]" data-carousel-next>
                <i class="fa-solid fa-chevron-right"></i>
            </button>

            <div class="flex flex-nowrap gap-6 overflow-x-auto snap-x snap-mandatory custom-scrollbar cursor-grab scroll-smooth pb-6" data-carousel-track>
                @foreach ($portfolioProjects as $project)
                <div class="flex-none w-[85%] md:w-[400px] snap-start group/item cursor-pointer">
                    <div class="relative overflow-hidden rounded-t-lg">
                        <img src="{{ $project['image'] }}" alt="{{ $project['name'] }}" class="w-full h-[250px] object-cover group-hover/item:scale-110 transition duration-700 pointer-events-none">
                        <div class="absolute top-4 left-4 bg-[#E27121] text-white text-xs font-bold px-3 py-1 uppercase rounded-sm shadow">
                            {{ $project['tag'] }}
                        </div>
                    </div>
                    <div class="bg-[#003366] text-white p-5 rounded-b-lg border-t-4 border-[#E27121]">
                        <h3 class="font-bold text-lg uppercase truncate">{{ $project['name'] }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section id="phan-tin-tuc" class="py-20 bg-gray-50 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h4 class="text-[#E27121] font-bold uppercase tracking-widest text-sm mb-2">Cập nhật mới nhất</h4>
            <h2 class="text-[#003366] text-3xl md:text-4xl font-black uppercase">TIN TỨC HOẠT ĐỘNG</h2>
            <div class="w-24 h-1 bg-[#E27121] mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white shadow-sm border border-gray-100 group overflow-hidden cursor-pointer">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/Picture7.png') }}" class="w-full h-[300px] object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 md:p-8">
                    <div class="text-[#E27121] text-sm font-bold mb-3"><i class="fa-regular fa-calendar-days mr-2"></i> 20/07/2024</div>
                    <h3 class="text-2xl font-bold text-[#003366] mb-4 hover:text-[#E27121] transition">Khởi công dự án Đường vành đai phía Bắc Ninh Thuận</h3>
                    <p class="text-gray-600 line-clamp-3">Gia Lộc Khang vinh dự được chọn làm nhà thầu thi công gói hạ tầng giao thông trọng điểm, kết nối tuyến quốc lộ 27...</p>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <div class="flex bg-white shadow-sm border border-gray-100 group overflow-hidden cursor-pointer h-full">
                    <div class="w-2/5 overflow-hidden">
                        <img src="{{ asset('images/Picture5.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="w-3/5 p-5 flex flex-col justify-center">
                        <div class="text-[#E27121] text-xs font-bold mb-2"><i class="fa-regular fa-calendar-days mr-2"></i> 15/06/2024</div>
                        <h3 class="text-lg font-bold text-[#003366] mb-2 hover:text-[#E27121] transition line-clamp-2">Đẩy nhanh tiến độ thi công trước mùa mưa bão</h3>
                    </div>
                </div>

                <div class="flex bg-white shadow-sm border border-gray-100 group overflow-hidden cursor-pointer h-full">
                    <div class="w-2/5 overflow-hidden">
                        <img src="{{ asset('images/Picture6.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="w-3/5 p-5 flex flex-col justify-center">
                        <div class="text-[#E27121] text-xs font-bold mb-2"><i class="fa-regular fa-calendar-days mr-2"></i> 10/05/2024</div>
                        <h3 class="text-lg font-bold text-[#003366] mb-2 hover:text-[#E27121] transition line-clamp-2">Nghiệm thu đưa vào sử dụng công trình KCN Thành Hải</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousels = document.querySelectorAll('[data-carousel]');

        carousels.forEach(carousel => {
            const track = carousel.querySelector('[data-carousel-track]');
            const btnPrev = carousel.querySelector('[data-carousel-prev]');
            const btnNext = carousel.querySelector('[data-carousel-next]');

            if (!track) return;

            const updateButtons = () => {
                if (!btnPrev || !btnNext) return;
                const maxScrollLeft = track.scrollWidth - track.clientWidth;

                if (track.scrollLeft <= 5) {
                    btnPrev.classList.add('hidden');
                } else {
                    btnPrev.classList.remove('hidden');
                }

                if (Math.ceil(track.scrollLeft) >= maxScrollLeft - 5) {
                    btnNext.classList.add('hidden');
                } else {
                    btnNext.classList.remove('hidden');
                }
            };

            if (btnPrev) {
                btnPrev.addEventListener('click', () => {
                    track.scrollBy({
                        left: -(track.clientWidth * 0.8),
                        behavior: 'smooth'
                    });
                });
            }

            if (btnNext) {
                btnNext.addEventListener('click', () => {
                    track.scrollBy({
                        left: track.clientWidth * 0.8,
                        behavior: 'smooth'
                    });
                });
            }

            let isDown = false;
            let startX;
            let scrollLeft;

            track.addEventListener('mousedown', (e) => {
                isDown = true;
                track.classList.add('cursor-grabbing');
                track.classList.remove('cursor-grab');
                track.style.scrollBehavior = 'auto';
                startX = e.pageX - track.offsetLeft;
                scrollLeft = track.scrollLeft;
            });

            track.addEventListener('mouseleave', () => {
                isDown = false;
                track.classList.remove('cursor-grabbing');
                track.classList.add('cursor-grab');
                track.style.scrollBehavior = 'smooth';
            });

            track.addEventListener('mouseup', () => {
                isDown = false;
                track.classList.remove('cursor-grabbing');
                track.classList.add('cursor-grab');
                track.style.scrollBehavior = 'smooth';
            });

            track.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - track.offsetLeft;
                const walk = (x - startX) * 2;
                track.scrollLeft = scrollLeft - walk;
            });

            track.addEventListener('scroll', updateButtons);
            window.addEventListener('resize', updateButtons);
            updateButtons();
        });
    });
</script>
@endsection