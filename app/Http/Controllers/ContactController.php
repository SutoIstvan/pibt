<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\IpUtils;

class ContactController extends Controller
{
    public function submit(Request $request): RedirectResponse
    {
        // Валидация данных
        // $validated = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email',
        //     'message' => 'required|min:10',
        // ]);

        $recaptcha_response = $request->input('g-recaptcha-response');

        // dd($recaptcha_response);
        if (is_null($recaptcha_response)) {
            return redirect()->back()->with('success', 'Please Complete the Recaptcha to proceed');
        }

        $url = "https://www.google.com/recaptcha/api/siteverify";

        $body = [
            'secret' => config('6LcEpIIqAAAAACztP6F1u1k_QCpMAZdgL-6tnL61'),
            'response' => $recaptcha_response,
            'remoteip' => IpUtils::anonymize($request->ip()) //anonymize the ip to be GDPR compliant. Otherwise just pass the default ip address
        ];

        $response = Http::asForm()->post($url, $body);

        $result = json_decode($response);

        if ($response->successful() && $result->success == true) {
            $request->authenticate();

            $request->session()->regenerate();

            return "ok";
            // return redirect()->intended(RouteServiceProvider::HOME);
        } else {
            return "Please Complete the Recaptcha Again to proceed";

            return redirect()->back()->with('status', 'Please Complete the Recaptcha Again to proceed');
        }

        //  dd($recaptcha_response);

        // // Создаем текстовое сообщение
        // $message = "Новое сообщение от: {$validated['name']}\n";
        // $message .= "Email: {$validated['email']}\n\n";
        // $message .= "Сообщение:\n{$validated['message']}";

        // // Логика для отправки письма или сохранения данных

        // Mail::send('emails.contact', ['data' => $validated], function ($message) use ($validated) {
        //     $message->to('info@pikft.hu')
        //             ->subject('Ajánlatkérés');
        //     $message->from($validated['email'], $validated['name']);
        // });

        // return redirect()->back()->with('success', 'Ваше сообщение успешно отправлено!');
    }
}
