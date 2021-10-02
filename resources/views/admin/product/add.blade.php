@extends('layout.app')

@section('title', '新增產品')

@section('h1_title', '新增產品')

@section('css')
    <style>
        .del-img-btn {
            position: absolute;
            right: 10px;
            top: -10px;
            width: 20px;
            height: 20px;
            background-color: red;
            border-radius: 50%;
            cursor: pointer;
            color: white;
            text-align: center;
            line-height: 22px;
            font-size: 16px
        }

    </style>
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

                {{-- 讓使用者在編輯資料時刪除關聯圖片 --}}
                <div class="form-group row">
                    <label for="photo" class="col-md-4 col-form-label text-md-right">其他圖片</label>
                    <div class="col-md-6">
                        <input class="py-3" type="file" id="photo" accept="image/gif, image/jpeg, image/png"
                            name="photo[]" multiple>
                        {{-- 陣列型式 ↑     ↑ 多圖上傳要有 --}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="py-2" for="top">是否置頂</label>
                    <input type="checkbox" class="mx-2" id="top" name="top" value="1">
                </div>


                <div class="form-group">
                    <label class="pr-3" for="product_size">尺寸</label>

                    @foreach ($size as $key => $item)
                        <p class="mb-0 mr-2" style="line-height: 25px; display:inline-block;">{{ $item }}</p>
                        <input id="size" type="checkbox" class="form-control mr-3"
                            style="width: 25px; height: 25px; display:inline-block;" name="size[]"
                            value="{{ $item }}" autocomplete="size" autofocus>
                    @endforeach
                </div>

                <div class="form-group color-group">
                    <label class="pr-3" for="product_color">主要顏色</label>
                    <button type="button" class="btn btn-sm btn-secondary" id="addColor">增加顏色</button>
                    <div class="row m-0 mb-3" id="colorBox">
                        <input id="color" type="color" class="form-control w-25 mr-3" name="color[]">
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
        // var addColor = document.querySelector('.addColor')
        // // var i = 1;
        // addColor.addEventListener('click', function() {
        //     // i++;
        //     var newColor = document.createElement('div')
        //     newColor.className = 'row m-0 d-flex align-items-center'
        //     newColor.innerHTML =
        //         "<input type='color' name='color[]' class='form-control w-25 mb-3 mr-3'><input type='button' name='removeBtn' class='btn btn-sm btn-outline-danger mb-3' value='-' onclick='$(this).parent().remove();'>"
        //     document.getElementById('newColor').appendChild(newColor)
        // });
        // }


        var max_fields = 3; //maximum input boxes allowed
        var wrapper = document.querySelector('#colorBox') //Fields wrapper
        var add_button = document.querySelector('#addColor') //Add button ID

        var x = 1; //initlal text box count
        add_button.onclick = function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                var newColor = document.createElement('div')
                newColor.innerHTML = `<input type="color" class="form-control  mr-3" name="color[]"/><button class="remove_field">X</button>`
                wrapper.appendChild( newColor ); //add input box
            }
        };

        $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    </script>
@endsection
