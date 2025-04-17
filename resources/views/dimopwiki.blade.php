<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Paksi Informatika – weboldal, webfejlesztés, webáruház, rendszerüzemeltetés, távmunka, felhős megoldások, pályázati és DIMOP támogatás cégeknek">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIMOP Plusz 1.2.6-24 Pályázati Wiki – PIKFT.HU</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    {{-- <body data-bs-theme="dark"> --}}

    @include('layouts.nav')

    <div class="conteiner px-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="mt-5 px-5 text-center" data-aos="fade-up">
                    <h6 class="display-6 text-body-emphasis lh-2 mb-3">
                        DIMOP Plusz-1.2.6-24 Pályázati Wiki – Érthetően
                    </h6>
                    <p>
                        Ez a dokumentum segítéget nyújt abban, hogy laikusok számára is átlátható legyen a DIMOP
                        Plusz-pályázat egyes célterületeinek tartalma. Funkcionális célterületenként érthető
                        összefoglalót adunk.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-10">

                <h2 class="mt-5">1. Alapszintű felhőalapú szolgáltatások</h2>
                <ul>
                    <li><i class="bi bi-envelope-fill text-primary me-2"></i> <strong>Vállalati email
                            szolgáltatások:</strong> Saját domain alatti profi levelezés.</li>
                    <li><i class="bi bi-file-text-fill text-primary me-2"></i> <strong>Produktivitási és irodai
                            alkalmazások:</strong> Szövegszerkesztés, táblázatok, jegyzetek, távoli munkavégzés.</li>
                    <li><i class="bi bi-cloud-fill text-primary me-2"></i> <strong>Adattárolási szolgáltatások:</strong>
                        Biztonságos fájlmentés és megosztás.</li>
                    <li><i class="bi bi-server text-primary me-2"></i> <strong>Infrastruktúra és
                            kapacitásszolgáltatások:</strong> Webtárhely, adatbázisok bérbeadása.</li>
                </ul>

                <h2 class="mt-5">2. Táv- és csoportmunka támogatása</h2>
                <ul>
                    <li><i class="bi bi-camera-video-fill text-success me-2"></i> <strong>Online
                            videómegbeszélések:</strong> HD videó, hang, naptár integráció.</li>
                    <li><i class="bi bi-kanban-fill text-success me-2"></i> <strong>Projektmenedzsment és
                            kollaboráció:</strong> Feladatkezelés, idővonal, fájlmegosztás.</li>
                    <li><i class="bi bi-chat-dots-fill text-success me-2"></i> <strong>Valós idejű
                            üzenetküldés:</strong> Chat, értesítések, csatornák kezelése.</li>
                </ul>

                <h2 class="mt-5">3. IKT biztonsági intézkedések</h2>
                <ul>
                    <li><i class="bi bi-shield-lock-fill text-danger me-2"></i> Tűzfal</li>
                    <li><i class="bi bi-shield-check text-danger me-2"></i> Antivírus szoftver</li>
                    <li><i class="bi bi-bell-fill text-danger me-2"></i> Behatolásérzékelő rendszer (IDS)</li>
                    <li><i class="bi bi-lock-fill text-danger me-2"></i> Titkosítás</li>
                </ul>

                <h2 class="mt-5">4. Honlapkészítés</h2>
                <ul>
                    <li><i class="bi bi-phone-fill text-info me-2"></i> Reszponzív dizájn</li>
                    <li><i class="bi bi-search text-info me-2"></i> SEO beállítások</li>
                    <li><i class="bi bi-shield-lock-fill text-info me-2"></i> SSL, GDPR megfelelés</li>
                    <li><i class="bi bi-envelope-open-fill text-info me-2"></i> Kapcsolatfelvételi űrlap</li>
                    <li><i class="bi bi-file-earmark-text-fill text-info me-2"></i> Tartalomkezelés (CMS)</li>
                </ul>

                <h2 class="mt-5">5. CRM (Ügyfélkapcsolat-kezelés)</h2>
                <ul>
                    <li><i class="bi bi-bullseye text-warning me-2"></i> Kampánymenedzsment</li>
                    <li><i class="bi bi-briefcase-fill text-warning me-2"></i> Értékesítési folyamatok</li>
                    <li><i class="bi bi-journal-text text-warning me-2"></i> Ügyfélnapló</li>
                    <li><i class="bi bi-bar-chart-fill text-warning me-2"></i> Elemzések, riportok</li>
                    <li><i class="bi bi-lock-fill text-warning me-2"></i> GDPR kompatibilitás</li>
                </ul>

                <h2 class="mt-5">6. ERP (Vállalati erőforrás-tervezés)</h2>
                <ul>
                    <li><i class="bi bi-currency-dollar text-primary me-2"></i> Pénzügy és számvitel</li>
                    <li><i class="bi bi-building-fill text-primary me-2"></i> Gyártás, szolgáltatás</li>
                    <li><i class="bi bi-box-fill text-primary me-2"></i> Készletgazdálkodás</li>
                    <li><i class="bi bi-people-fill text-primary me-2"></i> HR</li>
                    <li><i class="bi bi-arrow-repeat text-primary me-2"></i> Munkafolyamat-automatizálás</li>
                </ul>

                <h2 class="mt-5">7. E-számlázás</h2>
                <ul>
                    <li><i class="bi bi-file-earmark-text-fill text-success me-2"></i> Elektronikus számlák kiállítása
                    </li>
                    <li><i class="bi bi-send-check-fill text-success me-2"></i> Automatikus e-mail küldés</li>
                    <li><i class="bi bi-credit-card-2-back-fill text-success me-2"></i> Bankkártyás fizetés támogatása
                    </li>
                </ul>

                <h2 class="mt-5">8. E-kereskedelem</h2>
                <ul>
                    <li><i class="bi bi-cart-fill text-danger me-2"></i> Webáruház platform</li>
                    <li><i class="bi bi-box-seam text-danger me-2"></i> Készlet- és rendeléskezelés</li>
                    <li><i class="bi bi-bar-chart-line-fill text-danger me-2"></i> Skálázhatóság és API integráció</li>
                    <li><i class="bi bi-megaphone-fill text-danger me-2"></i> Marketing funkciók</li>
                    <li><i class="bi bi-cash-stack text-danger me-2"></i> Fizetés és tranzakciók kezelése</li>
                    <li><i class="bi bi-globe text-danger me-2"></i> Nemzetközi támogatás</li>
                </ul>

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
