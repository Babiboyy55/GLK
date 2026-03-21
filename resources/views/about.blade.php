@extends('layouts.app')

@section('content')
@php
$title = 'Về chúng tôi - Gia Lộc Khang';
@endphp

<section class="relative w-full h-[40vh] min-h-[300px] bg-[#003366] overflow-hidden">
    <img src="{{ asset('images/banner.jpg') }}" alt="Về Gia Lộc Khang" class="absolute inset-0 w-full h-full object-cover opacity-40">
    <div class="absolute inset-0 bg-gradient-to-t from-[#003366] to-transparent"></div>
    <div class="relative max-w-7xl mx-auto px-4 h-full flex flex-col justify-end pb-12">
        <p class="text-[#E27121] font-bold tracking-[0.3em] uppercase mb-2">Hồ Sơ Năng Lực</p>
        <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-wide">Về Chúng Tôi</h1>
    </div>
</section>

<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 grid gap-12 lg:grid-cols-2 items-center">
        <div class="space-y-6">
            <h4 class="text-[#E27121] font-bold uppercase tracking-widest text-sm">Câu chuyện phát triển</h4>
            <h2 class="text-[#003366] text-3xl md:text-4xl font-black uppercase leading-snug">
                Công ty TNHH Xây Dựng <br> <span class="text-[#E27121]">Gia Lộc Khang</span>
            </h2>
            <div class="w-20 h-1 bg-[#E27121]"></div>

            <p class="text-gray-600 leading-relaxed text-justify">
                Được thành lập ngày 06/03/2014 tại Ninh Thuận, <strong>Gia Lộc Khang</strong> đã có hơn 10 năm kinh nghiệm trong lĩnh vực thi công các công trình giao thông, hạ tầng kỹ thuật, thủy lợi và dân dụng.
            </p>
            <p class="text-gray-600 leading-relaxed text-justify">
                Với phương châm <strong>"Xây dựng uy tín - Kiến tạo bền vững"</strong>, chúng tôi luôn chú trọng đầu tư hệ thống trang thiết bị thi công cơ giới hiện đại cùng đội ngũ kỹ sư, công nhân viên lành nghề, tâm huyết. Gia Lộc Khang tự hào là đối tác tin cậy của nhiều Sở ban ngành và các Chủ đầu tư lớn tại khu vực Miền Trung cũng như trên toàn quốc.
            </p>

            <div class="flex items-center gap-4 pt-4">
                <div class="w-12 h-12 bg-[#003366] text-white rounded-full flex items-center justify-center text-xl shadow-lg">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-500 font-bold uppercase">Hotline Chỉ Huy Trưởng</p>
                    <p class="text-[#E27121] font-black text-xl">0984.31.31.31</p>
                </div>
            </div>
        </div>

        <figure class="relative rounded-lg overflow-hidden shadow-2xl group">
            <img src="{{ asset('images/Picture9.png') }}" onerror="this.src='{{ asset('images/banner.jpg') }}'" alt="Trụ sở Gia Lộc Khang" class="w-full h-[450px] object-cover group-hover:scale-105 transition duration-700">
            <div class="absolute inset-0 bg-[#003366]/20 group-hover:bg-transparent transition duration-500"></div>
            <figcaption class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#003366] to-transparent p-6 pt-12 text-white">
                <p class="font-bold text-lg">Trụ sở Công ty Gia Lộc Khang</p>
                <p class="text-sm opacity-80">Phan Rang - Ninh Thuận</p>
            </figcaption>
        </figure>
    </div>
</section>

<section class="py-16 md:py-20 bg-gray-50 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 grid gap-8 md:grid-cols-3">
        <div class="bg-white p-10 border-b-4 border-[#003366] shadow-sm hover:shadow-xl transition-shadow">
            <div class="w-16 h-16 bg-[#003366]/10 text-[#003366] rounded-full flex items-center justify-center text-2xl mb-6">
                <i class="fa-solid fa-eye"></i>
            </div>
            <h3 class="text-xl font-black text-[#003366] uppercase mb-4">Tầm Nhìn</h3>
            <p class="text-gray-600 leading-relaxed">
                Trở thành một trong những doanh nghiệp xây dựng hàng đầu tại khu vực, tiên phong trong việc áp dụng công nghệ mới để tối ưu tiến độ và nâng cao chất lượng công trình giao thông, hạ tầng.
            </p>
        </div>

        <div class="bg-white p-10 border-b-4 border-[#E27121] shadow-sm hover:shadow-xl transition-shadow transform md:-translate-y-4">
            <div class="w-16 h-16 bg-[#E27121]/10 text-[#E27121] rounded-full flex items-center justify-center text-2xl mb-6">
                <i class="fa-solid fa-bullseye"></i>
            </div>
            <h3 class="text-xl font-black text-[#E27121] uppercase mb-4">Sứ Mệnh</h3>
            <p class="text-gray-600 leading-relaxed">
                Kiến tạo những công trình bền vững với thời gian, đạt tiêu chuẩn kỹ thuật khắt khe nhất, góp phần thay đổi diện mạo đô thị và mang lại giá trị thiết thực cho cộng đồng.
            </p>
        </div>

        <div class="bg-white p-10 border-b-4 border-[#003366] shadow-sm hover:shadow-xl transition-shadow">
            <div class="w-16 h-16 bg-[#003366]/10 text-[#003366] rounded-full flex items-center justify-center text-2xl mb-6">
                <i class="fa-solid fa-gem"></i>
            </div>
            <h3 class="text-xl font-black text-[#003366] uppercase mb-4">Giá Trị Cốt Lõi</h3>
            <ul class="space-y-3 text-gray-600">
                <li class="flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[#E27121] text-xs"></i> <strong>Uy tín:</strong> Giữ vững cam kết với đối tác.</li>
                <li class="flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[#E27121] text-xs"></i> <strong>Chất lượng:</strong> Ưu tiên hàng đầu trong thi công.</li>
                <li class="flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[#E27121] text-xs"></i> <strong>An toàn:</strong> Kỷ luật lao động nghiêm ngặt.</li>
            </ul>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-[#003366] text-white overflow-hidden relative">
    <div class="absolute right-0 top-0 w-1/2 h-full bg-[#004080] opacity-50" style="clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h4 class="text-[#E27121] font-bold uppercase tracking-widest text-sm mb-2">Tiềm Lực Nội Tại</h4>
            <h2 class="text-3xl md:text-4xl font-black uppercase mb-8 leading-snug">
                Năng Lực Nhân Sự <br> & Trang Thiết Bị
            </h2>
            <div class="space-y-8">
                <div class="flex gap-5 items-start">
                    <div class="w-12 h-12 bg-[#E27121] shrink-0 flex items-center justify-center rounded-lg text-xl font-black shadow-lg">1</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Nhân sự chuyên môn cao</h3>
                        <p class="text-gray-300 leading-relaxed">Đội ngũ kỹ sư xây dựng, cầu đường tay nghề cao, được đào tạo bài bản, kết hợp cùng lực lượng công nhân lành nghề đáp ứng thi công 3 ca liên tục trong các giai đoạn nước rút.</p>
                    </div>
                </div>
                <div class="flex gap-5 items-start">
                    <div class="w-12 h-12 bg-[#E27121] shrink-0 flex items-center justify-center rounded-lg text-xl font-black shadow-lg">2</div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Máy móc thiết bị hiện đại</h3>
                        <p class="text-gray-300 leading-relaxed">Chủ động 100% thiết bị thi công cơ giới: máy xúc, máy ủi, xe lu, trạm trộn bê tông và các loại xe chuyên dụng, giúp tối ưu chi phí và không phụ thuộc vào thuê mướn.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('images/Picture5.png') }}" class="w-full h-48 md:h-60 object-cover rounded-lg shadow-lg hover:scale-105 transition duration-500" alt="Máy móc thiết bị">
            <img src="{{ asset('images/Picture6.png') }}" class="w-full h-48 md:h-60 object-cover rounded-lg shadow-lg mt-8 hover:scale-105 transition duration-500" alt="Thi công công trường">
            <img src="{{ asset('images/Picture7.png') }}" class="w-full h-48 md:h-60 object-cover rounded-lg shadow-lg -mt-8 hover:scale-105 transition duration-500" alt="Dự án cầu đường">
            <img src="{{ asset('images/Picture8.png') }}" onerror="this.src='{{ asset('images/banner.jpg') }}'" class="w-full h-48 md:h-60 object-cover rounded-lg shadow-lg hover:scale-105 transition duration-500" alt="Công nhân thi công">
        </div>
    </div>
</section>

<section class="py-16 md:py-20 bg-white border-t border-gray-100">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h4 class="text-[#E27121] font-bold uppercase tracking-widest text-sm mb-2">Hồ sơ pháp lý</h4>
        <h2 class="text-[#003366] text-3xl font-black uppercase mb-6">Chứng Chỉ Năng Lực Xây Dựng</h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            Gia Lộc Khang tự hào đáp ứng đầy đủ các tiêu chuẩn khắt khe nhất của Nhà nước về điều kiện năng lực hoạt động xây dựng trong các lĩnh vực giao thông, thủy lợi và dân dụng.
        </p>

        <a href="{{ asset('HSNL GiaLocKhang 2026.pdf') }}" target="_blank" class="inline-flex items-center gap-3 bg-[#003366] hover:bg-[#E27121] text-white font-bold uppercase py-4 px-10 rounded shadow-xl hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
            <i class="fa-solid fa-file-pdf text-2xl"></i> Xem & Tải Hồ Sơ Năng Lực (PDF)
        </a>
    </div>
</section>
@endsection