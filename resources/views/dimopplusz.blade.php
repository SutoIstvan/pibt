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
      background: #fff;
      font-size: 16px;
      line-height: 1.65;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    :root {
      --blue: #1a56db;
      --blue-dark: #1e429f;
      --blue-light: #e8f0fe;
      --accent: #f59e0b;
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
      max-width: 700px;
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
  </style>

</head>

<body>

  @include('layouts.nav')


  <!-- HERO -->
  <section class="hero">
    <div class="hero-badge"><span class="hero-badge-dot"></span>DIMOP Plusz 1.2.6/B · Beadás: 2026. márciustól</div>
    <h1>Mondd el, mire van szükséged.<br><em>Mi megvalósítjuk.</em></h1>
    <p class="hero-lead">Akár <strong>12 millió forint vissza nem térítendő támogatás</strong> a vállalkozásod digitális fejlesztéséhez. Ha az igényed kilóg a sablonból – nálunk akkor is van megoldás.</p>
    <div class="hero-btns">
      <a href="#kapcsolat" class="btn-primary">Kérek ingyenes konzultációt</a>
      <a href="#csomagok" class="btn-outline">Megnézem a csomagokat</a>
    </div>
    <div class="hero-stats">
      <div class="hero-stat">
        <div class="hero-stat-val gold">3–12 M Ft</div>
        <div class="hero-stat-label">Vissza nem térítendő</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-val gold">90%</div>
        <div class="hero-stat-label">Támogatási intenzitás</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-val">10%</div>
        <div class="hero-stat-label">Csak ennyi az önerő</div>
      </div>
    </div>
  </section>

  <!-- PROMISE -->
  <section class="section section-gray" id="segitseg">
    <div class="container">
      <div class="promise-grid">
        <div>
          <div class="section-eyebrow">Miért más a Paksi Informatika</div>
          <h2 class="section-h2">Nincs két egyforma vállalkozás.</h2>
          <p class="section-lead">Éppen ezért nem sablonban gondolkodunk. A pályázati keretrendszer adott – de azon belül szinte bármi megvalósítható.</p>
          <div class="highlight-box">
            <div class="highlight-box-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fbbf24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              </svg>
            </div>
            <h3>Te mondod, mit akarsz.<br><span>Mi megoldjuk, hogy meg is kapd.</span></h3>
            <p>20+ éves tapasztalatunkkal nemcsak kivitelezünk – megtervezzük a projektet úgy, hogy a pályázati elvárásoknak is megfeleljen, és valóban azt kapd, amire szükséged van.</p>
          </div>
        </div>
        <div>
          <div class="steps-list">
            <div class="step-item">
              <div class="step-icon-wrap"><svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 8v4l3 3" />
                </svg></div>
              <div class="step-text">
                <h4>Felmérjük az igényeidet</h4>
                <p>Ingyenes konzultáción feltérképezzük, mire van szükséged – és mi az, amit a pályázat keretén belül meg tudunk valósítani.</p>
              </div>
            </div>
            <div class="step-item">
              <div class="step-icon-wrap"><svg viewBox="0 0 24 24">
                  <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                  <polyline points="14 2 14 8 20 8" />
                  <line x1="16" y1="13" x2="8" y2="13" />
                  <line x1="16" y1="17" x2="8" y2="17" />
                </svg></div>
              <div class="step-text">
                <h4>Összerakjuk a szakmai tartalmat</h4>
                <p>Segítünk a digitális intenzitás felmérésben, a fejlesztési célok kiválasztásában és a kérelem szakmai tartalmának összeállításában.</p>
              </div>
            </div>
            <div class="step-item">
              <div class="step-icon-wrap"><svg viewBox="0 0 24 24">
                  <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                </svg></div>
              <div class="step-text">
                <h4>Megvalósítjuk és fenntartjuk</h4>
                <p>A nyertes pályázat után mi szállítjuk, bevezetjük és üzemeltetjük – a további fenntartási kötelezettséggel sem vagy egyedül.</p>
              </div>
            </div>
            <div class="step-item">
              <div class="step-icon-wrap"><svg viewBox="0 0 24 24">
                  <polyline points="20 6 9 17 4 12" />
                </svg></div>
              <div class="step-text">
                <h4>Validálás és zárás</h4>
                <p>A záró beszámoló benyújtásáig végig melletted vagyunk – az MKIK és DKF Kft. validálási folyamatában is segítünk.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PÁLYÁZATÍRÁS BANNER -->
  <section class="section" style="padding:0 24px; margin:-24px 0 0;">
    <div class="container" style="padding:40px 0;">
      <div class="palya-banner">
        <div class="palya-banner-icon">
          <svg viewBox="0 0 24 24">
            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <div class="palya-banner-text">
          <h3>Komplett csomag esetén a pályázatírás díját mi álljuk.</h3>
          <p>Ha a három csomag egyikét választod, a pályázatíró partnereink díját <strong>teljes egészében átvállaljuk.</strong> Neked csak az igényed kell – a papírmunkát mi intézzük.</p>
        </div>
        <a href="#kapcsolat" class="palya-banner-cta">Érdekel a komplett csomag</a>
      </div>
    </div>
  </section>

  <!-- FINANCE -->
  <section class="section" id="mire-kolthetod">
    <div class="container">
      <div class="section-eyebrow">Mire fordítható a támogatás</div>
      <h2 class="section-h2">Eszköztől a képzésig – minden belefér.</h2>
      <p class="section-lead">A pályázat négy nagy területet fed le. Ha a te igényed ezek valamelyikéhez kapcsolódik – és a legtöbb vállalkozásfejlesztés igen –, van megoldás.</p>
      <div class="finance-grid">
        <div class="finance-card">
          <div class="finance-icon"><svg viewBox="0 0 24 24">
              <rect x="2" y="3" width="20" height="14" rx="2" />
              <line x1="8" y1="21" x2="16" y2="21" />
              <line x1="12" y1="17" x2="12" y2="21" />
            </svg></div>
          <h3>Eszközök</h3>
          <ul>
            <li>Laptop, asztali számítógép</li>
            <li>Monitor, tablet, mobiltelefon</li>
            <li>Hálózati adattároló (NAS)</li>
            <li>Router, multifunkciós nyomtató</li>
            <li>és minden, amire szükséged van…</li>
          </ul>
        </div>
        <div class="finance-card">
          <div class="finance-icon"><svg viewBox="0 0 24 24">
              <rect x="3" y="3" width="18" height="18" rx="2" />
              <path d="M3 9h18M9 21V9" />
            </svg></div>
          <h3>Szoftverek</h3>
          <ul>
            <li>Felhőalapú irodai csomag (SaaS)</li>
            <li>ERP vállalatirányítási rendszer</li>
            <li>CRM ügyfélkezelő szoftver</li>
            <li>Videókonferencia, számlázó, webshop</li>
            <li>és minden, amire szükséged van…</li>
          </ul>
        </div>
        <div class="finance-card">
          <div class="finance-icon"><svg viewBox="0 0 24 24">
              <path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z" />
            </svg></div>
          <h3>Szolgáltatások</h3>
          <ul>
            <li>IT-üzemeltetés, rendszergazda</li>
            <li>Weboldal kialakítása</li>
            <li>Kibervédelmi intézkedések</li>
            <li>GDPR-felmérés, IBSZ kidolgozás</li>
            <li>és minden, amire szükséged van…</li>
          </ul>
        </div>
        <div class="finance-card">
          <div class="finance-icon"><svg viewBox="0 0 24 24">
              <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
              <path d="M6 12v5c3 3 9 3 12 0v-5" />
            </svg></div>
          <h3>Képzések</h3>
          <ul>
            <li>IKT-alapképzés munkatársaknak</li>
            <li>Haladó digitális készségfejlesztés</li>
            <li>Kibervédelmi tréning</li>
            <li>Szoftverhasználati oktatás</li>
            <li>és minden, amire szükséged van…</li>
          </ul>
        </div>
      </div>
      <div class="finance-note">
        <svg viewBox="0 0 24 24">
          <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
        </svg>
        <p><strong>Ha nem látod a listában, ami neked kell – akkor is hívj minket.</strong> 20+ éves tapasztalatunkkal szinte minden igényre találunk legális, szakmailag megalapozott megoldást. Nem az a kérdés, hogy <em>mi van a listán</em> – hanem az, hogy <em>mire van szükséged.</em></p>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="section section-navy" id="folyamat">
    <div class="container">
      <div class="section-eyebrow">A folyamat</div>
      <h2 class="section-h2">A konzultációtól a kész rendszerig.</h2>
      <p class="section-lead">Egyszerű, átlátható folyamat – mi végig ott vagyunk melletted.</p>
      <div class="hw-grid">
        <div class="hw-step">
          <div class="hw-num">01</div>
          <div class="hw-icon"><svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <path d="M12 8v4l3 3" />
            </svg></div>
          <h3>Ingyenes konzultáció</h3>
          <p>Felmérjük az igényeidet, a digitális intenzitás szintjét és a jogosultságot. Semmi kötelezettség.</p>
        </div>
        <div class="hw-step">
          <div class="hw-num">02</div>
          <div class="hw-icon"><svg viewBox="0 0 24 24">
              <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
              <polyline points="14 2 14 8 20 8" />
            </svg></div>
          <h3>Tervezés & szakmai tartalom</h3>
          <p>Összerakjuk a fejlesztési célokat és a projekttervet – úgy, hogy a te igényeidnek és a pályázatnak is megfeleljen.</p>
        </div>
        <div class="hw-step">
          <div class="hw-num">03</div>
          <div class="hw-icon"><svg viewBox="0 0 24 24">
              <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
            </svg></div>
          <h3>Beadás & döntés</h3>
          <p>Segítünk a kérelem véglegesítésében és benyújtásában. Folyamatosan tájékoztatunk a státuszról.</p>
        </div>
        <div class="hw-step">
          <div class="hw-num">04</div>
          <div class="hw-icon"><svg viewBox="0 0 24 24">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
            </svg></div>
          <h3>Megvalósítás & üzemeltetés</h3>
          <p>Leszállítjuk, bevezetjük, betanítjuk – és a 3 éves fenntartási időszakban is melletted maradunk.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ELIGIBILITY -->
  <section class="section section-gray" id="jogosultsag">
    <div class="container">
      <div class="section-eyebrow">Neked szól ez a pályázat?</div>
      <h2 class="section-h2">Gyorsan ellenőrizd a jogosultságot.</h2>
      <p class="section-lead">A legfontosabb feltételek egy pillanat alatt átláthatóak – de ha bizonytalan vagy, inkább hívj minket.</p>
      <div class="elig-grid">
        <div class="elig-card yes">
          <h3>✓ Jellemzően jogosult, ha…</h3>
          <ul class="elig-list">
            <li><span class="elig-dot">✓</span>Mikro- vagy kisvállalkozást vezetsz (max. 49 fő)</li>
            <li><span class="elig-dot">✓</span>Van legalább 1 lezárt teljes üzleti éved</li>
            <li><span class="elig-dot">✓</span>A fejlesztést kevésbé fejlett régióban valósítod meg</li>
            <li><span class="elig-dot">✓</span>A vállalkozás digitális szintje alacsony (segítünk felmérni)</li>
            <li><span class="elig-dot">✓</span>Kft., Bt., egyéni vállalkozó, Rt., ügyvédi iroda…</li>
            <li><span class="elig-dot">✓</span>Az elmúlt 3 évben nem kaptál azonos tartalmú fejlesztésre EU-s támogatást</li>
          </ul>
        </div>
        <div class="elig-card no">
          <h3>✗ Nem jogosult, ha…</h3>
          <ul class="elig-list">
            <li><span class="elig-dot">✗</span>Mezőgazdasági termelő vagy az árbevételed 50%+ mezőgazdasági</li>
            <li><span class="elig-dot">✗</span>Középvállalkozás vagy nagyvállalat (50+ alkalmazott)</li>
            <li><span class="elig-dot">✗</span>Konzorciumi formában szeretnéd beadni</li>
            <li><span class="elig-dot">✗</span>A fejlesztés helyszíne Budapest vagy Pest megye</li>
            <li><span class="elig-dot">✗</span>Az elmúlt 5 évben szabálytalansági döntéssel lezárt pályázatod volt</li>
          </ul>
        </div>
      </div>
      <div class="elig-note"><strong>Bizonytalan vagy valamelyik pontban?</strong> Ne add fel azonnal. Komplex cégstruktúra, speciális iparág, egyedi fejlesztési igény – 20+ évnyi tapasztalattal szinte minden esetre van megoldás. Hívj minket, 15 perc alatt kiderül.</div>
    </div>
  </section>

  <!-- PACKAGES -->
  <section class="section" id="csomagok">
    <div class="container">
      <div class="section-eyebrow">Orientációs csomagok</div>
      <h2 class="section-h2">Kiindulási pontok – nem korlátok.</h2>
      <p class="section-lead">Három tipikus fejlesztési irányt mutatunk be. Ha valamelyik közel áll az igényedhez, tökéletes alap. Ha nem – akkor is tudunk segíteni. <strong style="color:var(--navy);">Mindhárom esetén a pályázatírás díját mi álljuk.</strong></p>
      <div class="pkg-grid">

        <!-- SmartOffice AI -->
        <div class="pkg-card">
          <div class="pkg-header">
            <div class="pkg-icon-wrap"><svg viewBox="0 0 24 24">
                <rect x="2" y="3" width="20" height="14" rx="2" />
                <line x1="8" y1="21" x2="16" y2="21" />
                <line x1="12" y1="17" x2="12" y2="21" />
              </svg></div>
            <div class="pkg-name">SmartOffice AI</div>
            <div class="pkg-sub">Digitális irodai csomag</div>
            <div class="pkg-tags"><span class="pkg-tag">Microsoft 365</span><span class="pkg-tag">Copilot AI</span><span class="pkg-tag">Felhő</span></div>
          </div>
          <div class="pkg-body">
            <div class="pkg-for-title">Neked való, ha…</div>
            <ul class="pkg-for-list">
              <li>sok dokumentummal, e-maillel és adminisztrációval dolgozol</li>
              <li>szeretnéd gyorsítani az irodai folyamatokat AI-val</li>
              <li>fontos a felhő, a csapatmunka és a távoli munkavégzés</li>
            </ul>
            <div class="pkg-accordion">
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Hardver</div>
                      <div class="acc-sub">ügyfél által választott</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>Modern irodai eszközök: laptop, monitor, mobiltelefon</li>
                    <li>Hibrid munkavégzés támogatása</li>
                  </ul>
                </div>
              </div>
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Szoftver</div>
                      <div class="acc-sub">Microsoft 365 + Copilot AI</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>Teams, Outlook, SharePoint, OneDrive</li>
                    <li>AI támogatás dokumentum- és e-mail kezeléshez</li>
                    <li>Felhőalapú együttműködés és fájlmegosztás</li>
                  </ul>
                </div>
              </div>
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Szolgáltatás</div>
                      <div class="acc-sub">kialakítás, bevezetés, üzemeltetés</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>Microsoft 365 bevezetés</li>
                    <li>AI workflow kialakítás</li>
                    <li>Dokumentumkezelés és kollaboráció beállítása</li>
                  </ul>
                </div>
              </div>
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Képzés</div>
                      <div class="acc-sub">használat, kezelés, IKT oktatás</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>Copilot használat</li>
                    <li>Csapatmunka eszközök betanítása</li>
                    <li>Digitális hatékonyság növelése a gyakorlatban</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="pkg-price">
              <div class="pkg-price-row"><span>Hardver</span><span>3 300 000 Ft</span></div>
              <div class="pkg-price-row"><span>Szoftver</span><span>1 320 000 Ft / 12 hó</span></div>
              <div class="pkg-price-row"><span>Szolgáltatás</span><span>5 940 000 Ft</span></div>
              <div class="pkg-price-row"><span>Képzés</span><span>1 980 000 Ft</span></div>
              <div class="pkg-price-row"><span>Projektérték</span><span>13 200 000 Ft</span></div>
            </div>
            <div class="pkg-palya-note"><svg viewBox="0 0 24 24">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>Komplett csomag – a pályázatírás díját mi álljuk</div>
            <a href="#kapcsolat" class="pkg-cta">Érdekel ez a csomag</a>
          </div>
        </div>

        <!-- ShopMaster -->
        <div class="pkg-card featured">
          <div class="pkg-header">
            <div class="pkg-badge-pill">Legnépszerűbb</div>
            <div class="pkg-icon-wrap"><svg viewBox="0 0 24 24">
                <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <path d="M16 10a4 4 0 01-8 0" />
              </svg></div>
            <div class="pkg-name">ShopMaster</div>
            <div class="pkg-sub">Kereskedői csomag</div>
            <div class="pkg-tags"><span class="pkg-tag">Webshop</span><span class="pkg-tag">ERP</span><span class="pkg-tag">Automatizálás</span></div>
          </div>
          <div class="pkg-body">
            <div class="pkg-for-title">Neked való, ha…</div>
            <ul class="pkg-for-list">
              <li>webshopot szeretnél vagy már van online értékesítésed</li>
              <li>probléma a készletkezelés, rendeléskezelés vagy számlázás</li>
              <li>szeretnéd egy rendszerbe szervezni a kereskedelmi folyamataidat</li>
            </ul>
            <div class="pkg-accordion">
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Hardver</div>
                      <div class="acc-sub">ügyfél által választott</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>Raktári és irodai eszközök: tablet, laptop, vonalkódolvasó, nyomtató</li>
                    <li>A webshop és a készletkezelés kiszolgálásához szükséges eszközök</li>
                  </ul>
                </div>
              </div>
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Szoftver</div>
                      <div class="acc-sub">UNAS + ERP + alap AI</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>Webshop rendszer</li>
                    <li>Készlet- és raktárkezelés</li>
                    <li>Számlázás és rendeléskezelés</li>
                    <li>Automatizált működés</li>
                  </ul>
                </div>
              </div>
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Szolgáltatás</div>
                      <div class="acc-sub">kialakítás, bevezetés, üzemeltetés</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>Webshop + ERP integráció</li>
                    <li>Raktári folyamatok digitalizálása</li>
                    <li>Cloud és IT háttér biztosítása</li>
                  </ul>
                </div>
              </div>
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Képzés</div>
                      <div class="acc-sub">használat, kezelés, IKT oktatás</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>Webshop kezelés</li>
                    <li>Készletkezelési folyamatok</li>
                    <li>Napi működés és adminisztráció betanítása</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="pkg-price">
              <div class="pkg-price-row"><span>Hardver</span><span>3 300 000 Ft</span></div>
              <div class="pkg-price-row"><span>Szoftver</span><span>1 320 000 Ft / 12 hó</span></div>
              <div class="pkg-price-row"><span>Szolgáltatás</span><span>5 940 000 Ft</span></div>
              <div class="pkg-price-row"><span>Képzés</span><span>1 980 000 Ft</span></div>
              <div class="pkg-price-row"><span>Projektérték</span><span>13 200 000 Ft</span></div>
            </div>
            <div class="pkg-palya-note"><svg viewBox="0 0 24 24">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>Komplett csomag – a pályázatírás díját mi álljuk</div>
            <a href="#kapcsolat" class="pkg-cta">Érdekel ez a csomag</a>
          </div>
        </div>

        <!-- ProfiWeb AI  -->
        <div class="pkg-card">
          <div class="pkg-header">
            <div class="pkg-icon-wrap"><svg viewBox="0 0 24 24">
                <rect x="3" y="3" width="18" height="18" rx="2" />
                <path d="M3 9h18M9 21V9" />
              </svg></div>
            <div class="pkg-name">ProfiWeb AI</div>
            <div class="pkg-sub">Professzionális weboldal AI chatbottal</div>
            <div class="pkg-tags"><span class="pkg-tag">Weboldal</span><span class="pkg-tag">AI</span><span class="pkg-tag">MS 365</span></div>
          </div>
          <div class="pkg-body">
            <div class="pkg-for-title">Neked való, ha…</div>
            <ul class="pkg-for-list">
              <li>ha professzionális weboldalt szeretnél, ügyfélszerző AI-val, chatbottal és online hirdetésekkel.</li>
              <li>ha több érdeklődőt, több ügyfelet és mérhető növekedést szeretnél online. </li>
              <li>ha automatizálnád az ügyfélszerzést, és a weboldalad helyetted is dolgozna.</li>
            </ul>
            <div class="pkg-accordion">
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Hardver</div>
                      <div class="acc-sub">ügyfél által választott</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>Irodai és adminisztrációs eszközök</li>
                    <li>A működéshez és a napi feladatokhoz szükséges háttér</li>
                  </ul>
                </div>
              </div>
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Szoftver</div>
                      <div class="acc-sub">Modern mobilra optimalizált weboldal csomag</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>SEO barát, hírdetésre optimalizált weboldal responzív kinézettel</li>
                    <li>Mobilon, tableten és gépen is jól működő,átlátható, ügyfélszerzést támogató felépítés</li>
                    <li>Rugalmasan bővíthető rendszer</li>
                  </ul>
                </div>
              </div>
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Szolgáltatás</div>
                      <div class="acc-sub">kialakítás, bevezetés, üzemeltetés</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>A komplett rendszer testreszabása</li>
                    <li>Folyamatok digitalizálása</li>
                    <li>Integrációk és automatizmusok kialakítása</li>
                  </ul>
                </div>
              </div>
              <div class="acc-item">
                <button class="acc-trigger" onclick="toggleAcc(this)">
                  <div class="acc-trigger-left">
                    <div class="acc-check"><svg viewBox="0 0 24 24">
                        <polyline points="20 6 9 17 4 12" />
                      </svg></div>
                    <div>
                      <div class="acc-title">Képzés</div>
                      <div class="acc-sub">használat, kezelés, IKT oktatás</div>
                    </div>
                  </div>
                  <div class="acc-arrow"><svg viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9" />
                    </svg></div>
                </button>
                <div class="acc-body">
                  <ul>
                    <li>A modulok használata</li>
                    <li>Napi működés és riportok</li>
                    <li>Adatbiztonsági és infomrmációbiztonsági kultúra oktatás</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="pkg-price">
              <div class="pkg-price-row"><span>Hardver</span><span>3 300 000 Ft</span></div>
              <div class="pkg-price-row"><span>Szoftver</span><span>1 320 000 Ft / 12 hó</span></div>
              <div class="pkg-price-row"><span>Szolgáltatás</span><span>5 940 000 Ft</span></div>
              <div class="pkg-price-row"><span>Képzés</span><span>1 980 000 Ft</span></div>
              <div class="pkg-price-row"><span>Projektérték</span><span>13 200 000 Ft</span></div>
            </div>
            <div class="pkg-palya-note"><svg viewBox="0 0 24 24">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>Komplett csomag – a pályázatírás díját mi álljuk</div>
            <a href="#kapcsolat" class="pkg-cta">Érdekel ez a csomag</a>
          </div>
        </div>
      </div>

      <div class="custom-strip">
        <div class="custom-strip-text">
          <h3>Valami egészen más kell?</h3>
          <p>A fenti csomagok csak kiindulási pontok. Ha a te igényed nem illik bele egyikbe sem – <strong>az nem probléma, hanem kihívás, amire van megoldásunk.</strong> Mondd el, mit szeretnél elérni.</p>
        </div>
        <a href="#kapcsolat" class="btn-primary" style="white-space:nowrap;">Megmondom mire van szükségem</a>
      </div>
    </div>
  </section>

  <!-- WHY -->
  <section class="section section-gray" id="miert-mi">
    <div class="container">
      <div class="section-eyebrow">Miért a Paksi Informatika</div>
      <h2 class="section-h2">Nem csak kivitelezünk – gondolkodunk.</h2>
      <p class="section-lead">20+ év, valódi projektek, valódi ügyfelek. Ezért döntenek mellettünk.</p>
      <div class="why-grid">
        <div class="why-card">
          <div class="why-num">01</div>
          <h3>Minden igényre van megoldás</h3>
          <p>Ha az igényed kilóg a sztenderd kategóriákból, megtaláljuk a legális és szakmailag megalapozott utat.</p>
        </div>
        <div class="why-card">
          <div class="why-num">02</div>
          <h3>20+ év tapasztalat</h3>
          <p>Több mint két évtizede támogatjuk a magyarországi KKV-kat. Tudjuk, mi működik a valóságban.</p>
        </div>
        <div class="why-card">
          <div class="why-num">03</div>
          <h3>Tanácsadás és megvalósítás egy kézben</h3>
          <p>A konzultációtól a beadáson át a megvalósításig és fenntartásig egyetlen partner.</p>
        </div>
        <div class="why-card">
          <div class="why-num">04</div>
          <h3>Pályázatírás – mi álljuk a díját</h3>
          <p>Komplett csomag esetén a pályázatíró partnereink díját teljes egészében átvállaljuk. Neked csak az igényed kell.</p>
        </div>
        <div class="why-card">
          <div class="why-num">05</div>
          <h3>Országos lefedettség, gyors reakció</h3>
          <p>Szervezett csapat, saját és partneri erőforrásokkal, amely gyorsan reagál és valóban elérhető.</p>
        </div>
        <div class="why-card">
          <div class="why-num">06</div>
          <h3>Hosszú távú partner</h3>
          <p>A bevezetés után sem maradsz egyedül. A 3 éves fenntartási kötelezettséget együtt teljesítjük.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section" id="gyik">
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
  </section>

  <!-- CONTACT -->
  <section class="section section-navy" id="kapcsolat">
    <div class="container">
      <div class="contact-grid">
        <div>
          <div class="section-eyebrow">Kezdjük el együtt</div>
          <h2 class="section-h2">Ingyenes konzultáció – kötelezettség nélkül.</h2>
          <p class="section-lead">Mondd el a vállalkozásod helyzetét, és megmutatjuk, hogyan lehet a legtöbbet kihozni a DIMOP Plusz pályázatból.</p>
          <div class="contact-info-list">
            <div class="ci-item">
              <div class="ci-icon"><svg viewBox="0 0 24 24">
                  <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                </svg></div>
              <div class="ci-text">Telefon: <a href="tel:+36707021252">+36 70 702 1252</a></div>
            </div>
            <div class="ci-item">
              <div class="ci-icon"><svg viewBox="0 0 24 24">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                  <polyline points="22,6 12,13 2,6" />
                </svg></div>
              <div class="ci-text">E-mail: <a href="/cdn-cgi/l/email-protection#731a1d151c33031a1815075d1b06"><span class="__cf_email__" data-cfemail="e68f888089a6968f8d8092c88e93">[email&#160;protected]</span></a></div>
            </div>
            <div class="ci-item">
              <div class="ci-icon"><svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg></div>
              <div class="ci-text" style="color:rgba(255,255,255,.45);font-size:14px;">Beadási határidő: <strong style="color:#fca5a5;">2026. június 30.</strong></div>
            </div>
          </div>
          <ul class="contact-bullets">
            <li>Segítünk kiválasztani a megfelelő csomagot vagy egyedi irányt</li>
            <li>Komplett csomag esetén a pályázatírás díját mi álljuk</li>
            <li>A megvalósítás után sem maradsz magadra</li>
          </ul>
        </div>
        <div class="contact-form">
          <div class="cf-title">Kérj visszahívást vagy konzultációt</div>
          <form action="{{ route('contact.submit') }}" method="POST" id="contactForm" novalidate>
            @csrf
            <div class="cf-row"><label>Neved</label><input type="text" name="name" placeholder="Kovács János" required></div>
            <div class="cf-row"><label>Cég neve</label><input type="text" name="company" placeholder="Példa Kft."></div>
            <div class="cf-row"><label>Telefonszám</label><input type="tel" name="phone" placeholder="+36 30 000 0000"></div>
            <div class="cf-row"><label>E-mail cím</label><input type="email" name="email" placeholder="pelda@ceg.hu" required></div>
            <div class="cf-row"><label>Mire van szükséged? (röviden)</label><textarea name="message" placeholder="Pl.: Webshopot szeretnék indítani, ERP rendszert bevezetnénk, vagy csak nem tudom pontosan – segítséget kérek…"></textarea></div>
            <div class="cf-check"><input type="checkbox" id="gdpr" name="gdpr" required><label for="gdpr">Elfogadom az <a href="{{ route('gdpr') }}" target="_blank">adatkezelési feltételeket</a> és hozzájárulok, hogy felvegyék velem a kapcsolatot.</label></div>
            <!-- <input type="hidden" name="recaptcha_token" id="recaptchaToken"> -->
            <div class="mb-3">
              {!! htmlScriptTagJsApi() !!}
              {!! htmlFormSnippet() !!}
            </div>
            <button type="submit" class="cf-submit">Ingyenes konzultációt kérek →</button>
            <div class="recaptcha-notice">Ez az oldal a Google reCAPTCHA-t használja a spam-védelem érdekében. <a href="https://policies.google.com/privacy" target="_blank">Adatvédelem</a> · <a href="https://policies.google.com/terms" target="_blank">Feltételek</a></div>
            <div class="cf-note">Az üzenet elküldésével nem vállalsz kötelezettséget.</div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="site-footer">
    <div class="footer-logo">Paksi <span>Informatika</span></div>
    <div class="footer-links"><a href="https://pikft.hu/gdpr">Adatkezelési feltételek</a><a href="https://pikft.hu/contacts">Kapcsolat</a><a href="https://pikft.hu">Főoldal</a></div>
    <div class="footer-copy">© 2026 Paksi Informatika. Minden jog fenntartva.</div>
  </footer>

  <script>
    // ── ACCORDION ──
    function toggleAcc(btn) {
      const item = btn.closest('.acc-item');
      const isOpen = item.classList.contains('open');
      item.closest('.pkg-accordion').querySelectorAll('.acc-item').forEach(i => i.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    }

    // ── FAQ ──
    function toggleFaq(btn) {
      btn.closest('.faq-item').classList.toggle('open');
    }

    // ── reCAPTCHA v3 + FORM SUBMIT ──
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const btn = document.getElementById('submitBtn');
      btn.textContent = 'Küldés...';
      btn.disabled = true;

      grecaptcha.ready(function() {
        grecaptcha.execute('RECAPTCHA_SITE_KEY', {
          action: 'contact_form'
        }).then(function(token) {
          document.getElementById('recaptchaToken').value = token;

          // GA4: form_submit konverzió
          if (typeof gtag !== 'undefined') {
            gtag('event', 'form_submit', {
              'event_category': 'kapcsolat',
              'event_label': 'DIMOP konzultacio'
            });
            // Google Ads: konverzió tüzelése
            gtag('event', 'conversion', {
              'send_to': 'GOOGLE_ADS_ID/GOOGLE_ADS_CONV_LABEL'
            });
          }

          // Backend POST - fejlesztő köti be
          // fetch('/api/contact', { method: 'POST', body: new FormData(document.getElementById('contactForm')) });

          btn.textContent = 'Elküldve! Hamarosan felvesszük veled a kapcsolatot.';
          btn.style.background = '#059669';
        });
      });
    });

    // ── GA4: telefon kattintás ──
    document.querySelectorAll('a[href^="tel:"]').forEach(function(el) {
      el.addEventListener('click', function() {
        if (typeof gtag !== 'undefined') {
          gtag('event', 'call_click', {
            'event_category': 'kapcsolat',
            'event_label': el.href
          });
        }
      });
    });

    // ── GA4: email kattintás ──
    document.querySelectorAll('a[href^="mailto:"]').forEach(function(el) {
      el.addEventListener('click', function() {
        if (typeof gtag !== 'undefined') {
          gtag('event', 'email_click', {
            'event_category': 'kapcsolat'
          });
        }
      });
    });

    // ── GA4: CTA gombok kattintása ──
    document.querySelectorAll('.pkg-cta, .palya-banner-cta, .btn-primary, .btn-outline').forEach(function(el) {
      el.addEventListener('click', function() {
        if (typeof gtag !== 'undefined') {
          gtag('event', 'cta_click', {
            'event_category': 'engagement',
            'event_label': el.textContent.trim().substring(0, 50)
          });
        }
      });
    });

    // ── GA4: scroll mélység ──
    var scrolled = {
      25: false,
      50: false,
      75: false,
      90: false
    };
    window.addEventListener('scroll', function() {
      var pct = Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100);
      [25, 50, 75, 90].forEach(function(d) {
        if (pct >= d && !scrolled[d]) {
          scrolled[d] = true;
          if (typeof gtag !== 'undefined') {
            gtag('event', 'scroll_depth', {
              'event_category': 'engagement',
              'event_label': d + '%'
            });
          }
        }
      });
    });

    // ── GA4: szekció láthatóság ──
    if ('IntersectionObserver' in window) {
      var secObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting && entry.target.id && typeof gtag !== 'undefined') {
            gtag('event', 'section_view', {
              'event_category': 'engagement',
              'event_label': entry.target.id
            });
            secObserver.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.3
      });
      document.querySelectorAll('[id]').forEach(function(s) {
        secObserver.observe(s);
      });
    }
  </script>
</body>

</html>