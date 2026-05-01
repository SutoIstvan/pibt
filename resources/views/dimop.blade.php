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
    @include('layouts.gtag')
</head>

<body>
    {{-- <body data-bs-theme="dark"> --}}

    @include('layouts.nav')

<div class="container col-xxl-12 px-4 pt-5 mt-lg-5">
  <div class="row flex-lg-row-reverse align-items-center g-0 py-0">

    <div data-aos="fade-up" data-aos-duration="1000" class="d-flex justify-content-center col-12 col-sm-12 col-lg-6">
      <img src="../assets/okm.jpg" class="img-fluid" loading="lazy"
           style="opacity: 0.7; height:400px">
    </div>

    <div class="col-lg-6 mt-xs-3">
      <h1 class="display-6 text-body-emphasis lh-2 mb-4 mt-5" data-aos="fade-up">
        <span class="text-primary">OKM Business</span>
      </h1>
      <p class="lead text-body-secondary mt-1 me-4" data-aos="fade-up" data-aos-duration="1000">
        Papírmentes Iroda és Munkaszám-alapú Automatizált Iktató- és Dokumentumkezelő Rendszer
      </p>
    </div>

  </div>
</div>

    <div class="container  pb-5">
        <!-- <div class="text-end mb-4">
            <a href="{{ route('dimopwiki') }}" class="btn btn-primary">DIMOP kisokos – egyszerűbben, érthetőbben</a>
        </div> -->


        <div class="rounded">
            <!-- <p class="lead mb-3"><strong>OKM Business</strong></p>
            <p class="lead mb-3">Papírmentes Iroda és Munkaszám-alapú Automatizált Iktató- és Dokumentumkezelő Rendszer</p> -->
            <h3 class="mt-5 mb-4 text-primary">1. Bevezetés</h3>
            <p class="lead mb-3">1.1 A digitális dokumentumkezelés szerepe a vállalkozásoknál<br />1.2 Az Okm Business rendszer célja<br />1.3 Milyen problémákat old meg</p>
            <h3 class="mt-5 mb-4 text-primary">2. Rendszer áttekintés</h3>
            <p class="lead mb-3">2.1 Az Okm Business felépítése<br />2.2 Fő funkcionális területek<br />2.3 Felhasználási területek (KKV, ipar, szolgáltatás)</p>
            <h3 class="mt-5 mb-4 text-primary">3. Fő funkciók</h3>
            <p class="lead mb-3">3.1 Dokumentumtár és fájlkezelés<br />3.2 Verziókezelés és előzmények<br />3.3 Metaadatok és címkézés<br />3.4 Jogosultságkezelés és hozzáférés<br />3.5 Keresés és szűrés (teljes szöveges keresés)<br />3.6 Automatikus archiválás</p>
            <h3 class="mt-5 mb-4 text-primary">4. Dokumentumkezelési folyamatok</h3>
            <p class="lead mb-3">4.1 Dokumentumok feltöltése és rendszerezése<br />4.2 Jóváhagyási folyamatok (workflow)<br />4.3 Verziókövetés és audit napló<br />4.4 Iratkezelési szabályok és struktúra</p>
            <h3 class="mt-5 mb-4 text-primary">5. CRM irányultság és ügyfélkezelés</h3>
            <p class="lead mb-3">5.1 Ügyfélmappák és struktúra<br />5.2 Projektek és ügyfélhez kötött dokumentumok<br />5.3 Státuszkezelés és nyomon követés<br />5.4 Kapcsolattartási adatok kezelése<br />5.5 Ajánlatok, szerződések kezelése</p>
            <h3 class="mt-5 mb-4 text-primary">6. Adminisztrációs felület</h3>
            <p class="lead mb-3">6.1 Felhasználók kezelése<br />6.2 Jogosultsági rendszer (role alapú hozzáférés)<br />6.3 Csoportok és szervezeti egységek<br />6.4 Naplózás és audit<br />6.5 Rendszerbeállítások</p>
            <h3 class="mt-5 mb-4 text-primary">7. Automatizálás és workflow</h3>
            <p class="lead mb-3">7.1 Automatizált folyamatok<br />7.2 Esemény alapú műveletek<br />7.3 Jóváhagyási láncok kialakítása<br />7.4 Értesítések és státuszváltások</p>
            <h3 class="mt-5 mb-4 text-primary">8. Integrációs lehetőségek</h3>
            <p class="lead mb-3">8.1 Külső rendszerekkel való kapcsolat<br />8.2 API alapú integráció<br />8.3 Irodai szoftverekkel való együttműködés<br />8.4 E-mail integráció</p>
            <h3 class="mt-5 mb-4 text-primary">9. Keresés és riportálás</h3>
            <p class="lead mb-3">9.1 Speciális keresési lehetőségek<br />9.2 Mentett keresések<br />9.3 Riportok és kimutatások</p>
            <h3 class="mt-5 mb-4 text-primary">10. Biztonság és adatvédelem</h3>
            <p class="lead mb-3">10.1 Adatbiztonsági megoldások<br />10.2 Hozzáférés szabályozás<br />10.3 Mentések és visszaállítás<br />10.4 Jogszabályi megfelelés</p>
            <h3 class="mt-5 mb-4 text-primary">11. Rendszer architektúra</h3>
            <p class="lead mb-3">11.1 Szerver oldali működés<br />11.2 Skálázhatóság<br />11.3 Telepítési lehetőségek (helyi / felhő)</p>
            <h3 class="mt-5 mb-4 text-primary">12. Használati példák</h3>
            <p class="lead mb-3">12.1 Dokumentumkezelés cégen belül<br />12.2 Pályázatkezelés<br />12.3 Projektmenedzsment támogatás<br />12.4 Szerződéskezelés</p>
            <h3 class="mt-5 mb-4 text-primary">13. Előnyök és üzleti érték</h3>
            <p class="lead mb-3">13.1 Időmegtakarítás<br />13.2 Átláthatóság növelése<br />13.3 Hibák csökkentése<br />13.4 Digitalizáció támogatása</p>
            <h3 class="mt-5 mb-4 text-primary">14. Bevezetési folyamat</h3>
            <p class="lead mb-3">14.1 Igényfelmérés<br />14.2 Testreszabás<br />14.3 Oktatás<br />14.4 Élesítés</p>
            <h3 class="mt-5 mb-4 text-primary">15. Támogatás és üzemeltetés</h3>
            <p class="lead mb-3">15.1 Rendszerkarbantartás<br />15.2 Frissítések<br />15.3 Ügyféltámogatás</p>
            <h3 class="mt-5 mb-4 text-primary">16. Technikai követelmények</h3>
            <p class="lead mb-3">16.1 Hardver igények<br />16.2 Szoftver környezet<br />16.3 Hálózati követelmények</p>
            <h3 class="mt-5 mb-4 text-primary">17. Bővíthetőség és testreszabás</h3>
            <p class="lead mb-3">17.1 Egyedi fejlesztések<br />17.2 Moduláris bővítés<br />17.3 Céges igényekhez igazítás</p>
            <h3 class="mt-5 mb-4 text-primary">18. Összefoglalás</h3>
            <p class="lead mb-3">18.1 Miért az Okm Business<br />18.2 Versenyelőnyök<br />18.3 Jövőbeni fejlesztési irányok</p>
            <h3 class="mt-5 mb-4 text-primary">1. Bevezetés</h3>
            <h3 class="lead mb-3"><strong>1.1 A digitális dokumentumkezelés szerepe a vállalkozásoknál</strong></h3>
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="/images/okm/1.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" />
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="/images/okm/2.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" />
                </div>
            </div>
            <p class="lead mb-3">A modern vállalkozások működésének egyik legkritikusabb eleme az információ gyors és pontos elérhetősége. A napi működés során keletkező dokumentumok – szerződések, ajánlatok, számlák, műszaki leírások, ügyféladatok – kezelése hagyományos módszerekkel egyre kevésbé hatékony.</p>
            <p class="lead mb-3">A papíralapú vagy rendezetlen digitális tárolás problémái:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok nehézkes visszakeresése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> verziók elvesztése vagy felülírása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> párhuzamos munkavégzés akadályozottsága </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> átláthatatlan jogosultságkezelés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hibás vagy elavult információk használata </li>
            </ul>
            <p class="lead mb-3">A digitális dokumentumkezelő rendszerek célja ezeknek a problémáknak a megszüntetése, strukturált, kereshető és biztonságos környezet biztosításával.</p>
            <p class="lead mb-3">Az Okm Business ebben a környezetben nem csak egy tárhely, hanem egy <strong>üzleti folyamatokat támogató központi rendszer</strong>, amely:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egységesíti a dokumentumkezelést </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szabályozza a hozzáféréseket </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> biztosítja a nyomon követhetőséget </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> támogatja az együttműködést </li>
            </ul>
            <p class="lead mb-3"><strong>1.2 Az Okm Business rendszer célja</strong></p>
            <div class="row align-items-center">
                    <div class="col-md-6">
                    <img src="/images/okm/3.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" />
                </div>
                <div class="col-md-6">
                    <img src="/images/okm/4.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" />
                </div>
            </div>
            <p class="lead mb-3">Az Okm Business rendszer célja, hogy a vállalkozások számára egy olyan integrált platformot biztosítson, amely egyszerre kezeli:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a dokumentumokat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> az ügyfélhez kapcsolódó adatokat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a belső folyamatokat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> az együttműködést </li>
            </ul>
            <p class="lead mb-3">A rendszer kialakítása során az alábbi üzleti igények kerültek fókuszba:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyors dokumentumelérés (másodpercek alatt) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> strukturált adattárolás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfél- és projektalapú gondolkodás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatizált jóváhagyási és feldolgozási folyamatok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> skálázható működés növekvő cégek számára </li>
            </ul>
            <p class="lead mb-3">Az Okm Business nem egy általános fájlkezelő, hanem egy <strong>folyamatközpontú vállalati rendszer</strong>, amely támogatja a napi operatív működést és a vezetői döntéshozatalt is.</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a dokumentumokat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> az ügyfélhez kapcsolódó adatokat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a belső folyamatokat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> az együttműködést </li>
            </ul>
            <p class="lead mb-3">A rendszer kialakítása során az alábbi üzleti igények kerültek fókuszba:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyors dokumentumelérés (másodpercek alatt) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> strukturált adattárolás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfél- és projektalapú gondolkodás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatizált jóváhagyási és feldolgozási folyamatok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> skálázható működés növekvő cégek számára </li>
            </ul>
            <p class="lead mb-3">Az Okm Business nem egy általános fájlkezelő, hanem egy <strong>folyamatközpontú vállalati rendszer</strong>, amely támogatja a napi operatív működést és a vezetői döntéshozatalt is.</p>
            <h3 class="lead mb-3"><strong>1.3 Milyen problémákat old meg</strong></h3>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="/images/okm/5.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" />
                </div>
                <div class="col-md-6">
                    <img src="/images/okm/6.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" />
                </div>
            </div>
            <p class="lead mb-3">Az Okm Business bevezetésével a vállalkozások a következő tipikus problémákat tudják megszüntetni:</p>
            <p class="lead mb-3"><strong>1. Dokumentumok szétszórtsága</strong><br />Fájlok különböző számítógépeken, e-mailekben, pendrive-okon.<br />→ Megoldás: központi, strukturált dokumentumtár.</p>
            <p class="lead mb-3"><strong>2. Verziókezelési problémák</strong><br />Nem egyértelmű, melyik a legfrissebb dokumentum.<br />→ Megoldás: automatikus verziókövetés és előzmények.</p>
            <p class="lead mb-3"><strong>3. Lassú visszakeresés</strong><br />Időigényes keresés mappák között.<br />→ Megoldás: teljes szöveges és metaadat alapú keresés.</p>
            <p class="lead mb-3"><strong>4. Jogosultsági káosz</strong><br />Nem megfelelő hozzáférések, adatbiztonsági kockázat.<br />→ Megoldás: role alapú hozzáférés-kezelés.</p>
            <p class="lead mb-3"><strong>5. Folyamatok hiánya</strong><br />Nincs kontroll a jóváhagyások, státuszok felett.<br />→ Megoldás: automatizált workflow és státuszkezelés.</p>
            <p class="lead mb-3"><strong>6. Ügyfélkezelés és dokumentumok szétválása</strong><br />CRM és dokumentumok külön rendszerekben.<br />→ Megoldás: ügyfélhez rendelt dokumentumstruktúra.</p>
            <p class="lead mb-3"><strong>7. Átláthatatlanság vezetői szinten</strong><br />Nincs valós idejű kép a folyamatokról.<br />→ Megoldás: riportok, státuszok, naplózás.</p>
            <p class="lead mb-3"><strong>Összefoglalva:</strong><br />Az Okm Business célja egy olyan digitális működési alap létrehozása, amely <strong>rendbe teszi a dokumentumokat, szabályozza a folyamatokat és összeköti az ügyfélkezelést a napi működéssel</strong>.</p>
            <h3 class="mb-3 text-primary mt-5"><strong>2. Rendszer áttekintés</strong></h3>
            <strong>2.1 Az Okm Business felépítése</strong>

            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="/images/okm/7.jpeg" class="img-fluid my-4 rounded" />
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="/images/okm/8.jpeg" class="img-fluid my-4 rounded" />
                </div>
            </div>

            <p class="lead mb-3">Az Okm Business egy moduláris felépítésű, szerver-kliens architektúrán alapuló rendszer, amely böngészőből érhető el, külön telepítés nélkül.</p>
            <p class="lead mb-3"><strong>Fő komponensek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><strong>Központi dokumentumtár</strong>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> fájlok és mappák hierarchikus kezelése </li>
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> metaadatok és címkék tárolása </li>
                    </ul>
                </li>
                <li class="list-group-item bg-transparent border-0 py-1"><strong>Workflow motor</strong>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jóváhagyási és feldolgozási folyamatok kezelése </li>
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státuszváltások automatizálása </li>
                    </ul>
                </li>
                <li class="list-group-item bg-transparent border-0 py-1"><strong>Felhasználó- és jogosultságkezelés</strong>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> role alapú hozzáférés </li>
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> csoportok és szervezeti egységek </li>
                    </ul>
                </li>
                <li class="list-group-item bg-transparent border-0 py-1"><strong>Keresőmotor</strong>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> teljes szöveges keresés </li>
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> metaadat alapú szűrés </li>
                    </ul>
                </li>
                <li class="list-group-item bg-transparent border-0 py-1"><strong>Adminisztrációs modul</strong>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rendszerbeállítások </li>
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> audit és naplózás </li>
                    </ul>
                </li>
                <li class="list-group-item bg-transparent border-0 py-1"><strong>Integrációs réteg</strong>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> API kapcsolatok külső rendszerekhez </li>
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> e-mail és irodai integrációk </li>
                    </ul>
                </li>
            </ul>
            <p class="lead mb-3">A rendszer központi szerveren fut, amely lehet:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> helyi (on-premise) infrastruktúra </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felhő alapú környezet</li>
            </ul>
            <p class="lead mb-3"><strong>2.2 Fő funkcionális területek</strong></p>
            <p class="lead mb-3"><img src="/images/okm/9.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></p>
            <p class="lead mb-3">Az Okm Business több, egymással szorosan együttműködő funkcionális területből áll:</p>
            <p class="lead mb-3"><strong>1. Dokumentumkezelés</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> fájlok tárolása, verziózása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> strukturált mappakezelés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentum életciklus kezelés </li>
            </ul>
            <p class="lead mb-3"><strong>2. Ügyfél- és projektkezelés (CRM irányultság)</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfél alapú mappastruktúra </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektekhez kapcsolt dokumentumok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státusz és előrehaladás követése </li>
            </ul>
            <p class="lead mb-3"><strong>3. Workflow és automatizálás</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jóváhagyási folyamatok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatikus lépések (pl. státuszváltás) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> értesítések </li>
            </ul>
            <p class="lead mb-3"><strong>4. Keresés és riportálás</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyors dokumentum elérés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mentett keresések </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kimutatások </li>
            </ul>
            <p class="lead mb-3"><strong>5. Adminisztráció és kontroll</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jogosultságok kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> audit napló </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rendszerparaméterek </li>
            </ul>
            <p class="lead mb-3">Ezek a területek egységes felületen jelennek meg, így a felhasználók egy rendszerben végzik a teljes munkafolyamatot.</p>
            <p class="lead mb-3"><strong>2.3 Felhasználási területek</strong></p>
            <p class="lead mb-3">Az Okm Business különböző iparágakban alkalmazható, különösen ott, ahol nagy mennyiségű dokumentum és ügyféladat kezelése szükséges.</p>
            <p class="lead mb-3"><strong>KKV szektor</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szerződések, ajánlatok kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfélkommunikáció dokumentálása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adminisztráció digitalizálása </li>
            </ul>
            <p class="lead mb-3"><strong>Kivitelezés / építőipar</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektenkénti dokumentumtár </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> műszaki dokumentációk kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> helyszíni és irodai munka összekapcsolása </li>
            </ul>
            <p class="lead mb-3"><strong>Szolgáltató cégek</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfélmappák kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> folyamatos dokumentáció és státusz követés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ajánlat → szerződés → teljesítés folyamat támogatása </li>
            </ul>
            <p class="lead mb-3"><strong>Pályázatkezelés</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> pályázati dokumentumok rendszerezése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státuszok nyomon követése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> több ügyfél párhuzamos kezelése </li>
            </ul>
            <p class="lead mb-3"><strong>Belső vállalati működés</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> HR dokumentumok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> belső szabályzatok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minőségbiztosítási dokumentáció </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva:</strong><br />Az Okm Business egy egységes rendszerben kezeli a dokumentumokat, az ügyféladatokat és a folyamatokat, így megszünteti a széttagolt működést és átlátható, skálázható digitális alapot biztosít a vállalkozások számára.</p>
            <h3 class="mt-5 mb-4 text-primary"><strong>3. Fő funkciók</strong></h3>
            <p class="lead mb-3"><strong>3.1 Dokumentumtár és fájlkezelés</strong></p>
            <p class="lead mb-3">
            <div class="row align-items-center">
                    <div class="col-6"><img src="/images/okm/10.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></div>
                    <div class="col-6"><img src="/images/okm/11.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></div>
            </div>
            </p>
            <p class="lead mb-3">Az Okm Business alapja a központi dokumentumtár, amely strukturált és átlátható módon kezeli a fájlokat.</p>
            <p class="lead mb-3"><strong>Fő jellemzők:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hierarchikus mappastruktúra (pl. Ügyfél → Projekt → Dokumentumok) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> drag &amp; drop feltöltés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> több fájl egyidejű kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok típus szerinti rendszerezése </li>
            </ul>
            <p class="lead mb-3"><strong>Gyakorlati példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Ügyfél mappa → „Kovács Kft.” </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Alatta: „Ajánlatok”, „Szerződések”, „Számlák”, „Műszaki dokumentáció” </li>
            </ul>
            <p class="lead mb-3"><strong>3.2 Verziókezelés és előzmények</strong></p>
            <p class="lead mb-3"><img src="/images/okm/12.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></p>
            <p class="lead mb-3">Minden dokumentumhoz automatikus verziókövetés tartozik.</p>
            <p class="lead mb-3"><strong>Funkciók:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minden módosítás új verzióként mentődik </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> visszaállás korábbi állapotra </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> verziók összehasonlítása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> módosítások nyomon követése </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs „végleges_v2_javított3.docx” típusú káosz </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egyértelmű, melyik az aktuális verzió</li>
            </ul>
            <p class="lead mb-3"><strong>3.3 Metaadatok és címkézés</strong></p>
            <p class="lead mb-3">A dokumentumokhoz strukturált adatok rendelhetők.</p>
            <p class="lead mb-3"><strong>Metaadat példák:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfél neve </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projekt azonosító </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státusz (pl. „ajánlat alatt”, „szerződött”) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dátumok </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nem csak mappák alapján keresel </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> komplex szűrések lehetségesek </li>
            </ul>
            <p class="lead mb-3"><strong>3.4 Jogosultságkezelés és hozzáférés</strong></p>
            <p class="lead mb-3"><img src="/images/okm/13.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></p>
            <p class="lead mb-3">Finomhangolt hozzáférés-szabályozás biztosítja az adatbiztonságot.</p>
            <p class="lead mb-3"><strong>Lehetőségek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felhasználó szintű jogosultság </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> csoport alapú hozzáférés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> olvasás / írás / törlés külön kezelve </li>
            </ul>
            <p class="lead mb-3"><strong>Példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> könyvelő → csak számlákhoz fér hozzá </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektvezető → teljes projekt dokumentáció </li>
            </ul>
            <p class="lead mb-3"><strong>3.5 Keresés és szűrés (teljes szöveges keresés)</strong></p>
            <p class="lead mb-3">A rendszer egyik legerősebb funkciója a gyors keresés.</p>
            <p class="lead mb-3"><strong>Keresési módok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> fájlnév alapján </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> metaadat alapján </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentum tartalmában (PDF, Word stb.) </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok másodpercek alatt megtalálhatók </li>
            </ul>
            <p class="lead mb-3"><strong>3.6 Automatikus archiválás</strong></p>
            <p class="lead mb-3"><img src="/images/okm/14.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></p>
            <p class="lead mb-3">A dokumentumok életciklusa automatizáltan kezelhető.</p>
            <p class="lead mb-3"><strong>Funkciók:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> archiválási szabályok (pl. 1 év után) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státusz alapú mozgatás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> régi dokumentumok elkülönítése </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> aktív és archivált adatok szétválasztása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rendszer tisztán tartása </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva:</strong><br />Az Okm Business fő funkciói biztosítják, hogy a dokumentumok kezelése <strong>strukturált, visszakövethető és gyors legyen</strong>, miközben a rendszer támogatja az üzleti folyamatokat és az együttműködést.</p>
            <h3 class="mt-5 mb-3 text-primary"><strong>4. Dokumentumkezelési folyamatok</strong></h3>
            <p class="lead mb-3"><img src="/images/okm/15.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /><strong>4.1 Dokumentumok feltöltése és rendszerezése</strong></p>
            <p class="lead mb-3">Az Okm Business-ben a dokumentumkezelés egységes, szabályozott módon történik már a feltöltés pillanatától.</p>
            <p class="lead mb-3"><strong>Folyamat:</strong></p>
            <ol>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Dokumentum feltöltése (drag &amp; drop vagy import) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Automatikus vagy manuális besorolás (mappa) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Metaadatok rögzítése (ügyfél, projekt, státusz) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Verzió létrehozása </li>
            </ol>
            <p class="lead mb-3"><strong>Strukturálás logikája:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Ügyfél → Projekt → Dokumentumtípus </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> vagy </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Osztály → Folyamat → Dokumentum </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minden dokumentum azonnal a megfelelő helyre kerül </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs utólagos „rendet rakás” </li>
            </ul>
            <p class="lead mb-3"><strong>4.2 Jóváhagyási folyamatok (workflow)</strong></p>
            <p class="lead mb-3"><img src="/images/okm/16.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></p>
            <p class="lead mb-3">A dokumentumokhoz automatizált jóváhagyási folyamatok rendelhetők.</p>
            <p class="lead mb-3"><strong>Tipikus workflow lépések:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> tervezet </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ellenőrzés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jóváhagyás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> véglegesítés </li>
            </ul>
            <p class="lead mb-3"><strong>Működés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státuszváltás csak jogosult személy által </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatikus értesítések </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> következő lépés aktiválása </li>
            </ul>
            <p class="lead mb-3"><strong>Példa (ajánlat):</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> értékesítő feltölti → státusz: „tervezet” </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> vezető ellenőrzi → „ellenőrzés alatt” </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jóváhagyás → „küldhető” </li>
            </ul>
            <p class="lead mb-3"><strong>4.3 Verziókövetés és audit napló</strong></p>
            <p class="lead mb-3"><img src="/images/okm/17.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></p>
            <p class="lead mb-3">A rendszer minden műveletet naplóz.</p>
            <p class="lead mb-3"><strong>Rögzített események:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> feltöltés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> módosítás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> törlés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> letöltés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státuszváltás </li>
            </ul>
            <p class="lead mb-3"><strong>Audit funkció:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ki, mikor, mit módosított </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> visszakövethető teljes dokumentuméletút </li>
            </ul>
            <p class="lead mb-3"><strong>Felhasználás:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> belső ellenőrzés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minőségbiztosítás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jogi megfelelés </li>
            </ul>
            <p class="lead mb-3"><strong>4.4 Iratkezelési szabályok és struktúra</strong></p>
            <p class="lead mb-3"><img src="/images/okm/18.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></p>
            <p class="lead mb-3">Az Okm Business lehetőséget biztosít szabályozott iratkezelési rendszer kialakítására.</p>
            <p class="lead mb-3"><strong>Beállítható elemek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mappastruktúra sablonok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kötelező metaadat mezők </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> elnevezési szabályok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> archiválási időszakok </li>
            </ul>
            <p class="lead mb-3"><strong>Példa szabály:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minden szerződéshez kötelező: <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfél neve </li>
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dátum </li>
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státusz </li>
                    </ul>
                </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egységes céges működés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyors betanítás új kollégáknak </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hibák minimalizálása </li>
            </ul>
            <p class="lead mb-3"><strong>Gyakorlati folyamat példa (end-to-end)</strong></p>
            <p class="lead mb-3"><strong>Ajánlat → Szerződés → Teljesítés</strong></p>
            <ol>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Ajánlat létrehozása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Feltöltés és metaadatok rögzítése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Jóváhagyási workflow </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Elfogadás után szerződés generálása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Teljesítési dokumentumok csatolása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Projekt lezárása → archiválás </li>
            </ol>
            <p class="lead mb-3"><strong>Összefoglalva:</strong><br />Az Okm Business nem csak tárolja a dokumentumokat, hanem <strong>irányítja azok életciklusát</strong>, biztosítva a kontrollált, átlátható és automatizált működést.</p>
            <h3 class="mt-5 mb-3 text-primary"><strong>5. CRM irányultság és ügyfélkezelés</strong></h3>
            <p class="lead mb-3"><img src="/images/okm/19.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></p>
            <p class="lead mb-3"><strong>5.1 Ügyfélmappák és struktúra</strong></p>
            <p class="lead mb-3">Az Okm Business egyik kulcseleme az ügyfélközpontú működés.</p>
            <p class="lead mb-3">A rendszerben minden ügyfélhez egy dedikált mappastruktúra tartozik, amely tartalmazza:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szerződések </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ajánlatok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> számlák </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kommunikációs dokumentumok </li>
            </ul>
            <p class="lead mb-3"><strong>Struktúra példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Kovács Kft. <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Ajánlatok </li>
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Szerződések </li>
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Projektek </li>
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Számlák </li>
                    </ul>
                </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minden információ egy helyen </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfélhez kötött teljes átláthatóság </li>
            </ul>
            <p class="lead mb-3"><strong>5.2 Projektek és ügyfélhez kötött dokumentumok</strong></p>
            <p class="lead mb-3"><img src="/images/okm/20.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></p>
            <p class="lead mb-3">Az ügyfeleken belül projektek kezelhetők, amelyekhez külön dokumentumstruktúra tartozik.</p>
            <p class="lead mb-3"><strong>Projekt szintű kezelés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> külön mappa minden projekthez </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projekt státusz (pl. folyamatban, lezárt) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok automatikus hozzárendelése </li>
            </ul>
            <p class="lead mb-3"><strong>Példa :</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Ügyfél: XY Kft. <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Projekt: „Iroda felújítás” <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Műszaki tervek </li>
                                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Árajánlatok </li>
                                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Szerződés </li>
                                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Teljesítési dokumentáció </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektenként teljes dokumentáció </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> visszakereshető teljes életciklus </li>
            </ul>
            <p class="lead mb-3"><strong>5.3 Státuszkezelés és nyomon követés</strong></p>
            <p class="lead mb-3"><img src="/images/okm/21.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></p>
            <p class="lead mb-3">A rendszer lehetőséget ad státuszok kezelésére és folyamatok követésére.</p>
            <p class="lead mb-3"><strong>Tipikus státuszok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> új érdeklődő </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ajánlat alatt </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szerződött </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kivitelezés alatt </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> lezárt </li>
            </ul>
            <p class="lead mb-3"><strong>Működés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok és projektek státuszhoz kötve </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> workflow-hoz kapcsolható </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> riportokban megjeleníthető </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mindig látható, hol tart egy ügy </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nem vesznek el folyamatok </li>
            </ul>
            <p class="lead mb-3"><strong>5.4 Kapcsolattartási adatok kezelése</strong></p>
            <p class="lead mb-3">Az Okm Business lehetőséget biztosít az ügyfelekhez tartozó adatok strukturált kezelésére.</p>
            <p class="lead mb-3"><strong>Tárolható adatok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> cégnév </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kapcsolattartó </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> e-mail, telefonszám </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> cím </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> megjegyzések </li>
            </ul>
            <p class="lead mb-3"><strong>Kapcsolat a dokumentumokkal:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minden dokumentum ügyfélhez köthető </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kereshető ügyfél alapján </li>
            </ul>
            <p class="lead mb-3"><img src="/images/okm/22.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /><strong>5.5 Ajánlatok és szerződések kezelése</strong></p>
            <p class="lead mb-3">Az Okm Business támogatja az értékesítési és szerződéskezelési folyamatokat.</p>
            <p class="lead mb-3"><strong>Folyamat:</strong></p>
            <ol>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Ajánlat létrehozása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Jóváhagyás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Ügyfélnek küldés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Elfogadás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Szerződés létrehozása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Teljesítés dokumentálása </li>
            </ol>
            <p class="lead mb-3"><strong>Funkciók:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> verziókezelés ajánlatokra </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státusz követés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok összekapcsolása </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> teljes értékesítési folyamat egy rendszerben </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs szétszórt adat (email, mappák stb.) </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business CRM irányultsága lehetővé teszi, hogy a vállalkozás:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfél alapon gondolkodjon </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektekben kezelje a munkát </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumokat és folyamatokat összekapcsolja </li>
            </ul>
            <p class="lead mb-3">Ez különösen fontos olyan működésnél, ahol:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> több ügyfél fut párhuzamosan </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektekhez kötött dokumentáció van </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ajánlat → szerződés → kivitelezés lánc működik</li>
            </ul>
            <h3 class="mt-5 mb-3 text-primary"><strong>6. Adminisztrációs felület</strong></h3>
            <p class="lead mb-3"><strong>6.1 Felhasználók kezelése</strong></p>
            <p class="lead mb-3">Az Okm Business adminisztrációs felülete lehetővé teszi a felhasználók teljes körű kezelését.</p>
            <p class="lead mb-3"><strong>Funkciók:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> új felhasználók létrehozása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felhasználói adatok módosítása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jelszókezelés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> fiók aktiválás / tiltás </li>
            </ul>
            <p class="lead mb-3"><strong>Tipikus felhasználói szerepek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adminisztrátor </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektvezető </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyintéző </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> külsős partner </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyors onboarding új munkatársaknak </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kontrollált hozzáférés </li>
            </ul>
            <p class="lead mb-3"><strong>6.2 Jogosultsági rendszer (role alapú hozzáférés)</strong></p>
            <p class="lead mb-3">A rendszer role alapú jogosultságkezelést alkalmaz.</p>
            <p class="lead mb-3"><strong>Jogosultsági szintek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> olvasás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> módosítás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> törlés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adminisztráció </li>
            </ul>
            <p class="lead mb-3"><strong>Kezelési módok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felhasználó szinten </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> csoport szinten </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mappa vagy dokumentum szinten </li>
            </ul>
            <p class="lead mb-3"><strong>Példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> vezetőség → teljes hozzáférés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adminisztráció → csak pénzügyi dokumentumok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kivitelező → projekt dokumentáció </li>
            </ul>
            <p class="lead mb-3"><strong>6.3 Csoportok és szervezeti egységek</strong></p>
            <p class="lead mb-3">A felhasználók csoportokba és szervezeti egységekbe rendezhetők.</p>
            <p class="lead mb-3"><strong>Csoport példák:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> értékesítés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kivitelezés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> pénzügy </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> vezetőség </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nem egyesével kell jogosultságot adni </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> skálázható felhasználókezelés </li>
            </ul>
            <p class="lead mb-3"><strong>Használat:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> új dolgozó → csoportba helyezés → automatikus jogosultság </li>
            </ul>
            <p class="lead mb-3"><strong>6.4 Naplózás és audit</strong></p>
            <p class="lead mb-3">A rendszer részletes naplózást biztosít minden műveletről.</p>
            <p class="lead mb-3"><strong>Naplózott események:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> bejelentkezések </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentum műveletek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jogosultság változások </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> workflow lépések </li>
            </ul>
            <p class="lead mb-3"><strong>Audit funkciók:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> visszakereshető eseménytörténet </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felhasználói aktivitás elemzése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> megfelelőségi ellenőrzések támogatása </li>
            </ul>
            <p class="lead mb-3"><strong>6.5 Rendszerbeállítások</strong></p>
            <p class="lead mb-3">Az adminisztrátorok a rendszer működését finomhangolhatják.</p>
            <p class="lead mb-3"><strong>Beállítási lehetőségek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumtár struktúra </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> metaadat mezők </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> workflow sablonok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> értesítések </li>
            </ul>
            <p class="lead mb-3"><strong>Testreszabás:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> céges igényekhez igazítás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egyedi működési logika kialakítása </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az adminisztrációs felület biztosítja, hogy a rendszer:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> biztonságosan működjön </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> skálázható legyen </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a cég struktúrájához igazodjon </li>
            </ul>
            <p class="lead mb-3">Ez különösen fontos növekvő vállalkozásoknál, ahol:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> sok felhasználó dolgozik </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> több projekt fut párhuzamosan </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szükséges a kontroll és az átláthatóság</li>
            </ul>
            <h3 class="mt-5 mb-3 text-primary"><strong>7. Automatizálás és workflow</strong></h3>
            <p class="lead mb-3"><img src="/images/okm/23.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /><strong>7.1 Automatizált folyamatok</strong></p>
            <p class="lead mb-3">Az Okm Business egyik legnagyobb üzleti értéke az automatizálás.</p>
            <p class="lead mb-3">A rendszer képes a dokumentumokhoz kapcsolódó folyamatokat automatikusan kezelni, így csökkenti a manuális munkát és a hibalehetőséget.</p>
            <p class="lead mb-3"><strong>Automatizálható események:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentum feltöltés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státuszváltás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jóváhagyás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> határidő elérése </li>
            </ul>
            <p class="lead mb-3"><strong>Automatikus műveletek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mappába helyezés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> metaadat kitöltés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> értesítés küldése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> következő workflow lépés indítása </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kevesebb manuális adminisztráció </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyorsabb folyamatok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egységes működés </li>
            </ul>
            <p class="lead mb-3"><strong>7.2 Esemény alapú műveletek</strong></p>
            <p class="lead mb-3">A rendszer eseményvezérelt logikával működik.</p>
            <p class="lead mb-3"><strong>Alapelv:</strong><br />„Ha történik valami → akkor történjen automatikusan egy művelet”</p>
            <p class="lead mb-3"><strong>Példák:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ha dokumentum státusz = „jóváhagyva”<br />→ automatikusan áthelyezés „Végleges” mappába </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ha új dokumentum érkezik<br />→ értesítés a felelősnek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ha határidő lejár<br />→ figyelmeztetés küldése </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nem kell manuálisan figyelni a folyamatokat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> csökken az emberi hiba </li>
            </ul>
            <p class="lead mb-3"><strong>7.3 Jóváhagyási láncok kialakítása</strong></p>
            <p class="lead mb-3">Összetett, több szintű jóváhagyási folyamatok is kialakíthatók.</p>
            <p class="lead mb-3"><strong>Felépítés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> lépések sorozata </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minden lépéshez felelős személy </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> feltételekhez kötött továbblépés </li>
            </ul>
            <p class="lead mb-3"><strong>Példa (szerződés):</strong></p>
            <ol>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> készítő </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jogi ellenőrzés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> pénzügyi jóváhagyás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> vezetői aláírás </li>
            </ol>
            <p class="lead mb-3"><strong>Funkciók:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kötelező lépések </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> párhuzamos jóváhagyás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> visszaküldés javításra </li>
            </ul>
            <p class="lead mb-3"><strong>7.4 Értesítések és státuszváltások</strong></p>
            <p class="lead mb-3">A rendszer automatikus értesítésekkel támogatja a folyamatokat.</p>
            <p class="lead mb-3"><strong>Értesítési típusok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> e-mail </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rendszerüzenet </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> feladat értesítés </li>
            </ul>
            <p class="lead mb-3"><strong>Mikor történik értesítés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> új feladat érkezik </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jóváhagyás szükséges </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> határidő közeleg vagy lejárt </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státusz változik </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs elfelejtett feladat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mindenki időben reagál </li>
            </ul>
            <p class="lead mb-3"><strong>Gyakorlati automatizálási példa</strong></p>
            <p class="lead mb-3"><strong>Pályázati dokumentum kezelése:</strong></p>
            <ol>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Dokumentum feltöltése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Automatikus metaadat kitöltés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Workflow indul: <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ellenőrzés → jóváhagyás → beadás </li>
                    </ul>
                </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Státusz frissítés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Archiválás a folyamat végén </li>
            </ol>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business automatizálási és workflow rendszere:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> csökkenti az adminisztrációt </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyorsítja a folyamatokat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> biztosítja a következetes működést </li>
            </ul>
            <p class="lead mb-3">Ez különösen fontos:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> több párhuzamos projekt esetén </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> komplex jóváhagyási folyamatoknál </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> növekvő cégek működésében </li>
            </ul>
            <h3 class="mt-5 mb-3 text-primary"><strong>8. Integrációs lehetőségek</strong></h3>
            <p class="lead mb-3"><strong>8.1 Külső rendszerekkel való kapcsolat</strong></p>
            <p class="lead mb-3">Az Okm Business nyitott rendszerként illeszthető más vállalati megoldásokhoz.</p>
            <p class="lead mb-3"><strong>Kapcsolható rendszerek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> vállalatirányítási rendszerek (ERP) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfélkezelő rendszerek (CRM) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> számlázó rendszerek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektmenedzsment eszközök </li>
            </ul>
            <p class="lead mb-3"><strong>Cél:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adatok központi kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> duplikációk megszüntetése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatizált adatáramlás </li>
            </ul>
            <p class="lead mb-3"><strong>Példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> CRM-ben létrejön egy ügyfél<br />→ automatikusan létrejön a mappastruktúra az Okm Business-ben </li>
            </ul>
            <p class="lead mb-3"><strong>8.2 API alapú integráció</strong></p>
            <p class="lead mb-3"><img src="/images/okm/24.jpeg" class="img-fluid my-4 rounded" alt="OKM ábra" /></p>
            <p class="lead mb-3">A rendszer API-n keresztül programozott módon is elérhető.</p>
            <p class="lead mb-3"><strong>API lehetőségek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok feltöltése / letöltése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> metaadatok kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mappák létrehozása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> workflow indítása </li>
            </ul>
            <p class="lead mb-3"><strong>Technikai előnyök:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatizált integrációk </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egyedi fejlesztések támogatása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> külső rendszerek összekapcsolása </li>
            </ul>
            <p class="lead mb-3"><strong>Gyakorlati példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> webes űrlap kitöltése után<br />→ dokumentum automatikusan létrejön a rendszerben </li>
            </ul>
            <p class="lead mb-3"><strong>8.3 Irodai szoftverekkel való együttműködés</strong></p>
            <p class="lead mb-3">Az Okm Business integrálható irodai dokumentumszerkesztő megoldásokkal.</p>
            <p class="lead mb-3"><strong>Funkciók:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok megnyitása közvetlenül a rendszerből </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> online szerkesztés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> több felhasználós együttműködés </li>
            </ul>
            <p class="lead mb-3"><strong>Támogatott dokumentumok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szöveges dokumentumok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> táblázatok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> prezentációk </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs szükség fájl letöltésre </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> valós idejű közös munka </li>
            </ul>
            <p class="lead mb-3"><strong>8.4 E-mail integráció</strong></p>
            <p class="lead mb-3">A rendszer képes az e-mail kommunikáció kezelésére és archiválására.</p>
            <p class="lead mb-3"><strong>Funkciók:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> e-mailek automatikus mentése dokumentumként </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> csatolmányok tárolása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfélhez rendelés </li>
            </ul>
            <p class="lead mb-3"><strong>Példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> beérkező ajánlatkérés e-mail<br />→ automatikusan bekerül az ügyfél mappájába </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> teljes kommunikáció visszakereshető </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs elveszett információ </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business integrációs képességei lehetővé teszik, hogy:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ne egy különálló rendszer legyen </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hanem a vállalat digitális ökoszisztémájának része </li>
            </ul>
            <p class="lead mb-3">Ez különösen fontos:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> meglévő rendszerek használata esetén </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatizált működés kialakításánál </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> skálázódó vállalkozásoknál</li>
            </ul>
            <h3 class="mt-5 mb-3 text-primary"><strong>9. Keresés és riportálás</strong></h3>
            <p class="lead mb-3"><strong>9.1 Speciális keresési lehetőségek</strong></p>
            <p class="lead mb-3">Az Okm Business gyors és pontos keresési rendszert biztosít nagy mennyiségű dokumentum esetén is.</p>
            <p class="lead mb-3"><strong>Keresési lehetőségek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> fájlnév alapján </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> metaadatok alapján (ügyfél, projekt, státusz) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> teljes dokumentum tartalmában </li>
            </ul>
            <p class="lead mb-3"><strong>Szűrési opciók:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dátum </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumtípus </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státusz </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felhasználó </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok másodpercek alatt elérhetők </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs időveszteség keresgéléssel </li>
            </ul>
            <p class="lead mb-3"><strong>9.2 Mentett keresések</strong></p>
            <p class="lead mb-3">A gyakran használt keresések elmenthetők és egy kattintással elérhetők.</p>
            <p class="lead mb-3"><strong>Példák:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> „Aktív projektek” </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> „Folyamatban lévő ajánlatok” </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> „Lezáratlan szerződések” </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyors napi használat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egységes lekérdezések a csapatban </li>
            </ul>
            <p class="lead mb-3"><strong>9.3 Riportok és kimutatások</strong></p>
            <p class="lead mb-3">A rendszer lehetőséget biztosít különböző riportok és kimutatások készítésére.</p>
            <p class="lead mb-3"><strong>Riport típusok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentum státusz riport </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projekt állapot kimutatás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felhasználói aktivitás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> workflow előrehaladás </li>
            </ul>
            <p class="lead mb-3"><strong>Felhasználás:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> vezetői döntéshozatal </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> teljesítmény nyomon követése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> folyamatok optimalizálása </li>
            </ul>
            <p class="lead mb-3"><strong>Gyakorlati példa</strong></p>
            <p class="lead mb-3"><strong>Vezetői lekérdezés:</strong></p>
            <p class="lead mb-3">„Mely projektek vannak még folyamatban és milyen státuszban?”</p>
            <p class="lead mb-3">→ egy mentett kereséssel azonnal lekérdezhető:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfél </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projekt </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státusz </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> utolsó módosítás </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business keresési és riportálási funkciói biztosítják, hogy:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> az információ gyorsan elérhető legyen </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a működés átlátható legyen </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a vezetők valós adatok alapján döntsenek</li>
            </ul>
            <h3 class="mt-5 mb-3 text-primary"><strong>10. Biztonság és adatvédelem</strong></h3>
            <p class="lead mb-3"><strong>10.1 Adatbiztonsági megoldások</strong></p>
            <p class="lead mb-3">Az Okm Business kiemelt hangsúlyt fektet az adatok védelmére, különösen üzleti és ügyféladatok kezelése esetén.</p>
            <p class="lead mb-3"><strong>Alapvető biztonsági elemek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> titkosított adatátvitel (HTTPS) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szerver oldali adatvédelem </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jogosultság alapú hozzáférés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> biztonságos hitelesítés </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> az adatok védettek külső és belső kockázatokkal szemben </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> megfelel a modern IT biztonsági elvárásoknak </li>
            </ul>
            <p class="lead mb-3"><strong>10.2 Hozzáférés szabályozás</strong></p>
            <p class="lead mb-3">A rendszer biztosítja, hogy minden felhasználó csak a számára releváns adatokhoz férjen hozzá.</p>
            <p class="lead mb-3"><strong>Szabályozási lehetőségek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mappa szintű hozzáférés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentum szintű korlátozás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> csoport alapú jogosultságok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> időszakos hozzáférések (pl. külsős partner) </li>
            </ul>
            <p class="lead mb-3"><strong>Példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egy alvállalkozó csak a saját projektjét látja </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> pénzügyi dokumentumok kizárólag vezetőknek </li>
            </ul>
            <p class="lead mb-3"><strong>10.3 Mentések és visszaállítás</strong></p>
            <p class="lead mb-3">A rendszer támogatja az adatok biztonsági mentését és gyors visszaállítását.</p>
            <p class="lead mb-3"><strong>Mentési lehetőségek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatikus napi mentések </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> teljes rendszer mentés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentum szintű visszaállítás </li>
            </ul>
            <p class="lead mb-3"><strong>Kockázatkezelés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hardverhiba </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> véletlen törlés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adatvesztés </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minimális adatvesztési kockázat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyors helyreállítás </li>
            </ul>
            <p class="lead mb-3"><strong>10.4 Jogszabályi megfelelés</strong></p>
            <p class="lead mb-3">Az Okm Business kialakítása megfelel a vállalati és adatvédelmi követelményeknek.</p>
            <p class="lead mb-3"><strong>Támogatott megfelelőségek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adatkezelési szabályok betartása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> auditálhatóság </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentum életciklus követés </li>
            </ul>
            <p class="lead mb-3"><strong>Fontos elemek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> naplózott műveletek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> visszakövethető módosítások </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> strukturált adatkezelés </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business biztonsági rendszere biztosítja, hogy:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> az adatok védettek legyenek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a hozzáférések kontrolláltak legyenek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> az adatvesztés minimalizálva legyen </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a rendszer megfeleljen a jogszabályi elvárásoknak </li>
            </ul>
            <p class="lead mb-3">Ez különösen fontos:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyféladatok kezelésekor </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szerződések és pénzügyi dokumentumok esetén </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> pályázati és audit környezetben</li>
            </ul>
            <h3 class="mt-5 mb-3 text-primary"><strong>11. Rendszer architektúra</strong></h3>
            <p class="lead mb-3"><strong>11.1 Szerver oldali működés</strong></p>
            <p class="lead mb-3">Az Okm Business központi szerver alapú rendszerként működik, ahol minden adat és logika egy kontrollált környezetben kerül feldolgozásra.</p>
            <p class="lead mb-3"><strong>Fő elemek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> alkalmazás szerver (üzleti logika) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adatbázis (metaadatok, jogosultságok) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> fájltároló rendszer (dokumentumok) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kereső index (gyors visszakereséshez) </li>
            </ul>
            <p class="lead mb-3"><strong>Működési elv:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a felhasználók böngészőn keresztül csatlakoznak </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minden művelet a szerveren történik </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a kliens oldalon nincs adat tárolás </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> központi kontroll </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egységes működés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> könnyű karbantartás </li>
            </ul>
            <p class="lead mb-3"><strong>11.2 Skálázhatóság</strong></p>
            <p class="lead mb-3">A rendszer úgy van kialakítva, hogy a vállalkozás növekedésével együtt bővíthető legyen.</p>
            <p class="lead mb-3"><strong>Skálázási lehetőségek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felhasználók számának növelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentum mennyiség bővülése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> több párhuzamos folyamat kezelése </li>
            </ul>
            <p class="lead mb-3"><strong>Technikai megoldások:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> külön adatbázis és alkalmazás szerver </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> terheléselosztás (load balancing) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> külön tároló rendszerek használata </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nem szükséges rendszerváltás növekedéskor </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> stabil működés nagy terhelés mellett is </li>
            </ul>
            <p class="lead mb-3"><strong>11.3 Telepítési lehetőségek (helyi / felhő)</strong></p>
            <p class="lead mb-3">Az Okm Business rugalmasan telepíthető különböző környezetekbe.</p>
            <p class="lead mb-3"><strong>1. Helyi telepítés (on-premise):</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> saját szerveren fut </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> teljes kontroll az adatok felett </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> belső hálózaton is használható </li>
            </ul>
            <p class="lead mb-3"><strong>2. Felhő alapú működés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> külső szerveren üzemel </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> távoli elérés bárhonnan </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs helyi infrastruktúra igény </li>
            </ul>
            <p class="lead mb-3"><strong>3. Hibrid megoldás:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> helyi + felhő kombináció </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kritikus adatok helyben </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> külső elérés biztosítása </li>
            </ul>
            <p class="lead mb-3"><strong>11.4 Biztonsági architektúra</strong></p>
            <p class="lead mb-3">A rendszer több szinten védi az adatokat és a működést.</p>
            <p class="lead mb-3"><strong>Védelmi rétegek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hálózati védelem (tűzfal, VPN) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> alkalmazás szintű védelem </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felhasználói hitelesítés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jogosultság kezelés </li>
            </ul>
            <p class="lead mb-3"><strong>Támogatott megoldások:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> titkosított kommunikáció </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> naplózás és monitoring </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hozzáférés korlátozás </li>
            </ul>
            <p class="lead mb-3"><strong>11.5 Integrált működési modell</strong></p>
            <p class="lead mb-3">Az Okm Business nem önálló rendszerként működik, hanem egy integrált vállalati környezet részeként.</p>
            <p class="lead mb-3"><strong>Kapcsolódási pontok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> webes felületek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> API alapú rendszerek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> irodai alkalmazások </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> e-mail rendszerek </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egységes digitális működés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adatáramlás automatizálása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rendszerek közötti szinkron </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business architektúrája:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> stabil és biztonságos </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> skálázható növekedés esetén </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rugalmasan telepíthető </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> integrálható más rendszerekkel </li>
            </ul>
            <p class="lead mb-3">Ez biztosítja, hogy a rendszer hosszú távon is megbízható alapot adjon a vállalkozás működéséhez.</p>
            <h3 class="mt-5 mb-3 text-primary"><strong>12. Használati példák</strong></h3>
            <p class="lead mb-3"><strong>12.1 Dokumentumkezelés cégen belül</strong></p>
            <p class="lead mb-3">Az Okm Business alapvető felhasználása a belső dokumentumok rendszerezése és kezelése.</p>
            <p class="lead mb-3"><strong>Tipikus működés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> céges dokumentumok központi tárolása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szerződések, szabályzatok, belső anyagok kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> verziók és módosítások nyomon követése </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> megszűnik a „ki hol mentette el” probléma </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minden dokumentum egy helyen, strukturáltan </li>
            </ul>
            <p class="lead mb-3"><strong>12.2 Pályázatkezelés</strong></p>
            <p class="lead mb-3">Az Okm Business kifejezetten alkalmas pályázati folyamatok kezelésére.</p>
            <p class="lead mb-3"><strong>Folyamat:</strong></p>
            <ol>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfél mappa létrehozása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> pályázati dokumentumok feltöltése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státuszok kezelése (pl. „adatbekérés”, „beadva”) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok verziókövetése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> archiválás </li>
            </ol>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> több pályázat párhuzamos kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> átlátható státuszok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> teljes dokumentáció egy helyen </li>
            </ul>
            <p class="lead mb-3"><strong>Gyakorlati előny (Paksi Informatika jelleg):</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> DIMOP jellegű projektek strukturált kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfél → pályázat → dokumentum logika </li>
            </ul>
            <p class="lead mb-3"><strong>12.3 Projektmenedzsment támogatás</strong></p>
            <p class="lead mb-3">A rendszer támogatja a projektek teljes dokumentációját.</p>
            <p class="lead mb-3"><strong>Példa (kivitelezési projekt):</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ajánlat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szerződés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> műszaki tervek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kivitelezési dokumentáció </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> átadás-átvétel </li>
            </ul>
            <p class="lead mb-3"><strong>Működés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minden projekt külön mappában </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok státuszhoz kötve </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> workflow alapú kezelés </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> teljes projekt átlátható </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> visszakereshető minden lépés </li>
            </ul>
            <p class="lead mb-3"><strong>12.4 Szerződéskezelés</strong></p>
            <p class="lead mb-3">Az Okm Business támogatja a szerződések teljes életciklusát.</p>
            <p class="lead mb-3"><strong>Folyamat:</strong></p>
            <ol>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szerződés tervezet feltöltése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> belső egyeztetés (kommentek) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jóváhagyási workflow </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> véglegesítés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> archiválás </li>
            </ol>
            <p class="lead mb-3"><strong>Funkciók:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> verziókövetés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státuszkezelés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> audit napló </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs elveszett vagy hibás verzió </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jogilag visszakövethető folyamat </li>
            </ul>
            <p class="lead mb-3"><strong>12.5 Ügyfélkezelés dokumentum alapon</strong></p>
            <p class="lead mb-3">Az Okm Business CRM jelleggel is használható.</p>
            <p class="lead mb-3"><strong>Működés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minden ügyfélhez saját mappa </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minden dokumentum ügyfélhez kötve </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> státuszok követése </li>
            </ul>
            <p class="lead mb-3"><strong>Példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> érdeklődő → ajánlat → szerződés → teljesítés </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egy rendszerben az összes ügyfél adat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs külön CRM + fájlkezelő </li>
            </ul>
            <p class="lead mb-3"><strong>12.6 Belső folyamatok digitalizálása</strong></p>
            <p class="lead mb-3">A rendszer alkalmas belső működés digitalizálására.</p>
            <p class="lead mb-3"><strong>Felhasználás:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> HR dokumentumok kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> belső jóváhagyások </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szabályzatok kezelése </li>
            </ul>
            <p class="lead mb-3"><strong>Példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szabadság igénylés dokumentum alapon </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> beszerzési jóváhagyási folyamat </li>
            </ul>
            <p class="lead mb-3"><strong>12.7 Több telephelyes működés támogatása</strong></p>
            <p class="lead mb-3">Az Okm Business lehetővé teszi a távoli és több helyszínes munkát.</p>
            <p class="lead mb-3"><strong>Előnyök:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> központi rendszer minden telephelynek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> valós idejű hozzáférés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egységes működés </li>
            </ul>
            <p class="lead mb-3"><strong>Példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> iroda + kivitelezési helyszín </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok azonnal elérhetők </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business rugalmasan alkalmazható:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumkezelésre </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> pályázatok kezelésére </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektek nyomon követésére </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfélkezelésre </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> belső folyamatok digitalizálására </li>
            </ul>
            <p class="lead mb-3">Ez lehetővé teszi, hogy a rendszer több különálló megoldást kiváltson egy egységes platformmal.</p>
            <h3 class="mt-5 mb-3 text-primary"><strong>13. Előnyök és üzleti érték</strong></h3>
            <p class="lead mb-3"><strong>13.1 Időmegtakarítás</strong></p>
            <p class="lead mb-3">Az Okm Business jelentősen csökkenti a dokumentumokkal töltött adminisztrációs időt.</p>
            <p class="lead mb-3"><strong>Hol nyersz időt:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok azonnali megtalálása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatizált folyamatok (nem kell kézzel léptetni) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egységes struktúra (nincs keresgélés) </li>
            </ul>
            <p class="lead mb-3"><strong>Gyakorlati hatás:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> napi több óra adminisztráció kiváltható </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyorsabb ügyintézés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rövidebb átfutási idők </li>
            </ul>
            <p class="lead mb-3"><strong>13.2 Átláthatóság növelése</strong></p>
            <p class="lead mb-3">A rendszer teljes képet ad a vállalkozás működéséről.</p>
            <p class="lead mb-3"><strong>Mit látsz egyben:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektek állapota </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumok státusza </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> folyamatok előrehaladása </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs „nem tudom hol tart” helyzet </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> vezetői kontroll növekszik </li>
            </ul>
            <p class="lead mb-3"><strong>13.3 Hibák csökkentése</strong></p>
            <p class="lead mb-3">Az automatizált működés minimalizálja az emberi hibákat.</p>
            <p class="lead mb-3"><strong>Tipikus hibák, amik megszűnnek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rossz verzió használata </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> elfelejtett jóváhagyás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hiányzó dokumentumok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hibás adatkezelés </li>
            </ul>
            <p class="lead mb-3"><strong>Ok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rendszer szabályozza a folyamatokat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kötelező mezők és lépések </li>
            </ul>
            <p class="lead mb-3"><strong>13.4 Digitalizáció támogatása</strong></p>
            <p class="lead mb-3">Az Okm Business a vállalkozás digitális alapja lehet.</p>
            <p class="lead mb-3"><strong>Mit vált ki:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> papíralapú működés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> e-mailben küldözgetett fájlok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> különálló rendszerek </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egységes digitális működés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> könnyebb skálázás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> modern vállalati működés </li>
            </ul>
            <p class="lead mb-3"><strong>13.5 Költségcsökkentés</strong></p>
            <p class="lead mb-3">A rendszer közvetlen és közvetett költségeket is csökkent.</p>
            <p class="lead mb-3"><strong>Közvetlen:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> papír és nyomtatás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adminisztrációs munkaidő </li>
            </ul>
            <p class="lead mb-3"><strong>Közvetett:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hibákból adódó veszteségek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> lassú folyamatok költsége </li>
            </ul>
            <p class="lead mb-3"><strong>13.6 Versenyelőny</strong></p>
            <p class="lead mb-3">A gyorsabb és átláthatóbb működés közvetlen üzleti előnyt ad.</p>
            <p class="lead mb-3"><strong>Előnyök:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyorsabb ajánlatadás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> pontosabb teljesítés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jobb ügyfélélmény </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> több lezárt üzlet </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> magasabb ügyfél elégedettség </li>
            </ul>
            <p class="lead mb-3"><strong>13.7 Skálázható működés</strong></p>
            <p class="lead mb-3">A rendszer támogatja a növekedést.</p>
            <p class="lead mb-3"><strong>Mit jelent:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> több ügyfél kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> több projekt párhuzamos futtatása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> új munkatársak gyors bevonása </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nem kell rendszert váltani növekedéskor </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business üzleti értéke abban rejlik, hogy:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyorsítja a működést </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> átláthatóvá teszi a folyamatokat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> csökkenti a hibákat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> támogatja a növekedést </li>
            </ul>
            <p class="lead mb-3">Ez nem csak egy szoftver, hanem egy <strong>működési modell</strong>, amely versenyelőnyt biztosít.</p>
            <h3 class="mt-5 mb-3 text-primary"><strong>14. Bevezetési folyamat</strong></h3>
            <p class="lead mb-3"><strong>14.1 Igényfelmérés</strong></p>
            <p class="lead mb-3">A bevezetés első lépése a vállalkozás működésének részletes felmérése.</p>
            <p class="lead mb-3"><strong>Felmért területek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jelenlegi dokumentumkezelési folyamatok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> használt rendszerek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> problémák és szűk keresztmetszetek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> üzleti célok </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> pontos rendszerterv </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> testreszabási igények meghatározása </li>
            </ul>
            <p class="lead mb-3"><strong>14.2 Testreszabás</strong></p>
            <p class="lead mb-3">Az Okm Business a cég működéséhez kerül igazításra.</p>
            <p class="lead mb-3"><strong>Testreszabási elemek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mappastruktúra kialakítása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> metaadat mezők beállítása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> workflow folyamatok kialakítása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jogosultsági rendszer felépítése </li>
            </ul>
            <p class="lead mb-3"><strong>Példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> DIMOP pályázati struktúra előre kialakítva </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfél → projekt → státusz logika </li>
            </ul>
            <p class="lead mb-3"><strong>14.3 Adatmigráció</strong></p>
            <p class="lead mb-3">A meglévő dokumentumok átemelése az új rendszerbe.</p>
            <p class="lead mb-3"><strong>Források:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> helyi gépek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hálózati meghajtók </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> e-mailek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> korábbi rendszerek </li>
            </ul>
            <p class="lead mb-3"><strong>Folyamat:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rendszerezés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> tisztítás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> importálás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ellenőrzés </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> strukturált, tiszta adatbázis </li>
            </ul>
            <p class="lead mb-3"><strong>14.4 Oktatás</strong></p>
            <p class="lead mb-3">A felhasználók betanítása kulcsfontosságú a sikeres bevezetéshez.</p>
            <p class="lead mb-3"><strong>Oktatási területek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumkezelés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> keresés és használat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> workflow működés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adminisztráció </li>
            </ul>
            <p class="lead mb-3"><strong>Formák:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> személyes oktatás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> online bemutató </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentáció </li>
            </ul>
            <p class="lead mb-3"><strong>14.5 Élesítés</strong></p>
            <p class="lead mb-3">A rendszer bevezetése a napi működésbe.</p>
            <p class="lead mb-3"><strong>Lépések:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> tesztelés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hibák javítása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> éles indulás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felhasználói támogatás </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> működő rendszer valós környezetben </li>
            </ul>
            <p class="lead mb-3"><strong>14.6 Utókövetés és finomhangolás</strong></p>
            <p class="lead mb-3">A bevezetés után a rendszer optimalizálása történik.</p>
            <p class="lead mb-3"><strong>Tevékenységek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felhasználói visszajelzések gyűjtése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> folyamatok finomítása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> új igények kezelése </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> folyamatos fejlődés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> maximális hatékonyság </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business bevezetése strukturált folyamat mentén történik:</p>
            <ol>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> felmérés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> testreszabás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> migráció </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> oktatás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> élesítés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> optimalizálás </li>
            </ol>
            <p class="lead mb-3">Ez biztosítja, hogy a rendszer:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyorsan bevezethető legyen </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> illeszkedjen a működéshez </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> valódi üzleti értéket adjon </li>
            </ul>
            <h3 class="mt-5 mb-3 text-primary"><strong>15. Támogatás és üzemeltetés</strong></h3>
            <p class="lead mb-3"><strong>15.1 Rendszerkarbantartás</strong></p>
            <p class="lead mb-3">Az Okm Business folyamatos, stabil működéséhez rendszeres karbantartás szükséges.</p>
            <p class="lead mb-3"><strong>Feladatok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rendszer állapot ellenőrzés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> logok és hibák monitorozása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> teljesítmény optimalizálás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adatbázis karbantartás </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> stabil működés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minimális leállás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> megelőzhető hibák </li>
            </ul>
            <p class="lead mb-3"><strong>15.2 Frissítések</strong></p>
            <p class="lead mb-3">A rendszer folyamatos fejlesztés alatt áll, ezért rendszeres frissítések biztosítják a naprakész működést.</p>
            <p class="lead mb-3"><strong>Frissítések tartalma:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> biztonsági javítások </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> új funkciók </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> teljesítmény javítások </li>
            </ul>
            <p class="lead mb-3"><strong>Működés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> tervezett frissítések </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> tesztelés után élesítés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> visszaállítási lehetőség biztosítása </li>
            </ul>
            <p class="lead mb-3"><strong>15.3 Ügyféltámogatás</strong></p>
            <p class="lead mb-3">A rendszer használatához folyamatos szakmai támogatás biztosított.</p>
            <p class="lead mb-3"><strong>Támogatási formák:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hibabejelentés kezelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> használati kérdések megválaszolása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rendszerrel kapcsolatos tanácsadás </li>
            </ul>
            <p class="lead mb-3"><strong>Elérhetőség:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> e-mail </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> telefon </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> távoli segítségnyújtás </li>
            </ul>
            <p class="lead mb-3"><strong>15.4 Monitoring és felügyelet</strong></p>
            <p class="lead mb-3">A rendszer működése folyamatosan ellenőrizhető.</p>
            <p class="lead mb-3"><strong>Felügyeleti elemek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szerver állapot figyelés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> szolgáltatások elérhetősége </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> erőforrás használat (CPU, memória, tárhely) </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> problémák időben észlelhetők </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyors beavatkozás lehetséges </li>
            </ul>
            <p class="lead mb-3"><strong>15.5 Biztonsági üzemeltetés</strong></p>
            <p class="lead mb-3">Az adatbiztonság fenntartása folyamatos feladat.</p>
            <p class="lead mb-3"><strong>Feladatok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> biztonsági mentések ellenőrzése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hozzáférések felülvizsgálata </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> naplózás figyelése </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> incidensek kezelése </li>
            </ul>
            <p class="lead mb-3"><strong>15.6 SLA és rendelkezésre állás</strong></p>
            <p class="lead mb-3">A rendszer üzemeltetése szolgáltatási szintekhez köthető.</p>
            <p class="lead mb-3"><strong>Lehetőségek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> garantált rendelkezésre állás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> reakcióidők meghatározása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> prioritás alapú hibakezelés </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kiszámítható működés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> üzletileg tervezhető rendszerhasználat </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business üzemeltetése biztosítja, hogy a rendszer:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> folyamatosan működjön </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> biztonságos legyen </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> naprakész maradjon </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> támogatott környezetben fusson </li>
            </ul>
            <p class="lead mb-3">Ez különösen fontos üzleti kritikus rendszerek esetén, ahol a leállás közvetlen kiesést okozhat.</p>
            <h3 class="mt-5 mb-3 text-primary"><strong>16. Technikai követelmények</strong></h3>
            <p class="lead mb-3"><strong>16.1 Hardver igények</strong></p>
            <p class="lead mb-3">Az Okm Business erőforrás igénye a felhasználók számától és a dokumentum mennyiségtől függ.</p>
            <p class="lead mb-3"><strong>Alap konfiguráció (kisvállalkozás):</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> CPU: 4 mag </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> RAM: 8–16 GB </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Tárhely: 200–500 GB (SSD ajánlott) </li>
            </ul>
            <p class="lead mb-3"><strong>Közepes terhelés (10–30 felhasználó):</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> CPU: 6–8 mag </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> RAM: 16–32 GB </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Tárhely: 500 GB – 2 TB </li>
            </ul>
            <p class="lead mb-3"><strong>Nagyobb rendszer:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> külön alkalmazás és adatbázis szerver </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dedikált tároló (NAS / SAN) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> skálázható infrastruktúra </li>
            </ul>
            <p class="lead mb-3"><strong>Megjegyzés:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> SSD használata erősen ajánlott a keresés és dokumentumkezelés gyorsítása miatt </li>
            </ul>
            <p class="lead mb-3"><strong>16.2 Szoftver környezet</strong></p>
            <p class="lead mb-3">Az Okm Business szabványos szerver környezetben futtatható.</p>
            <p class="lead mb-3"><strong>Szerver oldal:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> Linux alapú rendszer (ajánlott) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> konténeres környezet (Docker) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> adatbázis szerver </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> web szerver </li>
            </ul>
            <p class="lead mb-3"><strong>Kliens oldal:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> modern webböngésző (Chrome, Edge, Firefox) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nincs szükség telepítésre </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> platformfüggetlen működés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egyszerű hozzáférés </li>
            </ul>
            <p class="lead mb-3"><strong>16.3 Hálózati követelmények</strong></p>
            <p class="lead mb-3">A rendszer stabil hálózati kapcsolatot igényel.</p>
            <p class="lead mb-3"><strong>Alap követelmények:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> folyamatos internet kapcsolat (felhő esetén) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> belső hálózati elérés (helyi telepítésnél) </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> megfelelő sávszélesség dokumentum kezeléshez </li>
            </ul>
            <p class="lead mb-3"><strong>Ajánlások:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> minimum 100 Mbps kapcsolat </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> VPN használat külső eléréshez </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> tűzfal és biztonsági beállítások </li>
            </ul>
            <p class="lead mb-3"><strong>16.4 Biztonsági követelmények</strong></p>
            <p class="lead mb-3">A rendszer biztonságos működéséhez megfelelő infrastruktúra szükséges.</p>
            <p class="lead mb-3"><strong>Szükséges elemek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> SSL tanúsítvány </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> tűzfal </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rendszeres frissítések </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jogosultságkezelés </li>
            </ul>
            <p class="lead mb-3"><strong>16.5 Mentési infrastruktúra</strong></p>
            <p class="lead mb-3">Az adatbiztonság érdekében külön mentési rendszer szükséges.</p>
            <p class="lead mb-3"><strong>Ajánlott megoldások:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> napi automatikus mentések </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> külön fizikai vagy felhő tárhely </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> visszaállítás tesztelése </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business technikai követelményei:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> standard szerver infrastruktúrával teljesíthetők </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> skálázhatóak a cég növekedésével </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nem igényelnek speciális kliens oldali telepítést </li>
            </ul>
            <p class="lead mb-3">Ez biztosítja a gyors bevezetést és a rugalmas működést.</p>
            <h3 class="mt-5 mb-3 text-primary"><strong>17. Bővíthetőség és testreszabás</strong></h3>
            <p class="lead mb-3"><strong>17.1 Egyedi fejlesztések</strong></p>
            <p class="lead mb-3">Az Okm Business lehetőséget biztosít egyedi igények szerinti bővítésre.</p>
            <p class="lead mb-3"><strong>Fejleszthető területek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egyedi workflow-k </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> speciális metaadat mezők </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatizált folyamatok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> integrációk külső rendszerekkel </li>
            </ul>
            <p class="lead mb-3"><strong>Példa:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> pályázati státuszkezelő rendszer kialakítása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egyedi riportok fejlesztése </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> a rendszer pontosan a cég működésére szabható </li>
            </ul>
            <p class="lead mb-3"><strong>17.2 Moduláris bővítés</strong></p>
            <p class="lead mb-3">A rendszer moduláris felépítésének köszönhetően fokozatosan bővíthető.</p>
            <p class="lead mb-3"><strong>Bővíthető területek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumkezelés → CRM funkciókkal </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> alap workflow → komplex automatizmusok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egyszerű struktúra → több szintű rendszer </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nem kell egyszerre mindent bevezetni </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> költséghatékony fejlesztés </li>
            </ul>
            <p class="lead mb-3"><strong>17.3 Céges igényekhez igazítás</strong></p>
            <p class="lead mb-3">Az Okm Business egyik legnagyobb erőssége a testreszabhatóság.</p>
            <p class="lead mb-3"><strong>Testreszabási lehetőségek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mappastruktúra kialakítása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mezők és adatstruktúra </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> workflow logika </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jogosultsági rendszer </li>
            </ul>
            <p class="lead mb-3"><strong>Példa (valós működés):</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfél → pályázat → státusz → dokumentum </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kivitelezés → projekt → szakasz → dokumentum </li>
            </ul>
            <p class="lead mb-3"><strong>17.4 Integráció alapú bővítés</strong></p>
            <p class="lead mb-3">A rendszer könnyen összekapcsolható más megoldásokkal.</p>
            <p class="lead mb-3"><strong>Lehetőségek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> webes rendszerek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> vállalatirányítási rendszerek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatizációs eszközök </li>
            </ul>
            <p class="lead mb-3"><strong>Eredmény:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egy központi adatkezelési rendszer </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatizált működés </li>
            </ul>
            <p class="lead mb-3"><strong>17.5 Folyamatos fejleszthetőség</strong></p>
            <p class="lead mb-3">A rendszer nem statikus, hanem folyamatosan fejleszthető.</p>
            <p class="lead mb-3"><strong>Mit jelent:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> új funkciók hozzáadása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> meglévő folyamatok finomítása </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> új üzleti igények kiszolgálása </li>
            </ul>
            <p class="lead mb-3"><strong>Előny:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hosszú távon is használható </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> nem kell rendszert váltani </li>
            </ul>
            <p class="lead mb-3"><strong>Összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rugalmasan testreszabható </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> modulárisan bővíthető </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> egyedi igényekhez igazítható </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> hosszú távon fejleszthető </li>
            </ul>
            <p class="lead mb-3">Ez biztosítja, hogy a rendszer a vállalkozás növekedésével együtt fejlődjön.</p>
            <h3 class="mt-5 mb-3 text-primary"><strong>18. Összefoglalás</strong></h3>
            <p class="lead mb-3"><strong>18.1 Miért az Okm Business</strong></p>
            <p class="lead mb-3">Az Okm Business egy olyan komplex vállalati rendszer, amely egyesíti:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentumkezelést </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> ügyfélkezelési logikát </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> workflow alapú működést </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatizálást </li>
            </ul>
            <p class="lead mb-3"><strong>Mit ad a cégnek:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> rendet a dokumentumok között </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> átlátható működést </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyorsabb ügyintézést </li>
            </ul>
            <p class="lead mb-3"><strong>18.2 Versenyelőnyök</strong></p>
            <p class="lead mb-3">Az Okm Business használatával a vállalkozás működése jelentősen hatékonyabbá válik.</p>
            <p class="lead mb-3"><strong>Fő előnyök:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyors dokumentumelérés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> strukturált adatkezelés </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> automatizált folyamatok </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> csökkentett hibaarány </li>
            </ul>
            <p class="lead mb-3"><strong>Üzleti hatás:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyorsabb ajánlatadás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> jobb ügyfélkiszolgálás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kevesebb adminisztráció </li>
            </ul>
            <p class="lead mb-3"><strong>18.3 Jövőbeni fejlesztési irányok</strong></p>
            <p class="lead mb-3">Az Okm Business hosszú távon is fejleszthető rendszer.</p>
            <p class="lead mb-3"><strong>Lehetséges irányok:</strong></p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> további automatizálás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mesterséges intelligencia alapú keresés és feldolgozás </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mélyebb integrációk más rendszerekkel </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> mobil használat bővítése </li>
            </ul>
            <p class="lead mb-3"><strong>18.4 Kinek ajánlott</strong></p>
            <p class="lead mb-3">Az Okm Business ideális választás:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kis- és középvállalkozások számára </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> projektekben dolgozó cégeknek </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> dokumentum intenzív működés esetén </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> pályázatokkal foglalkozó vállalkozásoknak </li>
            </ul>
            <p class="lead mb-3"><strong>18.5 Üzleti érték összefoglalva</strong></p>
            <p class="lead mb-3">Az Okm Business bevezetésével a vállalkozás:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> gyorsabbá válik </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> átláthatóbb lesz </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> kevesebb hibával működik </li>
                <li class="list-group-item bg-transparent border-0 py-1"><i class="bi bi-check-circle-fill text-success me-2"></i> könnyebben skálázódik </li>
            </ul>
            <p class="lead mb-3"><strong>Záró gondolat</strong></p>
            <p class="lead mb-3">Az Okm Business nem csupán egy dokumentumkezelő rendszer, hanem egy olyan digitális alap, amely támogatja a vállalkozás teljes működését – az ügyféltől a projekten át a dokumentumok kezeléséig.</p>
            <p class="lead mb-3">Ezáltal a vállalkozás nem csak hatékonyabbá válik, hanem felkészül a további növekedésre és digitalizációra.</p>
        </div>

        <!-- <div class="text-center my-5">
            <a href="https://pikft.hu" class="btn btn-success btn-lg">Kapcsolatfelvétel most</a>
        </div> -->
    </div>

    <!-- FOOTER -->

    @include('layouts.footer')

    <!-- TOP BUTTON  -->

    <button type="button" class="btn btn-outline-primary btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

</body>

</html>