<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testecontroller extends Controller
{
    public function index()
    {
        return view('clients/index');
    }
}
