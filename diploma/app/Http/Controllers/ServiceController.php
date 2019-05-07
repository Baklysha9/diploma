<?php

namespace App\Http\Controllers;

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
}
