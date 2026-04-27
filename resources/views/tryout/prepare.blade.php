<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persiapan Mengerjakan - raihASN</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FFF5F0] font-sans antialiased text-gray-800">

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

    <main class="max-w-6xl mx-auto p-6 mt-4">
        
        <nav class="text-sm text-gray-600 mb-4">
            <span class="hover:text-[#FF7A47] cursor-pointer">Home</span> &rsaquo; 
            <span class="hover:text-[#FF7A47] cursor-pointer">Try Out</span> &rsaquo; 
            <span class="font-bold text-gray-900">Persiapan Try Out</span>
        </nav>

        <h1 class="text-3xl font-bold text-gray-900 mb-8">Persiapan Mengerjakan</h1>

        <div class="bg-[#FF7A47] text-white p-4 rounded-2xl flex items-center gap-4 shadow-sm mb-8 animate-pulse">
            <div class="bg-white/20 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <p class="font-medium">Pastikan tidak ada aktivitas login dari perangkat lain saat try out sedang berjalan</p>
        </div>

        <div class="bg-white border-2 border-[#FF7A47] rounded-3xl p-8 mb-8 shadow-sm">
            <h2 class="text-xl font-bold mb-4">Try Out Gratis - 1</h2>
            <span class="bg-gray-300 text-gray-700 px-4 py-1 rounded-lg text-sm font-semibold">Gratis</span>
            
            <div class="mt-6 space-y-3">
                <div class="flex items-center gap-3 text-gray-700 font-medium">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h.01a1 1 0 100-2H10zm3 0a1 1 0 000 2h.01a1 1 0 100-2H13zM7 13a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h.01a1 1 0 100-2H10zm3 0a1 1 0 000 2h.01a1 1 0 100-2H13z" clip-rule="evenodd"/></svg>
                    <span>Jumlah Soal : <span class="ml-2">110 Soal</span></span>
                </div>
                <div class="flex items-center gap-3 text-gray-700 font-medium">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg>
                    <span>Durasi : <span class="ml-10">100 Menit</span></span>
                </div>
            </div>
        </div>

        <div class="bg-white border-2 border-[#FF7A47] rounded-3xl p-8 mb-12 shadow-sm">
            <h2 class="text-xl font-bold">Passing Grade</h2>
            <p class="text-sm text-gray-500 mb-6">Standar Kelulusan Minimum</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-[#FF7A47] text-white p-6 rounded-2xl text-center shadow-lg transform hover:scale-105 transition">
                    <p class="text-sm font-bold uppercase tracking-widest">TWK</p>
                    <p class="text-xs mb-4 opacity-80">Tes Wawasan Kebangsaan</p>
                    <p class="text-5xl font-extrabold">65</p>
                </div>
                <div class="bg-[#FF7A47] text-white p-6 rounded-2xl text-center shadow-lg transform hover:scale-105 transition">
                    <p class="text-sm font-bold uppercase tracking-widest">TIU</p>
                    <p class="text-xs mb-4 opacity-80">Tes Intelegensia Umum</p>
                    <p class="text-5xl font-extrabold">80</p>
                </div>
                <div class="bg-[#FF7A47] text-white p-6 rounded-2xl text-center shadow-lg transform hover:scale-105 transition">
                    <p class="text-sm font-bold uppercase tracking-widest">TKP</p>
                    <p class="text-xs mb-4 opacity-80 text-wrap">Tes Karakteristik Pribadi</p>
                    <p class="text-5xl font-extrabold">166</p>
                </div>
            </div>
        </div>

        <div class="bg-[#FF7A47] rounded-[40px] p-10 text-center text-white shadow-xl max-w-2xl mx-auto border border-white/30">
            <h3 class="text-lg font-medium mb-2">Sudah Siap?</h3>
            <h2 class="text-3xl font-bold mb-8 leading-tight">Selamat & Semangat <br> Mengerjakan Try Out Kamu!</h2>
            
            <div class="flex flex-col gap-4 max-w-xs mx-auto">
                <button class="bg-white text-[#FF7A47] font-bold py-3 px-8 rounded-xl shadow-lg hover:bg-[#FF7A47]transition active:scale-95">
                    Mulai Mengerjakan
                </button>
                <button class="border-2 border-white text-white font-bold py-3 px-8 rounded-xl hover:bg-white/10 transition active:scale-95">
                    Kembali
                </button>
            </div>
        </div>

    </main>
</body>
</html>