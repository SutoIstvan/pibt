<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title_contact'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
  {{-- <body data-bs-theme="dark"> --}}

    @include('layouts.nav')

    <div class="conteiner my-5">
      <div class="mt-5 text-center" data-aos="fade-up">
        <h6 class="display-6 text-body-emphasis lh-2 mb-3">
          {{-- {{ __('menu.contact')}} --}}

          Webfejlesztés
          
        </h6>
        <p >Szívesen beszélnénk arról, hogyan segíthetünk Önnek.</p>
        {{-- <h5>Szívesen beszélnénk arról, hogyan segíthetünk Önnek.</h5> --}}

      </div>


    </div>


    <section class="py-8 py-md-11 mb-5 mt-5">
      <div class="container">
    

        <div class="row">
          <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up">
            <a href="" style="text-decoration: none">
    
            <!-- Icon service -->
            <div class="icon text-primary mb-3 ms-3 pt-4">
              <img src="../assets/service/security.png" height="44" alt="">
            </div>
            <!-- Heading -->
            <h5 class="ms-3 text-secondary" >
              {{__('menu.access_control_systems')}}
            </h5>
    
            <!-- Text -->
            <p class="text-body-secondary mb-3 ms-3">
              {{__('menu.access_control_systems_description')}}
            </p>
            </a>
          </div>
          
          <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up" data-aos-delay="50">
            <a href="" style="text-decoration: none">
    
            <!-- Icon -->
            <div class="icon text-primary mb-3 ms-3 pt-4">
              <img src="../assets/service/cctv.png" height="44" alt="">
            </div>
            <!-- Heading -->
            <h5 class="ms-3 text-secondary" >
              {{__('menu.surveillance_systems')}}
            </h5>
    
            <!-- Text -->
            <p class="text-body-secondary mb-6 mb-md-0 ms-3">
              {{__('menu.surveillance_systems_description')}}
            </p>
            </a>
          </div>
          <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up" data-aos-delay="100">
            <a href="" style="text-decoration: none">
    
            <!-- Icon -->
            <div class="icon text-primary mb-3 ms-3 pt-4">
              <img src="../assets/service/server.png" height="44" alt="">
            </div>
            <!-- Heading -->
            <h5 class="ms-3 text-secondary" >
              {{__('menu.server_maintenance')}}
            </h5>
    
            <!-- Text -->
            <p class="text-body-secondary mb-0 ms-3">
              {{__('menu.server_maintenance_description')}}
            </p>
            </a>
          </div>
    
          <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up">
            <a href="" style="text-decoration: none">
    
            <!-- Icon -->
            <div class="icon text-primary mb-3 ms-3 pt-4">
              <img src="../assets/service/structure.png" height="44" alt="">
            </div>
            <!-- Heading -->
            <h5 class="ms-3 text-secondary" >
              {{__('menu.network_infrastructure')}}
            </h5>
    
            <!-- Text -->
            <p class="text-body-secondary mb-3 ms-3">
              {{__('menu.network_infrastructure_description')}}
            </p>
            </a>
          </div>
    
          <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up" data-aos-delay="50">
            <a href="" style="text-decoration: none">
    
            <!-- Icon -->
            <div class="icon text-primary mb-3 ms-3 pt-4">
              <img src="../assets/service/device.png" height="44" alt="">
            </div>
    
            <!-- Heading -->
            <h5 class="ms-3 text-secondary" >
              {{__('menu.computer_services')}}
            </h5>
    
            <!-- Text -->
            <p class="text-body-secondary mb-0 ms-3">
              {{__('menu.computer_services_description')}}
            </p>
            </a>
          </div>
    
          <div class="col-12 col-md-4 aos-init aos-animate services-hover-effect" data-aos="fade-up" data-aos-delay="100">
            <a href="" style="text-decoration: none">
    
            <!-- Icon -->
            <div class="icon text-primary mb-3 ms-3 pt-4">
              <img src="../assets/service/coding.png" height="44" alt="">
            </div>
            <!-- Heading -->
            <h5 class="ms-3 text-secondary" >
              {{__('menu.web_development')}}
            </h5>
    
            <!-- Text -->
            <p class="text-body-secondary mb-0 ms-3">
              {{__('menu.web_development_description')}}
            </p>
            </a>
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
