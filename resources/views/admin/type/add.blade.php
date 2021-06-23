@extends('layout.app')

@section('title','新增產品')

@section('h1_title','新增產品')

@section('css')

@endsection

@section('content')
<form action="{{ '/admin/product/type/push' }}" method="POST" enctype="multipart/form-data" class="py-5">
    @csrf
    <div class="row">
        <div class="col-6 m-auto">
            <label class="py-2" for="type_name">產品種類名稱</label>
            <input type="type_name" class="form-control" id="type_name" name="type_name" required>

            <button type="submit" class="btn btn-primary">新增</button>
        </div>
    </div>
</form>
@endsection

@section('js')

@endsection
