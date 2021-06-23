<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function homepage() {
        $color = Product::COLOR;
        $size = Product::SIZE;
        $record = Product::with('type')->get();
        return view('front.index', compact('color','size','record'));
    }

    public function shoppingCart1()
    {
        return view('front.shopping-1');
    }

    public function shoppingCart2()
    {
        return view('front.shopping-2');
    }

    public function shoppingCart3()
    {
        return view('front.shopping-3');
    }

    public function shoppingCart4()
    {
        return view('front.shopping-4');
    }

    public function login()
    {
        return view('front.login');
    }

}
