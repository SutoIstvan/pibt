<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;

class QuestionnaireController extends Controller
{
    /**
     * Collect all questionnaire data from the request.
     */
    private function collectData(Request $request): array
    {
        return [
            // 1. Cégadatok
            'company'     => $request->input('company', ''),
            'contact'     => $request->input('contact', ''),
            'phone'       => $request->input('phone', ''),
            'email'       => $request->input('email', ''),
            'address'     => $request->input('address', ''),
            'companyData' => $request->input('companyData', ''),

            // 2. A weboldal célja
            'weboldal_celja' => $request->input('weboldal_celja', []),
            'mainGoal'       => $request->input('mainGoal', ''),

            // 3. Domain, tárhely, e-mail
            'van_domain'      => $request->input('van_domain', ''),
            'domainName'      => $request->input('domainName', ''),
            'domainProvider'  => $request->input('domainProvider', ''),
            'domainWant'      => $request->input('domainWant', ''),
            'van_tarhely'     => $request->input('van_tarhely', ''),
            'domain_email'    => $request->input('domain_email', ''),
            'emailAccounts'   => $request->input('emailAccounts', ''),

            // 4. Jelenlegi weboldal
            'van_jelenlegi'       => $request->input('van_jelenlegi', ''),
            'currentWebsite'      => $request->input('currentWebsite', ''),
            'jelenlegi_problema'  => $request->input('jelenlegi_problema', []),
            'keepOld'             => $request->input('keepOld', ''),
            'removeOld'           => $request->input('removeOld', ''),

            // 5. Arculat és megjelenés
            'style'         => $request->input('style', ''),
            'colors'        => $request->input('colors', ''),
            'logo'          => $request->input('logo', ''),
            'arculat'       => $request->input('arculat', ''),
            'likedSites'    => $request->input('likedSites', ''),
            'likedReason'   => $request->input('likedReason', ''),
            'dislikedSites' => $request->input('dislikedSites', ''),

            // 6. Tartalom és menüpontok
            'menupontok'   => $request->input('menupontok', []),
            'otherMenu'    => $request->input('otherMenu', ''),
            'kesz_szoveg'  => $request->input('kesz_szoveg', ''),
            'mainService'  => $request->input('mainService', ''),
            'introText'    => $request->input('introText', ''),
            'services'     => $request->input('services', ''),

            // 7. Képek, videók, dokumentumok
            'sajat_kepek'  => $request->input('sajat_kepek', ''),
            'kepek_formaja'=> $request->input('kepek_formaja', []),
            'fotozas'      => $request->input('fotozas', ''),
            'stock_foto'   => $request->input('stock_foto', ''),
            'video'        => $request->input('video', ''),
            'documents'    => $request->input('documents', ''),

            // 8. Referenciák
            'referenciak_megjelenitese' => $request->input('referenciak_megjelenitese', ''),
            'referencia_forma'          => $request->input('referencia_forma', []),
            'references'                => $request->input('references', ''),

            // 9. Kapcsolati adatok és űrlapok
            'kapcsolati_urlap'   => $request->input('kapcsolati_urlap', ''),
            'ajanlatkero_urlap'  => $request->input('ajanlatkero_urlap', ''),
            'google_terkep'      => $request->input('google_terkep', ''),
            'ajanlatkero_mezok'  => $request->input('ajanlatkero_mezok', []),
            'displayPhone'       => $request->input('displayPhone', ''),
            'displayEmail'       => $request->input('displayEmail', ''),
            'displayAddress'     => $request->input('displayAddress', ''),
            'openingHours'       => $request->input('openingHours', ''),

            // 10. Funkciók
            'funkciok'       => $request->input('funkciok', []),
            'otherFeatures'  => $request->input('otherFeatures', ''),

            // 11. SEO és hirdetés
            'seo_igeny'       => $request->input('seo_igeny', ''),
            'hirdetesi_igeny' => $request->input('hirdetesi_igeny', ''),
            'keywords'        => $request->input('keywords', ''),
            'regions'         => $request->input('regions', ''),
            'kampany_beallitas'=> $request->input('kampany_beallitas', ''),

            // 12. Közösségi média
            'social_bekotes' => $request->input('social_bekotes', ''),
            'facebook'       => $request->input('facebook', ''),
            'instagram'      => $request->input('instagram', ''),
            'linkedin'       => $request->input('linkedin', ''),
            'tiktok'         => $request->input('tiktok', ''),
            'youtube'        => $request->input('youtube', ''),

            // 13. Jogszabályi elemek
            'adatvedelmi'       => $request->input('adatvedelmi', ''),
            'aszf'              => $request->input('aszf', ''),
            'urlap_adatkezeles' => $request->input('urlap_adatkezeles', ''),
            'hirlevel_adatkezeles' => $request->input('hirlevel_adatkezeles', ''),

            // 14. Technikai hozzáférések
            'hozzaferesek'  => $request->input('hozzaferesek', []),
            'accessNote'    => $request->input('accessNote', ''),

            // 15. Határidő
            'deadline'        => $request->input('deadline', ''),
            'fix_hatarido'    => $request->input('fix_hatarido', ''),
            'deadlineReason'  => $request->input('deadlineReason', ''),
            'materialDate'    => $request->input('materialDate', ''),

            // 16. Karbantartás
            'atadas_utani_frissites' => $request->input('atadas_utani_frissites', ''),
            'havi_karbantartas'      => $request->input('havi_karbantartas', ''),
            'karbantartasi_igeny'    => $request->input('karbantartasi_igeny', []),

            // 17. Költségkeret
            'van_koltsegkeret' => $request->input('van_koltsegkeret', ''),
            'koltsegkeret'     => $request->input('koltsegkeret', ''),

            // 18. Egyéb
            'otherNeeds'  => $request->input('otherNeeds', ''),
            'mellekletek'  => $request->input('mellekletek', []),
        ];
    }

    /**
     * Submit the questionnaire: validate required fields & send email.
     */
    public function submit(Request $request)
    {
        $request->validate([
            'company' => 'required|max:255',
            'contact' => 'required|max:255',
            'email'   => 'required|email',
        ], [], [
            'company' => 'Cég neve',
            'contact' => 'Kapcsolattartó neve',
            'email'   => 'E-mail cím',
        ]);

        $data = $this->collectData($request);

        Mail::send('emails.kerdoiv', ['data' => $data], function ($message) use ($data) {
            $message->to('info@pikft.hu')
                    ->subject('Weboldal készítési kérdőív – ' . ($data['company'] ?: $data['contact']));
        });

        return redirect()->back()->with('success', 'Köszönjük! A kérdőívet sikeresen elküldtük!');
    }

    /**
     * Generate and download the questionnaire results as PDF.
     */
    public function downloadPdf(Request $request)
    {
        $data = $this->collectData($request);

        $pdf = Pdf::setOptions(['defaultFont' => 'DejaVu Sans'])->loadView('pdf.kerdoiv_pdf', ['data' => $data]);
        $pdf->setPaper('a4', 'portrait');

        $filename = 'weboldal_kerdoiv_' . date('Y-m-d') . '.pdf';

        return $pdf->download($filename);
    }
}
