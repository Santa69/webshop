<?php

namespace App\Http\Controllers;

use App\Panier;
use App\Http\Controllers\Controller;

class PanierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('panier');
    }
}
