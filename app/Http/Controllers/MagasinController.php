<?php

namespace App\Http\Controllers;

use App\Magasin;
use App\Product;
use App\Creator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MagasinController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::find(1);

        if ( $products === NULL) {
          $request->session()->flash('status', 'No Product returned');
        } else {
          $request->session()->flash('status', 'All is good');
        }
        // return $products;
        return view('magasin', ['products' => $products]);
    }
}
