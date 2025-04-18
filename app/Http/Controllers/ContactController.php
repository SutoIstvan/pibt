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
            'g-recaptcha-response' => 'recaptcha',
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

        return redirect()->back()->with('success', 'Köszönjük! Üzenetét sikeresen elküldtük! Kérése feldolgozása után munkatársunk felveszi Önnel a kapcsolatot.!');
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
}
