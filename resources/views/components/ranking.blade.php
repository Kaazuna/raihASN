<!-- OVERLAY RANKING -->
<div id="rankingOverlay"
    class="fixed inset-0 bg-black/50 z-[60]
    hidden opacity-0 transition-opacity duration-300">

    <!-- MODAL -->
    <div
        class="absolute left-1/2 top-1/2
        -translate-x-1/2 -translate-y-1/2
        bg-white rounded-3xl shadow-2xl
        w-[95%] sm:w-[90%] md:w-[700px]
        max-h-[85vh] overflow-hidden">

        <!-- HEADER -->
        <div
            class="bg-[#FF7A47] text-white
            px-6 py-4 flex items-center justify-between">

            <h2 class="text-lg sm:text-2xl font-bold">
                Ranking Try Out
            </h2>

            <button id="closeRanking"
                class="text-2xl hover:scale-110 transition">
                ✕
            </button>

        </div>

        <!-- CONTENT -->
        <div class="p-5 space-y-4 overflow-y-auto max-h-[70vh]">

            <!-- ITEM -->
            <div
                class="bg-[#FFF7F2] border border-orange-100
                rounded-2xl p-4 flex items-center justify-between">

                <div class="flex items-center gap-4">

                    <div
                        class="w-10 h-10 rounded-full
                        bg-[#FF7A47] text-white
                        flex items-center justify-center font-bold">
                        1
                    </div>

                    <div>

                        <h3 class="font-semibold">
                            Mustafa
                        </h3>

                        <p class="text-sm text-gray-500">
                            Skor : 980
                        </p>

                    </div>

                </div>

                <span
                    class="bg-yellow-100 text-yellow-700
                    px-3 py-1 rounded-full text-xs font-semibold">
                    Top 1
                </span>

            </div>

        </div>

    </div>

</div>