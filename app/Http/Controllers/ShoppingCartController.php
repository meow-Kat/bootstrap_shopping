<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
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

        return view('front.shopping-2', $this->shoppingCalc());
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
            return view('front.shopping-3' , $this->shoppingCalc());
        }else{
            return redirect('/shopping-2');
        }
    }

    public function shipmentCheck(Request $request)
    {
        // 抓出總之前的產品資訊
        $cartProducts = \Cart::getContent();

        // // 跟錢有關自己算
        // $totalPrice = 0;
        // $totalQty = 0;
        // foreach ($cartProducts as $cartProduct) {
        //     // 從資料庫撈
        //     $product = Product::find($cartProduct->id);
        //     $totalPrice += $product->product_price * $cartProduct->quantity;
        //     $totalQty += $cartProduct->quantity;
        // }

        // 先把價格預設，後面存資料前再改
        $order = Order::create([
            // 避免同時間同訂單，同姓名
            'order_no' => 'DP'.time().rand(1,999),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'country' =>  $request->county,
            'district' => $request->district,
            'zipcode' => $request->zipcode,
            'address' => $request->address,
            'price' => 99999999,
            'pay_type' => Session::get('pay'),
            'shipping' => Session::get('ship'),
            'shipping_fee' => 999999999,
            'shipping_status_id' => 0,
            'order_status_id' => 0,
        ]);


        $totalPrice = 0;

        // 把訂單存進去資料庫
        foreach ($cartProducts as $cartProduct) {
            $product = Product::find($cartProduct->id);
            $totalPrice += $product->product_price * $cartProduct->quantity;

            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' =>$product->id,
                'qty' => $cartProduct->quantity,
                // 整筆資料用json存
                'old' => json_encode($product),
            ]);
        }
        $order->update([
            'price' => $totalPrice,
            'shipping_fee' => $totalPrice > 1000 ? 0 : 60,
        ]);

        // 確定訂單後要清除購物車、付款和運送
        \Cart::clear();
        Session::forget('pay');
        Session::forget('ship');

        return redirect('/shopping-4')->with('order',$order);
    }

    public function shoppingCart4()
    {
        if(Session::has('order')){
            return view('front.shopping-4');
        }else{
            return redirect('/');
        }
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

    public function delete(Request $request)
    {   
        \Cart::remove($request->productId);
        return 'success';
    }

    //  只是為了教學方便把購物車清除
    public function clear()
    {
        \Cart::clear();
        return 'success';
    }
    public function shoppingCalc()
    {
        $qty = \Cart::getTotalQuantity();
        $subTotal = \Cart::getSubTotal();
        $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
        $total = $subTotal + $shippingFee;
        return compact( 'qty' , 'subTotal', 'shippingFee' , 'total');
    }
}
