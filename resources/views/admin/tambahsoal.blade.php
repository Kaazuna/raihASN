<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Try Out</title>

    @vite(['resources/css/app.css', 'resources/js/admin.js'])

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
                Manajemen User
            </h1>
        </div>
    </div>
    <!-- CONTENT -->
    <main class="lg:ml-64 min-h-screen p-4 sm:p-6 lg:p-8 mt-16 lg:mt-0">

        <!-- BREADCRUMB -->
        <div class="text-xs sm:text-sm text-gray-500 mb-2 break-words">
            Home > Manajemen Try Out > Tambah Try Out
        </div>

        <!-- TITLE -->
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-6 sm:mb-8">
            Tambahkan Soal
        </h1>

        <!-- CARD -->
        <div class="bg-white rounded-3xl shadow-xl p-5 sm:p-8 lg:p-10 w-full max-w-5xl">

            <form class="space-y-6 sm:space-y-8">

                <!-- NAMA -->
                <div class="grid grid-cols-1 lg:grid-cols-[180px_1fr] gap-3 lg:gap-6">

                    <label class="font-semibold text-base sm:text-lg">
                        Nama Try Out
                    </label>

                    <input type="text"
                        class="w-full bg-gray-100 rounded-xl px-4 sm:px-5 py-3 sm:py-4 outline-none focus:ring-2 focus:ring-orange-300"
                        placeholder="Masukkan nama try out">

                </div>

                <!-- STATUS -->
                <div class="grid grid-cols-1 lg:grid-cols-[180px_1fr] gap-3 lg:gap-6">

                    <label class="font-semibold text-base sm:text-lg">
                        Status Try Out
                    </label>

                    <select
                        class="w-full sm:w-60 bg-white border rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-orange-300">

                        <option>Gratis</option>
                        <option>Premium</option>

                    </select>

                </div>

                <!-- DURASI -->
                <div class="grid grid-cols-1 lg:grid-cols-[180px_1fr] gap-3 lg:gap-6">

                    <label class="font-semibold text-base sm:text-lg">
                        Durasi
                    </label>

                    <input type="time"
                        class="w-full sm:w-60 bg-white border rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-orange-300">

                </div>

                <!-- DESKRIPSI -->
                <div class="grid grid-cols-1 lg:grid-cols-[180px_1fr] gap-3 lg:gap-6">

                    <label class="font-semibold text-base sm:text-lg lg:pt-3">
                        Deskripsi
                    </label>

                    <textarea rows="7"
                        class="w-full bg-gray-100 rounded-xl px-4 sm:px-5 py-4 outline-none resize-none focus:ring-2 focus:ring-orange-300"
                        placeholder="Masukkan deskripsi try out"></textarea>

                </div>

                <!-- BUTTON -->
                <div class="flex flex-col sm:flex-row sm:justify-end gap-3 sm:gap-4 pt-4 sm:pt-6">

                    <!-- KEMBALI -->
                    <a href="/admin/tryout"
                        class="w-full sm:w-auto text-center bg-red-500 hover:bg-red-600 text-white px-6 sm:px-8 py-3 rounded-xl shadow-md hover:shadow-lg transition">

                        Kembali

                    </a>

                    <!-- SUBMIT -->
                    <button type="submit"
                        class="w-full sm:w-auto bg-[#FF6B1A] hover:bg-[#eb5f12] text-white px-6 sm:px-8 py-3 rounded-xl shadow-md hover:shadow-lg transition">

                        Tambah Soal

                    </button>

                </div>

            </form>

        </div>

    </main>

</body>

</html>
