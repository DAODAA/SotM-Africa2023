<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'SotM Africa 2023')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Jquery block -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" type="text/css" />
    <!-- Another css file -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand logo logo-light" href="{{ route('home') }}"><img
                    src="{{ asset('logos/SotmAfrica2023.svg') }}" alt="SotmAfrica2023_logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">CALL FOR PARTICIPATION</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">BLOG</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">SPONSORS</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content" id="content">@yield('content')</div>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row footer-links py-4">
                <div class="col-md-2 ">
                    <p class="footer-p">Contacts</p>
                    <ul>
                        <li> <a class="text-reset" href=" mailto:contact@stateofthemap.africa "
                                target="_blank">contact@stateofthemap.africa</a></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <p class="footer-p">Links</p>
                    <ul>
                        <li><a class="text-reset"
                                href="https://wiki.openstreetmap.org/wiki/State_of_the_Map_Africa_2023 "
                                target="_blank">Wiki
                                page</a>
                        </li>
                        <li><a class="text-reset" href="https://openstreetmap.africa/" target="_blank">OSM Africa</a>
                        </li>
                        <li><a class="text-reset" href="#" target="_blank">Code of Conduct</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('home') }}"><img id="footer-logo" src="{{ asset('logos/SotmAfrica2023.svg') }}"
                            alt="SotmAfrica2023_logo" /></a>
                </div>
            </div>
            <div class="row ">
                <a class="btn btn-social" href="https://twitter.com/sotmafrica" aria-label="Twitter"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-social" href="https://www.facebook.com/sotmafrica" aria-label="Facebook"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-social" href="#!" aria><i class="fa-solid fa-rss"></i></a>
            </div>
            <div class="row align-items-center pt-3 mb-0">
                <div class="col-lg-8 text-md-start">
                    <p>©2023 Based on Project Zeppelin. Developped ALBERT DAODA</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="{{ asset('template/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
