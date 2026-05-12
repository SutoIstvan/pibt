<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weboldal készítési kérdőív</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 14px; color: #1a1a2e; line-height: 1.6; margin: 0; padding: 20px; background: #f8fafc; }
        .container { max-width: 700px; margin: 0 auto; background: #fff; border-radius: 8px; border: 1px solid #e2e8f0; overflow: hidden; }
        .header { background: #0f2447; color: #fff; padding: 24px 28px; }
        .header h1 { margin: 0; font-size: 20px; font-weight: 700; }
        .header p { margin: 6px 0 0; font-size: 13px; color: rgba(255,255,255,.65); }
        .body { padding: 24px 28px; }
        .section-title { font-size: 15px; font-weight: 700; color: #0f2447; margin: 24px 0 8px; padding-bottom: 8px; border-bottom: 2px solid #0f2447; }
        .info-row { margin-bottom: 10px; }
        .info-row .label { font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: .05em; }
        .info-row .value { font-size: 14px; font-weight: 600; color: #1e293b; margin-top: 2px; }
        .tag { display: inline-block; background: #e0e7ff; color: #3730a3; font-size: 12px; font-weight: 600; padding: 3px 10px; border-radius: 12px; margin: 2px 4px 2px 0; }
        .footer { padding: 16px 28px; background: #f8fafc; border-top: 1px solid #e2e8f0; font-size: 12px; color: #94a3b8; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Weboldal készítési kérdőív</h1>
            <p>Automatikusan generált e-mail a pikft.hu kérdőíves oldalról</p>
        </div>

        <div class="body">
            {{-- 1. Cégadatok --}}
            <div class="section-title">1. Cégadatok</div>
            @if(!empty($data['company']))
            <div class="info-row"><div class="label">Cég neve</div><div class="value">{{ $data['company'] }}</div></div>
            @endif
            @if(!empty($data['contact']))
            <div class="info-row"><div class="label">Kapcsolattartó neve</div><div class="value">{{ $data['contact'] }}</div></div>
            @endif
            @if(!empty($data['phone']))
            <div class="info-row"><div class="label">Telefonszám</div><div class="value">{{ $data['phone'] }}</div></div>
            @endif
            @if(!empty($data['email']))
            <div class="info-row"><div class="label">E-mail cím</div><div class="value">{{ $data['email'] }}</div></div>
            @endif
            @if(!empty($data['address']))
            <div class="info-row"><div class="label">Székhely / cím</div><div class="value">{{ $data['address'] }}</div></div>
            @endif
            @if(!empty($data['companyData']))
            <div class="info-row"><div class="label">Adószám / cégjegyzékszám</div><div class="value">{{ $data['companyData'] }}</div></div>
            @endif

            {{-- 2. Weboldal célja --}}
            @if(!empty($data['weboldal_celja']) || !empty($data['mainGoal']))
            <div class="section-title">2. A weboldal célja</div>
            @if(!empty($data['weboldal_celja']) && is_array($data['weboldal_celja']))
            <div class="info-row"><div class="label">Weboldal célja</div><div class="value">@foreach($data['weboldal_celja'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
            @endif
            @if(!empty($data['mainGoal']))
            <div class="info-row"><div class="label">Legfontosabb cél</div><div class="value">{{ $data['mainGoal'] }}</div></div>
            @endif
            @endif

            {{-- 3. Domain, tárhely, e-mail --}}
            @if(!empty($data['van_domain']) || !empty($data['van_tarhely']) || !empty($data['domain_email']))
            <div class="section-title">3. Domain, tárhely és e-mail</div>
            @if(!empty($data['van_domain']))
            <div class="info-row"><div class="label">Van domain?</div><div class="value">{{ $data['van_domain'] }}</div></div>
            @endif
            @if(!empty($data['domainName']))
            <div class="info-row"><div class="label">Domain név</div><div class="value">{{ $data['domainName'] }}</div></div>
            @endif
            @if(!empty($data['domainProvider']))
            <div class="info-row"><div class="label">Domain kezelő</div><div class="value">{{ $data['domainProvider'] }}</div></div>
            @endif
            @if(!empty($data['domainWant']))
            <div class="info-row"><div class="label">Kívánt domain</div><div class="value">{{ $data['domainWant'] }}</div></div>
            @endif
            @if(!empty($data['van_tarhely']))
            <div class="info-row"><div class="label">Van tárhely?</div><div class="value">{{ $data['van_tarhely'] }}</div></div>
            @endif
            @if(!empty($data['domain_email']))
            <div class="info-row"><div class="label">E-mail igény</div><div class="value">{{ $data['domain_email'] }}</div></div>
            @endif
            @if(!empty($data['emailAccounts']))
            <div class="info-row"><div class="label">Kért e-mail címek</div><div class="value">{{ $data['emailAccounts'] }}</div></div>
            @endif
            @endif

            {{-- 4. Jelenlegi weboldal --}}
            @if(!empty($data['van_jelenlegi']))
            <div class="section-title">4. Jelenlegi weboldal</div>
            <div class="info-row"><div class="label">Van jelenlegi weboldal?</div><div class="value">{{ $data['van_jelenlegi'] }}</div></div>
            @if(!empty($data['currentWebsite']))
            <div class="info-row"><div class="label">Weboldal címe</div><div class="value">{{ $data['currentWebsite'] }}</div></div>
            @endif
            @if(!empty($data['jelenlegi_problema']) && is_array($data['jelenlegi_problema']))
            <div class="info-row"><div class="label">Problémák</div><div class="value">@foreach($data['jelenlegi_problema'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
            @endif
            @if(!empty($data['keepOld']))
            <div class="info-row"><div class="label">Megtartandó elemek</div><div class="value">{{ $data['keepOld'] }}</div></div>
            @endif
            @if(!empty($data['removeOld']))
            <div class="info-row"><div class="label">Elhagyandó elemek</div><div class="value">{{ $data['removeOld'] }}</div></div>
            @endif
            @endif

            {{-- 5. Arculat --}}
            @if(!empty($data['style']) || !empty($data['colors']) || !empty($data['logo']))
            <div class="section-title">5. Arculat és megjelenés</div>
            @if(!empty($data['style']))
            <div class="info-row"><div class="label">Stílus</div><div class="value">{{ $data['style'] }}</div></div>
            @endif
            @if(!empty($data['colors']))
            <div class="info-row"><div class="label">Színvilág</div><div class="value">{{ $data['colors'] }}</div></div>
            @endif
            @if(!empty($data['logo']))
            <div class="info-row"><div class="label">Logó</div><div class="value">{{ $data['logo'] }}</div></div>
            @endif
            @if(!empty($data['arculat']))
            <div class="info-row"><div class="label">Arculat</div><div class="value">{{ $data['arculat'] }}</div></div>
            @endif
            @if(!empty($data['likedSites']))
            <div class="info-row"><div class="label">Tetsző weboldalak</div><div class="value">{{ $data['likedSites'] }}</div></div>
            @endif
            @if(!empty($data['likedReason']))
            <div class="info-row"><div class="label">Miért tetszik?</div><div class="value">{{ $data['likedReason'] }}</div></div>
            @endif
            @if(!empty($data['dislikedSites']))
            <div class="info-row"><div class="label">Nem tetsző weboldalak</div><div class="value">{{ $data['dislikedSites'] }}</div></div>
            @endif
            @endif

            {{-- 6. Tartalom --}}
            @if(!empty($data['menupontok']) || !empty($data['introText']) || !empty($data['services']))
            <div class="section-title">6. Tartalom és menüpontok</div>
            @if(!empty($data['menupontok']) && is_array($data['menupontok']))
            <div class="info-row"><div class="label">Menüpontok</div><div class="value">@foreach($data['menupontok'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
            @endif
            @if(!empty($data['otherMenu']))
            <div class="info-row"><div class="label">Egyéb menüpontok</div><div class="value">{{ $data['otherMenu'] }}</div></div>
            @endif
            @if(!empty($data['kesz_szoveg']))
            <div class="info-row"><div class="label">Kész szöveg?</div><div class="value">{{ $data['kesz_szoveg'] }}</div></div>
            @endif
            @if(!empty($data['mainService']))
            <div class="info-row"><div class="label">Legfontosabb szolgáltatás</div><div class="value">{{ $data['mainService'] }}</div></div>
            @endif
            @if(!empty($data['introText']))
            <div class="info-row"><div class="label">Céges bemutatkozás</div><div class="value">{{ $data['introText'] }}</div></div>
            @endif
            @if(!empty($data['services']))
            <div class="info-row"><div class="label">Fő szolgáltatások / termékek</div><div class="value">{{ $data['services'] }}</div></div>
            @endif
            @endif

            {{-- 7. Képek, videók --}}
            @if(!empty($data['sajat_kepek']) || !empty($data['fotozas']) || !empty($data['video']))
            <div class="section-title">7. Képek, videók, dokumentumok</div>
            @if(!empty($data['sajat_kepek']))
            <div class="info-row"><div class="label">Saját képek?</div><div class="value">{{ $data['sajat_kepek'] }}</div></div>
            @endif
            @if(!empty($data['kepek_formaja']) && is_array($data['kepek_formaja']))
            <div class="info-row"><div class="label">Képek formája</div><div class="value">@foreach($data['kepek_formaja'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
            @endif
            @if(!empty($data['fotozas']))
            <div class="info-row"><div class="label">Fotózás szükséges?</div><div class="value">{{ $data['fotozas'] }}</div></div>
            @endif
            @if(!empty($data['stock_foto']))
            <div class="info-row"><div class="label">Stock fotó szükséges?</div><div class="value">{{ $data['stock_foto'] }}</div></div>
            @endif
            @if(!empty($data['video']))
            <div class="info-row"><div class="label">Videó beépítés?</div><div class="value">{{ $data['video'] }}</div></div>
            @endif
            @if(!empty($data['documents']))
            <div class="info-row"><div class="label">Letölthető dokumentumok</div><div class="value">{{ $data['documents'] }}</div></div>
            @endif
            @endif

            {{-- 8. Referenciák --}}
            @if(!empty($data['referenciak_megjelenitese']))
            <div class="section-title">8. Referenciák</div>
            <div class="info-row"><div class="label">Referenciák megjelenítése?</div><div class="value">{{ $data['referenciak_megjelenitese'] }}</div></div>
            @if(!empty($data['referencia_forma']) && is_array($data['referencia_forma']))
            <div class="info-row"><div class="label">Referencia forma</div><div class="value">@foreach($data['referencia_forma'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
            @endif
            @if(!empty($data['references']))
            <div class="info-row"><div class="label">Fontosabb referenciák</div><div class="value">{{ $data['references'] }}</div></div>
            @endif
            @endif

            {{-- 9. Kapcsolati adatok --}}
            @if(!empty($data['kapcsolati_urlap']) || !empty($data['displayPhone']))
            <div class="section-title">9. Kapcsolati adatok és űrlapok</div>
            @if(!empty($data['kapcsolati_urlap']))
            <div class="info-row"><div class="label">Kapcsolati űrlap?</div><div class="value">{{ $data['kapcsolati_urlap'] }}</div></div>
            @endif
            @if(!empty($data['ajanlatkero_urlap']))
            <div class="info-row"><div class="label">Ajánlatkérő űrlap?</div><div class="value">{{ $data['ajanlatkero_urlap'] }}</div></div>
            @endif
            @if(!empty($data['google_terkep']))
            <div class="info-row"><div class="label">Google Térkép?</div><div class="value">{{ $data['google_terkep'] }}</div></div>
            @endif
            @if(!empty($data['ajanlatkero_mezok']) && is_array($data['ajanlatkero_mezok']))
            <div class="info-row"><div class="label">Ajánlatkérő mezők</div><div class="value">@foreach($data['ajanlatkero_mezok'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
            @endif
            @if(!empty($data['displayPhone']))
            <div class="info-row"><div class="label">Megjelenő telefonszám</div><div class="value">{{ $data['displayPhone'] }}</div></div>
            @endif
            @if(!empty($data['displayEmail']))
            <div class="info-row"><div class="label">Megjelenő e-mail</div><div class="value">{{ $data['displayEmail'] }}</div></div>
            @endif
            @if(!empty($data['displayAddress']))
            <div class="info-row"><div class="label">Megjelenő cím</div><div class="value">{{ $data['displayAddress'] }}</div></div>
            @endif
            @if(!empty($data['openingHours']))
            <div class="info-row"><div class="label">Nyitvatartás</div><div class="value">{{ $data['openingHours'] }}</div></div>
            @endif
            @endif

            {{-- 10. Funkciók --}}
            @if(!empty($data['funkciok']) || !empty($data['otherFeatures']))
            <div class="section-title">10. Funkciók</div>
            @if(!empty($data['funkciok']) && is_array($data['funkciok']))
            <div class="info-row"><div class="label">Funkciók</div><div class="value">@foreach($data['funkciok'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
            @endif
            @if(!empty($data['otherFeatures']))
            <div class="info-row"><div class="label">Egyéb funkcióigények</div><div class="value">{{ $data['otherFeatures'] }}</div></div>
            @endif
            @endif

            {{-- 11. SEO --}}
            @if(!empty($data['seo_igeny']) || !empty($data['hirdetesi_igeny']))
            <div class="section-title">11. Keresőoptimalizálás és hirdetés</div>
            @if(!empty($data['seo_igeny']))
            <div class="info-row"><div class="label">SEO igény?</div><div class="value">{{ $data['seo_igeny'] }}</div></div>
            @endif
            @if(!empty($data['hirdetesi_igeny']))
            <div class="info-row"><div class="label">Hirdetési igény?</div><div class="value">{{ $data['hirdetesi_igeny'] }}</div></div>
            @endif
            @if(!empty($data['keywords']))
            <div class="info-row"><div class="label">Kulcsszavak</div><div class="value">{{ $data['keywords'] }}</div></div>
            @endif
            @if(!empty($data['regions']))
            <div class="info-row"><div class="label">Célterület</div><div class="value">{{ $data['regions'] }}</div></div>
            @endif
            @if(!empty($data['kampany_beallitas']))
            <div class="info-row"><div class="label">Kampány beállítás?</div><div class="value">{{ $data['kampany_beallitas'] }}</div></div>
            @endif
            @endif

            {{-- 12. Social --}}
            @if(!empty($data['social_bekotes']))
            <div class="section-title">12. Közösségi média</div>
            <div class="info-row"><div class="label">Social bekötés?</div><div class="value">{{ $data['social_bekotes'] }}</div></div>
            @if(!empty($data['facebook']))
            <div class="info-row"><div class="label">Facebook</div><div class="value">{{ $data['facebook'] }}</div></div>
            @endif
            @if(!empty($data['instagram']))
            <div class="info-row"><div class="label">Instagram</div><div class="value">{{ $data['instagram'] }}</div></div>
            @endif
            @if(!empty($data['linkedin']))
            <div class="info-row"><div class="label">LinkedIn</div><div class="value">{{ $data['linkedin'] }}</div></div>
            @endif
            @if(!empty($data['tiktok']))
            <div class="info-row"><div class="label">TikTok</div><div class="value">{{ $data['tiktok'] }}</div></div>
            @endif
            @if(!empty($data['youtube']))
            <div class="info-row"><div class="label">YouTube</div><div class="value">{{ $data['youtube'] }}</div></div>
            @endif
            @endif

            {{-- 13. Jogszabályi --}}
            @if(!empty($data['adatvedelmi']) || !empty($data['aszf']))
            <div class="section-title">13. Jogszabályi és adatvédelmi elemek</div>
            @if(!empty($data['adatvedelmi']))
            <div class="info-row"><div class="label">Adatvédelmi tájékoztató?</div><div class="value">{{ $data['adatvedelmi'] }}</div></div>
            @endif
            @if(!empty($data['aszf']))
            <div class="info-row"><div class="label">ÁSZF?</div><div class="value">{{ $data['aszf'] }}</div></div>
            @endif
            @if(!empty($data['urlap_adatkezeles']))
            <div class="info-row"><div class="label">Űrlap adatkezelés?</div><div class="value">{{ $data['urlap_adatkezeles'] }}</div></div>
            @endif
            @if(!empty($data['hirlevel_adatkezeles']))
            <div class="info-row"><div class="label">Hírlevél adatkezelés?</div><div class="value">{{ $data['hirlevel_adatkezeles'] }}</div></div>
            @endif
            @endif

            {{-- 14. Hozzáférések --}}
            @if(!empty($data['hozzaferesek']) || !empty($data['accessNote']))
            <div class="section-title">14. Technikai hozzáférések</div>
            @if(!empty($data['hozzaferesek']) && is_array($data['hozzaferesek']))
            <div class="info-row"><div class="label">Hozzáférések</div><div class="value">@foreach($data['hozzaferesek'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
            @endif
            @if(!empty($data['accessNote']))
            <div class="info-row"><div class="label">Megjegyzés</div><div class="value">{{ $data['accessNote'] }}</div></div>
            @endif
            @endif

            {{-- 15. Határidő --}}
            @if(!empty($data['deadline']) || !empty($data['fix_hatarido']))
            <div class="section-title">15. Határidő és ütemezés</div>
            @if(!empty($data['deadline']))
            <div class="info-row"><div class="label">Kért határidő</div><div class="value">{{ $data['deadline'] }}</div></div>
            @endif
            @if(!empty($data['fix_hatarido']))
            <div class="info-row"><div class="label">Fix határidő?</div><div class="value">{{ $data['fix_hatarido'] }}</div></div>
            @endif
            @if(!empty($data['deadlineReason']))
            <div class="info-row"><div class="label">Határidő oka</div><div class="value">{{ $data['deadlineReason'] }}</div></div>
            @endif
            @if(!empty($data['materialDate']))
            <div class="info-row"><div class="label">Anyagátadás ideje</div><div class="value">{{ $data['materialDate'] }}</div></div>
            @endif
            @endif

            {{-- 16. Karbantartás --}}
            @if(!empty($data['atadas_utani_frissites']) || !empty($data['havi_karbantartas']))
            <div class="section-title">16. Karbantartás és későbbi kezelés</div>
            @if(!empty($data['atadas_utani_frissites']))
            <div class="info-row"><div class="label">Átadás utáni frissítés</div><div class="value">{{ $data['atadas_utani_frissites'] }}</div></div>
            @endif
            @if(!empty($data['havi_karbantartas']))
            <div class="info-row"><div class="label">Havi karbantartás?</div><div class="value">{{ $data['havi_karbantartas'] }}</div></div>
            @endif
            @if(!empty($data['karbantartasi_igeny']) && is_array($data['karbantartasi_igeny']))
            <div class="info-row"><div class="label">Karbantartási igény</div><div class="value">@foreach($data['karbantartasi_igeny'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
            @endif
            @endif

            {{-- 17. Költségkeret --}}
            @if(!empty($data['van_koltsegkeret']))
            <div class="section-title">17. Költségkeret</div>
            <div class="info-row"><div class="label">Van költségkeret?</div><div class="value">{{ $data['van_koltsegkeret'] }}</div></div>
            @if(!empty($data['koltsegkeret']))
            <div class="info-row"><div class="label">Költségkeret</div><div class="value">{{ $data['koltsegkeret'] }}</div></div>
            @endif
            @endif

            {{-- 18. Egyéb --}}
            @if(!empty($data['otherNeeds']) || !empty($data['mellekletek']))
            <div class="section-title">18. Egyéb igények és mellékletek</div>
            @if(!empty($data['otherNeeds']))
            <div class="info-row"><div class="label">Egyéb igények</div><div class="value">{{ $data['otherNeeds'] }}</div></div>
            @endif
            @if(!empty($data['mellekletek']) && is_array($data['mellekletek']))
            <div class="info-row"><div class="label">Mellékletek</div><div class="value">@foreach($data['mellekletek'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
            @endif
            @endif
        </div>

        <div class="footer">
            Ez az e-mail automatikusan lett generálva a pikft.hu weboldal készítési kérdőív által.
        </div>
    </div>
</body>
</html>
