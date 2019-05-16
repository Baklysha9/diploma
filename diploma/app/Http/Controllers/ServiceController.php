<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return view('main.services');
    }

    public function getServices()
    {   
        $services = Service::all();
        return response()->json($services);
    }

    public function getService($id) {
        $service = Service::find($id);
        return response()->json($service);
    }

    public function updateService(Request $request) {
        $data = $request->json()->all();
        DB::table('services')->updateOrInsert(
            ['id' => $data['id']],
            ['name' => $data['name'],  'img' => $data['photo'], 'description' => $data['description'], 'price' => $data['price'], 'count_time' => $data['time']]);
        return response()->json('update completed successfully');
    }

    public function deleteService(Request $request) {
        $data = $request->json()->all();
        DB::table('services')->where('id', $data['id'])->delete();
        return response()->json('delete completed successfully');
    }
}
