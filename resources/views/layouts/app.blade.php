<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Gia Lộc Khang' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=be-vietnam-pro:300,400,500,600,700,800&family=fraunces:400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800 font-['Be_Vietnam_Pro']">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:bg-white focus:px-4 focus:py-2 focus:rounded-full">
        Bỏ qua nội dung điều hướng
    </a>

    <div class="min-h-screen flex flex-col">
        <header class="sticky top-0 z-40 bg-white shadow-md border-b border-gray-100">
            <div class="mx-auto w-full max-w-7xl px-4 flex items-center justify-between py-2">

                <a href="/" class="flex items-center gap-1 md:gap-2">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Gia Lộc Khang" class="h-14 md:h-[70px] w-auto object-contain">

                    <div class="flex flex-col items-start justify-center mt-1">
                        <span class="text-[11px] md:text-[13px] font-black uppercase text-[#E27121] tracking-wide pl-4 md:pl-5 mb-0.5 leading-none">
                            Công ty xây dựng
                        </span>

                        <div class="bg-[#003366] text-white pl-4 md:pl-5 pr-4 md:pr-6 py-1.5 text-base md:text-[22px] font-black uppercase tracking-[0.15em] leading-none"
                            style="clip-path: polygon(10px 0, 100% 0, 100% 100%, 0 100%);">
                            Gia Lộc Khang
                        </div>
                    </div>
                </a>

                <div class="hidden lg:flex flex-col items-end gap-2">
                    <div class="flex items-center gap-2 text-[#003366] font-bold text-sm pr-1">
                        <svg class="w-4 h-4 text-[#E27121]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                        </svg>
                        0934 567 890
                    </div>

                    <nav class="flex items-center gap-6 text-[13px] font-bold uppercase tracking-wider text-[#003366]">
                        <a href="/" class="hover:text-[#E27121] transition-colors duration-200">Trang chủ</a>
                        <a href="/gioi-thieu" class="hover:text-[#E27121] transition-colors duration-200">Giới thiệu</a>
                        <a href="/dich-vu" class="hover:text-[#E27121] transition-colors duration-200">Dịch vụ</a>
                        <a href="/du-an" class="hover:text-[#E27121] transition-colors duration-200">Dự án</a>
                        <a href="/tin-tuc" class="hover:text-[#E27121] transition-colors duration-200">Tin tức</a>
                        <a href="/lien-he" class="hover:text-[#E27121] transition-colors duration-200">Liên hệ</a>
                    </nav>
                </div>

                <div class="lg:hidden flex items-center pr-2">
                    <button class="text-[#003366] hover:text-[#E27121] focus:outline-none" aria-label="Mở menu" data-menu-toggle>
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div id="mobile-nav" class="lg:hidden hidden border-t border-gray-100 bg-white shadow-inner" data-menu-target>
                <div class="px-5 py-4 flex flex-col gap-4 text-sm font-bold uppercase tracking-wider text-[#003366]">
                    <a href="/" class="hover:text-[#E27121]">Trang chủ</a>
                    <a href="/gioi-thieu" class="hover:text-[#E27121]">Giới thiệu</a>
                    <a href="/dich-vu" class="hover:text-[#E27121]">Dịch vụ</a>
                    <a href="/du-an" class="hover:text-[#E27121]">Dự án</a>
                    <a href="/tin-tuc" class="hover:text-[#E27121]">Tin tức</a>
                    <a href="/lien-he" class="hover:text-[#E27121]">Liên hệ</a>
                </div>
            </div>
        </header>

        <main id="main-content" class="flex-1">
            @yield('content')
        </main>

        <footer class="relative bg-[#003366] overflow-hidden text-white mt-12 font-['Be_Vietnam_Pro']">
            <div class="absolute inset-0 z-0 pointer-events-none opacity-40">
                <div class="absolute right-0 bottom-0 w-[60%] h-full bg-[#004a99]" style="clip-path: polygon(15% 0, 100% 0, 100% 100%, 0 100%);"></div>
                <div class="absolute right-0 bottom-0 w-[55%] h-full bg-[#005bb5] opacity-50" style="clip-path: polygon(20% 0, 100% 0, 100% 100%, 0 100%);"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 py-10 md:py-16 grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="flex flex-col space-y-6 md:pr-10">
                    <h3 class="font-bold uppercase tracking-wider text-[18px]">
                        LIÊN HỆ VỚI CHÚNG TÔI
                    </h3>

                    <div class="flex flex-col space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-9 h-9 shrink-0 rounded-full bg-[#E27121] flex items-center justify-center shadow">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                </svg>
                            </div>
                            <div class="text-sm tracking-wide">0934 567 890</div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-9 h-9 shrink-0 rounded-full bg-[#E27121] flex items-center justify-center shadow">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                </svg>
                            </div>
                            <div class="text-sm tracking-wide">info@gialockhang.vn</div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-9 h-9 shrink-0 rounded-full bg-[#E27121] flex items-center justify-center shadow">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.09 13.36 4 12.69 4 12s.09-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c1.96-1.66 3.49-2.93 5.33-3.56C9.81 5.55 9.35 6.75 9.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.17.64.26 1.31.26 2s-.09 1.36-.26 2h-3.38z" />
                                </svg>
                            </div>
                            <div class="text-sm tracking-wide">www.gialockhang.vn</div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center">
                    <div class="flex flex-col w-full md:w-4/5 md:ml-auto">
                        <div class="flex items-center gap-4 py-3 border-b border-white/20">
                            <div class="w-6 shrink-0 flex justify-center text-[#E27121]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                </svg>
                            </div>
                            <div class="text-sm tracking-wide">0934 567 890</div>
                        </div>

                        <div class="flex items-center gap-4 py-3 border-b border-white/20">
                            <div class="w-6 shrink-0 flex justify-center text-[#E27121]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                </svg>
                            </div>
                            <div class="text-sm tracking-wide">info@gialockhang.vn</div>
                        </div>

                        <div class="flex items-center gap-4 py-3 border-b border-white/20">
                            <div class="w-6 shrink-0 flex justify-center text-[#E27121]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                </svg>
                            </div>
                            <div class="text-sm tracking-wide leading-relaxed">Địa chỉ: Phan Rang - Ninh Thuận</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative z-10 bg-[#001f4d] py-3 text-center">
                <p class="text-white/60 text-[12px] tracking-wide">
                    &copy; 2024 Gia Lộc Khang. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
</body>

</html>