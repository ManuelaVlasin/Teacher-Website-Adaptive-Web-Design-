<div class="personal-info-container">
    <div class="header-info">

        <div class="user">
            <img src="{{asset(url('images/Manuela.jpg'))}}" alt="">
            <h3 class="name">Vlașin Manuela</h3>
            <p class="post">PHP Web Developer</p>
        </div>

        <div class="personal-info-buttons">
            <ul>
                <li><a href="#about">About Me</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#portfolio">Portofolio & Experience</a></li>
            </ul>
        </div>

    </div>


    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"><span>About</span> me </h1>

        <div class="row">

            <a href="{{asset(url('documents/CV_R_Vlasin_Manuela.pdf'))}}" download>
                <button class="cv-btn"> Download CV <i class="fas fa-download"></i></button>
            </a>

            <div class="counter">

                <div class="box">
                    <span>2+</span>
                    <h3>years of experience</h3>
                </div>

                <div class="box">
                    <span>30+</span>
                    <h3>porject completed</h3>
                </div>

                <div class="box">
                    <span>42+</span>
                    <h3>happy clients</h3>
                </div>

                <div class="box">
                    <span>12+</span>
                    <h3>awards won</h3>
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- education section starts  -->

    <section class="education" id="education">

        <h1 class="heading"><span>Education</span></h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2014</span>
                <h3>High school - Computer Science</h3>
                <p>2014 - 2018 "Liviu Rebreanu" High School, Bistrita, Romania</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2018</span>
                <h3>Bachelor in Computer Science</h3>
                <p>2018 - 2021 "Babeș-Bolyai" University Cluj-Napoca, Romania</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2021</span>
                <h3>Master in Computer Science</h3>
                <p>2021 - 2023 "Babeș-Bolyai" University Cluj-Napoca, Romania</p>
            </div>
        </div>

    </section>

    <!-- education section ends -->


    <!-- portfolio section starts  -->

    <section class="portfolio" id="portfolio">

        <h1 class="heading"><span>Experience</span></h1>

        <div class="box-container">

            <div class="box">
                <img
                    src="https://media.licdn.com/dms/image/C4D0BAQGzyYxragIqDA/company-logo_200_200/0/1618816139021?e=2147483647&v=beta&t=jIC_em25nfHZoS17MbHJm1km__lYE0X5PeXynZinuII"
                    alt="">
            </div>

            <div class="box">
                <img
                    src="data:image/png;base64,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"
                    alt="">
            </div>

            <div class="box">
                <img
                    src="https://media.licdn.com/dms/image/C4D0BAQFhnivk5o5AFw/company-logo_200_200/0/1629722358408?e=2147483647&v=beta&t=guHvNA4UsEpe1-R9AemAI5gdPS16SQC-3TyGuDjftHU"
                    alt="">
            </div>

            <div class="box">
                <img src="https://miro.medium.com/max/1400/1*m0s2io11J82PR7miqan92w.png" alt="">
            </div>

            <div class="box">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png"
                    alt="">
            </div>

            <div class="box">
                <img
                    src="https://assets-global.website-files.com/5abc6c4b0a243a2dc939ee6e/5fdb9a22ba607c7ef857d83e_mysql.svg"
                    alt="">
            </div>

            <div class="box">
                <img src="http://p92.com/binaries/content/gallery/p92website/technologies/htmlcssjs-overview.png"
                     alt="">
            </div>
        </div>

    </section>

    <!-- portfolio section ends -->
</div>

<style>
    :root {
        --blue: #87CEFA;
    }

    .personal-info-container {
        font-size: 62.5%;
        overflow-x: hidden;
    }

    .personal-info-container::-webkit-scrollbar {
        width: 1.4rem;
    }

    .personal-info-container::-webkit-scrollbar-track {
        /*background:#222;*/
    }

    .personal-info-container::-webkit-scrollbar-thumb {
        background: var(--blue);
    }

    .personal-info-container {
        overflow-x: hidden;
        padding-left: 35rem;
    }

    .cv-btn {
        padding: .7rem 3rem;
        cursor: pointer;
        font-size: 1rem;
        border-radius: 5rem;
        margin: 0 auto;
        display: flex;
    }

    .cv-btn i {
        padding: 0 .5rem;
        font-size: 1.8rem;
    }

    .cv-btn:hover {
        background: var(--blue);
    }

    .heading {
        text-align: center;
        margin: 70px 6rem 0;
        font-size: 4rem;
        padding: 1rem;
        border-bottom: .1rem solid #333;
    }

    .heading span {
        color: var(--blue);
    }

    .header-info {
        position: absolute;
        top: 10%;
        left: 0;
        z-index: 1000;
        height: 100%;
        width: 35rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-flow: column;
        text-align: center;
    }

    .header-info .user img {
        height: 15rem;
        width: 15rem;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 1rem;
        border: .7rem solid var(--blue);
    }

    .header-info .user .name {
        font-size: 3.5rem;
        color: #333;
    }

    .header-info .user .post {
        font-size: 2rem;
    }

    .header-info .personal-info-buttons {
        width: 100%;
    }

    .header-info .personal-info-buttons ul {
        list-style: none;
        padding: 1rem 3rem;
    }


    .header-info .personal-info-buttons ul li a {
        display: block;
        padding: 1rem;
        margin: 1.5rem 0;
        background: #333;
        font-size: 1rem;
        border-radius: 5rem;
    }

    .header-info .personal-info-buttons ul li a:hover {
        background: var(--blue);
    }

    .about .row {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        padding: 1rem 0;
    }


    .about .row .counter {
        flex: 1 1 48rem;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .about .row .counter .box {
        width: 20rem;
        background: #333;
        text-align: center;
        padding: 2rem;
        margin: 2rem;
    }

    .about .row .counter .box span {
        font-size: 4rem;
        color: var(--blue);
    }

    .about .row .counter .box h3 {
        font-size: 2rem;
    }

    .education .box-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        padding-left: 3rem;
    }

    .education .box-container .box {
        width: 27rem;
        margin: 4rem 1rem;
        padding-left: 4rem;
        border-left: .2rem solid #333;
        position: relative;
    }

    .education .box-container .box span {
        font-size: 1.3rem;
        background: #222;
        color: #fff;
        border-radius: 5rem;
        padding: .5rem 2.5rem;
    }

    .education .box-container .box h3 {
        font-size: 2rem;
        color: #333;
        padding-top: 1.5rem;
    }

    .education .box-container .box p {
        font-size: 1.4rem;
        padding: 1rem 0;
    }

    .education .box-container .box i {
        position: absolute;
        top: -1.5rem;
        left: -2.5rem;
        height: 5rem;
        width: 5rem;
        border-radius: 50%;
        line-height: 5rem;
        text-align: center;
        font-size: 2rem;
        background: var(--blue);
    }

    .portfolio .box-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        padding: 2rem 0;
    }

    .portfolio .box-container .box {
        height: 20rem;
        width: 26rem;
        border-radius: 1rem;
        margin: 2rem;
        overflow: hidden;
        cursor: pointer;
    }

    .portfolio .box-container .box img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .portfolio .box-container .box:hover img {
        transform: scale(1.2);
    }

    /* media queries  */

    @media (max-width: 1200px) {

        .personal-info-container {
            font-size: 55%;
        }

        .header-info .user img {
            height: 10rem;
            width: 10rem;
            margin-top: 70%;
        }

        .header-info .user .name {
            font-size: 1.5rem;
        }

        .heading {
            font-size: 2rem;
        }

        .about .row .counter .box {
            width: 100%;
        }

        .education .box-container .box {
            width: 100%;
        }

        .portfolio .box-container .box {
            width: 100%;
        }

        .education .box-container .box h3 {
            font-size: 1.5rem;
            text-align: inherit;
        }

        .portfolio .box-container .box img {
            object-fit: unset;
        }

    }

    @media (max-width: 991px) {

        .header-info {
            left: -120%;
        }

        .header-info.toggle {
            left: 0%;
        }

        .personal-info-container {
            padding: 0;
        }

        .header-info {
            width: 100vw;
            display: contents;
        }

        .header-info .user img {
            height: 10rem;
            width: 10rem;
        }

        .header-info .user .name {
            font-size: 1.5rem;
        }

        .heading {
            margin: 0 3rem;
            font-size: 2rem;
        }

        .about .row .counter .box {
            width: 100%;
        }

        .education .box-container .box {
            width: 100%;
        }

        .portfolio .box-container .box {
            width: 100%;
        }

        .education .box-container .box h3 {
            font-size: 1.5rem;
            text-align: inherit;
        }

    }

    @media (max-width: 768px) {

        .personal-info-container {
            font-size: 50%;
        }

        .header-info {
            width: 100vw;
            display: contents;
        }

        .header-info .user img {
            height: 10rem;
            width: 10rem;
            margin-top: 10%;
        }

        .header-info .user .name {
            font-size: 1.5rem;
        }

        .heading {
            margin: 0 3rem;
            font-size: 2rem;
        }

        .about .row .counter .box {
            width: 100%;
        }

        .education .box-container .box {
            width: 100%;
        }

        .portfolio .box-container .box {
            width: 100%;
        }

        .education .box-container .box h3 {
            font-size: 1.5rem;
            text-align: inherit;
        }

        .portfolio .box-container .box img {
            object-fit: unset;
        }

    }

    @media (max-width: 700px) {

        .header-info {
            width: 100vw;
            display: contents;
        }

        .header-info .user img {
            height: 10rem;
            width: 10rem;
            margin-top: 30%;
        }

        .header-info .user .name {
            font-size: 1.5rem;
        }

        .heading {
            margin: 0 3rem;
            font-size: 2rem;
        }

        .about .row .counter .box {
            width: 100%;
        }

        .education .box-container .box {
            width: 100%;
        }

        .portfolio .box-container .box {
            width: 100%;
        }

        .education .box-container .box h3 {
            font-size: 1.5rem;
            text-align: inherit;
        }

        .portfolio .box-container .box img {
            object-fit: unset;
        }
    }
</style>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $(window).on('scroll load', function () {

            $('.header-info').removeClass('toggle');

            if ($(window).scrollTop() > 0) {
                $('.top').show();
            } else {
                $('.top').hide();
            }

        });

        // smooth scrolling

        $('a[href*="#"]').on('click', function (e) {

            e.preventDefault();

            $('html, body').animate({

                    scrollTop: $($(this).attr('href')).offset().top,

                },
                500,
                'linear'
            );

        });

    });
</script>
