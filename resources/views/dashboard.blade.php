<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FFF5F0] font-sans antialiased text-gray-800">

    <!-- Navbar -->
    <nav class="bg-[#FF7A47] px-6 py-4 flex justify-between items-center text-white shadow-md">
        <div class="text-2xl font-bold tracking-wider">LOGO</div>
        <div class="flex items-center gap-6">
            <span class="font-semibold cursor-pointer">raihASN</span>
            <div class="relative cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </div>
            <img src="https://ui-avatars.com/api/?name=User&background=0D8ABC&color=fff"
                class="w-10 h-10 rounded-full border-2 border-white" alt="Profile">
        </div>
    </nav>

    <div class="max-w-7xl mx-auto mt-6 px-4">

        <!-- Welcome -->
        <h2 class=" text-2xl font-bold mb-6">Selamat Datang Kembali</h2>
        <h1 class="text-5xl font-bold mb-6">Mustafa</h1>

        <!-- Banner -->
        <div class="swiper rounded-xl overflow-hidden mb-6">

            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="relative w-full aspect-[16/4]">
                        <img src="https://picsum.photos/1200/500?1" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="w-full aspect-[16/4]">
                        <img src="https://picsum.photos/1200/500?2" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="w-full aspect-[16/4]">
                        <img src="https://picsum.photos/1200/500?3" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>
        </div>


        <!-- Menu -->
        <div
            class="bg-[#FF7A47] rounded-xl shadow-lg p-8 grid grid-cols-4 text-center text-white mb-8 max-w-5xl mx-auto">
            <div>
                <a href="/tryout">
                    <div class="text-3xl">📘</div>
                    <p>Try Out</p>
                </a>

            </div>
            <div>
                <div class="text-3xl">⏱️</div>
                <p>Riwayat</p>
            </div>
            <div>
                <div class="text-3xl">📋</div>
                <p>Review</p>
            </div>
            <div>
                <div class="text-3xl">📚</div>
                <p>Materi</p>
            </div>
        </div>

        <!-- Leaderboard -->
        <h2 class="text-center text-xl font-semibold mb-4">Leaderboard</h2>

        <!-- Filter Tabs -->
        <div class="flex justify-center gap-3 mb-4">
            <button class="bg-[#FF7A47] text-white px-4 py-1 rounded-full">Harian</button>
            <button class="border border-[#FF7A47] text-[#FF7A47] px-4 py-1 rounded-full">Mingguan</button>
            <button class="border border-[#FF7A47] text-[#FF7A47] px-4 py-1 rounded-full">Bulanan</button>
        </div>

        <!-- List -->
        <div class="space-y-3 mb-12 max-w-6xl mx-auto">

            <!-- Item -->
            <div class="bg-white rounded-xl shadow p-4 flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <span class="font-bold">1</span>
                    <div>
                        <p class="font-semibold">Nama User</p>
                        <p class="text-sm text-gray-500">Alamat - Detail User</p>
                    </div>
                </div>
                <button class="bg-[#FF7A47] text-white px-4 py-1 rounded-lg text-sm">
                    Detail
                </button>
            </div>

            <div class="bg-white rounded-xl shadow p-4 flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <span class="font-bold">2</span>
                    <div>
                        <p class="font-semibold">Nama User</p>
                        <p class="text-sm text-gray-500">Alamat - Detail User</p>
                    </div>
                </div>
                <button class="bg-[#FF7A47] text-white px-4 py-1 rounded-lg text-sm">
                    Detail
                </button>
            </div>
        </div>
    </div>

    <!-- PAKET BELAJAR -->

    <section class="border border-[#FF7A47] rounded-2xl p-8 mb-12 max-w-4xl mx-auto">
        <h2 class="text-center text-lg font-semibold mb-8">Paket Belajar</h2>

        <div class="grid md:grid-cols-2 gap-10 max-w-3xl mx-auto">

            <!-- Guest -->
            <div class="bg-[#FF7A47] rounded-xl p-3 shadow-md">
                <div class="bg-white rounded-lg p-4">
                    <h3>Guest</h3>
                    <p class="text-3xl font-bold">Rp 0</p>
                    <button class="mt-3 bg-[#FF7A47] text-white text-xs px-5 py-1 rounded-full">
                        Purchase
                    </button>
                </div>

                <ul class="text-white mt-4 text-sm space-y-1 list-disc list-inside">
                    <li>a</li>
                    <li>b</li>
                    <li>c</li>
                    <li>d</li>
                    <li>e</li>
                    <li>f</li>
                </ul>
            </div>

            <!-- Premium -->
            <div class="bg-[#FF7A47] rounded-xl p-3 shadow-md">
                <div class="bg-white rounded-lg p-4">
                    <h3>Premium</h3>
                    <p class="text-3xl font-bold">Rp 90.000</p>
                    <button class="mt-3 bg-[#FF7A47] text-white text-xs px-5 py-1 rounded-full">
                        Purchase
                    </button>
                </div>

                <ul class="text-white mt-4 text-sm space-y-1 list-disc list-inside">
                    <li>a</li>
                    <li>b</li>
                    <li>c</li>
                    <li>d</li>
                    <li>e</li>
                    <li>f</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- ARTIKEL -->
    <section class="mb-12 max-w-4xl mx-auto">
        <h2 class="text-center text-lg font-semibold mb-6">Artikel</h2>

        <div class="space-y-4 max-h-[505px] overflow-y-auto pr-2 pb-4">
            @for ($i = 1; $i <= 5; $i++)
                <div class="bg-white border rounded-xl p-4 flex gap-4 shadow-sm">
                    <div class="w-20 h-20 bg-gray-200 rounded-md"></div>
                    <div>
                        <p class="text-xs text-gray-500">Tanggal</p>
                        <h3 class="font-semibold">Judul Artikel</h3>
                        <p class="text-sm text-gray-600">Isi Artikel</p>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    </div>

    <!-- Footer -->
    <footer class="bg-[#FF7A47] h-24"></footer>
</body>

</html>
