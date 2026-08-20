document.addEventListener("DOMContentLoaded", function () {

    const cards = Array.from(
        document.querySelectorAll(".industry-card")
    );

    const nextButton = document.querySelector(".industry-next");
    const prevButton = document.querySelector(".industry-prev");
    const track = document.querySelector(".industry-track");

    if (!cards.length) return;

    let activeIndex = 3;
    let autoSlide = null;

    const AUTO_SPEED = 4000;


    /* ==============================
       REMOVE ALL POSITION CLASSES
    ============================== */

    function resetPositions(card) {

        card.classList.remove(
            "position-left-2",
            "position-left-1",
            "position-center",
            "position-right-1",
            "position-right-2",
            "position-hidden-left",
            "position-hidden-right"
        );

    }


    /* ==============================
       UPDATE CARDS
    ============================== */

    function updateCards() {

        const total = cards.length;

        /* Remove old classes */

        cards.forEach(function (card) {
            resetPositions(card);
        });


        /* ==========================
           CENTER
        ========================== */

        cards[activeIndex].classList.add(
            "position-center"
        );


        /* ==========================
           LEFT 1
        ========================== */

        const left1 =
            (activeIndex - 1 + total) % total;

        cards[left1].classList.add(
            "position-left-1"
        );


        /* ==========================
           LEFT 2
        ========================== */

        const left2 =
            (activeIndex - 2 + total) % total;

        cards[left2].classList.add(
            "position-left-2"
        );


        /* ==========================
           RIGHT 1
        ========================== */

        const right1 =
            (activeIndex + 1) % total;

        cards[right1].classList.add(
            "position-right-1"
        );


        /* ==========================
           RIGHT 2
        ========================== */

        const right2 =
            (activeIndex + 2) % total;

        cards[right2].classList.add(
            "position-right-2"
        );


        /* ==========================
           HIDDEN CARDS
        ========================== */

        cards.forEach(function (card, index) {

            const visibleCards = [
                activeIndex,
                left1,
                left2,
                right1,
                right2
            ];

            if (!visibleCards.includes(index)) {

                /*
                 * Decide hidden direction
                 */

                const distance =
                    (index - activeIndex + total) % total;

                if (distance > total / 2) {

                    card.classList.add(
                        "position-hidden-left"
                    );

                } else {

                    card.classList.add(
                        "position-hidden-right"
                    );

                }

            }

        });

    }


    /* ==============================
       NEXT SLIDE
    ============================== */

    function nextSlide() {

        activeIndex++;

        if (activeIndex >= cards.length) {
            activeIndex = 0;
        }

        updateCards();

    }


    /* ==============================
       PREVIOUS SLIDE
    ============================== */

    function previousSlide() {

        activeIndex--;

        if (activeIndex < 0) {
            activeIndex = cards.length - 1;
        }

        updateCards();

    }


    /* ==============================
       NEXT BUTTON
    ============================== */

    if (nextButton) {

        nextButton.addEventListener(
            "click",
            function () {

                nextSlide();
                resetAutoSlide();

            }
        );

    }


    /* ==============================
       PREVIOUS BUTTON
    ============================== */

    if (prevButton) {

        prevButton.addEventListener(
            "click",
            function () {

                previousSlide();
                resetAutoSlide();

            }
        );

    }


    /* ==============================
       AUTO SLIDE
    ============================== */

    // function startAutoSlide() {

    //     clearInterval(autoSlide);

    //     autoSlide = setInterval(
    //         function () {
    //             nextSlide();
    //         },
    //         AUTO_SPEED
    //     );

    // }


    // function resetAutoSlide() {

    //     clearInterval(autoSlide);

    //     startAutoSlide();

    // }


    /* ==============================
       PAUSE ON HOVER
    ============================== */

    if (track) {

        track.addEventListener(
            "mouseenter",
            function () {

                clearInterval(autoSlide);

            }
        );


        track.addEventListener(
            "mouseleave",
            function () {

                startAutoSlide();

            }
        );

    }


    /* ==============================
       MOBILE SWIPE
    ============================== */

    let touchStartX = 0;
    let touchEndX = 0;


    if (track) {

        track.addEventListener(
            "touchstart",
            function (event) {

                touchStartX =
                    event.changedTouches[0].screenX;

            },
            {
                passive: true
            }
        );


        track.addEventListener(
            "touchend",
            function (event) {

                touchEndX =
                    event.changedTouches[0].screenX;

                const distance =
                    touchStartX - touchEndX;

                if (Math.abs(distance) < 50) {
                    return;
                }

                if (distance > 0) {

                    nextSlide();

                } else {

                    previousSlide();

                }

                resetAutoSlide();

            },
            {
                passive: true
            }
        );

    }


    /* ==============================
       INITIALIZE
    ============================== */

    updateCards();

    startAutoSlide();

});