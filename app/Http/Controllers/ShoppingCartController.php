<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function shoppingCart1()
    {   // 只有這個 controller show 頁面 帶進來
        $cartCollection = \Cart::getContent();
        // dd($cartCollection); // dd 看購物車套件給的資料
        return view('front.shopping-1', compact('cartCollection'));
    }
    public function update(Request $request)
    {
        // update 成自己想要的 value
        \Cart::update($request->productId, array(
            'quantity' => array(
                'relative' => false,
                // fetch 內 append 的 key => value
                'value' => $request->newQty
            ),
        ));
        return 'success';
    }

    public function shoppingCart2()
    {
        return view('front.shopping-2');
    }

    public function paymentCheck(Request $request)
    {
        dd($request->all());
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

    // public function content()
    // {
    //     $cartCollection = \Cart::getContent();
    //     return view('front.shopping-1', compact('cartCollection'));
    // }


}
