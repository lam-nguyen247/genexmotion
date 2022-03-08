document.addEventListener('DOMContentLoaded', function () {
    if (window.location.pathname === '/') {
        let service = new Splide('#splide-service', {
            type: 'loop',
            direction: 'ttb',
            arrows: false,
            height: '750px',
            autoplay: true,
            interval: 3000,
            speed: 3000,
            breakpoints: {
                767: {
                    height: '520px',
                }
            }
        }).mount();

        new Splide('#splide-testimonials', {
            direction: 'ltr',
            type: 'loop',
            perPage: 3,
            autoplay: true,
            interval: 2000,
            flickMaxPages: 3,
            updateOnMove: false,
            pagination: true,
            arrows: false,
            throttle: 300,
            gap: 50,
            breakpoints: {
                1023: {
                    perPage: 2,
                    flickMaxPages: 2,
                    gap: 30
                },
                767: {
                    perPage: 1,
                    flickMaxPages: 1,
                    gap: 30
                }
            }
        }).mount();

    }

    // Typed //
    Typed.new('#typing', {
        strings: ["Website", "Branding", "Marketing"],
        stringsElement: null,
        // typing speed
        typeSpeed: 60,
        // time before typing starts
        startDelay: 600,
        // backspacing speed
        backSpeed: 20,
        // time before backspacing
        backDelay: 500,
        // loop
        loop: true,
        // false = infinite
        loopCount: 1000,
        // show cursor
        showCursor: false,
        // character for cursor
        cursorChar: "|",
        // attribute to type (null == text)
        attr: null,
        // either html or text
        contentType: 'html',
    });
});

