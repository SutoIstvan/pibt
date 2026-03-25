<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Paksi Informatika – weboldal, webfejlesztés, webáruház, rendszerüzemeltetés, távmunka, felhős megoldások, pályázati és DIMOP támogatás cégeknek">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title_contact'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    
  <style>
    :root {
      --bs-font-sans-serif: 'Plus Jakarta Sans', sans-serif;
      --blue:       #1565c0;
      --blue-mid:   #1976d2;
      --blue-lt:    #2196f3;
      --blue-pale:  #e3f2fd;
      --blue-faint: #f0f7ff;
      --accent:     #0d47a1;
      --green:      #00897b;
      --green-lt:   #e0f2f1;
      --text:       #0d1b2a;
      --text-mid:   #3a4a5c;
      --text-muted: #6b7c93;
      --border:     #d0dce8;
    }
 
    body {
      color: var(--text);
    }
 
    /* ── NAV ── */

 
    /* ── HERO ── */
    .hero-section {
      background: linear-gradient(135deg, var(--accent) 0%, var(--blue-mid) 55%, var(--blue-lt) 100%);
      color: #fff;
      padding: 80px 0 72px;
      position: relative;
      overflow: hidden;
    }
    .hero-section::before {
      content: '';
      position: absolute; top: -120px; right: -80px;
      width: 520px; height: 520px;
      background: radial-gradient(circle, rgba(255,255,255,.08) 0%, transparent 65%);
      pointer-events: none;
    }
    .hero-badge {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(255,255,255,.15);
      border: 1px solid rgba(255,255,255,.25);
      padding: 6px 16px; border-radius: 20px;
      font-size: 12px; font-weight: 600; letter-spacing: .06em;
      text-transform: uppercase; margin-bottom: 22px;
    }
    .hero-badge .dot { width: 6px; height: 6px; background: #69f0ae; border-radius: 50%; }
    .hero-section h1 {
      font-size: 46px;
      letter-spacing: -1.5px; margin-bottom: 20px;
    }
    .hero-section h1 em { font-style: normal; color: #69f0ae; }
    .hero-section .lead { font-size: 17px; opacity: .82; font-weight: 300; line-height: 1.7; margin-bottom: 34px; }
 
    .btn-hero-white {
      background: #fff; color: var(--blue);
      font-weight: 700; font-size: 15px;
      padding: 14px 28px; border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0,0,0,.12);
      border: none; text-decoration: none;
      transition: transform .15s, box-shadow .15s;
      display: inline-block;
    }
    .btn-hero-white:hover { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(0,0,0,.18); color: var(--blue); }
    .btn-hero-outline {
      background: transparent; color: #fff;
      border: 1.5px solid rgba(255,255,255,.5);
      font-weight: 600; font-size: 15px;
      padding: 14px 28px; border-radius: 10px;
      text-decoration: none; display: inline-block;
      transition: background .2s;
    }
    .btn-hero-outline:hover { background: rgba(255,255,255,.1); color: #fff; }
 
    /* Hero stat card */
    .hero-stat-card {
      background: rgba(255,255,255,.12);
      border: 1px solid rgba(255,255,255,.2);
      border-radius: 14px;
      padding: 28px 24px;
      backdrop-filter: blur(8px);
      color: #fff;
    }
    .hero-stat-card .card-label {
      font-size: 12px; font-weight: 600; letter-spacing: .1em;
      text-transform: uppercase; opacity: .65; margin-bottom: 18px;
    }
    .hero-stat-num { font-size: 36px; letter-spacing: -1px; color: #69f0ae; line-height: 1; }
    .hero-stat-lbl { font-size: 13px; opacity: .7; margin-top: 3px; font-weight: 400; }
    .hero-divider { height: 1px; background: rgba(255,255,255,.15); margin: 14px 0; }
    .hero-deadline {
      background: rgba(105,240,174,.15);
      border: 1px solid rgba(105,240,174,.3);
      border-radius: 8px; padding: 12px 14px; font-size: 13px;
    }
    .hero-deadline strong { color: #69f0ae; }
 
    /* ── SECTION LABELS ── */
    .section-label {
      font-size: 12px; font-weight: 500; letter-spacing: .14em;
      text-transform: uppercase; color: var(--blue-lt); margin-bottom: 10px;
    }
    .section-title { font-size: 34px; letter-spacing: -1px; line-height: 1.15; margin-bottom: 14px; }
    .section-sub { font-size: 16px; color: var(--text-mid); line-height: 1.7;  }
 
    /* ── INFO CARDS ── */
    .info-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 28px 22px;
      box-shadow: 0 2px 16px rgba(21,101,192,.10);
      height: 100%;
      transition: transform .2s, box-shadow .2s;
    }
    .info-card:hover { transform: translateY(-3px); box-shadow: 0 8px 40px rgba(21,101,192,.13); }
    .info-icon {
      width: 48px; height: 48px;
      background: var(--blue-faint);
      border-radius: 12px;
      display: flex; align-items: center; justify-content: center;
      font-size: 22px; margin-bottom: 16px;
    }
    .info-card h3 { font-size: 14px; color: var(--text-muted); font-weight: 500; margin-bottom: 6px; }
    .info-card p { font-size: 20px; font-weight: 800; color: var(--blue); letter-spacing: -.5px; margin: 0; }
    .info-card small { font-size: 12px; color: var(--text-muted); display: block; margin-top: 4px; }
 
    /* ── CATEGORY CARDS ── */
    .cat-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 26px 20px;
      box-shadow: 0 2px 16px rgba(21,101,192,.10);
      height: 100%;
    }
    .cat-icon {
      width: 42px; height: 42px;
      background: var(--blue-faint);
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      font-size: 20px; flex-shrink: 0;
    }
    .cat-card h3 { font-size: 15px; font-weight: 700; color: var(--text); }
    .cat-list { list-style: none; padding: 0; margin: 0; }
    .cat-list li {
      font-size: 15px; color: var(--text-mid);
      padding: 5px 0; border-bottom: 1px solid #f0f4f8;
      display: flex; align-items: center; gap: 8px;
    }
    .cat-list li:last-child { border-bottom: none; }
    .cat-list li::before { content: ''; width: 5px; height: 5px; border-radius: 50%; background: var(--blue-lt); flex-shrink: 0; }
 
    /* ── USP BANNER ── */
    .usp-banner {
      background: var(--blue-faint);
      border: 1.5px solid #bbdefb;
      border-radius: 14px;
      padding: 32px 36px;
    }
    .usp-icon { font-size: 40px; }
    .usp-banner h3 { font-size: 20px; font-weight: 800; color: var(--blue); margin-bottom: 6px; }
    .usp-banner p { font-size: 15px; color: var(--text-mid); line-height: 1.65; margin: 0; }
 
    /* ── PACKAGES ── */
    .pkg-card {
      background: #fff;
      border: 1.5px solid var(--border);
      border-radius: 14px;
      padding: 32px 26px;
      box-shadow: 0 2px 16px rgba(21,101,192,.10);
      position: relative;
      transition: transform .2s, box-shadow .2s;
      height: 100%;
    }
    .pkg-card:hover { transform: translateY(-4px); box-shadow: 0 8px 40px rgba(21,101,192,.13); }
    .pkg-card.featured {
      border-color: var(--blue-lt);
      box-shadow: 0 8px 32px rgba(33,150,243,.18);
    }
    .pkg-popular {
      position: absolute; top: -14px; left: 50%; transform: translateX(-50%);
      background: var(--blue-lt); color: #fff;
      font-size: 11px; font-weight: 700; letter-spacing: .06em;
      text-transform: uppercase; padding: 5px 18px; border-radius: 20px;
      white-space: nowrap;
    }
    .pkg-name { font-size: 11px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: var(--blue-lt); margin-bottom: 6px; }
    .pkg-title { font-size: 26px; font-weight: 500; color: var(--text); margin-bottom: 4px; }
    .pkg-sub { font-size: 13px; color: var(--text-muted); margin-bottom: 22px; font-weight: 400; }
    .pkg-divider { height: 1px; background: var(--border); margin: 20px 0; }
    .pkg-features { list-style: none; padding: 0; margin-bottom: 26px; }
    .pkg-features li {
      display: flex; align-items: flex-start; gap: 10px;
      font-size: 13.5px; color: var(--text-mid);
      padding: 6px 0;
    }
    .pkg-check {
      width: 20px; height: 20px; border-radius: 50%;
      background: var(--green-lt); color: var(--green);
      display: flex; align-items: center; justify-content: center;
      font-size: 11px; flex-shrink: 0; margin-top: 1px; font-weight: 700;
    }
    .pkg-note {
      background: var(--blue-faint);
      border-left: 3px solid var(--blue-lt);
      padding: 12px 14px; border-radius: 0 8px 8px 0;
      font-size: 12.5px; color: var(--text-mid);
      margin-bottom: 22px; line-height: 1.5;
    }
    .pkg-note strong { color: var(--blue); }
    .btn-pkg {
      display: block; text-align: center;
      background: var(--blue-faint); color: var(--blue);
      font-weight: 700; font-size: 14px;
      padding: 13px; border-radius: 10px;
      text-decoration: none;
      transition: background .2s, color .2s;
      border: 1.5px solid var(--border);
    }
    .pkg-card.featured .btn-pkg { background: var(--blue); color: #fff; border-color: var(--blue); }
    .btn-pkg:hover { background: var(--blue); color: #fff; border-color: var(--blue); }
 
    /* ── WHY SECTION ── */
    .why-section {
      background: linear-gradient(135deg, var(--accent) 0%, var(--blue-mid) 100%);
    }
    .why-card {
      background: rgba(255,255,255,.1);
      border: 1px solid rgba(255,255,255,.18);
      border-radius: 14px;
      padding: 28px 22px;
      color: #fff;
      transition: background .2s;
      height: 100%;
    }
    .why-card:hover { background: rgba(255,255,255,.15); }
    .why-card.highlight {
      background: rgba(105,240,174,.12);
      border-color: rgba(105,240,174,.25);
    }
    .why-num {
      font-size: 42px; font-weight: 800; letter-spacing: -2px;
      color: rgba(255,255,255,.12); line-height: 1; margin-bottom: 12px;
    }
    .why-card.highlight .why-num { color: rgba(105,240,174,.2); }
    .why-card h3 { font-size: 17px; font-weight: 700; margin-bottom: 10px; }
    .why-card p { font-size: 14px; opacity: .75; line-height: 1.65; font-weight: 300; margin: 0; }
 
    /* ── STEPS ── */
    .step-circle {
      width: 60px; height: 60px; border-radius: 50%;
      background: #fff; border: 2px solid var(--border);
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 18px;
      font-size: 20px; font-weight: 800; color: var(--text-muted);
      box-shadow: 0 2px 16px rgba(21,101,192,.10);
    }
    .step-item.active .step-circle {
      background: var(--blue); border-color: var(--blue);
      color: #fff; box-shadow: 0 4px 20px rgba(21,101,192,.35);
    }
    .step-item h3 { font-size: 15px; font-weight: 700; margin-bottom: 6px; }
    .step-item p { font-size: 13px; color: var(--text-muted); line-height: 1.5; margin: 0; }
    .steps-line {
      position: absolute; top: 30px; left: 15%; right: 15%;
      height: 2px; background: var(--border); z-index: 0;
    }
     .steps-row {
      position: relative;
    }
    .steps-row::before {
      content: '';
      position: absolute;
      top: 55px;
      left: calc(12.5% + 30px);
      right: calc(12.5% + 30px);
      height: 2px;
      background: var(--border);
      z-index: 0;
    }
    /* ── ELIGIBILITY ── */
    .elig-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 28px 26px;
      box-shadow: 0 2px 16px rgba(21,101,192,.10);
      height: 100%;
    }
    .elig-card h3 { font-size: 17px; font-weight: 700; margin-bottom: 18px; }
    .elig-list { list-style: none; padding: 0; margin: 0; }
    .elig-list li {
      display: flex; align-items: flex-start; gap: 12px;
      font-size: 14px; color: var(--text-mid);
      padding: 10px 0; border-bottom: 1px solid #f0f4f8; line-height: 1.5;
    }
    .elig-list li:last-child { border-bottom: none; }
    .elig-dot {
      width: 22px; height: 22px; border-radius: 50%;
      background: var(--green-lt); color: var(--green);
      display: flex; align-items: center; justify-content: center;
      font-size: 12px; flex-shrink: 0; margin-top: 1px; font-weight: 700;
    }
    .elig-note {
      background: var(--blue-faint);
      border-left: 3px solid var(--blue-lt);
      border-radius: 0 10px 10px 0;
      padding: 16px; margin-top: 18px;
      font-size: 14px; color: var(--text-mid); line-height: 1.6;
    }
    .elig-note strong { color: var(--blue); }
 
    /* ── CONTACT ── */
    .contact-item {
      display: flex; align-items: center; gap: 14px;
      background: #fff; border: 1px solid var(--border);
      border-radius: 10px; padding: 14px 18px;
    }
    .contact-icon {
      width: 40px; height: 40px; border-radius: 10px;
      background: var(--blue-faint);
      display: flex; align-items: center; justify-content: center; font-size: 18px;
    }
    .contact-label { color: var(--text-muted); font-size: 11px; text-transform: uppercase; letter-spacing: .06em; }
    .contact-val { font-weight: 600; color: var(--text); font-size: 14px; }
 
    .form-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 36px 30px;
      box-shadow: 0 8px 40px rgba(21,101,192,.13);
    }
    .form-card h3 { font-size: 20px; font-weight: 700; margin-bottom: 22px; }
    .form-label { font-size: 12px; font-weight: 600; color: var(--text-mid); letter-spacing: .04em; text-transform: uppercase; }
    .form-control, .form-select {
      background: #f8fafc;
      border: 1.5px solid var(--border);
      border-radius: 8px; font-size: 14px;
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--text); padding: 12px 14px;
    }
    .form-control:focus, .form-select:focus {
      border-color: var(--blue-lt);
      background: #fff;
      box-shadow: 0 0 0 3px rgba(33,150,243,.1);
    }
    .btn-submit {
      width: 100%; background: var(--blue);
      color: #fff; font-weight: 700; font-size: 15px;
      padding: 15px; border-radius: 10px; border: none;
      font-family: 'Plus Jakarta Sans', sans-serif;
      transition: background .2s, transform .15s;
    }
    .btn-submit:hover { background: var(--accent); transform: translateY(-1px); color: #fff; }
    .form-note { font-size: 11px; color: var(--text-muted); margin-top: 10px; text-align: center; }
 

 
    /* ── MISC ── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(24px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .fade-up { animation: fadeUp .6s ease both; }
    .fade-up-delay { animation: fadeUp .6s .15s ease both; }
 
    @media (max-width: 767px) {
      .hero-section h1 { font-size: 32px; }
    }
  </style>

</head>

<body>
  {{-- <body data-bs-theme="dark"> --}}

    @include('layouts.nav')


    <!-- ═══════════════ HERO ═══════════════ -->
<section class="hero-section">
  <div class="container px-5">
    <div class="row align-items-center g-5 px-lg-5 px-0">
      <div class="col-lg-7 fade-up">
        <div class="hero-badge"><span class="dot"></span>DIMOP Plusz 1.2.6/B-26 pályázat</div>
        <h1>Digitális fejlesztés <em>akár 90%</em> támogatással</h1>
        <p class="lead">A Paksi Informatika 20+ éves tapasztalatával segítünk, hogy a pályázati keretből ne csak hardver legyen – hanem egy valóban működő, hatékony digitális vállalkozás.</p>
        <div class="d-flex flex-wrap gap-3">
          <a href="#kapcsolat" class="btn-hero-white">Kérek ingyenes konzultációt</a>
          <a href="#csomagok" class="btn-hero-outline">Megnézem a csomagokat</a>
        </div>
      </div>
      <div class="col-lg-5 d-none d-lg-block fade-up-delay">
        <div class="hero-stat-card">
          <div class="card-label">Pályázat összefoglaló</div>
          <div class="mb-3">
            <div class="hero-stat-num">3–12 M Ft</div>
            <div class="hero-stat-lbl">vissza nem térítendő támogatás</div>
          </div>
          <div class="hero-divider"></div>
          <div class="mb-3">
            <div class="hero-stat-num">90%</div>
            <div class="hero-stat-lbl">támogatási intenzitás</div>
          </div>
          <div class="hero-divider"></div>
          <div class="hero-deadline">
            <strong>📅 Benyújtás:</strong><br>2026. március 31. – június 30.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="conteiner px-5 mb-5">
  <div class="mt-5 text-center" data-aos="fade-up">
    <h6 class="display-6 text-body-emphasis lh-2 mb-3">
      Hogyan segítünk?          
    </h6>
    <p class="mx-auto text-center" style="max-width: 600px;">
      Segítünk a szakmai tartalom összeállításában, hogy neked és a pályázatíródnak egy átláthatóbb, jobban előkészített projekttel kelljen dolgoznotok.
    </p>
  </div>
</div>


    <!-- ═══════════════ MIRE FORDÍTHATÓ ═══════════════ -->
<section class="py-5" id="mire">
  <div class="container py-4 px-lg-5 px-0">
    <div class="section-label">Felhasználható területek</div>
    <div class="section-title">Mire fordítható a támogatás?</div>
    <p class="section-sub mb-5">Eszközökre, szoftverekre, szolgáltatásokra és képzésre egyaránt – nem csupán beszerzésre, hanem valódi fejlesztésre.</p>
 
    <div class="row g-4 mb-5">
      <div class="col-6 col-lg-3">
        <div class="cat-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="cat-icon">💻</div>
            <h3 class="mb-0">Eszközök</h3>
          </div>
          <ul class="cat-list">
            <li>Laptop, asztali számítógép</li>
            <li>Okostelefon, tablet</li>
            <li>Monitor, perifériák</li>
            <li>Multifunkciós nyomtató</li>
            <li>Hálózati eszközök</li>
          </ul>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="cat-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="cat-icon">⚙️</div>
            <h3 class="mb-0">Szoftverek</h3>
          </div>
          <ul class="cat-list">
            <li>Irodai és felhő megoldások</li>
            <li>Videókonferencia, csapatmunka</li>
            <li>Biztonsági szoftverek</li>
            <li>CRM, ügyviteli rendszerek</li>
            <li>AI asszisztensek</li>
          </ul>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="cat-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="cat-icon">🛠️</div>
            <h3 class="mb-0">Szolgáltatások</h3>
          </div>
          <ul class="cat-list">
            <li>IT szakértői támogatás</li>
            <li>Rendszer bevezetés, üzemeltetés</li>
            <li>Információbiztonság</li>
            <li>GDPR, IBSZ kidolgozás</li>
            <li>Weboldal, webshop fejlesztés</li>
          </ul>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="cat-card">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="cat-icon">🎓</div>
            <h3 class="mb-0">Képzés</h3>
          </div>
          <ul class="cat-list">
            <li>IT alapképzések</li>
            <li>Digitális készségfejlesztés</li>
            <li>Kiberbiztonsági tréning</li>
            <li>AI és hatékonysági képzés</li>
            <li>Szoftverhasználati oktatás</li>
          </ul>
        </div>
      </div>
    </div>
 

</section>


<!-- ═══════════════ CSOMAGOK ═══════════════ -->
<section class="py-5" id="csomagok">
  <div class="container py-4 px-lg-5 px-0">
    <div class="section-label">Ajánlataink</div>
    <div class="section-title">Válasszon csomagot</div>
    <p class="section-sub mb-5">Három előre összerakott csomag, amely a legtöbb vállalkozás igényét lefedi. De ha valami más kell – egyeztessünk.</p>
 
    <div class="row g-4 align-items-stretch">
      <!-- Digital Start -->
      <div class="col-lg-4">
        <div class="pkg-card">
          <!-- <div class="pkg-name">Kereskedői csomag:</div> -->
          <div class="pkg-title" style="color:#2196f3;">Kereskedői csomag:</div>
          <!-- <div class="pkg-sub">1-2 fős vállalkozásoknak</div> -->
          <div class="pkg-divider"></div>
          <ul class="pkg-features">
            <li><span class="pkg-check">✓</span>HARDVER (ügyfél által választott)</li>
            <li><span class="pkg-check">✓</span>Szoftver (Unas +ERP +AI)</li>
            <li><span class="pkg-check">✓</span>Szolgáltatás (Kialakítás, Bevezetés, Üzemeltetés)</li>
            <li><span class="pkg-check">✓</span>Képzés (Használat, Kezelés, IKT oktatás)</li>
          </ul>
          <div class="pkg-note"><strong>Projektérték:</strong> ~13 M Ft · Önerő kb. 10%</div>
          <a href="#kapcsolat" class="btn-pkg">Érdekel ez a csomag</a>
        </div>
      </div>
 
      <!-- Digital Pro -->
      <div class="col-lg-4">
        <div class="pkg-card featured">
          <div class="pkg-popular">Legnépszerűbb</div>
          <!-- <div class="pkg-name">Közepes csomag</div> -->
          <div class="pkg-title" style="color:#2196f3;">Digital Pro</div>
          <!-- <div class="pkg-sub">3-5 fős csapatoknak</div> -->
          <div class="pkg-divider"></div>
          <ul class="pkg-features">
            <li><span class="pkg-check">✓</span>Teljes hardverkészlet (laptop, telefon, tablet, monitor)</li>
            <li><span class="pkg-check">✓</span>M365 / felhő megoldások, AI asszisztens</li>
            <li><span class="pkg-check">✓</span>Teljes IT üzemeltetés és support</li>
            <li><span class="pkg-check">✓</span>Információbiztonság, GDPR, IBSZ</li>
            <li><span class="pkg-check">✓</span>CRM vagy ügyviteli rendszer</li>
            <li><span class="pkg-check">✓</span>2 képzési modul a csapatnak</li>
          </ul>
          <div class="pkg-note"><strong>Becsült projektérték:</strong> ~8–9 M Ft · Önerő kb. 10%</div>
          <a href="#kapcsolat" class="btn-pkg">Érdekel ez a csomag</a>
        </div>
      </div>
 
      <!-- Digital Max -->
      <div class="col-lg-4">
        <div class="pkg-card">
          <!-- <div class="pkg-name">Teljes csomag</div> -->
          <div class="pkg-title" style="color:#2196f3;">Digital Max</div>
          <!-- <div class="pkg-sub">5+ fős vállalkozásoknak</div> -->
          <div class="pkg-divider"></div>
          <ul class="pkg-features">
            <li><span class="pkg-check">✓</span>Komplett hardverpark az egész csapatnak</li>
            <li><span class="pkg-check">✓</span>Teljes szoftver infrastruktúra, AI eszközök</li>
            <li><span class="pkg-check">✓</span>Prémium IT üzemeltetés, helpdesk</li>
            <li><span class="pkg-check">✓</span>Weboldal / webshop fejlesztés</li>
            <li><span class="pkg-check">✓</span>Teljes körű biztonsági csomag</li>
            <li><span class="pkg-check">✓</span>Komplex képzési program</li>
          </ul>
          <div class="pkg-note"><strong>Becsült projektérték:</strong> ~11–12 M Ft · Önerő kb. 10%</div>
          <a href="#kapcsolat" class="btn-pkg">Érdekel ez a csomag</a>
        </div>
      </div>
    </div>
  </div>
</section>
 
<section class="py-5" id="mire">
  <div class="container py-4 px-lg-5 px-0">

    <!-- USP Banner -->
    <div class="usp-banner d-flex align-items-start gap-4">
      <div class="usp-icon flex-shrink-0">💡</div>
      <div>
        <h3>Valami másra gondoltál?</h3>
        <p>Ha a fejlesztési célod nem illik pontosan a sztenderd kategóriákba, alakítsuk együtt!</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ MIÉRT MI ═══════════════ -->
<section class="py-5 why-section" id="miert-mi">
  <div class="container py-4">
    <div class="section-label" style="color:rgba(255,255,255,.6)">Miért a Paksi Informatika?</div>
    <div class="section-title text-white">Nem csak kivitelezünk –<br>gondolkodunk és tervezünk</div>
    <p class="section-sub mb-5" style="color:rgba(255,255,255,.65)">20+ éves tapasztalat, helyi jelenlét, valódi tanácsadás – ezért döntenek mellettünk.</p>
 
    <div class="row g-4">
      <div class="col-md-4">
        <div class="why-card highlight">
          <div class="why-num">01</div>
          <h3>Nincs lehetetlen fejlesztési cél</h3>
          <p>Ha az Ön igénye kilóg a sztenderd kategóriákból, mi megtaláljuk a legális és szakmailag megalapozott utat. Nálunk mindig van megoldás.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="why-card">
          <div class="why-num">02</div>
          <h3>20+ év tapasztalat</h3>
          <p>Több mint két évtizede támogatjuk a Dél-Dunántúl kis- és középvállalkozásait. Tudjuk, mi működik a valóságban – nem csak papíron.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="why-card">
          <div class="why-num">03</div>
          <h3>Tanácsadó is, nem csak kivitelező</h3>
          <p>A pályázat során végig mellette állunk: segítünk a szakmai tartalom összeállításában, és a nyertes projekt megvalósításában is.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="why-card">
          <div class="why-num">04</div>
          <h3>Helyi jelenlét, gyors reakció</h3>
          <p>Nem egy névtelen call center, hanem egy helyi csapat, amely személyesen ismeri ügyfeleit és gyorsan tud reagálni.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="why-card">
          <div class="why-num">05</div>
          <h3>Pályázati keret maximális kihasználása</h3>
          <p>Célunk, hogy a rendelkezésre álló keretből a lehető legtöbbet hozza ki vállalkozása – minden forint számít.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="why-card">
          <div class="why-num">06</div>
          <h3>Hosszú távú partner</h3>
          <p>A bevezetés után sem marad magára: folyamatos üzemeltetési és fejlesztési támogatással biztosítjuk a fenntartható digitális működést.</p>
        </div>
      </div>
    </div>
  </div>
</section>
 
<!-- ═══════════════ FOLYAMAT ═══════════════ -->
<section class="py-5" id="folyamat">
  <div class="container py-4">
    <div class="section-label">Hogyan működik?</div>
    <div class="section-title">A pályázattól a megvalósításig</div>
    <p class="section-sub mb-5">Egyszerű, átlátható folyamat – mi végig ott vagyunk mellette.</p>
 
    <div class="row g-4 steps-row">
      <div class="col-6 col-lg-3 text-center step-item" style="position:relative; z-index:1">
        <div class="step-circle">01</div>
        <h3>Konzultáció</h3>
        <p>Felmérjük a vállalkozás igényeit és a jogosultságot</p>
      </div>
      <div class="col-6 col-lg-3 text-center step-item active" style="position:relative; z-index:1">
        <div class="step-circle">02</div>
        <h3>Tervezés</h3>
        <p>Összerakjuk a szakmai tartalmat a pályázatíróval együtt</p>
      </div>
      <div class="col-6 col-lg-3 text-center step-item" style="position:relative; z-index:1">
        <div class="step-circle">03</div>
        <h3>Beadás &amp; döntés</h3>
        <p>Segítünk az előkészítésben, várjuk a döntést</p>
      </div>
      <div class="col-6 col-lg-3 text-center step-item" style="position:relative; z-index:1">
        <div class="step-circle">04</div>
        <h3>Megvalósítás</h3>
        <p>Leszállítjuk, bevezetjük, betanítjuk – és utána is ott vagyunk</p>
      </div>
    </div>
  </div>
</section>
 
<!-- ═══════════════ JOGOSULTSÁG ═══════════════ -->
<section class="py-5" id="jogosultsag">
  <div class="container py-4">
    <div class="section-label">Jogosultság</div>
    <div class="section-title">Önnek szól ez a pályázat?</div>
    <p class="section-sub mb-5">Gyorsan ellenőrizze, hogy vállalkozása belefér-e a célcsoportba.</p>
 
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="elig-card">
          <h3>✅ Jellemzően jogosult, ha...</h3>
          <ul class="elig-list">
            <li><span class="elig-dot">✓</span>Mikro- vagy kisvállalkozás (max. 50 fő)</li>
            <li><span class="elig-dot">✓</span>Legalább 1 lezárt üzleti év</li>
            <li><span class="elig-dot">✓</span>A fejlesztés magyarországi telephelyen valósul meg</li>
            <li><span class="elig-dot">✓</span>Kevésbé fejlett régióban működik (pl. Dél-Dunántúl)</li>
            <li><span class="elig-dot">✓</span>Digitálisan még alacsonyabb fejlettségi szinten van</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="elig-card">
          <h3>❓ Nem biztos benne?</h3>
          <ul class="elig-list">
            <li><span class="elig-dot">→</span>Nem egyértelmű a vállalkozás méretkategóriája</li>
            <li><span class="elig-dot">→</span>Speciális iparágban tevékenykedik</li>
            <li><span class="elig-dot">→</span>Egyedi fejlesztési igény, ami nem illik a kategóriákba</li>
            <li><span class="elig-dot">→</span>Több telephellyel, összetett cégstruktúrával rendelkezik</li>
          </ul>
          <div class="elig-note">
            <strong>Ne adja fel azonnal!</strong> Vegye fel velünk a kapcsolatot – 20+ év tapasztalatával szinte minden esetre van megoldás.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- CONTACT FORM -->

    <div class="container col-xl-12 col-xxl-12" data-aos="fade-up" id="contact-form">
        <div class="row align-items-center g-lg-5 py-5">

            <div class="col-md-10 mx-auto col-lg-6">
                <form action="{{ route('contact.submit') }}" method="POST"
                    class="p-4 p-md-5 border rounded-3 bg-body-tertiary">

                    @csrf


                    <div class="form-floating mb-3">
                        <input name="name" class="form-control" id="floatingInput"
                            placeholder="{{ __('menu.name') }}" required>
                        <label for="floatingInput">{{ __('menu.name') }}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="email" class="form-control" id="floatingEmail" placeholder="name@example.com"
                            required>
                        <label for="floatingEmail">{{ __('menu.mail') }}</label>
                    </div>
                    <div class="form-group">
                        <label for="message"
                            class="form-label ms-2">{{ __('menu.short_decription_message') }}</label>
                        <textarea name="message" id="inputMessage" id="message" class="form-control" rows="2" required></textarea>
                    </div>
                    <div class="checkbox mb-3 mt-2 ms-2">
                        <label>
                            <input type="checkbox" value="remember-me" required>
                            {{ __('menu.accept_the') }}
                            <a href="{{ route('gdpr') }}" target="blank">
                                {{ __('menu.data_management_conditions') }}
                            </a>

                        </label>
                    </div>

                    <div class="mb-3">
                        {!! htmlScriptTagJsApi() !!}
                        {!! htmlFormSnippet() !!}
                    </div>



                    <button class="w-100 btn btn-lg btn-primary"
                        type="submit">Lépjen velünk kapcsolatba!</button>
                    <!-- <hr class="my-4">
              <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small> -->
                </form>
            </div>


            <div class="col-lg-6 text-center text-lg-start">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3 mt-5 mt-md-0">Kezdjük el <span
                        class="text-primary">együtt</span>!</h1>
                <p class="col-lg-10 fs-4">
                    Ingyenes konzultáció – kötelezettség nélkül.
                </p>
                <p class="col-lg-10 fs-8">
                    Mesélje el vállalkozása helyzetét, és mi megmutatjuk, hogyan tudunk segíteni a DIMOP Plusz pályázat keretében. Nincs kötelezettség, csak lehetőség.
                </p>

                        <div class="d-flex flex-column gap-3 col-lg-10">
          <div class="contact-item">
            <div class="contact-icon">📞</div>
            <div>
              <div class="contact-label">Telefon</div>
              <div class="contact-val">+36 70 702 1252</div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">✉️</div>
            <div>
              <div class="contact-label">E-mail</div>
              <div class="contact-val">info@pikft.hu</div>
            </div>
          </div>

        </div>

            </div>

        </div>
    </div>

    <!-- END CONTACT FORM -->


    <!-- <div class="conteiner my-5">
      <div class="mb-5 mt-1 text-center">
        <h6 class="display-6 text-body-emphasis lh-2 mb-3 mt-5" data-aos="fade-up">
          {{ __('contacts.map')}}          
        </h6>
      </div>
    
    <div class="container my-5 pt-1" data-aos="fade-up">
      <div class="text-center bg-body-tertiary rounded-3">

        <iframe class="rounded-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19151.850923572147!2d18.82580443619575!3d46.61593960707588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47425c4ebf44334b%3A0xc0ca0760f0d4fcc8!2zUGFrcywgVsOhY2lrYSBrw7Z6IDEsIDcwMzAgTWFneWFyb3JzesOhZw!5e0!3m2!1shu!2sua!4v1727186630055!5m2!1shu!2sua" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
      </div>
    </div> -->
  
    <!-- FOOTER -->

    <!-- @include('layouts.footer') -->
  
    <div class="container" data-aos="fade-up">
    <footer class="pt-5">


      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 mt-4 border-top">
        <p>
          <img class="mb-1" src="favicon.ico" height="22" alt="">
          © 2025 Paksi Informatika. {{__('menu.all_rights_reserved')}}
        </p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-body-emphasis" href="#"><i style="color: #006aff;"
                class="fa-brands fa-twitter"></i></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><i style="color: #006aff;"
                class="fa-brands fa-instagram"></i></use></svg></a></li>
          <li class="ms-3 me-3"><a class="link-body-emphasis" href="#"><i style="color: #006aff;"
                class="fa-brands fa-facebook"></i></use></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>

    <!-- TOP BUTTON  -->

    <button type="button" class="btn btn-outline-primary btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>
  
  </body>
</html>
