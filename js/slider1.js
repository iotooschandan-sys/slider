document.addEventListener("DOMContentLoaded", function () {

    /* =========================================
       ELEMENTS
    ========================================= */

    const cards = Array.from(
        document.querySelectorAll(".industry-card")
    );

    const nextButton =
        document.querySelector(".industry-next");

    const prevButton =
        document.querySelector(".industry-prev");

    const track =
        document.querySelector(".industry-track");

    const counter =
        document.querySelector(".industry-count");

    const progressBar =
        document.querySelector(".industry-progress-bar");


    /* =========================================
       STOP IF CARDS NOT FOUND
    ========================================= */

    if (!cards.length) {
        return;
    }


    /* =========================================
       SETTINGS
    ========================================= */

    // 4th card initially center
    let activeIndex = Math.min(3, cards.length - 1);

    let autoSlide = null;

    const AUTO_SPEED = 4000;


    /* =========================================
       UPDATE COUNTER
    ========================================= */

    function updateCounter() {

        const total = cards.length;

        const current = activeIndex + 1;


        /* -----------------------------------------
           Counter
        ----------------------------------------- */

        if (counter) {

            counter.textContent =
                current + " / " + total;

        }


        /* -----------------------------------------
           Progress bar
        ----------------------------------------- */

        if (progressBar) {

            const percentage =
                (current / total) * 100;

            progressBar.style.width =
                percentage + "%";

        }

    }


    /* =========================================
       RESET ALL POSITION CLASSES
    ========================================= */

    function resetPositions(card) {

        card.classList.remove(
            "position-left-3",
            "position-left-2",
            "position-left-1",
            "position-center",
            "position-right-1",
            "position-right-2",
            "position-right-3",
            "position-hidden-left",
            "position-hidden-right"
        );

    }


    /* =========================================
       UPDATE CARDS
    ========================================= */

    function updateCards() {

        const total = cards.length;


        if (!total) {
            return;
        }


        /* -----------------------------------------
           Keep activeIndex valid
        ----------------------------------------- */

        if (activeIndex < 0) {

            activeIndex =
                total - 1;

        }


        if (activeIndex >= total) {

            activeIndex = 0;

        }


        /* -----------------------------------------
           Remove old classes
        ----------------------------------------- */

        cards.forEach(function (card) {

            resetPositions(card);

        });


        /* =========================================
           MOBILE
        ========================================= */

        if (window.innerWidth < 768) {

            cards[activeIndex].classList.add(
                "position-center"
            );


            cards.forEach(function (card, index) {

                if (index !== activeIndex) {

                    card.classList.add(
                        "position-hidden-right"
                    );

                }

            });


            // Update counter
            updateCounter();

            return;
        }


        /* =========================================
           DESKTOP CENTER
        ========================================= */

        cards[activeIndex].classList.add(
            "position-center"
        );


        /* =========================================
           LEFT SIDE
        ========================================= */

        const left1 =
            (activeIndex - 1 + total) % total;

        const left2 =
            (activeIndex - 2 + total) % total;

        const left3 =
            (activeIndex - 3 + total) % total;


        cards[left1].classList.add(
            "position-left-1"
        );

        cards[left2].classList.add(
            "position-left-2"
        );

        cards[left3].classList.add(
            "position-left-3"
        );


        /* =========================================
           RIGHT SIDE
        ========================================= */

        const right1 =
            (activeIndex + 1) % total;

        const right2 =
            (activeIndex + 2) % total;

        const right3 =
            (activeIndex + 3) % total;


        cards[right1].classList.add(
            "position-right-1"
        );

        cards[right2].classList.add(
            "position-right-2"
        );

        cards[right3].classList.add(
            "position-right-3"
        );


        /* =========================================
           VISIBLE CARDS
        ========================================= */

        const visibleCards = [
            activeIndex,
            left1,
            left2,
            left3,
            right1,
            right2,
            right3
        ];


        /* =========================================
           HIDDEN CARDS
        ========================================= */

        cards.forEach(function (card, index) {

            if (visibleCards.includes(index)) {

                return;

            }


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

        });


        /* -----------------------------------------
           UPDATE COUNTER
        ----------------------------------------- */

        updateCounter();

    }


    /* =========================================
       NEXT SLIDE
    ========================================= */

    function nextSlide() {

        activeIndex =
            (activeIndex + 1) % cards.length;


        updateCards();

    }


    /* =========================================
       PREVIOUS SLIDE
    ========================================= */

    function previousSlide() {

        activeIndex =
            (activeIndex - 1 + cards.length)
            % cards.length;


        updateCards();

    }


    /* =========================================
       CARD CLICK
    ========================================= */

    cards.forEach(function (card, index) {

        card.addEventListener(
            "click",
            function () {

                activeIndex =
                    index;


                updateCards();

                resetAutoSlide();

            }
        );

    });


    /* =========================================
       NEXT BUTTON
    ========================================= */

    if (nextButton) {

        nextButton.addEventListener(
            "click",
            function (event) {

                event.preventDefault();

                nextSlide();

                resetAutoSlide();

            }
        );

    }


    /* =========================================
       PREVIOUS BUTTON
    ========================================= */

    if (prevButton) {

        prevButton.addEventListener(
            "click",
            function (event) {

                event.preventDefault();

                previousSlide();

                resetAutoSlide();

            }
        );

    }


    /* =========================================
       START AUTO SLIDE
    ========================================= */

    // function startAutoSlide() {

    //     clearInterval(autoSlide);


    //     autoSlide =
    //         setInterval(
    //             function () {

    //                 nextSlide();

    //             },
    //             AUTO_SPEED
    //         );

    // }


    /* =========================================
       RESET AUTO SLIDE
    ========================================= */

    function resetAutoSlide() {

        clearInterval(autoSlide);

        startAutoSlide();

    }


    /* =========================================
       PAUSE AUTO SLIDE ON HOVER
    ========================================= */

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


    /* =========================================
       MOBILE SWIPE
    ========================================= */

    let touchStartX = 0;
    let touchEndX = 0;


    if (track) {

        /* -----------------------------------------
           TOUCH START
        ----------------------------------------- */

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


        /* -----------------------------------------
           TOUCH END
        ----------------------------------------- */

        track.addEventListener(
            "touchend",
            function (event) {

                touchEndX =
                    event.changedTouches[0].screenX;


                const distance =
                    touchStartX - touchEndX;


                // Ignore small movement
                if (Math.abs(distance) < 50) {

                    return;

                }


                /* ---------------------------------
                   SWIPE LEFT → NEXT
                --------------------------------- */

                if (distance > 0) {

                    nextSlide();

                }


                /* ---------------------------------
                   SWIPE RIGHT → PREVIOUS
                --------------------------------- */

                else {

                    previousSlide();

                }


                resetAutoSlide();

            },
            {
                passive: true
            }
        );

    }


    /* =========================================
       WINDOW RESIZE
    ========================================= */

    let resizeTimer;


    window.addEventListener(
        "resize",
        function () {

            clearTimeout(resizeTimer);


            resizeTimer =
                setTimeout(
                    function () {

                        updateCards();

                    },
                    150
                );

        }
    );


    /* =========================================
       INITIALIZE
    ========================================= */

    updateCards();

    startAutoSlide();

});