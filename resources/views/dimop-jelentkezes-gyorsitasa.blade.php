<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="DIMOP Plusz 1.2.6/B akár 12M Ft, 90% támogatás. Weboldal, webshop UNAS, ERP, CRM, AI és felhő megoldások eszközbeszerzéssel.">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DIMOP Plusz 1.2.6/B pályázat - 12M Ft támogatás webshop, ERP, AI fejlesztésre</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  @include('layouts.gtag')

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">



</head>

<body>

  @include('layouts.nav')


<div class="container py-5">

  <!-- HEADER -->
  <div class="text-center mb-5">
    <div class="mb-3 fs-1 text-success">✓</div>
    <h1 class="fw-bold">Köszönjük {{ session('name') ?: '' }} a jelentkezésed!</h1>
    <p class="text-muted">
      Hamarosan felvesszük veled a kapcsolatot.<br>
      Addig is van még egy fontos teendőd – olvasd el figyelmesen!
    </p>
  </div>

  <!-- IMPORTANT -->
  <div class="alert alert-warning d-flex gap-3 align-items-start mb-4">
    <div class="fs-4">👉</div>
    <div>
      <strong>Van még egy fontos teendőd!</strong>
      <div>
        A pályázati folyamat elindításához regisztrálnod kell a hivatalos portálra,
        és ki kell töltened a digitális érettségi felmérőt.
      </div>
    </div>
  </div>

  <!-- STEP 1 -->
  <div class="card mb-3 shadow-sm">
    <div class="card-body">
      <div class="d-flex align-items-center mb-3">
        <span class="badge bg-primary rounded-circle me-3">1</span>
        <h5 class="mb-0 fw-bold">Regisztrálj be a pályázati felületre</h5>
      </div>

      <p class="text-muted">
        Regisztrálj a hivatalos pályázati portálra a gyorsabb ügyintézés érdekében.
      </p>

      <a href="https://kkvdigital.dkf.hu" target="_blank" class="btn btn-primary">
        Megnyitom a portált →
      </a>
    </div>
  </div>

  <!-- STEP 2 -->
  <div class="card mb-3 shadow-sm">
    <div class="card-body">
      <div class="d-flex align-items-center mb-3">
        <span class="badge bg-primary rounded-circle me-3">2</span>
        <h5 class="mb-0 fw-bold">Töltsd ki a digitális érettségi felmérőt</h5>
      </div>

      <p class="text-muted">
        A regisztráció után töltsd ki a felmérőt.
        <strong>5 pont alatt kell maradni</strong>.
      </p>
    </div>
  </div>

  <!-- WARNING -->
  <div class="alert alert-warning mb-4">
    <h6 class="fw-bold">⚠️ Fontos: a felmérőt körültekintően töltsd ki!</h6>

    <p class="text-muted">
      A kérdések a vállalkozásod tényleges digitális helyzetére vonatkoznak.
    </p>

    <ul class="mb-0">
      <li>Ha nincs céges internet → akkor nincs internet</li>
      <li>Ha nem céges mobilnet → nincs céges hozzáférés</li>
      <li>Ha nincs Teams/Meet → nincs online meeting</li>
    </ul>
  </div>

  <!-- STEP 3 -->
  <div class="card mb-3 shadow-sm">
    <div class="card-body">
      <div class="d-flex align-items-center mb-3">
        <span class="badge bg-primary rounded-circle me-3">3</span>
        <h5 class="mb-0 fw-bold">Küldd el nekünk az eredményt</h5>
      </div>

      <p class="text-muted">
        Cégszerűen aláírva Küldd el a felmérés eredményét az alábbi e-mail címre:
      </p>

      <a href="mailto:dimop@pikft.hu" class="fw-bold">
        dimop@pikft.hu
      </a>
    </div>
  </div>

  <!-- HELP -->
  <div class="text-center p-4 bg-light rounded">
    <p class="text-muted mb-1">Elakadtál? Segítünk.</p>
    <a href="mailto:dimop@pikft.hu" class="fw-bold fs-5">
      dimop@pikft.hu
    </a>
  </div>


  <input 
  type="text" 
  name="company" 
  class="form-control"
  value="{{ old('company', session('company')) }}"
>

</div>

</body>

</html>