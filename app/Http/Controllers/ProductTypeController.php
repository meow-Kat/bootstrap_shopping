<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    //
    public function type()
    {
        $record = ProductType::get();
        return view('admin.type.index', compact('record'));
    }

    public function edit($id)
    {
        $record = ProductType::find($id);
        return view('admin.type.edit', compact('record'));
    }

    public function update(Request $request,$id)
    {
        $old_record = ProductType::find($id);
        $old_record->type_name = $request->type_name;
        // 存檔
        $old_record->save();

        return redirect('admin/product/type')->with('message', '修改成功');
    }

    public function delete($id)
    {
        $old_record = ProductType::find($id);
        $old_record->delete();

        return redirect('/admin/product/type')->with('message', '刪除成功');
    }

    public function push(Request $request)
    {
        ProductType::create([
            'type_name' => $request->type_name,
        ]);

        return redirect('/admin/product/type')->with('message', '新增成功');
    }

    public function add()
    {
        return view('admin.type.add');
    }
}
