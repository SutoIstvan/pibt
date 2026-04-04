<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\ReCaptchaV3;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // dd($request);
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
            'company' => 'nullable|max:255',
            'phone' => 'nullable|max:50',
            'service' => 'nullable|string|max:255',
            '3522631_select_Rendelkezel1lezartuzletievvel' => 'nullable|string|max:255',
            '3522631_select_Cegszekhelye' => 'nullable|string|max:255',
            '3522631_select_Rendelkezelmarwebaruhazzal' => 'nullable|string|max:255',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        // dd($request);
        // Создаем текстовое сообщение
        $message = "Név: {$validated['name']}\n";
        $message .= "Email: {$validated['email']}\n\n";
        $message .= "Cég: {$validated['company']}\n";
        $message .= "Telefon: {$validated['phone']}\n";
        $message .= "Szolgáltatás: {$validated['service']}\n";
        $message .= "1 lezárt üzleti év: " . ($validated['3522631_select_Rendelkezel1lezartuzletievvel'] ?? '') . "\n";
        $message .= "Cég székhelye: " . ($validated['3522631_select_Cegszekhelye'] ?? '') . "\n";
        $message .= "Webáruház: " . ($validated['3522631_select_Rendelkezelmarwebaruhazzal'] ?? '') . "\n";
        $message .= "Üzenet:\n{$validated['message']}";

        // Логика для отправки письма или сохранения данных

        Mail::send('emails.contact', ['data' => $validated], function ($message) use ($validated) {
            $message->to('info@pikft.hu')
                    ->subject('Ajánlatkérés');
            $message->from($validated['email'], $validated['name']);
        });

        return redirect()
            ->route('dimop-jelentkezes-gyorsitasa')
            ->with('name', $validated['name'])
            ->with('company', $validated['company']);
    
        // return redirect()->route('dimop-jelentkezes-gyorsitasa');
        
        // return redirect()->back()->with('success', 'Köszönjük! Üzenetét sikeresen elküldtük! Kérése feldolgozása után munkatársunk felveszi Önnel a kapcsolatot.!');
        
        // return redirect(url()->previous() . '#kapcsolat')
        //     ->with('success', 'Köszönjük! Üzenetét sikeresen elküldtük! Kérése feldolgozása után munkatársunk felveszi Önnel a kapcsolatot.!');    
    }

    public function phonesubmit(Request $request)
    {
        // dd($request);
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // dd($request);
        // Создаем текстовое сообщение
        $message = "Новое сообщение от: {$validated['name']}\n";
        $message .= "Email: {$validated['email']}\n\n";
        $message .= "Сообщение:\n{$validated['message']}";

        // Логика для отправки письма или сохранения данных

        Mail::send('emails.contact', ['data' => $validated], function ($message) use ($validated) {
            $message->to('info@pikft.hu')
                    ->subject('Ajánlatkérés');
            $message->from($validated['email'], $validated['name']);
        });

        return redirect()->back();
    }

    public function kalkulacioSubmit(Request $request)
    {
        $validated = $request->validate([
            'company' => 'nullable|max:255',
            'name' => 'nullable|max:255',
            'phone' => 'nullable|max:255',
            'email' => 'nullable|email',
            '3522631_select_Rendelkezel1lezartuzletievvel' => 'nullable|string|max:255',
            '3522631_select_Cegszekhelye' => 'nullable|string|max:255',
            '3522631_select_Rendelkezelmarwebaruhazzal' => 'nullable|string|max:255',
            'mode' => 'required|in:netto,brutto',
            'eszkozok_json' => 'nullable|string',
            'immaterialis_json' => 'nullable|string',
            'sum_eszkoz' => 'nullable|numeric',
            'sum_immaterialis' => 'nullable|numeric',
            'sum_total' => 'nullable|numeric',
            'documents' => 'nullable|array|max:20',
            'documents.*' => 'file|max:10240',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        $eszkozok = json_decode($validated['eszkozok_json'] ?? '[]', true) ?: [];
        $immaterialis = json_decode($validated['immaterialis_json'] ?? '[]', true) ?: [];

        $urls = [];
        if ($request->hasFile('documents')) {
            if (!file_exists(public_path('uploads/documents'))) {
                mkdir(public_path('uploads/documents'), 0755, true);
            }
            foreach ($request->file('documents') as $file) {
                $originalName = $file->getClientOriginalName();
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/documents'), $filename);
                $urls[] = [
                    'name' => $originalName,
                    'url' => asset("uploads/documents/" . $filename)
                ];
            }
        }

        $data = [
            'documents' => $urls,
            'company' => $validated['company'] ?? '',
            'name' => $validated['name'] ?? '',
            'phone' => $validated['phone'] ?? '',
            'email' => $validated['email'] ?? '',
            'businessYear' => $validated['3522631_select_Rendelkezel1lezartuzletievvel'] ?? '',
            'companyLocation' => $validated['3522631_select_Cegszekhelye'] ?? '',
            'webshopStatus' => $validated['3522631_select_Rendelkezelmarwebaruhazzal'] ?? '',
            'mode' => $validated['mode'],
            'eszkozok' => $eszkozok,
            'immaterialis' => $immaterialis,
            'sum_eszkoz' => (int)($validated['sum_eszkoz'] ?? 0),
            'sum_immaterialis' => (int)($validated['sum_immaterialis'] ?? 0),
            'sum_total' => (int)($validated['sum_total'] ?? 0),
        ];

        Mail::send('emails.kalkulacio', ['data' => $data], function ($message) use ($data) {
            $message->to('info@pikft.hu')
                    ->subject('DIMOP Plusz kalkuláció – ' . ($data['company'] ?: $data['name'] ?: 'Ismeretlen'));
        });

        return redirect()->back()->with('success', 'A kalkuláció sikeresen elküldve!');
    }
}
