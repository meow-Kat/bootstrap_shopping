@extends('layout.app')

@section('title', '新增產品')

@section('h1_title', '新增產品')

@section('css')

@endsection

@section('content')
    <form action="{{ '/admin/product/push' }}" method="POST" enctype="multipart/form-data" class="py-5">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <img style="width: 450px; height: 300px;" id="preview_progressbarTW_img"
                        src="https://dummyimage.com/600x400">
                    <input class="py-3" type="file" onchange="readURL(this)" targetID="preview_progressbarTW_img"
                        {{-- 接受圖片型式 --}} accept="image/*" name="product_photo">
                </div>

                <div class="form-group">
                    <label class="py-2" for="top">是否置頂</label>
                    <input type="checkbox" class="mx-2" id="top" name="top" value="1">
                </div>


                <div class="form-group">
                    <label class="pr-3" for="product_size">尺寸</label>
                    {{-- <label><input type="checkbox" class="mx-2" name="product_size[]" value="XS">XS</label>
                    <label><input type="checkbox" class="mx-2" name="product_size[]" value="S">S</label>
                    <label><input type="checkbox" class="mx-2" name="product_size[]" value="M">M</label>
                    <label><input type="checkbox" class="mx-2" name="product_size[]" value="L">L</label>
                    <label><input type="checkbox" class="mx-2" name="product_size[]" value="XL">XL</label>
                    <label><input type="checkbox" class="mx-2" name="product_size[]" value="XXL">XXL</label> --}}
                    @foreach ($size as $key => $item)
                        <p class="mb-0 mr-2" style="line-height: 25px;">{{ $item }}</p>
                        <input id="size" type="checkbox" class="form-control mr-3" style="width: 25px; height: 25px;"
                            name="size[]" value="{{ $item }}" autocomplete="size" autofocus>
                    @endforeach
                </div>

                <div class="form-group color-group">
                    <label class="pr-3" for="product_color">顏色</label>
                    {{-- <input type="color" class="mx-2" id="product_color[]" name="product_color">
                    <span class="add-color-space"></span>
                    <button type="button" class="btn btn-sm btn-secondary">增加顏色</button> --}}
                    <input class="btn btn-outline-primary btn-sm h-75 addColor" name="addBtn" type="button" value="+">
                    <div class="row m-0 d-flex align-items-center mb-3">
                        <input id="color" type="color" class="form-control w-25 mr-3" name="color[]" autocomplete="color"
                            autofocus>
                        <input class="btn btn-outline-danger btn-sm h-75 addColor" name="addBtn" type="button" value='-'
                            onclick='$(this).parent().remove();'>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label for="product_type_id">分類</label>
                <select class="form-control form-control-lg" id="product_type_id" name="product_type_id">
                    @foreach ($type as $item)
                        <option value="{{ $item->id }}">{{ $item->type_name }}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label class="py-2" for="product_name">產品名稱</label>
                    <input type="product_name" class="form-control" id="product_name" name="product_name" required>
                </div>

                <div class="form-group">
                    <label class="py-2" for="product_price">產品價格</label>
                    <input type="number" class="form-control" id="product_price" name="product_price" required>
                </div>

                <div class="form-group pt-2">
                    <label for="product_context">產品內容</label>
                    <textarea class="form-control" id="product_context" rows="3" name="product_context"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">新增</button>
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
                reader.onload = function(e) {
                    let img = document.getElementById(imageTagID)
                    img.setAttribute("src", e.target.result)
                }
                reader.readAsDataURL(input.files[0])
            }
        }

        // let addColor = document.querySelector('.btn-secondary')
        // addColor.onclick = function() {
        //     var color = document.querySelector('.add-color-space')
        //     color.innerHTML = `<input type="color" class="mx-2" id="color" name="color[]">
        //     <span class="add-color-space"></span>`
        
        // 增加顏色
        var addColor = document.querySelector('.addColor')
        // var i = 1;
        addColor.addEventListener('click', function() {
            // i++;
            var newColor = document.createElement('div');
            newColor.className = 'row m-0 d-flex align-items-center';
            newColor.innerHTML =
                "<input type='color' name='color[]' class='form-control w-25 mb-3 mr-3'><input type='button' name='removeBtn' class='btn btn-sm btn-outline-danger mb-3' value='-' onclick='$(this).parent().remove();'>"
            document.getElementById('newColor').appendChild(newColor);
        });
        }
    </script>
@endsection
