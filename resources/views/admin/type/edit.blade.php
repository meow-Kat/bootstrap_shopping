@extends('layout.app')

@section('title','編輯產品')

@section('h1_title','編輯產品')

@section('css')

@endsection

@section('content')
<form action="{{ asset('/admin/product/type/update') }}/{{ $record->id }}" class="py-5" method="POST">
    @csrf
    <div class="row">
        <div class="col-6 m-auto">
            <label class="py-2" for="type_name">產品種類名稱</label>
            <input type="type_name" class="form-control" id="type_name" name="type_name" required value="{{ $record->type_name }}">

            <button type="submit" class="btn btn-primary">編輯</button>
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
