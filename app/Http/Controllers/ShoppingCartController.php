<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
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

    public function add(Request $request)
    {
        dd($request);
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
        # code...
    }
}
