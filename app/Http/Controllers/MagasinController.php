<?php

namespace App\Http\Controllers;

use App\Magasin;
use App\Product;
use App\Http\Controllers\Controller;


class MagasinController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('magasin', ['products' => $products]);
    }
}
