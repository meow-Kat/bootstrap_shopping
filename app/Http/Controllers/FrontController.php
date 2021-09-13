<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
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

    public function product(Request $request)
    {
        $record = Product::with('type')->get();
        $types = ProductType::get();
        if($request->type_id){
            $record = Product::where('product_type_id',$request->type_id)->get();
        }else{
            $record = Product::get();
        }
        return view('front.product.index', compact('record','types'));
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
        return view('front.shopping-1', compact('cartCollection'));
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
