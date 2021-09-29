@extends('layout.template')

@section('title', 'Shopping - Step 3')

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
                                    <div class="my-item my-shopped">2</div>
                                    <p class="my-text-size-p">付款與運送方式</p>
                                </div>
                                <div class="col">
                                    <div class="my-item my-shopping">3</div>
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
                        <div class="col">
                            <div class="row">
                                <div class="col py-3">
                                    <h4 class="py-3">寄送資料</h4>
                                    <form id="addressDetail" class="p-2" action="" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="shopping-name">姓名</label>
                                            <input type="text" class="form-control" id="shopping-name" placeholder="王曉明"
                                                name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone-number">電話</label>
                                            <input type="number" class="form-control" id="phone-number"
                                                placeholder="0912345678" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="shopping-email">E-mail</label>
                                            <input type="email" class="form-control" id="shopping-email"
                                                placeholder="abc@gmail.com" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="shopping-address">地址</label>
                                            <div class="row pb-2 city-selector-set">
                                                <div class="col-4">
                                                    <select class="county form-control"></select>
                                                </div>
                                                <div class="col-4">
                                                    <select class="district form-control"></select>
                                                </div>
                                                <div class="col-4">
                                                    <input class="zipcode form-control" type="text" size="3" readonly
                                                        placeholder="郵遞區號">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control pr-1" id="shopping-address"
                                                placeholder="鄉鎮路巷樓號" name="address">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <hr class="featurette-divider">

                            <div class="row py-3">
                                <div class="col-3 ml-auto">
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
                                    <a href="{{ asset('/shopping-3') }}"
                                        class="btn btn-outline-primary btn-lg my-button">上一步</a>
                                    <button type="button" class="btn btn-primary btn-lg my-button" id="next">前往付款</button>

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
            document.querySelector('#addressDetail').submit();
        }
    </script>
    <script src="{{ asset('js/tw-city-selector.js') }}"></script>
    <script>
        new TwCitySelector({
            el: '.city-selector-set',
            elCounty: '.county', // 在 el 裡查找 element
            elDistrict: '.district', // 在 el 裡查找 element
            elZipcode: '.zipcode' // 在 el 裡查找 element
        });
    </script>
@endsection
