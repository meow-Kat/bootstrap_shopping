<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function admin()
    {
        return view('admin.index');
    }

    public function product()
    {
        $record = Product::get();
        return view('admin.product.index', compact('record'));
    }

    public function productEdit($id)
    {
        $record = Product::find($id);
        return view('admin.product.edit', compact('record'));
    }

    public function productUpdate(Request $request,$id)
    {
        $old_record = Product::find($id);
        $old_record->product_photo = $request->product_photo;
        $old_record->product_name = $request->product_name;
        $old_record->product_classify = $request->product_classify;
        $old_record->product_context = $request->product_context;
        // 存檔
        $old_record->save();

        return redirect('admin/product')->with('message', '修改成功');
    }

    public function productDelete($id)
    {
        $old_record = Product::find($id);
        $old_record->delete();

        return redirect('/admin/product')->with('message', '刪除成功');
    }

    public function push(Request $request)
    {
        Product::create([
            'product_photo' => $request->product_photo,
            'product_name' => $request->product_name,
            'product_classify' => $request->product_classify,
            'product_context' => $request->product_context,
        ]);

        return redirect('/admin/product')->with('message', '新增成功');
    }

    public function add()
    {
        return view('admin.product.add');
    }

}
