<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function homepage()
    {
        $record = Product::with('type')->get();

        $topSession = Product::with('type')->firstwhere('top','1');
        $colors = json_decode($topSession->product_color);
        $sizes = json_decode($topSession->product_size);
        // dd( $topSession->product_photo);
        return view('front.index', compact('record','topSession','colors','sizes'));
    }

    public function product()
    {
        $record = Product::with('type')->get();
        return view('front.product.index', compact('record'));
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
    public function addItem(Request $request)
    {
        $product = Product::find($request->productId);
        // array format
        \Cart::add(array(
            //下面的是購物車都寫好的
            'id' => $product->id, // inique row ID
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' => 1,
            // ↓ 自定義才可以放自己的東西
            'attributes' => array(
                'product_photo'=>$product->product_photo,
            )
        ));
        return 'success';
    }
    public function content()
    {
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }

    public function clear()
    {
        \Cart::clear;
    }
    public function update(Request $request)
    {
        \Cart::upadte($request->productId,array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->newQty
            ),
        ));
    }
}
