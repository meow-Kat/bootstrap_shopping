@extends('layout.app')

@section('title','新增產品')

@section('h1_title','新增產品')

@section('css')

@endsection

@section('content')
<form action="{{ '/admin/product/push' }}" method="POST" enctype="multipart/form-data" class="py-5">
    @csrf
    <div class="row">
        <div class="col-6">
            <img style="width: 450px; height: 300px;" id="preview_progressbarTW_img"
                src="https://dummyimage.com/600x400">
            <input class="py-3" type="file" onchange="readURL(this)" targetID="preview_progressbarTW_img"
                accept="image/gif, image/jpeg, image/png" name="product_photo">
        </div>
        <div class="col-6">
            <label for="product_classify">分類 Classify</label>
            <select class="form-control form-control-lg" id="product_classify" name="product_classify">
                <option>普通</option>
                <option>禮盒</option>
                <option>限定</option>
                <option>熱銷</option>
            </select>
            <label class="py-2" for="product_name">產品名稱</label>
            <input type="product_name" class="form-control" id="product_name" name="product_name" required>
            <div class="form-group py-2">
                <label for="product_context">產品內容</label>
                <textarea class="form-control" id="product_context" rows="3" name="product_context"></textarea>
            </div>
            <a href="{{ asset('/admin/product/push') }}"><button type="submit" class="btn btn-primary">新增</button></a>
        </div>
    </div>
</form>
@endsection

@section('js')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            let imageTagID = input.getAttribute("targetID")
            let reader = new FileReader()
            reader.onload = function (e) {
                let img = document.getElementById(imageTagID)
                img.setAttribute("src", e.target.result)
            }
            reader.readAsDataURL(input.files[0])
        }
    }
</script>
@endsection
