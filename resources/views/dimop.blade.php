<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Paksi Informatika – weboldal, webfejlesztés, webáruház, rendszerüzemeltetés, távmunka, felhős megoldások, pályázati és DIMOP támogatás cégeknek">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIMOP Plusz-pályázati lehetőségek vállalkozásoknak – PIKFT.HU</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    {{-- <body data-bs-theme="dark"> --}}

    @include('layouts.nav')

    <div class="conteiner px-5">
        <div class="mt-5 px-5 text-center" data-aos="fade-up">
            <h6 class="display-6 text-body-emphasis lh-2 mb-3">
                DIMOP Plusz-pályázati lehetőségek vállalkozásoknak
            </h6>
            <p>
                A PIKFT.HU csapata segít eligazodni a DIMOP Plusz-pályázat digitális világában. Weboldalunkon érthetően,
                célzottan mutatjuk be, hogy miként tudja vállalkozása kihasználni a támogatást modern digitális
                fejlesztésekre. </p>
        </div>


    </div>



    <div class="container  px-5 py-5">
        <div class="text-end mb-4">
            <a href="{{ route('dimopwiki') }}" class="btn btn-primary">DIMOP kisokos – egyszerűbben, érthetőbben</a>
            </div>


        <h2 class="mt-5">Kiknek szól?</h2>
        <ul>
            <li>Kis- és középvállalkozásoknak, akik:</li>
            <ul>
                <li>szeretnének hatékonyabban dolgozni digitális eszközökkel,</li>
                <li>modern webes jelenlétet építenének,</li>
                <li>automatizálnák az adminisztrációt,</li>
                <li>javítanák az ügyfélélményt.</li>
                </ul>
            </ul>

        <h2 class="mt-5">Milyen területekre lehet pályázni?</h2>
        <p>A támogatás keretében az alábbi kulcsterületeken lehet fejlesztéseket megvalósítani:</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Alapszintű
                felhőalapú szolgáltatások - <em>céges email, online dokumentumkezelés, felhőtárhely</em></li>
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Táv- és
                csoportmunka - <em>videóhívás, projektmenedzsment, csapatkommunikáció</em></li>
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> IKT biztonság
                - <em>vírusirtó, tűzfal, titkosított adatkezelés</em></li>
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Weboldal /
                Portál - <em>reszponzív vállalati honlap, kapcsolatfelvételi űrlap, keresőoptimalizálás</em></li>
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> CRM
                (ügyfélkapcsolat-kezelés) - <em>ajánlatküldés, ügyfélnaplózás, kampánymenedzsment</em></li>
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> ERP (vállalati
                erőforrás-tervezés) - <em>számlázás, készletkezelés, HR, pénzügy</em></li>
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> E-számlázás -
                <em>automatikus számlakiállítás, NAV kompatibilis archiválás</em></li>
            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> E-kereskedelem
                - <em>webáruház, fizetési modul, készlet- és szállításkezelés</em></li>
            </ul>

        <h2 class="mt-5">Miért a PIKFT?</h2>
        <ul>
            <li>Tapasztalatunk van a pályázati célterületeken való fejlesztésben.</li>
            <li>Segítünk eligazodni a feltételek és lehetőségek között.</li>
            <li>Ajánlunk konkrét megoldásokat: szoftvereket, szolgáltatásokat.</li>
            <li>Projektkivitelezésben és adminisztrációban is segítünk.</li>
            </ul>

        <h2 class="mt-5">Szeretne pályázni, de nem tudja hol kezdje?</h2>
        <p>Keressen minket bizalommal! Segítünk a célterületek kiválasztásában, az árajánlatok összeállításában és a
            projekt megvalósításában.</p>

        <div class="text-center my-4">
            <a href="https://pikft.hu" class="btn btn-success">Kapcsolatfelvétel most</a>
            </div>

        <div id="kisokos" class="mt-5">
            <h2>DIMOP kisokos</h2>
            <p><i class="bi bi-file-earmark-text-fill me-2"></i> Ha részletes, szakmai útmutatót keres a
                pályázat célterületeiről, ide kattintva elérheti wiki formában: <a href="#">DIMOP kisokos –
                    egyszerűbben, érthetőbben</a>.</p>
            </div>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}


    <!-- FOOTER -->

    @include('layouts.footer')

    <!-- TOP BUTTON  -->

    <button type="button" class="btn btn-outline-primary btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

</body>

</html>
