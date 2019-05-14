<?php

namespace App\Http\Controllers;

class ContactsController extends Controller
{
    public function index() {
        return view('main.contacts');
    }
}