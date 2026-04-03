<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIMOP Plusz Kalkuláció</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 14px; color: #1a1a2e; line-height: 1.6; margin: 0; padding: 20px; background: #f8fafc; }
        .container { max-width: 700px; margin: 0 auto; background: #fff; border-radius: 8px; border: 1px solid #e2e8f0; overflow: hidden; }
        .header { background: #0f2447; color: #fff; padding: 24px 28px; }
        .header h1 { margin: 0; font-size: 20px; font-weight: 700; }
        .header p { margin: 6px 0 0; font-size: 13px; color: rgba(255,255,255,.65); }
        .body { padding: 24px 28px; }
        .info-row { margin-bottom: 14px; }
        .info-row .label { font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: .05em; }
        .info-row .value { font-size: 15px; font-weight: 600; color: #1e293b; margin-top: 2px; }
        table { width: 100%; border-collapse: collapse; margin: 16px 0; }
        th { background: #f1f5f9; font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: .04em; padding: 10px 12px; text-align: left; border-bottom: 1px solid #e2e8f0; }
        th.r { text-align: right; }
        td { padding: 10px 12px; border-bottom: 1px solid #f1f5f9; font-size: 13px; color: #334155; }
        td.r { text-align: right; font-weight: 600; color: #1e293b; }
        .section-title { font-size: 15px; font-weight: 700; color: #0f2447; margin: 24px 0 8px; padding-bottom: 8px; border-bottom: 2px solid #0f2447; }
        .totals { background: #f8fafc; border-radius: 8px; padding: 18px 20px; margin-top: 20px; border: 1px solid #e2e8f0; }
        .total-row { display: flex; justify-content: space-between; align-items: center; padding: 6px 0; }
        .total-row .t-label { font-size: 13px; color: #64748b; }
        .total-row .t-value { font-size: 15px; font-weight: 700; color: #0f2447; }
        .total-row.main { border-top: 2px solid #0f2447; margin-top: 8px; padding-top: 12px; }
        .total-row.main .t-value { font-size: 18px; }
        .footer { padding: 16px 28px; background: #f8fafc; border-top: 1px solid #e2e8f0; font-size: 12px; color: #94a3b8; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>DIMOP Plusz – Kalkuláció</h1>
            <p>Automatikus kalkuláció a dimop-jelentkezes-gyorsitasa oldalról</p>
        </div>

        <div class="body">
            @if(!empty($data['name']))
            <div class="info-row">
                <div class="label">Név</div>
                <div class="value">{{ $data['name'] }}</div>
            </div>
            @endif

            @if(!empty($data['company']))
            <div class="info-row">
                <div class="label">Adószám</div>
                <div class="value">{{ $data['company'] }}</div>
            </div>
            @endif

            @if(!empty($data['phone']))
            <div class="info-row">
                <div class="label">Telefon</div>
                <div class="value">{{ $data['phone'] }}</div>
            </div>
            @endif

            @if(!empty($data['email']))
            <div class="info-row">
                <div class="label">E-mail</div>
                <div class="value">{{ $data['email'] }}</div>
            </div>
            @endif

            @if(!empty($data['businessYear']))
            <div class="info-row">
                <div class="label">Rendelkezik 1 lezárt üzleti évvel?</div>
                <div class="value">{{ $data['businessYear'] }}</div>
            </div>
            @endif

            @if(!empty($data['companyLocation']))
            <div class="info-row">
                <div class="label">Cég székhelye</div>
                <div class="value">{{ $data['companyLocation'] }}</div>
            </div>
            @endif

            @if(!empty($data['webshopStatus']))
            <div class="info-row">
                <div class="label">Webáruház státusz</div>
                <div class="value">{{ $data['webshopStatus'] }}</div>
            </div>
            @endif

            <div class="info-row">
                <div class="label">Elszámolás módja</div>
                <div class="value">{{ $data['mode'] === 'netto' ? 'Nettó' : 'Bruttó' }}</div>
            </div>

            @if(!empty($data['documents']) && count($data['documents']) > 0)
            <div class="section-title" style="margin-top: 30px;">📎 Csatolt dokumentumok</div>
            <div class="totals" style="padding: 12px 20px; text-align: left; margin-top: 10px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($data['documents'] as $doc)
                    <li style="margin-bottom: 5px;">
                        <a href="{{ $doc['url'] }}" style="color: #2563eb; text-decoration: none; font-weight: 500;" target="_blank">{{ $doc['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- ESZKÖZÖK --}}
            @if(count($data['eszkozok']) > 0)
            <div class="section-title">💻 Eszközbeszerzés</div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Eszköztípus</th>
                        <th class="r">Egységár</th>
                        <th class="r">db</th>
                        <th class="r">Összesen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['eszkozok'] as $i => $item)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $item['nev'] }}</td>
                        <td class="r">{{ number_format($item['egysegar'], 0, ',', ' ') }} Ft</td>
                        <td class="r">{{ $item['mennyiseg'] }}</td>
                        <td class="r">{{ number_format($item['osszesen'], 0, ',', ' ') }} Ft</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif

            {{-- IMMATERIÁLIS --}}
            @if(count($data['immaterialis']) > 0)
            <div class="section-title">🔷 Immateriális javak</div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Megnevezés</th>
                        <th class="r">Egységár</th>
                        <th class="r">Menny.</th>
                        <th class="r">Fő</th>
                        <th class="r">Összesen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['immaterialis'] as $i => $item)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $item['nev'] }}@if($item['cel']) <small style="color:#94a3b8;">({{ $item['cel'] }})</small>@endif</td>
                        <td class="r">{{ number_format($item['egysegar'], 0, ',', ' ') }} Ft</td>
                        <td class="r">{{ $item['mennyiseg'] }}</td>
                        <td class="r">{{ $item['felhasznalo'] }}</td>
                        <td class="r">{{ number_format($item['osszesen'], 0, ',', ' ') }} Ft</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif

            {{-- ÖSSZESÍTÉS --}}
            <div class="totals">
                <div class="total-row">
                    <span class="t-label">Eszközbeszerzés összesen</span>
                    <span class="t-value">{{ number_format($data['sum_eszkoz'], 0, ',', ' ') }} Ft</span>
                </div>
                <div class="total-row">
                    <span class="t-label">Immateriális javak összesen</span>
                    <span class="t-value">{{ number_format($data['sum_immaterialis'], 0, ',', ' ') }} Ft</span>
                </div>
                <div class="total-row main">
                    <span class="t-label">Teljes projektköltség</span>
                    <span class="t-value">{{ number_format($data['sum_total'], 0, ',', ' ') }} Ft</span>
                </div>
            </div>
        </div>

        <div class="footer">
            Ez az e-mail automatikusan lett generálva a pikft.hu kalkulátor által.
        </div>
    </div>
</body>
</html>
