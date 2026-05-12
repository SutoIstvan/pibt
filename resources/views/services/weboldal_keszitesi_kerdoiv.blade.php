<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weboldal készítési kérdőív</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @include('layouts.gtag')
</head>

<body>

    @include('layouts.nav')
    

    <div class="container my-3 mb-4">

    <div class="row mb-5">
      <div class="col-12 text-center" data-aos="fade-up">
        <h1 class="display-6 text-primary mb-3">Weboldal készítési kérdőív</h1>
        <p class="lead text-body-secondary">
        A kérdőív célja, hogy a weboldal készítéséhez szükséges alapinformációkat, tartalmi igényeket,
        arculati elképzeléseket és technikai adatokat előzetesen összegyűjtsük.
      </p>
      </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" data-aos="fade-up">
      <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert" data-aos="fade-up">
      <ul class="mb-0">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <form id="websiteForm" data-aos="fade-up" data-aos-delay="100" action="{{ route('kerdoiv.submit') }}" method="POST">
      @csrf
      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">1. Cégadatok</h4>
        <p class="text-muted small mb-4">Kérjük, adja meg a weboldalon és az ajánlatkészítéshez szükséges alapadatokat.</p>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="company" class="form-label fw-bold">Cég neve <span class="text-danger">*</span></label>
            <input id="company" name="company" type="text" required class="form-control">
          </div>
          <div class="col-md-6">
            <label for="contact" class="form-label fw-bold">Kapcsolattartó neve <span class="text-danger">*</span></label>
            <input id="contact" name="contact" type="text" required class="form-control">
          </div>
          <div class="col-md-6">
            <label for="phone" class="form-label fw-bold">Telefonszám</label>
            <input id="phone" name="phone" type="tel" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label fw-bold">E-mail cím <span class="text-danger">*</span></label>
            <input id="email" name="email" type="email" required class="form-control">
          </div>
          <div class="col-12">
            <label for="address" class="form-label fw-bold">Székhely / telephely / iroda címe</label>
            <input id="address" name="address" type="text" class="form-control">
          </div>
          <div class="col-12">
            <label for="companyData" class="form-label fw-bold">Adószám / cégjegyzékszám, ha a weboldalon is szerepelnie kell</label>
            <input id="companyData" name="companyData" type="text" class="form-control">
          </div>
        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">2. A weboldal célja</h4>
        <p class="text-muted small mb-4">Jelölje meg, mire szeretné használni a weboldalt.</p>
        <div class="row g-2">
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="weboldal_celja[]" value="Céges bemutatkozó oldal"  id="chk_39795">
                <label class="form-check-label" for="chk_39795">Céges bemutatkozó oldal</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="weboldal_celja[]" value="Szolgáltatások bemutatása"  id="chk_23068">
                <label class="form-check-label" for="chk_23068">Szolgáltatások bemutatása</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="weboldal_celja[]" value="Termékek bemutatása"  id="chk_90142">
                <label class="form-check-label" for="chk_90142">Termékek bemutatása</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="weboldal_celja[]" value="Ajánlatkérés gyűjtése"  id="chk_45195">
                <label class="form-check-label" for="chk_45195">Ajánlatkérés gyűjtése</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="weboldal_celja[]" value="Kapcsolatfelvétel ösztönzése"  id="chk_80065">
                <label class="form-check-label" for="chk_80065">Kapcsolatfelvétel ösztönzése</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="weboldal_celja[]" value="Időpontfoglalás"  id="chk_53358">
                <label class="form-check-label" for="chk_53358">Időpontfoglalás</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="weboldal_celja[]" value="Portfólió / referenciák"  id="chk_57582">
                <label class="form-check-label" for="chk_57582">Portfólió / referenciák</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="weboldal_celja[]" value="Blog / hírek"  id="chk_26880">
                <label class="form-check-label" for="chk_26880">Blog / hírek / szakmai cikkek</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="weboldal_celja[]" value="Toborzás / álláshirdetés"  id="chk_38968">
                <label class="form-check-label" for="chk_38968">Toborzás / álláshirdetés</label>
              </div>
            </div>
        </div><div class="row g-3 mt-3">
          <div class="col-12">
            <label for="mainGoal" class="form-label fw-bold">Mi lenne a weboldal legfontosabb célja?</label>
            <textarea id="mainGoal" name="mainGoal" placeholder="Például: több ajánlatkérés, komolyabb céges megjelenés, új ügyfelek szerzése." class="form-control" rows="3"></textarea>
          </div>
        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">3. Domain, tárhely és e-mail</h4>
        <div class="row g-3">

          {{-- Van domain? --}}
          <div class="col-12">
            <label class="form-label fw-bold">Van már domain név?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="van_domain" value="Igen" id="chk_84153" onchange="domainRadioChange(this)">
                <label class="form-check-label" for="chk_84153">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="van_domain" value="Nem" id="chk_20072" onchange="domainRadioChange(this)">
                <label class="form-check-label" for="chk_20072">Nem</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="van_domain" value="Nem tudom" id="chk_66513" onchange="domainRadioChange(this)">
                <label class="form-check-label" for="chk_66513">Nem tudom</label>
              </div>
            </div>
          </div>

          {{-- Ha Igen: domain neve + kezelő --}}
          <div class="col-md-6 d-none" id="domainNameWrap">
            <label for="domainName" class="form-label fw-bold">Mi a domain neve?</label>
            <input id="domainName" name="domainName" type="text" placeholder="pl. cegnev.hu" class="form-control">
          </div>
          <div class="col-md-6 d-none" id="domainProviderWrap">
            <label for="domainProvider" class="form-label fw-bold">Hol van jelenleg kezelve a domain?</label>
            <input id="domainProvider" name="domainProvider" type="text" placeholder="pl. Rackhost, Forpsi, Websupport" class="form-control">
          </div>

          {{-- Ha Nem: milyen domaint szeretne --}}
          <div class="col-md-6 d-none" id="domainWantWrap">
            <label for="domainWant" class="form-label fw-bold">Milyen domain nevet szeretne?</label>
            <input id="domainWant" name="domainWant" type="text" placeholder="pl. cegnev.hu" class="form-control">
          </div>

          {{-- Van tárhely? --}}
          <div class="col-12">
            <label class="form-label fw-bold">Van már tárhely?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="van_tarhely" value="Igen" id="chk_66548">
                <label class="form-check-label" for="chk_66548">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="van_tarhely" value="Nem" id="chk_57670">
                <label class="form-check-label" for="chk_57670">Nem</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="van_tarhely" value="Nem tudom" id="chk_60585">
                <label class="form-check-label" for="chk_60585">Nem tudom</label>
              </div>
            </div>
          </div>

          {{-- E-mail igény? --}}
          <div class="col-12">
            <label class="form-label fw-bold">Szükség van e-mail címekre is a domainhez?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="domain_email" value="Igen" id="chk_77261" onchange="emailRadioChange(this)">
                <label class="form-check-label" for="chk_77261">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="domain_email" value="Nem" id="chk_77315" onchange="emailRadioChange(this)">
                <label class="form-check-label" for="chk_77315">Nem</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="domain_email" value="Már van" id="chk_23972" onchange="emailRadioChange(this)">
                <label class="form-check-label" for="chk_23972">Már van</label>
              </div>
            </div>
          </div>

          {{-- Ha Igen: milyen e-mail --}}
          <div class="col-12 d-none" id="emailAccountsWrap">
            <label for="emailAccounts" class="form-label fw-bold">Milyen e-mail címekre lenne szükség?</label>
            <input id="emailAccounts" name="emailAccounts" placeholder="pl. info@cegnev.hu, iroda@cegnev.hu" class="form-control">
          </div>

        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">4. Jelenlegi weboldal</h4>
        <div class="row g-3">

          <div class="col-12">
            <label class="form-label fw-bold">Van jelenlegi weboldal?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="van_jelenlegi" value="Igen" id="chk_24576" onchange="currentSiteChange(this)">
                <label class="form-check-label" for="chk_24576">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="van_jelenlegi" value="Nem" id="chk_21483" onchange="currentSiteChange(this)">
                <label class="form-check-label" for="chk_21483">Nem</label>
              </div>
            </div>
          </div>

          {{-- Ha Igen: URL + problémák + megtartani/elhagyni --}}
          <div class="col-md-6 d-none" id="currentWebsiteWrap">
            <label for="currentWebsite" class="form-label fw-bold">Mi a jelenlegi weboldal címe?</label>
            <input id="currentWebsite" name="currentWebsite" type="text" placeholder="https://" class="form-control">
          </div>

          <div class="col-12 d-none" id="currentSiteProblemsWrap">
            <label class="form-label fw-bold">Mi a probléma a jelenlegi oldallal?</label>
            <div class="row g-2">
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="jelenlegi_problema[]" value="Elavult" id="chk_20122">
                <label class="form-check-label" for="chk_20122">Elavult</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="jelenlegi_problema[]" value="Nem mobilbarát" id="chk_26947">
                <label class="form-check-label" for="chk_26947">Nem mobilbarát</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="jelenlegi_problema[]" value="Lassú" id="chk_12905">
                <label class="form-check-label" for="chk_12905">Lassú</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="jelenlegi_problema[]" value="Nehezen kezelhető" id="chk_47594">
                <label class="form-check-label" for="chk_47594">Nehezen kezelhető</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="jelenlegi_problema[]" value="Nem hoz érdeklődőket" id="chk_94055">
                <label class="form-check-label" for="chk_94055">Nem hoz érdeklődőket</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="jelenlegi_problema[]" value="Nem tetszik a megjelenése" id="chk_42059">
                <label class="form-check-label" for="chk_42059">Nem tetszik a megjelenése</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="jelenlegi_problema[]" value="Nincs megfelelő tartalom" id="chk_60057">
                <label class="form-check-label" for="chk_60057">Nincs megfelelő tartalom</label>
              </div></div>
            </div>
          </div>

          <div class="col-md-6 d-none" id="keepOldWrap">
            <label for="keepOld" class="form-label fw-bold">Mit szeretne megtartani a régi oldalból?</label>
            <textarea id="keepOld" name="keepOld" class="form-control" rows="3"></textarea>
          </div>
          <div class="col-md-6 d-none" id="removeOldWrap">
            <label for="removeOld" class="form-label fw-bold">Mit szeretne elhagyni vagy átalakítani?</label>
            <textarea id="removeOld" name="removeOld" class="form-control" rows="3"></textarea>
          </div>

        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">5. Arculat és megjelenés</h4>
        <div class="row g-3">

          {{-- Stílus preferencia --}}
          <div class="col-md-6">
            <label for="style" class="form-label fw-bold">Milyen stílust szeretne?</label>
            <select id="style" name="style" class="form-select">
              <option value="">Kérem válasszon</option>
              <option>Modern</option>
              <option>Elegáns</option>
              <option>Letisztult</option>
              <option>Prémium</option>
              <option>Barátságos</option>
              <option>Ipari / műszaki</option>
              <option>Klasszikus</option>
              <option>Fiatalos</option>
              <option>Egyéb</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="colors" class="form-label fw-bold">Van meghatározott színvilág? (pl. márkaszínek)</label>
            <input id="colors" name="colors" type="text" class="form-control" placeholder="pl. kék #0055A5, fehér #FFFFFF">
          </div>

          {{-- Meglévő arculati elemek --}}
          <div class="col-md-12">
            <label class="form-label fw-bold">Van céges logó?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="logo" value="Igen, vektoros formátumban is" id="chk_65080">
                <label class="form-check-label" for="chk_65080">Igen, vektoros formátumban is</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="logo" value="Igen, csak képformátumban" id="chk_38969">
                <label class="form-check-label" for="chk_38969">Igen, csak képformátumban</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="logo" value="Nincs, szükség lenne logó készítésre" id="chk_88097">
                <label class="form-check-label" for="chk_88097">Nincs, szükség lenne logó készítésre</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="logo" value="Nem tudom" id="chk_21864">
                <label class="form-check-label" for="chk_21864">Nem tudom</label>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <label class="form-label fw-bold">Van meglévő arculat?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="arculat" value="Igen" id="chk_22302">
                <label class="form-check-label" for="chk_22302">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="arculat" value="Nincs" id="chk_16360">
                <label class="form-check-label" for="chk_16360">Nincs</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="arculat" value="Részben van" id="chk_59429">
                <label class="form-check-label" for="chk_59429">Részben van</label>
              </div>
            </div>
          </div>

          {{-- Referenciák / inspiráció --}}
          <div class="col-12">
            <label for="likedSites" class="form-label fw-bold">Van olyan weboldal, ami tetszik? Kérjük, küldjön 2–3 példát.</label>
            <textarea id="likedSites" name="likedSites" placeholder="Linkek és rövid megjegyzések." class="form-control" rows="2"></textarea>
          </div>
          <div class="col-md-6">
            <label for="likedReason" class="form-label fw-bold">Mi tetszik ezekben az oldalakban?</label>
            <textarea id="likedReason" name="likedReason" class="form-control" rows="2"></textarea>
          </div>
          <div class="col-md-6">
            <label for="dislikedSites" class="form-label fw-bold">Van olyan weboldal, ami nem tetszik? Miért?</label>
            <textarea id="dislikedSites" name="dislikedSites" class="form-control" rows="2"></textarea>
          </div>

        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">6. Tartalom és menüpontok</h4>
        <p class="text-muted small mb-4">Jelölje meg a szükséges menüpontokat, majd írja le a fontosabb tartalmi igényeket.</p>
        <div class="row g-2">
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="menupontok[]" value="Főoldal"  id="chk_21000">
                <label class="form-check-label" for="chk_21000">Főoldal</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="menupontok[]" value="Rólunk / Bemutatkozás"  id="chk_15206">
                <label class="form-check-label" for="chk_15206">Rólunk / Bemutatkozás</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="menupontok[]" value="Szolgáltatások"  id="chk_73263">
                <label class="form-check-label" for="chk_73263">Szolgáltatások</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="menupontok[]" value="Termékek"  id="chk_11096">
                <label class="form-check-label" for="chk_11096">Termékek</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="menupontok[]" value="Referenciák"  id="chk_93143">
                <label class="form-check-label" for="chk_93143">Referenciák</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="menupontok[]" value="Galéria"  id="chk_85447">
                <label class="form-check-label" for="chk_85447">Galéria</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="menupontok[]" value="Blog / Hírek"  id="chk_16621">
                <label class="form-check-label" for="chk_16621">Blog / Hírek</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="menupontok[]" value="Kapcsolat"  id="chk_41294">
                <label class="form-check-label" for="chk_41294">Kapcsolat</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Menüpontok" value="Ajánlatkérés"  id="chk_55820">
                <label class="form-check-label" for="chk_55820">Ajánlatkérés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Menüpontok" value="Adatvédelmi tájékoztató"  id="chk_39468">
                <label class="form-check-label" for="chk_39468">Adatvédelmi tájékoztató</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Menüpontok" value="ÁSZF"  id="chk_35165">
                <label class="form-check-label" for="chk_35165">ÁSZF</label>
              </div>
            </div>
        </div><div class="row g-3 mt-3">
          <div class="col-12">
            <label for="otherMenu" class="form-label fw-bold">Egyéb kért menüpontok</label>
            <textarea id="otherMenu" name="otherMenu" class="form-control" rows="3"></textarea>
          </div>
          <div class="col-md-6">
            <label class="form-label fw-bold">Van már kész szöveges tartalom?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kesz_szoveg" value="Igen" id="chk_16306">
                <label class="form-check-label" for="chk_16306">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kesz_szoveg" value="Részben" id="chk_72423">
                <label class="form-check-label" for="chk_72423">Részben</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kesz_szoveg" value="Nincs, segítséget kérünk" id="chk_15669">
                <label class="form-check-label" for="chk_15669">Nincs, segítséget kérünk</label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label for="mainService" class="form-label fw-bold">Melyik szolgáltatás / termék a legfontosabb üzletileg?</label>
            <textarea id="mainService" name="mainService" class="form-control" rows="3"></textarea>
          </div>
          <div class="col-12">
            <label for="introText" class="form-label fw-bold">Rövid céges bemutatkozás</label>
            <textarea id="introText" name="introText" class="form-control" rows="3"></textarea>
          </div>
          <div class="col-12">
            <label for="services" class="form-label fw-bold">Milyen fő szolgáltatásokat / termékeket kell bemutatni?</label>
            <textarea id="services" name="services" class="form-control" rows="3"></textarea>
          </div>
        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">7. Képek, videók, dokumentumok</h4>
        <div class="row g-3">
          {{-- Saját képek --}}
          <div class="col-12">
            <label class="form-label fw-bold">Vannak saját képek?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sajat_kepek" value="Igen" id="chk_24530" onchange="sajatKepekChange(this)">
                <label class="form-check-label" for="chk_24530">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sajat_kepek" value="Nincs" id="chk_68677" onchange="sajatKepekChange(this)">
                <label class="form-check-label" for="chk_68677">Nincs</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sajat_kepek" value="Részben" id="chk_31181" onchange="sajatKepekChange(this)">
                <label class="form-check-label" for="chk_31181">Részben</label>
              </div>
            </div>
          </div>

          {{-- Ha Igen/Részben: képek formája --}}
          <div class="col-12 d-none" id="kepekFormajaWrap">
            <label class="form-label fw-bold">A képek milyen formában állnak rendelkezésre?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kepek_formaja[]" value="Rendezett mappákban" id="chk_57263">
                <label class="form-check-label" for="chk_57263">Rendezett mappákban</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kepek_formaja[]" value="Ömlesztve" id="chk_64730">
                <label class="form-check-label" for="chk_64730">Ömlesztve</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kepek_formaja[]" value="Weboldalról / Facebookról kell leszedni" id="chk_83894">
                <label class="form-check-label" for="chk_83894">Weboldalról / Facebookról kell leszedni</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kepek_formaja[]" value="Még el kell készíteni" id="chk_10313">
                <label class="form-check-label" for="chk_10313">Még el kell készíteni</label>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <label class="form-label fw-bold">Szükség van fotózásra?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="fotozas" value="Igen" id="chk_29040">
                <label class="form-check-label" for="chk_29040">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="fotozas" value="Nem" id="chk_61921">
                <label class="form-check-label" for="chk_61921">Nem</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="fotozas" value="Később eldöntjük" id="chk_93409">
                <label class="form-check-label" for="chk_93409">Később eldöntjük</label>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <label class="form-label fw-bold">Szükség van stock fotókra / illusztrációkra?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="stock_foto" value="Igen" id="chk_90676">
                <label class="form-check-label" for="chk_90676">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="stock_foto" value="Nem" id="chk_48741">
                <label class="form-check-label" for="chk_48741">Nem</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="stock_foto" value="Nem tudom" id="chk_31121">
                <label class="form-check-label" for="chk_31121">Nem tudom</label>
              </div>
            </div>
          </div>

          {{-- Van videó --}}
          <div class="col-12">
            <label class="form-label fw-bold">Van videó, amit be kell építeni?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="video" value="Igen" id="chk_92972" onchange="videoChange(this)">
                <label class="form-check-label" for="chk_92972">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="video" value="Nem" id="chk_58365" onchange="videoChange(this)">
                <label class="form-check-label" for="chk_58365">Nem</label>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <label for="documents" class="form-label fw-bold">Van letölthető dokumentum?</label>
            <textarea id="documents" name="documents" placeholder="pl. katalógus, árlista, prospektus, tanúsítvány" class="form-control" rows="3"></textarea>
          </div>
        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">8. Referenciák</h4>
        <div class="row g-3">

          <div class="col-12">
            <label class="form-label fw-bold">Szeretnének referenciákat megjeleníteni?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="referenciak_megjelenitese" value="Igen" id="chk_36568" onchange="referenciaChange(this)">
                <label class="form-check-label" for="chk_36568">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="referenciak_megjelenitese" value="Nem" id="chk_44094" onchange="referenciaChange(this)">
                <label class="form-check-label" for="chk_44094">Nem</label>
              </div>
            </div>
          </div>

          <div class="col-12 d-none" id="referenciaFormaWrap">
            <label class="form-label fw-bold">Ha igen, milyen formában?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="referencia_forma[]" value="Képes referencia" id="chk_34354">
                <label class="form-check-label" for="chk_34354">Képes referencia</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="referencia_forma[]" value="Rövid szöveges leírás" id="chk_29538">
                <label class="form-check-label" for="chk_29538">Rövid szöveges leírás</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="referencia_forma[]" value="Projektadatokkal" id="chk_97918">
                <label class="form-check-label" for="chk_97918">Projektadatokkal</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="referencia_forma[]" value="Ügyfélvéleménnyel" id="chk_63962">
                <label class="form-check-label" for="chk_63962">Ügyfélvéleménnyel</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="referencia_forma[]" value="Előtte-utána képekkel" id="chk_47476">
                <label class="form-check-label" for="chk_47476">Előtte-utána képekkel</label>
              </div>
            </div>
          </div>

          <div class="col-12 d-none" id="referenciaTextWrap">
            <label for="references" class="form-label fw-bold">Fontosabb referenciák</label>
            <textarea id="references" name="references" class="form-control" rows="3"></textarea>
          </div>

        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">9. Kapcsolati adatok és űrlapok</h4>
        <div class="row g-3">

          {{-- Funkciók: űrlapok, térkép --}}
          <div class="col-md-4">
            <label class="form-label fw-bold">Kapcsolati űrlap szükséges?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kapcsolati_urlap" value="Igen" id="chk_38865">
                <label class="form-check-label" for="chk_38865">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kapcsolati_urlap" value="Nem" id="chk_40711">
                <label class="form-check-label" for="chk_40711">Nem</label>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <label class="form-label fw-bold">Ajánlatkérő űrlap szükséges?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ajanlatkero_urlap" value="Igen" id="chk_76842" onchange="ajanlatkeroChange(this)">
                <label class="form-check-label" for="chk_76842">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ajanlatkero_urlap" value="Nem" id="chk_46140" onchange="ajanlatkeroChange(this)">
                <label class="form-check-label" for="chk_46140">Nem</label>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <label class="form-label fw-bold">Google Térkép beágyazás szükséges?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="google_terkep" value="Igen" id="chk_46218">
                <label class="form-check-label" for="chk_46218">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="google_terkep" value="Nem" id="chk_80930">
                <label class="form-check-label" for="chk_80930">Nem</label>
              </div>
            </div>
          </div>

          <div class="col-12 d-none" id="ajanlatkeroMezokWrap">
            <label class="form-label fw-bold">Milyen mezők legyenek az ajánlatkérő űrlapon?</label>
            <div class="row g-2">
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="ajanlatkero_mezok[]" value="Név" id="chk_41351">
                <label class="form-check-label" for="chk_41351">Név</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="ajanlatkero_mezok[]" value="Cégnév" id="chk_71523">
                <label class="form-check-label" for="chk_71523">Cégnév</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="ajanlatkero_mezok[]" value="Telefonszám" id="chk_81167">
                <label class="form-check-label" for="chk_81167">Telefonszám</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="ajanlatkero_mezok[]" value="E-mail" id="chk_32833">
                <label class="form-check-label" for="chk_32833">E-mail</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="ajanlatkero_mezok[]" value="Szolgáltatás kiválasztása" id="chk_94310">
                <label class="form-check-label" for="chk_94310">Szolgáltatás kiválasztása</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="ajanlatkero_mezok[]" value="Üzenet" id="chk_64485">
                <label class="form-check-label" for="chk_64485">Üzenet</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="ajanlatkero_mezok[]" value="Fájl feltöltés" id="chk_27864">
                <label class="form-check-label" for="chk_27864">Fájl feltöltés</label>
              </div></div>
            </div>
          </div>

          {{-- Megjelenő kontaktadatok --}}
          <div class="col-md-6">
            <label for="displayPhone" class="form-label fw-bold">Weboldalon megjelenő telefonszám</label>
            <input id="displayPhone" name="displayPhone" type="tel" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="displayEmail" class="form-label fw-bold">Weboldalon megjelenő e-mail cím</label>
            <input id="displayEmail" name="displayEmail" type="email" class="form-control">
          </div>
          <div class="col-12">
            <label for="displayAddress" class="form-label fw-bold">Weboldalon megjelenő cím</label>
            <input id="displayAddress" name="displayAddress" type="text" class="form-control">
          </div>
          <div class="col-12">
            <label for="openingHours" class="form-label fw-bold">Nyitvatartás</label>
            <textarea id="openingHours" name="openingHours" class="form-control" rows="2"></textarea>
          </div>

        </div>
      </div>
      </div><div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">10. Funkciók</h4>
        <p class="text-muted small mb-4">Webshop funkciókat ez a kérdőív nem tartalmaz, arra külön kérdőív készül.</p>
        <div class="row g-2">
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Egyszerű bemutatkozó weboldal"  id="chk_86141">
                <label class="form-check-label" for="chk_86141">Egyszerű bemutatkozó weboldal</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Kapcsolati űrlap"  id="chk_64111">
                <label class="form-check-label" for="chk_64111">Kapcsolati űrlap</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Ajánlatkérő űrlap"  id="chk_88154">
                <label class="form-check-label" for="chk_88154">Ajánlatkérő űrlap</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Hírlevél feliratkozás"  id="chk_34342">
                <label class="form-check-label" for="chk_34342">Hírlevél feliratkozás</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Blog / hírek kezelése"  id="chk_58070">
                <label class="form-check-label" for="chk_58070">Blog / hírek kezelése</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Galéria"  id="chk_40142">
                <label class="form-check-label" for="chk_40142">Galéria</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Referencia oldal"  id="chk_83539">
                <label class="form-check-label" for="chk_83539">Referencia oldal</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Többnyelvű weboldal"  id="chk_81890">
                <label class="form-check-label" for="chk_81890">Többnyelvű weboldal</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Időpontfoglalás"  id="chk_47691">
                <label class="form-check-label" for="chk_47691">Időpontfoglalás</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Ügyfélkapu / belépés"  id="chk_52693">
                <label class="form-check-label" for="chk_52693">Ügyfélkapu / belépés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Dokumentum feltöltés"  id="chk_69841">
                <label class="form-check-label" for="chk_69841">Dokumentum feltöltés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Letölthető fájlok"  id="chk_43141">
                <label class="form-check-label" for="chk_43141">Letölthető fájlok</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Chat / Messenger / WhatsApp kapcsolat"  id="chk_91446">
                <label class="form-check-label" for="chk_91446">Chat / Messenger / WhatsApp kapcsolat</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Google Analytics"  id="chk_67911">
                <label class="form-check-label" for="chk_67911">Google Analytics</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Funkciók" value="Facebook Pixel / Meta Pixel"  id="chk_48251">
                <label class="form-check-label" for="chk_48251">Facebook Pixel / Meta Pixel</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Funkciók" value="Google Ads követés"  id="chk_58499">
                <label class="form-check-label" for="chk_58499">Google Ads követés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="funkciok[]" value="Cookie kezelő"  id="chk_29575">
                <label class="form-check-label" for="chk_29575">Cookie kezelő</label>
              </div>
            </div>
        </div><div class="row g-3 mt-3">
          <div class="col-12">
            <label for="otherFeatures" class="form-label fw-bold">Egyéb funkcióigények</label>
            <textarea id="otherFeatures" name="otherFeatures" class="form-control" rows="3"></textarea>
          </div>
        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">11. Keresőoptimalizálás és hirdetés</h4>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label fw-bold">Fontos, hogy a weboldal Google-ben jól szerepeljen?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="seo_igeny" value="Igen" id="chk_52961" onchange="seoHirdetesChange()">
                <label class="form-check-label" for="chk_52961">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="seo_igeny" value="Nem" id="chk_33612" onchange="seoHirdetesChange()">
                <label class="form-check-label" for="chk_33612">Nem</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="seo_igeny" value="Később" id="chk_76980" onchange="seoHirdetesChange()">
                <label class="form-check-label" for="chk_76980">Később</label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label class="form-label fw-bold">Terveznek Google Ads vagy Facebook hirdetést?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hirdetesi_igeny" value="Igen" id="chk_73119" onchange="seoHirdetesChange()">
                <label class="form-check-label" for="chk_73119">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hirdetesi_igeny" value="Nem" id="chk_77049" onchange="seoHirdetesChange()">
                <label class="form-check-label" for="chk_77049">Nem</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hirdetesi_igeny" value="Később" id="chk_15280" onchange="seoHirdetesChange()">
                <label class="form-check-label" for="chk_15280">Később</label>
              </div>
            </div>
          </div>
          <div class="col-md-12 d-none" id="seoKeywordsWrap">
            <label for="keywords" class="form-label fw-bold">Milyen kulcsszavakra szeretnének megjelenni?</label>
            <input type="text" id="keywords" name="keywords" class="form-control">
          </div>
          <div class="col-md-12 d-none" id="seoRegionsWrap">
            <label for="regions" class="form-label fw-bold">Milyen településeken / régiókban dolgoznak?</label>
            <input type="text" id="regions" name="regions" class="form-control">
          </div>
          <div class="col-md-12 d-none" id="hirdetesCampaignWrap">
            <label class="form-label fw-bold">Szükség van hirdetési kampány beállítására is?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kampany_beallitas" value="Igen" id="chk_76678">
                <label class="form-check-label" for="chk_76678">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kampany_beallitas" value="Nem" id="chk_15996">
                <label class="form-check-label" for="chk_15996">Nem</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kampany_beallitas" value="Később" id="chk_41731">
                <label class="form-check-label" for="chk_41731">Később</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">12. Közösségi média</h4>
        <div class="row g-3">
          <div class="col-12">
            <label class="form-label fw-bold">Vannak közösségi média oldalai, amiket be kell kötni a weboldalra?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="social_bekotes" value="Igen" id="chk_60085" onchange="socialChange(this)">
                <label class="form-check-label" for="chk_60085">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="social_bekotes" value="Nem" id="chk_26208" onchange="socialChange(this)">
                <label class="form-check-label" for="chk_26208">Nem</label>
              </div>
            </div>
          </div>
          <div class="col-12 d-none" id="socialLinksWrap">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="facebook" class="form-label fw-bold">Facebook oldal</label>
                <input id="facebook" name="facebook" type="text" placeholder="https://" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="instagram" class="form-label fw-bold">Instagram oldal</label>
                <input id="instagram" name="instagram" type="text" placeholder="https://" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="linkedin" class="form-label fw-bold">LinkedIn oldal</label>
                <input id="linkedin" name="linkedin" type="text" placeholder="https://" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="tiktok" class="form-label fw-bold">TikTok oldal</label>
                <input id="tiktok" name="tiktok" type="text" placeholder="https://" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="youtube" class="form-label fw-bold">YouTube csatorna</label>
                <input id="youtube" name="youtube" type="text" placeholder="https://" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">13. Jogszabályi és adatvédelmi elemek</h4>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label fw-bold">Szükséges adatvédelmi tájékoztató?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="adatvedelmi" value="Igen" id="chk_62656">
                <label class="form-check-label" for="chk_62656">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="adatvedelmi" value="Van saját" id="chk_78195">
                <label class="form-check-label" for="chk_78195">Van saját</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="adatvedelmi" value="Nem tudom" id="chk_26958">
                <label class="form-check-label" for="chk_26958">Nem tudom</label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label class="form-label fw-bold">Szükséges ÁSZF?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="aszf" value="Igen" id="chk_74874">
                <label class="form-check-label" for="chk_74874">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="aszf" value="Van saját" id="chk_89906">
                <label class="form-check-label" for="chk_89906">Van saját</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="aszf" value="Nem tudom" id="chk_95516">
                <label class="form-check-label" for="chk_95516">Nem tudom</label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label class="form-label fw-bold">Lesz kapcsolatfelvételi / ajánlatkérő űrlap?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="urlap_adatkezeles" value="Igen" id="chk_66193">
                <label class="form-check-label" for="chk_66193">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="urlap_adatkezeles" value="Nem" id="chk_54770">
                <label class="form-check-label" for="chk_54770">Nem</label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label class="form-label fw-bold">Lesz hírlevél feliratkozás?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hirlevel_adatkezeles" value="Igen" id="chk_87030">
                <label class="form-check-label" for="chk_87030">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hirlevel_adatkezeles" value="Nem" id="chk_77790">
                <label class="form-check-label" for="chk_77790">Nem</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">14. Technikai hozzáférések</h4>
        <p class="text-muted small mb-4">Jelszavakat ne írjon a kérdőívbe. A hozzáféréseket külön, biztonságos csatornán kérjük átadni.</p>
        <div class="row g-2">
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hozzaferesek[]" value="Domain kezelő"  id="chk_94710">
                <label class="form-check-label" for="chk_94710">Domain kezelő hozzáférés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hozzaferesek[]" value="Tárhely"  id="chk_43075">
                <label class="form-check-label" for="chk_43075">Tárhely hozzáférés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hozzaferesek[]" value="Jelenlegi weboldal admin"  id="chk_28639">
                <label class="form-check-label" for="chk_28639">Jelenlegi weboldal admin hozzáférés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hozzaferesek[]" value="Google Analytics"  id="chk_73482">
                <label class="form-check-label" for="chk_73482">Google Analytics hozzáférés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hozzaferesek[]" value="Google Search Console"  id="chk_84842">
                <label class="form-check-label" for="chk_84842">Google Search Console hozzáférés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hozzaferesek[]" value="Facebook oldal admin"  id="chk_48802">
                <label class="form-check-label" for="chk_48802">Facebook oldal admin hozzáférés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hozzaferesek[]" value="Meta Business"  id="chk_24873">
                <label class="form-check-label" for="chk_24873">Meta Business hozzáférés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hozzaferesek[]" value="Google Cégprofil"  id="chk_65452">
                <label class="form-check-label" for="chk_65452">Google Cégprofil hozzáférés</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hozzaferesek[]" value="E-mail fiók hozzáférések"  id="chk_89801">
                <label class="form-check-label" for="chk_89801">E-mail fiók hozzáférések</label>
              </div>
            </div>
          <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Hozzáférések" value="Egyik sem / segítséget kérünk"  id="chk_25176">
                <label class="form-check-label" for="chk_25176">Egyik sem / segítséget kérünk</label>
              </div>
            </div>
        </div><div class="row g-3 mt-3">
          <div class="col-12">
            <label for="accessNote" class="form-label fw-bold">Megjegyzés a hozzáférésekhez</label>
            <textarea id="accessNote" name="accessNote" class="form-control" rows="3"></textarea>
          </div>
        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">15. Határidő és ütemezés</h4>
        <div class="row g-3">
          <div class="col-md-12">
            <label for="deadline" class="form-label fw-bold">Mikorra szeretnék a weboldalt elkészíttetni?</label>
            <input id="deadline" name="deadline" type="date" class="form-control">
          </div>
          <div class="col-md-12">
            <label class="form-label fw-bold">Van fix határidő?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="fix_hatarido" value="Igen" id="chk_19150" onchange="fixHatarChange(this)">
                <label class="form-check-label" for="chk_19150">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="fix_hatarido" value="Nem" id="chk_31529" onchange="fixHatarChange(this)">
                <label class="form-check-label" for="chk_31529">Nem</label>
              </div>
            </div>
          </div>
          <div class="col-md-12 d-none" id="deadlineReasonWrap">
            <label for="deadlineReason" class="form-label fw-bold">Ha igen, miért fontos a határidő?</label>
            <textarea id="deadlineReason" name="deadlineReason" placeholder="pl. pályázat, kampány, rendezvény, szezonkezdés" class="form-control" rows="3"></textarea>
          </div>
          <div class="col-md-12">
            <label for="materialDate" class="form-label fw-bold">Mikor tudják átadni a szükséges anyagokat?</label>
            <textarea id="materialDate" name="materialDate" class="form-control" rows="3"></textarea>
          </div>
        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">16. Karbantartás és későbbi kezelés</h4>
        <div class="row g-3">
          <div class="col-md-12">
            <label class="form-label fw-bold">Ki fogja frissíteni a weboldalt az átadás után?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="atadas_utani_frissites" value="Megrendelő" id="chk_21052">
                <label class="form-check-label" for="chk_21052">Megrendelő</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="atadas_utani_frissites" value="Kivitelező" id="chk_49911">
                <label class="form-check-label" for="chk_49911">Kivitelező</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="atadas_utani_frissites" value="Közösen" id="chk_95468">
                <label class="form-check-label" for="chk_95468">Közösen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="atadas_utani_frissites" value="Nem tudom" id="chk_14381">
                <label class="form-check-label" for="chk_14381">Nem tudom</label>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <label class="form-label fw-bold">Szükséges havi karbantartás?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="havi_karbantartas" value="Igen" id="chk_69198" onchange="karbantartasChange(this)">
                <label class="form-check-label" for="chk_69198">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="havi_karbantartas" value="Nem" id="chk_35089" onchange="karbantartasChange(this)">
                <label class="form-check-label" for="chk_35089">Nem</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="havi_karbantartas" value="Később" id="chk_36957" onchange="karbantartasChange(this)">
                <label class="form-check-label" for="chk_36957">Később</label>
              </div>
            </div>
          </div>
          <div class="col-12 d-none" id="karbantartasIgenyWrap">
            <label class="form-label fw-bold">Milyen karbantartásra lenne szükség?</label>
            <div class="row g-2">
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="karbantartasi_igeny[]" value="Biztonsági frissítések" id="chk_27684">
                <label class="form-check-label" for="chk_27684">Biztonsági frissítések</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="karbantartasi_igeny[]" value="Tartalomfrissítés" id="chk_25933">
                <label class="form-check-label" for="chk_25933">Tartalomfrissítés</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="karbantartasi_igeny[]" value="Képek feltöltése" id="chk_25301">
                <label class="form-check-label" for="chk_25301">Képek feltöltése</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="karbantartasi_igeny[]" value="Blogcikkek feltöltése" id="chk_42769">
                <label class="form-check-label" for="chk_42769">Blogcikkek feltöltése</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="karbantartasi_igeny[]" value="Technikai felügyelet" id="chk_54915">
                <label class="form-check-label" for="chk_54915">Technikai felügyelet</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="karbantartasi_igeny[]" value="Mentések" id="chk_93745">
                <label class="form-check-label" for="chk_93745">Mentések</label>
              </div></div>
              <div class="col-md-4 mb-2"><div class="form-check">
                <input class="form-check-input" type="checkbox" name="karbantartasi_igeny[]" value="Hirdetéskezelés" id="chk_37197">
                <label class="form-check-label" for="chk_37197">Hirdetéskezelés</label>
              </div></div>
            </div>
          </div>
        </div>
      </div>
      </div><div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">17. Költségkeret</h4>
        <div class="row g-3">
          <div class="col-md-12">
            <label class="form-label fw-bold">Van előzetes költségkeret a weboldalra?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="van_koltsegkeret" value="Igen" id="chk_74058" onchange="koltsegkeretChange(this)">
                <label class="form-check-label" for="chk_74058">Igen</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="van_koltsegkeret" value="Nem" id="chk_79485" onchange="koltsegkeretChange(this)">
                <label class="form-check-label" for="chk_79485">Nem</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="van_koltsegkeret" value="Még nem tudjuk" id="chk_37743" onchange="koltsegkeretChange(this)">
                <label class="form-check-label" for="chk_37743">Még nem tudjuk</label>
              </div>
            </div>
          </div>
          <div class="col-12 d-none" id="koltsegkeretOsszegWrap">
            <label class="form-label fw-bold">Mekkora összeggel számolnak?</label>
            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="koltsegkeret" value="100 000 – 250 000 Ft" id="chk_98183">
                <label class="form-check-label" for="chk_98183">100 000 – 250 000 Ft</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="koltsegkeret" value="250 000 – 500 000 Ft" id="chk_85176">
                <label class="form-check-label" for="chk_85176">250 000 – 500 000 Ft</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="koltsegkeret" value="500 000 – 1 000 000 Ft" id="chk_48118">
                <label class="form-check-label" for="chk_48118">500 000 – 1 000 000 Ft</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="koltsegkeret" value="1 000 000 Ft felett" id="chk_34478">
                <label class="form-check-label" for="chk_34478">1 000 000 Ft felett</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="koltsegkeret" value="Egyedi ajánlatot kérünk" id="chk_25183">
                <label class="form-check-label" for="chk_25183">Egyedi ajánlatot kérünk</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="card shadow-sm mb-4 border-0 bg-light rounded-4">
        <div class="card-body p-4">
        <h4 class="card-title text-primary mb-3">18. Egyéb igények és mellékletek</h4>
        <div class="row g-3">
          <div class="col-12">
            <label for="otherNeeds" class="form-label fw-bold">Egyéb elképzelés, kérés vagy probléma</label>
            <textarea id="otherNeeds" name="otherNeeds" class="form-control" rows="3"></textarea>
          </div>
          <div class="col-12">
            <label class="form-label fw-bold">Kérjük, ha rendelkezésre állnak, küldje el külön mellékletként:</label>
            <div class="row g-2">
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Logó"  id="chk_67550">
                <label class="form-check-label" for="chk_67550">Logó</label>
              </div>
            </div>
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Arculati anyag"  id="chk_11507">
                <label class="form-check-label" for="chk_11507">Arculati anyag</label>
              </div>
            </div>
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Céges bemutatkozó"  id="chk_38769">
                <label class="form-check-label" for="chk_38769">Céges bemutatkozó</label>
              </div>
            </div>
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Szolgáltatásleírások"  id="chk_26610">
                <label class="form-check-label" for="chk_26610">Szolgáltatásleírások</label>
              </div>
            </div>
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Terméklisták"  id="chk_58759">
                <label class="form-check-label" for="chk_58759">Terméklisták</label>
              </div>
            </div>
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Képek"  id="chk_78624">
                <label class="form-check-label" for="chk_78624">Képek</label>
              </div>
            </div>
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Videók"  id="chk_43937">
                <label class="form-check-label" for="chk_43937">Videók</label>
              </div>
            </div>
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Referenciák"  id="chk_78549">
                <label class="form-check-label" for="chk_78549">Referenciák</label>
              </div>
            </div>
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Tanúsítványok"  id="chk_21492">
                <label class="form-check-label" for="chk_21492">Tanúsítványok</label>
              </div>
            </div>
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Árlista"  id="chk_21774">
                <label class="form-check-label" for="chk_21774">Árlista</label>
              </div>
            </div>
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Katalógus"  id="chk_10404">
                <label class="form-check-label" for="chk_10404">Katalógus</label>
              </div>
            </div>
              <div class="col-md-4 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mellekletek[]" value="Korábbi weboldal adatai"  id="chk_10409">
                <label class="form-check-label" for="chk_10409">Korábbi weboldal adatai</label>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      </div><div class="d-flex flex-column align-items-center mt-5 mb-5">
        <p class="text-muted small mb-4 text-center">
          Beküldés előtt javasolt a kérdőívet PDF-ben letölteni.
        </p>
        <div>
          <button type="reset" class="btn btn-outline-danger btn-lg me-2 mb-2">Űrlap törlése</button>
          <button type="button" class="btn btn-outline-secondary btn-lg me-2 mb-2" onclick="downloadPdf()"><i class="fas fa-file-pdf me-2"></i>Letöltés PDF-ben</button>
          <!-- <button type="button" class="btn btn-outline-secondary btn-lg me-2 mb-2" onclick="window.print()">Nyomtatás</button> -->
          <button type="submit" class="btn btn-primary btn-lg mb-2"><i class="fas fa-paper-plane me-2"></i>Űrlap küldése</button>
        </div>
      </div>
    </form>
    </div>


    <!-- FOOTER -->
    @include('layouts.footer')
  
    <!-- TOP BUTTON  -->
    <button type="button" class="btn btn-outline-primary btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>
  
  <script>
    function domainRadioChange(el) {
      var val = el.value;
      var nameWrap     = document.getElementById('domainNameWrap');
      var providerWrap = document.getElementById('domainProviderWrap');
      var wantWrap     = document.getElementById('domainWantWrap');
      nameWrap.classList.add('d-none');
      providerWrap.classList.add('d-none');
      wantWrap.classList.add('d-none');
      if (val === 'Igen') {
        nameWrap.classList.remove('d-none');
        providerWrap.classList.remove('d-none');
      } else if (val === 'Nem') {
        wantWrap.classList.remove('d-none');
      }
    }

    function emailRadioChange(el) {
      var wrap = document.getElementById('emailAccountsWrap');
      if (el.value === 'Igen') wrap.classList.remove('d-none');
      else wrap.classList.add('d-none');
    }

    function currentSiteChange(el) {
      var show = el.value === 'Igen';
      ['currentWebsiteWrap','currentSiteProblemsWrap','keepOldWrap','removeOldWrap'].forEach(function(id){
        document.getElementById(id).classList.toggle('d-none', !show);
      });
    }

    function sajatKepekChange(el) {
      var wrap = document.getElementById('kepekFormajaWrap');
      if (el.value === 'Igen' || el.value === 'Részben') wrap.classList.remove('d-none');
      else wrap.classList.add('d-none');
    }

    function videoChange(el) {
      // no extra field needed for video, placeholder for future use
    }

    function referenciaChange(el) {
      var show = el.value === 'Igen';
      ['referenciaFormaWrap','referenciaTextWrap'].forEach(function(id){
        document.getElementById(id).classList.toggle('d-none', !show);
      });
    }

    function ajanlatkeroChange(el) {
      var wrap = document.getElementById('ajanlatkeroMezokWrap');
      if (el.value === 'Igen') wrap.classList.remove('d-none');
      else wrap.classList.add('d-none');
    }

    function fixHatarChange(el) {
      var wrap = document.getElementById('deadlineReasonWrap');
      if (el.value === 'Igen') wrap.classList.remove('d-none');
      else wrap.classList.add('d-none');
    }

    function seoHirdetesChange() {
      var seo = document.querySelector('input[name="seo_igeny"]:checked')?.value;
      var hirdetes = document.querySelector('input[name="hirdetesi_igeny"]:checked')?.value;
      
      var seoKeywordsWrap = document.getElementById('seoKeywordsWrap');
      var seoRegionsWrap = document.getElementById('seoRegionsWrap');
      var hirdetesCampaignWrap = document.getElementById('hirdetesCampaignWrap');

      if (seo === 'Igen') seoKeywordsWrap.classList.remove('d-none');
      else seoKeywordsWrap.classList.add('d-none');

      if (hirdetes === 'Igen') hirdetesCampaignWrap.classList.remove('d-none');
      else hirdetesCampaignWrap.classList.add('d-none');

      if (seo === 'Igen' || hirdetes === 'Igen') seoRegionsWrap.classList.remove('d-none');
      else seoRegionsWrap.classList.add('d-none');
    }

    function socialChange(el) {
      var wrap = document.getElementById('socialLinksWrap');
      if (el.value === 'Igen') wrap.classList.remove('d-none');
      else wrap.classList.add('d-none');
    }

    function karbantartasChange(el) {
      var wrap = document.getElementById('karbantartasIgenyWrap');
      if (el.value === 'Igen') wrap.classList.remove('d-none');
      else wrap.classList.add('d-none');
    }

    function koltsegkeretChange(el) {
      var wrap = document.getElementById('koltsegkeretOsszegWrap');
      if (el.value === 'Igen') wrap.classList.remove('d-none');
      else wrap.classList.add('d-none');
    }

    function downloadPdf() {
      var form = document.getElementById('websiteForm');
      var originalAction = form.action;
      form.action = '{{ route("kerdoiv.pdf") }}';
      form.submit();
      // Restore original action after a short delay
      setTimeout(function() {
        form.action = originalAction;
      }, 100);
    }
  </script>
  </body>
</html>