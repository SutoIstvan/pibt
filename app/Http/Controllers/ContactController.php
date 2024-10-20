<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        dd($validated);


        // Логика для отправки письма или сохранения данных
        Mail::send('emails.contact', ['data' => $validated], function ($message) use ($validated) {
            $message->to('info@pikft.hu', 'Admin')
                    ->subject('Новое сообщение с формы обратной связи');
            $message->from($validated['email'], $validated['name']);
        });

        return redirect()->back()->with('success', 'Ваше сообщение успешно отправлено!');
    }
}
