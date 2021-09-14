@extends('layout.template')

@section('title','Shopping - Step 1')

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
                        <div class="row py-2">
                            <div class="col d-flex align-items-center">
                                <div class="pic-1" style="background-image: url({{asset($item->attributes->product_photo)}})"></div>
                                <div class="text px-3">
                                    <P>{{ $item->name }}</P>
                                    <span class="text-color-grey"># {{ $item->id }}</span>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <div class="my-order d-flex align-items-center calcItem">
                                    <div class="my-order-num">
                                        <button type="button" class="remove">-</button>
                                        <input id="product-1" class="count-num" type="text" min="1" value="1"
                                            onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}"
                                            onafterpaste="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'0')}else{this.value=this.value.replace(/\D/g,'')}"
                                            onchange="change(this)">
                                        <button type="button" class="add">+</button>
                                    </div>
                                    <p class="my-order-price px-4" data-price="{{ $item->price }}">$ {{ $item->price }}</p>
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
                            <h5 class="total-num">3</h5>
                        </div>
                        <div class="totle d-flex justify-content-between">
                            <h5 class="color-grey">小計：</h5>
                            <h5 class="total-price">$ 118</h5>
                        </div>
                        <div class="totle d-flex justify-content-between">
                            <h5 class="color-grey ">運費：</h5>
                            <h5 class="shipment">$ 60</h5>
                        </div>
                        <div class="totle d-flex justify-content-between">
                            <h5 class="color-grey">總計：</h5>
                            <h5 class="total-all">$ 178</h5>
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
                        <a href="{{ asset('/shopping-2') }}"><button type="button"
                                class="btn btn-primary btn-lg my-button">下一步</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection



@section('calc')
<script>

    let count_num = document.querySelectorAll('.count-num')
    let total_num = document.querySelector('.total-num')
    let total_price = document.querySelector('.total-price')
    let total_all = document.querySelector('.total-all')
    let shipment = document.querySelector('.shipment')


    //宣告單價取含有$的價格
    let price_base = document.querySelectorAll('.my-order-price')
    //宣告裝處理後字串的陣列
    let change_num =[]
    //修改文字後存進去
    for (let index = 0; index < price_base.length; index++) {
        change_num[index] = price_base[index].innerHTML.substring(2,price_base[index].length)
    }

    function cart() {
        //送到購物車
        let formDate = new FormData()
                                //    ↓---花括號----↓　才是正確的
        formDate.append('_token', '{{ csrf_token() }}')
        formDate.append('productId',input.getAttribute('data-id'))
        formDate.append('newQty',newQty)
        fetch('/update',{
            'method':post,
            'body': formDate
        }).then(function (responce) {
            return response.text()
        })then(function (result) {
            if (newQty < 1) {
                input.value = 1
            }else{
                input.value = newQty
            }
            let price = qtyArea.nextElementSibling
            price.innerHTML = '$ ' + (price.getAttribute(''))
        })
    }



    function update() {
        let sum_count = 0
        let sum_calc = 0
        let total_sum_calc
        let shipment_calc

        //算總數
        for (let i = 0; i < count_num.length; i++) {
            sum_count += parseInt(count_num[i].value)
        }
        total_num.innerHTML = sum_count

        //算小記
        for (let i = 0; i < count_num.length; i++) {
            sum_calc += parseInt(count_num[i].value) * parseInt(change_num[i])
        }
        total_price.innerHTML = `$ ` + sum_calc

        //運費
        shipment_calc = 60
        if (sum_calc >= 1000) {
            shipment_calc = 0
        }
        shipment.innerHTML = `$ ` +  shipment_calc
        console.log(shipment);

        //總計
        total_sum_calc = sum_calc + parseInt(shipment_calc)
        console.log(total_sum_calc);

        total_all.innerHTML = `$ ` + total_sum_calc

        // cart()
    }


    //+ - 按鈕
    let calcItems = document.querySelectorAll('.calcItem')
    calcItems.forEach(calcItem => {
        let add = document.querySelector('.add')
        let remove = document.querySelector('.remove')
        let price = calcItem.dataset.price
        console.log(price);
    });
    // function add(ele) {
    //     let num = ele.parentNode.children[1]
    //     let price = ele.parentNode.parentNode.children[1]
    //     let unit = ele.parentNode.parentNode.parentNode.children[1]
    //     num.value = parseInt(num.value) + 1
    //     price.innerHTML = `$ ` + parseInt(num.value) * parseInt(price.dataset.price)

    //     for (let index = 0; index < count_num.length; index++) {
    //         count_num[index].addEventListener('click', update())
    //     }
    // }

    // function remove(ele) {
    //     let num = ele.parentNode.children[1]
    //     let price = ele.parentNode.parentNode.children[1]
    //     num.value = parseInt(num.value) - 1
    //     //最小不能小於1
    //     if (num.value < 1) {
    //         num.value = 1
    //     } else {
    //         price.innerHTML = `$ ` + parseInt(num.value) * parseInt(price.dataset.price)
    //     }


    //     for (let index = 0; index < count_num.length; index++) {
    //         count_num[index].addEventListener('click', update())
    //     }

    // }

    // function change(ele) {
    //     let num = ele.parentNode.children[1]
    //     let price = ele.parentNode.parentNode.children[1]
    //     if (num.value > 1) {
    //         price.innerHTML = `$ ` + parseInt(num.value) * parseInt(price.dataset.price)
    //     } else {
    //         num.value = 1
    //     }


    //     for (let index = 0; index < count_num.length; index++) {
    //         count_num[index].addEventListener('click', update())
    //     }

    // }
    // update()
</script>
@endsection


