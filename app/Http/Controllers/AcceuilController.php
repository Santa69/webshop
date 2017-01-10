<?php

namespace App\Http\Controllers;

use App\Acceuil;
use App\Http\Controllers\Controller;

class AcceuilController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
