<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $products = Product::all()->random()->get();
        return view('pages.home')->with('products', $products);
    }
}
