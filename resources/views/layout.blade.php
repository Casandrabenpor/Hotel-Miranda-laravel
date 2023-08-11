<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ url('/css/styles.css') }}" />
    <!-- Incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluir Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://kit.fontawesome.com/fef5116784.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<!-- HEADER -->

<body>
    <header>
        <div class="nav__container-menu">
            <button class="nav__burger"></button>
            <a href="./">
                <div class="nav__logo">
                    <div class="nav__container-logo">
                        <img src="../assets/nav/logo.png" alt="logo" />
                    </div>
                    <img src="../assets/nav/Hotel Miranda.png" alt="Hotel Miranda" />
                </div>
            </a>

        </div>
        <ul class="nav">
            <li class="nav-link heartbeat"><a href="/about">About Us</a></li>
            <li class="nav-link heartbeat"><a href="/rooms">Rooms</a></li>
            <li class="nav-link heartbeat"><a href="/offers">Offers</a></li>
            <li class="nav-link heartbeat"><a href="/contact">Contact</a></li>
        </ul>
        <div class="nav__icons">
            <img src="../assets/nav/human.png" alt="human icon" />
            <img src="../assets/nav/search.png" alt="search" />
        </div>
    </header>
    <!-- CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    <footer>
        <div id="options_footer">
            <div class="options__footer">
                <img src="../assets/footer/Logo footer.png" alt="hotel Miranda" />
                <p class="text__footer-paragraph text-gray-color">Lorem ipsum dolor sit amet, consect etur adipisicing
                    elit,
                    sed doing eius mod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
                </p>
                <img src="../assets/footer/Socials.png" alt="socials" />
            </div>
            <div class="options__footer">
                <p class="text__options text-black">Services</p>
                <div id="footer_services">
                    <ul class="text__footer-services  text-gray-color">
                        <li> + Resturent & Bar</li>
                        <li> + Swimming Pool</li>
                        <li>+ Wellness & Spa</li>
                        <li>+ Restaurant</li>
                        <li>+ Conference Room</li>
                        <li>+ Coctail Party House</li>
                    </ul>
                    <ul class="text__footer-services  text-gray-color">
                        <li>+ Gaming Zone </li>
                        <li>+ Marrige Party </li>
                        <li>+ Party Planning </li>
                        <li>+ Tour Consultancy</li>
                    </ul>
                </div>
            </div>
            <div class="options__footer">
                <div class="footer__contact">
                    <img src="../assets/footer/Frame 72.png" alt="contact" />
                </div>
            </div>
        </div>
        <div class="options__footer-copyright">
            <div>
                <p class="text__copyright text-black">Copyright By Casandra - 2023</p>
            </div>
            <div>
                <p class="text__copyright text-black">Terms of use | Privacy Environmental Policy</p>
            </div>
        </div>

    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>

</html>
