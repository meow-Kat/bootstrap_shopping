<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        // dump(\Cart::getContent());
        return 'success';
    }

    public function shoppingCart2()
    {
        $qty = \Cart::getTotalQuantity();
        $subTotal = \Cart::getSubTotal();
        $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
        $total = $subTotal + $shippingFee;
        return view('front.shopping-2', compact('qty' , 'subTotal', 'shippingFee' , 'total'));
    }

    public function paymentCheck(Request $request)
    {
        Session::put('pay', $request->pay);
        Session::put('ship', $request->ship);
        return redirect('/shopping-3');
    }

    public function shoppingCart3()
    {
        if ( Session::has('pay') && Session::has('ship')) {
            $qty = \Cart::getTotalQuantity();
            $subTotal = \Cart::getSubTotal();
            $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
            $total = $subTotal + $shippingFee;
            return view('front.shopping-3' , compact( 'qty' , 'subTotal', 'shippingFee' , 'total'));
        }else{
            return redirect('/shopping-2');
        }
    }

    public function shipmentCheck(Request $request)
    {
        dd($request->all());
        return redirect('/shopping-3');
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
                'product_photo' => $product->product_photo,
            )
        ));
        return 'success';
    }

    // public function content()
    // {
    //     $cartCollection = \Cart::getContent();
    //     return view('front.shopping-1', compact('cartCollection'));
    // }

    //  只是為了教學方便把購物車清除
    public function clear()
    {
        \Cart::clear();
        return 'success';
    }
}
