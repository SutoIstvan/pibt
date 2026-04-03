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
      --bg: #f0f4f8;
      --surface: #ffffff;
      --ink: #1a2332;
      --ink2: #3b4a5c;
      --ink3: #7a8a9e;
      --border: #dce3ec;
      --accent: #0d6efd;
      --accent-dark: #0a58ca;
      --accent-light: #e8f0fe;
      --accent2: #fd7e14;
      --accent2-light: #fff3e6;
      --shadow-sm: 0 1px 4px rgba(13,110,253,0.06);
      --shadow: 0 4px 20px rgba(13,110,253,0.1);
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      color: #1a1a2e;
      /* background: #fff; */
      font-size: 16px;
      line-height: 1.65;
      background: var(--bg);
      color: var(--ink);
      min-height: 100vh;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    :root {
      --blue: #1a56db;
      --blue-dark: #1e429f;
      --blue-light: #e8f0fe;
      --accent: #1a56db;
      --navy: #1a1a2e;
      --gray: #6b7280;
      --gray-light: #f3f4f6;
      --border: #e5e7eb;
      --white: #ffffff;
      --green: #059669;
      --r: 12px;
      --r-lg: 18px;
      --shadow: 0 1px 3px rgba(0, 0, 0, .08), 0 1px 2px rgba(0, 0, 0, .06);
      --shadow-md: 0 4px 16px rgba(0, 0, 0, .10);
    }

    /* NAV */
    .site-nav {
      background: #fff;
      border-bottom: 1px solid var(--border);
      padding: 0 24px;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .nav-inner {
      max-width: 1160px;
      margin: 0 auto;
      height: 64px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .nav-logo img {
      height: 36px;
      display: block;
    }

    .nav-links {
      display: flex;
      gap: 4px;
      align-items: center;
    }

    .nav-links a {
      padding: 8px 12px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 500;
      color: var(--gray);
      transition: background .15s, color .15s;
    }

    .nav-links a:hover {
      background: var(--gray-light);
      color: var(--navy);
    }

    .nav-links a.active {
      color: var(--blue);
    }

    .nav-cta {
      background: var(--blue) !important;
      color: #fff !important;
      padding: 9px 18px !important;
      border-radius: 8px;
      font-weight: 600 !important;
      transition: background .15s !important;
    }

    .nav-cta:hover {
      background: var(--blue-dark) !important;
    }

    /* HERO */
    .hero {
      background: linear-gradient(135deg, #1a1a2e 0%, #16213e 60%, #1a3a5c 100%);
      padding: 72px 24px 80px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/svg%3E");
      pointer-events: none;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: rgba(245, 158, 11, .15);
      border: 1px solid rgba(245, 158, 11, .4);
      color: #fbbf24;
      padding: 5px 14px;
      border-radius: 100px;
      font-size: 13px;
      font-weight: 500;
      margin-bottom: 24px;
    }

    .hero-badge-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #fbbf24;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {

      0%,
      100% {
        opacity: 1
      }

      50% {
        opacity: .3
      }
    }

    .hero h1 {
      font-size: clamp(28px, 5vw, 52px);
      font-weight: 700;
      color: #fff;
      letter-spacing: -.5px;
      line-height: 1.15;
      margin-bottom: 20px;
      max-width: 780px;
      margin-left: auto;
      margin-right: auto;
    }

    .hero h1 em {
      font-style: normal;
      background: linear-gradient(90deg, #fbbf24, #f97316);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero-lead {
      font-size: 18px;
      color: rgba(255, 255, 255, .7);
      max-width: 600px;
      margin: 0 auto 36px;
      line-height: 1.6;
      font-weight: 300;
    }

    .hero-lead strong {
      color: rgba(255, 255, 255, .95);
      font-weight: 600;
    }

    .hero-btns {
      display: flex;
      gap: 12px;
      justify-content: center;
      flex-wrap: wrap;
      margin-bottom: 56px;
    }

    .btn-primary {
      background: var(--blue);
      color: #fff;
      font-weight: 600;
      font-size: 15px;
      padding: 13px 28px;
      border-radius: 10px;
      border: none;
      display: inline-block;
      cursor: pointer;
      transition: background .15s, transform .15s;
      box-shadow: 0 4px 14px rgba(26, 86, 219, .4);
    }

    .btn-primary:hover {
      background: var(--blue-dark);
      transform: translateY(-1px);
    }

    .btn-outline {
      background: rgba(255, 255, 255, .08);
      color: #fff;
      font-weight: 500;
      font-size: 15px;
      padding: 13px 28px;
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, .2);
      display: inline-block;
      transition: background .15s;
    }

    .btn-outline:hover {
      background: rgba(255, 255, 255, .15);
    }

    .hero-stats {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      background: rgba(255, 255, 255, .06);
      border: 1px solid rgba(255, 255, 255, .1);
      border-radius: var(--r-lg);
      max-width: 300px;
      margin: 0 auto;
      overflow: hidden;
    }

    .hero-stat {
      flex: 1;
      min-width: 140px;
      padding: 20px 16px;
      text-align: center;
      border-right: 1px solid rgba(255, 255, 255, .08);
    }

    .hero-stat:last-child {
      border-right: none;
    }

    .hero-stat-val {
      font-size: 22px;
      font-weight: 700;
      color: #fff;
      line-height: 1;
      margin-bottom: 4px;
    }

    .hero-stat-val.gold {
      color: #fbbf24;
    }

    .hero-stat-label {
      font-size: 12px;
      color: rgba(255, 255, 255, .5);
    }

    /* SECTIONS */
    .section {
      padding: 80px 24px;
    }

    .section-gray {
      background: var(--gray-light);
    }

    .section-navy {
      background: var(--navy);
    }

    .container {
      max-width: 1160px;
      margin: 0 auto;
    }

    .section-eyebrow {
      font-size: 12px;
      font-weight: 600;
      color: var(--blue);
      text-transform: uppercase;
      letter-spacing: .1em;
      margin-bottom: 10px;
    }

    .section-navy .section-eyebrow {
      color: #fbbf24;
    }

    h2.section-h2 {
      font-size: clamp(22px, 3vw, 34px);
      font-weight: 700;
      letter-spacing: -.3px;
      color: var(--navy);
      margin-bottom: 14px;
    }

    .section-navy h2.section-h2 {
      color: #fff;
    }

    .section-lead {
      font-size: 17px;
      color: var(--gray);
      max-width: 560px;
      line-height: 1.65;
      margin-bottom: 48px;
    }

    .section-navy .section-lead {
      color: rgba(255, 255, 255, .55);
    }

    /* PROMISE */
    .promise-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 48px;
      align-items: start;
    }

    .highlight-box {
      background: var(--navy);
      border-radius: var(--r-lg);
      padding: 36px;
      color: #fff;
    }

    .highlight-box-icon {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      background: rgba(245, 158, 11, .15);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 18px;
    }

    .highlight-box h3 {
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 12px;
      line-height: 1.3;
    }

    .highlight-box h3 span {
      color: #fbbf24;
    }

    .highlight-box p {
      font-size: 15px;
      color: rgba(255, 255, 255, .65);
      line-height: 1.7;
    }

    .steps-list {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .step-item {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      padding: 18px;
      background: #fff;
      border: 1px solid var(--border);
      border-radius: var(--r);
      box-shadow: var(--shadow);
    }

    .step-icon-wrap {
      width: 42px;
      height: 42px;
      border-radius: 10px;
      background: var(--blue-light);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .step-icon-wrap svg {
      width: 20px;
      height: 20px;
      stroke: var(--blue);
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .step-text h4 {
      font-size: 15px;
      font-weight: 600;
      margin-bottom: 3px;
    }

    .step-text p {
      font-size: 13px;
      color: var(--gray);
      line-height: 1.5;
    }

    /* PALYA BANNER */
    .palya-banner {
      background: linear-gradient(135deg, #0f3460, #1a56db);
      border-radius: var(--r-lg);
      padding: 28px 36px;
      display: flex;
      align-items: center;
      gap: 20px;
      margin-bottom: 0;
      flex-wrap: wrap;
    }

    .palya-banner-icon {
      width: 52px;
      height: 52px;
      border-radius: 12px;
      background: rgba(255, 255, 255, .12);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .palya-banner-icon svg {
      width: 26px;
      height: 26px;
      stroke: #fbbf24;
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .palya-banner-text {
      flex: 1;
    }

    .palya-banner-text h3 {
      font-size: 18px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 5px;
    }

    .palya-banner-text p {
      font-size: 14px;
      color: rgba(255, 255, 255, .7);
      line-height: 1.6;
    }

    .palya-banner-text p strong {
      color: #fbbf24;
      font-weight: 600;
    }

    .palya-banner-cta {
      background: #fbbf24;
      color: #1a1a2e;
      font-weight: 700;
      font-size: 14px;
      padding: 11px 22px;
      border-radius: 9px;
      white-space: nowrap;
      transition: background .15s;
      display: inline-block;
    }

    .palya-banner-cta:hover {
      background: #f59e0b;
    }

    /* FINANCE */
    .finance-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      margin-bottom: 28px;
    }

    .finance-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: var(--r);
      padding: 24px 20px;
      transition: border-color .2s, box-shadow .2s;
    }

    .finance-card:hover {
      border-color: var(--blue);
      box-shadow: var(--shadow-md);
    }

    .finance-icon {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      background: var(--blue-light);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 14px;
    }

    .finance-icon svg {
      width: 22px;
      height: 22px;
      stroke: var(--blue);
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .finance-card h3 {
      font-size: 15px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .finance-card ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .finance-card ul li {
      font-size: 13px;
      color: var(--gray);
      padding-left: 14px;
      position: relative;
      line-height: 1.5;
    }

    .finance-card ul li::before {
      content: '–';
      position: absolute;
      left: 0;
      color: #d1d5db;
    }

    .finance-card ul li:last-child {
      color: var(--blue);
      font-weight: 500;
    }

    .finance-note {
      background: #eff6ff;
      border: 1px solid #bfdbfe;
      border-radius: var(--r);
      padding: 20px 24px;
      display: flex;
      align-items: flex-start;
      gap: 14px;
    }

    .finance-note svg {
      width: 22px;
      height: 22px;
      stroke: var(--blue);
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
      flex-shrink: 0;
      margin-top: 1px;
    }

    .finance-note p {
      font-size: 14px;
      color: #1e40af;
      line-height: 1.65;
    }

    .finance-note p strong {
      font-weight: 600;
    }

    /* HOW IT WORKS */
    .hw-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 2px;
      border-radius: var(--r-lg);
      overflow: hidden;
      border: 1px solid rgba(255, 255, 255, .08);
    }

    .hw-step {
      background: rgba(255, 255, 255, .04);
      padding: 32px 24px;
      position: relative;
    }

    .hw-step:not(:last-child)::after {
      content: '';
      position: absolute;
      top: 50%;
      right: 0;
      width: 1px;
      height: 60%;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, .08);
    }

    .hw-num {
      font-size: 40px;
      font-weight: 700;
      color: rgba(255, 255, 255, .07);
      line-height: 1;
      margin-bottom: 12px;
    }

    .hw-icon {
      width: 40px;
      height: 40px;
      border-radius: 10px;
      background: rgba(26, 86, 219, .25);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 14px;
    }

    .hw-icon svg {
      width: 20px;
      height: 20px;
      stroke: #93c5fd;
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .hw-step h3 {
      font-size: 15px;
      font-weight: 600;
      color: #fff;
      margin-bottom: 7px;
    }

    .hw-step p {
      font-size: 13px;
      color: rgba(255, 255, 255, .5);
      line-height: 1.6;
    }

    /* ELIGIBILITY */
    .elig-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
    }

    .elig-card {
      background: #fff;
      border-radius: var(--r-lg);
      padding: 28px;
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
    }

    .elig-card.yes {
      border-top: 4px solid var(--green);
    }

    .elig-card.no {
      border-top: 4px solid #ef4444;
    }

    .elig-card h3 {
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 18px;
    }

    .elig-card.yes h3 {
      color: var(--green);
    }

    .elig-card.no h3 {
      color: #ef4444;
    }

    .elig-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 9px;
    }

    .elig-list li {
      font-size: 14px;
      color: #374151;
      display: flex;
      gap: 9px;
      align-items: flex-start;
      line-height: 1.5;
    }

    .elig-dot {
      width: 18px;
      height: 18px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      margin-top: 1px;
      font-size: 10px;
      font-weight: 700;
    }

    .elig-card.yes .elig-dot {
      background: #d1fae5;
      color: var(--green);
    }

    .elig-card.no .elig-dot {
      background: #fee2e2;
      color: #ef4444;
    }

    .elig-note {
      margin-top: 24px;
      background: #fffbeb;
      border: 1px solid #fcd34d;
      border-radius: var(--r);
      padding: 18px 22px;
      font-size: 14px;
      color: #78350f;
      line-height: 1.6;
    }

    .elig-note strong {
      font-weight: 600;
    }

    /* PACKAGES */
    .pkg-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
      margin-bottom: 28px;
    }

    .pkg-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: var(--r-lg);
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: box-shadow .2s, transform .2s;
    }

    .pkg-card:hover {
      box-shadow: var(--shadow-md);
      transform: translateY(-2px);
    }

    .pkg-card.featured {
      border-color: var(--blue);
      box-shadow: 0 0 0 2px var(--blue), var(--shadow);
    }

    .pkg-header {
      padding: 24px;
      background: var(--gray-light);
      border-bottom: 1px solid var(--border);
      position: relative;
    }

    .pkg-card.featured .pkg-header {
      background: var(--navy);
    }

    .pkg-badge-pill {
      position: absolute;
      top: 14px;
      right: 14px;
      background: var(--blue);
      color: #fff;
      font-size: 11px;
      font-weight: 600;
      padding: 3px 10px;
      border-radius: 100px;
    }

    .pkg-icon-wrap {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      background: var(--blue-light);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 12px;
    }

    .pkg-card.featured .pkg-icon-wrap {
      background: rgba(255, 255, 255, .12);
    }

    .pkg-icon-wrap svg {
      width: 22px;
      height: 22px;
      stroke: var(--blue);
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .pkg-card.featured .pkg-icon-wrap svg {
      stroke: #93c5fd;
    }

    .pkg-name {
      font-size: 18px;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 2px;
    }

    .pkg-card.featured .pkg-name {
      color: #fff;
    }

    .pkg-sub {
      font-size: 13px;
      color: var(--gray);
    }

    .pkg-card.featured .pkg-sub {
      color: rgba(255, 255, 255, .5);
    }

    .pkg-tags {
      display: flex;
      gap: 6px;
      flex-wrap: wrap;
      margin-top: 10px;
    }

    .pkg-tag {
      font-size: 11px;
      font-weight: 500;
      padding: 2px 9px;
      border-radius: 100px;
      background: rgba(26, 86, 219, .1);
      color: var(--blue);
    }

    .pkg-card.featured .pkg-tag {
      background: rgba(255, 255, 255, .12);
      color: rgba(255, 255, 255, .8);
    }

    .pkg-body {
      padding: 20px 24px 24px;
    }

    .pkg-for-title {
      font-size: 12px;
      font-weight: 600;
      color: var(--gray);
      text-transform: uppercase;
      letter-spacing: .07em;
      margin-bottom: 8px;
    }

    .pkg-for-list {
      list-style: none;
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .pkg-for-list li {
      font-size: 13px;
      color: #374151;
      display: flex;
      gap: 8px;
      align-items: flex-start;
    }

    .pkg-for-list li::before {
      content: '→';
      color: var(--blue);
      font-weight: 600;
      flex-shrink: 0;
    }

    /* ACCORDION */
    .pkg-accordion {
      border-top: 1px solid var(--border);
    }

    .acc-item {
      border-bottom: 1px solid var(--border);
    }

    .acc-trigger {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 0;
      background: none;
      border: none;
      cursor: pointer;
      font-family: inherit;
      text-align: left;
    }

    .acc-trigger-left {
      display: flex;
      align-items: center;
      gap: 9px;
    }

    .acc-check {
      width: 18px;
      height: 18px;
      border-radius: 50%;
      background: #d1fae5;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .acc-check svg {
      width: 10px;
      height: 10px;
      stroke: var(--green);
      fill: none;
      stroke-width: 2.5;
    }

    .acc-title {
      font-size: 13px;
      font-weight: 600;
      color: var(--navy);
    }

    .acc-sub {
      font-size: 11px;
      color: var(--gray);
    }

    .acc-arrow {
      width: 16px;
      height: 16px;
      flex-shrink: 0;
      transition: transform .25s;
    }

    .acc-arrow svg {
      width: 16px;
      height: 16px;
      stroke: var(--gray);
      fill: none;
      stroke-width: 2;
    }

    .acc-item.open .acc-arrow {
      transform: rotate(180deg);
    }

    .acc-body {
      overflow: hidden;
      max-height: 0;
      transition: max-height .3s ease, padding .3s;
    }

    .acc-item.open .acc-body {
      max-height: 400px;
      padding-bottom: 12px;
    }

    .acc-body ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .acc-body ul li {
      font-size: 13px;
      color: var(--gray);
      padding-left: 14px;
      position: relative;
      line-height: 1.5;
    }

    .acc-body ul li::before {
      content: '–';
      position: absolute;
      left: 0;
      color: #d1d5db;
    }

    .pkg-price {
      background: var(--gray-light);
      border-radius: var(--r);
      padding: 14px 16px;
      margin-top: 18px;
    }

    .pkg-price-row {
      display: flex;
      justify-content: space-between;
      font-size: 13px;
      margin-bottom: 4px;
      color: var(--gray);
    }

    .pkg-price-row:last-child {
      font-size: 14px;
      font-weight: 700;
      color: var(--navy);
      padding-top: 8px;
      border-top: 1px solid var(--border);
      margin-top: 6px;
    }

    .pkg-cta {
      display: block;
      text-align: center;
      margin-top: 16px;
      padding: 12px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 14px;
      border: 1.5px solid var(--border);
      color: var(--navy);
      transition: all .15s;
    }

    .pkg-cta:hover {
      border-color: var(--blue);
      color: var(--blue);
      background: var(--blue-light);
    }

    .pkg-card.featured .pkg-cta {
      background: var(--blue);
      border-color: var(--blue);
      color: #fff;
    }

    .pkg-card.featured .pkg-cta:hover {
      background: var(--blue-dark);
    }

    /* PALYA INLINE BADGE on pkg */
    .pkg-palya-note {
      display: flex;
      align-items: center;
      gap: 8px;
      background: #fffbeb;
      border: 1px solid #fcd34d;
      border-radius: 8px;
      padding: 10px 14px;
      margin-top: 14px;
      font-size: 12px;
      color: #78350f;
      font-weight: 500;
      line-height: 1.4;
    }

    .pkg-palya-note svg {
      width: 14px;
      height: 14px;
      stroke: #f59e0b;
      fill: none;
      stroke-width: 2;
      flex-shrink: 0;
    }

    .custom-strip {
      background: linear-gradient(135deg, var(--navy), #16213e);
      border-radius: var(--r-lg);
      padding: 36px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
      flex-wrap: wrap;
    }

    .custom-strip-text h3 {
      font-size: 20px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 7px;
    }

    .custom-strip-text p {
      font-size: 15px;
      color: rgba(255, 255, 255, .6);
      max-width: 480px;
      line-height: 1.6;
    }

    .custom-strip-text p strong {
      color: #fbbf24;
      font-weight: 500;
    }

    /* WHY */
    .why-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .why-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: var(--r);
      padding: 24px;
      box-shadow: var(--shadow);
    }

    .why-num {
      font-size: 32px;
      font-weight: 700;
      color: var(--gray-light);
      line-height: 1;
      margin-bottom: 12px;
    }

    .why-card h3 {
      font-size: 15px;
      font-weight: 600;
      margin-bottom: 6px;
    }

    .why-card p {
      font-size: 13px;
      color: var(--gray);
      line-height: 1.6;
    }

    /* FAQ */
    .faq-list {
      max-width: 760px;
      margin: 0 auto;
    }

    .faq-item {
      border-bottom: 1px solid var(--border);
    }

    .faq-trigger {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 0;
      background: none;
      border: none;
      cursor: pointer;
      font-family: inherit;
      text-align: left;
      font-size: 15px;
      font-weight: 600;
      color: var(--navy);
    }

    .faq-arrow {
      width: 20px;
      height: 20px;
      flex-shrink: 0;
      transition: transform .25s;
    }

    .faq-arrow svg {
      width: 20px;
      height: 20px;
      stroke: var(--gray);
      fill: none;
      stroke-width: 2;
    }

    .faq-item.open .faq-arrow {
      transform: rotate(180deg);
    }

    .faq-body {
      overflow: hidden;
      max-height: 0;
      transition: max-height .3s ease;
    }

    .faq-item.open .faq-body {
      max-height: 300px;
    }

    .faq-body p {
      font-size: 15px;
      color: var(--gray);
      line-height: 1.7;
      padding-bottom: 20px;
    }

    /* CONTACT */
    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 460px;
      gap: 64px;
      align-items: start;
    }

    .contact-info-list {
      display: flex;
      flex-direction: column;
      gap: 14px;
      margin-top: 28px;
    }

    .ci-item {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .ci-icon {
      width: 42px;
      height: 42px;
      border-radius: 10px;
      background: rgba(255, 255, 255, .08);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .ci-icon svg {
      width: 20px;
      height: 20px;
      stroke: rgba(255, 255, 255, .7);
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .ci-text {
      font-size: 15px;
      color: rgba(255, 255, 255, .7);
    }

    .ci-text a {
      color: #fbbf24;
    }

    .contact-bullets {
      list-style: none;
      margin-top: 24px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .contact-bullets li {
      font-size: 14px;
      color: rgba(255, 255, 255, .55);
      display: flex;
      gap: 10px;
      align-items: flex-start;
    }

    .contact-bullets li::before {
      content: '✓';
      color: #6ee7b7;
      font-weight: 700;
      flex-shrink: 0;
    }

    .contact-form {
      background: #fff;
      border-radius: var(--r-lg);
      padding: 36px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, .25);
    }

    .cf-title {
      font-size: 18px;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 24px;
    }

    .cf-row {
      margin-bottom: 14px;
    }

    .cf-row label {
      display: block;
      font-size: 12px;
      font-weight: 600;
      color: #374151;
      text-transform: uppercase;
      letter-spacing: .06em;
      margin-bottom: 5px;
    }

    .cf-row input,
    .cf-row textarea {
      width: 100%;
      border: 1.5px solid var(--border);
      border-radius: 8px;
      padding: 10px 13px;
      font-family: inherit;
      font-size: 15px;
      color: var(--navy);
      outline: none;
      transition: border-color .15s;
      background: #fff;
    }

    .cf-row input:focus,
    .cf-row textarea:focus {
      border-color: var(--blue);
      box-shadow: 0 0 0 3px rgba(26, 86, 219, .1);
    }

    .cf-row textarea {
      resize: vertical;
      min-height: 90px;
    }

    .cf-check {
      display: flex;
      align-items: flex-start;
      gap: 9px;
      margin-bottom: 18px;
    }

    .cf-check input[type=checkbox] {
      width: 16px;
      height: 16px;
      margin-top: 2px;
      accent-color: var(--blue);
      flex-shrink: 0;
    }

    .cf-check label {
      font-size: 12px;
      color: var(--gray);
      line-height: 1.5;
    }

    .cf-check label a {
      color: var(--blue);
    }

    .cf-submit {
      width: 100%;
      background: var(--blue);
      color: #fff;
      font-family: inherit;
      font-weight: 600;
      font-size: 15px;
      padding: 14px;
      border: none;
      border-radius: 9px;
      cursor: pointer;
      transition: background .15s, transform .15s;
    }

    .cf-submit:hover {
      background: var(--blue-dark);
      transform: translateY(-1px);
    }

    .cf-note {
      font-size: 12px;
      color: var(--gray);
      text-align: center;
      margin-top: 10px;
    }

    /* reCAPTCHA badge eltüntetés (csak ha minden oldalon feltüntetjük szövegesen) */
    .grecaptcha-badge {
      visibility: hidden;
    }

    .recaptcha-notice {
      font-size: 11px;
      color: var(--gray);
      text-align: center;
      margin-top: 8px;
      line-height: 1.5;
    }

    .recaptcha-notice a {
      color: var(--blue);
    }

    /* FOOTER */
    .site-footer {
      background: #0f0f1a;
      padding: 28px 24px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 14px;
    }

    .footer-logo {
      font-size: 15px;
      font-weight: 700;
      color: rgba(255, 255, 255, .5);
    }

    .footer-logo span {
      color: var(--accent);
    }

    .footer-links {
      display: flex;
      gap: 20px;
    }

    .footer-links a {
      font-size: 13px;
      color: rgba(255, 255, 255, .3);
      transition: color .15s;
    }

    .footer-links a:hover {
      color: rgba(255, 255, 255, .7);
    }

    .footer-copy {
      font-size: 12px;
      color: rgba(255, 255, 255, .2);
    }

    /* RESPONSIVE */
    @media(max-width:960px) {

      .promise-grid,
      .elig-grid,
      .contact-grid {
        grid-template-columns: 1fr;
      }

      .finance-grid {
        grid-template-columns: 1fr 1fr;
      }

      .hw-grid {
        grid-template-columns: 1fr 1fr;
      }

      .hw-step:not(:last-child)::after {
        display: none;
      }

      .pkg-grid {
        grid-template-columns: 1fr;
      }

      .why-grid {
        grid-template-columns: 1fr 1fr;
      }

      .custom-strip,
      .palya-banner {
        flex-direction: column;
      }
    }

    @media(max-width:600px) {
      .site-nav {
        padding: 0 16px;
      }

      .nav-links {
        display: none;
      }

      .section {
        padding: 56px 16px;
      }

      .hero {
        padding: 56px 16px 64px;
      }

      .finance-grid {
        grid-template-columns: 1fr;
      }

      .hw-grid {
        grid-template-columns: 1fr;
      }

      .why-grid {
        grid-template-columns: 1fr;
      }
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
      color: var(--text, #1a1a2e);
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
      color: var(--text-mid, #6b7280);
      transition: background .2s ease, color .2s ease;
    }

    .status-modal-close:hover {
      background: #eaf2fb;
      color: var(--accent, #f59e0b);
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
      background: #e6ffed;
      color: #059669;
    }

    .error-icon {
      background: #ffeeee;
      color: #dc2626;
    }

    .status-alert {
      border-radius: 14px;
      padding: 16px 18px;
      font-size: 14px;
      line-height: 1.65;
      border: 1px solid var(--border, #e5e7eb);
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


    /* ─── SEARCH ─── */
    .search-bar {
      background: var(--surface);
      border-bottom: 1px solid var(--border);
      padding: 16px 40px;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: var(--shadow-sm);
    }
    .search-inner {
      max-width: 860px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .search-icon { color: var(--accent); font-size: 1.1rem; flex-shrink: 0; }
    input[type=search] {
      flex: 1;
      border: none;
      outline: none;
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      color: var(--ink);
      background: transparent;
    }
    input[type=search]::placeholder { color: var(--ink3); }
    .search-count {
      font-size: 0.78rem;
      color: var(--ink3);
      white-space: nowrap;
    }

    /* ─── LAYOUT ─── */
    .layout {
      max-width: 1060px;
      margin: 0 auto;
      padding: 32px 40px 80px;
    }

    /* ─── CATEGORY PILLS ─── */
    .pills {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 32px;
    }
    .pill {
      padding: 6px 16px;
      border-radius: 30px;
      font-size: 0.78rem;
      font-weight: 500;
      cursor: pointer;
      border: 1.5px solid var(--border);
      background: var(--surface);
      color: var(--ink2);
      transition: all 0.18s;
      user-select: none;
    }
    .pill:hover { border-color: var(--accent); color: var(--accent); }
    .pill.active {
      background: #e8f0fe;
      border-color: #0d6efd;
      color: #0d6efd;
    }
    .pill .cnt {
      display: inline-block;
      margin-left: 6px;
      background: rgba(0,0,0,0.08);
      border-radius: 10px;
      padding: 0 6px;
      font-size: 0.7rem;
    }
    .pill.active .cnt { background: rgba(255,255,255,0.25); }

    /* ─── SECTION GROUP ─── */
    .cat-section { margin-bottom: 40px; }
    .cat-label {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 16px;
    }
    .cat-label-icon {
      width: 32px; height: 32px;
      border-radius: 9px;
      display: flex; align-items: center; justify-content: center;
      font-size: 1rem;
      flex-shrink: 0;
    }
    .cat-label-text {
      font-family: 'Inter', sans-serif;
      font-size: 1.15rem;
      font-weight: 600;
      color: var(--ink);
      letter-spacing: -0.01em;
    }

    /* ─── FAQ ITEM ─── */
    .faq-item {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 14px;
      margin-bottom: 10px;
      overflow: hidden;
      transition: box-shadow 0.2s;
    }
    .faq-item:hover { box-shadow: var(--shadow); }
    .faq-item.open { box-shadow: var(--shadow); }
    .faq-q {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      padding: 18px 22px;
      cursor: pointer;
      user-select: none;
      transition: background 0.15s;
    }
    .faq-q:hover { background: var(--accent-light); }
    .faq-item.open .faq-q { background: var(--accent-light); }
    .faq-num {
      font-size: 0.72rem;
      font-weight: 700;
      color: #0d6efd;
      background: var(--accent-light);
      border-radius: 6px;
      padding: 2px 7px;
      flex-shrink: 0;
      margin-top: 2px;
      min-width: 28px;
      text-align: center;
    }
    .faq-item.open .faq-num { background: var(--accent); color: #fff; }
    .faq-q-text {
      flex: 1;
      font-size: 0.93rem;
      font-weight: 500;
      line-height: 1.5;
      color: var(--ink);
    }
    .faq-chevron {
      width: 22px; height: 22px;
      border-radius: 50%;
      background: var(--bg);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      margin-top: 1px;
      transition: transform 0.28s cubic-bezier(.4,0,.2,1), background 0.15s;
      font-size: 0.65rem;
      color: var(--ink3);
    }
    .faq-item.open .faq-chevron {
      transform: rotate(180deg);
      background: var(--accent);
      color: #fff;
    }
    .faq-a {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.35s cubic-bezier(.4,0,.2,1);
    }
    .faq-a-inner {
      padding: 0 22px 20px 64px;
      font-size: 0.88rem;
      line-height: 1.75;
      color: var(--ink2);
      border-top: 1px solid var(--border);
      margin-top: -1px;
      padding-top: 16px;
    }
    .faq-a-inner a {
      color: var(--accent);
      text-decoration: underline;
      word-break: break-all;
    }

    /* ─── NO RESULTS ─── */
    .no-results {
      text-align: center;
      padding: 60px 20px;
      color: var(--ink3);
      display: none;
    }
    .no-results svg { opacity: 0.3; margin-bottom: 16px; }
    .no-results p { font-size: 0.95rem; }

    /* ─── HIGHLIGHT ─── */
    mark {
      background: #ffe0b2;
      color: var(--ink);
      border-radius: 2px;
      padding: 0 1px;
    }

    /* ─── FOOTER ─── */
    .footer {
      background: var(--surface);
      border-top: 1px solid var(--border);
      padding: 20px 40px;
      text-align: center;
      font-size: 0.82rem;
      color: var(--ink3);
    }
    .footer a { color: var(--accent); text-decoration: none; }
    .footer a:hover { text-decoration: underline; }

    @media(max-width: 700px) {
      .hero { padding: 36px 20px 32px; }
      .search-bar { padding: 12px 20px; }
      .layout { padding: 24px 16px 60px; }
      .footer { padding: 16px 20px; }
    }

  </style>

</head>

<body>

  @include('layouts.nav')


  <!-- HERO -->
  <section class="hero">
    <div class="hero-badge"><span class="hero-badge-dot"></span>DIMOP Plusz 1.2.6/B</div>
    <h1>Gyakran Ismételt<br><em>Kérdések</em></h1>
    <p class="hero-lead">Digitális fejlesztési támogatás – pályázati útmutató és válaszok a leggyakoribb kérdésekre.</p>

    <div class="hero-stats">
      <div class="hero-stat">
        <div class="hero-stat-val gold">49</div>
        <div class="hero-stat-label">Kérdés</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-val">8</div>
        <div class="hero-stat-label">témakör</div>
      </div>
    </div>
  </section>


<div class="search-bar">
  <div class="search-inner">
    <span class="search-icon">🔍</span>
    <input type="search" id="searchInput" placeholder="Keresés a kérdések között…" oninput="doSearch()">
    <span class="search-count" id="searchCount"></span>
  </div>
</div>

<div class="layout">
  <div class="pills" id="pills"></div>
  <div id="faqContainer"></div>
  <div class="no-results" id="noResults">
    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
    <p>Nem található egyező kérdés.</p>
  </div>
</div>

  <!-- FAQ -->
  <!-- <section class="section" id="gyik">
    <div class="container">
      <div class="section-eyebrow">Gyakori kérdések</div>
      <h2 class="section-h2" style="text-align:center;">Amit a legtöbben megkérdeznek</h2>
      <p class="section-lead" style="margin:0 auto 48px;text-align:center;">Röviden összefoglaltuk a legfontosabb tudnivalókat.</p>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">Kell önerő a projekthez?<div class="faq-arrow"><svg viewBox="0 0 24 24">
                <polyline points="6 9 12 15 18 9" />
              </svg></div></button>
          <div class="faq-body">
            <p>Igen, a projekt elszámolható összköltségének 10%-a önerőből szükséges. Egy 12 millió forintos támogatásnál körülbelül 1,3 millió forintos önerővel kell számolni. Konzultáció során segítünk ezt pontosan átlátni.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">Csak hardvert lehet beszerezni?<div class="faq-arrow"><svg viewBox="0 0 24 24">
                <polyline points="6 9 12 15 18 9" />
              </svg></div></button>
          <div class="faq-body">
            <p>Nem. A támogatás hardverre, szoftverre, szolgáltatásra és képzésre is fordítható. Az eszközök aránya maximum 30% lehet, tehát a többi résznek szoftver, szolgáltatás és képzés kell, hogy legyen. Éppen ezért érdemes komplex digitális fejlesztésben gondolkodni.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">Mit jelent, hogy a pályázatírás díját átvállaljátok?<div class="faq-arrow"><svg viewBox="0 0 24 24">
                <polyline points="6 9 12 15 18 9" />
              </svg></div></button>
          <div class="faq-body">
            <p>Ha a három előre összeállított csomag egyikét választod, a pályázatíró partnereink díját teljes egészében mi fizetjük ki. Neked csak az igényedet kell elmondanod – a szakmai tartalommal, dokumentációval és a beadással járó munkát mi intézzük.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">Megkereshetem a Paksi Informatikát akkor is, ha még nincs végleges csomagom?<div class="faq-arrow"><svg viewBox="0 0 24 24">
                <polyline points="6 9 12 15 18 9" />
              </svg></div></button>
          <div class="faq-body">
            <p>Igen, és ezt kifejezetten ajánljuk. Az első egyeztetés sokszor pont azért hasznos, mert segít eldönteni, hogy a három csomag közül melyik illik hozzád, vagy inkább egyedi megoldás szükséges.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">Mennyi idő alatt kell megvalósítani a projektet?<div class="faq-arrow"><svg viewBox="0 0 24 24">
                <polyline points="6 9 12 15 18 9" />
              </svg></div></button>
          <div class="faq-body">
            <p>A projekt fizikai befejezésére a megkezdéstől számított legfeljebb 24 hónap áll rendelkezésre. A végső határidő 2028. szeptember 30. Utána 3 éves fenntartási kötelezettség van – ebben is segítünk.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" onclick="toggleFaq(this)">Segítetek a megvalósítás után is?<div class="faq-arrow"><svg viewBox="0 0 24 24">
                <polyline points="6 9 12 15 18 9" />
              </svg></div></button>
          <div class="faq-body">
            <p>Igen. Nem csak a rendszer bevezetésében, hanem az üzemeltetésben, támogatásban és továbbfejlesztésben is számíthatsz ránk. A 3 éves fenntartási kötelezettséget együtt teljesítjük.</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->


<script>
const RAW = [
  { cat: 'Általános információk', q: 'Mely régiók támogathatók?', a: 'A pályázat keretében Budapest kivételével Magyarország teljes területe, azaz a kevésbé fejlett régiók támogathatóak.' },
  { cat: 'Általános információk', q: 'Mit jelent az egységköltség alapú elszámolás?', a: 'A támogatás összege előre meghatározott egységköltségek alapján kerül elszámolásra, nem a tényleges beszerzési ár szerint. Az egységköltségek felmerülését nem kell alátámasztania pénzügyi háttérdokumentumokkal (például számlával, bankszámlakivonattal, összesítővel, illetve egyéb számviteli bizonylattal, piaci árnak való megfelelést alátámasztó dokumentumokkal), és a piaci árnak való megfelelés sem vizsgálandó, ugyanakkor a fejlesztések megvalósítását és a feltételek teljesítését igazolni szükséges. A tervezés és az elszámolás során is a Felhívásban egységköltségként megadott összegeket szükséges figyelembe venni, azoktól eltérni nem lehetséges. Az egységköltségek meghatározásakor az egységköltségekbe a közvetett tevékenységekre jutó összegek is beépítésre kerültek, így azokkal nem kell tételesen elszámolni.' },
  { cat: 'Általános információk', q: 'Lesz a kitöltő felületen „Gazdálkodási adatok" fül?', a: 'Az EPTK felületen jelen konstrukcióban nem került ilyen menüpont paraméterezésre. A gazdálkodásra vonatkozó adatokat a KKV minősítéshez szükséges nyilatkozatban kell feltüntetni, mely a Felhívás 5a és 5b melléklete.' },
  { cat: 'Általános információk', q: 'Az EPTK Felületen a Költségeknél szükséges kitölteni a 2000 karakteres szöveges részletezés mezőt?', a: 'A támogatási kérelem kitöltéséhez az EPTK felületen elérhető lesz egy kitöltési útmutató, melyben rögzítésre került a „Részletezés" mezők kitöltésének szükségessége. A 2000 karakter felhasználása nem szükséges. Az „Informatikai fejlesztés" tevékenységhez kapcsolódó költségvetési sor esetében a részletezés mező kitöltése nem kötelező, azonban a kitöltési útmutatóban feltüntetésre került egy megjeleníteni javasolt szöveg. A támogatást igénylőnek lehetősége van úgy dönteni, hogy alkalmazza a javasolt sablonmondatot, vagy nem ír semmit, vagy saját szavaival írja le, hogy mely támogatott fejlesztési célok és eszközök vonatkozásában kíván költséget elszámolni.\n\nA „Nem finanszírozott tevékenységhez" kapcsolódó költségvetési soron azonban kötelező a Részletezés mező töltése. Amennyiben könyvelő kerül alkalmazásra, akkor annak költségéről kell nyilatkozni a „Részletezés" mezőben, ha pedig nem támogatott fejlesztési cél szerepel a támogatási kérelemben, akkor annak nevét és költségeit kell feltüntetni a „Részletezés"-ben.' },
  { cat: 'Általános információk', q: 'Digitális Fejlesztési Koncepció készítésének vállalása esetén mikor szükséges jelentkezni a Kamaránál?', a: 'Amennyiben a Digitális Fejlesztési Koncepció készítése várhatóan szükséges vagy a pályázó önkéntesen vállalja annak elkészítését, akkor az MKIK-val a kapcsolatot már most is felvehetik. A támogatási kérelem benyújtása során a pályázónak majd nyilatkoznia szükséges arról, hogy amennyiben a támogatási kérelem benyújtásakor nem rendelkezik Digitális Fejlesztési Koncepcióval, akkor a projekt fizikai befejezés napjáig vállalja-e annak elkészítését. A koncepciónak legkésőbb ebben az esetben a projekt fizikai befejezésének napjáig szükséges elkészülnie.\n\nSzükséges még figyelembe venni a felhívás 2.3.2 pont C. alpontjában foglalt a Támogatói Okirat hatálybalépését követő 90 napon belüli felkeresésre vonatkozó előírást.' },
  { cat: 'Általános információk', q: 'A Digitális Fejlesztési Koncepció, illetve Stratégia készítése ingyenes a pályázóknak?', a: 'Igen, ezek a szolgáltatások térítésmentesen igénybe vehetőek a vállalkozások számára.' },
  { cat: 'Általános információk', q: 'Mikor várható a pályázati adatlap megjelenése?', a: 'A pályázati adatlap/kitöltő felület a beadási időpont kezdetekor lesz elérhető, előtöltésre nem lesz lehetőség.' },
  { cat: 'Általános információk', q: 'A bemeneti mérésen megadott adatokat kell-e igazolni? Ha nem, akkor hogyan lesz annak hitelessége ellenőrizve?', a: 'Igen, kell igazolni, de csak a záró beszámolóban kerül vizsgálatra a kimeneti mérés eredményével együtt.' },

  { cat: 'Jogosultság', q: 'Pályázhat egyéni vállalkozó?', a: 'Igen, amennyiben megfelel a Felhívás 1.1 pontjában foglalt pályázati feltételeknek (pl. rendelkezik lezárt teljes (365 napot jelentő) üzleti évvel) és 1.2. pontban foglalt kizáró okok sem állnak fenn vele szemben.' },
  { cat: 'Jogosultság', q: 'Pályázhat 0 fős vállalkozás?', a: 'Igen, a 0 fős statisztikai létszám nem kizáró ok, azonban a projekt szakmai megvalósíthatóságát létszámtól függetlenül biztosítani kell.' },
  { cat: 'Jogosultság', q: 'Kapcsolódó vagy partnervállalkozások pályázhatnak?', a: 'Igen, nem kizáró ok, de a jogosultságot egyedileg és külön szükséges vizsgálni. KKV minősítés szempontjából fontos, hogy a vállalkozás rendelkezik kapcsolódó és partnervállalkozásokkal. A de minimis keret szempontjából pedig az egy és ugyanazon vállalkozásokat szükséges még figyelembe venni.' },
  { cat: 'Jogosultság', q: 'Ugyanaz a tulajdonos több cégben pályázhat?', a: 'Igen, ugyanaz a tulajdonos több cégben is pályázhat. Az érintett vállalkozásoknak, mint támogatást igénylők, külön-külön kell megfelelniük a Felhívás 1.1. pontjában említett támogatást igénylői körnek és nem állhatnak fenn a Felhívás 1.2. pontjában nevezett kizáró okok. A KKV besorolás és de minimis keret összevonás szempontjából vizsgálni szükséges az azonos tulajdonos által felmerülhető kapcsolt/kapcsolódó vagy partnervállalkozási helyzetet. Amennyiben a vállalkozások, melyek tulajdonosa közös, egy helyen találhatóak és így egy helyen valósulnak meg a projektben vállalt fejlesztések, abban az esetben gondoskodni kell az egyes vállalkozások fejlesztéseinek egymástól történő lehatárolásáról.' },
  { cat: 'Jogosultság', q: 'Jelen támogatás mellett megvalósítható más pályázatok támogatásából fejlesztés (pl. GINOP, honlap program)?', a: 'Igen, jelen támogatás mellett megvalósítható más pályázatok támogatásából is fejlesztés, amennyiben az egyes fejlesztések szakmai tartalma nem azonos és a felhívások nem zárják ki egymást. Jelen felhívás keretében csak azon fejlesztési célokra igényelhető támogatás, melyek a DKF Kft. által üzemeltetett felmérő rendszerből származó – a támogatási kérelem benyújtásakor beadott – igazoláson is „fejlesztendő" eredménnyel szereplő szempontok.' },
  { cat: 'Jogosultság', q: 'GINOP_PLUSZ-1.2.4 pályázat mindenképp kizáró vagy van valamilyen együttindulási lehetőség?', a: 'A Felhívás alapján, amennyiben a támogatási kérelem benyújtását megelőző 3 évben a támogatási kérelemben bemutatott szakmai tartalommal azonos fejlesztésre részben vagy egészben támogatásban részesült, akkor ebben az esetben nem nyújtható támogatás. Tehát ha a GINOP_PLUSZ-1.2.4 pályázat keretében azonos szakmai tartalom vonatkozásában történik fejlesztés, akkor az kizáró oknak számít.' },
  { cat: 'Jogosultság', q: 'KATA-s vállalkozó is pályázhat?', a: 'Igen, amennyiben megfelel a Felhívás 1.1. pontjában foglalt pályázati feltételeknek és 1.2. pontban foglalt kizáró okok sem állnak fenn vele szemben.' },
  { cat: 'Jogosultság', q: 'Két cég azonos székhellyel pályázhat?', a: 'Igen, két cég azonos székhellyel adhat be támogatási kérelmet. A két cég külön-külön tud benyújtani támogatási kérelmet, de nyilatkozniuk szükséges arról, hogy működésük és a támogatási kérelemben vállalt fejlesztésük egymástól elkülönül.' },
  { cat: 'Jogosultság', q: 'Indulhat-e olyan vállalkozás, ahol az utolsó év saját tőkéje a törzstőke mértéke alá csökkent?', a: 'Igen, indulhat, mivel a Felhívás és az ÁUF (Általános Útmutató a Felhívásokhoz) nem tartalmaz a törzstőkére vonatkozó előírást.' },
  { cat: 'Jogosultság', q: 'Indulhat-e olyan vállalkozás, ahol az előző évi saját tőke negatív?', a: 'A Felhívás nem fogalmaz meg saját tőkére vonatkozó elvárásokat, így pályázhat.' },
  { cat: 'Jogosultság', q: 'Egyéni vállalkozó, aki 2025-ben is több hónapot szünetelt, adhat be támogatási kérelmet?', a: 'A Felhívás értelmében támogatási kérelmet azon vállalkozások nyújthatnak be, amelyek rendelkeznek legalább egy lezárt teljes (365 napot jelentő) üzleti évvel/bevallási időszakkal, amely 2024. évnél nem régebbi. Egyéni vállalkozók esetében az üzleti év a naptári évvel azonos (január 1-jétől december 31-éig), így a bevallási időszak is ehhez igazodik.\n\nAmennyiben a legalább egy lezárt teljes (365 napot jelentő) üzleti év valóban teljesül és az 2024-nél nem régebbi, abban az esetben van lehetőség a kérelem benyújtására. A projekt megvalósítás és fenntartási időszakában aktív státuszúnak kell maradnia a támogatást igénylőnek, tevékenységét nem szüneteltetheti.' },
  { cat: 'Jogosultság', q: 'Ha egy házastárs pár külön-külön egyéni vállalkozóként működik nem azonos piacon, mindketten pályázhatnak?', a: 'Mindkét egyéni vállalkozó tud benyújtani támogatási kérelmet, amennyiben külön-külön megfelelnek a Felhívás előírásainak.' },
  { cat: 'Jogosultság', q: 'Ha 2 természetes személy tulajdonos nem házastársak, de van közös gyermekük, közeli hozzátartozónak számítanak?', a: 'A Ptk. 8:1 § (1) bekezdése határozza meg, hogy kiket értünk közeli hozzátartozók alatt. Alapvetően nem a közös gyermek határozza meg, hogy két természetes személy közeli hozzátartozó-e.' },
  { cat: 'Jogosultság', q: 'Olyan egyéni vállalkozó, aki minden nyáron 2 hónapot szünetelteti, részt vehet a pályázaton?', a: 'A Felhívás szerint szükséges rendelkezni legalább egy lezárt teljes (365 napot jelentő) üzleti évvel, így ha a bevallás időszaka nem teljes 365 napot ölel fel, akkor nem tud támogatási kérelmet benyújtani. Továbbá a Felhívás 1.2 pontja alapján a támogatást igénylő a támogatási kérelem benyújtása után és a fenntartási időszak vége előtt sem szüneteltetheti működését.' },

  { cat: 'Megvalósítási helyszín', q: 'Lehet bérelt ingatlan a megvalósítási helyszín?', a: 'Igen, a projekt megvalósítási helyszíne lehet bérelt ingatlan is, amennyiben a bérlemény a támogatást igénylő bejegyzett székhelye, telephelye, fióktelepe, irodája (ide értve az alirodát és fiókirodát ügyvédi iroda / egyéni ügyvéd esetén).' },
  { cat: 'Megvalósítási helyszín', q: 'Megadható több megvalósítási helyszín?', a: 'Nem, a pályázatban kizárólag csak egy megvalósítási helyszín jelölhető meg.' },
  { cat: 'Megvalósítási helyszín', q: 'Budapesti székhelyű cég pályázhat?', a: 'Igen, ha a projekt megvalósítási helyszíne Budapest közigazgatási határán kívül található és a megadott helyszín a támogatást igénylő bejegyzett telephelye, fióktelepe, irodája.' },
  { cat: 'Megvalósítási helyszín', q: 'Mikortól kell rendelkezni a megvalósítási helyszínnel?', a: 'Legkésőbb a pályázat benyújtásakor igazolhatóan (Céginfo, Magyar Ügyvédi Kamara – Kamarai nyilvántartás, NAV Egyéni vállalkozói nyilvántartás) rendelkezni szükséges vele.' },
  { cat: 'Megvalósítási helyszín', q: 'Megvalósítás során módosítható lesz a megvalósítási helyszín?', a: 'A projekt megvalósítási időszakában a megvalósítási helyszín módosítását a kedvezményezett köteles bejelenteni az Irányító Hatóságnak a 256/2021. (V. 18.) Kormányrendelet 43. alcíme alapján. A módosított helyszínnek is meg kell felelnie a Felhívásban a megvalósítási helyszínre vonatkozó elvárásoknak: 1 db helyszín lehet, és magyarországi kevésbé fejlett régióban kell lennie.' },

  { cat: 'Fejlesztési célok', q: 'A projektek keretében kötelező képzés megvalósítása?', a: 'Nem kötelező, attól függ, hogy milyen fejlesztési célt vállal. Amennyiben olyat, amelyben van képzés, akkor azt kötelező megvalósítani. A képzés megvalósítójára különösebb korlátozás nincs, a vállalkozással nem lehet összeférhetetlen, illetve saját teljesítésben nem végezhető (pl. saját munkavállaló nem tarthat képzést).' },
  { cat: 'Fejlesztési célok', q: 'Mit takar a felhő alapú szoftver egyszeri költsége?', a: 'A felhívás 2. mellékletében találhatóak az egyes egységköltségekhez kapcsolódó műszaki követelmények. A felhő alapú szoftver egyszeri díja a bevezetéshez, testreszabáshoz és induló szolgáltatásokhoz kapcsolódó költségeket tartalmazza.' },
  { cat: 'Fejlesztési célok', q: 'Helyben (lokálisan) telepített szoftver támogatott?', a: 'A konstrukció alapvetően felhő alapú, havidíjas megoldásokat támogat, így helyben telepített szoftver beszerzése nem támogatott jelen konstrukcióban. A támogathatóságot minden esetben a Felhívásban szereplő fejlesztési célok határozzák meg.' },
  { cat: 'Fejlesztési célok', q: 'Gyártás-előkészítő szoftverre is használható ez a pályázat?', a: 'Csak azok a szoftverek támogathatók, amelyek illeszkednek a Felhívásban meghatározott fejlesztési célokhoz és szerepelnek a támogatható megoldások között.' },
  { cat: 'Fejlesztési célok', q: 'Ha a pályázó rendelkezik egy elavult weboldallal/webshoppal, igényelhet-e támogatást annak fejlesztésére?', a: 'A vállalkozás tekintetében támogatás kizárólag azon fejlesztési célokra igényelhető, amelyek a digitális intenzitási szintfelmérő rendszerben „Fejlesztendő"-nek minősülnek. Ha a vállalkozás már rendelkezik weboldallal és webshoppal, annak továbbfejlesztésére nem igényelhető támogatás.' },
  { cat: 'Fejlesztési célok', q: 'Az ERP/CRM esetében kötelező az előírt minimum felhasználószámra előfizetni?', a: 'Nem. Az elvárás az, hogy a rendszer legyen képes kezelni a minimumot (ERP: 5–10 fő, CRM: 3–10 fő), de ha a vállalkozásnak például csak 2 CRM felhasználóra van szüksége, akkor elegendő csak 2 felhasználóra előfizetni.' },

  { cat: 'Beszerzések és szállítók', q: 'A projekt során lehet több szállítót is igénybe venni?', a: 'Igen, több szállítót is igénybe lehet venni.' },
  { cat: 'Beszerzések és szállítók', q: 'Eszközök és szoftverek szállítóját a beadásnál már meg kell adni?', a: 'A szállítót nem szükséges megadni a támogatási kérelem benyújtása során.' },
  { cat: 'Beszerzések és szállítók', q: 'Az eszközök is csak a vallalkozzdigitalisan.mkik.hu oldalról szerezhetők be? Ha nincs fent az eszköz, van-e lehetőség máshonnan beszerezni?', a: 'Alapesetben a választott komplex fejlesztés összetevőinek (fejlesztési célok és eszközök együttesen) beszerzése a <a href="https://vallalkozzdigitalisan.mkik.hu/palyazati_arajanlatok.html" target="_blank">vallalkozzdigitalisan.mkik.hu</a> akkreditált IKT szállítói és minősített termékkatalógusból történik. Amennyiben az eszköz nem elérhető ott, más piaci szállítótól is beszerezhető. Az egységköltségek alapján az árnak való megfelelést sem szükséges igazolni pénzügyi dokumentumokkal.' },
  { cat: 'Beszerzések és szállítók', q: 'Kérdés van a vallalkozzdigitalisan.mkik.hu oldallal kapcsolatban – kivel lehet felvenni a kapcsolatot?', a: 'Az érintett honlapon feltüntetett <a href="mailto:vallalkozzdigitalisan@mkik.hu">vallalkozzdigitalisan@mkik.hu</a> email címre küldje meg kérdését.' },
  { cat: 'Beszerzések és szállítók', q: 'Ha a katalógusban nem találunk alkalmas szállítót, hogyan változik a pályázati folyamat?', a: 'Amennyiben az összetevők nem elérhetők a katalógusból, azok más piaci szállítótól is beszerezhetők. A teljesítésre alkalmas szállítót a kedvezményezettnek kell kiválasztania. Egyéb elvárást a Felhívás nem fogalmaz meg a szállítókkal szemben, azonban az összeférhetetlenségi szabályokat szükséges betartani. Az egységköltségek alapján pénzügyi háttérdokumentumok benyújtása nem szükséges.' },
  { cat: 'Beszerzések és szállítók', q: 'Hogyan szerezhető be egy speciális szoftver, ami nem szerepel a szállítói listán?', a: 'Csak a Felhívásban szereplő szoftverek és eszközök szerezhetők be, melyek testreszabhatók. Amennyiben a Felhívásban foglaltaknak megfelelő szoftver vagy eszköz a szállítói adatbázisból nem szerezhető be, akkor bárhonnan a piacról megvásárolható.' },
  { cat: 'Beszerzések és szállítók', q: 'Ha olyan eszközt szeretnék, aminek kisebb a műszaki paramétere, mint az előírt minimum, kaphatok-e támogatást?', a: 'A Felhívásban szereplő minimum paramétereket teljesítenie kell a beszerzett eszköznek. Kisebb műszaki paraméterekkel rendelkező eszköz esetén az egységköltség nem kerül kifizetésre.' },

  { cat: 'Költségek és elszámolás', q: 'Milyen dokumentum kell az eszközbeszerzés elszámolásához?', a: 'A tárgyi eszközök elszámolásához eszköznyilvántartást szükséges benyújtani (Felhívás 3. sz. melléklete), melynek minden sorához csatolni kell üzembe helyezési okmányt / szállítólevelet / átadás-átvételi jegyzőkönyvet / állományba vételi bizonylatot / üzembe helyezési jegyzőkönyvet a Felhívás 7.3.1. pontjában foglaltaknak megfelelően.' },
  { cat: 'Költségek és elszámolás', q: 'Mi történik, ha olcsóbban szerzem be az eszközt/szoftvert a meghatározott egységárnál?', a: 'Az elszámolás ebben az esetben is az egységköltség alapján történik. Ha olcsóbban került beszerzésre az eszköz/szoftver, akkor is a Felhívásban szereplő egységköltség kifizetése történik meg.' },
  { cat: 'Költségek és elszámolás', q: 'Szükséges a Jelentés az időközi kifizetéshez?', a: 'Nem, a Jelentést a záró elszámoláshoz kell benyújtani.' },
  { cat: 'Költségek és elszámolás', q: 'Milyen költségeket lehet elszámolni időközi kifizetésben?', a: 'Az időközi kifizetés keretében a Felhívásban meghatározott feltételek szerint az eszközbeszerzésekhez kapcsolódó költségek számolhatók el.' },
  { cat: 'Költségek és elszámolás', q: 'Történhet-e magasabb áron a beszerzés, mint a megadott maximum egységár?', a: 'Történhet magasabb áron a beszerzés, azonban a tervezés és az elszámolás során is a Felhívásban szereplő egységköltségként megadott összegeket szükséges figyelembe venni. Ha drágábban került beszerzésre eszköz/szoftver, akkor is a Felhívásban szereplő egységköltség kifizetése történik meg.' },
  { cat: 'Költségek és elszámolás', q: 'Az előleggel 12 hónapon belül kell elszámolni 60%-ban. Időközi elszámolást kell beadni? Milyen dokumentummal?', a: 'Igen, időközi elszámolás benyújtása előlegigénylés esetében mindenképp szükséges, és kizárólag az eszközökkel lehet elszámolni. Az eszköznyilvántartást (Felhívás 3. sz. melléklete) kell majd benyújtani, valamint a Felhívás 7.3.1. pontjában foglalt dokumentumot.' },

  { cat: 'Fenntartási kötelezettség', q: 'Mit kell fenntartani a projekt után?', a: 'A projekt keretében megvalósított, támogatással létrehozott fejlesztést, információs technológiai fejlesztéseket fenntartani és üzemeltetni kell a fenntartási időszak végéig. A fenntartás költségeit saját forrásból szükséges finanszírozni.' },
  { cat: 'Fenntartási kötelezettség', q: 'A 3 éves fenntartási időszak során változhat-e a havidíjas szolgáltatások ára?', a: 'A fenntartási időszakot saját forrásból kell finanszírozni, ennek költsége a szállítóval kötött szerződéstől függ majd.' },

  { cat: 'Csatolandó dokumentumok', q: 'Árkalkulációt kell-e csatolni a támogatási kérelemhez?', a: 'Árkalkuláció nem szerepel a támogatási kérelem csatolandó mellékleteinek listájában és nem vizsgáljuk a megvalósítás alatt sem, tehát nem szükséges benyújtani.' },
];

const CAT_META = {
  'Általános információk':   { icon: '💡', color: '#e8f0fe' },
  'Jogosultság':             { icon: '✅', color: '#e8f0fe' },
  'Megvalósítási helyszín':  { icon: '📍', color: '#fff3e6' },
  'Fejlesztési célok':       { icon: '🚀', color: '#e8f0fe' },
  'Beszerzések és szállítók':{ icon: '🛒', color: '#fff3e6' },
  'Költségek és elszámolás': { icon: '💰', color: '#e8f0fe' },
  'Fenntartási kötelezettség':{ icon: '🔒', color: '#fff3e6' },
  'Csatolandó dokumentumok': { icon: '📎', color: '#e8f0fe' },
};

let activeFilter = 'all';

function esc(s) {
  return s.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
}

function highlight(text, term) {
  if (!term) return esc(text).replace(/\n/g,'<br>');
  const safe = esc(text);
  const re = new RegExp('(' + term.replace(/[.*+?^${}()|[\]\\]/g,'\\$&') + ')', 'gi');
  return safe.replace(/\n/g,'<br>').replace(re, '<mark>$1</mark>');
}

function toggleItem(el) {
  const item = el.closest('.faq-item');
  const ans = item.querySelector('.faq-a');
  const isOpen = item.classList.contains('open');
  if (isOpen) {
    item.classList.remove('open');
    ans.style.maxHeight = '0';
  } else {
    item.classList.add('open');
    ans.style.maxHeight = ans.scrollHeight + 'px';
  }
}

function renderPills() {
  const cats = [...new Set(RAW.map(r => r.cat))];
  const pillsEl = document.getElementById('pills');
  let html = '<div class="pill active" data-cat="all" onclick="setFilter(\'all\',this)">Összes <span class="cnt">' + RAW.length + '</span></div>';
  cats.forEach(c => {
    const cnt = RAW.filter(r => r.cat === c).length;
    html += '<div class="pill" data-cat="' + esc(c) + '" onclick="setFilter(\'' + esc(c) + '\',this)">' + esc(c) + ' <span class="cnt">' + cnt + '</span></div>';
  });
  pillsEl.innerHTML = html;
}

function setFilter(cat, el) {
  activeFilter = cat;
  document.querySelectorAll('.pill').forEach(p => p.classList.remove('active'));
  el.classList.add('active');
  doSearch();
}

function doSearch() {
  const term = document.getElementById('searchInput').value.trim().toLowerCase();
  const cats = [...new Set(RAW.map(r => r.cat))];
  let visibleCount = 0;
  const container = document.getElementById('faqContainer');
  container.innerHTML = '';

  cats.forEach(cat => {
    const items = RAW.filter((r, i) => {
      if (activeFilter !== 'all' && r.cat !== activeFilter) return false;
      if (cat !== r.cat) return false;
      if (term && !r.q.toLowerCase().includes(term) && !r.a.toLowerCase().includes(term)) return false;
      return true;
    });
    if (items.length === 0) return;
    visibleCount += items.length;

    const meta = CAT_META[cat] || { icon: '📄', color: '#f0f0f0' };
    let sectionHtml = '<div class="cat-section" data-cat="' + esc(cat) + '">' +
      '<div class="cat-label">' +
        '<div class="cat-label-icon" style="background:' + meta.color + '">' + meta.icon + '</div>' +
        '<div class="cat-label-text">' + esc(cat) + '</div>' +
      '</div>';

    items.forEach((r, idx) => {
      const globalIdx = RAW.indexOf(r);
      sectionHtml += '<div class="faq-item" id="item-' + globalIdx + '">' +
        '<div class="faq-q" onclick="toggleItem(this)">' +
          '<span class="faq-num">' + String(globalIdx + 1).padStart(2,'0') + '</span>' +
          '<span class="faq-q-text">' + highlight(r.q, term) + '</span>' +
          '<span class="faq-chevron">▼</span>' +
        '</div>' +
        '<div class="faq-a">' +
          '<div class="faq-a-inner">' + highlight(r.a, term) + '</div>' +
        '</div>' +
      '</div>';
    });
    sectionHtml += '</div>';
    container.insertAdjacentHTML('beforeend', sectionHtml);
  });

  const noRes = document.getElementById('noResults');
  noRes.style.display = visibleCount === 0 ? 'block' : 'none';
  document.getElementById('searchCount').textContent = term ? visibleCount + ' találat' : '';
}

renderPills();
doSearch();
document.getElementById('totalCount').textContent = RAW.length;
document.getElementById('catCount').textContent = Object.keys(CAT_META).length;
</script>

</body>

</html>