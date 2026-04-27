<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Try Out</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font (optional aman) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#FFF5F0] font-sans antialiased text-gray-800">

    <!-- Navbar -->
    <nav class="bg-[#FF7A47] px-6 py-4 flex justify-between items-center text-white shadow-md">
        <div class="text-2xl font-bold tracking-wider">LOGO</div>
        <div class="flex items-center gap-6">
            <span class="font-semibold cursor-pointer">raihASN</span>
            <div class="relative cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </div>
            <img src="https://ui-avatars.com/api/?name=User&background=0D8ABC&color=fff" class="w-10 h-10 rounded-full border-2 border-white" alt="Profile">
        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-6xl mx-auto px-4 py-6">

        <!-- Breadcrumb -->
        <p class="text-sm text-gray-500 mb-1">Home > Try Out</p>

        <!-- Title -->
        <h1 class="text-2xl font-bold mb-1">Try Out SKD</h1>
        <p class="text-gray-500 mb-6">
            Menguji pemahaman pelajar melalui soal dan try out
        </p>

        <!-- Search + Filter -->
        <div class="flex gap-3 mb-6">
            <input type="text" placeholder="Placeholder text..."
                class="w-full border rounded-lg px-4 py-2 outline-none focus:ring-2 focus:ring-[#FF7A47]">

            <button class="bg-blue-500 text-white px-4 rounded-lg">
                Filter
            </button>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

            @for ($i = 1; $i <= 10; $i++)
                <div class="border border-[#FF7A47] rounded-xl p-4 hover:shadow-lg transition">

                    <h2 class="font-semibold mb-2">
                        Try Out - {{ $i }}
                    </h2>

                    <!-- Badge -->
                    <span class="text-xs bg-gray-200 px-3 py-1 rounded-full">
                        Premium
                    </span>

                    <!-- Info -->
                    <div class="flex gap-4 text-xs text-gray-500 mt-3">
                        <span>📄 110 Soal</span>
                        <span>⏱ 100 Menit</span>
                    </div>

                    <!-- Button -->
                    <div class="flex gap-2 mt-4">
                        <button class="w-full bg-[#FF7A47] text-white py-2 rounded-lg hover:bg-[#FF7A47] transition">
                            Kerjakan
                        </button>
                        <button class="w-full bg-[#FF7A47] text-white py-2 rounded-lg hover:bg-[#FF7A47] transition">
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
    <footer class="bg-[#FF7A47] h-24"></footer>
</body>

</html>
