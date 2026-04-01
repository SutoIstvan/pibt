<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Paksi Informatika – weboldal, webfejlesztés, webáruház, rendszerüzemeltetés, távmunka, felhős megoldások, pályázati és DIMOP támogatás cégeknek">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'DIMOP Plusz digitális fejlesztés | Paksi Informatika')</title>

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  @include('layouts.gtag')


  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <style>
    :root {
      --bs-font-sans-serif: 'Plus Jakarta Sans', sans-serif;
      --blue: #1565c0;
      --blue-mid: #1976d2;
      --blue-lt: #2196f3;
      --blue-pale: #e3f2fd;
      --blue-faint: #f5faff;
      --accent: #0d47a1;
      --green: #00897b;
      --green-lt: #e0f2f1;
      --text: #0d1b2a;
      --text-mid: #3a4a5c;
      --text-muted: #6b7c93;
      --border: #d0dce8;
      --white: #ffffff;
      --danger: #c62828;
      --danger-bg: #ffebee;
      --success: #2e7d32;
      --success-bg: #e8f5e9;
      --shadow-sm: 0 8px 24px rgba(21, 101, 192, .08);
      --shadow-md: 0 16px 40px rgba(21, 101, 192, .12);
      --shadow-lg: 0 24px 80px rgba(13, 71, 161, .18);
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--text);
      background: #fff;
      overflow-x: hidden;
    }

    a {
      color: var(--blue);
      text-decoration: none;
    }

    a:hover {
      color: var(--accent);
    }

    section {
      position: relative;
    }

    .section-label {
      font-size: 12px;
      font-weight: 700;
      letter-spacing: .14em;
      text-transform: uppercase;
      color: var(--blue-lt);
      margin-bottom: 12px;
    }

    .section-title {
      font-size: clamp(30px, 4vw, 42px);
      letter-spacing: -1.4px;
      line-height: 1.1;
      margin-bottom: 16px;
      font-weight: 800;
    }

    .section-sub {
      font-size: 16px;
      color: var(--text-mid);
      line-height: 1.75;
      max-width: 760px;
    }

    /* HERO */
    .hero-section {
      background:
        radial-gradient(circle at top right, rgba(255, 255, 255, .08) 0%, transparent 26%),
        linear-gradient(135deg, var(--accent) 0%, var(--blue-mid) 55%, var(--blue-lt) 100%);
      color: #fff;
      padding: 88px 0 108px;
      overflow: hidden;
      position: relative;
    }

    .hero-section::before {
      content: '';
      position: absolute;
      top: -80px;
      right: -60px;
      width: 520px;
      height: 520px;
      background: radial-gradient(circle, rgba(255, 255, 255, .08) 0%, transparent 68%);
      pointer-events: none;
    }

    .hero-section::after {
      content: '';
      position: absolute;
      left: -120px;
      bottom: -120px;
      width: 320px;
      height: 320px;
      background: radial-gradient(circle, rgba(105, 240, 174, .12) 0%, transparent 70%);
      pointer-events: none;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, .14);
      border: 1px solid rgba(255, 255, 255, .22);
      padding: 8px 16px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
      margin-bottom: 22px;
      backdrop-filter: blur(10px);
    }

    .hero-badge .dot {
      width: 8px;
      height: 8px;
      background: #69f0ae;
      border-radius: 50%;
      box-shadow: 0 0 0 5px rgba(105, 240, 174, .15);
    }

    .hero-section h1 {
      font-size: clamp(34px, 5vw, 56px);
      letter-spacing: -1.8px;
      line-height: 1.05;
      margin-bottom: 20px;
      font-weight: 800;
    }

    .hero-section h1 em {
      font-style: normal;
      color: #69f0ae;
    }

    .hero-section .lead {
      font-size: 18px;
      opacity: .9;
      font-weight: 300;
      line-height: 1.75;
      margin-bottom: 34px;
      max-width: 700px;
    }

    .hero-points {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 34px;
    }

    .hero-point {
      background: rgba(255, 255, 255, .12);
      border: 1px solid rgba(255, 255, 255, .18);
      padding: 10px 14px;
      border-radius: 999px;
      font-size: 13px;
      font-weight: 600;
      color: #fff;
      backdrop-filter: blur(8px);
    }

    .btn-hero-white,
    .btn-hero-outline {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 52px;
      padding: 14px 28px;
      border-radius: 12px;
      font-size: 15px;
      font-weight: 700;
      text-decoration: none;
      transition: .18s ease;
    }

    .btn-hero-white {
      background: #fff;
      color: var(--blue);
      border: none;
      box-shadow: 0 8px 30px rgba(0, 0, 0, .14);
    }

    .btn-hero-white:hover {
      color: var(--blue);
      transform: translateY(-2px);
      box-shadow: 0 14px 36px rgba(0, 0, 0, .18);
    }

    .btn-hero-outline {
      background: rgba(255, 255, 255, .08);
      color: #fff;
      border: 1.5px solid rgba(255, 255, 255, .45);
      backdrop-filter: blur(8px);
    }

    .btn-hero-outline:hover {
      color: #fff;
      background: rgba(255, 255, 255, .14);
      transform: translateY(-2px);
    }

    .hero-stat-card {
      background: rgba(255, 255, 255, .12);
      border: 1px solid rgba(255, 255, 255, .20);
      border-radius: 22px;
      padding: 30px 26px;
      backdrop-filter: blur(12px);
      color: #fff;
      box-shadow: 0 20px 60px rgba(0, 0, 0, .12);
    }

    .hero-stat-card .card-label {
      font-size: 12px;
      font-weight: 700;
      letter-spacing: .1em;
      text-transform: uppercase;
      opacity: .7;
      margin-bottom: 20px;
    }

    .hero-stat-num {
      font-size: 38px;
      letter-spacing: -1.5px;
      color: #69f0ae;
      line-height: 1;
      font-weight: 800;
    }

    .hero-stat-lbl {
      font-size: 13px;
      opacity: .82;
      margin-top: 4px;
      font-weight: 400;
      line-height: 1.5;
    }

    .hero-divider {
      height: 1px;
      background: rgba(255, 255, 255, .15);
      margin: 18px 0;
    }

    .hero-deadline {
      background: rgba(105, 240, 174, .12);
      border: 1px solid rgba(105, 240, 174, .26);
      border-radius: 12px;
      padding: 14px 16px;
      font-size: 13px;
      line-height: 1.6;
    }

    .hero-deadline strong {
      color: #69f0ae;
    }

    /* TRUST STRIP */
    .trust-strip {
      margin-top: -42px;
      position: relative;
      z-index: 10;
    }

    .trust-strip-inner {
      background: rgba(255, 255, 255, .92);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(208, 220, 232, .85);
      border-radius: 22px;
      padding: 18px;
      box-shadow: var(--shadow-md);
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
    }

    .trust-pill {
      background: #fff;
      border: 1px solid #e7eef6;
      border-radius: 16px;
      padding: 14px 16px;
    }

    .trust-pill strong {
      display: block;
      font-size: 18px;
      color: var(--accent);
      font-weight: 800;
      margin-bottom: 4px;
    }

    .trust-pill span {
      display: block;
      font-size: 13px;
      color: var(--text-mid);
      line-height: 1.5;
    }

    /* INTRO */
    .intro-box {
      background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
      border: 1px solid #e6f0fa;
      border-radius: 22px;
      padding: 28px;
      box-shadow: var(--shadow-sm);
    }

    /* GENERAL CARDS */
    .cat-card,
    .info-card,
    .elig-card,
    .faq-item,
    .contact-panel,
    .process-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 18px;
      box-shadow: var(--shadow-sm);
    }

    .cat-card {
      padding: 26px 20px;
      height: 100%;
      transition: transform .2s ease, box-shadow .2s ease;
    }

    .cat-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-md);
    }

    .cat-icon {
      width: 48px;
      height: 48px;
      background: var(--blue-faint);
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      flex-shrink: 0;
    }

    .cat-card h3 {
      font-size: 16px;
      font-weight: 800;
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
      padding: 8px 0;
      border-bottom: 1px solid #eef4fa;
      display: flex;
      align-items: flex-start;
      gap: 10px;
      line-height: 1.55;
    }

    .cat-list li:last-child {
      border-bottom: none;
    }

    .cat-list li::before {
      content: '';
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--blue-lt);
      flex-shrink: 0;
      margin-top: 9px;
    }

    /* PACKAGE SECTION */
    .pkg-card {
      background: #fff;
      border: 1.5px solid var(--border);
      border-radius: 22px;
      padding: 30px 24px 24px;
      box-shadow: var(--shadow-sm);
      position: relative;
      transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
      height: 100%;
      overflow: hidden;
    }

    .pkg-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-md);
    }

    .pkg-card.featured {
      border-color: var(--blue-lt);
      box-shadow: 0 16px 50px rgba(33, 150, 243, .18);
    }

    .pkg-popular {
      position: absolute;
      top: 18px;
      right: 18px;
      background: var(--blue-lt);
      color: #fff;
      font-size: 11px;
      font-weight: 800;
      letter-spacing: .08em;
      text-transform: uppercase;
      padding: 8px 12px;
      border-radius: 999px;
      z-index: 3;
    }

    .pkg-header {
      margin: -30px -24px 0;
      padding: 28px 24px 18px;
      background-size: cover;
      background-position: center;
      position: relative;
      overflow: hidden;
      min-height: 116px;
      display: flex;
      align-items: flex-end;
    }

    .pkg-header-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(255, 255, 255, .04) 0%, rgba(255, 255, 255, 1) 100%);
    }

    .pkg-header-content {
      position: relative;
      z-index: 1;
      width: 100%;
    }

    .pkg-kicker {
      font-size: 11px;
      letter-spacing: .10em;
      text-transform: uppercase;
      font-weight: 800;
      color: var(--blue-lt);
      margin-bottom: 6px;
    }

    .pkg-title {
      font-size: 28px;
      font-weight: 800;
      color: var(--text);
      line-height: 1.1;
      margin-bottom: 4px;
      letter-spacing: -0.8px;
    }

    .pkg-sub {
      font-size: 14px;
      color: var(--text-mid);
      margin: 0;
      line-height: 1.5;
    }

    .pkg-body {
      padding-top: 20px;
    }

    .pkg-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin: 2px 0 18px;
    }

    .pkg-tag {
      font-size: 11px;
      font-weight: 800;
      letter-spacing: .04em;
      padding: 8px 10px;
      border-radius: 999px;
      background: #eef6ff;
      color: var(--blue);
      border: 1px solid #d7e8fb;
    }

    .pkg-fit {
      background: linear-gradient(180deg, #f8fbff 0%, #f2f8ff 100%);
      border: 1px solid #dceaf7;
      border-radius: 14px;
      padding: 14px 16px;
      margin: 0 0 18px;
    }

    .pkg-fit-title {
      font-size: 12px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: .08em;
      color: var(--accent);
      margin-bottom: 8px;
    }

    .pkg-fit ul {
      margin: 0;
      padding-left: 18px;
    }

    .pkg-fit li {
      font-size: 13px;
      color: var(--text-mid);
      margin-bottom: 6px;
      line-height: 1.5;
    }

    .pkg-accordion {
      margin-bottom: 1.4rem;
    }

    .pkg-acc-item {
      border-bottom: 1px solid #e7eef6;
    }

    .pkg-acc-toggle {
      display: flex;
      align-items: center;
      width: 100%;
      background: none;
      border: none;
      outline: none;
      padding: 13px 0;
      cursor: pointer;
      transition: background 0.15s;
      text-align: left;
    }

    .pkg-check {
      color: #43a047;
      font-size: 18px;
      font-weight: bold;
      margin-right: 10px;
      flex-shrink: 0;
    }

    .pkg-acc-title {
      font-weight: 800;
      font-size: 12px;
      letter-spacing: 0.05em;
      margin-right: 8px;
      color: #222;
      text-transform: uppercase;
    }

    .pkg-acc-desc {
      color: #789;
      font-size: 12px;
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
      flex-shrink: 0;
    }

    .pkg-acc-toggle.active .pkg-acc-arrow {
      transform: rotate(180deg);
    }

    .pkg-acc-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.28s ease;
      background: #f8fbff;
      border-radius: 12px;
      padding: 0 14px;
      margin-bottom: 10px;
    }

    .pkg-acc-content ul {
      margin: 10px 0 12px 18px;
      padding: 0;
    }

    .pkg-acc-content li {
      font-size: 14px;
      margin-bottom: 6px;
      color: var(--text-mid);
      line-height: 1.5;
    }

    .pkg-note-pr {
      font-size: 13px;
      color: var(--text-mid);
      margin-bottom: 10px;
      line-height: 1.5;
      display: flex;
      justify-content: space-between;
      gap: 12px;
    }

    .pkg-note-pr strong {
      color: var(--text);
    }

    .pkg-note {
      border-left: 3px solid var(--blue-lt);
      padding: 14px 14px;
      border-radius: 0 10px 10px 0;
      font-size: 13px;
      color: var(--text-mid);
      margin: 18px 0 22px;
      line-height: 1.6;
      background: #f9fcff;
    }

    .pkg-note strong {
      color: var(--blue);
    }

    .btn-pkg {
      display: block;
      text-align: center;
      background: var(--blue-faint);
      color: var(--blue);
      font-weight: 800;
      font-size: 14px;
      padding: 14px 16px;
      border-radius: 12px;
      text-decoration: none;
      transition: background .2s ease, color .2s ease, transform .15s ease;
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
      transform: translateY(-1px);
    }

    /* USP */
    .usp-banner {
      background: linear-gradient(180deg, #f8fbff 0%, #eef6ff 100%);
      border: 1.5px solid #bbdefb;
      border-radius: 22px;
      padding: 28px 32px;
      box-shadow: var(--shadow-sm);
    }

    .usp-icon {
      font-size: 40px;
      line-height: 1;
    }

    .usp-banner h2,
    .usp-banner h3 {
      font-size: 24px;
      font-weight: 800;
      color: var(--blue);
      margin-bottom: 8px;
    }

    .usp-banner p {
      font-size: 15px;
      color: var(--text-mid);
      line-height: 1.7;
      margin: 0;
    }

    /* WHY */
    .why-section {
      background:
        radial-gradient(circle at 20% 20%, rgba(105, 240, 174, .08), transparent 30%),
        linear-gradient(135deg, var(--accent) 0%, var(--blue-mid) 100%);
    }

    .why-card {
      background: rgba(255, 255, 255, .09);
      border: 1px solid rgba(255, 255, 255, .18);
      border-radius: 18px;
      padding: 28px 22px;
      color: #fff;
      transition: background .2s ease, transform .2s ease;
      height: 100%;
      backdrop-filter: blur(8px);
    }

    .why-card:hover {
      background: rgba(255, 255, 255, .14);
      transform: translateY(-3px);
    }

    .why-card.highlight {
      background: rgba(105, 240, 174, .12);
      border-color: rgba(105, 240, 174, .25);
    }

    .why-num {
      font-size: 42px;
      font-weight: 800;
      letter-spacing: -2px;
      color: rgba(255, 255, 255, .13);
      line-height: 1;
      margin-bottom: 12px;
    }

    .why-card.highlight .why-num {
      color: rgba(105, 240, 174, .22);
    }

    .why-card h3 {
      font-size: 17px;
      font-weight: 800;
      margin-bottom: 10px;
    }

    .why-card p {
      font-size: 14px;
      opacity: .82;
      line-height: 1.7;
      font-weight: 300;
      margin: 0;
    }

    /* PROCESS */
    .process-row {
      position: relative;
    }

    .process-row::before {
      content: '';
      position: absolute;
      top: 38px;
      left: 12%;
      right: 12%;
      height: 2px;
      background: linear-gradient(90deg, #dce9f6 0%, #c9def3 100%);
      z-index: 0;
    }

    .step-item {
      position: relative;
      z-index: 1;
    }

    .step-circle {
      width: 76px;
      height: 76px;
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
      box-shadow: var(--shadow-sm);
    }

    .step-item.active .step-circle {
      background: var(--blue);
      border-color: var(--blue);
      color: #fff;
      box-shadow: 0 8px 26px rgba(21, 101, 192, .30);
    }

    .process-card {
      padding: 14px 16px 18px;
      height: 100%;
      text-align: center;
    }

    .step-item h3 {
      font-size: 16px;
      font-weight: 800;
      margin-bottom: 8px;
    }

    .step-item p {
      font-size: 13px;
      color: var(--text-muted);
      line-height: 1.6;
      margin: 0;
    }

    /* ELIGIBILITY */
    .elig-card {
      padding: 28px 26px;
      height: 100%;
    }

    .elig-card h3 {
      font-size: 18px;
      font-weight: 800;
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
      padding: 11px 0;
      border-bottom: 1px solid #f0f4f8;
      line-height: 1.6;
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
      border-radius: 0 12px 12px 0;
      padding: 16px;
      margin-top: 18px;
      font-size: 14px;
      color: var(--text-mid);
      line-height: 1.65;
    }

    .elig-note strong {
      color: var(--blue);
    }

    /* FAQ */
    .faq-list {
      display: grid;
      gap: 14px;
    }

    .faq-item {
      overflow: hidden;
    }

    .faq-question {
      width: 100%;
      border: none;
      background: #fff;
      padding: 20px 22px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      font-size: 16px;
      font-weight: 700;
      color: var(--text);
      cursor: pointer;
      text-align: left;
    }

    .faq-question span {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: #f2f7fc;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      color: var(--blue);
      flex-shrink: 0;
      transition: transform .2s ease, background .2s ease;
    }

    .faq-question.active span {
      transform: rotate(45deg);
      background: #e8f2ff;
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height .28s ease;
      padding: 0 22px;
    }

    .faq-answer p {
      font-size: 14px;
      color: var(--text-mid);
      line-height: 1.75;
      margin: 0 0 20px;
    }

    /* CONTACT */
    .contact-section {
      background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    }

    .contact-panel {
      padding: 34px 30px;
      height: 100%;
    }

    .contact-heading {
      font-size: clamp(30px, 4vw, 46px);
      line-height: 1.08;
      letter-spacing: -1.3px;
      font-weight: 800;
      margin-bottom: 18px;
    }

    .contact-heading .accent {
      color: var(--blue);
    }

    .contact-lead {
      font-size: 18px;
      color: var(--text);
      margin-bottom: 12px;
    }

    .contact-sub {
      font-size: 15px;
      color: var(--text-mid);
      line-height: 1.75;
      margin-bottom: 24px;
      max-width: 560px;
    }

    .contact-list {
      display: grid;
      gap: 14px;
      margin-top: 22px;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 14px;
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 16px 18px;
    }

    .contact-icon {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: var(--blue-faint);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      flex-shrink: 0;
    }

    .contact-label {
      color: var(--text-muted);
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: .06em;
      margin-bottom: 2px;
      font-weight: 700;
    }

    .contact-val {
      font-weight: 700;
      color: var(--text);
      font-size: 15px;
    }

    .form-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 22px;
      padding: 34px 30px;
      box-shadow: var(--shadow-md);
    }

    .form-card h3 {
      font-size: 24px;
      font-weight: 800;
      margin-bottom: 8px;
    }

    .form-card p {
      font-size: 14px;
      color: var(--text-mid);
      line-height: 1.65;
      margin-bottom: 24px;
    }

    .form-label {
      font-size: 12px;
      font-weight: 700;
      color: var(--text-mid);
      letter-spacing: .04em;
      text-transform: uppercase;
      margin-bottom: 8px;
    }

    .form-control,
    .form-select {
      background: #f8fafc;
      border: 1.5px solid var(--border);
      border-radius: 12px;
      font-size: 14px;
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--text);
      padding: 13px 14px;
      min-height: 52px;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: var(--blue-lt);
      background: #fff;
      box-shadow: 0 0 0 4px rgba(33, 150, 243, .10);
    }

    textarea.form-control {
      min-height: 120px;
      resize: vertical;
    }

    .btn-submit {
      width: 100%;
      background: var(--blue);
      color: #fff;
      font-weight: 800;
      font-size: 15px;
      padding: 15px;
      border-radius: 12px;
      border: none;
      font-family: 'Plus Jakarta Sans', sans-serif;
      transition: background .2s ease, transform .15s ease;
      min-height: 54px;
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

    .contact-mini-points {
      display: grid;
      gap: 10px;
      margin-top: 18px;
    }

    .contact-mini-point {
      font-size: 14px;
      color: var(--text-mid);
      display: flex;
      align-items: flex-start;
      gap: 10px;
      line-height: 1.6;
    }

    .contact-mini-point::before {
      content: '✓';
      color: var(--green);
      font-weight: 800;
      margin-top: 1px;
    }

    /* MODAL */
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
      pointer-events: none;
      transition: opacity .25s ease, visibility .25s ease;
    }

    .status-modal-overlay.show {
      opacity: 1;
      visibility: visible;
      pointer-events: auto;
    }

    .status-modal-box {
      width: 100%;
      max-width: 520px;
      background: #fff;
      border-radius: 20px;
      box-shadow: var(--shadow-lg);
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
      background: var(--success-bg);
      color: var(--success);
    }

    .error-icon {
      background: var(--danger-bg);
      color: var(--danger);
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

    /* FOOTER */
    .partner-strip img {
      filter: grayscale(0%);
      opacity: .95;
      transition: transform .2s ease, opacity .2s ease;
    }

    .partner-strip img:hover {
      transform: translateY(-2px);
      opacity: 1;
    }

    /* TOP BUTTON */
    #btn-back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      z-index: 999;
      border-radius: 14px;
      box-shadow: var(--shadow-md);
    }

    /* ANIMATION */
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

    /* RESPONSIVE */
    @media (max-width: 991px) {
      .trust-strip-inner {
        grid-template-columns: repeat(2, 1fr);
      }

      .hero-section {
        padding: 72px 0 96px;
      }

      .process-row::before {
        display: none;
      }
    }

    @media (max-width: 767px) {
      .hero-section h1 {
        font-size: 34px;
      }

      .trust-strip {
        margin-top: -30px;
      }

      .trust-strip-inner {
        grid-template-columns: 1fr;
      }

      .form-card,
      .contact-panel,
      .elig-card,
      .usp-banner {
        padding: 24px 20px;
      }

      .section-sub {
        font-size: 15px;
      }
    }
  </style>
</head>

<body>
  @include('layouts.nav')

  <!-- HERO -->
  <section class="hero-section">
    <div class="container px-lg-5 px-3">
      <div class="row align-items-center g-5">
        <div class="col-lg-7 fade-up">
          <div class="hero-badge">
            <span class="dot"></span>
            DIMOP Plusz 1.2.6/B-26 pályázat
          </div>

          <h1>Digitális fejlesztés <em>akár 90%</em> támogatással</h1>

          <p class="lead">
            A Paksi Informatika 20+ éves tapasztalatával segítünk, hogy a pályázati keretből ne csak eszközbeszerzés
            legyen, hanem egy valóban hatékony, hosszú távon működő digitális fejlesztés.
          </p>

          <div class="hero-points">
            <div class="hero-point">3–12 millió Ft támogatás</div>
            <div class="hero-point">Hardver + szoftver + szolgáltatás + képzés</div>
            <div class="hero-point">Tervezéstől a megvalósításig</div>
          </div>

          <div class="d-flex flex-wrap gap-3">
            <a href="#kapcsolat" class="btn-hero-white">Kérek ingyenes konzultációt</a>
            <a href="#csomagok" class="btn-hero-outline">Megnézem a csomagokat</a>
          </div>
        </div>

        <div class="col-lg-5 d-none d-lg-block fade-up-delay">
          <div class="hero-stat-card">
            <div class="card-label">Pályázat röviden</div>

            <div class="mb-3">
              <div class="hero-stat-num">3–12 M Ft</div>
              <div class="hero-stat-lbl">vissza nem térítendő támogatás</div>
              <div class="hero-stat-lbl">A támogatás akár 4 részletben előre lehívható</div>
            </div>

            <div class="hero-divider"></div>

            <div class="mb-3">
              <div class="hero-stat-num">90%</div>
              <div class="hero-stat-lbl">támogatási intenzitás</div>
            </div>

            <div class="hero-divider"></div>

            <div class="hero-deadline">
              <strong>📅 Benyújtás:</strong><br>
              2026. március 31. – június 30.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TRUST STRIP -->
  <section class="trust-strip">
    <div class="container px-lg-5 px-3">
      <div class="trust-strip-inner">
        <div class="trust-pill">
          <strong>20+ év</strong>
          <span>informatikai és üzleti tapasztalat vállalkozások támogatásában</span>
        </div>
        <div class="trust-pill">
          <strong>3–12 M Ft</strong>
          <span>elérhető támogatási keret digitális fejlesztésekre</span>
        </div>
        <div class="trust-pill">
          <strong>Akár 90%</strong>
          <span>támogatási intenzitás a megfelelő feltételek mellett</span>
        </div>
        <div class="trust-pill">
          <strong>Komplett segítség</strong>
          <span>tervezés, szakmai tartalom, bevezetés, üzemeltetés</span>
        </div>
      </div>
    </div>
  </section>

  <!-- INTRO -->
  <section class="py-5">
    <div class="container px-lg-5 px-3">
      <div class="intro-box mt-4">
        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <div class="section-label">Hogyan segítünk?</div>
            <h2 class="section-title mb-3">Nem csak pályázatban gondolkodunk, hanem működő megoldásban</h2>
            <p class="section-sub mb-0">
              Segítünk a szakmai tartalom összeállításában, a megfelelő digitális fejlesztési irány kiválasztásában,
              és abban, hogy a projekt végül tényleg használható, üzletileg is értékes eredményt hozzon a cégednek.
            </p>
          </div>
          <div class="col-lg-4">
            <div class="d-grid gap-3">
              <div class="contact-item">
                <div class="contact-icon">🧭</div>
                <div>
                  <div class="contact-label">1. lépés</div>
                  <div class="contact-val">Ingyenes konzultáció</div>
                </div>
              </div>
              <div class="contact-item">
                <div class="contact-icon">🛠️</div>
                <div>
                  <div class="contact-label">2. lépés</div>
                  <div class="contact-val">Szakmai tartalom összeállítása</div>
                </div>
              </div>
              <div class="contact-item">
                <div class="contact-icon">🚀</div>
                <div>
                  <div class="contact-label">3. lépés</div>
                  <div class="contact-val">Megvalósítás és támogatás</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MIRE FORDÍTHATÓ -->
  <section class="py-5" id="mire">
    <div class="container py-4 px-lg-5 px-3">
      <div class="section-label">Felhasználható területek</div>
      <div class="section-title">Mire fordítható a támogatás?</div>
      <p class="section-sub mb-5">
        Eszközökre, szoftverekre, szolgáltatásokra és képzésre egyaránt – nem csupán beszerzésre, hanem valódi
        fejlesztésre.
      </p>

      <div class="row g-4">
        <div class="col-12 col-md-6 col-xl-3">
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

        <div class="col-12 col-md-6 col-xl-3">
          <div class="cat-card">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="cat-icon">⚙️</div>
              <h3 class="mb-0">Szoftverek</h3>
            </div>
            <ul class="cat-list">
              <li>Irodai és felhő alapú megoldások</li>
              <li>Videókonferencia és csapatmunka rendszerek</li>
              <li>Biztonsági szoftverek</li>
              <li>CRM és ügyviteli rendszerek</li>
              <li>AI asszisztensek és automatizmusok</li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
          <div class="cat-card">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="cat-icon">🛠️</div>
              <h3 class="mb-0">Szolgáltatások</h3>
            </div>
            <ul class="cat-list">
              <li>IT szakértői támogatás</li>
              <li>Rendszer bevezetés és üzemeltetés</li>
              <li>Információbiztonság</li>
              <li>GDPR, IBSZ kidolgozás</li>
              <li>Weboldal és webshop fejlesztés</li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
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
    </div>
  </section>

  <!-- CSOMAGOK -->
  <section class="py-5" id="csomagok">
    <div class="container py-4 px-lg-5 px-3">
      <div class="section-label">Ajánlataink</div>
      <div class="section-title">Válasszon csomagot</div>
      <p class="section-sub mb-5">
        Három előre összeállított csomag, amelyek a leggyakoribb vállalkozói igényeket fedik le. Ha ettől eltérő
        fejlesztésben gondolkodsz, személyre szabott megoldást is összeállítunk.
      </p>

      <div class="row g-4 align-items-stretch">
        <!-- SmartOffice AI -->
        <div class="col-lg-4">
          <div class="pkg-card">
            <div class="pkg-header" style="background-image: url('./assets/title-11.png');">
              <div class="pkg-header-overlay"></div>
              <div class="pkg-header-content">
                <div class="d-flex align-items-center gap-3">
                  <svg style="margin-bottom: 6px;" height="48" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M4.5 9.5C4.5 5.35786 7.85786 2 12 2C16.1421 2 19.5 5.35786 19.5 9.5C19.5 11.7206 18.5349 13.7159 17.0012 15.0892C15.8805 16.0927 15.3201 16.5945 15.1692 16.7807C14.6824 17.3815 14.6609 17.4296 14.5381 18.193C14.5 18.4297 14.5 18.7865 14.5 19.5C14.5 20.4346 14.5 20.9019 14.299 21.25C14.1674 21.478 13.978 21.6674 13.75 21.799C13.4019 22 12.9346 22 12 22C11.0654 22 10.5981 22 10.25 21.799C10.022 21.6674 9.83261 21.478 9.70096 21.25C9.5 20.9019 9.5 20.4346 9.5 19.5C9.5 18.7865 9.5 18.4297 9.46192 18.193C9.3391 17.4296 9.31762 17.3815 8.83082 16.7807C8.67987 16.5945 8.11945 16.0927 6.99876 15.0892C5.4651 13.7159 4.5 11.7206 4.5 9.5Z"
                      stroke="#2196f3" stroke-width="1.5"></path>
                    <path opacity="0.5" d="M14.5 19.5H9.5" stroke="#2196f3" stroke-width="1.5"></path>
                    <path opacity="0.5" d="M12.7855 8.5L10.6426 11.5H13.6426L11.4998 14.5" stroke="#2196f3"
                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <div>
                    <div class="pkg-kicker">Digitális irodai csomag</div>
                    <div class="pkg-title" style="color:#2196f3;">SmartOffice AI</div>
                    <p class="pkg-sub">Adminisztratív, szolgáltató és irodai működésű vállalkozásoknak</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="pkg-body">
              <div class="pkg-tags">
                <span class="pkg-tag">Microsoft 365</span>
                <span class="pkg-tag">Copilot AI</span>
                <span class="pkg-tag">Felhőalapú működés</span>
              </div>

              <div class="pkg-fit">
                <div class="pkg-fit-title">Neked való, ha...</div>
                <ul>
                  <li>sok dokumentummal, e-maillel és adminisztrációval dolgozol</li>
                  <li>szeretnéd gyorsítani az irodai folyamatokat AI támogatással</li>
                  <li>fontos a felhő, a csapatmunka és a távoli munkavégzés</li>
                </ul>
              </div>

              <div class="pkg-accordion">
                <div class="pkg-acc-item">
                  <button type="button" class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Hardver</span>
                    <span class="pkg-acc-desc">(ügyfél által választott)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Modern irodai eszközök: laptop, monitor, mobiltelefon</li>
                      <li>Hibrid munkavégzés támogatása</li>
                    </ul>
                  </div>
                </div>

                <div class="pkg-acc-item">
                  <button type="button" class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Szoftver</span>
                    <span class="pkg-acc-desc">(Microsoft 365 + Copilot AI)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Teams, Outlook, SharePoint, OneDrive</li>
                      <li>AI támogatás dokumentum- és e-mail kezeléshez</li>
                      <li>Felhőalapú együttműködés és fájlmegosztás</li>
                    </ul>
                  </div>
                </div>

                <div class="pkg-acc-item">
                  <button type="button" class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Szolgáltatás</span>
                    <span class="pkg-acc-desc">(kialakítás, bevezetés, üzemeltetés)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Microsoft 365 bevezetés</li>
                      <li>AI workflow kialakítás</li>
                      <li>Dokumentumkezelés és kollaboráció beállítása</li>
                    </ul>
                  </div>
                </div>

                <div class="pkg-acc-item">
                  <button type="button" class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Képzés</span>
                    <span class="pkg-acc-desc">(használat, kezelés, IKT oktatás)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Copilot használat</li>
                      <li>Csapatmunka eszközök betanítása</li>
                      <li>Digitális hatékonyság növelése a gyakorlatban</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="pkg-note-pr"><strong>Hardver:</strong> <span>3 300 000 Ft</span></div>
              <div class="pkg-note-pr"><strong>Szoftver:</strong> <span>1 320 000 Ft / 12 hó</span></div>
              <div class="pkg-note-pr"><strong>Szolgáltatás:</strong> <span>5 940 000 Ft</span></div>
              <div class="pkg-note-pr"><strong>Képzés:</strong> <span>1 980 000 Ft</span></div>

              <div class="pkg-note">
                <strong>Projektérték:</strong> 13 200 000 Ft
              </div>

              <a href="#kapcsolat" class="btn-pkg mt-4" data-service="SmartOffice AI csomag">
                Érdekel ez a csomag
              </a>
            </div>
          </div>
        </div>

        <!-- ShopMaster -->
        <div class="col-lg-4">
          <div class="pkg-card featured">
            <div class="pkg-popular">Legnépszerűbb</div>

            <div class="pkg-header" style="background-image: url('./assets/title-22.png');">
              <div class="pkg-header-overlay"></div>
              <div class="pkg-header-content">
                <div class="d-flex align-items-center gap-3">
                  <svg style="margin-bottom: 6px;" height="48" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
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
                      d="M4 14C4 16.8284 4 18.2426 4.87868 19.1213C5.75736 20 7.17157 20 10 20H14C16.8284 20 18.2426 20 19.1213 19.1213C20 18.2426 20 16.8284 20 14V12H4V14Z"
                      fill="#2196f3"></path>
                  </svg>
                  <div>
                    <div class="pkg-kicker">Kereskedői csomag</div>
                    <div class="pkg-title" style="color:#2196f3;">ShopMaster</div>
                    <p class="pkg-sub">Kereskedőknek, webshopot és készletkezelést fejlesztő cégeknek</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="pkg-body">
              <div class="pkg-tags">
                <span class="pkg-tag">Webshop</span>
                <span class="pkg-tag">ERP</span>
                <span class="pkg-tag">Automatizálás</span>
              </div>

              <div class="pkg-fit">
                <div class="pkg-fit-title">Neked való, ha...</div>
                <ul>
                  <li>webshopot szeretnél vagy már van online értékesítésed</li>
                  <li>probléma a készletkezelés, rendeléskezelés vagy számlázás</li>
                  <li>szeretnéd egy rendszerbe szervezni a kereskedelmi folyamataidat</li>
                </ul>
              </div>

              <div class="pkg-accordion">
                <div class="pkg-acc-item">
                  <button type="button" class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Hardver</span>
                    <span class="pkg-acc-desc">(ügyfél által választott)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Raktári és irodai eszközök: tablet, laptop, vonalkódolvasó, nyomtató</li>
                      <li>A webshop és a készletkezelés kiszolgálásához szükséges eszközök</li>
                    </ul>
                  </div>
                </div>

                <div class="pkg-acc-item">
                  <button type="button" class="pkg-acc-toggle">
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
                  <button type="button" class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Szolgáltatás</span>
                    <span class="pkg-acc-desc">(kialakítás, bevezetés, üzemeltetés)</span>
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
                  <button type="button" class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Képzés</span>
                    <span class="pkg-acc-desc">(használat, kezelés, IKT oktatás)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Webshop kezelés</li>
                      <li>Készletkezelési folyamatok</li>
                      <li>Napi működés és adminisztráció betanítása</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="pkg-note-pr"><strong>Hardver:</strong> <span>3 300 000 Ft</span></div>
              <div class="pkg-note-pr"><strong>Szoftver:</strong> <span>1 320 000 Ft / 12 hó</span></div>
              <div class="pkg-note-pr"><strong>Szolgáltatás:</strong> <span>5 940 000 Ft</span></div>
              <div class="pkg-note-pr"><strong>Képzés:</strong> <span>1 980 000 Ft</span></div>

              <div class="pkg-note">
                <strong>Projektérték:</strong> 13 200 000 Ft
              </div>

              <a href="#kapcsolat" class="btn-pkg" data-service="ShopMaster kereskedői csomag">
                Érdekel ez a csomag
              </a>
            </div>
          </div>
        </div>

        <!-- ERP CRM AI -->
        <div class="col-lg-4">
          <div class="pkg-card">
            <div class="pkg-header" style="background-image: url('./assets/title-33.png');">
              <div class="pkg-header-overlay"></div>
              <div class="pkg-header-content">
                <div class="d-flex align-items-center gap-3">
                  <svg style="margin-bottom: 6px;" height="48" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M3 9C3 6.17157 3 4.75736 3.87868 3.87868C4.75736 3 6.17157 3 9 3H15C17.8284 3 19.2426 3 20.1213 3.87868C21 4.75736 21 6.17157 21 9V14C21 15.8856 21 16.8284 20.4142 17.4142C19.8284 18 18.8856 18 17 18H7C5.11438 18 4.17157 18 3.58579 17.4142C3 16.8284 3 15.8856 3 14V9Z"
                      stroke="#2196f3" stroke-width="1.5"></path>
                    <path opacity="0.5" d="M22 21H2" stroke="#2196f3" stroke-width="1.5" stroke-linecap="round"></path>
                    <path opacity="0.5" d="M15 15H9" stroke="#2196f3" stroke-width="1.5" stroke-linecap="round"></path>
                  </svg>
                  <div>
                    <div class="pkg-kicker">Moduláris vállalatirányítás</div>
                    <div class="pkg-title" style="color:#2196f3;">ERP CRM AI</div>
                    <p class="pkg-sub">Összetettebb működésű, növekedésben lévő vállalkozásoknak</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="pkg-body">
              <div class="pkg-tags">
                <span class="pkg-tag">ERP</span>
                <span class="pkg-tag">CRM</span>
                <span class="pkg-tag">Riportok és automatizálás</span>
              </div>

              <div class="pkg-fit">
                <div class="pkg-fit-title">Neked való, ha...</div>
                <ul>
                  <li>több folyamatot szeretnél egy rendszerben átlátni</li>
                  <li>fontos a pénzügy, partnerkezelés, készlet és riportolás összekapcsolása</li>
                  <li>skálázható, moduláris rendszert keresel</li>
                </ul>
              </div>

              <div class="pkg-accordion">
                <div class="pkg-acc-item">
                  <button type="button" class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Hardver</span>
                    <span class="pkg-acc-desc">(ügyfél által választott)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Irodai és adminisztrációs eszközök</li>
                      <li>ERP rendszer működéséhez szükséges háttér</li>
                    </ul>
                  </div>
                </div>

                <div class="pkg-acc-item">
                  <button type="button" class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Szoftver</span>
                    <span class="pkg-acc-desc">(moduláris ERP rendszer)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>Készlet, pénzügy, partnerkezelés</li>
                      <li>Számlázás és riportok</li>
                      <li>Moduláris bővíthetőség, csak a szükséges funkciókkal</li>
                    </ul>
                  </div>
                </div>

                <div class="pkg-acc-item">
                  <button type="button" class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Szolgáltatás</span>
                    <span class="pkg-acc-desc">(kialakítás, bevezetés, üzemeltetés)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>ERP rendszer testreszabása</li>
                      <li>Folyamatok digitalizálása</li>
                      <li>Integrációk és automatizmusok kialakítása</li>
                    </ul>
                  </div>
                </div>

                <div class="pkg-acc-item">
                  <button type="button" class="pkg-acc-toggle">
                    <span class="pkg-check">✓</span>
                    <span class="pkg-acc-title">Képzés</span>
                    <span class="pkg-acc-desc">(használat, kezelés, IKT oktatás)</span>
                    <span class="pkg-acc-arrow"></span>
                  </button>
                  <div class="pkg-acc-content">
                    <ul>
                      <li>ERP modulok használata</li>
                      <li>Napi működés és riportok</li>
                      <li>Vezetői döntéstámogatás a gyakorlatban</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="pkg-note-pr"><strong>Hardver:</strong> <span>3 300 000 Ft</span></div>
              <div class="pkg-note-pr"><strong>Szoftver:</strong> <span>1 320 000 Ft / 12 hó</span></div>
              <div class="pkg-note-pr"><strong>Szolgáltatás:</strong> <span>5 940 000 Ft</span></div>
              <div class="pkg-note-pr"><strong>Képzés:</strong> <span>1 980 000 Ft</span></div>

              <div class="pkg-note">
                <strong>Projektérték:</strong> 13 200 000 Ft
              </div>

              <a href="#kapcsolat" class="btn-pkg"
                data-service="ERP CRM AI moduláris vállalatirányítási csomag">
                Érdekel ez a csomag
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EGYEDI IGÉNY -->
  <section class="pb-5">
    <div class="container py-4 px-lg-5 px-3">
      <div class="usp-banner">
        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <div class="d-flex align-items-start gap-3">
              <div class="usp-icon">💡</div>
              <div>
                <h2 class="mb-1">Valami másra gondoltál?</h2>
                <p class="mb-0">
                  Ha a fejlesztési célod nem illik pontosan a fenti csomagokba, alakítsuk ki együtt a vállalkozásodra
                  szabott megoldást.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <a style="background:#1565c0; color:#fff;" href="#kapcsolat"
              data-service="Egyedi csomag kialakítása" class="btn-pkg mt-2">
              Kérek ingyenes konzultációt
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY US -->
  <section class="py-5 why-section" id="miert-mi">
    <div class="container py-4 px-lg-5 px-3">
      <div class="section-label" style="color:rgba(255,255,255,.65)">Miért a Paksi Informatika?</div>
      <div class="section-title text-white">Nem csak kivitelezünk – gondolkodunk és tervezünk</div>
      <p class="section-sub mb-5" style="color:rgba(255,255,255,.72)">
        20+ éves tapasztalat, valódi tanácsadás és hosszú távú partneri szemlélet – ezért dolgoznak velünk
        vállalkozások országszerte.
      </p>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="why-card highlight">
            <div class="why-num">01</div>
            <h3>Nincs lehetetlen fejlesztési cél</h3>
            <p>
              Ha az igényed kilóg a sztenderd kategóriákból, megtaláljuk a szakmailag és pályázatilag is működő utat.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="why-card">
            <div class="why-num">02</div>
            <h3>20+ év tapasztalat</h3>
            <p>
              Több mint két évtizede támogatjuk a magyar kis- és középvállalkozások digitalizációját.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="why-card">
            <div class="why-num">03</div>
            <h3>Tanácsadás és megvalósítás egy kézben</h3>
            <p>
              A pályázat szakmai tartalmától a rendszerbevezetésig végig melletted vagyunk.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="why-card">
            <div class="why-num">04</div>
            <h3>Gyors reakció, országos lefedettség</h3>
            <p>
              Szervezett csapattal, partneri háttérrel és üzleti szemlélettel segítünk a megvalósításban.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="why-card">
            <div class="why-num">05</div>
            <h3>A keret maximális kihasználása</h3>
            <p>
              Célunk, hogy a rendelkezésre álló támogatásból a lehető legtöbb üzleti érték szülessen.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="why-card">
            <div class="why-num">06</div>
            <h3>Hosszú távú partner</h3>
            <p>
              A bevezetés után sem engedjük el a kezed: üzemeltetésben és továbbfejlesztésben is számíthatsz ránk.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- JOGOSULTSÁG -->
  <section class="py-5" id="jogosultsag">
    <div class="container py-4 px-lg-5 px-3">
      <div class="section-label">Jogosultság</div>
      <div class="section-title">Neked szól ez a pályázat?</div>
      <p class="section-sub mb-5">
        Gyorsan ellenőrizd, hogy a vállalkozásod jellemzően belefér-e a célcsoportba.
      </p>

      <div class="row g-4">
        <div class="col-lg-6">
          <div class="elig-card">
            <h3>✅ Jellemzően jogosult vagy, ha...</h3>
            <ul class="elig-list">
              <li><span class="elig-dot">✓</span>mikro- vagy kisvállalkozást üzemeltetsz (jellemzően max. 50 fő)</li>
              <li><span class="elig-dot">✓</span>van legalább 1 lezárt üzleti éved</li>
              <li><span class="elig-dot">✓</span>a fejlesztést magyarországi telephelyen valósítod meg</li>
              <li><span class="elig-dot">✓</span>kevésbé fejlett régióban működsz (például Dél-Dunántúl)</li>
              <li><span class="elig-dot">✓</span>a vállalkozás digitális fejlettsége jelenleg alacsonyabb szinten van</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="elig-card">
            <h3>❓ Nem vagy biztos benne?</h3>
            <ul class="elig-list">
              <li><span class="elig-dot">→</span>nem egyértelmű a vállalkozásod méretkategóriája</li>
              <li><span class="elig-dot">→</span>speciális iparágban működsz</li>
              <li><span class="elig-dot">→</span>egyedi fejlesztési igényed van</li>
              <li><span class="elig-dot">→</span>több telephellyel vagy összetett cégstruktúrával dolgozol</li>
            </ul>

            <div class="elig-note">
              <strong>Ne zárd ki magad túl korán.</strong>
              Egy rövid egyeztetés során gyorsan át tudjuk nézni, mennyire illeszkedik a vállalkozásod a pályázat
              feltételeihez.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOLYAMAT -->
  <section class="py-5" id="folyamat">
    <div class="container py-4 px-lg-5 px-3">
      <div class="section-label">Hogyan működik?</div>
      <div class="section-title">A pályázattól a megvalósításig</div>
      <p class="section-sub mb-5">
        Egyszerű, átlátható folyamat – végig melletted vagyunk.
      </p>

      <div class="row g-4 process-row">
        <div class="col-12 col-md-6 col-lg-3 step-item">
          <div class="process-card">
            <div class="step-circle">01</div>
            <h3>Konzultáció</h3>
            <p>Felmérjük a vállalkozás helyzetét, céljait és a jogosultságot.</p>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 step-item active">
          <div class="process-card">
            <div class="step-circle">02</div>
            <h3>Tervezés</h3>
            <p>Összerakjuk a szakmai tartalmat és a megfelelő digitális megoldást.</p>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 step-item">
          <div class="process-card">
            <div class="step-circle">03</div>
            <h3>Előkészítés és beadás</h3>
            <p>Segítünk a projekt szakmai oldalának előkészítésében és a beadás támogatásában.</p>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 step-item">
          <div class="process-card">
            <div class="step-circle">04</div>
            <h3>Megvalósítás és üzemeltetés</h3>
            <p>Leszállítjuk, bevezetjük és a későbbiekben is támogatjuk a működést.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="py-5" id="gyik">
    <div class="container py-4 px-lg-5 px-3">
      <div class="section-label">Gyakori kérdések</div>
      <div class="section-title">Amit a legtöbben megkérdeznek</div>
      <p class="section-sub mb-5">
        Röviden összefoglaltuk a legfontosabb tudnivalókat, hogy gyorsabban átlásd a lehetőségeket.
      </p>

      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question" type="button">
            Kell önerő a projekthez?
            <span>+</span>
          </button>
          <div class="faq-answer">
            <p>
              Igen, jellemzően szükség lehet önerőre is, de ennek mértéke a támogatási intenzitástól és az egyedi
              projekttől függ. Konzultáció során segítünk ezt reálisan átlátni.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" type="button">
            Csak hardvert lehet beszerezni?
            <span>+</span>
          </button>
          <div class="faq-answer">
            <p>
              Nem. A támogatás hardverre, szoftverre, szolgáltatásra és képzésre is fordítható. Ezért érdemes nem
              pusztán eszközben, hanem komplett digitális fejlesztésben gondolkodni.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" type="button">
            Akkor is megkereshetlek titeket, ha még nincs végleges csomagom?
            <span>+</span>
          </button>
          <div class="faq-answer">
            <p>
              Igen. Sok esetben pont az első egyeztetés segít eldönteni, hogy a három előre összeállított csomag közül
              melyik illik hozzád, vagy inkább egyedi megoldás szükséges.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" type="button">
            Segítetek a megvalósítás után is?
            <span>+</span>
          </button>
          <div class="faq-answer">
            <p>
              Igen. Nem csak a rendszer bevezetésében, hanem az üzemeltetésben, támogatásban és továbbfejlesztésben is
              számíthatsz ránk.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" type="button">
            Mi történik az első konzultáción?
            <span>+</span>
          </button>
          <div class="faq-answer">
            <p>
              Átnézzük a vállalkozásod helyzetét, a fejlesztési célokat, a digitális érettséget és azt, hogy milyen
              projekt lehet reálisan jó irány számodra. Ez nem kötelez semmire, viszont sokat segít a tisztánlátásban.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="py-5 contact-section" id="kapcsolat">
    <div class="container py-4 px-lg-5 px-3">
      <div class="row align-items-stretch g-4">
        <div class="col-lg-6">
          <div class="contact-panel">
            <h2 class="contact-heading">
              Kezdjük el <span class="accent">együtt</span>!
            </h2>

            <p class="contact-lead">
              Ingyenes konzultáció – kötelezettség nélkül.
            </p>

            <p class="contact-sub">
              Mondd el a vállalkozásod helyzetét, és megmutatjuk, hogyan tudunk segíteni a DIMOP Plusz pályázat
              szakmai előkészítésében és a digitális fejlesztési irány kiválasztásában.
            </p>

            <div class="contact-mini-points">
              <div class="contact-mini-point">segítünk kiválasztani a megfelelő csomagot vagy egyedi irányt</div>
              <div class="contact-mini-point">érthetően elmondjuk, milyen digitális fejlesztésben érdemes gondolkodni</div>
              <div class="contact-mini-point">a megvalósítás után sem maradsz magadra</div>
            </div>

            <div class="contact-list">
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

        <div class="col-lg-6">
          <div class="form-card">
            <h3>Kérj visszahívást vagy konzultációt</h3>
            <p>
              Töltsd ki az űrlapot, és rövid időn belül felvesszük veled a kapcsolatot.
            </p>

            <form action="{{ route('contact.submit') }}" method="POST">
              @csrf

              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <label for="contactName" class="form-label">{{ __('menu.name') }}</label>
                  <input name="name" class="form-control" id="contactName" placeholder="{{ __('menu.name') }}" required>
                </div>

                <div class="col-md-6">
                  <label for="contactCompany" class="form-label">Cég neve</label>
                  <input name="company" class="form-control" id="contactCompany" placeholder="Cég neve">
                </div>
              </div>

              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <label for="contactPhone" class="form-label">Telefonszám</label>
                  <input name="phone" type="tel" class="form-control" id="contactPhone" placeholder="Telefonszám">
                </div>

                <div class="col-md-6">
                  <label for="contactEmail" class="form-label">{{ __('menu.mail') }}</label>
                  <input name="email" class="form-control" id="contactEmail" placeholder="name@example.com" required>
                </div>
              </div>

              <div class="mb-3">
                <label for="inputMessage" class="form-label">{{ __('menu.short_decription_message') }}</label>
                <textarea name="message" id="inputMessage" class="form-control" rows="4" required></textarea>
                <input type="hidden" name="service" id="selectedService">
              </div>

              <div class="checkbox mb-3">
                <label style="font-size:14px; color:var(--text-mid); line-height:1.6;">
                  <input type="checkbox" value="remember-me" required>
                  {{ __('menu.accept_the') }}
                  <a href="{{ route('gdpr') }}" target="_blank">
                    {{ __('menu.data_management_conditions') }}
                  </a>
                </label>
              </div>

              <div class="mb-3">
                {!! htmlScriptTagJsApi() !!}
                {!! htmlFormSnippet() !!}
              </div>

              <button class="btn-submit" type="submit">Lépjen velünk kapcsolatba!</button>

              <div class="form-note">
                Az üzenet elküldésével nem vállalsz kötelezettséget.
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PARTNERS -->
  <section class="py-5 partner-strip">
    <div class="container">
      <div class="row justify-content-center align-items-center text-center g-4">
        <div class="col-12 col-lg-6">
          <img src="{{ asset('/dell.jpg') }}" class="img-fluid" style="max-height:70px"
            alt="Dell authorized partners">
        </div>
        <div class="col-12 col-lg-6">
          <img src="{{ asset('/microsoft.png') }}" class="img-fluid" style="max-height:70px"
            alt="Microsoft partner">
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <div class="container">
    <footer class="pt-3 pb-4">
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 mt-4 border-top gap-3">
        <p class="mb-0">
          <img class="mb-1" src="favicon.ico" height="22" alt="">
          © 2026 Paksi Informatika. {{ __('menu.all_rights_reserved') }}
        </p>

        <ul class="list-unstyled d-flex mb-0">
          <li class="ms-sm-3">
            <a href="{{ route('gdpr') }}" target="_blank">
              Adatkezelési feltételek
            </a>
          </li>
        </ul>
      </div>
    </footer>
  </div>

  <!-- TOP BUTTON -->
  <button type="button" class="btn btn-primary btn-lg" id="btn-back-to-top" aria-label="Vissza a tetejére">
    ↑
  </button>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Package CTA -> form prefill
      document.querySelectorAll('[data-service]').forEach(function (btn) {
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

      // Package accordion
      document.querySelectorAll('.pkg-acc-toggle').forEach(function (btn) {
        btn.addEventListener('click', function () {
          const content = btn.parentElement.querySelector('.pkg-acc-content');
          const isActive = btn.classList.contains('active');

          btn.parentElement.parentElement.querySelectorAll('.pkg-acc-toggle').forEach(function (otherBtn) {
            otherBtn.classList.remove('active');
          });

          btn.parentElement.parentElement.querySelectorAll('.pkg-acc-content').forEach(function (otherContent) {
            otherContent.style.maxHeight = null;
          });

          if (!isActive) {
            btn.classList.add('active');
            content.style.maxHeight = content.scrollHeight + 'px';
          }
        });
      });

      // FAQ accordion
      document.querySelectorAll('.faq-question').forEach(function (btn) {
        btn.addEventListener('click', function () {
          const answer = btn.nextElementSibling;
          const isActive = btn.classList.contains('active');

          document.querySelectorAll('.faq-question').forEach(function (q) {
            q.classList.remove('active');
          });

          document.querySelectorAll('.faq-answer').forEach(function (a) {
            a.style.maxHeight = null;
          });

          if (!isActive) {
            btn.classList.add('active');
            answer.style.maxHeight = answer.scrollHeight + 'px';
          }
        });
      });

      // Modal
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
        }, 60);

        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        if (okBtn) okBtn.addEventListener('click', closeModal);

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

      // Back to top button
      const backToTopButton = document.getElementById('btn-back-to-top');

      window.addEventListener('scroll', function () {
        if (window.scrollY > 320) {
          backToTopButton.style.display = 'block';
        } else {
          backToTopButton.style.display = 'none';
        }
      });

      backToTopButton.addEventListener('click', function () {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
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