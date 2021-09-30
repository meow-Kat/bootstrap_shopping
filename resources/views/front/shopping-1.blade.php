@extends('layout.template')

@section('title', 'Shopping - Step 1')

@section('css')
    <link rel="stylesheet" href="/css/shop.css">
@endsection

@section('main')
    <!-- Main -->
    <main class="my-main">
        <div class="container py-5">
            <!-- 大卡 -->
            <div class="card my-card w-lg-75 m-auto">
                <div class="card-body p-4">
                    <!-- 流程 -->
                    <div class="row py-3">
                        <div class="col">
                            <h2 class="card-title">Card title</h2>
                            <div class="row text-center">
                                <div class="col">
                                    <div class="my-item text-center my-shopping">1</div>
                                    <p class="my-text-size-p">確認購物車</p>
                                </div>
                                <div class="col">
                                    <div class="my-item">2</div>
                                    <p class="my-text-size-p">付款與運送方式</p>
                                </div>
                                <div class="col">
                                    <div class="my-item">3</div>
                                    <p class="my-text-size-p">填寫資料</p>
                                </div>
                                <div class="col">
                                    <div class="my-item-last">4</div>
                                    <p class="my-text-size-p">完成訂購</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="featurette-divider">
                    <!-- 訂單 -->
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col py-3">
                                    <h4>訂單明細</h4>
                                </div>
                            </div>
                            @foreach ($cartCollection as $item)
                            <div class="row py-2 product">
                                    <div class="col d-flex align-items-center ">
                                        <button class="del-btn mr-2" data-id="{{ $item->id }}">x</button>
                                        <div class="pic-1"
                                            style="background-image: url({{ asset($item->attributes->product_photo) }})">
                                        </div>
                                        <div class="text px-3">
                                            <P>{{ $item->name }}</P>
                                            <span class="text-color-grey"># {{ $item->id }}</span>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <div class="my-order d-flex align-items-center calcItem">
                                            <div class="my-order-num">
                                                {{-- <button type="button" class="remove" onclick="remove(this)">-</button> --}}
                                                <button type="button" class="remove">-</button>
                                                <input id="product-1" class="count-num" type="text" min="1" value="1"
                                                    data-id="{{ $item->id }}"
                                                    onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}"
                                                    onafterpaste="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'0')}else{this.value=this.value.replace(/\D/g,'')}"
                                                    >
                                                {{-- <button type="button" class="add" onclick="add(this)">+</button> --}}
                                                <button type="button" class="add">+</button>
                                            </div>
                                            <p class="my-order-price px-4" data-price="{{ $item->price }}">$
                                                {{ $item->price }}</p>
                                        </div>

                                    </div>
                                </div>
                                <hr class="featurette-divider">
                            @endforeach
                        </div>
                    </div>
                    <!-- 計算 -->
                    <div class="row py-3">
                        <div class="col-5 col-md-3 ml-auto">
                            <div class="totle d-flex justify-content-between">
                                <h5 class="color-grey ">數量：</h5>
                                <h5 class="total-num"></h5>
                            </div>
                            <div class="totle d-flex justify-content-between">
                                <h5 class="color-grey">小計：</h5>
                                <h5 class="total-price"></h5>
                            </div>
                            <div class="totle d-flex justify-content-between">
                                <h5 class="color-grey ">運費：</h5>
                                <h5 class="shipment"></h5>
                            </div>
                            <div class="totle d-flex justify-content-between">
                                <h5 class="color-grey">總計：</h5>
                                <h5 class="total-all"></h5>
                            </div>
                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <!-- 上/下一步 -->
                    <div class="row">
                        <div class="col d-flex justify-content-between align-items-center">
                            <span class="d-flex align-items-center">
                                <i class="fas fa-caret-left"></i>
                                <a href="{{ asset('/') }}">
                                    <p class="card-text my-back px-3">返回購物</p>
                                </a>
                            </span>
                            <a href="{{ asset('/shopping-2') }}" class="btn btn-primary btn-lg my-button">下一步</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



@section('calc')
    <script>
        // 選中所有商品
        var product = document.querySelectorAll('.product')
        // 計算區域
        var minus = document.querySelectorAll('.remove');
        var plus = document.querySelectorAll('.add');
        var input = document.querySelectorAll('.count-num');
        // 顯示區域
        var showProductQty = document.querySelector('.total-num');
        var showSubtotal = document.querySelector('.total-price');
        var shipping = document.querySelector('.shipment');
        var totalCost = document.querySelector('.total-all');
        // 商品單價
        var productPrice = document.querySelectorAll('.my-order-price');
        // 歸零計算
        var productQty = 0;
        var subtotal = 0;
        // 運費及門檻
        var shipping_free = 1000;
        var shippingPrice = 60;

        // 顯示計算後所有項目更新
        function updateData() {
            // 數量、小計歸零
            productQty = 0;
            subtotal = 0;
            // 每一個商品資訊更新
            for (let i = 0; i < product.length; i++) {
                let subtotalNumber = (parseInt(input[i].value) * parseFloat(productPrice[i].dataset.price))
                productPrice[i].innerHTML = '$' + subtotalNumber.toLocaleString();
                //商品總數更新
                productQty += parseInt(input[i].value);
                //小計更新
                subtotal += subtotalNumber
            }
            // 商品總數顯示
            showProductQty.innerHTML = productQty
            // 小計顯示，顯示千位數逗號
            showSubtotal.innerHTML = '$' + subtotal.toLocaleString();
            //運費更新、顯示
            calcShipping()
            // 總計顯示
            totalCost.innerHTML = '$' + (subtotal + shippingPrice).toLocaleString();
        }

        updateData()
        // 按下加號的event
        plus.forEach(function(ele, i) {
            ele.addEventListener('click', function() {
                input[i].value = parseInt(input[i].value) + 1;
                updateData();
                // 呼叫 step-1 的更新數量 function
                updateQty(this);
            })
        });
        // 按下減號的event
        minus.forEach(function(ele, i) {
            ele.addEventListener('click', function() {
                if (input[i].value > 1) {
                    input[i].value = parseInt(input[i].value) - 1;
                    updateData();
                    // 呼叫 step-1 的更新數量 function
                    updateQty(this);
                }
            })
        });
        // input onchange事件及條件限制
        input.forEach(function(ele) {
            ele.addEventListener('change', function() {
                if (ele.value == '' || ele.value == 0) {
                    ele.value = 1;
                }
                updateData();
            })

            ele.addEventListener('keyup', function() {
                ele.value = ele.value.replace(/\D+/g, '');
            })

        });
        // 運費計算及免運費條件
        function calcShipping() {
            if (subtotal >= shipping_free) {
                shippingPrice = 0;
                shipping.innerHTML = '$' + shippingPrice.toLocaleString();;
            } else if (subtotal <= shipping_free) {
                shippingPrice = 60;
                shipping.innerHTML = '$' + shippingPrice.toLocaleString();;
            }
        }

        window.addEventListener('load', function() {
            updateData();
        })
    </script>
    <script>
       function updateQty(element) {
        var qtyArea = element.parentElement;
        var input = qtyArea.querySelector('input');
        // 轉成數字型態
        var qty = Number(input.value);
        var formData = new FormData();
        formData.append('_token','{{csrf_token()}}');
        formData.append('productId',input.getAttribute('data-id'));
        formData.append('newQty',qty);
        fetch('/shopping_cart/update',{
            'method':'post',
            'body':formData
        }).then(function (response) {
            return response.text();
        }).then(function (result) {
            updateData();
        })
       }



       var delBtns = document.querySelectorAll('.del-btn');
       delBtns.forEach(function (delBtn) {
           delBtn.addEventListener('click', function () {
                var productId = this.getAttribute('data-id');
                var formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('productId', productId);
                var delElement = this;
                fetch('/shopping_cart/delete',{
                    'method': 'POST',
                    'body':formData
                }).then(function (response) {
                    return response.text();
                }).then(function (result) {
                    if(result == 'success'){
                        delElement.parentElement.parentElement.parentElement.children[2].remove();
                        delElement.parentElement.parentElement.remove();
                        updateData();
                    }
                })
           })
       })
    </script>
@endsection
