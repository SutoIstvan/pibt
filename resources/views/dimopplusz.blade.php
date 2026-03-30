<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Paksi Informatika – weboldal, webfejlesztés, webáruház, rendszerüzemeltetés, távmunka, felhős megoldások, pályázati és DIMOP támogatás cégeknek">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', __('menu.title_contact'))</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">

  <style>
    :root {
      --bs-font-sans-serif: 'Plus Jakarta Sans', sans-serif;
      --blue: #1565c0;
      --blue-mid: #1976d2;
      --blue-lt: #2196f3;
      --blue-pale: #e3f2fd;
      --blue-faint: #f0f7ff;
      --accent: #0d47a1;
      --green: #00897b;
      --green-lt: #e0f2f1;
      --text: #0d1b2a;
      --text-mid: #3a4a5c;
      --text-muted: #6b7c93;
      --border: #d0dce8;
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
      position: absolute;
      top: -120px;
      right: -80px;
      width: 520px;
      height: 520px;
      background: radial-gradient(circle, rgba(255, 255, 255, .08) 0%, transparent 65%);
      pointer-events: none;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, .15);
      border: 1px solid rgba(255, 255, 255, .25);
      padding: 6px 16px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .06em;
      text-transform: uppercase;
      margin-bottom: 22px;
    }

    .hero-badge .dot {
      width: 6px;
      height: 6px;
      background: #69f0ae;
      border-radius: 50%;
    }

    .hero-section h1 {
      font-size: 46px;
      letter-spacing: -1.5px;
      margin-bottom: 20px;
    }

    .hero-section h1 em {
      font-style: normal;
      color: #69f0ae;
    }

    .hero-section .lead {
      font-size: 17px;
      opacity: .82;
      font-weight: 300;
      line-height: 1.7;
      margin-bottom: 34px;
    }

    .btn-hero-white {
      background: #fff;
      color: var(--blue);
      font-weight: 700;
      font-size: 15px;
      padding: 14px 28px;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, .12);
      border: none;
      text-decoration: none;
      transition: transform .15s, box-shadow .15s;
      display: inline-block;
    }

    .btn-hero-white:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 28px rgba(0, 0, 0, .18);
      color: var(--blue);
    }

    .btn-hero-outline {
      background: transparent;
      color: #fff;
      border: 1.5px solid rgba(255, 255, 255, .5);
      font-weight: 600;
      font-size: 15px;
      padding: 14px 28px;
      border-radius: 10px;
      text-decoration: none;
      display: inline-block;
      transition: background .2s;
    }

    .btn-hero-outline:hover {
      background: rgba(255, 255, 255, .1);
      color: #fff;
    }

    /* Hero stat card */
    .hero-stat-card {
      background: rgba(255, 255, 255, .12);
      border: 1px solid rgba(255, 255, 255, .2);
      border-radius: 14px;
      padding: 28px 24px;
      backdrop-filter: blur(8px);
      color: #fff;
    }

    .hero-stat-card .card-label {
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .1em;
      text-transform: uppercase;
      opacity: .65;
      margin-bottom: 18px;
    }

    .hero-stat-num {
      font-size: 36px;
      letter-spacing: -1px;
      color: #69f0ae;
      line-height: 1;
    }

    .hero-stat-lbl {
      font-size: 13px;
      opacity: .7;
      margin-top: 3px;
      font-weight: 400;
    }

    .hero-divider {
      height: 1px;
      background: rgba(255, 255, 255, .15);
      margin: 14px 0;
    }

    .hero-deadline {
      background: rgba(105, 240, 174, .15);
      border: 1px solid rgba(105, 240, 174, .3);
      border-radius: 8px;
      padding: 12px 14px;
      font-size: 13px;
    }

    .hero-deadline strong {
      color: #69f0ae;
    }

    /* ── SECTION LABELS ── */
    .section-label {
      font-size: 12px;
      font-weight: 500;
      letter-spacing: .14em;
      text-transform: uppercase;
      color: var(--blue-lt);
      margin-bottom: 10px;
    }

    .section-title {
      font-size: 34px;
      letter-spacing: -1px;
      line-height: 1.15;
      margin-bottom: 14px;
    }

    .section-sub {
      font-size: 16px;
      color: var(--text-mid);
      line-height: 1.7;
    }

    /* ── INFO CARDS ── */
    .info-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 28px 22px;
      box-shadow: 0 2px 16px rgba(21, 101, 192, .10);
      height: 100%;
      transition: transform .2s, box-shadow .2s;
    }

    .info-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 40px rgba(21, 101, 192, .13);
    }

    .info-icon {
      width: 48px;
      height: 48px;
      background: var(--blue-faint);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      margin-bottom: 16px;
    }

    .info-card h3 {
      font-size: 14px;
      color: var(--text-muted);
      font-weight: 500;
      margin-bottom: 6px;
    }

    .info-card p {
      font-size: 20px;
      font-weight: 800;
      color: var(--blue);
      letter-spacing: -.5px;
      margin: 0;
    }

    .info-card small {
      font-size: 12px;
      color: var(--text-muted);
      display: block;
      margin-top: 4px;
    }

    /* ── CATEGORY CARDS ── */
    .cat-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 26px 20px;
      box-shadow: 0 2px 16px rgba(21, 101, 192, .10);
      height: 100%;
    }

    .cat-icon {
      width: 42px;
      height: 42px;
      background: var(--blue-faint);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      flex-shrink: 0;
    }

    .cat-card h3 {
      font-size: 15px;
      font-weight: 700;
      color: var(--text);
    }

    .cat-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .cat-list li {
      font-size: 15px;
      color: var(--text-mid);
      padding: 5px 0;
      border-bottom: 1px solid #f0f4f8;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .cat-list li:last-child {
      border-bottom: none;
    }

    .cat-list li::before {
      content: '';
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: var(--blue-lt);
      flex-shrink: 0;
    }

    /* ── USP BANNER ── */
    .usp-banner {
      background: var(--blue-faint);
      border: 1.5px solid #bbdefb;
      border-radius: 14px;
      padding: 32px 36px;
    }

    .usp-icon {
      font-size: 40px;
    }

    .usp-banner h3 {
      font-size: 20px;
      font-weight: 800;
      color: var(--blue);
      margin-bottom: 6px;
    }

    .usp-banner p {
      font-size: 15px;
      color: var(--text-mid);
      line-height: 1.65;
      margin: 0;
    }

    /* ── PACKAGES ── */
    .pkg-card {
      background: #fff;
      border: 1.5px solid var(--border);
      border-radius: 14px;
      padding: 32px 26px;
      box-shadow: 0 2px 16px rgba(21, 101, 192, .10);
      position: relative;
      transition: transform .2s, box-shadow .2s;
      height: 100%;
    }

    .pkg-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 40px rgba(21, 101, 192, .13);
    }

    .pkg-card.featured {
      border-color: var(--blue-lt);
      box-shadow: 0 8px 32px rgba(33, 150, 243, .18);
    }

    .pkg-popular {
      position: absolute;
      top: -14px;
      left: 50%;
      transform: translateX(-50%);
      background: var(--blue-lt);
      color: #fff;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
      padding: 5px 18px;
      border-radius: 20px;
      white-space: nowrap;
    }

    .pkg-name {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .1em;
      text-transform: uppercase;
      color: var(--blue-lt);
      margin-bottom: 6px;
    }

    .pkg-title {
      font-size: 24px;
      font-weight: 400;
      color: var(--text);
      margin-bottom: 4px;
    }

    .pkg-sub {
      font-size: 13px;
      color: var(--text-muted);
      margin-bottom: 22px;
      font-weight: 400;
    }

    .pkg-divider {
      height: 1px;
      background: var(--border);
      margin: 20px 0;
    }

    .pkg-features {
      list-style: none;
      padding: 0;
      margin-bottom: 26px;
    }

    .pkg-features li {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 13.5px;
      color: var(--text-mid);
      padding: 6px 0;
    }

    .pkg-check {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: var(--green-lt);
      color: var(--green);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      flex-shrink: 0;
      margin-top: 1px;
      font-weight: 700;
    }

    .pkg-note {
      /* background: var(--blue-faint); */
      border-left: 3px solid var(--blue-lt);
      padding: 12px 14px;
      border-radius: 0 8px 8px 0;
      font-size: 12.5px;
      color: var(--text-mid);
      margin-bottom: 22px;
      line-height: 1.5;
    }

    .pkg-note-pr {
      font-size: 12.5px;
      color: var(--text-mid);
      margin-bottom: 9px;
      line-height: 1.5;
      display: flex;
      justify-content: space-between;
    }

    .pkg-note strong {
      color: var(--blue);
    }

    .btn-pkg {
      display: block;
      text-align: center;
      background: var(--blue-faint);
      color: var(--blue);
      font-weight: 700;
      font-size: 14px;
      padding: 13px;
      border-radius: 10px;
      text-decoration: none;
      transition: background .2s, color .2s;
      border: 1.5px solid var(--border);
    }

    .pkg-card.featured .btn-pkg {
      background: var(--blue);
      color: #fff;
      border-color: var(--blue);
    }

    .btn-pkg:hover {
      background: var(--blue);
      color: #fff;
      border-color: var(--blue);
    }

    /* ── WHY SECTION ── */
    .why-section {
      background: linear-gradient(135deg, var(--accent) 0%, var(--blue-mid) 100%);
    }

    .why-card {
      background: rgba(255, 255, 255, .1);
      border: 1px solid rgba(255, 255, 255, .18);
      border-radius: 14px;
      padding: 28px 22px;
      color: #fff;
      transition: background .2s;
      height: 100%;
    }

    .why-card:hover {
      background: rgba(255, 255, 255, .15);
    }

    .why-card.highlight {
      background: rgba(105, 240, 174, .12);
      border-color: rgba(105, 240, 174, .25);
    }

    .why-num {
      font-size: 42px;
      font-weight: 800;
      letter-spacing: -2px;
      color: rgba(255, 255, 255, .12);
      line-height: 1;
      margin-bottom: 12px;
    }

    .why-card.highlight .why-num {
      color: rgba(105, 240, 174, .2);
    }

    .why-card h3 {
      font-size: 17px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .why-card p {
      font-size: 14px;
      opacity: .75;
      line-height: 1.65;
      font-weight: 300;
      margin: 0;
    }

    /* ── STEPS ── */
    .step-circle {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #fff;
      border: 2px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 18px;
      font-size: 20px;
      font-weight: 800;
      color: var(--text-muted);
      box-shadow: 0 2px 16px rgba(21, 101, 192, .10);
    }

    .step-item.active .step-circle {
      background: var(--blue);
      border-color: var(--blue);
      color: #fff;
      box-shadow: 0 4px 20px rgba(21, 101, 192, .35);
    }

    .step-item h3 {
      font-size: 15px;
      font-weight: 700;
      margin-bottom: 6px;
    }

    .step-item p {
      font-size: 13px;
      color: var(--text-muted);
      line-height: 1.5;
      margin: 0;
    }

    .steps-line {
      position: absolute;
      top: 30px;
      left: 15%;
      right: 15%;
      height: 2px;
      background: var(--border);
      z-index: 0;
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
      box-shadow: 0 2px 16px rgba(21, 101, 192, .10);
      height: 100%;
    }

    .elig-card h3 {
      font-size: 17px;
      font-weight: 700;
      margin-bottom: 18px;
    }

    .elig-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .elig-list li {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      font-size: 14px;
      color: var(--text-mid);
      padding: 10px 0;
      border-bottom: 1px solid #f0f4f8;
      line-height: 1.5;
    }

    .elig-list li:last-child {
      border-bottom: none;
    }

    .elig-dot {
      width: 22px;
      height: 22px;
      border-radius: 50%;
      background: var(--green-lt);
      color: var(--green);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      flex-shrink: 0;
      margin-top: 1px;
      font-weight: 700;
    }

    .elig-note {
      background: var(--blue-faint);
      border-left: 3px solid var(--blue-lt);
      border-radius: 0 10px 10px 0;
      padding: 16px;
      margin-top: 18px;
      font-size: 14px;
      color: var(--text-mid);
      line-height: 1.6;
    }

    .elig-note strong {
      color: var(--blue);
    }

    /* ── CONTACT ── */
    .contact-item {
      display: flex;
      align-items: center;
      gap: 14px;
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 14px 18px;
    }

    .contact-icon {
      width: 40px;
      height: 40px;
      border-radius: 10px;
      background: var(--blue-faint);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
    }

    .contact-label {
      color: var(--text-muted);
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: .06em;
    }

    .contact-val {
      font-weight: 600;
      color: var(--text);
      font-size: 14px;
    }

    .form-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 36px 30px;
      box-shadow: 0 8px 40px rgba(21, 101, 192, .13);
    }

    .form-card h3 {
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 22px;
    }

    .form-label {
      font-size: 12px;
      font-weight: 600;
      color: var(--text-mid);
      letter-spacing: .04em;
      text-transform: uppercase;
    }

    .form-control,
    .form-select {
      background: #f8fafc;
      border: 1.5px solid var(--border);
      border-radius: 8px;
      font-size: 14px;
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--text);
      padding: 12px 14px;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: var(--blue-lt);
      background: #fff;
      box-shadow: 0 0 0 3px rgba(33, 150, 243, .1);
    }

    .btn-submit {
      width: 100%;
      background: var(--blue);
      color: #fff;
      font-weight: 700;
      font-size: 15px;
      padding: 15px;
      border-radius: 10px;
      border: none;
      font-family: 'Plus Jakarta Sans', sans-serif;
      transition: background .2s, transform .15s;
    }

    .btn-submit:hover {
      background: var(--accent);
      transform: translateY(-1px);
      color: #fff;
    }

    .form-note {
      font-size: 11px;
      color: var(--text-muted);
      margin-top: 10px;
      text-align: center;
    }


    .pkg-header {
      margin: -32px -26px 0;
      /* перекрывает padding карточки */
      padding: 28px 26px 4px 26px;
      border-radius: 12px 12px 0 0;
      background-size: cover;
      background-position: center;
      position: relative;
      overflow: hidden;
      min-height: 90px;
      display: flex;
      align-items: flex-end;
    }

    /* затемняющий оверлей поверх фото */
    .pkg-header-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgb(255 255 255 / 1%) 0%, rgb(255 255 255) 100% 100%);
      border-radius: inherit;
    }

    .pkg-header-content {
      position: relative;
      z-index: 1;
    }

    .pkg-body {
      padding-top: 22px;
    }


    /* ── MISC ── */
    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(24px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-up {
      animation: fadeUp .6s ease both;
    }

    .fade-up-delay {
      animation: fadeUp .6s .15s ease both;
    }

    @media (max-width: 767px) {
      .hero-section h1 {
        font-size: 32px;
      }
    }

    .pkg-accordion {
      margin-bottom: 1.5rem;
    }

    .pkg-acc-item {
      border-bottom: 1px solid #e3f2fd;
    }

    .pkg-acc-toggle {
      display: flex;
      align-items: center;
      width: 100%;
      background: none;
      border: none;
      outline: none;
      padding: 10px 0;
      cursor: pointer;
      transition: background 0.15s;
    }

    .pkg-check {
      color: #43a047;
      font-size: 18px;
      font-weight: bold;
      margin-right: 10px;
    }

    .pkg-acc-title {
      font-weight: 700;
      font-size: 12px;
      letter-spacing: 0.04em;
      margin-right: 8px;
      color: #222;
      text-transform: uppercase;
    }

    .pkg-acc-desc {
      color: #789;
      font-size: 11px;
      margin-right: auto;
    }

    .pkg-acc-arrow {
      width: 0;
      height: 0;
      border-left: 7px solid transparent;
      border-right: 7px solid transparent;
      border-top: 8px solid #90a4ae;
      margin-left: 12px;
      transition: transform 0.25s;
    }

    .pkg-acc-toggle.active .pkg-acc-arrow {
      transform: rotate(180deg);
    }

    .pkg-acc-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
      background: #f8fbff;
      padding: 0 0;
    }

    .pkg-acc-content ul {
      margin: 0 0 10px 32px;
      padding: 0;
    }

    .pkg-acc-content li {
      font-size: 15px;
      margin-bottom: 4px;
    }

    .pkg-acc-toggle:focus {
      background: #f0f7ff;
    }

    .status-modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(13, 27, 42, 0.55);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      z-index: 9999;

      opacity: 0;
      visibility: hidden;
      transition: opacity .25s ease, visibility .25s ease;
    }

    .status-modal-overlay.show {
      opacity: 1;
      visibility: visible;
    }

    .status-modal-box {
      width: 100%;
      max-width: 520px;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 24px 80px rgba(13, 71, 161, 0.20);
      overflow: hidden;
      transform: translateY(20px) scale(.98);
      transition: transform .25s ease;
    }

    .status-modal-overlay.show .status-modal-box {
      transform: translateY(0) scale(1);
    }

    .status-modal-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      padding: 24px 24px 8px;
    }

    .status-modal-title {
      margin: 0;
      font-size: 24px;
      font-weight: 800;
      color: var(--text);
    }

    .status-modal-close {
      width: 40px;
      height: 40px;
      border: none;
      background: #f5f8fc;
      border-radius: 10px;
      font-size: 22px;
      line-height: 1;
      cursor: pointer;
      color: var(--text-mid);
      transition: background .2s ease, color .2s ease;
    }

    .status-modal-close:hover {
      background: #eaf2fb;
      color: var(--accent);
    }

    .status-modal-body {
      padding: 8px 24px 20px;
    }

    .status-modal-footer {
      padding: 0 24px 24px;
      display: flex;
      justify-content: flex-end;
    }

    .status-icon {
      width: 72px;
      height: 72px;
      margin: 0 auto 18px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 34px;
      font-weight: 800;
    }

    .success-icon {
      background: #e8f5e9;
      color: #2e7d32;
    }

    .error-icon {
      background: #ffebee;
      color: #c62828;
    }

    .status-alert {
      border-radius: 14px;
      padding: 16px 18px;
      font-size: 14px;
      line-height: 1.65;
      border: 1px solid var(--border);
    }

    .status-alert-success {
      background: #edf9f3;
      border-color: #b7e4c7;
      color: #1b5e20;
    }

    .status-alert-error {
      background: #fff5f5;
      border-color: #fecaca;
      color: #991b1b;
    }

    .status-alert ul {
      margin: 10px 0 0;
      padding-left: 18px;
    }

    .status-alert li {
      margin-bottom: 6px;
    }

    .status-alert li:last-child {
      margin-bottom: 0;
    }

    .status-modal-btn {
      background: var(--blue);
      color: #fff;
      border: none;
      border-radius: 10px;
      padding: 12px 22px;
      font-size: 14px;
      font-weight: 700;
      cursor: pointer;
      transition: background .2s ease, transform .15s ease;
    }

    .status-modal-btn:hover {
      background: var(--accent);
      transform: translateY(-1px);
    }

    body.modal-open-custom {
      overflow: hidden;
    }
  </style>

</head>

<body>
  {{--

  <body data-bs-theme="dark"> --}}

    @include('layouts.nav')


    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="hero-section">
      <div class="container px-5">
        <div class="row align-items-center g-5 px-lg-5 px-0">
          <div class="col-lg-7 fade-up">
            <div class="hero-badge"><span class="dot"></span>DIMOP Plusz 1.2.6/B-26 pályázat</div>
            <h1>Digitális fejlesztés <em>akár 90%</em> támogatással</h1>
            <p class="lead">A Paksi Informatika 20+ éves tapasztalatával segítünk, hogy a pályázati keretből ne csak
              hardver legyen – hanem egy valóban működő, hatékony digitális vállalkozás.</p>
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
                <div class="hero-stat-lbl">A támogatás 4 részletben előre lehívható</div>

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
          Segítünk a szakmai tartalom összeállításában, hogy neked és a pályázatíródnak egy átláthatóbb, jobban
          előkészített projekttel kelljen dolgoznotok.
        </p>
      </div>
    </div>


    <!-- ═══════════════ MIRE FORDÍTHATÓ ═══════════════ -->
    <section class="py-5" id="mire">
      <div class="container py-4 px-lg-5 px-0">
        <div class="section-label">Felhasználható területek</div>
        <div class="section-title">Mire fordítható a támogatás?</div>
        <p class="section-sub mb-5">Eszközökre, szoftverekre, szolgáltatásokra és képzésre egyaránt – nem csupán
          beszerzésre, hanem valódi fejlesztésre.</p>

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
        <p class="section-sub mb-5">Három előre összerakott csomag, amely a legtöbb vállalkozás igényét lefedi. De ha
          valami más kell – egyeztessünk.</p>


        <div class="row g-4 align-items-stretch">
          <!-- Digital Start -->
          <div class="col-lg-4">
            <div class="pkg-card">
              <!-- <div class="pkg-name">Kereskedői csomag:</div> -->
              <div class="pkg-header" style="background-image: url('./assets/title-11.png');">
                <div class="pkg-header-overlay"></div>
                <div class="pkg-header-content d-flex align-items-center gap-3">
                  <svg style="margin-bottom: 10px;" height="48" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <path
                        d="M4.5 9.5C4.5 5.35786 7.85786 2 12 2C16.1421 2 19.5 5.35786 19.5 9.5C19.5 11.7206 18.5349 13.7159 17.0012 15.0892C15.8805 16.0927 15.3201 16.5945 15.1692 16.7807C14.6824 17.3815 14.6609 17.4296 14.5381 18.193C14.5 18.4297 14.5 18.7865 14.5 19.5C14.5 20.4346 14.5 20.9019 14.299 21.25C14.1674 21.478 13.978 21.6674 13.75 21.799C13.4019 22 12.9346 22 12 22C11.0654 22 10.5981 22 10.25 21.799C10.022 21.6674 9.83261 21.478 9.70096 21.25C9.5 20.9019 9.5 20.4346 9.5 19.5C9.5 18.7865 9.5 18.4297 9.46192 18.193C9.3391 17.4296 9.31762 17.3815 8.83082 16.7807C8.67987 16.5945 8.11945 16.0927 6.99876 15.0892C5.4651 13.7159 4.5 11.7206 4.5 9.5Z"
                        stroke="#2196f3" stroke-width="1.5"></path>
                      <path opacity="0.5" d="M14.5 19.5H9.5" stroke="#2196f3" stroke-width="1.5"></path>
                      <path opacity="0.5" d="M12.7855 8.5L10.6426 11.5H13.6426L11.4998 14.5" stroke="#2196f3"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                  </svg>
                  <div>
                    <div class="pkg-title" style="color:#2196f3; margin:0;">SmartOffice AI</div>
                    <p>Digitális irodai csomag</p>
                  </div>
                </div>
              </div> <!-- <div class="pkg-sub">1-2 fős vállalkozásoknak</div> -->
              <div class="pkg-body"></div>
              <div class="pkg-accordion">
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">HARDVER</span>
                    <span class="pkg-acc-desc">(ügyfél által választott)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Modern irodai eszközök (laptop, monitor, mobil)</li>
                      <li>Hybrid munkavégzés támogatása</li>
                    </ul>
                  </div>
                </div>
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Szoftver</span>
                    <span class="pkg-acc-desc">(Microsoft 365 + Copilot AI)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Teams, Outlook, SharePoint </li>
                      <li>AI (Copilot) dokumentum- és e-mail kezelés </li>
                      <li>Felhő alapú együttműködés</li>
                    </ul>
                  </div>
                </div>
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Szolgáltatás</span>
                    <span class="pkg-acc-desc">(Kialakítás, Bevezetés, Üzemeltetés)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Microsoft 365 bevezetés</li>
                      <li>AI workflow kialakítás</li>
                      <li>Dokumentumkezelés és kollaboráció</li>
                    </ul>
                  </div>
                </div>
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Képzés</span>
                    <span class="pkg-acc-desc">(Használat, Kezelés, IKT oktatás)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Copilot használat</li>
                      <li>Csapatmunka eszközök</li>
                      <li>Digitális hatékonyság növelése</li>
                    </ul>
                  </div>
                </div>
              </div>



              <div class="pkg-note-pr"><strong>Hardver:</strong> 3 300 000 Ft</div>
              <div class="pkg-note-pr"><strong>Szoftver:</strong> 1 320 000 Ft / 12 hó</div>
              <div class="pkg-note-pr"><strong>Szolgáltatás:</strong> 5 940 000 Ft</div>
              <div class="pkg-note-pr"><strong>Képzés:</strong> 1 980 000 Ft</div>

              <div class="pkg-note"><strong>Projektérték:</strong> 13 200 000 M Ft</div>

              <a href="#kapcsolat" class="btn-pkg mt-4" data-service="SmartOffice AI csomag">Érdekel ez a csomag</a>
            </div>
          </div>

          <!-- Digital Pro -->
          <div class="col-lg-4">
            <div class="pkg-card featured">
              <div class="pkg-header" style="background-image: url('./assets/title-22.png');">
                <div class="pkg-header-overlay"></div>
                <div class="pkg-header-content d-flex align-items-center gap-3">
                  <svg style="margin-bottom: 10px;" height="48" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <path
                        d="M9.50004 2H14.5L15.1518 8.51737C15.3382 10.382 13.874 12 12 12C10.1261 12 8.66184 10.382 8.8483 8.51737L9.50004 2Z"
                        stroke="#2196f3" stroke-width="1.5"></path>
                      <path
                        d="M3.32975 5.35133C3.50783 4.46093 3.59687 4.01573 3.77791 3.65484C4.15938 2.89439 4.84579 2.33168 5.66628 2.10675C6.05567 2 6.50969 2 7.41771 2H9.50002L8.77549 9.24527C8.61911 10.8091 7.30318 12 5.73155 12C3.8011 12 2.35324 10.2339 2.73183 8.34093L3.32975 5.35133Z"
                        stroke="#2196f3" stroke-width="1.5"></path>
                      <path
                        d="M20.6703 5.35133C20.4922 4.46093 20.4031 4.01573 20.2221 3.65484C19.8406 2.89439 19.1542 2.33168 18.3337 2.10675C17.9443 2 17.4903 2 16.5823 2H14.5L15.2245 9.24527C15.3809 10.8091 16.6968 12 18.2685 12C20.1989 12 21.6468 10.2339 21.2682 8.34093L20.6703 5.35133Z"
                        stroke="#2196f3" stroke-width="1.5"></path>
                      <path opacity="0.5"
                        d="M8.75 21.5C8.75 21.9142 9.08579 22.25 9.5 22.25C9.91421 22.25 10.25 21.9142 10.25 21.5H8.75ZM13.75 21.5C13.75 21.9142 14.0858 22.25 14.5 22.25C14.9142 22.25 15.25 21.9142 15.25 21.5H13.75ZM13.75 16.201L14.125 15.5514L13.75 16.201ZM14.299 16.75L13.6495 17.125V17.125L14.299 16.75ZM9.70096 16.75L10.3505 17.125L9.70096 16.75ZM10.25 16.201L10.625 16.8505L10.25 16.201ZM12.5 21.25H11.5V22.75H12.5V21.25ZM4.25 14V11H2.75V14H4.25ZM19.75 11V14H21.25V11H19.75ZM11.5 21.25C9.59318 21.25 8.23851 21.2484 7.21085 21.1102C6.20476 20.975 5.62511 20.7213 5.2019 20.2981L4.14124 21.3588C4.88961 22.1071 5.83855 22.4392 7.01098 22.5969C8.16182 22.7516 9.63558 22.75 11.5 22.75V21.25ZM2.75 14C2.75 15.8644 2.74841 17.3382 2.90313 18.489C3.06076 19.6614 3.39288 20.6104 4.14124 21.3588L5.2019 20.2981C4.77869 19.8749 4.52502 19.2952 4.38976 18.2892C4.25159 17.2615 4.25 15.9068 4.25 14H2.75ZM12.5 22.75C14.3644 22.75 15.8382 22.7516 16.989 22.5969C18.1614 22.4392 19.1104 22.1071 19.8588 21.3588L18.7981 20.2981C18.3749 20.7213 17.7952 20.975 16.7892 21.1102C15.7615 21.2484 14.4068 21.25 12.5 21.25V22.75ZM19.75 14C19.75 15.9068 19.7484 17.2615 19.6102 18.2892C19.475 19.2952 19.2213 19.8749 18.7981 20.2981L19.8588 21.3588C20.6071 20.6104 20.9392 19.6614 21.0969 18.489C21.2516 17.3382 21.25 15.8644 21.25 14H19.75ZM10.25 21.5V18.5H8.75V21.5H10.25ZM13.75 18.5V21.5H15.25V18.5H13.75ZM12 16.75C12.4811 16.75 12.7918 16.7507 13.0273 16.7721C13.2524 16.7925 13.3341 16.8269 13.375 16.8505L14.125 15.5514C13.8178 15.3741 13.4918 15.308 13.1627 15.2782C12.8438 15.2493 12.4535 15.25 12 15.25V16.75ZM15.25 18.5C15.25 18.0465 15.2507 17.6562 15.2218 17.3373C15.192 17.0082 15.1259 16.6822 14.9486 16.375L13.6495 17.125C13.6731 17.1659 13.7075 17.2476 13.7279 17.4727C13.7493 17.7082 13.75 18.0189 13.75 18.5H15.25ZM13.375 16.8505C13.489 16.9163 13.5837 17.011 13.6495 17.125L14.9486 16.375C14.7511 16.033 14.467 15.7489 14.125 15.5514L13.375 16.8505ZM10.25 18.5C10.25 18.0189 10.2507 17.7082 10.2721 17.4727C10.2925 17.2476 10.3269 17.1659 10.3505 17.125L9.05144 16.375C8.87407 16.6822 8.80802 17.0082 8.77818 17.3373C8.74928 17.6562 8.75 18.0465 8.75 18.5H10.25ZM12 15.25C11.5465 15.25 11.1562 15.2493 10.8373 15.2782C10.5082 15.308 10.1822 15.3741 9.875 15.5514L10.625 16.8505C10.6659 16.8269 10.7476 16.7925 10.9727 16.7721C11.2082 16.7507 11.5189 16.75 12 16.75V15.25ZM10.3505 17.125C10.4163 17.011 10.511 16.9163 10.625 16.8505L9.875 15.5514C9.53296 15.7489 9.24892 16.033 9.05144 16.375L10.3505 17.125Z"
                        fill="#2196f3"></path>
                    </g>
                  </svg>
                  <div>
                    <div class="pkg-title" style="color:#2196f3; margin:0;">ShopMaster</div>
                    <p>Kereskedői csomag</p>

                  </div>
                </div>

              </div>
              <div class="pkg-body"></div>
              <div class="pkg-accordion">
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">HARDVER</span>
                    <span class="pkg-acc-desc">(ügyfél által választott)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Raktári és irodai eszközök (tablet, laptop, vonalkód, nyomtató)</li>
                      <li>Webshop és készletkezelés kiszolgálása</li>
                    </ul>
                  </div>
                </div>
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Szoftver</span>
                    <span class="pkg-acc-desc">(UNAS + ERP + alap AI)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Webshop rendszer</li>
                      <li>Készlet- és raktárkezelés</li>
                      <li>Számlázás és rendeléskezelés</li>
                      <li>Automatizált működés</li>
                    </ul>
                  </div>
                </div>
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Szolgáltatás</span>
                    <span class="pkg-acc-desc">(Kialakítás, Bevezetés, Üzemeltetés)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Webshop + ERP integráció</li>
                      <li>Raktári folyamatok digitalizálása</li>
                      <li>Cloud és IT háttér biztosítása</li>
                    </ul>
                  </div>
                </div>
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Képzés</span>
                    <span class="pkg-acc-desc">(Használat, Kezelés, IKT oktatás)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Webshop kezelés</li>
                      <li>Készletkezelés</li>
                      <li>Napi működés betanítása</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- <div class="pkg-note"><strong>Projektérték:</strong> ~13 M Ft · Önerő kb. 10%</div> -->

              <div class="pkg-note-pr"><strong>Hardver:</strong> 3 300 000 Ft</div>
              <div class="pkg-note-pr"><strong>Szoftver:</strong> 1 320 000 Ft / 12 hó</div>
              <div class="pkg-note-pr"><strong>Szolgáltatás:</strong> 5 940 000 Ft</div>
              <div class="pkg-note-pr"><strong>Képzés:</strong> 1 980 000 Ft</div>

              <div class="pkg-note"><strong>Projektérték:</strong> 13 200 000 M Ft</div>

              <a href="#kapcsolat" class="btn-pkg" data-service="ShopMaster Kereskedői csomag">Érdekel ez a csomag</a>
            </div>
          </div>

          <!-- Digital Max -->
          <div class="col-lg-4">
            <div class="pkg-card">
              <div class="pkg-header" style="background-image: url('./assets/title-33.png');">
                <div class="pkg-header-overlay"></div>
                <div class="pkg-header-content d-flex align-items-center gap-3">

                  <svg style="margin-bottom: 10px;" height="48" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <path
                        d="M3 9C3 6.17157 3 4.75736 3.87868 3.87868C4.75736 3 6.17157 3 9 3H15C17.8284 3 19.2426 3 20.1213 3.87868C21 4.75736 21 6.17157 21 9V14C21 15.8856 21 16.8284 20.4142 17.4142C19.8284 18 18.8856 18 17 18H7C5.11438 18 4.17157 18 3.58579 17.4142C3 16.8284 3 15.8856 3 14V9Z"
                        stroke="#2196f3" stroke-width="1.5"></path>
                      <path opacity="0.5" d="M22 21H2" stroke="#2196f3" stroke-width="1.5" stroke-linecap="round">
                      </path>
                      <path opacity="0.5" d="M15 15H9" stroke="#2196f3" stroke-width="1.5" stroke-linecap="round">
                      </path>
                    </g>
                  </svg>

                  <div>
                    <div class="pkg-title" style="color:#2196f3; margin:0;">ERP CRM AI</div>
                    <p>Moduláris vállalatirányítási csomag</p>
                  </div>
                </div>
              </div>
              <div class="pkg-body"></div>
              <div class="pkg-accordion">
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">HARDVER</span>
                    <span class="pkg-acc-desc">(ügyfél által választott)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Irodai és adminisztrációs eszközök</li>
                      <li>ERP rendszer kiszolgálása</li>
                    </ul>
                  </div>
                </div>
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Szoftver</span>
                    <span class="pkg-acc-desc">(Moduláris ERP rendszer)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Készlet, pénzügy, partnerkezelés</li>
                      <li>Számlázás és riportok</li>
                      <li>Moduláris bővíthetőség (csak amit használ)</li>
                    </ul>
                  </div>
                </div>
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Szolgáltatás</span>
                    <span class="pkg-acc-desc">(Kialakítás, Bevezetés, Üzemeltetés)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>ERP rendszer testreszabása</li>
                      <li>Folyamatok digitalizálása</li>
                      <li>Integrációk és automatizálás</li>
                    </ul>
                  </div>
                </div>
                <div class="pkg-acc-item">
                  <button class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Képzés</span>
                    <span class="pkg-acc-desc">(Használat, Kezelés, IKT oktatás)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>ERP modulok használata</li>
                      <li>Napi működés és riportok</li>
                      <li>Vezetői döntéstámogatás</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- <div class="pkg-note"><strong>Projektérték:</strong> ~13 M Ft · Önerő kb. 10%</div> -->

              <div class="pkg-note-pr"><strong>Hardver:</strong> 3 300 000 Ft</div>
              <div class="pkg-note-pr"><strong>Szoftver:</strong> 1 320 000 Ft / 12 hó</div>
              <div class="pkg-note-pr"><strong>Szolgáltatás:</strong> 5 940 000 Ft</div>
              <div class="pkg-note-pr"><strong>Képzés:</strong> 1 980 000 Ft</div>

              <div class="pkg-note"><strong>Projektérték:</strong> 13 200 000 M Ft</div>
              <a href="#kapcsolat" class="btn-pkg" data-service="ERP CRM AI Moduláris vállalatirányítási csomag">Érdekel
                ez a csomag</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pb-5" id="mire">
      <div class="container py-4 px-lg-5 px-0">

        <!-- USP Banner -->
        <div class="usp-banner align-items-start gap-4">

          <div class="row">
            <div class="col-12 col-lg-9">

              <div class="d-flex align-items-start gap-3">
                <div class="usp-icon">💡</div>

                <div>
                  <h2 class="mb-1">Valami másra gondoltál?</h2>
                  <p class="mb-0">
                    Ha a fejlesztési célod nem illik pontosan a fenti csomagokba alakítsuk ki eggyütt!
                  </p>
                </div>
              </div>

            </div>

            <div class="col-12 col-lg-3">
              <a style="background:#1565c0; color:white;" href="#kapcsolat"
                data-service="Alakítsuk ki eggyütt a csomagot" class="btn-pkg mt-2">
                Kérek ingyenes konzultációt
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════ MIÉRT MI ═══════════════ -->
    <section class="py-5 why-section" id="miert-mi">
      <div class="container py-4">
        <div class="section-label" style="color:rgba(255,255,255,.6)">Miért a Paksi Informatika?</div>
        <div class="section-title text-white">Nem csak kivitelezünk –<br>gondolkodunk és tervezünk</div>
        <p class="section-sub mb-5" style="color:rgba(255,255,255,.65)">20+ éves tapasztalat, helyi jelenlét, valódi
          tanácsadás – ezért döntenek mellettünk.</p>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="why-card highlight">
              <div class="why-num">01</div>
              <h3>Nincs lehetetlen fejlesztési cél</h3>
              <p>Ha az Ön igénye kilóg a sztenderd kategóriákból, mi megtaláljuk a legális és szakmailag megalapozott
                utat. Nálunk mindig van megoldás.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="why-card">
              <div class="why-num">02</div>
              <h3>20+ év tapasztalat</h3>
              <p>Több mint két évtizede támogatjuk a Magyarország kis- és középvállalkozásait. Tudjuk, mi működik a
                valóságban – nem csak papíron.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="why-card">
              <div class="why-num">03</div>
              <h3>Tanácsadás és megvalósítás egy kézben</h3>
              <p>A pályázat során végig melletted állunk: a megírástól és benyújtástól a szakmai tartalom összeállításán
                át a nyertes projekt megvalósításáig.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="why-card">
              <div class="why-num">04</div>
              <h3>Országos lefedettség, gyors reakció</h3>
              <p>Nem egy névtelen call center, hanem egy szervezett csapat, amely saját és partneri erőforrásokkal is
                gyorsan és hatékonyan reagál.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="why-card">
              <div class="why-num">05</div>
              <h3>Pályázati keret maximális kihasználása</h3>
              <p>Célunk, hogy a rendelkezésre álló keretből a lehető legtöbbet hozd ki – minden forint számít.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="why-card">
              <div class="why-num">06</div>
              <h3>Hosszú távú partner</h3>
              <p>A bevezetés után sem maradsz egyedül: folyamatos üzemeltetési és fejlesztési támogatással biztosítjuk a
                fenntartható működést.</p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- ═══════════════ JOGOSULTSÁG ═══════════════ -->
    <section class="py-5" id="jogosultsag">
      <div class="container py-4">
        <div class="section-label">Jogosultság</div>
        <div class="section-title">Neked szól ez a pályázat?</div>
        <p class="section-sub mb-5">Gyorsan ellenőrizd, hogy a vállalkozásod belefér-e a célcsoportba.</p>

        <div class="row g-4">
          <div class="col-lg-6">
            <div class="elig-card">
              <h3>✅ Jellemzően jogosult, ha...</h3>
              <ul class="elig-list">
                <li><span class="elig-dot">✓</span>Mikro- vagy kisvállalkozást üzemeltetsz (max. 50 fő)</li>
                <li><span class="elig-dot">✓</span>Van legalább 1 lezárt üzleti éved</li>
                <li><span class="elig-dot">✓</span>A fejlesztést magyarországi telephelyen valósítod meg</li>
                <li><span class="elig-dot">✓</span>Kevésbé fejlett régióban működsz (pl. Dél-Dunántúl)</li>
                <li><span class="elig-dot">✓</span>A vállalkozásod digitális fejlettsége még alacsonyabb szinten van
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="elig-card">
              <h3>❓ Nem vagy biztos benne?</h3>
              <ul class="elig-list">
                <li><span class="elig-dot">→</span>Nem egyértelmű a vállalkozásod méretkategóriája</li>
                <li><span class="elig-dot">→</span>Speciális iparágban működsz</li>
                <li><span class="elig-dot">→</span>Egyedi fejlesztési igényed van, ami nem illik a kategóriákba</li>
                <li><span class="elig-dot">→</span>Több telephellyel vagy összetett cégstruktúrával működsz</li>
              </ul>
              <div class="elig-note">
                <strong>Ne add fel azonnal!</strong> Vedd fel velünk a kapcsolatot. 20+ év tapasztalattal szinte minden
                esetre van megoldás.
              </div>
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
            <p>Összerakjuk a szakmai tartalmat</p>
          </div>
          <div class="col-6 col-lg-3 text-center step-item" style="position:relative; z-index:1">
            <div class="step-circle">03</div>
            <h3>Elkészítés és Beadás</h3>
            <p>Elkészítjük és beadjuk pályázatot</p>
          </div>
          <div class="col-6 col-lg-3 text-center step-item" style="position:relative; z-index:1">
            <div class="step-circle">04</div>
            <h3>Megvalósítás és üzemeltetés</h3>
            <p>Leszállítjuk, bevezetjük – és utána is támogatunk.</p>
          </div>
        </div>
      </div>
    </section>




    <!-- CONTACT FORM -->

    <div class="container col-xl-12 col-xxl-12" data-aos="fade-up" id="kapcsolat">
      <div class="row align-items-center g-lg-5 py-5">

        <div class="col-md-10 mx-auto col-lg-6">
          <form action="{{ route('contact.submit') }}" method="POST"
            class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
            @csrf

            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input name="name" class="form-control" id="floatingInput" placeholder="{{ __('menu.name') }}"
                    required>
                  <label for="floatingInput">{{ __('menu.name') }}</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input name="company" class="form-control" id="floatingCompany" placeholder="Cég neve">
                  <label for="floatingCompany">Cég neve</label>
                </div>
              </div>
            </div>

            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input name="phone" type="tel" class="form-control" id="floatingPhone" placeholder="Telefonszám">
                  <label for="floatingPhone">Telefonszám</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input name="email" class="form-control" id="floatingEmail" placeholder="name@example.com" required>
                  <label for="floatingEmail">{{ __('menu.mail') }}</label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="message" class="form-label ms-2">{{ __('menu.short_decription_message') }}</label>
              <textarea name="message" id="inputMessage" class="form-control" rows="2" required></textarea>

              <input type="hidden" name="service" id="selectedService">
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

            <button class="w-100 btn btn-lg btn-primary" type="submit">Lépjen velünk kapcsolatba!</button>
          </form>
        </div>


        <div class="col-lg-6 text-center text-lg-start">

          {{-- @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
          @endif --}}



          <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3 mt-5 mt-md-0">Kezdjük el <span
              class="text-primary">együtt</span>!</h1>
          <p class="col-lg-10 fs-4">
            Ingyenes konzultáció – kötelezettség nélkül.
          </p>
          <p class="col-lg-10 fs-8">
            Mondd el a vállalkozásod helyzetét, és megmutatjuk, hogyan tudunk segíteni a DIMOP Plusz pályázatban. Nincs
            kötelezettség, csak lehetőség.
          </p>

          <div class="d-flex flex-column gap-3 col-lg-10">
            <div class="contact-item">
              <div class="contact-icon">📞</div>
              <div>
                <div class="contact-label">Telefon</div>
                <div class="contact-val">
                  <a href="tel:+36707021252">+36 70 702 1252</a>
                </div>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-icon">✉️</div>
              <div>
                <div class="contact-label">E-mail</div>
                <div class="contact-val">
                  <a href="mailto:info@pikft.hu">info@pikft.hu</a>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>

    <!-- END CONTACT FORM -->

    <!-- FOOTER -->

    <!-- @include('layouts.footer') -->

    <section class="py-8 py-md-11 mb-5 mt-3">
      <div class="container">
        <div class="row justify-content-center align-items-center text-center g-4">
          <div class="col-12 col-lg-6" data-aos="fade-up">
            <img src="{{ asset('/dell.jpg') }}" class="img-fluid" style="max-height:70px"
              alt="Dell authorized partners">
          </div>
          <div class="col-12 col-lg-6" data-aos="fade-up">
            <img src="{{ asset('/microsoft.png') }}" class="img-fluid" style="max-height:70px" alt="Microsoft partner">
          </div>
        </div>
      </div>
    </section>

    <div class="container" data-aos="">
      <footer class="pt-5">
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 mt-4 border-top">
          <p>
            <img class="mb-1" src="favicon.ico" height="22" alt="">
            © 2025 Paksi Informatika. {{__('menu.all_rights_reserved')}}
          </p>
          <ul class="list-unstyled d-flex">

            <li class="ms-3 me-3">
              <a href="{{ route('gdpr') }}" target="blank">
                Adatkezelési feltételek
              </a>
            </li>
          </ul>
        </div>
      </footer>
    </div>
    <!-- TOP BUTTON  -->
    <button type="button" class="btn btn-outline-primary btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>


    <script>
      document.querySelectorAll('.btn-pkg').forEach(function (btn) {
        btn.addEventListener('click', function () {
          const service = this.dataset.service;

          // Скрытый инпут
          document.getElementById('selectedService').value = service;

          // Текст в textarea
          document.getElementById('inputMessage').value = 'Érdeklődöm a következő csomag iránt: ' + service;
        });
      });

      document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.pkg-acc-toggle').forEach(function (btn) {
          btn.addEventListener('click', function () {
            btn.classList.toggle('active');
            const content = btn.parentElement.querySelector('.pkg-acc-content');
            if (content.style.maxHeight) {
              content.style.maxHeight = null;
            } else {
              content.style.maxHeight = content.scrollHeight + 'px';
            }
          });
        });
      });

      document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.btn-pkg').forEach(function (btn) {
          btn.addEventListener('click', function () {
            const service = this.dataset.service;

            const selectedService = document.getElementById('selectedService');
            const inputMessage = document.getElementById('inputMessage');

            if (selectedService) {
              selectedService.value = service;
            }

            if (inputMessage) {
              inputMessage.value = 'Érdeklődöm a következő csomag iránt: ' + service;
            }
          });
        });

        document.querySelectorAll('.pkg-acc-toggle').forEach(function (btn) {
          btn.addEventListener('click', function () {
            btn.classList.toggle('active');
            const content = btn.parentElement.querySelector('.pkg-acc-content');

            if (content.style.maxHeight) {
              content.style.maxHeight = null;
            } else {
              content.style.maxHeight = content.scrollHeight + 'px';
            }
          });
        });

        const modal = document.getElementById('formStatusModal');
        const closeBtn = document.getElementById('closeStatusModal');
        const okBtn = document.getElementById('okStatusModal');

        function closeModal() {
          if (!modal) return;
          modal.classList.remove('show');
          document.body.classList.remove('modal-open-custom');
        }

        if (modal) {
          setTimeout(function () {
            modal.classList.add('show');
            document.body.classList.add('modal-open-custom');
          }, 50);

          if (closeBtn) {
            closeBtn.addEventListener('click', closeModal);
          }

          if (okBtn) {
            okBtn.addEventListener('click', closeModal);
          }

          modal.addEventListener('click', function (e) {
            if (e.target === modal) {
              closeModal();
            }
          });

          document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
              closeModal();
            }
          });
        }
      });
    </script>


    @if (session('success') || $errors->any())
      <div class="status-modal-overlay" id="formStatusModal">
        <div class="status-modal-box" role="dialog" aria-modal="true" aria-labelledby="formStatusModalTitle">
          <div class="status-modal-header">
            <h2 class="status-modal-title" id="formStatusModalTitle">
              @if (session('success'))
                Sikeres üzenetküldés!
              @else
                Kérjük, ellenőrizd az adatokat
              @endif
            </h2>

            <button type="button" class="status-modal-close" id="closeStatusModal" aria-label="Bezárás">
              ×
            </button>
          </div>

          <div class="status-modal-body">
            @if (session('success'))
              <div class="status-icon success-icon">✓</div>
              <div class="status-alert status-alert-success">
                {{ session('success') }}
              </div>
            @endif

            @if ($errors->any())
              <div class="status-icon error-icon">!</div>
              <div class="status-alert status-alert-error">
                <strong>A beküldés nem sikerült:</strong>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
          </div>

          <div class="status-modal-footer">
            <button type="button" class="status-modal-btn" id="okStatusModal">
              Rendben
            </button>
          </div>
        </div>
      </div>
    @endif
  </body>

</html>