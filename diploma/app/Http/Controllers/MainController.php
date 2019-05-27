<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\DB;
use App\Buy;

class MainController extends Controller
{
    public function index() {
        return view('main.index');
    }

    public function sendEmail(Request $request) {
        $data = $request->json()->all();
        $name = $data['name'];
        $phone = $data['phone'];

        if (empty($name) || empty($phone)) {
            abort(500);
        }

        Mail::send('mail.mail', ['data' => $data], function ($m) {
            $m->from('bogdandynay@gmail.com', 'Sender');
            $m->to('bogdandynay@gmail.com', 'Receiver')->subject('Новая заявка с моего сайта');
        });

        $count = Buy::find(1);
        $updateCount = intval($count['count'])+1;
        DB::table('buys')->updateOrInsert(
            ['id' => 1],
            ['count' =>$updateCount]);
        return response()->json('update completed successfully');

        
    }

    public function getCountBuy() {
        $count = Buy::find(1);
        return response()->json($count['count']);
    }
}
