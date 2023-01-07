<header>
    <nav>
        <div class="logo"><a href="{{route('home')}}"><span class="brand-color">M</span>anuela <span class="brand-color">V</span>lasin</a></div>
        <div class="toggle__menu" id="toggle-menu">
            <i style="color: #87CEFA; font-size: 25px;" class="bx bx-grid-alt"></i>
        </div>
        <ul class="nav__list" id="nav-menu">
            <div class="close__menu" id="close-menu">
                <i class="bx bx-x"></i>
            </div>
            <li class="nav__item"><a href="{{route('home')}}" class="nav__link">{{__('Home')}}</a></li>
            <li class="nav__item dropdown"><a href="#" class="nav__link dropdown__link">{{__('Courses')}}
                    <i class="bx bxs-chevron-down dropdown__icon"></i>
                </a>
                <div class="megamenu">
                    <ul class="content">
                        <li class="megamenu__item">
                            <div class="menu__icon">
                                <i class="bx bx-palette"></i>
                            </div>
                            <div class="megamenu__link">
                                <a href="{{route('course', ['courseId' => 1])}}">Introduction to Web Development</a>
                                <p>Learn to create your own website</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="content">
                        <li class="megamenu__item">
                            <div class="menu__icon">
                                <i class="bx bx-palette"></i>
                            </div>
                            <div class="megamenu__link">
                                <a href="{{route('course', ['courseId' => 2])}}">Adaptive Web Design</a>
                                <p>Create your own responsive project</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="content">
                        <li class="megamenu__item">
                            <div class="menu__icon">
                                <i class="bx bx-palette"></i>
                            </div>
                            <div class="megamenu__link">
                                <a href="{{route('course', ['courseId' => 3])}}">PHP & Laravel</a>
                                <p>Create your own project with Laravel</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </li>
            <li class="nav__item"><a href="{{route('personal-info')}}"  class="nav__link">{{__('Personal Info')}}</a></li>
            <li class="nav__item"><a href="{{route('contact')}}" class="nav__link">{{__('Contact')}}</a></li>

        </ul>

    </nav>
</header>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;1,100;1,200&family=Roboto:wght@100&family=Source+Sans+Pro:ital@1&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .brand-color{
        color: #87CEFA;
    }

    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }


    body {
        background-color: #f0f0f0;
        max-width: 100%;
        overflow-x: hidden;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #fff;
        z-index: 99;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        height: 4rem;
        padding: 0 1rem;
        margin: 0 auto;
        z-index: 999;
    }

    .toggle__menu,
    .close__menu {
        display: none;
    }

    .logo a {
        font-size: 1.75rem;
        color: #000;
        font-family: 'Tangerine', serif;
        text-shadow: 4px 4px 4px #aaa;
    }

    .nav__list {
        display: flex;
    }

    .nav__item {
        margin: 0 1.5rem;
        padding: 1.4rem 0;
        color: black;
    }

    .nav__link {
        font-weight: 500;
        color: #544756;
    }

    .nav__list .nav__item .nav__link:hover {
        color: #73C2FB;
    }

    .dropdown__link {
        display: flex;
        align-items: center;
    }

    .dropdown__icon {
        font-size: 1rem;
    }

    .megamenu {
        /*position: absolute;*/
        position: fixed;
        width: 100%;
        left: 0;
        background-color: #fff;
        display: flex;
        justify-content: center;
        border-radius: 0 0 20px 20px;
        box-shadow: 0 23px 23px -21px rgba(0, 0, 0, 0.25);
        z-index: -99;
        visibility: hidden;
        opacity: 0;
        margin-top: 10px;
    }

    .content {
        display: flex;
        flex-direction: column;
        padding: 1rem 1rem;
    }

    .megamenu__item {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .header__megamenu {
        font-weight: 600;
        color: #a8a1b5;
        margin-bottom: 1rem;
    }

    .menu__icon {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        align-items: center;
        background-color: #efeef1;
        margin-right: 0.5rem;
    }

    .menu__icon i {
        line-height: 32px;
        font-size: 22px;
        color: #73C2FB;
    }

    .megamenu__link a {
        font-weight: 500;
        color: #000;
    }

    .megamenu__link a:hover {
        color: #73C2FB;
    }

    .megamenu__link p {
        font-size: 0.6875rem;
        font-weight: 400;
        color: #a8a1b5;
    }

    .dropdown:hover .megamenu {
        color: #73C2FB;
        visibility: visible;
        transition: all 0.3s ease;
        opacity: 1;
    }

    .nav__item:hover .dropdown__icon {
        transform: rotate(180deg);
        transition: all 0.3s ease;
    }

    @media screen and (max-width: 992px) {
        .megamenu {
            justify-content: start;
            flex-wrap: wrap;
        }
    }

    @media screen and (max-width: 768px) {
        .megamenu {
            flex-direction: column;
            position: static;
            box-shadow: none;
            border-radius: 0;
            height: 0;
            max-width: 350px;
            overflow: hidden;
        }

        .dropdown:hover .megamenu {
            height: 100%;
        }

        .nav__list {
            position: absolute;
            height: 100vh;
            width: 100%;
            left: -100%;
            max-width: 350px;
            top: 0;
            background-color: #fff;
            flex-direction: column;
            overflow-x: hidden;
            display: block;
            transition: 0.3s;
        }

        .toggle__menu,
        .close__menu {
            display: block;
        }

        .toggle__menu i :hover {
            color: #73C2FB;
        }

        .close__menu {
            margin: 1rem 1rem 1rem auto;
            background-color: #73C2FB;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            text-align: center;
        }

        .close__menu:hover {
            color: #632e70;

        }

        .close__menu i {
            line-height: 32px;
            color: #fff;
            font-size: 22px;
        }

        .show__menu {
            left: 0;
        }
    }
</style>

<script>
    const navMenu = document.getElementById('nav-menu'),
        toggleMenu = document.getElementById('toggle-menu'),
        closeMenu = document.getElementById('close-menu')

    toggleMenu.addEventListener('click', () => {
        navMenu.classList.toggle('show__menu')
    })

    closeMenu.addEventListener('click', () => {
        navMenu.classList.remove('show__menu')
    })
</script>
