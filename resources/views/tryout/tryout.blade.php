<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Try Out</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#FFF9F5] antialiased text-gray-800" style="font-family: 'Poppins', sans-serif;">

    @include('components.sidebar')
    @include('components.navbar')

    <!-- OVERLAY -->
    <div id="overlay" class="fixed inset-0 bg-black/40 z-40 hidden opacity-0 transition-opacity duration-300">
    </div>


    <!-- Content -->
    <div class="max-w-6xl mx-auto p-6 mt-4 pt-20">

        <!-- Breadcrumb -->
        <p class="text-sm text-gray-500 mb-1">Home > Try Out</p>

        <!-- Title -->
        <h1 class="text-4xl font-bold mb-1">Try Out SKD</h1>
        <p class="font-semibold mb-6">
            Menguji pemahaman pelajar melalui soal dan try out
        </p>

        <!-- Search + Filter -->
        <div class="flex gap-3 mb-6">
            <input type="text" placeholder="Cari..."
                class="w-full border border-2 rounded-lg px-4 py-2 outline-none focus:ring-2 focus:ring-[#FF7A47]">

            <button class="bg-blue-500 text-white px-4 rounded-lg">
                Filter
            </button>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

            @for ($i = 1; $i <= 10; $i++)
                <div class="border border-2 border-[#FF7A47] rounded-xl p-4 hover:shadow-lg transition">

                    <h2 class="font-semibold mb-2">
                        Try Out - {{ $i }}
                    </h2>

                    <!-- Badge -->
                    <span class="text-xs bg-gray-200 px-3 py-1 rounded-full">
                        Premium
                    </span>

                    <!-- Info -->
                    <div class="flex gap-4 text-xs text-gray-500 mt-3">
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                            110 Soal</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            100 Menit</span>
                    </div>

                    <!-- Button -->
                    <div class="flex gap-2 mt-4">
                        <a href="{{ route('prepare') }}"
                            class="w-full bg-[#FF7A47] text-center text-white py-2 rounded-lg hover:bg-[#f06b38] transition">
                            Kerjakan
                        </a>
                        <button id="openRanking"
                            class="w-full bg-[#FF7A47] text-center text-white py-2 rounded-lg hover:bg-[#f06b38] transition">
                            Ranking
                    </button>
                    </div>

                </div>
            @endfor

        </div>

        <!-- Load More -->
        <div class="text-center mt-6">
            <button class="text-[#FF7A47] font-semibold">
                Lihat Lebih Banyak ↓
            </button>
        </div>

    </div>
    @include('components.footer')
    @include('components.ranking')
</body>

</html>
