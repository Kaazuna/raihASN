<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Bank Soal</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/admin.js'])

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#F3F3F3]" style="font-family: 'Poppins', sans-serif;">

    <!-- SIDEBAR -->
    @include('components.sideadmin')

    <!-- MOBILE NAVBAR -->
    <div
        class="lg:hidden fixed top-0 left-0 w-full h-16 z-40 bg-[#FF6A26] shadow-md px-4 flex items-center justify-between">

        <div class="flex items-center gap-3">

            <!-- BUTTON -->
            <button id="openSidebar" class="p-2 rounded-lg hover:bg-white/20 transition">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-white">

                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />

                </svg>

            </button>
            <!-- TITLE -->
            <h1 class="text-lg font-semibold text-white">
                Manajemen Bank Soal
            </h1>
        </div>
    </div>
    <!-- CONTENT -->
    <main class="lg:ml-64 min-h-screen p-4 sm:p-6 lg:p-8 mt-16 lg:mt-0">

        <!-- BREADCRUMB -->
        <div class="text-sm text-gray-500 mb-2">
            Home > Manajemen Bank Soal
        </div>

        <!-- TITLE -->
        <h1 class="text-4xl font-bold mb-6">
            BANK SOAL
        </h1>

        <!-- ACTION -->
        <div class="flex items-center justify-between mb-5">

            <!-- BUTTON -->
            <button
                class="bg-[#FF6B1A] hover:bg-[#eb5f12] text-white px-6 py-2 rounded-xl shadow-md hover:shadow-lg transition">
                Tambah Soal
            </button>

        </div>

        <!-- SEARCH -->
        <div class="flex gap-3 mb-6">

            <!-- INPUT -->
            <div class="relative flex-1">

                <input type="text" placeholder="Cari Bank Soal...."
                    class="w-full bg-white rounded-xl shadow px-10 py-3 outline-none focus:ring-2 focus:ring-orange-300">

                <!-- ICON -->
                <div class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>

                </div>

            </div>

            <!-- FILTER -->
            <button class="bg-blue-400 hover:bg-blue-500 text-white px-5 rounded-xl shadow transition">
                Filter
            </button>

        </div>

        <!-- CARD -->
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">

            <!-- TAB -->
            <div class="grid grid-cols-3">

                <!-- TWK -->
                <button id="tab-twk"
                    class="tab-btn bg-[#FF6B1A] text-white font-bold py-3 text-lg hover:bg-gray-300 transition">
                    TWK
                </button>

                <!-- TIU -->
                <button id="tab-tiu"
                    class="tab-btn bg-gray-200 text-gray-700 font-bold py-3 text-lg hover:bg-gray-300 transition">
                    TIU
                </button>

                <!-- TKP -->
                <button id="tab-tkp"
                    class="tab-btn bg-gray-200 text-gray-700 font-bold py-3 text-lg hover:bg-gray-300 transition">
                    TKP
                </button>

            </div>

            <!-- CONTENT -->
            <div class="p-6 min-h-[500px]">

                <!-- TWK -->
                <div id="content-twk" class="tab-content">

                    <div class="space-y-4">

                        <div class="border rounded-2xl p-5">
                            <h2 class="font-bold text-lg">
                                Soal TWK #1
                            </h2>

                            <p class="text-sm text-gray-500">
                                Materi Pancasila
                            </p>
                        </div>

                    </div>

                </div>

                <!-- TIU -->
                <div id="content-tiu" class="tab-content hidden">

                    <div class="space-y-4">

                        <div class="border rounded-2xl p-5">
                            <h2 class="font-bold text-lg">
                                Soal TIU #1
                            </h2>

                            <p class="text-sm text-gray-500">
                                Materi Logika
                            </p>
                        </div>

                    </div>

                </div>

                <!-- TKP -->
                <div id="content-tkp" class="tab-content hidden">

                    <div class="space-y-4">

                        <div class="border rounded-2xl p-5">
                            <h2 class="font-bold text-lg">
                                Soal TKP #1
                            </h2>

                            <p class="text-sm text-gray-500">
                                Materi Pelayanan Publik
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </main>

</body>

</html>
