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

    <div class="container my-5">

      <div class="col-9 mt-5 text-center justify-content-center g-lg-5 py-5 mx-auto" data-aos="fade-up">
        <h1 class="display-6 text-body-emphasis lh-2 mb-3">
          {{-- {{ __('menu.contact')}} --}}

          IT Üzemeltetés – Teljeskörű Megoldások a Vállalkozásod Számára

        </h1>
        <p >
          Az Paksi Informatika több mint 20 éves szakmai tapasztalattal nyújt teljeskörű IT
          üzemeltetési szolgáltatásokat kis- és középvállalkozások számára. Célunk, hogy biztosítsuk
          ügyfeleink számára a zökkenőmentes, megbízható és hatékony IT infrastruktúrát, amely
          minden nap támogatja működésüket. Szolgáltatásaink magukban foglalják a szerverek, IT
          rendszerek, munkaállomások tervezését, beüzemelését, üzemeltetését és karbantartását,
          valamint innovatív, nyílt forráskódú megoldásokat, automatizálást és webfejlesztést.
        </p>
        {{-- <h5>Szívesen beszélnénk arról, hogyan segíthetünk Önnek.</h5> --}}

      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <p class="fs-4 mx-5">
        Szerverek és munkaállomások tervezése, beszerzése és beüzemelése
      </p>
      <p class="mx-5">
        Egy jól megtervezett és megbízható IT infrastruktúra alapvető a stabil üzleti működéshez. Az
        alábbi szolgáltatásokat kínáljuk:
      </p>
      <ul class="mx-5 col-8">
        <li><strong>Infrastruktúra tervezése:</strong> Megtervezzük a vállalkozásod igényeinek legjobban megfelelő szerverarchitektúrát és klienshálózatot, legyen szó fizikai vagy virtuális környezetekről.</li>
        <li><strong>Hardver beszerzés és telepítés:</strong> Gondoskodunk a megfelelő szerverek, munkaállomások, tárolók, hálózati eszközök és egyéb IT komponensek beszerzéséről és beüzemeléséről.</li>
        <li><strong>Szoftverek telepítése és konfigurálása:</strong> A szerverek és munkaállomások szoftveres konfigurációja biztosítja az optimális teljesítményt és a biztonságos működést.</li>
      </ul>
    </div>

    <div class="container mt-5" data-aos="fade-up">
      <p class="fs-4 mx-5">
        Üzemeltetés, karbantartás és távfelügyelet
      </p>
      <p class="mx-5">
        A rendszeres üzemeltetés és karbantartás elengedhetetlen az IT rendszerek zavartalan
        működéséhez, legyen szó szerverekről vagy kliensekről. Szolgáltatásaink közé tartozik:
      </p>
      <ul class="mx-5 col-8">
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
      <p class="fs-4 mx-5">
        Webfejlesztés
      </p>
      <p class="mx-5">
        Cégünk szakértői webfejlesztési szolgáltatásokat nyújtanak, amelyek a vállalkozásod üzleti és
        felhasználói igényeihez igazodnak. Fő profilunk:
      </p>
      <ul class="mx-5 col-8">
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
      <p class="fs-4 mx-5">
        Open Source megoldások
      </p>
      <p class="mx-5">
        Az open source rendszerek egyre nagyobb teret hódítanak a vállalati IT környezetben, mivel
        költséghatékonyak és nagy rugalmasságot biztosítanak. Cégünk számos nyílt forráskódú
        platformot és szoftvert integrál, mint például:
      </p>
      <ul class="mx-5 col-8">
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
      <p class="fs-4 mx-5">
        Automatizálás és hatékonyság növelés
      </p>
      <p class="mx-5">
        Az IT rendszerek automatizálása jelentős mértékben hozzájárulhat az erőforrások
        hatékonyabb felhasználásához és a költségek csökkentéséhez. Az alábbiakat kínáljuk:
      </p>
      <ul class="mx-5 col-8">
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
      <p class="fs-4 mx-5">
        Adatmentés és helyreállítás
      </p>
      <p class="mx-5">
        Az adatok védelme és a rendszeres adatmentés elengedhetetlen része a biztonságos
        üzemeltetésnek. Az alábbi megoldásokat kínáljuk:
      </p>
      <ul class="mx-5 col-8">
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

      <div class="col-9 mt-5 text-center justify-content-center g-lg-5 py-5 mx-auto" data-aos="fade-up">
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
