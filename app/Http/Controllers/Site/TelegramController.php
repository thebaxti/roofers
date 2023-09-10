<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function sendToTg(Request $request)
    {
        $this->validate($request,
            ['name' => 'required'],
            ['email' => 'required'],
            ['phone' => 'required'],
//            ['subject' => 'required'],
//            ['text' => 'required'],
//            ['service' => 'required'],
            ['g-recaptcha-response' => 'required|captcha'],
        );

        Telegram::sendMessage([
            'chat_id' => env('-1001573798676', '-1001573798676'),
            'parse_mode' => 'HTML',
            'text' => "<b>Новая обращение!</b>\n"
                . "\n"
                . "<b>Full Name</b>: $request->name\n"
                . "<b>Email</b>: $request->email \n"
                . "<b>Phone</b>: $request->phone\n"
                . "<b>Subject</b>: $request->subject\n"
                . "<b>Enter your message</b>: $request->message\n"
                . "<b>Service</b>: $request->select\n"
        ]);
        Alert::success('Обращение принято', 'Скоро мы свяжемся с вами');
        return redirect()->back();
    }
}
