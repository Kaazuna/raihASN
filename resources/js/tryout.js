document.addEventListener("DOMContentLoaded", () => {

    /*
    |--------------------------------------------------------------------------
    | TIMER
    |--------------------------------------------------------------------------
    */

    const timerDisplay = document.getElementById("timer")

    if (timerDisplay) {

        let endTime = localStorage.getItem("endTime")

        if (!endTime) {
            endTime = Date.now() + (100 * 60 * 1000)
            localStorage.setItem("endTime", endTime)
        }

        const timer = setInterval(() => {

            const remaining = Math.floor((endTime - Date.now()) / 1000)

            if (remaining <= 0) {

                clearInterval(timer)

                localStorage.removeItem("endTime")

                window.location.href = "/tryout"

                return
            }

            let hours = Math.floor(remaining / 3600)
            let minutes = Math.floor((remaining % 3600) / 60)
            let seconds = remaining % 60

            hours = String(hours).padStart(2, "0")
            minutes = String(minutes).padStart(2, "0")
            seconds = String(seconds).padStart(2, "0")

            timerDisplay.textContent =
                `${hours}:${minutes}:${seconds}`

        }, 1000)
    }


    /*
    |--------------------------------------------------------------------------
    | NOMOR SOAL
    |--------------------------------------------------------------------------
    */

    const soalButtons = document.querySelectorAll(".soal-btn")
    const judulSoal = document.getElementById("judulSoal")

    if (soalButtons.length && judulSoal) {

        let currentSoal = 1

        function setActiveSoal(nomor) {

            currentSoal = nomor

            judulSoal.textContent = `Soal No ${nomor}`

            soalButtons.forEach((btn, index) => {

                btn.classList.remove(
                    "bg-[#FF8B60]",
                    "border-[#FF8B60]",
                    "text-white"
                )

                btn.classList.add(
                    "bg-white",
                    "border-[#FF8B60]",
                    "text-[#FF8B60]"
                )

                if (index + 1 === nomor) {

                    btn.classList.remove(
                        "bg-white",
                        "text-[#FF8B60]"
                    )

                    btn.classList.add(
                        "bg-[#FF8B60]",
                        "border-[#FF8B60]",
                        "text-white"
                    )
                }
            })
        }

        soalButtons.forEach((btn, index) => {

            btn.addEventListener("click", () => {
                setActiveSoal(index + 1)
            })

        })

        /*
        |--------------------------------------------------------------------------
        | NEXT PREV
        |--------------------------------------------------------------------------
        */

        const btnNext = document.getElementById("btnNext")
        const btnPrev = document.getElementById("btnPrev")

        btnNext?.addEventListener("click", () => {

            if (currentSoal < soalButtons.length) {
                setActiveSoal(currentSoal + 1)
            }

        })

        btnPrev?.addEventListener("click", () => {

            if (currentSoal > 1) {
                setActiveSoal(currentSoal - 1)
            }

        })

    }


    /*
    |--------------------------------------------------------------------------
    | OVERLAY SELESAI
    |--------------------------------------------------------------------------
    */

    const btnSelesai = document.getElementById("btnSelesai")
    const overlaySelesai = document.getElementById("overlaySelesai")
    const popupSelesai = document.getElementById("popupSelesai")
    const closeSelesai = document.getElementById("closeSelesai")

    if (
        btnSelesai &&
        overlaySelesai &&
        popupSelesai &&
        closeSelesai
    ) {

        btnSelesai.addEventListener("click", () => {

            overlaySelesai.classList.remove("hidden")
            overlaySelesai.classList.add("flex")

            setTimeout(() => {

                popupSelesai.classList.remove(
                    "scale-95",
                    "opacity-0"
                )

                popupSelesai.classList.add(
                    "scale-100",
                    "opacity-100"
                )

            }, 10)

        })

        closeSelesai.addEventListener("click", () => {

            popupSelesai.classList.remove(
                "scale-100",
                "opacity-100"
            )

            popupSelesai.classList.add(
                "scale-95",
                "opacity-0"
            )

            setTimeout(() => {

                overlaySelesai.classList.add("hidden")
                overlaySelesai.classList.remove("flex")

            }, 200)

        })

    }


    /*
    |--------------------------------------------------------------------------
    | OVERLAY BATAL
    |--------------------------------------------------------------------------
    */

    const btnBatal = document.getElementById("btnBatal")
    const overlayBatal = document.getElementById("overlayBatal")
    const popupBatal = document.getElementById("popupBatal")
    const closeBatal = document.getElementById("closeBatal")

    if (
        btnBatal &&
        overlayBatal &&
        popupBatal &&
        closeBatal
    ) {

        btnBatal.addEventListener("click", () => {

            overlayBatal.classList.remove("hidden")
            overlayBatal.classList.add("flex")

            setTimeout(() => {

                popupBatal.classList.remove(
                    "scale-95",
                    "opacity-0"
                )

                popupBatal.classList.add(
                    "scale-100",
                    "opacity-100"
                )

            }, 10)

        })

        closeBatal.addEventListener("click", () => {

            popupBatal.classList.remove(
                "scale-100",
                "opacity-100"
            )

            popupBatal.classList.add(
                "scale-95",
                "opacity-0"
            )

            setTimeout(() => {

                overlayBatal.classList.add("hidden")
                overlayBatal.classList.remove("flex")

            }, 200)

        })

    }

})