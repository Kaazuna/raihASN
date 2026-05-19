document.addEventListener("DOMContentLoaded", () => {

    const tabs = {
        twk: document.getElementById("content-twk"),
        tiu: document.getElementById("content-tiu"),
        tkp: document.getElementById("content-tkp"),
    };

    const buttons = {
        twk: document.getElementById("tab-twk"),
        tiu: document.getElementById("tab-tiu"),
        tkp: document.getElementById("tab-tkp"),
    };

    // CEK DULU ADA ATAU TIDAK
    if (buttons.twk && buttons.tiu && buttons.tkp) {

        function showTab(activeTab) {

            Object.values(tabs).forEach(tab => {
                tab?.classList.add("hidden");
            });

            Object.values(buttons).forEach(btn => {
                btn?.classList.remove("bg-[#FF6B1A]", "text-white");
                btn?.classList.add("bg-gray-200", "text-gray-700");
            });

            tabs[activeTab]?.classList.remove("hidden");

            buttons[activeTab]?.classList.remove("bg-gray-200", "text-gray-700");
            buttons[activeTab]?.classList.add("bg-[#FF6B1A]", "text-white");
        }

        buttons.twk.addEventListener("click", () => showTab("twk"));
        buttons.tiu.addEventListener("click", () => showTab("tiu"));
        buttons.tkp.addEventListener("click", () => showTab("tkp"));
    }

});

document.addEventListener("DOMContentLoaded", () => {

    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("sidebarOverlay");

    const openBtn = document.getElementById("openSidebar");
    const closeBtn = document.getElementById("closeSidebar");

    // OPEN
    openBtn?.addEventListener("click", () => {
        sidebar.classList.remove("-translate-x-full");
        overlay.classList.remove("hidden");
    });

    // CLOSE
    closeBtn?.addEventListener("click", closeSidebar);
    overlay?.addEventListener("click", closeSidebar);

    function closeSidebar() {
        sidebar.classList.add("-translate-x-full");
        overlay.classList.add("hidden");
    }

});