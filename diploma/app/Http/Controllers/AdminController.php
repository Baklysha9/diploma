<?php

namespace App\Http\Controllers;
use App\User;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function countUser() {
        $users = User::all()->where('is_admin', '0')->count();
        return response()->json($users);
    }

    public function getUsers() {
        $users = User::all()->where('is_admin', '0');
        return response()->json($users);    
    }
}