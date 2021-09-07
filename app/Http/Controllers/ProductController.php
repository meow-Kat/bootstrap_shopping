<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\FileController;



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
        $size = Product::SIZE;
        return view('admin.product.index', compact('record', 'size'));
    }

    public function edit($id)
    {
        $record = Product::find($id);
        $type = ProductType::get();
        $size = json_decode($record->product_size);
        return view('admin.product.edit', compact('record', 'type', 'size'));
    }

    public function update(Request $request, $id)
    {

        $record = Product::find($id);
        $requestData =  $request->all();

        // 單張圖片編輯
        if ($request->hasFile('product_photo')) {
            $requestData['product_photo'] = FileController::imgUpload($request->file('product_photo'), 'product');
        }

        $record->update($requestData);

        return redirect('admin/product')->with('message', '修改成功');
    }

    public function delete($id)
    {
        $old_record = Product::find($id);
        $old_record->delete();

        return redirect('/admin/product')->with('message', '刪除成功');
    }

    public function push(Request $request)
    {   
        $product = Product::get();
        // $requestData = $request->all();

        if ($request->hasFile('product_photo')) {
            $requestData['product_photo'] = FileController::imgUpload($request->file('product_photo'), 'product');
        }

        if ($request->top === null) {
            $top = 0;
        } else {
            $top = $request->input('top');
        }
        $size = json_encode($request['size']);
        $color = json_encode($request['color']);
        // dd($color);
        Product::create([
            'product_type_id' => $request->product_type_id,
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_context' => $request->product_context,
            'product_size' => $size,
            'product_color' => $color,
            'top' => $top,
        ]);

        return redirect('/admin/product')->with('message', '新增成功');
    }

    public function add()
    {
        $type = ProductType::get();
        $size = Product::SIZE;
        return view('admin.product.add', compact('type', 'size'));
    }
}
