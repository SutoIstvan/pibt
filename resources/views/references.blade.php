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

          Itt tekintheti meg referenciáinkat
          
        </h6>
        <p >Büszkék vagyunk az eddig elvégzett munkáinkra, és örömmel mutatjuk be Önnek.</p>

      </div>


    </div>

    <div class="container px-4">
  
      <div class="row row-cols-1 row-cols-lg-3  g-4 py-5">
        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="50">
            <img src="../assets/img/email.png" height="50px" alt="">
            <h3 class="text-body-emphasis mt-2 mb-2">email</h3>
            <p class="col-lg-10 mx-auto text-muted">
              admin@gmail.com
              info@gmail.com
            </p>
          </div>
        </div>
  
        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="100">
            <img src="../assets/img/mobile.png" height="50px" alt="">
            <h3 class="text-body-emphasis mt-2 mb-2">phone</h3>
            <p class="col-lg-10 mx-auto text-muted">
              +36 20 444 4444 <br>
              +36 20 777 7777
            </p>
          </div>
        </div>

        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="150">
            <img src="../assets/img/address.png" height="50px" alt="">
            <h3 class="text-body-emphasis mt-2 mb-2">address</h3>
            <p class="col-lg-10 mx-auto text-muted">
              Paks, Vácika köz 1, 7030 Magyarország
            </p>
          </div>
        </div>

      </div>
    </div>



  
    <!-- FOOTER -->

    @include('layouts.footer')
  
    <!-- TOP BUTTON  -->

    <button type="button" class="btn btn-outline-primary btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>
  
  </body>
</html>
