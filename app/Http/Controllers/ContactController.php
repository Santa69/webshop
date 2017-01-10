<?php

namespace App\Http\Controllers;

use App\Acceuil;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
}
