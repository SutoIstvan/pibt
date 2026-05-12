<!DOCTYPE html>
<html lang="hu">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Weboldal készítési kérdőív</title>
    <style>
        @page { margin: 25mm 20mm 25mm 20mm; }
        body { font-family: 'DejaVu Sans', sans-serif; font-size: 11px; color: #1a1a2e; line-height: 1.5; margin: 0; padding: 0; }
        .header { text-align: center; border-bottom: 3px solid #0f2447; padding-bottom: 12px; margin-bottom: 20px; }
        .header h1 { font-size: 20px; color: #0f2447; margin: 0 0 4px 0; }
        .header p { font-size: 11px; color: #64748b; margin: 0; }
        .section-title { font-size: 13px; font-weight: 700; color: #0f2447; margin: 18px 0 6px; padding: 6px 10px; background: #eef2ff; border-left: 4px solid #0f2447; }
        .field { margin-bottom: 6px; padding: 4px 0; }
        .field .label { font-size: 10px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.04em; }
        .field .value { font-size: 11px; color: #1e293b; margin-top: 1px; }
        .tags { margin-top: 2px; }
        .tag { display: inline-block; background: #e0e7ff; color: #3730a3; font-size: 9px; font-weight: 600; padding: 2px 8px; border-radius: 8px; margin: 1px 3px 1px 0; }
        .two-col { width: 100%; }
        .two-col td { vertical-align: top; width: 50%; padding-right: 10px; }
        .footer { text-align: center; font-size: 9px; color: #94a3b8; margin-top: 20px; padding-top: 10px; border-top: 1px solid #e2e8f0; }
        .page-break { page-break-before: always; }
    </style>
</head>
<body>

    <div class="header">
        <h1>Weboldal készítési kérdőív</h1>
        <p>Generálva: {{ date('Y.m" d.') }} | {{ $data['company'] ?: $data['contact'] }}</p>
    </div>

    {{-- 1. Cégadatok --}}
    <div class="section-title">1. Cégadatok</div>
    <table class="two-col"><tr>
        <td>
            @if(!empty($data['company']))
            <div class="field"><div class="label">Cég neve</div><div class="value">{{ $data['company'] }}</div></div>
            @endif
            @if(!empty($data['contact']))
            <div class="field"><div class="label">Kapcsolattartó neve</div><div class="value">{{ $data['contact'] }}</div></div>
            @endif
            @if(!empty($data['address']))
            <div class="field"><div class="label">Székhely / cím</div><div class="value">{{ $data['address'] }}</div></div>
            @endif
        </td>
        <td>
            @if(!empty($data['phone']))
            <div class="field"><div class="label">Telefonszám</div><div class="value">{{ $data['phone'] }}</div></div>
            @endif
            @if(!empty($data['email']))
            <div class="field"><div class="label">E-mail cím</div><div class="value">{{ $data['email'] }}</div></div>
            @endif
            @if(!empty($data['companyData']))
            <div class="field"><div class="label">Adószám / cégjegyzékszám</div><div class="value">{{ $data['companyData'] }}</div></div>
            @endif
        </td>
    </tr></table>

    {{-- 2. Weboldal célja --}}
    @if(!empty($data['weboldal_celja']) || !empty($data['mainGoal']))
    <div class="section-title">2. A weboldal célja</div>
    @if(!empty($data['weboldal_celja']) && is_array($data['weboldal_celja']))
    <div class="field"><div class="label">Weboldal célja</div><div class="tags">@foreach($data['weboldal_celja'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
    @endif
    @if(!empty($data['mainGoal']))
    <div class="field"><div class="label">Legfontosabb cél</div><div class="value">{{ $data['mainGoal'] }}</div></div>
    @endif
    @endif

    {{-- 3. Domain --}}
    @if(!empty($data['van_domain']) || !empty($data['van_tarhely']) || !empty($data['domain_email']))
    <div class="section-title">3. Domain, tárhely és e-mail</div>
    <table class="two-col"><tr>
        <td>
            @if(!empty($data['van_domain']))
            <div class="field"><div class="label">Van domain?</div><div class="value">{{ $data['van_domain'] }}</div></div>
            @endif
            @if(!empty($data['domainName']))
            <div class="field"><div class="label">Domain név</div><div class="value">{{ $data['domainName'] }}</div></div>
            @endif
            @if(!empty($data['domainProvider']))
            <div class="field"><div class="label">Domain kezelő</div><div class="value">{{ $data['domainProvider'] }}</div></div>
            @endif
            @if(!empty($data['domainWant']))
            <div class="field"><div class="label">Kívánt domain</div><div class="value">{{ $data['domainWant'] }}</div></div>
            @endif
        </td>
        <td>
            @if(!empty($data['van_tarhely']))
            <div class="field"><div class="label">Van tárhely?</div><div class="value">{{ $data['van_tarhely'] }}</div></div>
            @endif
            @if(!empty($data['domain_email']))
            <div class="field"><div class="label">E-mail igény</div><div class="value">{{ $data['domain_email'] }}</div></div>
            @endif
            @if(!empty($data['emailAccounts']))
            <div class="field"><div class="label">Kért e-mail címek</div><div class="value">{{ $data['emailAccounts'] }}</div></div>
            @endif
        </td>
    </tr></table>
    @endif

    {{-- 4. Jelenlegi weboldal --}}
    @if(!empty($data['van_jelenlegi']))
    <div class="section-title">4. Jelenlegi weboldal</div>
    <div class="field"><div class="label">Van jelenlegi weboldal?</div><div class="value">{{ $data['van_jelenlegi'] }}</div></div>
    @if(!empty($data['currentWebsite']))
    <div class="field"><div class="label">Weboldal címe</div><div class="value">{{ $data['currentWebsite'] }}</div></div>
    @endif
    @if(!empty($data['jelenlegi_problema']) && is_array($data['jelenlegi_problema']))
    <div class="field"><div class="label">Problémák</div><div class="tags">@foreach($data['jelenlegi_problema'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
    @endif
    @if(!empty($data['keepOld']))
    <div class="field"><div class="label">Megtartandó elemek</div><div class="value">{{ $data['keepOld'] }}</div></div>
    @endif
    @if(!empty($data['removeOld']))
    <div class="field"><div class="label">Elhagyandó elemek</div><div class="value">{{ $data['removeOld'] }}</div></div>
    @endif
    @endif

    {{-- 5. Arculat --}}
    @if(!empty($data['style']) || !empty($data['colors']) || !empty($data['logo']))
    <div class="section-title">5. Arculat és megjelenés</div>
    <table class="two-col"><tr>
        <td>
            @if(!empty($data['style']))
            <div class="field"><div class="label">Stílus</div><div class="value">{{ $data['style'] }}</div></div>
            @endif
            @if(!empty($data['colors']))
            <div class="field"><div class="label">Színvilág</div><div class="value">{{ $data['colors'] }}</div></div>
            @endif
            @if(!empty($data['logo']))
            <div class="field"><div class="label">Logó</div><div class="value">{{ $data['logo'] }}</div></div>
            @endif
        </td>
        <td>
            @if(!empty($data['arculat']))
            <div class="field"><div class="label">Arculat</div><div class="value">{{ $data['arculat'] }}</div></div>
            @endif
        </td>
    </tr></table>
    @if(!empty($data['likedSites']))
    <div class="field"><div class="label">Tetsző weboldalak</div><div class="value">{{ $data['likedSites'] }}</div></div>
    @endif
    @if(!empty($data['likedReason']))
    <div class="field"><div class="label">Miért tetszik?</div><div class="value">{{ $data['likedReason'] }}</div></div>
    @endif
    @if(!empty($data['dislikedSites']))
    <div class="field"><div class="label">Nem tetsző weboldalak</div><div class="value">{{ $data['dislikedSites'] }}</div></div>
    @endif
    @endif

    {{-- 6. Tartalom --}}
    @if(!empty($data['menupontok']) || !empty($data['introText']) || !empty($data['services']))
    <div class="section-title">6. Tartalom és menüpontok</div>
    @if(!empty($data['menupontok']) && is_array($data['menupontok']))
    <div class="field"><div class="label">Menüpontok</div><div class="tags">@foreach($data['menupontok'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
    @endif
    @if(!empty($data['otherMenu']))
    <div class="field"><div class="label">Egyéb menüpontok</div><div class="value">{{ $data['otherMenu'] }}</div></div>
    @endif
    @if(!empty($data['kesz_szoveg']))
    <div class="field"><div class="label">Kész szöveg?</div><div class="value">{{ $data['kesz_szoveg'] }}</div></div>
    @endif
    @if(!empty($data['mainService']))
    <div class="field"><div class="label">Legfontosabb szolgáltatás</div><div class="value">{{ $data['mainService'] }}</div></div>
    @endif
    @if(!empty($data['introText']))
    <div class="field"><div class="label">Céges bemutatkozás</div><div class="value">{{ $data['introText'] }}</div></div>
    @endif
    @if(!empty($data['services']))
    <div class="field"><div class="label">Fő szolgáltatások / termékek</div><div class="value">{{ $data['services'] }}</div></div>
    @endif
    @endif

    {{-- 7. Képek --}}
    @if(!empty($data['sajat_kepek']) || !empty($data['fotozas']) || !empty($data['video']))
    <div class="section-title">7. Képek, videók, dokumentumok</div>
    <table class="two-col"><tr>
        <td>
            @if(!empty($data['sajat_kepek']))
            <div class="field"><div class="label">Saját képek?</div><div class="value">{{ $data['sajat_kepek'] }}</div></div>
            @endif
            @if(!empty($data['fotozas']))
            <div class="field"><div class="label">Fotózás?</div><div class="value">{{ $data['fotozas'] }}</div></div>
            @endif
            @if(!empty($data['video']))
            <div class="field"><div class="label">Videó?</div><div class="value">{{ $data['video'] }}</div></div>
            @endif
        </td>
        <td>
            @if(!empty($data['stock_foto']))
            <div class="field"><div class="label">Stock fotó?</div><div class="value">{{ $data['stock_foto'] }}</div></div>
            @endif
            @if(!empty($data['documents']))
            <div class="field"><div class="label">Letölthető dokumentumok</div><div class="value">{{ $data['documents'] }}</div></div>
            @endif
        </td>
    </tr></table>
    @if(!empty($data['kepek_formaja']) && is_array($data['kepek_formaja']))
    <div class="field"><div class="label">Képek formája</div><div class="tags">@foreach($data['kepek_formaja'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
    @endif
    @endif

    {{-- 8. Referenciák --}}
    @if(!empty($data['referenciak_megjelenitese']))
    <div class="section-title">8. Referenciák</div>
    <div class="field"><div class="label">Referenciák megjelenítése?</div><div class="value">{{ $data['referenciak_megjelenitese'] }}</div></div>
    @if(!empty($data['referencia_forma']) && is_array($data['referencia_forma']))
    <div class="field"><div class="label">Referencia forma</div><div class="tags">@foreach($data['referencia_forma'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
    @endif
    @if(!empty($data['references']))
    <div class="field"><div class="label">Fontosabb referenciák</div><div class="value">{{ $data['references'] }}</div></div>
    @endif
    @endif

    {{-- 9. Kapcsolat --}}
    @if(!empty($data['kapcsolati_urlap']) || !empty($data['displayPhone']))
    <div class="section-title">9. Kapcsolati adatok és űrlapok</div>
    <table class="two-col"><tr>
        <td>
            @if(!empty($data['kapcsolati_urlap']))
            <div class="field"><div class="label">Kapcsolati űrlap?</div><div class="value">{{ $data['kapcsolati_urlap'] }}</div></div>
            @endif
            @if(!empty($data['ajanlatkero_urlap']))
            <div class="field"><div class="label">Ajánlatkérő űrlap?</div><div class="value">{{ $data['ajanlatkero_urlap'] }}</div></div>
            @endif
            @if(!empty($data['google_terkep']))
            <div class="field"><div class="label">Google Térkép?</div><div class="value">{{ $data['google_terkep'] }}</div></div>
            @endif
        </td>
        <td>
            @if(!empty($data['displayPhone']))
            <div class="field"><div class="label">Megjelenő telefon</div><div class="value">{{ $data['displayPhone'] }}</div></div>
            @endif
            @if(!empty($data['displayEmail']))
            <div class="field"><div class="label">Megjelenő e-mail</div><div class="value">{{ $data['displayEmail'] }}</div></div>
            @endif
            @if(!empty($data['displayAddress']))
            <div class="field"><div class="label">Megjelenő cím</div><div class="value">{{ $data['displayAddress'] }}</div></div>
            @endif
        </td>
    </tr></table>
    @if(!empty($data['ajanlatkero_mezok']) && is_array($data['ajanlatkero_mezok']))
    <div class="field"><div class="label">Ajánlatkérő mezők</div><div class="tags">@foreach($data['ajanlatkero_mezok'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
    @endif
    @if(!empty($data['openingHours']))
    <div class="field"><div class="label">Nyitvatartás</div><div class="value">{{ $data['openingHours'] }}</div></div>
    @endif
    @endif

    {{-- 10. Funkciók --}}
    @if(!empty($data['funkciok']) || !empty($data['otherFeatures']))
    <div class="section-title">10. Funkciók</div>
    @if(!empty($data['funkciok']) && is_array($data['funkciok']))
    <div class="field"><div class="label">Funkciók</div><div class="tags">@foreach($data['funkciok'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
    @endif
    @if(!empty($data['otherFeatures']))
    <div class="field"><div class="label">Egyéb funkcióigények</div><div class="value">{{ $data['otherFeatures'] }}</div></div>
    @endif
    @endif

    {{-- 11. SEO --}}
    @if(!empty($data['seo_igeny']) || !empty($data['hirdetesi_igeny']))
    <div class="section-title">11. Keresőoptimalizálás és hirdetés</div>
    <table class="two-col"><tr>
        <td>
            @if(!empty($data['seo_igeny']))
            <div class="field"><div class="label">SEO igény?</div><div class="value">{{ $data['seo_igeny'] }}</div></div>
            @endif
            @if(!empty($data['keywords']))
            <div class="field"><div class="label">Kulcsszavak</div><div class="value">{{ $data['keywords'] }}</div></div>
            @endif
        </td>
        <td>
            @if(!empty($data['hirdetesi_igeny']))
            <div class="field"><div class="label">Hirdetési igény?</div><div class="value">{{ $data['hirdetesi_igeny'] }}</div></div>
            @endif
            @if(!empty($data['kampany_beallitas']))
            <div class="field"><div class="label">Kampány beállítás?</div><div class="value">{{ $data['kampany_beallitas'] }}</div></div>
            @endif
        </td>
    </tr></table>
    @if(!empty($data['regions']))
    <div class="field"><div class="label">Célterület</div><div class="value">{{ $data['regions'] }}</div></div>
    @endif
    @endif

    {{-- 12. Social --}}
    @if(!empty($data['social_bekotes']) && $data['social_bekotes'] === 'Igen')
    <div class="section-title">12. Közösségi média</div>
    <table class="two-col"><tr>
        <td>
            @if(!empty($data['facebook']))
            <div class="field"><div class="label">Facebook</div><div class="value">{{ $data['facebook'] }}</div></div>
            @endif
            @if(!empty($data['instagram']))
            <div class="field"><div class="label">Instagram</div><div class="value">{{ $data['instagram'] }}</div></div>
            @endif
            @if(!empty($data['linkedin']))
            <div class="field"><div class="label">LinkedIn</div><div class="value">{{ $data['linkedin'] }}</div></div>
            @endif
        </td>
        <td>
            @if(!empty($data['tiktok']))
            <div class="field"><div class="label">TikTok</div><div class="value">{{ $data['tiktok'] }}</div></div>
            @endif
            @if(!empty($data['youtube']))
            <div class="field"><div class="label">YouTube</div><div class="value">{{ $data['youtube'] }}</div></div>
            @endif
        </td>
    </tr></table>
    @endif

    {{-- 13. Jogszabályi --}}
    @if(!empty($data['adatvedelmi']) || !empty($data['aszf']))
    <div class="section-title">13. Jogszabályi és adatvédelmi elemek</div>
    <table class="two-col"><tr>
        <td>
            @if(!empty($data['adatvedelmi']))
            <div class="field"><div class="label">Adatvédelmi tájékoztató?</div><div class="value">{{ $data['adatvedelmi'] }}</div></div>
            @endif
            @if(!empty($data['urlap_adatkezeles']))
            <div class="field"><div class="label">Űrlap adatkezelés?</div><div class="value">{{ $data['urlap_adatkezeles'] }}</div></div>
            @endif
        </td>
        <td>
            @if(!empty($data['aszf']))
            <div class="field"><div class="label">ÁSZF?</div><div class="value">{{ $data['aszf'] }}</div></div>
            @endif
            @if(!empty($data['hirlevel_adatkezeles']))
            <div class="field"><div class="label">Hírlevél adatkezelés?</div><div class="value">{{ $data['hirlevel_adatkezeles'] }}</div></div>
            @endif
        </td>
    </tr></table>
    @endif

    {{-- 14. Hozzáférések --}}
    @if(!empty($data['hozzaferesek']) || !empty($data['accessNote']))
    <div class="section-title">14. Technikai hozzáférések</div>
    @if(!empty($data['hozzaferesek']) && is_array($data['hozzaferesek']))
    <div class="field"><div class="label">Hozzáférések</div><div class="tags">@foreach($data['hozzaferesek'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
    @endif
    @if(!empty($data['accessNote']))
    <div class="field"><div class="label">Megjegyzés</div><div class="value">{{ $data['accessNote'] }}</div></div>
    @endif
    @endif

    {{-- 15. Határidő --}}
    @if(!empty($data['deadline']) || !empty($data['fix_hatarido']))
    <div class="section-title">15. Határidő és ütemezés</div>
    <table class="two-col"><tr>
        <td>
            @if(!empty($data['deadline']))
            <div class="field"><div class="label">Kért határidő</div><div class="value">{{ $data['deadline'] }}</div></div>
            @endif
            @if(!empty($data['fix_hatarido']))
            <div class="field"><div class="label">Fix határidő?</div><div class="value">{{ $data['fix_hatarido'] }}</div></div>
            @endif
        </td>
        <td>
            @if(!empty($data['deadlineReason']))
            <div class="field"><div class="label">Határidő oka</div><div class="value">{{ $data['deadlineReason'] }}</div></div>
            @endif
            @if(!empty($data['materialDate']))
            <div class="field"><div class="label">Anyagátadás ideje</div><div class="value">{{ $data['materialDate'] }}</div></div>
            @endif
        </td>
    </tr></table>
    @endif

    {{-- 16. Karbantartás --}}
    @if(!empty($data['atadas_utani_frissites']) || !empty($data['havi_karbantartas']))
    <div class="section-title">16. Karbantartás és későbbi kezelés</div>
    <table class="two-col"><tr>
        <td>
            @if(!empty($data['atadas_utani_frissites']))
            <div class="field"><div class="label">Frissítés</div><div class="value">{{ $data['atadas_utani_frissites'] }}</div></div>
            @endif
        </td>
        <td>
            @if(!empty($data['havi_karbantartas']))
            <div class="field"><div class="label">Havi karbantartás?</div><div class="value">{{ $data['havi_karbantartas'] }}</div></div>
            @endif
        </td>
    </tr></table>
    @if(!empty($data['karbantartasi_igeny']) && is_array($data['karbantartasi_igeny']))
    <div class="field"><div class="label">Karbantartási igény</div><div class="tags">@foreach($data['karbantartasi_igeny'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
    @endif
    @endif

    {{-- 17. Költségkeret --}}
    @if(!empty($data['van_koltsegkeret']))
    <div class="section-title">17. Költségkeret</div>
    <div class="field"><div class="label">Van költségkeret?</div><div class="value">{{ $data['van_koltsegkeret'] }}</div></div>
    @if(!empty($data['koltsegkeret']))
    <div class="field"><div class="label">Összeg</div><div class="value">{{ $data['koltsegkeret'] }}</div></div>
    @endif
    @endif

    {{-- 18. Egyéb --}}
    @if(!empty($data['otherNeeds']) || !empty($data['mellekletek']))
    <div class="section-title">18. Egyéb igények és mellékletek</div>
    @if(!empty($data['otherNeeds']))
    <div class="field"><div class="label">Egyéb igények</div><div class="value">{{ $data['otherNeeds'] }}</div></div>
    @endif
    @if(!empty($data['mellekletek']) && is_array($data['mellekletek']))
    <div class="field"><div class="label">Mellékletek</div><div class="tags">@foreach($data['mellekletek'] as $v)<span class="tag">{{ $v }}</span>@endforeach</div></div>
    @endif
    @endif

    <div class="footer">
        Generálva: {{ date('Y.m.d. H:i') }} | pikft.hu – Weboldal készítési kérdőív
    </div>

</body>
</html>
