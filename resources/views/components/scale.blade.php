<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--fontawesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


    <title>Dorubtech</title>
</head>
<body>

<!-- As a heading -->
<nav class="navbar navbar-expand-lg navbar-light lf-header-bg p-0 fixed-top">
    <div class="col-lg-3 rh-header-bg border-right-warninig">
        <a class="navbar-brand" href="{{route("home")}}">
            <img class="center-block header-logo" src="/img/dorubtech_logo.png" alt="">
        </a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="col-lg-8 lf-header-bg p-2">
        <div class="collapse navbar-collapse nav-links float-lg-right" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("home")}}">{{__('translations.home')}} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("aboutUs")}}">{{__('translations.about_us')}}</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("services")}}">{{__('translations.services')}}</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("ourPartners")}}">{{__('translations.partners')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                            @endif
                        @endforeach
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="mt-1 btn btn-light btn-contact text-dark" href="{{route("contactUs")}}" id="contact-button">{{__('translations.contact_us')}}<i class="far fa-paper-plane"></i></a>
                </li>

            </ul>
        </div>
    </div>
</nav>

{{$slot}}

<!-- Footer -->
<footer class="page-footer font-small bg-blue-dark text-white pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">


        <div class="row">
            <div class="col-lg col-md col-sm justify-content-center">
                <img class="center-block" src="/img/logo_footer.png" alt=""  height="180">
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div col="col">
                <span class="contactus-footer">{{__('translations.contact_us')}}</span>
            </div>
        </div>

        <!-- Grid row -->
        <div class="row justify-content-center mt-4">

            <div class="col-lg-3 text-center m-0">
        <span class="footer-location-icon">
        <i class="fas fa-map-marked-alt"></i>
        <p class="m-0">location number 1 goes here</p>
        <p>location number 2 goes here</p>
        </span>
            </div>

            <div class="col-lg-3 text-center m-0">
        <span class="footer-email-icon">
        <i class="fas fa-envelope"></i>
        <p class="m-0">email@number1.com</p>
        <p>email@number2.com</p>
        </span>
            </div>

            <div class="col-lg-3 text-center m-0">
        <span class="footer-phone-icon">
        <i class="fas fa-phone-square-alt"></i>
        <p class="m-0">+00218927548375</p>
        <p>+00218927548375</p>
        </span>
            </div>

        </div>

        <div class="row  mt-5 mb-5 ">
            <div class="col text-center">
                <a class="social-media mr-2" href="#">
                    <i class="fab fa-facebook-f "></i>
                </a>
                <a class="social-media mr-2" href="#">
                    <i class="fab fa-instagram "></i>
                </a>
                <a class="social-media mr-2" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="social-media mr-2" href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->

    <div class="footer-copyright text-center bg-footer-bottom py-3">
        <span class="float-left offset-1 text-white">{{__('translations.rights')}}</span>
        .
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
<!-- Scripts -->
<script src="{{ asset('js/custom.js') }}" defer></script>

</html>
