<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#FFF9F5] antialiased text-gray-800" style="font-family: 'Poppins', sans-serif;">

    @include('components.sidebar')
    @include('components.navbar')

    <!-- OVERLAY -->
    <div id="overlay" class="fixed inset-0 bg-black/40 z-40 hidden opacity-0 transition-opacity duration-300">
    </div>

    {{-- MAIN --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">

        <!-- WELCOME -->
        <div class="mb-6 text-center lg:text-left">

            <h2 class="text-xl sm:text-2xl font-bold text-gray-700">
                Selamat Datang Kembali
            </h2>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mt-2">
                Mustafa
            </h1>

        </div>

        <!-- BANNER -->
        <div class="swiper rounded-2xl overflow-hidden mb-8 shadow-lg">

            <div class="swiper-wrapper">

                <!-- SLIDE -->
                <div class="swiper-slide">
                    <div class="relative w-full h-[180px] sm:h-[260px] md:h-[320px] lg:h-[380px]">

                        <img src="https://picsum.photos/1200/500?1" class="w-full h-full object-cover">

                    </div>
                </div>

                <!-- SLIDE -->
                <div class="swiper-slide">
                    <div class="relative w-full h-[180px] sm:h-[260px] md:h-[320px] lg:h-[380px]">

                        <img src="https://picsum.photos/1200/500?2" class="w-full h-full object-cover">

                    </div>
                </div>

                <!-- SLIDE -->
                <div class="swiper-slide">
                    <div class="relative w-full h-[180px] sm:h-[260px] md:h-[320px] lg:h-[380px]">

                        <img src="https://picsum.photos/1200/500?3" class="w-full h-full object-cover">

                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

        <!-- MENU -->
        <div class="flex justify-center mb-10">

            <div
                class="bg-[#FF7A47] rounded-3xl shadow-xl px-3 sm:px-6 py-4 sm:py-6 grid grid-cols-3 gap-2 sm:gap-6 w-full max-w-3xl text-white">

                <!-- ITEM -->
                <a href="{{ route('tryout') }}"
                    class="flex flex-col items-center justify-center hover:scale-105 transition">

                    <div class="flex justify-center mb-3">

                        <img src="{{ asset('images/BookPencil.png') }}" alt="Bookpencil" class="w-7 sm:w-10">

                    </div>

                    <p class="text-sm sm:text-base font-medium text-center">
                        Try Out
                    </p>

                </a>

                <!-- ITEM -->
                <div class="flex flex-col items-center justify-center hover:scale-105 transition cursor-pointer">

                    <div class="flex justify-center mb-3">

                        <img src="{{ asset('images/Time.png') }}" alt="Time" class="w-7 sm:w-10">

                    </div>

                    <p class="text-sm sm:text-base font-medium text-center">
                        Riwayat
                    </p>

                </div>

                <!-- ITEM -->
                <div class="flex flex-col items-center justify-center hover:scale-105 transition cursor-pointer">

                    <div class="flex justify-center mb-3">

                        <img src="{{ asset('images/Rules.png') }}" alt="Rules" class="w-7 sm:w-10">

                    </div>

                    <p class="text-sm sm:text-base font-medium text-center">
                        Materi
                    </p>

                </div>

            </div>

        </div>

        <!-- LEADERBOARD -->
        <div class="max-w-5xl mx-auto">

            <h2 class="text-center text-2xl font-bold mb-5">
                Leaderboard
            </h2>

            {{-- Filter --}}
            <div class="flex flex-wrap justify-center gap-3 mb-6">

                <button
                    class="leaderboard-btn bg-[#FF7A47] text-white px-5 py-2 rounded-full text-sm sm:text-base hover:scale-105 transition cursor-pointer">
                    Harian
                </button>

                <button
                    class="leaderboard-btn border border-[#FF7A47] text-[#FF7A47] px-5 py-2 rounded-full text-sm sm:text-base hover:scale-105 transition cursor-pointer">
                    Mingguan
                </button>

                <button
                    class="leaderboard-btn border border-[#FF7A47] text-[#FF7A47] px-5 py-2 rounded-full text-sm sm:text-base hover:scale-105 transition cursor-pointer">
                    Bulanan
                </button>

            </div>
            <!-- LIST -->
            <div class="space-y-4">

                <!-- ITEM -->
                <div
                    class="bg-white rounded-2xl shadow-md p-4 sm:p-5
                flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                    <div class="flex items-center gap-4">

                        <span class="font-bold text-lg sm:text-xl">
                            1
                        </span>

                        <div>

                            <p class="font-semibold text-sm sm:text-base">
                                Nama User
                            </p>

                            <p class="text-xs sm:text-sm text-gray-500">
                                Alamat - Detail User
                            </p>

                        </div>

                    </div>

                    <button
                        class="bg-[#FF7A47] hover:bg-[#f06b38]
                    text-white px-5 py-2 rounded-xl text-sm transition
                    w-full sm:w-auto">

                        Detail

                    </button>

                </div>

                <!-- ITEM -->
                <div
                    class="bg-white rounded-2xl shadow-md p-4 sm:p-5
                flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                    <div class="flex items-center gap-4">

                        <span class="font-bold text-lg sm:text-xl">
                            2
                        </span>

                        <div>

                            <p class="font-semibold text-sm sm:text-base">
                                Nama User
                            </p>

                            <p class="text-xs sm:text-sm text-gray-500">
                                Alamat - Detail User
                            </p>

                        </div>

                    </div>

                    <button
                        class="bg-[#FF7A47] hover:bg-[#f06b38]
                    text-white px-5 py-2 rounded-xl text-sm transition
                    w-full sm:w-auto">

                        Detail

                    </button>

                </div>

            </div>

        </div>

    </div>
    @include('components.footer')
</body>

</html>
