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

<style>
  :root {
    --navy:   #0f2447;
    --navy2:  #1a3560;
    --blue:   #2563eb;
    --green:  #059669;
    --orange: #d97706;
    --red:    #dc2626;
    --bg:     #f8fafc;
    --white:  #ffffff;
    --border: #e2e8f0;
    --border2:#cbd5e1;
    --text:   #1e293b;
    --text2:  #334155;
    --muted:  #64748b;
    --subtle: #94a3b8;
    --r: 10px;
    --sh: 0 1px 3px rgba(0,0,0,.07), 0 4px 14px rgba(0,0,0,.05);
  }
  *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
  body{font-family:'Inter',sans-serif;background:var(--bg);color:var(--text);font-size:14px;line-height:1.55}

  /* NAV */
  .nav{background:var(--navy);height:62px;display:flex;align-items:center;padding:0 1.75rem;gap:1.5rem}
  .nav-logo{font-weight:800;font-size:1rem;color:#fff;text-decoration:none}
  .nav-logo span{color:#67e8f9}
  .nav-links{margin-left:auto;display:flex;gap:.15rem}
  .nav-links a{font-size:.8rem;font-weight:500;color:rgba(255,255,255,.65);text-decoration:none;padding:.3rem .7rem;border-radius:5px;transition:.15s}
  .nav-links a:hover,.nav-links a.on{color:#fff;background:rgba(255,255,255,.1)}

  /* HERO */
  .hero{background:linear-gradient(135deg,var(--navy) 0%,var(--navy2) 55%,#1d4ed8 100%);padding:3rem 2rem 2.75rem;text-align:center;position:relative;overflow:hidden}
  .hero::after{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23fff' fill-opacity='.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/svg%3E");pointer-events:none}
  .hero-chip{position:relative;display:inline-flex;align-items:center;background:rgba(6,182,212,.14);border:1px solid rgba(6,182,212,.32);color:#67e8f9;font-size:.7rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:.28rem .85rem;border-radius:20px;margin-bottom:1.1rem}
  .hero h1{position:relative;font-size:clamp(1.5rem,3.8vw,2.3rem);font-weight:800;color:#fff;letter-spacing:-.02em;line-height:1.2;margin-bottom:.65rem}
  .hero h1 em{font-style:normal;color:#93c5fd}
  .hero p{position:relative;color:rgba(255,255,255,.72);font-size:.9rem;max-width:520px;margin:0 auto}

  /* WRAPPER */
  .wrap{max-width:1200px;margin:0 auto;padding:2.25rem 1.25rem 5rem}

  /* CTRL BAR */
  .ctrl{background:var(--white);border:1px solid var(--border);border-radius:var(--r);padding:.9rem 1.3rem;display:flex;align-items:center;gap:.9rem;margin-bottom:2rem;box-shadow:var(--sh);flex-wrap:wrap}
  .ctrl-lbl{font-size:.75rem;font-weight:700;color:var(--muted);letter-spacing:.06em;text-transform:uppercase;white-space:nowrap}
  .seg{display:inline-flex;border:1px solid var(--border2);border-radius:6px;overflow:hidden;background:var(--bg)}
  .seg button{font-family:'Inter',sans-serif;font-size:.8rem;font-weight:600;padding:.38rem .95rem;border:none;background:transparent;color:var(--muted);cursor:pointer;transition:.15s}
  .seg button.on{background:var(--navy);color:#fff}

  /* SECTION */
  .sec{margin-bottom:2.25rem}
  .sec-hd{display:flex;align-items:center;gap:.75rem;margin-bottom:.9rem;padding-bottom:.7rem;border-bottom:2px solid var(--navy)}
  .sec-ico{width:36px;height:36px;background:var(--navy);color:#fff;border-radius:7px;display:flex;align-items:center;justify-content:center;font-size:.95rem;flex-shrink:0}
  .sec-title{font-size:.95rem;font-weight:700;color:var(--navy)}
  .sec-sub{font-size:.72rem;color:var(--muted);margin-top:.08rem}

  /* TABLE */
  .tbl-box{background:var(--white);border:1px solid var(--border);border-radius:var(--r);box-shadow:var(--sh)}
  table{width:100%;border-collapse:collapse}
  thead th{background:#f1f5f9;font-size:.68rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:var(--muted);padding:.65rem .75rem;text-align:left;border-bottom:1px solid var(--border);white-space:nowrap}
  thead th.r{text-align:right}
  thead th.c{text-align:center}
  tbody tr{border-bottom:1px solid #f1f5f9;transition:background .1s}
  tbody tr:last-child{border-bottom:none}
  tbody tr:hover{background:#f8fafc}
  td{padding:.6rem .75rem;vertical-align:middle;font-size:.835rem}

  td.num-cell{font-weight:700;color:var(--navy);font-size:.75rem;white-space:nowrap;width:28px}
  td.name-cell{font-weight:500;color:var(--text2)}
  td.spec-cell{color:var(--muted);font-size:.75rem;line-height:1.35;width:30%}
  td.elv-cell{color:var(--muted);font-size:.72rem;line-height:1.3}
  td.unit-cell{color:var(--subtle);font-size:.75rem;white-space:nowrap;text-align:center;width:90px}
  td.ar-cell{text-align:right;color:var(--text2);font-variant-numeric:tabular-nums;white-space:nowrap;width:120px}
  td.qc{text-align:center;width:100px}
  td.sum-cell{text-align:right;font-weight:600;font-variant-numeric:tabular-nums;white-space:nowrap;width:120px}

  /* group rows */
  tr.grp td{background:linear-gradient(90deg,rgba(15,36,71,.06),transparent 80%);padding:.45rem .75rem;border-top:1px solid var(--border);border-bottom:1px solid #e0e8f4}
  .grp-lbl{font-size:.71rem;font-weight:700;color:var(--navy);letter-spacing:.04em;text-transform:uppercase;white-space:normal}
  .grp-sum{text-align:right;font-size:.75rem;font-weight:700;color:var(--navy2)}

  /* qty input */
  .qty-wrap{display:inline-flex;align-items:center;border:1px solid var(--border2);border-radius:5px;background:var(--bg);overflow:hidden;transition:.15s}
  .qty-wrap:focus-within{border-color:var(--blue);box-shadow:0 0 0 3px rgba(37,99,235,.14)}
  .qi{width:36px;border:none;background:transparent;font-family:'Inter',sans-serif;font-size:.835rem;font-weight:600;color:var(--text);text-align:center;padding:.28rem 0;-moz-appearance:textfield}
  .qi::-webkit-inner-spin-button,.qi::-webkit-outer-spin-button{-webkit-appearance:none}
  .qi:focus{outline:none}
  .qty-btn{background:transparent;border:none;width:24px;display:flex;align-items:center;justify-content:center;cursor:pointer;color:var(--text2);font-size:1.1rem;font-weight:500;padding:0;outline:none}
  .qty-btn:hover{background:#e2e8f0;color:var(--navy)}

  /* badges */
  .bdg{display:inline-block;font-size:.6rem;font-weight:700;padding:.1rem .3rem;border-radius:3px;margin-left:.25rem;vertical-align:middle}
  .bdg-req{background:#fee2e2;color:#b91c1c}
  .bdg-opt{background:#fef3c7;color:#92400e}
  .bdg-most{color:#b91c1c;font-size: 11px;margin-bottom: 2px;}
  .bdg-help{color:#94a3b8;font-size:10px;font-weight: 500;}
  .pos{color:var(--green)}
  .dash{color:var(--subtle)}

  /* SUMMARY CARDS */
  .cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:.9rem;margin-top:2rem}
  .card{background:var(--white);border:1px solid var(--border);border-radius:var(--r);padding:1.15rem 1.3rem;box-shadow:var(--sh);position:relative;overflow:hidden}
  .card::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;border-radius:4px 4px 0 0}
  .card.cn::before{background:var(--navy)}
  .card.cb::before{background:var(--blue)}
  .card.cg::before{background:var(--green)}
  .card.co::before{background:var(--orange)}
  .c-lbl{font-size:.69rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--muted);margin-bottom:.35rem;margin-top:.05rem}
  .c-val{font-size:1.35rem;font-weight:800;color:var(--navy);font-variant-numeric:tabular-nums;letter-spacing:-.02em}
  .c-hint{font-size:.69rem;color:var(--subtle);margin-top:.2rem}

  /* LIMITS */
  .limits{background:var(--white);border:1px solid var(--border);border-radius:var(--r);padding:1.4rem;margin-top:1.25rem;box-shadow:var(--sh)}
  .lim-hd{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--navy);margin-bottom:1.1rem;padding-bottom:.55rem;border-bottom:1px solid var(--border)}
  .lim-row{display:flex;align-items:center;gap:.9rem;margin-bottom:.8rem}
  .lim-row:last-child{margin-bottom:0}
  .lim-lbl{font-size:.76rem;color:var(--text2);width:230px;flex-shrink:0;line-height:1.3}
  .lim-lbl small{color:var(--subtle)}
  .track{flex:1;height:7px;background:#e2e8f0;border-radius:4px;overflow:hidden}
  .fill{height:100%;border-radius:4px;background:var(--navy);transition:width .3s ease}
  .fill.warn{background:var(--orange)}
  .fill.over{background:var(--red)}
  .lim-pct{font-size:.75rem;font-weight:700;width:44px;text-align:right;color:var(--muted)}
  .lim-pct.warn{color:var(--orange)}
  .lim-pct.over{color:var(--red)}
  .alert{display:none;margin-top:.9rem;padding:.8rem 1rem;border-radius:7px;font-size:.79rem;font-weight:500;border-left:4px solid}
  .alert.ok{background:#f0fdf4;border-color:var(--green);color:#166534;display:block}
  .alert.warn{background:#fffbeb;border-color:var(--orange);color:#92400e;display:block}
  .alert.err{background:#fef2f2;border-color:var(--red);color:#991b1b;display:block}

  /* ACTIONS */
  .actions{display:flex;justify-content:flex-end;gap:.65rem;margin-top:1.3rem;flex-wrap:wrap}
  .btn{font-family:'Inter',sans-serif;font-size:.77rem;font-weight:600;border-radius:6px;border:none;padding:.55rem 1.15rem;cursor:pointer;transition:.15s;text-decoration:none;display:inline-block}
  .btn-ghost{background:transparent;border:1px solid var(--border2);color:var(--muted)}
  .btn-ghost:hover{border-color:var(--navy);color:var(--navy)}
  .btn-primary{background:var(--navy);color:#fff}
  .btn-primary:hover{background:var(--navy2)}

  footer{background:var(--navy);color:rgba(255,255,255,.45);text-align:center;padding:1.3rem 2rem;font-size:.72rem}
  footer a{color:rgba(255,255,255,.65);text-decoration:none}
  footer a:hover{color:#fff}

  @media(max-width:700px){
    .nav-links{display:none}
    .e-spec,.i-elv,.i-cel{display:none}
    .lim-lbl{width:110px;font-size:.68rem}
    .c-val{font-size:1.1rem}
  }
</style>

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

    <!-- IMPORTANT -->
  <div class="alert alert-warning d-flex gap-3 align-items-start mb-4">
    <div class="fs-4">⚠️ </div>
    <div>
      <strong>Fontos: a felmérőt körültekintően töltsd ki!</strong>
      <div class="mt-3">
        A kérdések a vállalkozásod tényleges digitális helyzetére vonatkoznak – nem az otthonira, nem a személyesre. Néhány gyakori félreértés, amit érdemes elkerülni:
      </div>
      <div>
        <ul class="mt-3">
          <li>Ha a weboldalad nem felel meg a mai modernkori elvárásoknak, vagy nem SEO optimalizált akkor NINCS!</li>
          <li>Ha nincs céges internetelőfizetésed – csak otthoni –, akkor a vállalkozásnak nincs nete</li>
          <li>Ha a dolgozóid mobilnetét nem a cég fizeti, akkor nekik nincs céges internet-hozzáférésük.</li>
          <li>Ha nincs céges Google Meet, Teams vagy hasonló előfizetés, akkor a cégnek nincs videókonferencia-eszköze – és az elmúlt 12 hónapban nem tartottatok online értekezletet.</li>
        </ul>
      </div>
      <div class="mt-3">
        Úgy válaszolj, ahogy a vállalkozásod valóban működik – ez segít abban, hogy a pályázat sikeres legyen.
      </div>    
    </div>
  </div>

  <!-- WARNING -->
  <!-- <div class="alert alert-warning mb-4">
    <h6 class="fw-bold">⚠️ Fontos: a felmérőt körültekintően töltsd ki!</h6>

    <p class="text-muted">
      A kérdések a vállalkozásod tényleges digitális helyzetére vonatkoznak.
    </p>

    <ul class="mb-0">
      <li>Ha nincs céges internet → akkor nincs internet</li>
      <li>Ha nem céges mobilnet → nincs céges hozzáférés</li>
      <li>Ha nincs Teams/Meet → nincs online meeting</li>
    </ul>
  </div> -->

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





  <!-- STEP 4 -->
  <div class=" mb-3 ">
    <div class="">
      <div class="d-flex align-items-center mb-3">
        <span class="badge bg-primary rounded-circle me-3">4</span>
        <h5 class="mb-0 fw-bold">Készíts kalkulációt</h5>
      </div>
      <p class="text-muted mb-">
       A támogatás összege előre meghatározott egységköltségek alapján kerül elszámolásra, nem a tényleges beszerzési ár szerint. Az egységköltségek felmerülését nem kell alátámasztania pénzügyi háttérdokumentumokkal (például számlával, bankszámlakivonattal, összesítővel, illetve egyéb számviteli bizonylattal, piaci árnak való megfelelést alátámasztó dokumentumokkal), és a piaci árnak való megfelelés sem vizsgálandó, ugyanakkor a fejlesztések megvalósítását és a feltételek teljesítését igazolni szükséges. A tervezés és az elszámolás során is a Felhívásban egységköltségként megadott összegeket szükséges figyelembe venni, azoktól eltérni nem lehetséges. Az egységköltségek meghatározásakor az egységköltségekbe a közvetett tevékenységekre jutó összegek is beépítésre kerültek, így azokkal nem kell tételesen elszámolni.
      </p>
<div class="">

  <div class="ctrl">
    <span class="ctrl-lbl">Elszámolás módja:</span>
    <div class="seg">
      <button class="on" id="btn-n" onclick="setMode('netto')">Nettó</button>
      <button id="btn-b" onclick="setMode('brutto')">Bruttó</button>
    </div>
    <span style="font-size:.75rem;color:var(--subtle);margin-left:auto">Az egységárak az elszámolási módnak megfelelően frissülnek</span>
  </div>

  <!-- ESZKÖZBESZERZÉS -->
  <div class="sec">
    <div class="sec-hd">
      <div class="sec-ico">💻</div>
      <div>
        <div class="sec-title">Eszközbeszerzés</div>
        <div class="sec-sub">Min. 15% – Max. 30% az összes elszámolható költségből</div>
      </div>
    </div>
    <div class="tbl-box">
      <table>
        <thead>
          <tr>
            <th class="e-num">#</th>
            <th class="e-name">Eszköztípus</th>
            <th class="e-spec">Minimális műszaki jellemzők</th>
            <th class="e-ar r">Egységköltség (Ft)</th>
            <th class="e-db c">Mennyiség (db)</th>
            <th class="e-sum r">Összesen (Ft)</th>
          </tr>
        </thead>
        <tbody id="tb-e"></tbody>
      </table>
    </div>
  </div>

  <!-- IMMATERIÁLIS JAVAK -->
  <div class="sec">
    <div class="sec-hd">
      <div class="sec-ico">🔷</div>
      <div>
        <div class="sec-title">Immateriális javak beszerzése</div>
        <div class="sec-sub">Szoftverek, licencek, digitális szolgáltatások, képzések</div>
      </div>
    </div>
    <div class="tbl-box">
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Fejlesztési célok</th>
            <th>Fejlesztési célok összetevői</th>
            <th>Minimum elvárás</th>
            <th class="c">Mértékegység</th>
            <th class="r">Egységköltség (Ft)</th>
            <th class="c">Mennyiség<br><small style="font-weight:400;letter-spacing:0;text-transform:none">max. 24 hó</small></th>
            <th class="c">Felhasználó<br><small style="font-weight:400;letter-spacing:0;text-transform:none">szám (fő)</small></th>
            <th class="r">Összesen (Ft)</th>
          </tr>
        </thead>
        <tbody id="tb-i"></tbody>
      </table>
    </div>
  </div>

  <!-- SUMMARY -->
  <div class="cards">
    <div class="card cn">
      <div class="c-lbl">Eszközbeszerzés</div>
      <div class="c-val" id="cv-e">0 Ft</div>
      <div class="c-hint" id="ch-e">0% az összköltségből</div>
    </div>
    <div class="card cb">
      <div class="c-lbl">Immateriális javak</div>
      <div class="c-val" id="cv-i">0 Ft</div>
      <div class="c-hint">Szoftverek és szolgáltatások</div>
    </div>
    <div class="card cg">
      <div class="c-lbl">Teljes projektköltség</div>
      <div class="c-val" id="cv-t">0 Ft</div>
      <div class="c-hint">Minden tétel összege</div>
    </div>
    <div class="card co">
      <div class="c-lbl">Max. elszámolható</div>
      <div class="c-val">13 333 333 Ft</div>
      <div class="c-hint">Max. támogatás: 12 000 000 Ft</div>
    </div>
  </div>

  <!-- LIMITS -->
  <div class="limits">
    <div class="lim-hd">Pályázati korlátok ellenőrzése</div>
    <div class="lim-row">
      <div class="lim-lbl">Eszközbeszerzés aránya<br><small>Min. 15% – max. 30%</small></div>
      <div class="track"><div class="fill" id="f-e" style="width:0"></div></div>
      <div class="lim-pct" id="p-e">0%</div>
    </div>
    <div class="lim-row">
      <div class="lim-lbl">IKT-képzés aránya<br><small>Max. 20%</small></div>
      <div class="track"><div class="fill" id="f-k" style="width:0"></div></div>
      <div class="lim-pct" id="p-k">0%</div>
    </div>
    <div class="lim-row">
      <div class="lim-lbl">IKT-biztonsági képzés<br><small>Max. 10%</small></div>
      <div class="track"><div class="fill" id="f-b" style="width:0"></div></div>
      <div class="lim-pct" id="p-b">0%</div>
    </div>
    <div class="lim-row">
      <div class="lim-lbl">Összköltség a maximumhoz<br><small>Max. elszámolható: 13 333 333 Ft</small></div>
      <div class="track"><div class="fill" id="f-t" style="width:0"></div></div>
      <div class="lim-pct" id="p-t">0%</div>
    </div>
    <div class="alert" id="al"></div>
  </div>

  <div class="actions">
    <button type="button" class="btn btn-ghost" onclick="resetAll()">Visszaállítás</button>
    <form action="{{ route('kalkulacio.submit') }}" method="POST" id="kalkulacioForm" onsubmit="return prepareKalkulacio()">
      @csrf
      <input type="hidden" name="company" value="{{ old('company', session('company')) }}">
      <input type="hidden" name="name" value="{{ old('name', session('name')) }}">
      <input type="hidden" name="mode" id="kf_mode">
      <input type="hidden" name="eszkozok_json" id="kf_eszkozok">
      <input type="hidden" name="immaterialis_json" id="kf_immaterialis">
      <input type="hidden" name="sum_eszkoz" id="kf_sum_eszkoz">
      <input type="hidden" name="sum_immaterialis" id="kf_sum_immaterialis">
      <input type="hidden" name="sum_total" id="kf_sum_total">
      <input type="hidden" name="name" class="form-control" value="{{ old('name', session('name')) }}">

      <input type="text" name="company" class="form-control" value="{{ old('company', session('company')) }}" required placeholder="Adószám">
      <button type="submit" class="btn btn-primary">Kalkuláció küldése →</button>
    </form>
  </div>
</div>
    </div>
  </div>

</div>



<script>
  /* ══════════════════════════════════════════
    ADATOK
    ══════════════════════════════════════════ */

  const eszkozok = [
    {id:'e1',s:'1.',nev:'Számítógép',           spec:'Intel i7 / AMD Ryzen 7 / Apple M2 Pro / M3 / Qualcomm Snapdragon X Elite, 512 GB SSD, 16 GB RAM',n:388600,b:493522},
    {id:'e2',s:'2.',nev:'Monitor',              spec:'QHD 2560×1440, 27"',n:62300,b:79121},
    {id:'e3',s:'3.',nev:'Laptop',               spec:'14", Intel i7 / AMD Ryzen 7 / Apple M2 Pro / M3, 512 GB SSD, 16 GB RAM',n:338300,b:429641},
    {id:'e4',s:'4.',nev:'Hálózati adattároló – NAS',spec:'2 fiókos, 2×4 TB HDD',n:251400,b:319278},
    {id:'e5',s:'5.',nev:'Router',               spec:'Vezetékes, 1× WAN 2,5 Gbit, 5× LAN 1 Gbit',n:68200,b:86614},
    {id:'e6',s:'6.',nev:'Mobiltelefon',         spec:'5G, 12 GB RAM, 256 GB tárhely',n:212200,b:269494},
    {id:'e7',s:'7.',nev:'Tablet',               spec:'8 GB RAM, 128 GB háttértár, min. 11" kijelző, Bluetooth, GPS, kamera, 4G LTE/5G',n:256500,b:325755},
    {id:'e8',s:'8.',nev:'Multifunkciós nyomtató',spec:'Lézernyomtató, szkenner, kétoldalas, színes, 1200×1200 DPI, USB, Wi-Fi/LAN',n:152300,b:193421},
  ];

  /* Immateriális sorok.
    A col8 (mennyiség) és col9 (felhasználó szám) MINDEN sornál szerkeszthető.
    Az összeg = egységár × col8 × col9
    Ha valamelyik oszlop logikailag nem releváns, alapértéke 1 (nem blokkolja a számítást).
    initQty / initFhz: az Excel által előre töltött érték (üres soroknál 0-ról indul). */
  const immGroups = [
    {lbl:'1. Távoli hozzáférés (e-mail, dokumentumok, üzleti alkalmazás) <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i1a',s:'1.',cel:'Távoli hozzáférés',nev:'<span title="E-mail fiókhoz való hozzáférést lehetővé tevő üzleti megoldások (saját domaines e-mail, naptár). Dokumentummegosztást vagy kollaborációs munkát támogató üzleti felhő megoldások (közös szerkesztés). VPN távoli hozzáférés az üzleti munkakörnyezethez, adatokhoz, dokumentumokhoz (pl. tárhely) Vagy bármely igazolható olyan üzleti megoldás megléte, amely a fenti funkciókhoz távolról való hozzáférést támogatja. " style="cursor:help;border-bottom:1px dotted currentColor">SaaS irodai csomag</span>',               elv:'<span class="bdg bdg-req">Kötelező</span>',me:'felhasználó/hó',n:5900,  b:7493,  initQ:0,initF:0},
      {id:'i1b',s:'',  cel:'',               nev:'Domain regisztráció',               elv:'Kötelező',me:'hó',            n:200,   b:254,   initQ:0,initF:1},
      {id:'i1c',s:'',  cel:'',               nev:'Havidíjas IT-üzemeltetés (alapszint)',elv:'Kötelező',me:'hó',           n:127300,b:161671,initQ:0,initF:1},
    ]},
    {lbl:'2. Online (távoli) megbeszélések tartása <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i2a',s:'2.',cel:'Online megbeszélések',nev:'Videókonferencia platform',          elv:'Kötelező',me:'felhasználó/hó',n:5300, b:6731, initQ:0,initF:0},
      {id:'i2b',s:'',  cel:'',               nev:'Bevezetési, üzemeltetési szolgáltatás',elv:'Kötelező',me:'hó',          n:53000,b:67310,initQ:0,initF:1},
    ]},
    {lbl:'3. IKT-képzés az alkalmazottaknak (max. 20%) <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i3a',s:'3.',cel:'IKT-képzés',     nev:'IKT-alapképzés',                    elv:'Kötelező',me:'fő',n:67310, b:96901, initQ:0,initF:1,kepzes:true},
      {id:'i3b',s:'',  cel:'',               nev:'Haladó digitális készségfejlesztés', elv:'Kötelező',me:'fő',n:191100,b:242697,initQ:0,initF:1,kepzes:true},
    ]},
    {lbl:'4. IKT-szakember igénybevétele <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i4a',s:'4.',cel:'IKT-szakember',  nev:'IKT-szakember igénybevétele',       elv:'Kötelező',me:'óra',n:9200,b:11684,initQ:0,initF:1},
    ]},
    {lbl:'5. Alkalmazottak tájékoztatása IKT-biztonsági kötelezettségeikről (max. 10%) <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i5a',s:'5.',cel:'IKT-biztonsági képzés',nev:'IKT-biztonsági képzés',       elv:'Kötelező',me:'fő',n:207100,b:263017,initQ:0,initF:1,biz:true},
    ]},
    {lbl:'6. Legalább 3 IKT-biztonsági intézkedés alkalmazása <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i6a',s:'6.',cel:'IKT-biztonsági intézkedések',nev:'Végpontvédelmi licenc', elv:'Kötelező',me:'db/hó',n:1400,b:1778,initQ:0,initF:1},
      {id:'i6b',s:'',  cel:'',               nev:'Biztonsági mentés',                 elv:'Kötelező',me:'db/hó',n:3000,b:3810,initQ:0,initF:1},
    ]},
    {lbl:'7. IKT-biztonsági dokumentumok megléte <span class="bdg bdg-help">Ha választod, az IBSZ <span class="bdg bdg-req">kötelező</span>, a többi szabadon <span class="bdg bdg-opt">választható</span></span>',items:[
      {id:'i7a',s:'7.',cel:'Biztonsági dokumentumok',nev:'IBSZ kidolgozása',           elv:'Kötelező',  me:'egyszeri költség',n:524300,b:665861, initQ:1,initF:1},
      {id:'i7b',s:'',  cel:'',               nev:'GDPR alapfelmérés és adatkezelési nyilvántartás',elv:'Választható',me:'egyszeri költség',n:257900,b:327533,initQ:1,initF:1,opt:true},
      {id:'i7c',s:'',  cel:'',               nev:'Incidenskezelési terv és oktatás',  elv:'Választható',me:'fő',n:294300,b:373761,initQ:0,initF:1,opt:true},
      {id:'i7d',s:'',  cel:'',               nev:'Digitális aláírás szolgáltatás',    elv:'Választható',me:'felhasználó/hó',n:5200,b:6604,initQ:0,initF:0,opt:true},
    ]},
    {lbl:'8. Saját weboldallal/honlappal való rendelkezés <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i8a',s:'8.',cel:'Weboldal',       nev:'Saját weboldal kialakítása',        elv:'Kötelező',me:'egyszeri költség',n:345100,b:438277,initQ:1,initF:1},
      {id:'i8b',s:'',  cel:'',               nev:'Karbantartás/frissítés',            elv:'Kötelező',me:'hó',n:10100,b:12827,initQ:0,initF:1},
      {id:'i8c',s:'',  cel:'',               nev:'Webtárhely',                        elv:'Kötelező',me:'hó',n:1900, b:2413, initQ:0,initF:1},
      {id:'i8d',s:'',  cel:'',               nev:'SSL tanúsítvány',                   elv:'Kötelező',me:'hó',n:600,  b:762,  initQ:0,initF:1},
    ]},
    {lbl:'9. Bármilyen közösségi média használata <span class="bdg bdg-most">(nem választható együtt a 12. ponttal)</span> <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i9a',s:'9.',cel:'Közösségi média (1 típus)',nev:'Tartalomgyártás',          elv:'Kötelező',me:'hó',n:74900,b:95123,initQ:0,initF:1},
    ]},
    {lbl:'10. Kettő vagy több típusú közösségi média <span class="bdg bdg-most">(nem választható együtt a 11. ponttal)</span> <span class="bdg bdg-help">Ha választod, az online jelenlét és hirdetések <span class="bdg bdg-req">kötelező</span> a Képzés <span class="bdg bdg-opt">Választható</span> </span>',items:[
      {id:'i10a',s:'10.',cel:'Közösségi média (2+ típus)',nev:'Online jelenlét és hirdetések',elv:'Kötelező',  me:'hó',n:96300,b:122301,initQ:0,initF:1},
      {id:'i10b',s:'',   cel:'',             nev:'Képzés (maximum 1 fő)',             elv:'Választható',me:'fő',n:374500,b:475615,initQ:0,initF:1,opt:true},
    ]},
    {lbl:'11. Bármilyen fizetős felhőszolgáltatás használata <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span> a MI szolgáltatás szabadon <span class="bdg bdg-opt">Választható</span></span>',items:[
      {id:'i11a',s:'11.',cel:'Felhőszolgáltatás',nev:'Virtuális szerver (IaaS)',       elv:'Kötelező',  me:'hó',n:21800,  b:27686,  initQ:0,initF:1},
      {id:'i11b',s:'',   cel:'',             nev:'Adattárolás és mentés (felhő storage)',elv:'Kötelező',me:'hó',n:109100, b:138557, initQ:0,initF:1},
      {id:'i11c',s:'',   cel:'',             nev:'Bevezetés, testre szabás',          elv:'Kötelező',  me:'egyszeri költség',n:1379800,b:1752346,initQ:1,initF:1},
      {id:'i11d',s:'',   cel:'',             nev:'MI szolgáltatás',                   elv:'Választható',me:'felhasználó/hó',n:14400,b:18288,initQ:0,initF:0,opt:true},
    ]},
    {lbl:'12. Vállalati erőforrás-tervezési (ERP) megoldás használata <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i12a',s:'12.',cel:'ERP megoldás', nev:'ERP szoftverlicenc / előfizetés (SaaS, min. 2 új modul)',elv:'Kötelező',me:'felhasználó/hó',n:24800,b:31496,initQ:0,initF:0},
      {id:'i12b',s:'',   cel:'',             nev:'Bevezetés, testre szabás, felhasználói oktatás',elv:'Kötelező',me:'egyszeri költség',n:1994300,b:2532761,initQ:1,initF:1},
    ]},
    {lbl:'13. Ügyfélkapcsolat-kezelési (CRM) megoldás használata <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i13a',s:'13.',cel:'CRM megoldás', nev:'CRM szoftverlicenc / előfizetés',   elv:'Kötelező',me:'felhasználó/hó',n:20700,b:26289,initQ:0,initF:0},
      {id:'i13b',s:'',   cel:'',             nev:'Bevezetés és testre szabás',        elv:'Kötelező',me:'egyszeri költség',n:1329500,b:1688465,initQ:1,initF:1},
    ]},
    {lbl:'14. Automatizált feldolgozásra alkalmas e-számlák küldése <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i14a',s:'14.',cel:'E-számla',     nev:'Online számlázó szoftver előfizetés',elv:'Kötelező',me:'hó',n:3200,b:4064,initQ:0,initF:1},
    ]},
    {lbl:'15. Webes értékesítés <span class="bdg bdg-help">Ha választod, az összes összetevő <span class="bdg bdg-req">kötelező</span></span>',items:[
      {id:'i15a',s:'15.',cel:'Webshop',      nev:'Bérelhető webshop rendszer',        elv:'Kötelező',me:'hó',n:19200,b:24384,initQ:0,initF:1},
      {id:'i15b',s:'',   cel:'',             nev:'Domain és tárhely',                 elv:'Kötelező',me:'hó',n:3000, b:3810, initQ:0,initF:1},
    ]},
  ];

  /* ── STATE ── */
  let mode = 'netto';
  const qv = {}; // col8: mennyiség
  const fv = {}; // col9: felhasználó szám

  /* ── HELPERS ── */
  const pr   = it => mode === 'netto' ? it.n : it.b;
  const fmtN = n  => n.toLocaleString('hu-HU') + ' Ft';
  const cell = n  => n > 0
    ? `<span class="pos">${n.toLocaleString('hu-HU')} Ft</span>`
    : '<span class="dash">–</span>';

  /* ── BUILD ESZKÖZ ── */
  function buildE() {
    const tb = document.getElementById('tb-e');
    tb.innerHTML = '';
    eszkozok.forEach(e => {
      qv[e.id] = qv[e.id] ?? 0;
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td class="num-cell">${e.s}</td>
        <td class="name-cell">${e.nev}</td>
        <td class="spec-cell">${e.spec}</td>
        <td class="ar-cell" id="ep${e.id}">${fmtN(pr(e))}</td>
        <td class="qc">
          <div class="qty-wrap">
            <button type="button" class="qty-btn" onclick="stepVal('eq${e.id}',-1,'eq','${e.id}')">−</button>
            <input class="qi" step="1" type="number" id="eq${e.id}" value="${qv[e.id]}" min="0" max="999" oninput="setEQ('${e.id}',this.value)">
            <button type="button" class="qty-btn" onclick="stepVal('eq${e.id}',1,'eq','${e.id}')">+</button>
          </div>
        </td>
        <td class="sum-cell" id="er${e.id}">${cell(qv[e.id]*pr(e))}</td>`;
      tb.appendChild(tr);
    });
  }

  /* ── BUILD IMMATERIÁLIS ── */
  function buildI() {
    const tb = document.getElementById('tb-i');
    tb.innerHTML = '';
    immGroups.forEach(g => {
      // csoport sor
      const gid = 'gs' + g.lbl.replace(/\W/g,'').substring(0,8);
      const htr = document.createElement('tr');
      htr.className = 'grp';
      htr.innerHTML = `<td colspan="8" class="grp-lbl">${g.lbl}</td><td class="grp-sum" id="${gid}">–</td>`;
      tb.appendChild(htr);

      g.items.forEach(it => {
        qv[it.id] = qv[it.id] ?? it.initQ;
        fv[it.id] = fv[it.id] ?? it.initF;

        const bdg = it.opt
          ? ''
          : '';

        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td class="num-cell">${it.s}</td>
          <td class="elv-cell" style="color:var(--muted);font-size:.75rem">${it.cel}</td>
          <td class="name-cell">${it.nev}${bdg}</td>
          <td class="elv-cell">${it.elv}</td>
          <td class="unit-cell">${it.me}</td>
          <td class="ar-cell" id="ip${it.id}">${fmtN(pr(it))}</td>
          <td class="qc">
            <div class="qty-wrap">
              <button type="button" class="qty-btn" onclick="stepVal('iq${it.id}',-1,'iq','${it.id}')">−</button>
              <input class="qi" step="1" type="number" id="iq${it.id}" value="${qv[it.id]}" min="0" max="999" oninput="setIQ('${it.id}',this.value)">
              <button type="button" class="qty-btn" onclick="stepVal('iq${it.id}',1,'iq','${it.id}')">+</button>
            </div>
          </td>
          <td class="qc">
            <div class="qty-wrap">
              <button type="button" class="qty-btn" onclick="stepVal('if${it.id}',-1,'if','${it.id}')">−</button>
              <input class="qi" step="1" type="number" id="if${it.id}" value="${fv[it.id]}" min="0" max="999" oninput="setIF('${it.id}',this.value)">
              <button type="button" class="qty-btn" onclick="stepVal('if${it.id}',1,'if','${it.id}')">+</button>
            </div>
          </td>
          <td class="sum-cell" id="ir${it.id}">${cell(pr(it)*qv[it.id]*fv[it.id])}</td>`;
        tb.appendChild(tr);
      });
    });
  }

  /* ── SETTERS ── */
  function setEQ(id,v){ qv[id]=Math.max(0,parseInt(v)||0); recalc(); }
  function setIQ(id,v){ qv[id]=Math.max(0,parseInt(v)||0); recalc(); }
  function setIF(id,v){ fv[id]=Math.max(0,parseInt(v)||0); recalc(); }

  function stepVal(inputId, delta, type, id) {
    const el = document.getElementById(inputId);
    if (!el) return;
    let v = parseInt(el.value) || 0;
    v += delta;
    if (v < 0) v = 0;
    if (v > 999) v = 999;
    el.value = v;
    if (type === 'eq') setEQ(id, v);
    if (type === 'iq') setIQ(id, v);
    if (type === 'if') setIF(id, v);
  }

  function setMode(m){
    mode=m;
    document.getElementById('btn-n').classList.toggle('on',m==='netto');
    document.getElementById('btn-b').classList.toggle('on',m==='brutto');
    recalc();
  }

  /* ── RECALC ── */
  function recalc(){
    let sumE=0,sumI=0,sumK=0,sumB=0;

    eszkozok.forEach(e=>{
      const v=qv[e.id]*pr(e);
      sumE+=v;
      const pe=document.getElementById('ep'+e.id); if(pe) pe.textContent=fmtN(pr(e));
      const re=document.getElementById('er'+e.id); if(re) re.innerHTML=cell(v);
    });

    immGroups.forEach(g=>{
      let gs=0;
      g.items.forEach(it=>{
        const v=pr(it)*qv[it.id]*fv[it.id];
        sumI+=v; gs+=v;
        if(it.kepzes) sumK+=v;
        if(it.biz)    sumB+=v;
        const pe=document.getElementById('ip'+it.id); if(pe) pe.textContent=fmtN(pr(it));
        const re=document.getElementById('ir'+it.id); if(re) re.innerHTML=cell(v);
      });
      const gid='gs'+g.lbl.replace(/\W/g,'').substring(0,8);
      const ge=document.getElementById(gid);
      if(ge) ge.innerHTML=gs>0?`<span class="pos">${fmtN(gs)}</span>`:'–';
    });

    const total=sumE+sumI, MAX=13333333;
    document.getElementById('cv-e').textContent=fmtN(sumE);
    document.getElementById('cv-i').textContent=fmtN(sumI);
    document.getElementById('cv-t').textContent=fmtN(total);
    const pE=total>0?sumE/total*100:0;
    document.getElementById('ch-e').textContent=pE.toFixed(1)+'% az összköltségből';

    bar('f-e','p-e',pE,30);
    bar('f-k','p-k',total>0?sumK/total*100:0,20);
    bar('f-b','p-b',total>0?sumB/total*100:0,10);
    bar('f-t','p-t',total/MAX*100,100);

    const al=document.getElementById('al');
    if(!total){al.className='alert';return}
    const msgs=[];
    if(total>MAX)         msgs.push({t:'err', m:'⚠ A teljes projektköltség meghaladja a max. elszámolható 13 333 333 Ft-ot!'});
    if(pE>0&&pE<15)       msgs.push({t:'warn',m:'Az eszközbeszerzés aránya kevesebb mint 15% – minimum 15% szükséges.'});
    if(pE>30)             msgs.push({t:'warn',m:'Az eszközbeszerzés aránya meghaladja a 30%-os korlátot.'});
    if(total>0&&sumK/total>0.2) msgs.push({t:'warn',m:'Az IKT-képzés aránya meghaladja a max. 20%-os korlátot.'});
    if(total>0&&sumB/total>0.1) msgs.push({t:'warn',m:'Az IKT-biztonsági képzés aránya meghaladja a max. 10%-os korlátot.'});
    if(!msgs.length){al.className='alert ok';al.textContent='✓ A megadott tételek arányai megfelelnek a pályázati előírásoknak.'}
    else{al.className='alert '+msgs[0].t;al.innerHTML=msgs.map(m=>m.m).join('<br>')}
  }

  function bar(fId,pId,pct,max){
    const fill=document.getElementById(fId),lbl=document.getElementById(pId);
    const r=pct/max*100;
    fill.style.width=Math.min(r,100)+'%';
    lbl.textContent=pct.toFixed(1)+'%';
    const cls=r>100?'over':r>82?'warn':'';
    fill.className='fill'+(cls?' '+cls:'');
    lbl.className='lim-pct'+(cls?' '+cls:'');
  }

  function resetAll(){
    immGroups.forEach(g=>g.items.forEach(it=>{
      qv[it.id]=it.initQ; fv[it.id]=it.initF;
      const iq=document.getElementById('iq'+it.id); if(iq) iq.value=it.initQ;
      const iif=document.getElementById('if'+it.id); if(iif) iif.value=it.initF;
    }));
    eszkozok.forEach(e=>{
      qv[e.id]=0;
      const eq=document.getElementById('eq'+e.id); if(eq) eq.value=0;
    });
    recalc();
  }

  /* ── PREPARE FORM DATA ── */
  function prepareKalkulacio() {
    // mode
    document.getElementById('kf_mode').value = mode;

    // eszközök
    const eszArr = [];
    eszkozok.forEach(e => {
      const qty = qv[e.id] || 0;
      if (qty > 0) {
        eszArr.push({
          nev: e.nev,
          spec: e.spec,
          egysegar: pr(e),
          mennyiseg: qty,
          osszesen: qty * pr(e)
        });
      }
    });
    document.getElementById('kf_eszkozok').value = JSON.stringify(eszArr);

    // immateriális
    const immArr = [];
    immGroups.forEach(g => {
      g.items.forEach(it => {
        const q = qv[it.id] || 0;
        const f = fv[it.id] || 0;
        const total = pr(it) * q * f;
        if (total > 0) {
          immArr.push({
            cel: it.cel || '',
            nev: it.nev,
            me: it.me,
            egysegar: pr(it),
            mennyiseg: q,
            felhasznalo: f,
            osszesen: total
          });
        }
      });
    });
    document.getElementById('kf_immaterialis').value = JSON.stringify(immArr);

    // totals
    let sumE = 0, sumI = 0;
    eszkozok.forEach(e => { sumE += (qv[e.id] || 0) * pr(e); });
    immGroups.forEach(g => {
      g.items.forEach(it => { sumI += pr(it) * (qv[it.id] || 0) * (fv[it.id] || 0); });
    });
    document.getElementById('kf_sum_eszkoz').value = sumE;
    document.getElementById('kf_sum_immaterialis').value = sumI;
    document.getElementById('kf_sum_total').value = sumE + sumI;

    return true;
  }

  buildE(); buildI(); recalc();
</script>

</body>

</html>