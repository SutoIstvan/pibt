<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title_contact'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
      .background-image {
        position: absolute; /* Позволяет разместить картинку в правом нижнем углу */
        bottom: 55px; /* Выровнять по низу */
        right: 50px; /* Выровнять по правому краю */
        width: 350px; /* Ширина картинки */
        height: 350px; /* Высота картинки */
        background-image: url('../assets/service/structure.png'); 
        background-size: cover; /* Обеспечивает полное покрытие области */
        background-repeat: no-repeat; /* Не повторять картинку */
        opacity: 0.05; /* Прозрачность */
        z-index: -1; /* Убедитесь, что картинка находится за текстом */
      }

      .circle-icon {
        background: #c1cef8;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        text-align: center;
        line-height: 70px;
        vertical-align: middle;
        /* padding: 30px; */
      }

    </style>
</head>

<body>
  {{-- <body data-bs-theme="dark"> --}}

    @include('layouts.nav')

    <div class="container col-xxl-12 px-4 py-5 mt-lg-5">
      <div class="row flex-lg-row-reverse align-items-center g-0 py-0">
        <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-sm-12 col-lg-6">
          <img src="../assets/it.png" class="img-fluid " loading="lazy" style="opacity: 0.8;">
        </div>
        <div class="col-lg-6 mt-xs-3">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 " data-aos="fade-up">
            IT Üzemeltetés - Teljeskörű Megoldások a <span class="text-primary">Vállalkozásod</span> Számára
          </h1>
          <p class="lead text-body-secondary mt-1" data-aos="fade-up" data-aos-duration="1000">
            A Paksi Informatika több mint 20 éves tapasztalattal kínál teljeskörű IT üzemeltetési szolgáltatásokat kis- és középvállalkozásoknak. Célunk, hogy ügyfeleink számára megbízható, hatékony IT infrastruktúrát biztosítsunk, amely támogatja mindennapi működésüket. Szolgáltatásaink között szerepel a szerverek és IT rendszerek tervezése, üzemeltetése, karbantartása, valamint nyílt forráskódú megoldások, automatizálás és webfejlesztés.          </p>
        </div>
      </div>
    </div>
    

    
    
    {{-- <div class="container my-5">
      <div class="background-image mb-5 me-5"></div> 

      <div class="col-md-9 mt-5 text-center justify-content-center g-lg-5 py-5 mx-auto" data-aos="fade-up">

        <div class="d-flex flex-column align-items-center">

          <i class="fa-solid fa-gear circle-icon fa-3x" style="color: #335eea"></i>


          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            IT Üzemeltetés – Teljeskörű Megoldások a Vállalkozásod Számára
          </h1>

        </div>
        
        <div class="d-flex align-items-start">
          <img class="mt-3 me-3" src="../assets/service/server.png" height="74" alt="">
          <div>
            <h1 class="display-6 text-body-emphasis lh-2 mb-3 align-items-start" style="text-align: left !important;">
              IT Üzemeltetés – Teljeskörű Megoldások a Vállalkozásod Számára
            </h1>
          </div>
        </div>
        
        <p >
          Az Paksi Informatika több mint 20 éves szakmai tapasztalattal nyújt teljeskörű IT
          üzemeltetési szolgáltatásokat kis- és középvállalkozások számára. Célunk, hogy biztosítsuk
          ügyfeleink számára a zökkenőmentes, megbízható és hatékony IT infrastruktúrát, amely
          minden nap támogatja működésüket. Szolgáltatásaink magukban foglalják a szerverek, IT
          rendszerek, munkaállomások tervezését, beüzemelését, üzemeltetését és karbantartását,
          valamint innovatív, nyílt forráskódú megoldásokat, automatizálást és webfejlesztést.
        </p>
      </div>
    </div> --}}



    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            Szerverek és munkaállomások tervezése,<br> beszerzése és beüzemelése
          </h1>
        </div>        
        <p>
          Egy jól megtervezett és megbízható IT infrastruktúra alapvető a stabil üzleti működéshez. Innovatív megoldásainkkal biztosítjuk, hogy rendszereid mindig hatékonyan és biztonságosan működjenek. Az alábbi szolgáltatásokat kínáljuk:
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-gears circle-icon fa-2x" style="color: #335eea"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Infrastruktúra tervezése:</h5>
              <p class="text-body-secondary">Megtervezzük a vállalkozásod igényeinek legjobban megfelelő szerverarchitektúrát és klienshálózatot, legyen szó fizikai vagy virtuális környezetekről.</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-microchip circle-icon fa-2x" style="color: #335eea"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Hardver beszerzés és telepítés:</h5>
              <p class="text-body-secondary">Gondoskodunk a megfelelő szerverek, munkaállomások, tárolók, hálózati eszközök és egyéb IT komponensek beszerzéséről és beüzemeléséről.</p>
            </div>
          </div>
        </div>
  
        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-code circle-icon fa-2x" style="color: #335eea"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Szoftverek telepítése és konfigurálása:</h5>
              <p class="text-body-secondary">A szerverek és munkaállomások szoftveres konfigurációja biztosítja az optimális teljesítményt és a biztonságos működést.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container my-2">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            Üzemeltetés, karbantartás és távfelügyelet
          </h1>
        </div>        
        <p>
          A rendszeres üzemeltetés és karbantartás elengedhetetlen az IT rendszerek zavartalan működéséhez, legyen szó szerverekről vagy kliensekről. Szolgáltatásaink közé tartozik:        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-clock-rotate-left circle-icon fa-2x" style="color: #335eea"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Rendszeres felügyelet:</h5>
              <p class="text-body-secondary">Folyamatosan monitorozzuk a szerverek és munkaállomások állapotát, azonnal reagálva az esetleges hibákra és problémákra.</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-pen-to-square circle-icon fa-2x" style="color: #335eea"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Szoftverfrissítések és javítások:</h5>
              <p class="text-body-secondary">Biztosítjuk a legfrissebb szoftverfrissítéseket és biztonsági javításokat a rendszerek védelme érdekében.</p>
            </div>
          </div>
        </div>
  
        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-code circle-icon fa-2x" style="color: #335eea"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Hibajavítás és támogatás:</h5>
              <p class="text-body-secondary">Ha bármi probléma merül fel, gyors és hatékony megoldásokat kínálunk.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-house-laptop circle-icon fa-2x" style="color: #335eea"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Távfelügyelet:</h5>
              <p class="text-body-secondary">Munkaállomások és szerverek távoli monitorozása és felügyelete biztosítja a gyors hibajavítást és minimalizálja a leállásokat.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <p class="fs-4 mx-md-5">
        Szerverek és munkaállomások tervezése, beszerzése és beüzemelése
      </p>
      <p class="mx-md-5 col-lg-10">
        Egy jól megtervezett és megbízható IT infrastruktúra alapvető a stabil üzleti működéshez. Az
        alábbi szolgáltatásokat kínáljuk:
      </p>
      <ul class="mx-md-5 col-lg-8 col-sm-12">
        <li><strong>Infrastruktúra tervezése:</strong> Megtervezzük a vállalkozásod igényeinek legjobban megfelelő szerverarchitektúrát és klienshálózatot, legyen szó fizikai vagy virtuális környezetekről.</li>
        <li><strong>Hardver beszerzés és telepítés:</strong> Gondoskodunk a megfelelő szerverek, munkaállomások, tárolók, hálózati eszközök és egyéb IT komponensek beszerzéséről és beüzemeléséről.</li>
        <li><strong>Szoftverek telepítése és konfigurálása:</strong> A szerverek és munkaállomások szoftveres konfigurációja biztosítja az optimális teljesítményt és a biztonságos működést.</li>
      </ul>
    </div>

    <div class="container mt-5" data-aos="fade-up">
      <p class="fs-4 mx-md-5">
        Üzemeltetés, karbantartás és távfelügyelet
      </p>
      <p class="mx-md-5 col-lg-10">
        A rendszeres üzemeltetés és karbantartás elengedhetetlen az IT rendszerek zavartalan
        működéséhez, legyen szó szerverekről vagy kliensekről. Szolgáltatásaink közé tartozik:
      </p>
      <ul class="mx-md-5 col-lg-8 col-sm-12">
        <li><strong>Rendszeres felügyelet:</strong> 
          Folyamatosan monitorozzuk a szerverek és munkaállomások
          állapotát, azonnal reagálva az esetleges hibákra és problémákra.
        </li>
        <li><strong>Szoftverfrissítések és javítások:</strong>
          Biztosítjuk a legfrissebb szoftverfrissítéseket és biztonsági
          javításokat a rendszerek védelme érdekében.
        </li>
        <li><strong>Hibajavítás és támogatás:</strong>
          Ha bármi probléma merül fel, gyors és hatékony megoldásokat
          kínálunk.
        </li>
        <li><strong>Távfelügyelet:</strong>
          Munkaállomások és szerverek távoli monitorozása és felügyelete biztosítja a
          gyors hibajavítást és minimalizálja a leállásokat.
        </li>
      </ul>
    </div>

    <div class="container mt-5" data-aos="fade-up">
      <p class="fs-4 mx-md-5">
        Webfejlesztés
      </p>
      <p class="mx-md-5 col-lg-10">
        Cégünk szakértői webfejlesztési szolgáltatásokat nyújtanak, amelyek a vállalkozásod üzleti és
        felhasználói igényeihez igazodnak. Fő profilunk:
      </p>
      <ul class="mx-md-5 col-lg-8 col-sm-12">
        <li><strong>Weboldalak fejlesztése és karbantartása:</strong> 
          Modern, reszponzív és felhasználóbarát
          weboldalakat készítünk, amelyek minden eszközön jól működnek.
        </li>
        <li><strong>Webalkalmazások:</strong>
          Üzleti folyamatokra szabott egyedi webalkalmazásokat fejlesztünk,
          amelyek javítják a hatékonyságot és a felhasználói élményt.
        </li>
      </ul>
    </div>

    <div class="container mt-5" data-aos="fade-up">
      <p class="fs-4 mx-md-5">
        Open Source megoldások
      </p>
      <p class="mx-md-5 col-lg-10">
        Az open source rendszerek egyre nagyobb teret hódítanak a vállalati IT környezetben, mivel
        költséghatékonyak és nagy rugalmasságot biztosítanak. Cégünk számos nyílt forráskódú
        platformot és szoftvert integrál, mint például:
      </p>
      <ul class="mx-md-5 col-lg-8 col-sm-12">
        <li><strong>Linux szerverek:</strong> 
          Biztonságos és költséghatékony megoldások mind fizikai, mind virtuális
          környezetekben.
        </li>
        <li><strong>Nyílt forráskódú alkalmazások:</strong>
          Olyan szoftverek telepítése és üzemeltetése, mint pl. a
          Nextcloud, az OpenVPN vagy a pfSense tűzfal, amelyek segítenek költséghatékonyan
          fenntartani az IT rendszereket.
        </li>
      </ul>
    </div>

    <div class="container mt-5" data-aos="fade-up">
      <p class="fs-4 mx-md-5">
        Automatizálás és hatékonyság növelés
      </p>
      <p class="mx-md-5 col-lg-10">
        Az IT rendszerek automatizálása jelentős mértékben hozzájárulhat az erőforrások
        hatékonyabb felhasználásához és a költségek csökkentéséhez. Az alábbiakat kínáljuk:
      </p>
      <ul class="mx-md-5 col-lg-8 col-sm-12">
        <li><strong>Automatizált frissítések és karbantartási feladatok:</strong> 
          Rendszerek automatikus frissítése és
          rendszeres karbantartási feladatok végrehajtása minimális leállással.
        </li>
        <li><strong>Skriptalapú automatizálás:</strong>
          Egyedi szkriptek fejlesztése és telepítése a napi rutinfolyamatok,
          mint például adatmentések és jelentéskészítés automatizálására.
        </li>
      </ul>
    </div>

    <div class="container mt-5" data-aos="fade-up">
      <p class="fs-4 mx-md-5">
        Adatmentés és helyreállítás
      </p>
      <p class="mx-md-5 col-lg-10">
        Az adatok védelme és a rendszeres adatmentés elengedhetetlen része a biztonságos
        üzemeltetésnek. Az alábbi megoldásokat kínáljuk:
      </p>
      <ul class="mx-md-5 col-lg-8 col-sm-12">
        <li><strong>Biztonságos adatmentési stratégiák kialakítása:</strong> 
          A legjobb gyakorlatokon alapuló
          adatmentési megoldások kidolgozása, amelyek védenek a hardverhibák és emberi hibák ellen is.
        </li>
        <li><strong>Helyi és felhőalapú mentési megoldások:</strong>
          Az ügyfél igényeinek megfelelően helyi és/vagy
          felhőalapú adatmentési megoldásokat biztosítunk.
        </li>
        <li><strong>Adat-helyreállítási megoldások:</strong>
          Hiba esetén gyors és megbízható helyreállítási
          szolgáltatásokat kínálunk.
        </li>
      </ul>
    </div>


    <div class="container my-5">

      <div class="col-md-9 mt-5 text-center justify-content-center g-lg-5 py-5 mx-auto" data-aos="fade-up">
        <h1 class="display-6 text-body-emphasis lh-2 mb-3">
          Miért válasszon minket?
        </h1>
        <p >
          Az <strong>Paksi Informatika</strong> elkötelezett a professzionális, megbízható és költséghatékony IT
          üzemeltetési megoldások iránt. Csapatunk szaktudása és tapasztalata biztosítja, hogy a
          vállalkozásod IT infrastruktúrája – legyen szó szerverekről, munkaállomásokról, vagy
          webalkalmazásokról – mindig optimálisan működjön, így te az üzletre koncentrálhatsz.
        </p>

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
