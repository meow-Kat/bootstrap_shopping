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
        return view('admin.product.index', compact('record'));
    }

    public function edit($id)
    {
        $record = Product::find($id);
        $type = ProductType::get();
        return view('admin.product.edit', compact('record', 'type'));
    }

    public function update(Request $request,$id)
    {
        // $old_record = Product::find($id);
        $record = Product::with('photo')->find($id);
        $requestData =  $request->all();

        // 單張圖片編輯
        if ($request->hasFile('product_photo')) {
            File::delete(public_path().$record->product_photo);
            $path = FileController::imgUpload($request->file('product_photo'),'product');
            $requestData['product_photo'] = $path;
        }
        $record->update($requestData);


        // if($request->hasFile('product_photo')){

        //     File::delete(public_path(). $old_record->product_photo);
        //     $file = $request->file('product_photo');
        //     if (!is_dir('upload/')) {
        //         mkdir('upload/');
        //     }
        //     $extenstion = $request->product_photo->getClientOriginalExtension();
        //     $filename = md5(uniqid(rand())) . '.' . $extenstion;
        //     $path = '/upload/' . $filename;
        //     move_uploaded_file($file, public_path() . $path);
        //     $old_record->product_photo = $path;
        // }

        // $old_record->product_name = $request->product_name;
        // $old_record->product_context = $request->product_context;
        // $old_record->top =  $request->top;
        // $old_record->product_size = $request->product_size;
        // $old_record->product_color = $request->product_color;
        // $old_record->product_type_id = $request->product_type_id;
        // 存檔
        $input = $request->all();
        $input['size'] = json_encode($request->product_size);
        // $old_record->save();

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
        $requestData = $request->all();
        if ($request->hasFile('product_photo')) {                                            
            $requestData['product_photo'] = FileController::imgUpload($request->file('product_photo'),'product');
        }

        $new_recode = Product::create($requestData);

        if ($request->hasFile('product_photos')) {
            foreach($request->file('product_photos') as $item){  
                $path = FileController::imgUpload($item,'product');
                
                $input['size'] = json_encode($request->product_size);
                Product::create($request->all());
            }
        }

        return redirect('/admin/product')->with('message', '新增成功');
    }

    public function add()
    {
        $type = ProductType::get();

        return view('admin.product.add',compact('type'));
    }

}
