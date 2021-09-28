@extends('layout.template')

@section('title', 'Shopping - Step 2')

@section('css')
    <link rel="stylesheet" href="/css/shop.css">
@endsection

@section('main')
    <!-- Main -->
    <main class="my-main">
        <div class="container py-5">
            <!-- 背景卡片 -->
            <div class="card my-card w-lg-75 m-auto">
                <div class="card-body p-4">
                    <div class="row py-3">
                        <div class="col">
                            <h2 class="card-title">Card title</h2>
                            <div class="row text-center">
                                <div class="col">
                                    <div class="my-item text-center my-shopped">1</div>
                                    <p class="my-text-size-p">確認購物車</p>
                                </div>
                                <div class="col">
                                    <div class="my-item my-shopping">2</div>
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


                    <!-- 下面內容 -->
                    <div class="row">
                        <form class="col" action="{{ asset('/shopping-2/check') }}" method="POST" id="payment">
                            @csrf
                            <div class="row">
                                <div class="col py-3">
                                    <h4 class="py-3">付款方式</h4>
                                    <div class="row">
                                        <div class="col d-flex align-items-center px-4">
                                            <input type="radio" name="pay" id="" class="cb-size" required
                                                value="Credit">
                                            <h5 class="p-2">信用卡付款</h5>
                                        </div>
                                    </div>
                                    <hr class="featurette-divider">
                                    <div class="row">
                                        <div class="col d-flex align-items-center px-4">
                                            <input type="radio" name="pay" id="" class="cb-size" required
                                                value="ATM">
                                            <h5 class="p-2">
                                                網路 ATM</h5>
                                        </div>
                                    </div>
                                    <hr class="featurette-divider">
                                    <div class="row">
                                        <div class="col d-flex align-items-center px-4">
                                            <input type="radio" name="pay" id="" class="cb-size" required
                                                value="CVS">
                                            <h5 class="p-2">超商代碼</h5>
                                        </div>
                                    </div>
                                    <hr class="featurette-divider">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col py-3">
                                    <h4 class="py-3">運送方式</h4>
                                    <div class="row">
                                        <div class="col d-flex align-items-center px-4">
                                            <input type="radio" name="ship" id="" class="cb-size" required
                                                value="Home">
                                            <h5 class="p-2">黑貓宅配</h5>
                                        </div>
                                    </div>
                                    <hr class="featurette-divider">
                                    <div class="row">
                                        <div class="col d-flex align-items-center px-4">
                                            <input type="radio" name="ship" id="" class="cb-size" required
                                                value="C2C">
                                            <h5 class="p-2">
                                                超商店到店</h5>
                                        </div>
                                    </div>
                                    <hr class="featurette-divider">

                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row py-3">
                        <div class="col-3 ml-auto">
                            @php
                                $qty = \Cart::getTotalQuantity();
                                $subTotal = \Cart::getSubTotal();
                                $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
                                $total = $subTotal + $shippingFee ;
                            @endphp
                            <div class="totle d-flex justify-content-between">
                                <h5 class="color-grey">數量：</h5>
                                <h5>{{ $qty }}</h5>
                            </div>
                            <div class="totle d-flex justify-content-between">

                                <h5 class="color-grey">小計：</h5>
                                <h5>$ {{ number_format($subTotal) }}</h5>
                            </div>
                            <div class="totle d-flex justify-content-between">
                                <h5 class="color-grey">運費：</h5>
                                <h5>$ {{ $shippingFee }}</h5>
                            </div>
                            <div class="totle d-flex justify-content-between">
                                <h5 class="color-grey">總計：</h5>
                                <h5>$ {{ number_format($total) }}</h5>
                            </div>
                        </div>
                    </div>

                    <hr class="featurette-divider">
                    <!-- 上/下一步 -->
                    <div class="row">
                        <div class="col d-flex justify-content-between align-items-center">
                            <a href="{{ asset('/shopping-1') }}" class="btn btn-outline-primary btn-lg my-button">上一步</a>
                            <button type="button" id="next" class="btn btn-primary btn-lg my-button">下一步</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        document.querySelector('#next').addEventListener('click', function() {
            var pay = document.querySelector('input[name="pay"]:checked')
            var ship = document.querySelector('input[name="ship"]:checked')
            console.log(pay, ship);
            if (pay && ship) {
                document.querySelector('#payment').submit();
            } else {
                alert('請先選付款及運送方式')
            }
        })
    </script>
@endsection
