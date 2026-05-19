<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Try Out - raihASN</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/tryout.js'])
    <style>
        .card-shadow {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#FFF9F5] antialiased text-slate-800" style="font-family: 'Poppins', sans-serif;">


    <nav id="navbar"
        class="fixed top-0 left-0 w-full z-50 
        bg-[#FF7A47]/90 backdrop-blur-md text-white shadow-md">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 
            flex justify-between items-center py-3 sm:py-4">

            <!-- LOGO -->
            <div>
                <img src="{{ asset('images/logoraih.png') }}" alt="logo" class="h-10 sm:h-12">
            </div>

        </div>
    </nav>

    {{-- Main --}}
    <main class="max-w-7xl mx-auto px-3 sm:px-5 lg:px-6 mt-4 pt-20">

        <div class="mb-8">
            <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Try Out Gratis - 1</h1>
            <p class="text-slate-500 font-medium">Kerjakan soal dengan jujur dan sungguh-sungguh</p>

            <div id="timer"
                class="mt-5 inline-block bg-[#FF8B60] text-white px-4 sm:px-6 py-2 rounded-full text-lg sm:text-2xl font-black shadow-lg">
                00:00:00
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 lg:gap-8 items-start mt-6">

                <div class="lg:col-span-8 bg-white rounded-3xl p-4 sm:p-6 lg:p-8 card-shadow border border-[#FF7A47]">
                    <div class="border-b border-slate-200 pb-4 mb-6">
                        <h2 id="judulSoal" class="text-lg sm:text-xl font-bold text-slate-800">
                            Soal No 1
                        </h2>
                    </div>

                    <div
                        class="text-sm sm:text-base text-slate-700 leading-relaxed mb-6 sm:mb-8 text-justify font-medium">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Kesadaran pedagang terhadap pentingnya
                        menjaga kebersihan di beberapa pasar tradisional yang berada pada wilayah Jawa Tengah sangat
                        rendah.
                        Data riset kebersihan pasar (RKP) Jawa Tengah menunjukkan bahwa tingkat kesadaran pedagang
                        terhadap
                        kebersihan hanya sebesar 25%. Sejumlah pedagang juga didapat sering membawa sampah rumah tangga
                        mereka ke pasar untuk dibuang di sana. Hal inilah yang sedang dicoba untuk ditangani oleh
                        pemerintah
                        setempat. Gagasan utama paragraf tersebut adalah...
                    </div>

                    <div class="border-t border-slate-100 pt-6 space-y-4">
                        @foreach (['A. Opsi', 'B. Opsi', 'C. Opsi', 'D. Opsi', 'E. Opsi'] as $opsi)
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <div class="relative flex items-center justify-center">
                                    <input type="radio" name="jawaban"
                                        class="peer appearance-none w-6 h-6 border-2 border-slate-800 rounded-full checked:bg-white checked:border-slate-800 transition-all">
                                    <div
                                        class="absolute w-3 h-3 bg-slate-800 rounded-full scale-0 peer-checked:scale-100 transition-transform">
                                    </div>
                                </div>
                                <span
                                    class="text-sm sm:text-base text-slate-700 font-bold group-hover:text-[#FF7A47] transition-colors">{{ $opsi }}</span>
                            </label>
                        @endforeach
                    </div>

                    <div class="mt-8 flex gap-3">
                        <button id="btnPrev"
                            class="bg-[#A89F94] text-white px-5 sm:px-8 py-2.5 sm:py-3 text-sm sm:text-base rounded-2xl font-bold shadow-md hover:bg-[#968d83] transition">
                            Sebelumnya
                        </button>

                        <button id="btnNext"
                            class="bg-[#A89F94] text-white px-5 sm:px-8 py-2.5 sm:py-3 text-sm sm:text-base rounded-2xl font-bold shadow-md hover:bg-[#4a4744] transition">
                            Selanjutnya
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-4 bg-white rounded-3xl p-4 sm:p-6 card-shadow border border-[#FF7A47]">
                    <div class="text-center mb-6">
                        <span class="text-[#FF8B60] font-bold border-b-2 border-[#FF7A47] pb-1 px-4">Nomor
                            Soal</span>
                    </div>

                    <div class="grid grid-cols-5 sm:grid-cols-8 lg:grid-cols-5 gap-2 mb-6">
                        @for ($i = 1; $i <= 110; $i++)
                            <button
                                class="soal-btn aspect-square flex items-center justify-center text-xs sm:text-sm font-bold border rounded-lg transition-all duration-200 hover:scale-105 hover:bg-[#FF7A47] hover:text-white {{ $i == 1 ? 'bg-[#FF8B60] border-[#FF8B60] text-white' : 'bg-white border-[#FF8B60] text-[#FF8B60]' }}">
                                {{ $i }}
                            </button>
                        @endfor
                    </div>

                    <div class="space-y-3">
                        <button id="btnSelesai"
                            class="w-full bg-[#FF8B60] text-white py-3 sm:py-4 rounded-2xl font-black text-sm sm:text-lg shadow-lg hover:scale-[1.02] transition active:scale-95">
                            Selesai
                        </button>

                        <button id="btnBatal"
                            class="w-full bg-[#FF4757] text-white py-3 sm:py-4 rounded-2xl font-black text-sm sm:text-lg shadow-lg hover:scale-[1.02] transition active:scale-95">
                            Batal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- OVERLAY SELESAI -->
    <div id="overlaySelesai" class="fixed inset-0 bg-black/40 z-[999] hidden items-center justify-center px-4">

        <!-- POPUP -->
        <div id="popupSelesai"
            class="bg-white w-full max-w-md rounded-3xl p-5 sm:p-8 text-center shadow-2xl
        scale-95 opacity-0 transition-all duration-300">

            <!-- ICON -->
            <div class="w-24 h-24 bg-green-100 mx-auto rounded-full flex items-center justify-center mb-6">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-green-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />

                </svg>

            </div>

            <!-- TITLE -->
            <h2 class="text-xl sm:text-2xl font-bold mb-3">
                Selesai Mengerjakan?
            </h2>

            <!-- TEXT -->
            <p class="text-sm sm:text-base text-gray-500 mb-6 sm:mb-8">
                Pastikan semua jawaban telah diisi sebelum dikumpul
            </p>

            <!-- BUTTON -->
            <div class="flex gap-4">

                <!-- BATAL -->
                <button id="closeSelesai"
                    class="flex-1 border border-gray-300 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">

                    Batal

                </button>

                <!-- SELESAI -->
                <a href="/tryout"
                    class="flex-1 bg-[#FF7A47] text-white py-3 rounded-xl font-semibold hover:bg-[#f06a37] transition">

                    Selesai

                </a>

            </div>

        </div>
    </div>
    <!-- OVERLAY BATAL -->
    <div id="overlayBatal" class="fixed inset-0 bg-black/40 z-[999] hidden items-center justify-center px-4">

        <!-- POPUP -->
        <div id="popupBatal"
            class="bg-white w-full max-w-md rounded-3xl p-5 sm:p-8 text-center shadow-2xl
        scale-95 opacity-0 transition-all duration-300">

            <!-- ICON -->
            <div class="w-24 h-24 bg-red-100 mx-auto rounded-full flex items-center justify-center mb-6">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-red-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />

                </svg>

            </div>

            <!-- TITLE -->
            <h2 class="text-xl sm:text-2xl font-bold mb-3">
                Tinggalkan Sesi?
            </h2>

            <!-- TEXT -->
            <p class="text-sm sm:text-base text-gray-500 mb-6 sm:mb-8">
                Semua jawaban tidak akan tersimpan dan anda harus mengulang dari awal
            </p>

            <!-- BUTTON -->
            <div class="flex gap-4">

                <!-- KEMBALI -->
                <button id="closeBatal"
                    class="flex-1 border border-gray-300 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">

                    Batal

                </button>

                <!-- TINGGALKAN -->
                <a href="/tryout"
                    class="flex-1 bg-red-500 text-white py-3 rounded-xl font-semibold hover:bg-red-600 transition">

                    Tinggalkan

                </a>

            </div>

        </div>
    </div>
</body>

</html>
