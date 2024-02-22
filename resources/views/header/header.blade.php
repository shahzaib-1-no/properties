<!doctype html>
<html lang="en">

<head>
    <title>Business Properties:: @yield('title')</title>
    <link rel="icon" href="images/newlogo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css')}}" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap')}}" rel="stylesheet" />
    <!-- MDB -->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css')}}" rel="stylesheet" />

    <link href="{{asset('https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&display=swap')}}"
        rel="stylesheet">

    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="{{asset('//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css')}}">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="{{asset('//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/input-range-slider@2.3.2/dist/css/input-range-slider.min.css')}}"
        rel="stylesheet">

    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href='{{asset('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css')}}' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css')}}"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css')}}"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css')}}"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('https://unpkg.com/aos@2.3.1/dist/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="css/navcss.css">
    <style>




    </style>

</head>

<body>

    <nav>
        <header id="header-wrapper">
            <div class="container-fluid py-2 w-100" style="background: #d4ab58;">
                <div class="container-fluid navv nav">
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="grand-parent">
                            <div class="icon-parent mr-3 pb-5"> <a href="mailto:info@example.com"> <i
                                        class="fa-solid fa-envelope text-white" id="topicon"></i> <span
                                        class="text-white">info@example.com</span></a></div>
                            <div class="icon-parent mr-3 pb-5"> <a href="https://maps.app.goo.gl/xNyQgcF2qYb54KuD6"><i
                                        class="fa-solid fa-location-dot text-white" id="topicon"></i> <span
                                        class="text-white">6391 Elgin St. Celina, 10299</span></a></div>
                            <div class="icon-parent pb-5"> <a href="tel:(629) 555-0129"> <i
                                        class="fa-solid fa-phone-volume text-white" id="topicon"></i> <span
                                        class="text-white">(629) 555-0129</span></a></div>
                        </div>
                    </div>



                    <div class="col-lg-4 float-right d-block d-md-none d-lg-block">
                        <div class="grand-parent-second-col d-flex justify-content-between justify-content-md-end ">


                            <div class="dropdown icon-parent mr-5 pb-5" style="position: relative; z-index: 32000;">


                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="flag-united-kingdom flag m-0"></i> English
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            onclick="selectLanguage('English')"><i
                                                class="flag-united-kingdom flag"></i> English</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="#" onclick="selectLanguage('Polski')"><i
                                                class="flag-poland flag"></i> Polski</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="#"
                                            onclick="selectLanguage('Deutsch')"><i class="flag-germany flag"></i>
                                            Deutsch</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            onclick="selectLanguage('Français')"><i class="flag-france flag"></i>
                                            Français</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            onclick="selectLanguage('Español')"><i class="flag-spain flag"></i>
                                            Español</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="#"
                                            onclick="selectLanguage('Português')"><i class="flag-portugal flag"></i>
                                            Português</a>
                                    </li>
                                </ul>

                            </div>

                            <div class="icon-parent mr-3 pb-5"><i class="fa-brands fa-facebook-f" id="topicon"></i>
                            </div>
                            <div class="icon-parent mr-3 pb-5"><i class="fa-brands fa-instagram" id="topicon"></i>
                            </div>
                            <div class="icon-parent mr-3 pb-5"><i class="fa-brands fa-x-twitter" id="topicon"></i>
                            </div>
                            <div class="icon-parent mr-3 pb-5"><i class="fa-brands fa-linkedin-in"
                                    id="topicon"></i></div>
                        </div>
                    </div>

                    <div class="col-12 d-none d-md-block d-lg-none">
                        <div class="d-flex justify-content-between">
                            <div class="grand-parent">
                                <div class="icon-parent mr-3 pb-5"> <a href="mailto:info@example.com"> <i
                                            class="fa-solid fa-envelope text-white" id="topicon"></i> <span
                                            class="text-white">info@example.com</span></a></div>

                                <div class="icon-parent pb-5"> <a href="tel:(629) 555-0129"> <i
                                            class="fa-solid fa-phone-volume text-white" id="topicon"></i> <span
                                            class="text-white">(629) 555-0129</span></a></div>
                            </div>

                            <div class="grand-parent">
                                <div class="dropdown icon-parent mr-5 pb-5"
                                    style="position: relative; z-index: 32000;">


                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="flag-united-kingdom flag m-0"></i> English
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                onclick="selectLanguage('English')"><i
                                                    class="flag-united-kingdom flag"></i> English</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#"
                                                onclick="selectLanguage('Polski')"><i class="flag-poland flag"></i>
                                                Polski</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#"
                                                onclick="selectLanguage('Deutsch')"><i class="flag-germany flag"></i>
                                                Deutsch</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                onclick="selectLanguage('Français')"><i class="flag-france flag"></i>
                                                Français</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                onclick="selectLanguage('Español')"><i class="flag-spain flag"></i>
                                                Español</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#"
                                                onclick="selectLanguage('Português')"><i
                                                    class="flag-portugal flag"></i> Português</a>
                                        </li>
                                    </ul>

                                </div>

                                <div class="icon-parent mr-3 pb-5"><i class="fa-brands fa-facebook-f"
                                        id="topicon"></i></div>
                                <div class="icon-parent mr-3 pb-5"><i class="fa-brands fa-instagram"
                                        id="topicon"></i></div>
                                <div class="icon-parent mr-3 pb-5"><i class="fa-brands fa-x-twitter"
                                        id="topicon"></i></div>
                                <div class="icon-parent mr-3 pb-5"><i class="fa-brands fa-linkedin-in"
                                        id="topicon"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container-fluid navvab p-0" id="abc">
                <hr class="my-0 d-lg-none" />

                <div class="navbarBgDark" data-bs-theme="dark">
                    <div class="d-md-none d-flex align-items-center">
                        <div class="text-white mt-3 px-4"> <a href="index.php"><img src="images/newlogo.png"
                                    class="w-100 img-fluid float-left" srcset="" /></a> </div>

                        <button class="navbar-toggler w-100 mt-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <div class="">
                                <!-- <div class="text-white"><img src="images/newlogo.png" class="w-25 img-fluid float-left" srcset="" /></div> -->
                                <span class="fa-solid fa-bars"></span>
                            </div>
                        </button>

                        <div class="d-md-none text-white mr-3 align-items-center mt-2" id="btnnn">
                            <i class="fa-solid fa-magnifying-glass" onclick="openSearchHero()"></i>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-md justify-content-center justify-content-lg-between">
                        <div class="p-0">
                            <div class="display-5 fw-bold px-2 py-1 text-lg-start d-none d-md-block text-white"><a
                                    href="{{asset('/')}}"><img src="images/newlogo.png" class="w-75"
                                        srcset="" /></a></div>
                        </div>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link pe-3" href="{{asset('/')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <!-- <a class="nav-link px-lg-3" href="about->us.php">About Us</a> -->
                                    <a class="nav-link px-lg-3" href="{{asset ('about')}}">About Us</a>

                                </li>



                                <li class="nav-item">
                                    <a class="nav-link px-lg-3" href="{{asset ('services')}}"> Service</a>
                                </li>
                                <!--<li class="nav-item">-->
                                <!--    <a class="nav-link px-lg-3" href="#">Products</a>-->
                                <!--</li>-->
                                <li class="nav-item">
                                    <a class="nav-link px-lg-3" href="{{asset('blog')}}">Blogs</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle px-lg-3" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/properties/add-listing.php">Add
                                                Listing</a></li>
                                        <li><a class="dropdown-item" href="/properties/listing-detail.php">Listing
                                                Details</a></li>
                                        <li><a class="dropdown-item" href="/properties/services-details.php">Services
                                                Details</a></li>
                                        <li><a class="dropdown-item" href="/properties/login.php">Login</a></li>
                                        <li><a class="dropdown-item" href="/properties/sign-up.php">Sign Up</a></li>
                                        <li><a class="dropdown-item" href="/properties/payment.php">Payment</a></li>
                                        <!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link px-lg-3" href="{{asset('contact')}}">Contact</a>
                                </li>
                            </ul>
                            <div class="d-none d-md-block text-white mr-3 align-items-center"
                                onclick="openSearchHero()" id="btnnn">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </nav>
    <div id="FullScreenOverlay" class="overlay">
        <span class="closebtn" onclick="closeSearchHero()" title="Close Overlay">×</span>
        <div class="overlay-content">
            <form>
                <input type="text" placeholder="Name the thing you love, we find best price for you"
                    name="search" />
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>



