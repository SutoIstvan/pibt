<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            // Валидация данных
            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'message' => 'required|min:10',
            ]);

            // Отправка письма
            Mail::raw(
                $this->formatMessage($validated),
                function ($message) use ($validated) {
                    $message->to('info@pikft.hu')
                            ->from($validated['email'], $validated['name'])
                            ->subject('Új üzenet a kapcsolati űrlapról'); // "Новое сообщение с контактной формы" на венгерском
                }
            );

            return redirect()->back()->with('success', 'Az üzenetet sikeresen elküldtük!'); // "Ваше сообщение успешно отправлено!" на венгерском

        } catch (Exception $e) {
            // Логирование ошибки
            // \Log::error('Email sending error: ' . $e->getMessage());
            
            return redirect()->back()
                ->with('error', 'Hiba történt az üzenet küldése közben. Kérjük, próbálja újra később.')  // "Произошла ошибка при отправке сообщения. Пожалуйста, попробуйте позже." на венгерском
                ->withInput();  // Сохраняем введенные данные
        }
    }

    private function formatMessage(array $data): string
    {
        return implode("\n", [
            "Név: {$data['name']}",           // "Имя" на венгерском
            "Email: {$data['email']}",
            "Üzenet:",                        // "Сообщение" на венгерском
            $data['message']
        ]);
    }
}