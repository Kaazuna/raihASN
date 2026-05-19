<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Try Out</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/admin.js'])

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#FFFFFF]" style="font-family: 'Poppins', sans-serif;">

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
                Manajemen Try Out
            </h1>
        </div>
    </div>
    <!-- CONTENT -->
    <main class="lg:ml-64 min-h-screen p-4 sm:p-6 lg:p-8 mt-16 lg:mt-0 flex items-center">

        <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-4xl w-full">

            <!-- TITLE -->
            <h1 class="text-4xl font-bold mb-8">
                Daftar Try Out
            </h1>

            <!-- LIST -->
            <div class="space-y-4">

                <!-- ITEM -->
                <div
                    class="bg-[#FF6A26] rounded-xl p-5 flex items-center justify-between shadow-md hover:scale-[1.01] transition">

                    <!-- TEXT -->
                    <div class="text-white">
                        <h2 class="font-bold text-lg">
                            Try Out Gratis - 1
                        </h2>

                        <p class="text-sm">
                            110 Soal · 100 Menit · Gratis
                        </p>
                    </div>

                    <!-- BUTTON -->
                    <div class="flex gap-2">

                        <button
                            class="bg-white w-10 h-10 rounded-lg flex items-center justify-center hover:scale-110 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                        </button>

                        <button
                            class="bg-white w-10 h-10 rounded-lg flex items-center justify-center hover:scale-110 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>

                    </div>
                </div>

                <!-- ITEM -->
                <div
                    class="bg-[#FF6A26] rounded-xl p-5 flex items-center justify-between shadow-md hover:scale-[1.01] transition">

                    <div class="text-white">
                        <h2 class="font-bold text-lg">
                            Try Out Gratis - 2
                        </h2>

                        <p class="text-sm">
                            110 Soal · 100 Menit · Gratis
                        </p>
                    </div>

                    <div class="flex gap-2">

                        <button
                            class="bg-white w-10 h-10 rounded-lg flex items-center justify-center hover:scale-110 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                        </button>

                        <button
                            class="bg-white w-10 h-10 rounded-lg flex items-center justify-center hover:scale-110 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>

                    </div>
                </div>

            </div>

            <!-- ADD BUTTON -->
            <div class="flex justify-end mt-8">

                <a href="/admin/tryout/create"
                    class="bg-[#FF6B1A] hover:bg-[#eb5f12] text-white px-6 py-2 rounded-xl shadow-md hover:shadow-lg transition">
                    + Try Out
                </a>

            </div>

        </div>

    </div>

</body>

</html>
