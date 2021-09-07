@extends('layout.template')

@section('css')

@endsection

@section('tile', '產品列')

@section('main')
    <div class="container">
        <div class="row my-3">
            <a href="/product" class="btn btn-primary mr-2">All</a>
            @foreach ( $types as $type )
                <a href="/product?type_id={{ $type->id }}" class="btn btn-primary mr-2">{{ $type->type_name }}</a>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($record as $item)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $item->product_photo }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->product_name }}</h5>
                        <p class="card-text">$ {{ $item->product_price }}</p>
                        <button class="btn btn-primary addBtn" data-id="{{ $item->id }}">加入購物車</button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection

@section('js')
<script>
    var addBtns = document.querySelectorAll('.addBtn')
    addBtns.forEach(function ( addBtn ) {
        addBtn.addEventListener('click',function () {
            var productID = this.dataset.id
            var formData = new FormData()
            formData.append('_token', '{{ csrf_token() }}')
            formData.append('productID',productID)

            fetch('/shopping_cart/add', {
                'method': 'POST',
                'body':formData
            }).then(function (response) {
                return response.text()
            }).then(function (result) {
                if (result == 'success') {
                    alert('加入天竺手購物車車成功')
                    // Swal.fire('Any fool can use computer')
                }
            })
        })
    })
</script>
@endsection
