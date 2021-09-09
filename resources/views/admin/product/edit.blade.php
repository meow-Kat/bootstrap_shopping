@extends('layout.app')

@section('title', '編輯產品')

@section('h1_title', '編輯產品')

@section('css')
<style>
    .del-img-btn{
        position: absolute;
        right: 10px;
        top: -10px;
        width: 20px;
        height: 20px;
        background-color: red;
        border-radius:50%;
        cursor: pointer;
        color: white;
        text-align: center;
        line-height: 22px;
        font-size:16px
    }
</style>
@endsection

@section('content')
    <form action="{{ asset('/admin/product/update') }}/{{ $record->id }}" class="py-5" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <img style="width: 450px; height: 300px;" id="preview_progressbarTW_img"
                    src="{{ $record->product_photo }}">
                <input class="py-3" type="file" onchange="readURL(this)" targetID="preview_progressbarTW_img"
                    accept="image/gif, image/jpeg, image/png" name="product_photo">

                    <div class="form-group row">
                        <label for="photo" class="col-md-4 col-form-label text-md-right">其他圖片</label>
                        {{-- 上傳的部分 --}}
                        {{-- 用關聯拿 modol function 名字 --}}
                        @foreach ($record->productImgs as $item)
                            <div class="col-md-3">
                                {{-- 點到圖片刪除按鈕時 將圖片 id 記下來 傳到後端 --}}
                                {{--  後端根據該筆 id 找到並刪除 --}}
                                <div data-id="{{ $item->id }}" class="del-img-btn">x</div>
                               <img class="w-100" src="{{ $item->photo }}" alt="">
                            </div>
                        @endforeach
                    </div>


                <div class="form-group">
                    <label class="py-2" for="top" @if ($record->top == 1) checked @endif>是否置頂</label>
                    <input type="checkbox" class="mx-2" id="top" name="top">
                </div>

                <div class="form-group">
                    <label class="pr-3" for="product_size">尺寸</label>
                    {{-- <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="XS" @if( in_array('XS',$size) )  checked @endif>XS</label>
                    <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="S" @if( in_array('S',$size) )  checked @endif>S</label>
                    <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="M" @if( in_array('M',$size) )  checked @endif>M</label>
                    <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="L" @if( in_array('L',$size) )  checked @endif>L</label>
                    <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="XL" @if( in_array('XL',$size) )  checked @endif>XL</label>
                    <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="XXL" @if( in_array('XXL',$size) )  checked @endif>XXL</label> --}}
                    @foreach ($size as $key => $item)
                        <p class="mb-0 mr-2" style="line-height: 25px; display:inline-block;">{{ $item }}</p>
                        <input id="size" type="checkbox" class="form-control mr-3"
                            style="width: 25px; height: 25px; display:inline-block;" name="size[]"
                            value="{{ $item }}" autocomplete="size" checked>
                    @endforeach
                
                </div>

                <div class="form-group color-group">
                    <label class="pr-3" for="product_color">顏色</label>
                    @foreach ($color as $key => $item)
                        <input type="color" class="mx-2" id="product_color" name="product_color[]" value="{{ $item }}">
                        <span class="add-color-space"></span>
                        {{-- <button type="button" class="btn btn-sm btn-secondary">增加顏色</button> --}}
                    @endforeach
                </div>
            </div>
            <div class="col-6">
                <label for="'product_type_id">分類</label>
                <select class="form-control form-control-lg" id="'product_type_id" name="'product_type_id">
                    @foreach ($type as $item)
                        <option @if ($record->type == $item) selected @endif
                            value="{{ $item->id }}">{{ $item->type_name }}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label class="py-2" for="product_name">產品名稱</label>
                    <input type="product_name" class="form-control" id="product_name" name="product_name" required
                        value="{{ $record->product_name }}">
                </div>

                <div class="form-group">
                    <label class="py-2" for="product_price">產品價格</label>
                    <input type="product_price" class="form-control" id="product_price" name="product_price" required
                        value="{{ $record->product_price }}">
                </div>

                <div class="form-group py-2">
                    <label for="product_context">產品內容</label>
                    <textarea class="form-control" id="product_context" rows="3"
                        name="product_context">{{ $record->product_context }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">修改</button>
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

        let del = document.querySelectorAll('.del-img-btn')
        del.forEach(e =>{
            e.onclick = function (){
                let yes = confirm('確定刪除嗎?')
                if(yes){
                    // 拿到id
                    let id = e.getAttribute('data-id')
                    // let id = $(e).attr('data-id')

                    // 發送非同步的資料到後端
                    let formdata = new FormData()
                    //.append('key', 'value')
                    formdata.append('id',id)
                    // 有幾筆資料就要用幾次 這個是csrf_token
                    formdata.append('_token','{{ csrf_token() }}')

                    let parent_element = e.parentElement

                    // fetch結構記一下很重要
                    fetch('/admin/deleteImage', { // 走route
                        'method': 'post',
                        'body': formdata
                    }).then(function (response) { // 會街道所以後端傳來的資訊包刮header cookies
                        // 用字串方式讀出來
                        return response.text()
                        // 這邊的 result = succses 來自FileCollorer
                    }).then(function (result) { // 結果 這邊只有前端有被刪除而已後端也要砍
                        if (result == 'success') {
                            alert('刪除成功')
                            parent_element.remove()
                        }
                    })
                }
            }
        })

    </script>
@endsection
