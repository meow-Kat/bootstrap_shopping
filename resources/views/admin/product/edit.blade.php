@extends('layout.app')

@section('title', '編輯產品')

@section('h1_title', '編輯產品')

@section('css')

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

                <div class="form-group">
                    <label class="py-2" for="top" @if ($record->top == 1) checked @endif>是否置頂</label>
                    <input type="checkbox" class="mx-2" id="top" name="top">
                </div>

                <div class="form-group">
                    <label class="pr-3" for="product_size">尺寸</label>
                    <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="XS" @if( in_array('XS',$size) )  checked @endif>XS</label>
                    <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="S" @if( in_array('S',$size) )  checked @endif>S</label>
                    <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="M" @if( in_array('M',$size) )  checked @endif>M</label>
                    <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="L" @if( in_array('L',$size) )  checked @endif>L</label>
                    <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="XL" @if( in_array('XL',$size) )  checked @endif>XL</label>
                    <label><input type="checkbox" class="mx-2" id="size" name="product_size[]" value="XXL" @if( in_array('XXL',$size) )  checked @endif>XXL</label>
                </div>

                <div class="form-group color-group">
                    <label class="pr-3" for="product_color">顏色</label>
                    <input type="color" class="mx-2" id="product_color" name="product_color[]" value="{{ $record->product }}">
                    <span class="add-color-space"></span>
                    <button type="button" class="btn btn-sm btn-secondary">增加顏色</button>
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

    </script>
@endsection
