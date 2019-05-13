<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MainController extends Controller
{
    public function index() {
        return view('main.index');
    }

    public function sendEmail(Request $request) {
        $data = $request->json()->all();
        $name = $data['name'];
        $phone = $data['phone'];

        Mail::send('mail.mail', [], function ($m) {
            $m->from('bogdandunay@gmail.com', 'Sender');
            $m->to('bogdandunay@gmail.com', 'Receiver')->subject('Тестовое письмо с HTML');
        });

        // foreach ($keys as $key => $value) {
        //     $name = $value->name;
        //     $phone = $value->phone;
        // }
        // var_dump($name,$phone);
        
    }
}
