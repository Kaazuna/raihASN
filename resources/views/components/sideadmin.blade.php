<!-- OVERLAY MOBILE -->
<div id="sidebarOverlay" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden">
</div>

<!-- SIDEBAR -->
<aside id="sidebar"
    class="fixed left-0 top-0 h-screen w-64 bg-[#FF6A26] text-white flex flex-col justify-between shadow-xl z-50
    transition-transform duration-300
    -translate-x-full lg:translate-x-0">

    <!-- TOP -->
    <div>

        <!-- LOGO -->
        <div class="px-8 py-8 flex items-center justify-between">

            <h1 class="text-3xl font-bold tracking-wide">
                LOGO
            </h1>

            <!-- CLOSE BUTTON MOBILE -->
            <button id="closeSidebar" class="lg:hidden text-white text-2xl hover:bg-white/20 rounded-xl transition">
                ✕
            </button>

        </div>

        <!-- MENU -->
        <nav class="px-5 space-y-2 text-sm font-medium">

            <a href="{{ route('dashadmin') }}"
                class="block px-4 py-3 rounded-xl transition
                {{ request()->is('admin/dashboard') ? 'bg-white text-[#FF6B1A] font-bold shadow-md' : 'hover:bg-white/20' }}">
                Dashboard
            </a>

            <a href="{{ route('admintryout') }}"
                class="block px-4 py-3 rounded-xl transition
                {{ request()->is('admin/tryout') ? 'bg-white text-[#FF6B1A] font-bold shadow-md' : 'hover:bg-white/20' }}">
                Manajemen Try Out
            </a>

            <a href="{{ route('manajemensoal') }}"
                class="block px-4 py-3 rounded-xl transition
                {{ request()->is('admin/banksoal') ? 'bg-white text-[#FF6B1A] font-bold shadow-md' : 'hover:bg-white/20' }}">
                Manajemen Bank Soal
            </a>

            <a href="{{ route('manajemenuser') }}"
                class="block px-4 py-3 rounded-xl transition
                {{ request()->is('admin/usermanajemen') ? 'bg-white text-[#FF6B1A] font-bold shadow-md' : 'hover:bg-white/20' }}">
                Manajemen User
            </a>

            <a href="#" class="block px-4 py-3 rounded-xl transition hover:bg-white/20">
                Hasil & Laporan
            </a>

            <a href="#" class="block px-4 py-3 rounded-xl transition hover:bg-white/20">
                Artikel
            </a>

        </nav>

    </div>

    <!-- BOTTOM -->
    <div class="p-6">
        <a href="{{ route('signup') }}"
            class="flex items-center justify-center w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-2xl text-sm font-semibold shadow-lg hover:shadow-xl hover:scale-[1.02] transition duration-300">

            Log Out

        </a>
    </div>
</aside>
