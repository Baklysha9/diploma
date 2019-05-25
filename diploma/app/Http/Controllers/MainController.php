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

        if (empty($name)) {
            abort(500);
        }

        
        Mail::send('mail.mail', ['data' => $data], function ($m) {
            $m->from('bogdandynay@gmail.com', 'Sender');
            $m->to('bogdandynay@gmail.com', 'Receiver')->subject('Новая заявка с моего сайта');
        });

        // foreach ($keys as $key => $value) {
        //     $name = $value->name;
        //     $phone = $value->phone;
        // }
        // var_dump($name,$phone);
        
    }
}
