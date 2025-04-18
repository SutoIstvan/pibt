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


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <div class="mt-5 text-center" data-aos="fade-up">
                    <h6 class="display-6 text-body-emphasis lh-2 mb-3">
                        DIMOP Plusz-pályázati lehetőségek vállalkozásoknak
                    </h6>
                    <p>
                        A PIKFT.HU csapata segít eligazodni a DIMOP Plusz-pályázat digitális világában. Weboldalunkon érthetően,
                        célzottan mutatjuk be, hogy miként tudja vállalkozása kihasználni a támogatást modern digitális
                        fejlesztésekre.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <div class="mt-5 text-center" data-aos="fade-up">
                    <img src="{{ asset('4d989ac8-9d44-4e1a-80c7-2f4dbfda3507.jpg') }}" class="img-fluid" style="max-height: 400px" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="container col-12 col-md-10">

        <div class="">
            <div class="row">
                <div class="col-12 col-md-6 mt-5  " data-aos="fade-up">
                    <h2>Kiknek szól?</h2>

                    <ul>
                        <li>Kis- és középvállalkozásoknak, akik:</li>
                        <ul>
                            <li>szeretnének hatékonyabban dolgozni digitális eszközökkel,</li>
                            <li>modern webes jelenlétet építenének,</li>
                            <li>automatizálnák az adminisztrációt,</li>
                            <li>javítanák az ügyfélélményt.</li>
                        </ul>
                    </ul>
                </div>

                <div class="col-12 col-md-6 mt-5  " data-aos="fade-up">
                    <h2>Miért a PIKFT?</h2>
                    <ul>
                        <li>Tapasztalatunk van a pályázati célterületeken való fejlesztésben.</li>
                        <li>Segítünk eligazodni a feltételek és lehetőségek között.</li>
                        <li>Ajánlunk konkrét megoldásokat: szoftvereket, szolgáltatásokat.</li>
                        <li>Projektkivitelezésben és adminisztrációban is segítünk.</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="mt-5 text-center" data-aos="fade-up">
                        <h6 class="display-6 text-body-emphasis lh-2 mb-3">
                            DIMOP Plusz Pályázati Kisokos – Érthetően
                        </h6>
                        <p>
                            Ez a dokumentum segítséget nyújt abban, hogy átlátható legyen a DIMOP Plusz-pályázat egyes
                            célterületeinek tartalma. Itt funkcionális célterületenként összegyűjtjük, mit jelentenek az
                            egyes részterületek, és milyen eszközökre vagy szolgáltatásokra van szükség a pályázathoz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
    
                    <!-- IDE fog kerülni a DOCX-ből származó teljes tartalom, HTML-re formázva -->
                    <h2 class="mt-5">1. Alapszintű felhőalapú szolgáltatások</h2>
                    <ul>
                        <li><strong>Cél:</strong> A vállalkozás mindennapi működéséhez szükséges digitális
                            alapinfrastruktúra biztosítása, költséghatékony módon, felhőalapú megoldásokkal.</li>
                        <li><i class="bi bi-envelope-fill text-primary me-2"></i> <strong>Vállalati email
                                szolgáltatások:</strong><br> A vállalati e-mail szolgáltatás azt jelenti, hogy a cég saját
                            domain név alatt (pl. info@cegem.hu) hoz létre e-mail fiókokat a munkatársak számára. Ez sokkal
                            professzionálisabb benyomást kelt, mint az ingyenes Gmail vagy Freemail címek, és lehetővé teszi
                            az egységes céges kommunikációt. Emellett általában együtt jár naptármegosztással,
                            kontaktlistákkal, biztonságos hozzáféréssel és levelezési archívummal.</li>
                        <li><i class="bi bi-file-text-fill text-primary me-2"></i> <strong>Produktivitási és irodai
                                alkalmazások:</strong><br> Ezek olyan digitális eszközök, amelyeket a mindennapi irodai
                            munkában használunk. Ide tartozik a szövegszerkesztés (pl. szerződések, levelek írása),
                            táblázatkezelés (pl. árlisták, kimutatások), prezentációkészítés (pl. ügyfélbemutatók),
                            jegyzetelés és közös dokumentumszerkesztés. Felhőalapú működés esetén ezek az eszközök több
                            felhasználó által egyszerre is használhatók, akár távolról is.</li>
                        <li><i class="bi bi-cloud-fill text-primary me-2"></i> <strong>Adattárolási szolgáltatások:</strong>
                            Az adattárolási szolgáltatás azt jelenti, hogy a cég biztonságosan tárolja digitális fájljait
                            (dokumentumok, képek, szerződések stb.) az interneten keresztül elérhető tárhelyen. Ez
                            biztosítja, hogy az adatok bármikor, bárhonnan elérhetők legyenek, és akkor se vesszenek el, ha
                            például tönkremegy egy számítógép. Lehetőséget ad a fájlok megosztására, verziókövetésre,
                            biztonsági mentésekre is.</li>
                        <li><i class="bi bi-server text-primary me-2"></i> <strong>Infrastruktúra és
                                kapacitásszolgáltatások:</strong> Ez a rész olyan szolgáltatásokat takar, ahol nem kell
                            saját szervert vásárolni és üzemeltetni – helyette bérbe vehetjük ezeket a szolgáltatóktól. Ez
                            magában foglalja például a weboldal üzemeltetését, adatbázisokat, háttéralkalmazásokat, amelyek
                            nagy teljesítményt vagy megbízható működést igényelnek. Az előny: rugalmasan bővíthető, nem kell
                            informatikus hozzá, és a költségek is kiszámíthatók.</li>
                    </ul>
    
                    <h2 class="mt-5">2. Táv- és csoportmunka támogatása</h2>
                    <p><strong>Cél:</strong> Csapatmunka és távoli munkavégzés támogatása modern, felhőalapú eszközökkel.
                    </p>
                    <ul>
                        <li><i class="bi bi-camera-video-fill text-success me-2"></i> <strong>Online
                                videómegbeszélések:</strong><br>
                            <strong>HD videó és hanghívás:</strong><br>
                            Lehetővé teszi, hogy a csapat tagjai egymást látva és hallva kommunikáljanak, mintha egy
                            irodában ülnének. Ideális heti státuszmegbeszélésekhez vagy ügyféltalálkozókhoz.<br>
                            <strong>Képernyőmegosztás:</strong><br> egy kolléga megmutathatja a saját képernyőjét a
                            többieknek, például egy prezentációt vagy Excel táblát.<br>
                            <strong>Naptár integráció: </strong><br>az időpontok egyszerűen beilleszthetők a Google vagy
                            Outlook naptárba, és automatikusan emlékeztetőt küldenek.
                        </li>
                        <li><i class="bi bi-kanban-fill text-success me-2"></i> <strong>Projektmenedzsment és
                                kollaboráció:</strong><br>
                            <strong>Feladatkezelés:</strong><br>
                            Minden projekt külön feladatokra bontható, amelyeket munkatársakhoz lehet rendelni,
                            határidővel.<br>
                            <strong>Naptár és idővonal: </strong><br>a projektek ütemezése vizuálisan is követhető, segít
                            megérteni, ki mit mikorra végez el.<br>
                            <strong>Fájlmegosztás: </strong><br>a projekthez kapcsolódó dokumentumokat (pl. ajánlat,
                            tervrajz) fel lehet tölteni, és mindenki hozzáférhet.<br>
                            <strong>Státuszjelzés:</strong><br> minden feladathoz hozzárendelhető egy állapot (pl.
                            „folyamatban”, „készen van”, „várakozik”), így átlátható a haladás.
                        </li>
                        <li><i class="bi bi-chat-dots-fill text-success me-2"></i> <strong>Valós idejű
                                üzenetküldés:</strong><br>
                            <strong>Chat: </strong><br>
                            Egyszerű, gyors szöveges üzenetek küldése munkatársaknak vagy csoportoknak (pl. „megbeszélés
                            kezdődik!”).<br>
                            <strong>Csatornák:</strong><br> külön témákhoz, projektekhez létrehozhatóak külön szobák (pl.
                            #marketing, #webfejlesztés), ahol csak az érintettek kommunikálnak.<br>
                            <strong>Fájlmegosztás:</strong><br> képek, PDF-ek, dokumentumok azonnal megoszthatók a
                            beszélgetés során.<br>
                            <strong>Értesítések:</strong><br> ha valaki megemlít egy kollégát, automatikus értesítést kap,
                            hogy ne maradjon le fontos üzenetről.
                        </li>
                    </ul>
    
                    <h2 class="mt-5">3. IKT biztonsági intézkedések</h2>
                    <p><strong>Cél:</strong> A vállalkozás rendszereinek és adatainak védelme a digitális fenyegetésektől.
                    </p>
                    <p>Ez a célterület arról szól, hogyan tudjuk megvédeni cégünk számítógépes rendszereit és adatait a
                        külső és belső veszélyektől, például hackerektől, vírusoktól, adatlopástól. Olyan, mintha zárakat,
                        riasztókat és kamerákat szerelnénk fel az irodánkra – csak itt digitálisan.</p>
                    <p><strong>Kötelező elemek:</strong></p>
                    <ul>
                        <li><i class="bi bi-shield-lock-fill text-danger me-2"></i> <strong>Tűzfal</strong><br>
                            A tűzfal olyan, mint egy őr a számítógépes hálózat kapujában. Eldönti, milyen adatforgalmat
                            enged be és ki. Megakadályozza, hogy illetéktelen személyek hozzáférjenek a vállalati
                            hálózathoz.
                        </li>
                        <li><i class="bi bi-shield-check text-danger me-2"></i> <strong>Antivírus szoftver</strong><br>
                            Ez védi a számítógépeket és laptopokat a vírusok, kémprogramok és más kártékony szoftverek
                            ellen. Folyamatosan ellenőrzi a rendszerünket, és azonnal jelzi, ha valami gyanúsat talál.
                        </li>
                        <li><i class="bi bi-bell-fill text-danger me-2"></i> <strong>Behatolásérzékelő rendszer
                                (IDS)</strong><br>
                            Ez a rendszer figyeli a hálózati forgalmat és azonnal riaszt, ha szokatlan vagy gyanús
                            tevékenységet észlel. Például ha valaki sokszor próbál belépni hibás jelszóval, vagy szokatlan
                            adatmozgás történik.
                        </li>
                        <li><i class="bi bi-lock-fill text-danger me-2"></i> <strong>Titkosítás</strong><br>
                            A titkosítás gondoskodik arról, hogy az adatainkat csak az láthassa, akinek valóban szabad. Ez
                            lehet fájltitkosítás, e-mailek titkosítása vagy akár weboldalak biztonságos elérése (https://).
                        </li>
                    </ul>
    
                    <h2 class="mt-5">4. Internetes megjelenést biztosító honlapok</h2>
                    <p><strong>Cél:</strong> Professzionális, biztonságos és felhasználóbarát vállalati weboldal készítése.
                    </p>
                    <p>Ez a célterület azt jelenti, hogy a vállalkozásnak legyen saját, korszerű, könnyen használható
                        honlapja, amely jól mutat mobilon is, gyorsan betölt, biztonságos, és az érdeklődők könnyen
                        kapcsolatba tudnak lépni a céggel.</p>
                    <p><strong>Kötelező funkciók:</strong></p>
                    <ul>
                        <li><i class="bi bi-phone-fill text-info me-2"></i> <strong>Reszponzív dizájn</strong><br>
                            A weboldal automatikusan alkalmazkodik a képernyő méretéhez – tehát jól olvasható és használható
                            telefonon, tableten és számítógépen is. Nem kell külön mobilos verzió, minden eszközön
                            tökéletesen működik.
                        </li>
                        <li><i class="bi bi-search text-info me-2"></i> <strong>SEO beállítások</strong><br>
                            A SEO (keresőoptimalizálás) segítségével a weboldal könnyebben megtalálható lesz a Google
                            keresőben. Ha valaki rákeres például a „villanyszerelő Pécs” kifejezésre, akkor egy jól
                            beállított weboldal előrébb jelenik meg a találatok között.
                        </li>
                        <li><i class="bi bi-shield-lock-fill text-info me-2"></i> <strong>Adatvédelmi megfelelés (SSL,
                                GDPR)</strong><br>
                            A weboldalnak biztonságos kapcsolatot kell biztosítania (https:// – lakat ikon a böngészőben),
                            és meg kell felelnie az adatvédelmi előírásoknak. Például ha van kapcsolatfelvételi űrlap, akkor
                            annak kezelése szabályozott kell legyen (GDPR), és erről tájékoztatni kell a látogatót.
                        </li>
                        <li><i class="bi bi-envelope-open-fill text-info me-2"></i> <strong>Kapcsolatfelvételi
                                űrlap</strong><br>
                            Az érdeklődők egyszerűen tudnak üzenetet küldeni a vállalkozásnak a weboldalon keresztül. Nem
                            kell e-mail címet másolni, csak kitöltenek egy mezőt névvel, e-mail címmel és üzenettel, és az
                            rögtön megérkezik a céghez.
                        </li>
                        <li><i class="bi bi-file-earmark-text-fill text-info me-2"></i> <strong>Tartalomkezelés
                                (CMS)</strong><br>
                            A tartalomkezelő rendszer (CMS) lehetővé teszi, hogy a cég saját maga is tudjon frissíteni a
                            weboldalon: pl. új szöveget, képeket, árakat feltölteni. Ehhez nem kell informatikus.
                        </li>
                    </ul>
    
                    <h2 class="mt-5">5. Ügyfélkapcsolat-kezelés (CRM)</h2>
                    <p><strong>Cél:</strong> Az ügyfelekkel való kapcsolattartás és értékesítés nyomon követése.</p>
                    <p>A CRM egy olyan digitális eszköz, amely segít abban, hogy minden ügyfélről és érdeklődőről átlátható
                        és rendszerezett információink legyenek. Olyan, mint egy digitális napló, amelyben minden
                        beszélgetés, ajánlat, visszajelzés rögzítésre kerül. Ezzel időt spórolunk, semmi nem merül
                        feledésbe, és minden ügyfél úgy érzi, hogy figyelmet kap.</p>
                    <p><strong>Kötelező funkciók:</strong></p>
                    <ul>
                        <li><i class="bi bi-bullseye text-warning me-2"></i> <strong>Kampánymenedzsment</strong><br>
                            Segítségével célzott e-mail vagy telefonos kampányokat tudunk indítani – például, ha új akciónk
                            van, vagy egy régi vevőt szeretnénk visszacsábítani. Kiválaszthatjuk, kik kapják az üzenetet, és
                            vissza tudjuk nézni, hogy ki nyitotta meg vagy reagált rá.
                        </li>
                        <li><i class="bi bi-briefcase-fill text-warning me-2"></i> <strong>Értékesítési folyamat
                                támogatása</strong><br>
                            Lépésről lépésre nyomon tudjuk követni, hogyan haladunk egy ajánlattól egészen a megrendelésig.
                            Például: érdeklődő → ajánlatkérés → ajánlatküldés → rendelés → számla. Így minden ügylet
                            átlátható, és senkit nem felejtünk el visszahívni vagy újra megkeresni.
                        </li>
                        <li><i class="bi bi-journal-text text-warning me-2"></i> <strong>Ügyfélnapló,
                                reklamációkezelés</strong><br>
                            Minden egyes ügyfélhez hozzá tudunk írni megjegyzéseket, visszahívási időpontokat, előzményeket.
                            Ha egy ügyfél reklamál, azt is rögzíthetjük, nyomon követhetjük, ki foglalkozott vele, és hogyan
                            oldódott meg a probléma.
                        </li>
                        <li><i class="bi bi-bar-chart-fill text-warning me-2"></i> <strong>Elemzések, riportok</strong><br>
                            A rendszer statisztikákat is készít: mennyi ajánlatot adtunk, mennyi megrendelés lett belőle,
                            melyik kampány volt sikeres. Így könnyebben lehet döntéseket hozni: mibe érdemes energiát
                            fektetni, mit lehet javítani.
                        </li>
                        <li><i class="bi bi-lock-fill text-warning me-2"></i> <strong>GDPR-kompatibilis
                                adatvédelem</strong><br>
                            A rendszer gondoskodik róla, hogy az ügyfelek adatait biztonságosan, az adatvédelmi előírásoknak
                            (GDPR) megfelelően kezeljük. Például: csak azok férnek hozzá, akiknek van jogosultságuk, és az
                            adatokat nem lehet engedély nélkül másolni vagy továbbítani.
                        </li>
                    </ul>
    
                    <h2 class="mt-5">6. Vállalati erőforrás-tervezés (ERP)</h2>
                    <p><strong>Cél:</strong> A teljes vállalati működés egy rendszerben kezelése.</p>
                    <p>Az ERP egy olyan átfogó szoftverrendszer, amely segít egy vállalkozás összes fő tevékenységét –
                        például számlázás, raktározás, emberi erőforrások, gyártás vagy adminisztráció – egy helyen
                        átláthatóan kezelni. Olyan ez, mint egy vezérlőpult, ahol minden adat, teendő és döntésalap
                        világosan megjelenik. Nem kell több külön programot használni minden részfeladatra – mindent egy
                        rendszer lát el.</p>
                    <ul>
                        <li><i class="bi bi-currency-dollar text-primary me-2"></i> <strong>Pénzügy és
                                számvitel</strong><br>
                            A számlák kiállítása, nyilvántartása, könyvelési adatok rögzítése és kimutatások készítése mind
                            ebben a modulban történik. Nem kell Excel táblákat töltögetni – a rendszer automatikusan
                            összesíti a bevételeket, költségeket, és segít a pénzügyi tervezésben.
                        </li>
                        <li><i class="bi bi-building-fill text-primary me-2"></i> <strong>Gyártás,
                                szolgáltatásirányítás</strong><br>
                            Ez a rész akkor hasznos, ha a cég gyárt valamit, vagy sokféle szolgáltatást végez. Segít
                            követni, hogy miből mennyi készült, milyen anyagokra van szükség, és mik a határidők. Például:
                            mikor indul egy új gyártási folyamat, miből mennyi fogyott el, mi van készleten.
                        </li>
                        <li><i class="bi bi-box-fill text-primary me-2"></i> <strong>Beszerzés és
                                készletgazdálkodás</strong><br>
                            Segít abban, hogy mindig tudjuk, miből mennyi van raktáron, mit kell rendelni, mikor járt le
                            valami. Kezeli a beszállítói rendeléseket is – például ha egy termék kifogyott, a rendszer
                            jelzi, és akár automatikusan rendel is.
                        </li>
                        <li><i class="bi bi-people-fill text-primary me-2"></i> <strong>HR (emberi erőforrások)</strong><br>
                            A dolgozók adatait, beosztásait, jelenléteit, szabadságait, juttatásait (pl. cafeteria) lehet
                            ebben vezetni. Megkönnyíti a bérszámfejtést és az adminisztrációt.
                        </li>
                        <li><i class="bi bi-arrow-repeat text-primary me-2"></i> <strong>Munkafolyamat-irányítás
                                (workflow)</strong><br>
                            Ez a rész automatizálja a cég működését. Például ha beérkezik egy megrendelés, akkor a rendszer
                            automatikusan létrehozhatja a szállítólevelet, értesíti a raktárt, és kiállítja a számlát –
                            emberi beavatkozás nélkül.
                        </li>
                        <li><i class="bi bi-file-earmark-text-fill text-primary me-2"></i> <strong>Elektronikus
                                iratkezelés</strong><br>
                            A fontos dokumentumokat (pl. szerződések, árajánlatok) elektronikusan tárolja és rendszerezi.
                            Így bármikor könnyen visszakereshetők, nem vesznek el, és mindig a legfrissebb változat van
                            kéznél.
                        </li>
                        <li><i class="bi bi-bar-chart-line-fill text-primary me-2"></i> <strong>Kontrolling,
                                riportok</strong><br>
                            A rendszer elemzéseket és kimutatásokat készít – például melyik termék hozta a legtöbb bevételt,
                            hol lehetne csökkenteni a költségeket. Ez segíti a vezetőket a jobb döntések meghozatalában.
                        </li>
                    </ul>
    
                    <h2 class="mt-5">7. Elektronikus számlázás</h2>
                    <p><strong>Cél:</strong> A vállalkozás pénzügyi működésének digitalizálása és automatizálása.</p>
                    <p>Az e-számlázás segítségével a cégek papírmentesen, gyorsan és hatékonyan tudják kiállítani és kezelni
                        a számláikat. Ez nemcsak környezetbarát, hanem költséghatékony is, és nagyban megkönnyíti a
                        könyvelők dolgát is.</p>
                    <p><strong>Kötelező funkciók:</strong></p>
                    <ul>
                        <li><i class="bi bi-file-earmark-text-fill text-success me-2"></i> <strong>Elektronikus számlák
                                kiállítása</strong><br>
                            A számlák digitális formában készülnek el, és megfelelnek a NAV előírásainak. Ez azt jelenti,
                            hogy tartalmazzák az előírt adatokat, hitelesek és nem módosíthatók utólag. A rendszer azonnal
                            generálja a számlát, nincs szükség kézi kitöltésre vagy nyomtatásra.
                        </li>
                        <li><i class="bi bi-send-check-fill text-success me-2"></i> <strong>Automatikus e-mail
                                küldés</strong><br>
                            A kiállított számlákat a rendszer automatikusan elküldi a vevő e-mail címére PDF formátumban. Ez
                            gyorsítja a kommunikációt, és nincs szükség külön e-mailek írására.
                        </li>
                        <li><i class="bi bi-credit-card-2-back-fill text-success me-2"></i> <strong>Bankkártyás fizetés
                                támogatása</strong><br>
                            A számlákhoz fizetési link is csatolható, amelyen keresztül az ügyfél online bankkártyával (pl.
                            SimplePay, Barion) fizethet. Ez gyorsabbá és egyszerűbbé teszi a fizetést, és csökkenti a
                            késedelmes befizetések számát.
                        </li>
                    </ul>
    
                    <h2 class="mt-5">8. E-kereskedelem</h2>
                    <p><strong>Cél:</strong> Online értékesítési lehetőségek kialakítása, webáruház indítása.</p>
                    <p>Az e-kereskedelem lehetővé teszi, hogy a vállalkozás termékeit vagy szolgáltatásait az interneten
                        keresztül értékesítse. A cél egy olyan webáruház létrehozása, amely nemcsak esztétikus, de jól
                        használható, és teljes körűen kezeli a megrendeléseket, fizetéseket, készletet, ügyfélkapcsolatokat
                        és marketinget.</p>
                    <ul>
                        <li><i class="bi bi-cart-fill text-danger me-2"></i> <strong>Webáruház platform</strong><br>
                            Egy könnyen kezelhető felület, ahol a vásárlók megtekinthetik a termékeket, kosárba helyezhetik,
                            majd megrendelhetik őket. A webáruháznak mobilról és számítógépről is gyorsan kell működnie.
                        </li>
                        <li><i class="bi bi-box-seam text-danger me-2"></i> <strong>Készlet- és rendeléskezelés</strong><br>
                            A rendszer automatikusan nyomon követi, hogy mi van készleten, és mi fogyott el. A megrendelések
                            beérkezésekor értesítést küld, csökkenti a készletet, és előkészíti a számlát vagy
                            szállítólevelet.
                        </li>
                        <li><i class="bi bi-bar-chart-line-fill text-danger me-2"></i> <strong>Skálázhatóság és API
                                integráció</strong><br>
                            A webáruház könnyen bővíthető új funkciókkal (pl. új fizetési mód), és összeköthető más
                            rendszerekkel (pl. számlázó, raktár, könyvelő program), hogy minden automatizált legyen.
                        </li>
                        <li><i class="bi bi-megaphone-fill text-danger me-2"></i> <strong>Marketing funkciók</strong><br>
                            Hírlevelek, kuponkódok, visszatérő vásárlók kedvezményei, Google keresőoptimalizálás (SEO),
                            remarketing lehetőségek – ezek segítenek több vásárlót bevonzani.
                        </li>
                        <li><i class="bi bi-cash-stack text-danger me-2"></i> <strong>Fizetés és tranzakciók
                                kezelése</strong><br>
                            Támogatja a bankkártyás, utánvétes, átutalásos és akár PayPal-os fizetési lehetőségeket is.
                            Minden tranzakció nyomon követhető, és a rendszer automatikusan jelzi a befizetéseket.
                        </li>
                        <li><i class="bi bi-globe text-danger me-2"></i> <strong>Nemzetközi támogatás</strong><br>
                            A webáruház több nyelven és több pénznemben is működhet, lehetőséget adva külföldi
                            értékesítésre. A szállítási díjak és opciók is külön országokra szabhatók.
                        </li>
                    </ul>
    
                </div>
            </div>
        </div>

 

        <h2 class="mt-5">Szeretne pályázni, de nem tudja hol kezdje?</h2>
        <p>Keressen minket bizalommal! Segítünk a célterületek kiválasztásában, az árajánlatok összeállításában és a
            projekt megvalósításában.</p>

        <div class="text-center my-4">
            <a href="https://pikft.hu/#contact-form" class="btn btn-success">Kapcsolatfelvétel most</a>
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
