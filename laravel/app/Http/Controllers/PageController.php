<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function viewHome(Request $request)
    {
        $products = Product::take(5)->get();

        return view('home')->with('products', $products);
    }
    public function viewLogin(Request $request)
    {
        return view('login');
    }
    public function viewRegister(Request $request)
    {
        return view('register');
    }
}
