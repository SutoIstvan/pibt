<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Paksi Informatika – weboldal, webfejlesztés, webáruház, rendszerüzemeltetés, távmunka, felhős megoldások, pályázati és DIMOP támogatás cégeknek">
    <meta name="google-site-verification" content="oXpBDtGbZJ0SyCDBCwDU5EGM6mL-_TFz4U5rp7IFt0I" />
    <title>@yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {!! htmlScriptTagJsApi() !!}

    <style>
        @media only screen and (max-width: 500px) {
            .g-recaptcha {
                transform: scale(0.77);
                transform-origin: 0 0;
            }
        }

        /* Carousel Hero */
        #template-mo-zay-hero-carousel .carousel-indicators li {
            margin-top: -20px;
            background-color: #21a6fe;
        }

        #template-mo-zay-hero-carousel .carousel-control-next i,
        #template-mo-zay-hero-carousel .carousel-control-prev i {
            color: #21a6fe !important;
            font-size: 2em !important;
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 2;
            display: flex;
            justify-content: center;
            padding-left: 0;
            margin-right: 15%;
            margin-left: 15%;
            list-style: none;
        }
    </style>

</head>

<body>
    {{-- <body data-bs-theme="dark"> --}}

    @include('layouts.nav')


    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="3"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="d-flex justify-content-end mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/wel.png" alt="" height="500px" width="500px"
                                style="opacity: 0.7;">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="display-6 text-body-emphasis lh-2 mb-3 " data-aos="fade-up">
                                    {{ __('menu.professional') }}
                                    @if (app()->getLocale() == 'ru')
                                        <br>
                                    @endif
                                    <span class="text-primary">{{ __('menu.it') }}</span>
                                    {{ __('menu.low_voltage_technology_systems') }}
                                </h1>
                                <p class="lead text-body-secondary mt-1" data-aos="fade-up" data-aos-duration="1000">
                                    A Paksi Informatika több mint 20 éve kínál vállalati IT megoldásokat –
                                    szerverüzemeltetés, hálózatépítés, beléptető rendszerek, webfejlesztés és digitális
                                    infrastruktúra-fejlesztés pályázatokhoz is. Megbízható partner a
                                    digitalizációban!
                                </p>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-2 aos-init aos-animate"
                                    data-aos="fade-up" data-aos-duration="2000">
                                    <button type="button" class="btn btn-outline-primary btn-lg"
                                        onclick="window.location.href='https://pikft.hu/about'">
                                        Részletek
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-lg"
                                        onclick="document.getElementById('contact-form').scrollIntoView({ behavior: 'smooth' });">
                                        Lépjen velünk kapcsolatba!
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="d-flex justify-content-end mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/ser.png" alt="" height="500px" width="500px"
                                style="opacity: 0.7;">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">

                                <h1 class="display-6 text-body-emphasis lh-2 mb-3 " data-aos="fade-up">
                                    <span class="text-primary">
                                        Szerver üzemeltetés
                                    </span>
                                    <small>
                                        Megbízhatóság és stabilitás.
                                    </small>
                                </h1>
                                <p class="lead text-body-secondary mt-1" data-aos="fade-up" data-aos-duration="1000">
                                    Célunk, hogy ügyfeleink számára megbízható, hatékony IT infrastruktúrát
                                    biztosítsunk, amely támogatja mindennapi működésüket. Szolgáltatásaink között
                                    szerepel a szerverek és IT rendszerek tervezése, üzemeltetése, karbantartása,
                                    valamint nyílt forráskódú megoldások, automatizálás és webfejlesztés.
                                </p>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4 aos-init aos-animate"
                                    data-aos="fade-up" data-aos-duration="2000">
                                    <button type="button" class="btn btn-outline-primary btn-lg"
                                        onclick="window.location.href='http://pibt.local/services/server-maintenance'">
                                        Részletek
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-lg"
                                        onclick="document.getElementById('contact-form').scrollIntoView({ behavior: 'smooth' });">
                                        Kérjen árajánlatot
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="d-flex justify-content-end mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/web.png" alt="" height="500px" width="500px"
                                style="opacity: 0.7;">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">

                                <h1 class="display-6 text-body-emphasis lh-2 mb-3 " data-aos="fade-up">
                                    <span class="text-primary">
                                        Webfejlesztés
                                    </span>
                                    <small>
                                        Modern megoldások minden platformra
                                    </small>
                                </h1>

                                <p class="mt-4">
                                    A Paksi Informatika webfejlesztési szolgáltatásokat kínál. Modern,
                                    felhasználóbarát és keresőoptimalizált weboldalakat készítünk, amelyek minden
                                    eszközön jól működnek. Fejlesztői csapatunk a legújabb technológiákat
                                    alkalmazza, hogy egyedi igényeknek megfelelő, hatékony megoldásokat nyújtson,
                                    garantálva ezzel a sikeres online jelenlétet.
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4 aos-init aos-animate"
                                    data-aos="fade-up" data-aos-duration="2000">
                                    <button type="button" class="btn btn-outline-primary btn-lg"
                                        onclick="window.location.href='http://pibt.local/services/web-development'">
                                        Részletek
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-lg"
                                        onclick="document.getElementById('contact-form').scrollIntoView({ behavior: 'smooth' });">
                                        Kérjen árajánlatot
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="d-flex justify-content-end mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/sec.png" alt="" height="500px"
                                width="500px" style="opacity: 0.7;">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">


                                <h1 class="display-6 text-body-emphasis lh-2 mb-3 " data-aos="fade-up">
                                    <span class="text-primary">
                                        Beléptető rendszerek
                                    </span>
                                    <small>
                                        Biztonságos hozzáférés és intelligens megoldások.
                                    </small>
                                </h1>

                                <p>
                                    A Paksi Informatika a legmodernebb beléptető rendszerek telepítésében és
                                    karbantartásában nyújt teljes körű megoldásokat. Beléptető rendszereink nemcsak
                                    növelik a biztonságot, hanem segítenek az adatok gyűjtésében és a hatékonyabb üzleti
                                    folyamatok kialakításában is. </p>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-2 aos-init aos-animate"
                                    data-aos="fade-up" data-aos-duration="2000">
                                    <button type="button" class="btn btn-outline-primary btn-lg"
                                        onclick="window.location.href='http://pibt.local/services/access-control-systems'">
                                        Részletek
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-lg"
                                        onclick="document.getElementById('contact-form').scrollIntoView({ behavior: 'smooth' });">
                                        Kérjen árajánlatot
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->
    <section class="py-8 py-md-11 mb-5 mt-3">
        <div class="container">

            <div class="row mb-5 ">
                {{-- <div class="col-6 ">
                    <div class="d-flex align-items-center ms-0 ms-lg-5">
                      <a class="navbar-brand" href="https://vallalkozzdigitalisan.mkik.hu/" aria-label="Front">
                        <img class="navbar-brand-logo" height="46px" src="{{ asset('assets/img/logo-mvp.png') }}" alt="Logo">
                      </a>
                      <h5 class="mb-0 ms-3" style="font-size:15px; color: #726f6f;">
                        <a class="nav-link p-0" style="color: inherit; text-decoration: none;" href="https://vallalkozzdigitalisan.mkik.hu/">
                          Modern Vállalkozások Programja - <br>Minősített beszállító
                        </a>
                      </h5>
                    </div>
                  </div> --}}

                  <div class="col-12 text-center d-flex justify-content-center align-items-center gap-4">
                    <a href="https://vallalkozzdigitalisan.mkik.hu/" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('mvp.png') }}" height="80px" alt="Modern Vállalkozások Programja - Minősített beszállító">
                    </a>
                    <img src="{{ asset('dell.jpg') }}" height="80px" alt="Dell authorized partners">
                </div>
                
            </div>

        </div>
    </section>


    <section class="py-8 py-md-11 mb-5 mt-5">
        <div class="container">

            <div class="mb-5 text-center">
                <h6 class="display-6 text-body-emphasis lh-2 mb-3" data-aos="fade-up">
                    {{ __('menu.our_services') }}
                </h6>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up"
                    data-aos-delay="100">
                    <a href="{{ route('services.server_maintenance') }}" style="text-decoration: none">

                        <!-- Icon -->
                        <div class="icon text-primary mb-3 ms-3 pt-4">
                            <img src="assets/service/server.png" height="44" alt="">
                        </div>
                        <!-- Heading -->
                        <h5 class="ms-3 text-secondary">
                            {{ __('menu.server_maintenance') }}
                        </h5>

                        <!-- Text -->
                        <p class="text-body-secondary mb-0 ms-3">
                            {{ __('menu.server_maintenance_description') }}
                        </p>
                    </a>
                    <p></p>
                </div>

                <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up">
                    <a href="{{ route('services.network_infrastructure') }}" style="text-decoration: none">

                        <!-- Icon -->
                        <div class="icon text-primary mb-3 ms-3 pt-4">
                            <img src="assets/service/structure.png" height="44" alt="">
                        </div>
                        <!-- Heading -->
                        <h5 class="ms-3 text-secondary">
                            {{ __('menu.network_infrastructure') }}
                        </h5>

                        <!-- Text -->
                        <p class="text-body-secondary mb-3 ms-3">
                            {{ __('menu.network_infrastructure_description') }}
                        </p>
                    </a>
                    <p></p>
                </div>

                <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up">
                    <a href="{{ route('services.access_control_systems') }}" style="text-decoration: none">

                        <!-- Icon service -->
                        <div class="icon text-primary mb-3 ms-3 pt-4">
                            <img src="assets/service/security.png" height="44" alt="">
                        </div>
                        <!-- Heading -->
                        <h5 class="ms-3 text-secondary">
                            {{ __('menu.access_control_systems') }}
                        </h5>

                        <!-- Text -->
                        <p class="text-body-secondary mb-3 ms-3">
                            {{ __('menu.access_control_systems_description') }}
                        </p>
                    </a>
                    <p></p>
                </div>

                <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up"
                    data-aos-delay="50">
                    <a href="{{ route('services.surveillance_systems') }}" style="text-decoration: none">

                        <!-- Icon -->
                        <div class="icon text-primary mb-3 ms-3 pt-4">
                            <img src="assets/service/cctv.png" height="44" alt="">
                        </div>
                        <!-- Heading -->
                        <h5 class="ms-3 text-secondary">
                            {{ __('menu.surveillance_systems') }}
                        </h5>

                        <!-- Text -->
                        <p class="text-body-secondary mb-6 mb-md-0 ms-3">
                            {{ __('menu.surveillance_systems_description') }}
                        </p>
                    </a>
                    <p></p>
                </div>


                <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up"
                    data-aos-delay="50">
                    <a href="{{ route('services.computer_services') }}" style="text-decoration: none">

                        <!-- Icon -->
                        <div class="icon text-primary mb-3 ms-3 pt-4">
                            <img src="assets/service/device.png" height="44" alt="">
                        </div>

                        <!-- Heading -->
                        <h5 class="ms-3 text-secondary">
                            {{ __('menu.computer_services') }}
                        </h5>

                        <!-- Text -->
                        <p class="text-body-secondary mb-0 ms-3">
                            {{ __('menu.computer_services_description') }}
                        </p>
                    </a>
                    <p></p>
                </div>

                <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up"
                    data-aos-delay="100">
                    <a href="{{ route('services.web_development') }}" style="text-decoration: none">

                        <!-- Icon -->
                        <div class="icon text-primary mb-3 ms-3 pt-4">
                            <img src="assets/service/coding.png" height="44" alt="">
                        </div>
                        <!-- Heading -->
                        <h5 class="ms-3 text-secondary">
                            {{ __('menu.web_development') }}
                        </h5>

                        <!-- Text -->
                        <p class="text-body-secondary mb-0 ms-3">
                            {{ __('menu.web_development_description') }}
                        </p>
                    </a>
                    <p></p>
                </div>

            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- CONTACT FORM -->

    <div class="container col-xl-12 col-xxl-12" data-aos="fade-up" id="contact-form">
        <div class="row align-items-center g-lg-5 py-5">

            <div class="col-md-10 mx-auto col-lg-6">
                <form action="{{ route('contact.submit') }}" method="POST"
                    class="p-4 p-md-5 border rounded-3 bg-body-tertiary">

                    @csrf


                    <div class="form-floating mb-3">
                        <input name="name" class="form-control" id="floatingInput"
                            placeholder="{{ __('menu.name') }}" required>
                        <label for="floatingInput">{{ __('menu.name') }}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="email" class="form-control" id="floatingEmail" placeholder="name@example.com"
                            required>
                        <label for="floatingEmail">{{ __('menu.mail') }}</label>
                    </div>
                    <div class="form-group">
                        <label for="message"
                            class="form-label ms-2">{{ __('menu.short_decription_message') }}</label>
                        <textarea name="message" id="inputMessage" id="message" class="form-control" rows="2" required></textarea>
                    </div>
                    <div class="checkbox mb-3 mt-2 ms-2">
                        <label>
                            <input type="checkbox" value="remember-me" required>
                            {{ __('menu.accept_the') }}
                            <a href="{{ route('gdpr') }}" target="blank">
                                {{ __('menu.data_management_conditions') }}
                            </a>

                        </label>
                    </div>

                    <div class="mb-3">
                        {!! htmlScriptTagJsApi() !!}
                        {!! htmlFormSnippet() !!}
                    </div>



                    <button class="w-100 btn btn-lg btn-primary"
                        type="submit">Lépjen velünk kapcsolatba!</button>
                    <!-- <hr class="my-4">
              <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small> -->
                </form>
            </div>


            <div class="col-lg-6 text-center text-lg-start">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3 mt-5 mt-md-0">Lépjen velünk <span
                        class="text-primary">kapcsolatba!</span></h1>
                <p class="col-lg-10 fs-4">
                    Az alábbi mezők kitöltésével gyorsan és egyszerűen tud nekünk üzenni.
                </p>

            </div>

        </div>
    </div>

    <!-- END CONTACT FORM -->

    <!-- SLIDER -->
    <div class="container my-5 pt-5" data-aos="fade-up">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">

                        <a class="navbar-brand" href="./index.html" aria-label="Front">
                            <img class="navbar-brand-logo " src="assets/img/avatar.png" height="120"
                                alt="Logo">
                        </a>
                        <h1 class="text-body-emphasis">Márkus László</h1>
                        <p class="col-lg-8 mx-auto fs-5 text-muted">
                            {{ __('menu.comment1') }}
                        </p>
                        <div class="d-inline-flex gap-2 mb-5 pb-5">
                            <img src="assets/img/stars.png" height="30" alt="">
                        </div>

                    </div>

                    <div class="carousel-item" data-bs-interval="2000">

                        <a class="navbar-brand" href="./index.html" aria-label="Front">
                            <img class="navbar-brand-logo " src="assets/img/avatar.png" height="120"
                                alt="Logo">
                        </a>
                        <h1 class="text-body-emphasis">Dari Zoltán</h1>
                        <p class="col-lg-8 mx-auto fs-5 text-muted">
                            {{ __('menu.comment3') }}
                        </p>
                        <div class="d-inline-flex gap-2 mb-5 pb-5">
                            <img src="assets/img/stars.png" height="30" alt="">
                        </div>

                    </div>

                    <div class="carousel-item" data-bs-interval="2000">

                        <a class="navbar-brand" href="./index.html" aria-label="Front">
                            <img class="navbar-brand-logo " src="assets/img/avatar.png" height="120"
                                alt="Logo">
                        </a>
                        <h1 class="text-body-emphasis">Humanregen</h1>
                        <p class="col-lg-8 mx-auto fs-5 text-muted">
                            {{ __('menu.comment2') }}
                        </p>
                        <div class="d-inline-flex gap-2 mb-5 pb-5">
                            <img src="assets/img/stars.png" height="30" alt="">
                        </div>

                    </div>



                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>

    <!-- SLIDER END -->

    <!-- BRAND -->

    <section class="py-6 py-md-8 mb-5 pt-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->
                    <div class="img-fluid text-gray-600 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="10">
                        <img src="/assets/logo/paksi-atomeromu-logo.png" height="95px" alt="">
                        {{-- <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M1447.629 301.83c0 28.119-22.658 50.76-50.777 50.76-28.118 0-50.76-22.641-50.76-50.76s21.87-50.76 50.76-50.76c28.915.78 50.777 23.43 50.777 50.76zm-209.316 102.317v12.5s-24.202-31.256-75.75-31.256c-85.121 0-151.517 64.828-151.517 154.638 0 89.037 65.615 154.638 151.517 154.638 52.328 0 75.75-32.02 75.75-32.02v13.271c0 6.25 4.697 10.923 10.939 10.923h63.252V393.177h-63.252c-6.242.024-10.939 5.5-10.939 10.97zm0 188.21c-11.703 17.189-35.14 32.028-63.251 32.028-49.98 0-88.258-31.24-88.258-84.356 0-53.11 38.277-84.349 88.258-84.349 27.338 0 52.328 15.62 63.251 32.02v104.658zm121.058-199.156h74.97v293.664h-74.97V393.2zm1119.954-7.818c-51.548 0-75.766 31.255-75.766 31.255V251.85h-74.97v435.015h63.267c6.25 0 10.923-5.47 10.923-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623s-66.38-154.669-150.722-154.669zm-12.499 238.214c-28.906 0-51.548-14.824-63.267-32.02V486.92c11.719-15.62 36.709-32.02 63.267-32.02 49.98 0 88.25 31.24 88.25 84.349 0 53.109-38.261 84.348-88.25 84.348zm-177.28-110.891v174.939h-74.985V521.288c0-48.412-15.62-67.949-57.767-67.949-22.642 0-46.08 11.72-60.942 28.907v204.626h-74.955V393.21h59.335c6.25 0 10.938 5.469 10.938 10.938v12.5c21.87-22.658 50.76-31.256 79.652-31.256 32.808 0 60.147 9.386 82.016 28.126 26.543 21.87 36.709 49.98 36.709 99.189zm-450.65-127.323c-51.532 0-75.75 31.255-75.75 31.255V251.85h-74.97v435.015h63.251c6.25 0 10.939-5.47 10.939-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623.78-89.045-65.6-154.669-150.737-154.669zm-12.498 238.214c-28.891 0-51.533-14.824-63.252-32.02V486.92c11.719-15.62 36.709-32.02 63.252-32.02 49.996 0 88.257 31.24 88.257 84.349 0 53.109-38.261 84.348-88.257 84.348zm-203.05-238.214c22.641 0 34.36 3.917 34.36 3.917v69.5s-62.48-21.088-101.52 23.438v205.399H1481.2V393.2h63.267c6.25 0 10.923 5.469 10.923 10.938v12.5c14.075-16.409 44.535-31.256 67.957-31.256zM844.705 660.306c-3.901-9.37-7.81-19.52-11.711-28.119-6.258-14.051-12.507-27.338-17.96-39.83l-.781-.78c-53.897-117.156-111.68-235.858-172.606-352.999l-2.34-4.696a1536.65 1536.65 0 01-18.734-36.71c-7.817-14.067-15.62-28.89-28.119-42.958-24.99-31.24-60.918-48.427-99.18-48.427-39.057 0-74.198 17.188-99.96 46.859-11.72 14.052-20.317 28.891-28.12 42.958a1695.173 1695.173 0 01-18.732 36.71l-2.349 4.696c-60.138 117.141-118.709 235.85-172.598 353l-.788 1.552c-5.462 12.514-11.719 25.786-17.968 39.83-3.901 8.597-7.803 17.968-11.704 28.118-10.158 28.892-13.287 56.23-9.37 84.357 8.59 58.578 47.632 107.763 101.529 129.647 20.309 8.598 41.398 12.5 63.26 12.5 6.249 0 14.051-.78 20.308-1.569 25.779-3.12 52.33-11.703 78.107-26.543 32.02-17.968 62.48-43.73 96.84-81.22 34.36 37.49 65.6 63.252 96.84 81.22 25.786 14.84 52.329 23.422 78.1 26.543 6.249.796 14.066 1.568 20.316 1.568 21.87 0 43.73-3.9 63.252-12.499 54.677-21.884 92.938-71.85 101.536-129.647 6.203-27.331 3.082-54.654-7.068-83.56zm-352.219 40.61c-42.178-53.109-69.517-103.09-78.88-145.252-3.9-17.968-4.688-33.588-2.34-47.647 1.553-12.5 6.25-23.438 12.499-32.808 14.84-21.074 39.83-34.36 68.729-34.36 28.907 0 54.677 12.498 68.736 34.36 6.25 9.37 10.931 20.316 12.507 32.808 2.333 14.067 1.553 30.46-2.348 47.647-9.402 41.383-36.74 91.37-78.903 145.252zm311.6 36.71c-5.46 40.61-32.8 75.765-71.06 91.385-18.742 7.802-39.058 10.15-59.352 7.802-19.52-2.348-39.057-8.598-59.35-20.3-28.119-15.636-56.23-39.83-89.038-75.767 51.54-63.252 82.78-121.058 94.5-172.59 5.469-24.218 6.257-46.08 3.9-66.397-3.113-19.52-10.15-37.489-21.081-53.109-24.226-35.156-64.843-55.45-110.127-55.45-45.283 0-85.901 21.09-110.111 55.45-10.93 15.62-17.968 33.588-21.09 53.11-3.12 20.316-2.348 42.958 3.902 66.395 11.71 51.533 43.73 110.112 94.491 173.371-32.02 35.929-60.919 60.147-89.037 75.766-20.31 11.72-39.822 17.969-59.343 20.302a124.96 124.96 0 01-59.359-7.803c-38.261-15.62-65.6-50.776-71.061-91.386-2.341-19.52-.788-39.042 7.03-60.91 2.332-7.819 6.249-15.62 10.15-24.991 5.47-12.499 11.703-25.786 17.96-39.057l.788-1.553c53.882-116.376 111.672-235.085 171.81-350.666l2.341-4.697c6.258-11.703 12.507-24.202 18.749-35.92 6.25-12.5 13.271-24.219 21.87-34.377 16.4-18.725 38.26-28.891 62.478-28.891 24.218 0 46.08 10.166 62.48 28.891 8.598 10.182 15.62 21.9 21.87 34.376 6.256 11.719 12.506 24.218 18.74 35.921l2.348 4.697a10341.109 10341.109 0 01171.038 351.446v.78c6.257 12.515 11.719 26.559 17.968 39.073 3.901 9.355 7.81 17.157 10.15 24.975 6.235 20.285 8.575 39.822 5.447 60.123z"
                    fill="#D3D3D3" fill-rule="nonzero"></path>
                </svg> --}}
                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->
                    <div class="img-fluid text-gray-600 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="50">
                        <img src="/assets/logo/paks-ll-logo.png" height="95px" alt="">

                        {{-- <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M326.558 759C247.442 759 170 702.045 170 573.476c0-128.987 77.442-185.105 156.558-185.105 38.93 0 69.489 10.051 91.256 24.29l-23.86 52.349c-14.652-10.47-36.42-17.17-58.187-17.17-47.72 0-91.255 37.69-91.255 124.799 0 87.108 44.79 125.636 91.255 125.636 21.768 0 43.535-6.7 58.186-17.17l23.861 53.605C395.209 749.787 365.488 759 326.558 759zm272.512 0c-100.884 0-156.558-79.989-156.558-185.524s55.255-185.105 156.558-185.105c100.883 0 156.558 79.151 156.558 185.105C755.628 679.011 699.953 759 599.07 759zm0-313.255c-56.093 0-83.721 50.255-83.721 126.894 0 76.638 27.628 127.312 83.72 127.312 56.094 0 83.722-50.674 83.722-127.312 0-76.639-27.628-126.894-83.721-126.894zm253.674-114.748c-23.86 0-43.116-18.427-43.116-41.042 0-22.614 19.256-41.041 43.116-41.041s43.116 18.427 43.116 41.041c0 22.615-19.674 41.042-43.116 41.042zm-36.418 64.493h72.837v355.972h-72.837V395.49zm358.325 355.972V514.008c0-41.46-25.116-67.425-74.511-67.425-26.373 0-50.652 4.606-65.303 10.47V751.88h-72V413.498c35.582-14.657 81.21-25.127 136.884-25.127 99.628 0 147.767 43.554 147.767 118.936v244.574h-72.837v-.42zm264.14 7.538c-46.047 0-91.675-11.307-119.721-25.127V233h72v171.704c17.163-7.957 44.79-14.658 69.488-14.658 91.675 0 154.047 66.169 154.047 175.054 0 134.432-69.489 193.9-175.814 193.9zM1448 446.583c-19.674 0-43.116 4.606-56.93 11.726v233.685c10.465 4.606 30.977 9.213 51.488 9.213 57.349 0 99.628-39.785 99.628-130.662.419-77.895-36.419-123.962-94.186-123.962zM1810.512 759c-102.14 0-154.047-41.46-154.047-111.817 0-99.253 105.488-116.842 213.07-122.705v-22.615c0-44.81-29.721-60.724-75.349-60.724-33.488 0-74.512 10.47-98.372 21.777l-18.419-49.418c28.465-12.563 76.605-25.127 124.326-25.127 84.977 0 136.884 33.084 136.884 121.03v224.472c-25.535 13.82-77.86 25.127-128.093 25.127zm59.441-186.361c-72.837 3.769-145.255 10.05-145.255 73.288 0 37.69 28.883 60.724 83.72 60.724 23.024 0 50.233-3.769 61.535-9.213v-124.8zM2101.023 759c-41.442 0-84.976-11.307-110.93-25.127l24.28-55.28c18.418 11.307 57.348 23.033 84.557 23.033 38.93 0 64.884-19.265 64.884-48.999 0-32.246-27.21-44.81-63.21-58.211-47.72-18.008-100.883-39.785-100.883-106.373 0-58.63 45.628-99.672 124.744-99.672 43.116 0 78.698 10.47 103.814 25.127l-22.605 50.255c-15.907-10.05-47.72-20.94-73.255-20.94-37.675 0-58.605 19.684-58.605 45.649 0 32.247 26.372 43.554 61.535 56.955 49.395 18.427 104.232 38.948 104.232 108.467C2239.163 717.12 2190.186 759 2101.023 759zm489.35-187.199l-236.513 33.084c7.117 64.075 48.977 96.322 108.838 96.322 35.581 0 74.093-8.795 98.372-21.777l20.93 54.024c-27.628 14.657-75.349 25.127-124.326 25.127-112.186 0-174.976-72.032-174.976-185.524 0-108.885 60.697-185.105 160.325-185.105 92.512 0 147.35 60.725 147.35 156.628.836 8.794.836 18.008 0 27.221zm-147.768-130.662c-55.256 0-91.675 42.297-92.93 116.423l172.465-23.87c-.838-61.982-32.233-92.553-79.535-92.553z"
                    fill="#D3D3D3" fill-rule="nonzero"></path>
                </svg> --}}
                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->
                    <div class="img-fluid text-gray-600 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                        <img src="/assets/logo/energostroj.png" height="95px" alt="">

                        {{-- <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M951.211 442.866c25.294 0 45.797-20.48 45.797-45.739 0-25.263-20.503-45.738-45.797-45.738-25.294 0-45.797 20.475-45.797 45.738 0 25.26 20.503 45.739 45.797 45.739zm1511.432 156.271c-6.967-4.891-12.345-5.702-16.808 3.797-76.919 166.334-206.54 83.33-193.664 90.636 28.751-13.132 104.37-73.682 92.94-157.289-6.94-51.095-50.864-73.76-97.486-65.644-81.381 14.166-111.32 101.806-96.078 179.397 2.667 13.325 7.432 24.315 12.193 35.08-91.965 74.669-128.486-66.842-132.63-83.753-.164-.905 71.01-60.137 90.805-201.281 20.748-147.928-26.516-174.864-74.847-174.023-89.436 1.556-113.603 188.124-81.135 343.615-2.72.707-15.375 7.706-35.71 8.49-14.632-45.97-77.156-86.266-93.519-70.738-40.954 38.842 9.932 114.782 45.737 120.738-21.51 132.267-156.021 99.51-130.982-66.2 43.803-81.215 77.117-201.975 71.173-274.877-2.106-25.81-21.219-60.39-64.443-58.675-83.139 3.284-92.177 189.904-82.43 322.356-.484-3.263-5.111 16.092-39.18 25.715-8.06-44.66-80.083-89.49-97.038-67.937-31.738 40.338 23.266 112.262 49.32 117.278-21.51 132.263-156.017 99.505-130.977-66.204 43.802-81.21 77.112-201.971 71.168-274.873-2.106-25.814-21.215-60.395-64.443-58.684-83.139 3.288-92.177 189.908-82.43 322.36-.489-3.314-5.224 16.679-40.683 26.142-1.187-57.942-73.474-84.511-90.839-66.023-30.948 32.956 7.088 100.574 42.275 117.282-21.508 132.263-156.016 99.505-130.977-66.204 43.803-81.21 77.117-201.971 71.17-274.873-2.103-25.814-21.216-60.395-64.445-58.684-83.134 3.288-89.824 199.29-80.078 331.738-27.383 117.14-119.214 263.426-107.284-29.616 1.179-20.557 2.465-28.361-7.8-36.058-7.691-5.982-25.181-3.103-34.742-2.866-11.62.465-14.534 7.253-17.102 17.514-5.982 26.496-7.057 52.181-7.912 87.227-.56 16.394-1.877 24.043-8.201 46.397-6.315 22.35-42.344 63.201-62.07 56.37-27.366-9.395-18.388-86.528-13.26-139.524 4.273-41.88-9.41-60.688-44.467-67.527-20.525-4.271-32.995-3.616-54.37-10.344-20.213-6.36-24.785-44.535-67.897-31.813-23.58 6.964-8.421 56.848-14.089 93.82-27.862 181.871-85.835 186.866-112.731 98.518 121.131-296.205 35.04-412.978-15.353-412.978-52.488 0-112.486 36.097-87.08 267.059-12.353-3.599-16.152-5.538-29.675-5.538-76.482 0-128.59 61.731-128.59 137.882 0 76.151 52.112 137.887 128.595 137.887 45.15 0 76.849-20.501 100.857-52.216 15.664 22.397 34.738 52.56 69.619 51.203 103.969-4.043 134.205-216.977 137.775-228.854 11.115 1.71 21.63 4.947 31.894 6.658 17.102 2.564 18.345 9.322 17.956 26.496-4.532 144.82 22.234 195.528 82.948 195.528 33.828 0 63.978-33.185 84.749-56.913 15.513 31.968 40.233 55.934 73.396 56.908 80.358 1.996 111.126-125.884 108.32-109.055-2.201 13.205 26.071 108.335 108.8 108.68 102.475.431 121.523-112.085 123.794-130.93.284-3.75.41-3.362 0 0l-.078 1.142c32.533-6.043 49.32-23.458 49.32-23.458s26.122 154.996 122.887 153.25c100.486-1.818 119.435-103.525 121.921-123.358.328-4.706.522-4.155 0 0l-.039.582c38.645-14.037 48.81-28.125 48.81-28.125s20.762 151.914 122.888 153.242c91.007 1.19 124.736-91.86 124.934-130.806 15.35.164 43.743-9.093 43.078-9.62 0 0 33.335 132.824 126.427 139.646 43.708 3.202 76.495-24.557 95.186-37.218 43.923 35.515 190.185 80.879 282.538-75.453 13.036-22.436-14.99-48.94-19.911-52.401zM400.883 712.64c-44.623 0-73.236-41.196-73.236-85.615 0-44.415 26.265-85.611 70.888-85.611 20.08 0 31.25 2.206 46.889 15.786 2.836 11.158 10.873 36.895 14.784 48.582 5.24 15.64 11.473 28.953 17.757 43.441-8.978 37.162-38.411 63.417-77.082 63.417zm108.739-154.134c-1.856-2.952-1.468-1.138-3.544-3.926-8.18-22.216-23.943-71.803-25.769-128.126-2.063-63.713 8.572-138.395 39.927-138.395 21.245 0 43.824 151.355-10.619 270.447h.005zm628.3-66.386c-5.033-37.808-5.297-206.358 35.23-201.716 22.376 9.05-14.188 168.097-35.23 201.716zm295.928 0c-5.033-37.808-5.296-206.358 35.23-201.716 22.377 9.05-14.188 168.097-35.23 201.716zm293.58 2.349c-5.037-37.813-5.296-206.362 35.226-201.72 22.376 9.05-14.188 168.1-35.226 201.72zm324.11-213.93c37.052-3.835 35.524 157.715-38.848 259.707-9.59-36.865-24.297-247.05 38.848-259.711v.004zm155.736 347.623c-11.9-60.02 18.85-99.44 50.55-103.763 11.08-1.767 27.136 5.4 30.34 18.799 5.265 25.25-.765 62.705-71.714 110.227.104.405-6.522-11.894-9.172-25.263h-.004z"
                    fill="#D3D3D3" fill-rule="nonzero"></path>
                </svg> --}}
                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->

                    <div class="img-fluid text-gray-600 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="150">
                        <img src="/assets/logo/kopis-logo.png" height="95px" alt="">

                        {{-- <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M273.497 198.251c-22.863 0-52.502 24.245-69.987 40.383-38.441 34.122-73.259 96.865-73.259 147.225 0 71.56 60.859 98.571 76.252 98.571 5.075 0 9.401-2.617 9.401-9.504 0-5.398-3.423-9.89-6.829-14.505-14.094-21.546-18.621-42.11-18.621-69.845 0-57.825 26.67-110.828 48.791-135.082 4.08-4.39 13.296-13.872 16.054-13.872 2.738 0 3.416 2.23 3.416 9.122l-2.57 378.481c0 59.167-17.072 82.67-17.072 96.602 0 6.121 2.65 7.71 7.71 7.71 23.959 0 47.835-29.202 54.6-39.852 20.976-36.232 26.12-64.515 26.12-146.097V229.55c0-8.609-2.414-12.33-10.592-17.638-11.96-7.595-25.664-13.66-43.414-13.66zm685.043 1.056c-11.268 0-16.086 5.891-16.619 24.12l-2.5 75.475-66.008-2.287c-4.004-.103-5.814 1.163-7.565 4.682-5.606 10.51-8.556 18.746-8.556 32.46 0 11.166 5.062 12.357 9.577 12.357l68.678 1.972-.21 144.197c0 30.583-19.3 70.258-53.543 103.256 0 0 2.945-9.963 2.777-20.415 0-29.588-19.041-56.4-44.427-75.373l-61.96-46.612c12.989-15.025 34.993-44.825 34.993-69.988 0-19.51-12.267-27.705-35.135-27.705-32.275 0-69.705 29.56-69.705 73.401 0 15.981 7.11 30.365 17.918 41.366-14.922 28.314-36.036 65.566-51.714 92.095-11.842 20.313-31.874 51.434-43.726 51.434-8.739 0-12.778-13.749-12.778-66.571 0-43.887 3.118-91.602 4.682-137.403 0-10.498-1.722-20.183-15.35-29.677-12.538-8.033-28.02-19.252-43.97-19.252-35.455 0-59.609 32.625-76.178 64.527-17.147 33.063-26.419 60.926-39.5 101.352l1.444-139.127c.446-9.92-2.06-13.772-9.997-17.147-10.298-4.367-25.456-9.402-38.901-9.402-11.237 0-12.603 4.845-12.603 16.651l-1.512 166.94-.172 64.387c0 58.05 7.27 67.73 41.716 67.73 19.072 0 25.18-2.24 25.559-18.093.523-10.485 5.538-35.888 12.322-61.364 19.842-75.195 43.353-134.67 83.891-180 4.227-4.4 7.495-2.825 6.83 3.413 0 0-6.41 101.765-6.41 143.389 0 74.03 11.392 112.658 48.227 112.658 36.15 0 71.656-46.45 91.038-77.806l62.175-103.994c40.288 34.33 68.4 60.946 68.4 93.326 0 20.125-12.697 39.815-32.039 39.815-24.171 0-39.614-25.49-55.94-25.49-13.552 0-30.944 26.16-30.944 41.016 0 14.024 30.603 33.863 85.513 33.863 81.059 0 124.542-55.628 150.638-117.23 4.995 73.114 34.127 115.822 79.562 115.822 29.803 0 64.247-37.653 79.915-83.647 0 0 1.547 11.94 13.446 36.402 16.38 31.944 41.28 46.611 72.208 46.611 38.468 0 71.371-23.32 91.459-62.452 3.045 29.652 27.943 62.307 67.98 62.307 25.133 0 48.046-19.257 63.086-50.976 0 0 19.482 52.388 75.83 52.388 31.65 0 69.127-29.32 78.084-50.623l.986 30.98-83.606 77.1c-24.277 23.566-50.1 57.425-50.1 94.913 0 47.677 45.015 75.092 84.63 75.092 41.178 0 68.5-26.088 83.468-47.948 18.836-28.285 26.792-81.596 26.792-133.708l-1.867-78.361c56.349-61.94 100.45-147.553 120.083-208.129l42.772-1.126c8.286-.558 7.873 2.705 6.727 7.535-7.517 31.767-14.082 67.743-14.082 103.571 0 59.192 13.634 84.95 33.231 106.001 17.04 17.638 33.984 23.587 51.82 23.587 34.88 0 56.776-28.804 63.72-46.962 16.38 31.944 40.509 46.821 71.43 46.821 38.47 0 71.374-23.32 91.464-62.452 3.045 29.652 27.938 62.307 67.978 62.307 29.912 0 47.262-17.26 60.906-49.78.275 10.46.678 21.612.986 32.068.36 5.41 4.685 8.833 8.556 10.245 12.715 4.812 23.876 7.22 33.901 7.22 26.147 0 31.825-5.37 31.825-22.463 0-28.19.826-72.733 8.836-108.496 8.504-35.606 21.337-75.914 39.044-103.96 1.594-2.897 5.5-2.136 5.67 1.375 2.543 60.007 6.557 161.589 22.32 187.885 7.779 12.543 19.808 21.685 37.809 21.685 8.44 0 18.788-3.6 21.436-5.844 2.683-2.092 4.034-4.417 3.871-8.729 0-76.711 23.924-150.978 47.88-200.91.659-1.482 2.526-1.597 2.463.352l-1.336 55.273c0 90.78 6.544 148.133 51.89 175.706a59.42 59.42 0 0029.184 7.565c23.2 0 44.239-12.958 54.637-33.796 8.47-16.194 16.406-47.363 16.406-65.018 0-6.834.08-17.958-11.123-17.958-6.144 0-9.835 4.53-11.304 11.371-3.571 14.83-6.502 27.548-12.042 42.21-5.296 13.997-13.198 22.147-22.568 22.147-11.006 0-16.591-8.66-19.785-14.014-14.044-21.421-15.17-70.63-15.17-111.704l3.381-105.718c0-8.747-3.651-19.215-17.147-26.932-9.06-5.215-31.972-15.033-46.011-15.033-13.018 0-19.32 7.373-24.012 18.196-8.811 19.44-38.255 95.688-46.15 157.68-.284 1.634-2.32 1.98-2.463-.105-4.104-43.839-6.21-96.66-6.164-132.295 0-10.773-2.635-26.173-25.488-36.153-11.106-4.608-20.293-7.428-31.512-7.428-13.919 0-16.912 6.812-21.897 15.838-15.768 29.135-26.671 67.128-43.015 115.05l.248-109.66c0-5.127-3.143-11.848-12.147-13.658-22.325-5.13-32.668-7.46-41.47-7.46-6.408 0-9.93 5.108-9.93 10.63l-1.198 186.973c-4.32 22.888-21.82 77.52-46.647 77.52-20.378 0-29.887-20.646-29.887-106.947l3.698-140.258c0-8.859-5.815-12.58-14.291-16.331-12.12-4.815-21.762-6.727-34.08-6.727-15.46 0-20.765 7.4-17.637 25.175-16.995-22.993-33.984-35.7-64-35.7-60.26 0-105.682 72.485-105.682 177.82-.591 29.537 6.546 58.894 6.546 58.894-5.453 24.515-18.27 44.497-35.978 44.497-22.34 0-36.577-31.584-36.577-86.321 0-54.9 20.91-116.82 20.91-133.602 0-19.512-12.784-31.856-35.415-31.856-11.336 0-53.39 9.54-74.95 12.67 0 0 2.433-10.268 2.253-18.341 0-19.24-9.027-31.296-31.437-31.296-27.385 0-47.492 19.554-47.492 52.915 0 14.967 8.62 28.816 20.032 36.256-14.812 61.782-38.896 107.728-74.387 159.057l2.99-207.848c0-6.757-1.799-10.954-15.034-16.091-6.997-3.023-18.401-6.514-32.776-6.514-20.833 0-19.454 14.877-18.34 26.016-9.533-16.902-30.4-36.965-62.596-36.965-87.732 0-114.667 133.784-101.459 228.794 0 11.584-11.311 52.703-36.86 52.703-20.377 0-29.887-20.646-29.887-106.947l3.734-140.258c0-8.861-5.856-12.582-14.332-16.331-12.12-4.815-21.726-6.727-34.044-6.727-15.463 0-20.768 7.4-17.64 25.173-16.994-22.993-34.019-35.701-64.036-35.701-60.26 0-106.284 66.291-106.284 171.622 0 40.208-34.62 101.564-58.897 101.564-13.486 0-27.845-24.757-27.845-88.01.067-43.116 5.948-189.893 5.948-189.893l84.738-1.374c4.044-.038 6.386-4.457 7.885-7.18 3.891-7.895 5.773-13.153 5.773-22.6 0-8.523-1.706-11.637-12.637-12.252l-84.457-5.07 3.593-78.679c.253-4.967-2.745-8.206-8.168-10.63-16.349-6.394-36.399-12.578-49.097-12.58zm256.462 206.157c22.593 0 45.518 20.605 45.518 93.711 0 92.047-33.533 134.872-59.32 134.872-24.173 0-42.524-34.121-42.524-101.143 0-67.746 17.92-127.44 56.326-127.44zm813.642 0c22.593 0 45.518 20.605 45.518 93.711 0 92.047-33.533 134.872-59.32 134.872-24.173 0-42.527-34.121-42.527-101.143.003-67.746 17.923-127.44 56.329-127.44zm-516.059.423c29.484 0 42.528 30.39 42.528 89.309 0 88.831-26.407 139.41-58.476 139.41-20.473 0-44.015-33.617-42.773-99.735 0-42.275 13.783-128.984 58.721-128.984zm49.917 297.162v34.99c0 116.106-30.938 135.924-55.798 135.924-9.42 0-32.492-7.115-32.492-35.839 0-40.152 41.98-85.83 55.025-99.945l33.265-35.13z"
                    fill="#D3D3D3" fill-rule="nonzero"></path>
                </svg> --}}
                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->
                    <div class="img-fluid text-gray-600 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="200">

                        <img src="/assets/logo/ros-atom-logo.png" height="95px" alt="">


                        {{-- <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2140.629 749.008c29.915 2.896 59.815 6.007 89.644 9.225l65.859-162.412 62.6 177.393a7894.176 7894.176 0 0196.232 12.643l-109.75-311.073L2455 204.021h-92.981l-.967 1.33-59.307 146.273-52.068-147.581h-91.807l94.779 268.625-112.013 276.34h-.007zm-69.432-6.364V204.02h-91.77v531.064c30.609 2.36 61.233 4.892 91.77 7.552v.007zm-689.374-30.12c24.774 0 49.52.186 74.222.386V515.03h110.244v-84.267h-110.237V288.388h126.97v-84.367h-219.099v508.575c5.95 0 11.929-.093 17.9-.072zm-284.928 5.149a8147.87 8147.87 0 0191.82-2.746V288.402h85.779v-84.36h-263.377v84.36h85.792v429.27h-.014zm-701.862 56.793V453.568l108.662 307.94a7954.136 7954.136 0 01100.442-10.605V204.03h-88.055v332.396L398.828 204.03H307V786h.551c29.092-4.019 58.284-7.837 87.482-11.534zM922.625 288.38v-84.352h-219.12v537.757a7890.227 7890.227 0 01218.941-15.81v-84.432a7642.138 7642.138 0 00-126.805 8.445V515.066h110.244v-84.317H795.64V288.38h126.984zm842.27 349.13V204h-92.171v513.98c73.32 2.69 146.352 6.436 219.142 11.156v-84.481a8007.367 8007.367 0 00-126.97-7.151v.007z"
                    fill="#D3D3D3" fill-rule="nonzero"></path>
                </svg> --}}
                    </div>

                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                    <!-- Brand -->

                    <div class="img-fluid text-gray-600 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="250">

                        <svg viewBox="0 0 210 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Group 24</title>
                            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Hoofdmenu" transform="translate(-59, -75)" fill="#D3D3D3">
                                    <g id="Group-5" transform="translate(59, 19)">
                                        <g id="Group-23" transform="translate(0, 56)">
                                            <path
                                                d="M23.3179562,0.0255363228 C23.4405877,0.0923721307 23.5461959,0.138400564 23.639194,0.202399003 C25.2762774,1.32631247 26.9064254,2.4599991 28.5523357,3.57098677 C28.8562349,3.77622315 28.9445043,4.00857216 28.9432566,4.35725331 C28.9325249,7.55276156 28.9369384,10.7482698 28.9369384,13.9437781 L28.9369384,38.7143265 L28.9369384,39.5321193 C27.0832795,40.3458138 25.2381324,41.1554098 23.435859,41.9464052 C23.3523183,41.905421 23.3315119,41.9000616 23.3173257,41.8871358 C23.3040853,41.8751558 23.2898992,41.8552942 23.2898992,41.8389005 C23.2798112,27.9660567 23.2712995,14.0932128 23.2643641,0.220369008 C23.2643641,0.168665836 23.2917906,0.117277927 23.3179562,0.0255363228 M21.3949428,0 L21.3949428,42 C19.4817021,41.1613998 17.635294,40.3524343 15.7551543,39.5283362 L15.7551543,38.8555644 C15.7551543,27.397637 15.7576763,15.9393944 15.7460115,4.48146702 C15.7456969,4.03946796 15.8585557,3.76045998 16.2415821,3.50635781 C17.7809386,2.4849049 19.29476,1.42498987 20.8186693,0.380207473 C20.9794458,0.269865338 21.1440053,0.16519794 21.3949428,0 M7.52843988,23.874255 C5.31697446,20.5948867 3.12442392,17.3432616 0.901924815,14.0471844 C2.37539444,13.0348741 3.81071904,12.0487307 5.31949644,11.0118299 C8.22608393,15.2896368 11.0938959,19.5611386 14.0083646,23.8748855 C10.8962353,27.4789749 7.80112949,31.0628875 4.68490202,34.6717059 C3.13514236,33.9919983 1.61470077,33.3249013 0,32.6165048 C2.51315786,29.6687934 5.03009869,26.8039963 7.52843988,23.874255 M30.6947618,23.8752008 C33.604817,19.5636607 36.4682155,15.3208479 39.3785859,11.0093078 C40.8539471,12.0219333 42.3009358,13.0146973 43.8024625,14.0449776 C41.5831159,17.3372716 39.3905654,20.5898425 37.1731102,23.8792992 C39.6824851,26.7876026 42.1685316,29.6687934 44.7072246,32.6105148 C43.1227876,33.3085076 41.604868,33.9768657 40.0232683,34.6735975 C36.9256405,31.0877933 33.8283279,27.5026197 30.6947618,23.8752008 M210,33.8532825 L210,29.5956524 L198.938575,29.5956524 L198.938575,22.8956779 L207.715082,22.8956779 L207.715082,18.6386783 L198.938575,18.6386783 L198.938575,13.6833706 L210,13.6833706 L210,9.42574049 L194.681149,9.42574049 L194.681149,33.8532825 L210,33.8532825 Z M187.248513,32.9286154 C188.911132,32.0099383 190.290027,30.7942832 191.382992,29.2816502 L187.579839,27.2229812 C186.893544,28.0723004 186.047418,28.7561063 185.041461,29.2734533 C184.034874,29.7908003 182.950105,30.0499467 181.78747,30.0499467 C180.716888,30.0499467 179.713453,29.8317845 178.777797,29.3954602 C177.840879,28.9594511 177.017766,28.354461 176.308458,27.5804897 C175.599465,26.807149 175.043683,25.9143235 174.642687,24.9026437 C174.241061,23.8900182 174.040879,22.8029905 174.040879,21.6393539 C174.040879,20.4876972 174.238539,19.4035069 174.633545,18.3855219 C175.028866,17.3678522 175.581496,16.471874 176.29112,15.6985333 C177.000428,14.924562 177.826693,14.3195718 178.76897,13.8835628 C179.710931,13.4472384 180.716888,13.2290763 181.78747,13.2290763 C182.927092,13.2290763 184.006186,13.4857006 185.023492,13.9973728 C186.041743,14.5090451 186.893544,15.1893831 187.579839,16.0387023 L191.382992,13.9973728 C190.290027,12.473075 188.911132,11.2548978 187.248513,10.3415802 C185.584949,9.42889313 183.764391,8.97207668 181.78747,8.97207668 C180.13557,8.97207668 178.582658,9.30089625 177.128419,9.95790485 C175.67481,10.6152287 174.39837,11.5222411 173.298785,12.6798877 C172.199515,13.8375343 171.338887,15.1811863 170.716587,16.710213 C170.094288,18.2401856 169.783453,19.8833376 169.783453,21.6393539 C169.783453,23.3843359 170.094288,25.021498 170.716587,26.5514705 C171.338887,28.0811277 172.199515,29.4276171 173.298785,30.5903079 C174.39837,31.7536293 175.67481,32.6644248 177.128419,33.3211181 C178.582658,33.9781267 180.13557,34.306631 181.78747,34.306631 C183.764391,34.306631 185.584949,33.8476078 187.248513,32.9286154 M151.376148,33.8532825 L151.376148,17.1203705 L161.705567,33.8532825 L166.294003,33.8532825 L166.294003,9.42574049 L162.036578,9.42574049 L162.036578,26.1586525 L151.725443,9.42574049 L147.119668,9.42574049 L147.119668,33.8532825 L151.376148,33.8532825 Z M129.165974,25.2655117 L132.830733,15.198841 L136.508102,25.2655117 L129.165974,25.2655117 Z M135.29282,9.42353365 L130.38756,9.42353365 L121.523729,33.8548588 L126.045017,33.8548588 L127.612116,29.5250334 L138.08119,29.5250334 L139.654593,33.8548588 L144.169576,33.8548588 L135.29282,9.42353365 Z M98.959279,33.8532825 L103.216705,33.8532825 L103.216705,9.42574049 L98.959279,9.42574049 L98.959279,33.8532825 Z M110.217356,20.9416763 L119.900832,9.42574049 L114.334811,9.42574049 L104.507582,20.9435679 L114.300449,33.8532825 L119.848186,33.8532825 L110.217356,20.9416763 Z M88.6323186,19.4265211 C88.1332809,19.726967 87.5771832,19.8805002 86.9760051,19.8805002 L82.351946,19.8805002 L82.351946,13.0881536 L86.9760051,13.0881536 C87.5771832,13.0881536 88.1332809,13.2416868 88.6323186,13.5424479 C89.1310411,13.8428938 89.5339282,14.2521055 89.8346749,14.7637778 C90.1351063,15.27545 90.2886322,15.8511207 90.2886322,16.4907898 C90.2886322,17.1175331 90.1351063,17.6932038 89.8346749,18.2048761 C89.5339282,18.7165483 89.1310411,19.1194547 88.6323186,19.4265211 L88.6323186,19.4265211 Z M89.8025196,23.749726 C90.7299795,23.4045128 91.5549838,22.8928405 92.2712275,22.2150245 C92.9811662,21.5431986 93.543884,20.7440062 93.9404661,19.8165018 C94.3433532,18.8889973 94.5479492,17.8785786 94.5479492,16.7720046 C94.5479492,15.4226779 94.2282877,14.1947276 93.6015744,13.0818483 C92.9748612,11.9689691 92.1240066,11.086232 91.0562613,10.4213418 C89.9882007,9.75613637 88.7858445,9.42353365 87.4618024,9.42353365 L78.0926289,9.42353365 L78.0926289,33.8548588 L82.351946,33.8548588 L82.351946,24.1337167 L85.0892452,24.1337167 L90.7429047,33.8548588 L95.6415449,33.8548588 L89.8025196,23.749726 Z M60.1408258,25.2655117 L63.805585,15.198841 L67.4829541,25.2655117 L60.1408258,25.2655117 Z M66.2613677,9.42353365 L61.3624122,9.42353365 L52.4985814,33.8548588 L57.0135647,33.8548588 L58.5869679,29.5250334 L69.0560421,29.5250334 L70.6228252,33.8548588 L75.1444287,33.8548588 L66.2613677,9.42353365 Z"
                                                id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        {{-- <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M705.019 399.95c27.127 0 53.153-22.584 57.68-50.446 5.35-27.119-13.037-49.703-40.144-49.703-27.115 0-53.145 22.584-57.74 49.703-5.29 27.862 12.342 50.446 40.204 50.446zm1840.855 80.607h60.682c8.316 0 13.186-3.377 15.059-11.137a2716.172 2716.172 0 018.961-35.996c1.796-6.984-2.271-12.278-10.015-12.278h-59.879c4.314-17.161 21.107-72.876 21.107-109.2 0-72.54-61.598-134.244-149-134.244-98.708 0-162.925 66.243-162.925 159.455 0 27.188 10.144 58.879 22.717 78.537-5.411-.309-10.83-.462-16.25-.46-75.002 0-122.244 40.685-122.244 99.887 0 55.562 43.8 77.153 85.038 91.522 36.63 12.766 70.362 18.706 70.362 47.322 0 19.295-18.56 30.618-54.884 30.618-43.098 0-66.783-20.296-72.803-27.995 4.083-3.208 10.156-10.846 10.156-23.573 0-17.802-12.505-32.332-35.73-32.332-19.65 0-36.263 16.027-40.435 37.11-31.561 25.82-66.008 42.553-114.864 42.553-48.105 0-73.074-25.021-73.074-78.263 11.278 3.434 40.645 7.558 60.053 7.558 81.455 0 136.968-37.01 136.968-111.124 0-39.854-34.987-81.709-104.204-81.709h-.157c-91.038 0-142.032 57.668-164.297 121.098a1300.764 1300.764 0 00-18.747-4.374c4.98-14.07 8.554-30.375 8.554-48.452 0-31.328-19.4-68.272-71.314-68.272-36.162 0-70.463 23.685-94.237 59.185 5.915-23.157 9.837-38.578 10.091-39.611 1.55-6.057-.972-12.803-10.418-12.803h-53.282c-7.594 0-12.953 2.683-15.112 11.33-1.448 5.766-19.755 77.597-37.577 147.54-11.226 43.61-69.298 97.897-142.287 97.897-48.113 0-73.061-26.667-73.061-79.93 12.589 5.012 40.64 9.22 60.04 9.22 84.768 0 136.968-37.008 136.968-111.123 0-39.854-34.983-81.709-104.207-81.709h-.15c-102.513 0-165.31 79.623-175.95 169.902-4.426 37.53-36.101 89.064-70.439 89.064-16.729 0-26.058-10.507-26.058-28.346 0-15.405 10.846-53.076 22.733-100.286 3.983-15.793 10.027-39.886 16.73-66.581h55.73c8.297 0 13.163-3.377 15.047-11.137 2.668-11.173 7.562-30.666 8.95-35.996 1.796-6.984-2.247-12.278-10.015-12.278h-54.803s25.23-100.674 25.832-103.26c2.429-10.237-6.137-16.144-15.1-14.26 0 0-42.359 8.292-50.215 9.93-7.896 1.598-14.025 5.936-16.878 17.319l-22.435 90.27h-44.005c-8.296 0-13.175 3.386-15.035 11.13a3732.041 3732.041 0 01-8.95 36.003c-1.82 6.985 2.244 12.279 10.003 12.279h43.155c-.307 1.235-15.587 59.363-27.947 111.418-5.818 25.033-25.303 83.61-57.212 83.61-19.061 0-27.115-9.616-27.115-30.239 0-32.477 31.97-113.779 31.97-150.67 0-49.28-26.438-77.832-80.6-77.832-34.14 0-69.54 22.044-84.541 41.391 0 0 4.551-15.837 6.109-21.926 1.662-6.432-1.788-12.75-10.233-12.75H837.25c-11.27 0-14.385 6.024-16.04 12.65-.661 2.658-19.743 77.588-38.062 149.52-12.528 49.255-42.972 90.412-75.523 90.412-16.737 0-24.19-10.503-24.19-28.341 0-15.414 9.959-53.448 21.842-100.653 14.457-57.471 27.212-104.797 28.576-110.325 1.78-7.086-1.388-13.26-10.52-13.26H670.06c-9.652 0-13.098 5.065-15.132 12.102 0 0-14.994 56.76-30.871 119.948-11.532 45.858-24.267 92.567-24.267 114.513 0 39.164 17.585 68.684 65.928 68.684 37.312 0 66.84-18.92 89.387-43.03-3.312 13.05-5.427 21.31-5.64 22.153-1.946 7.46.41 14.054 9.2 14.054h54.516c9.49 0 13.138-3.817 15.12-12.093 1.908-7.897 42.625-168.05 42.625-168.05 10.761-43.02 37.38-71.508 74.829-71.508 17.758 0 33.127 11.758 31.348 34.608-1.977 25.138-32.292 115.446-32.292 155.081 0 30 11.124 68.813 67.598 68.813 38.494 0 66.832-18.456 87.438-42.275 7.546 25.28 27.535 42.275 64.201 42.275 60.937 0 97.667-36.141 119.247-72.444 17.907 42.178 59.847 72.424 121.348 72.424 62.684 0 111.193-26.425 145.57-62.349l-10.72 42.053c-1.95 7.574 1.347 13.53 10.24 13.53h53.957c7.388 0 12.645-3.757 14.562-11.517.948-3.809 8.744-33.938 19.755-76.75 21.059-81.922 54.904-166.915 105.762-166.915 17.935 0 25.29 10.027 25.29 25.824 0 7.449-2.162 13.884-4.03 17.334-24.65-4.898-44.482 7.271-44.482 33.592 0 17.148 18.045 32.736 42.4 32.736 18.61 0 33.995-4.564 46.265-12.824a1729.855 1729.855 0 0136.15 7.86 237.795 237.795 0 00-2.829 35.904c0 65.754 46.951 121.518 131.11 121.518 65.947 0 111.204-24.125 150.27-55.054 18.78 30.727 66.195 55.558 128.402 55.558 85.26 0 133.615-44.332 133.615-102.932 0-53.04-43.541-72.562-88.443-88.815-36.5-13.186-66.944-20.356-66.944-46.152 0-21.144 16.644-30.815 45.171-30.815 18.509 0 32.405 3.986 39.826 6.068 7.36 18.42 22.588 38.817 48.585 38.817 21.999 0 31.877-17.399 31.877-33.422 0-45.612-75.98-50.393-75.98-148.214 0-60.827 34.42-111.006 105.702-111.006 49.53 0 81.874 31.408 81.874 82.1 0 41.794-25.348 116.196-25.348 116.196h-43.086c-8.28 0-13.166 3.385-15.038 11.128a3072.974 3072.974 0 01-8.966 36.004c-1.812 6.985 2.251 12.279 10.015 12.279h42.069s-43.49 160.391-43.49 189.56c0 39.164 22.072 68.676 70.435 68.676 68.406 0 111.152-44.454 129.738-109.095 1.444-4.999-1.388-9.07-6.452-9.07h-26.099c-5.209 0-8.231 2.97-9.546 8.062-5.896 22.947-20.506 47.088-49.276 47.088-16.729 0-26.054-10.507-26.054-28.342 0-15.41 10.2-51.486 22.75-100.285 5.98-23.238 16.624-66.59 16.624-66.59zm-539.375-2.74c24.19 0 35.682 16.092 35.682 35.27 0 32.437-25.158 52.217-64.508 52.217-14.082 0-33.769-3.337-45.393-7.21 4.886-29.831 26.477-80.277 74.22-80.277zm-569.035 0c26.477 0 35.67 16.092 35.67 35.27 0 32.437-25.147 52.217-64.492 52.217-14.086 0-33.773-3.337-45.394-7.21 4.858-29.831 24.004-80.277 74.216-80.277zM390.64 177C218.03 177 131 300.753 131 403.952c0 62.486 23.657 118.077 74.397 138.788 8.32 3.406 15.773.117 18.186-9.095 1.679-6.375 5.649-22.454 7.42-29.156 2.438-9.112 1.49-12.307-5.225-20.248-14.63-17.258-23.98-39.6-23.98-71.246 0-91.812 68.692-174.005 178.872-174.005 97.566 0 151.163 59.613 151.163 139.227 0 104.753-46.354 193.164-115.18 193.164-38.005 0-66.456-31.433-57.337-69.983 10.919-46.023 32.07-95.694 32.07-128.914 0-29.738-15.962-54.542-48.996-54.542-38.853 0-70.064 40.193-70.064 94.036 0 34.294 11.588 57.487 11.588 57.487s-39.76 168.465-46.729 197.969c-13.88 58.757-2.09 130.786-1.093 138.061.589 4.31 6.129 5.335 8.638 2.082 3.584-4.676 49.853-61.804 65.59-118.89 4.45-16.165 25.553-99.859 25.553-99.859 12.621 24.077 49.513 45.285 88.746 45.285 116.785 0 196.024-106.472 196.024-248.988C620.643 277.363 529.367 177 390.64 177z"
                    fill="#D3D3D3" fill-rule="nonzero"></path>
                </svg> --}}
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- FOOTER -->

    @include('layouts.footer')

    <!-- TOP BUTTON  -->

    <button type="button" class="btn btn-outline-primary btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

</body>

</html>
