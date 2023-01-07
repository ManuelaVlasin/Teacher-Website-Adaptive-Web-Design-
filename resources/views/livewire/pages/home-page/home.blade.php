<div>
    <section class="parallax-section" id="hero">
                <div class="hero container">
                    <div style="padding-top: 50px">
                        <h1>{{__('Welcome')}}<span></span></h1>
                        <h1>{{__('to my classes :)')}}<span></span></h1>
                    </div>
                </div>
    </section>

    <main class="l-main mt-5">
        <!--========== HOME ==========-->
        <section class="home" id="home">
            <div class="home__container bd-container bd-grid">
                <div class="home__img">
                    <img class="home-img" src="{{asset(url('images/Manuela.jpg'))}}" alt="">
                </div>

                <div class="home__data">
                    <h1 style="color: #87CEFA" class="home__title">{{__('Personal Information')}}</h1>
                    <h5 class="home__description text-bold">
                        <i class="fa fa-graduation-cap"></i>{{__(' Education')}}
                    </h5>

                    <p class="text-bold">{{__('High school - Computer Science')}}</p>
                    <p>{{__('2015 - 2018 "Liviu Rebreanu" High School, Bistrita, Romania')}}</p>

                    <p class="text-bold">{{__('Bachelor in Computer Science')}}</p>
                    <p>{{__('2018 - 2021 "Babeș-Bolyai" University Cluj-Napoca, Romania...')}}</p>

                    <a href="{{route('personal-info')}}" class="button">{{('Mai multe detalii ')}}<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <!--========== SHARE ==========-->
        <section class="share section bd-container" id="share">
            <div class="share__container bd-grid">
                <div class="share__data">
                    <h2 class="section-title-center">{{__('Programming Experience')}}</h2>
                    <h5 class="share__description text-bold">{{__('Web Developer')}}</h5>
                    <p>Html, CSS, JavaScript</p>
                    <p>PHP & Laravel</p>
                    <p>MySQL</p>
                    <a href="{{route('personal-info')}}" class="button">{{('Mai multe detalii ')}}<i class="fa fa-arrow-right"></i></a>
                </div>

                <div class="share__img">
                    <img
                        src="https://www.livecareer.com/wp-content/uploads/2017/12/3-dos-donts-for-your-work-experience-section.jpg"
                        alt="">
                </div>
            </div>
        </section>

        <div style="text-align: center; margin-top: 30px" id="to_info">
            <img class="arrow-img" src="{{asset(url('images/dashed-arrow.png'))}}" alt="Dashed Arrow"/>
        </div>


        <!--========== COURSES ==========-->
        <section class="step section bd-container" id="steps">
            <h1 class="section-title mb-5 text-center">{{__('Courses')}}</h1>
            <div class="step__container bd-grid">
                <div class="step__data">
                    <img src="{{asset(url('images/PHP.jpg'))}}" alt="" class="step__img">
                    <h3 class="step__title">{{__('Introduction to Web Development')}}</h3>
                </div>

                <div class="step__data">
                    <img src="{{asset(url('images/adaptiveWeb.jpg'))}}" alt="" class="step__img">
                    <h3 class="step__title">{{__('Adaptive Web Design')}}</h3>
                </div>

                <div class="step__data">
                    <img src="{{asset(url('images/Laravel.jpg'))}}" alt="" class="step__img">
                    <h3 class="step__title">{{__('PHP with Laravel')}}</h3>
                </div>
            </div>
        </section>
    </main>
</div>

<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<!--========== SCROLL REVEAL ==========-->
<script src="https://unpkg.com/scrollreveal"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<style>
    /*===== VARIABLES CSS =====*/
    :root {
        --header-height: 3rem;

        /*========== Colors ==========*/
        --first-color: #87CEFA;
        --first-color-alt: #87CEFA;
        --first-color-send: #87CEFA;
        /*--title-color: #161212;*/
        --title-color: #87CEFA;
        --text-color: #5B5757;
        --text-color-light: #8F8A8A;
        --body-color: #FEFBFB;
        --container-color: #FFF;

        /*========== Font and typography ==========*/
        --biggest-font-size: 2rem;
        --h2-font-size: 1.25rem;
        --h3-font-size: 1.125rem;
        --normal-font-size: .938rem;
        --small-font-size: .813rem;

        /*========== Font weight ==========*/
        --font-semi-bold: 600;
        --font-bold: 700;

        /*========== Margenes ==========*/
        --mb-1: .5rem;
        --mb-2: 1rem;
        --mb-3: 1.5rem;
        --mb-4: 2rem;
        --mb-5: 2.5rem;
        --mb-6: 3rem;
        /*========== z index ==========*/

        --z-tooltip: 10;
        --z-fixed: 100;
    }

    .general-info {
        font-size: 25px;
    }

    .text-bold {
        font-weight: bold;
    }

    @media screen and (min-width: 968px) {
        :root {
            --biggest-font-size: 3rem;
            --h2-font-size: 1.75rem;
            --h3-font-size: 1.25rem;
            --normal-font-size: 1rem;
            --small-font-size: .875rem;
        }
    }

    /*========== BASE ==========*/
    html {
        scroll-behavior: smooth;
    }


    h1, h2, h3 {
        font-weight: var(--font-semi-bold);
        color: var(--title-color);
    }


    img {
        max-width: 100%;
        /*height: auto;*/
        height: 400px;
    }

    /*========== CLASS CSS ==========*/
    .section {
        padding: 4rem 0 2rem;
    }

    .section-title-center {
        font-size: var(--h2-font-size);
        color: var(--title-color);
        text-align: center;
        margin-bottom: var(--mb-3);
        line-height: 30px;
    }

    .arrow-img{
        width: 20%;
        height: 100%;
    }

    .section-title {
        font-size: var(--biggest-font-size);
        color: var(--title-color);
    }

    /*========== LAYOUT ==========*/
    .l-main {
        overflow: hidden;
    }

    .bd-container {
        max-width: 968px;
        width: calc(100% - 3rem);
        margin-left: var(--mb-3);
        margin-right: var(--mb-3);
    }

    .bd-grid {
        display: grid;
        gap: 1.5rem;
    }

    /*========== HOME ==========*/
    .home__container {
        row-gap: .5rem;
    }

    .home__img {
        width: 280px;
        justify-self: center;
    }

    .home__title {
        font-size: var(--biggest-font-size);
        font-weight: var(--font-bold);
        margin-bottom: var(--mb-2);
    }

    .home__description {
        margin-bottom: var(--mb-3);
        line-height: 30px;
    }

    /*========== BUTTONS ==========*/
    .button {
        display: inline-block;
        background-color: var(--first-color);
        color: #fff;
        padding: 1rem 1.5rem;
        border-radius: 23.5rem;
        font-weight: var(--font-semi-bold);
        transition: .3s;
        font-size: 20px;
    }

    .button:hover {
        background-color: var(--first-color-alt);
    }


    /*========== SHARE ==========*/
    .share__data {
        text-align: center;
    }

    .share__description {
        margin-bottom: var(--mb-2);
        line-height: 30px;
    }

    .share__img {
        width: 280px;
        justify-self: center;
    }

    /*========== DECORATION ==========*/
    .step__container {
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    }

    .step__data {
        text-align: center;
        padding: 1rem 1rem 2rem;
        background-color: var(--container-color);
        box-shadow: 0 2px 6px rgba(65, 11, 16, .15);
        border-radius: 1rem;
    }

    .step__data:hover {
        box-shadow: 0 3px 12px rgba(65, 11, 16, .15);
    }

    .step__img {
        width: 200px;
        height: 180px;
        margin-bottom: 20px;
    }

    .step__title {
        color: black;
        font-size: var(--h3-font-size);
    }


    /*========== SEND EMAIL ==========*/
    .send {
        background-color: var(--first-color-send);
    }

    .send__title, .send__description {
        color: #fff;
    }

    .send__description {
        text-align: center;
        margin-bottom: var(--mb-4);
    }

    .send__direction {
        display: flex;
        justify-content: space-between;
        background-color: #fff;
        padding: .5rem;
        border-radius: .5rem;
    }

    .send__input {
        width: 70%;
        outline: none;
        border: none;
        font-size: var(--normal-font-size);
        font-family: var(--body-font);
    }

    .send__input::placeholder {
        font-family: var(--body-font);
    }

    .send__img {
        width: 280px;
        justify-self: center;
    }

    /*========== MEDIA QUERIES ==========*/

    /* For full-screen images on small screens */
    @media screen and (max-width: 359px) {
        .home__img,
        .share__img,
        .send__img {
            width: 100%;
        }
    }

    @media screen and (min-width: 576px) {
        .home__container,
        .share__container,
        .send__container {
            grid-template-columns: repeat(2, 1fr);
            align-items: center;
        }

        .home__container {
            padding: 5rem 0 0;
        }

        .home__img {
            order: 1;
        }

        .section-title-center,
        .share__data,
        .send__description {
            text-align: initial;
        }

        .home__img,
        .share__img,
        .send__img {
            width: 100%;
        }

        .share__img {
            order: -1;
        }
    }

    @media screen and (min-width: 768px) {
        body {
            margin: 0;
        }

        .section {
            padding-top: 7rem;
        }

        .home__container {
            padding: 7rem 2rem 0;
        }

        .share__container {
            padding: 0 2rem;
        }

        .send {
            background: none;
        }

        .send__container {
            background-color: var(--first-color-send);
            padding: 2rem;
            border-radius: 1.5rem;
        }
    }

    @media screen and (min-width: 968px) {
        .bd-container {
            margin-left: auto;
            margin-right: auto;
        }

        .home__img,
        .share__img,
        .send__img {
            width: 469px;
        }

        .home__container,
        .share__container,
        .send__container {
            column-gap: 5rem;
        }
    }


    /*========== PARALLX - HERO SECTION ==========*/
    .container {
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #hero {
        background-image: url('https://www.naava.io/hubfs/Images/Naava%20Media/Editorial/2017-11/coding-naava-hero.jpg');
        background-size: cover;
        background-position: top center;
        position: relative;
        z-index: 1;
        min-height: 650px;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }

    #hero::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: black;
        opacity: 0.3;
        z-index: -1;
    }

    #hero .hero {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 50px;
        justify-content: flex-start;
    }

    #hero h1 {
        display: block;
        width: fit-content;
        font-size: 4rem;
        position: relative;
        color: transparent;
        animation: text_reveal 0.5s ease forwards;
        animation-delay: 1s;
    }

    #hero h1:nth-child(1) {
        animation-delay: 1s;
    }

    #hero h1:nth-child(2) {
        animation-delay: 2s;
    }

    #hero h1:nth-child(3) {
        animation: text_reveal_name 0.5s ease forwards;
        animation-delay: 3s;
    }

    #hero h1 span {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0;
        background-color: #87CEFA;
        animation: text_reveal_box 1s ease;
        animation-delay: 0.5s;
    }

    #hero h1:nth-child(1) span {
        animation-delay: 0.5s;
    }

    #hero h1:nth-child(2) span {
        animation-delay: 1.5s;
    }

    #hero h1:nth-child(3) span {
        animation-delay: 2.5s;
    }

    /* End Hero Section */


    /* Keyframes */
    @keyframes hamburger_puls {
        0% {
            opacity: 1;
            transform: scale(1);
        }
        100% {
            opacity: 0;
            transform: scale(1.4);
        }
    }

    @keyframes text_reveal_box {
        50% {
            width: 100%;
            left: 0;
        }
        100% {
            width: 0;
            left: 100%;
        }
    }

    @keyframes text_reveal {
        100% {
            color: white;
        }
    }

    @keyframes text_reveal_name {
        100% {
            color: #87CEFA;
            font-weight: 500;
        }
    }

    /* End Keyframes */

    @media only screen and (min-width: 1024px) {
        #hero h1 {
            font-size: 7rem;
        }
    }

    @media (max-width: 600px) {
        #hero h1 {
            font-size: 2rem;
        }
    }

    .text-center {
        text-align: center;
    }
</style>

<script>
    /*==================== IMAGE SLIDER ====================*/

    var TrandingSlider = new Swiper('.tranding-slider', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2.5,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });


    /*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
    const sections = document.querySelectorAll('section[id]')

    function scrollActive() {
        const scrollY = window.pageYOffset

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight
            const sectionTop = current.offsetTop - 50;
            sectionId = current.getAttribute('id')
        })
    }

    window.addEventListener('scroll', scrollActive)

    /*==================== SHOW SCROLL TOP ====================*/
    function scrollTop() {
        const scrollTop = document.getElementById('scroll-top');
        // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
        if (this.scrollY >= 560) scrollTop.classList.add('show-scroll'); else scrollTop.classList.remove('show-scroll')
    }

    window.addEventListener('scroll', scrollTop)

    /*==================== SCROLL REVEAL ANIMATION ====================*/
    const sr = ScrollReveal({
        distance: '30px',
        duration: 1800,
        reset: true,
    });

    sr.reveal(`.home__data, .home__img,
           .step__data,
           .accessory__content,
           .footer__content`, {
        origin: 'top',
        interval: 200,
    })

    sr.reveal(`.share__img, .send__content`, {
        origin: 'left'
    })

    sr.reveal(`.share__data, .send__img`, {
        origin: 'right'
    })
</script>
