@extends('layout.template')

@section('title','Shopping - Step 2')

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
                        <div class="col">
                            <div class="row">
                                <div class="col py-3">
                                    <h4 class="py-3">付款方式</h4>
                                    <div class="row">
                                        <div class="col d-flex align-items-center px-4">
                                            <input type="radio" name="pay" id="" class="cb-size">
                                            <h5 class="p-2">信用卡付款</h5>
                                        </div>
                                    </div>
                                    <hr class="featurette-divider">
                                    <div class="row">
                                        <div class="col d-flex align-items-center px-4">
                                            <input type="radio" name="pay" id="" class="cb-size">
                                            <h5 class="p-2">
                                                網路 ATM</h5>
                                        </div>
                                    </div>
                                    <hr class="featurette-divider">
                                    <div class="row">
                                        <div class="col d-flex align-items-center px-4">
                                            <input type="radio" name="pay" id="" class="cb-size">
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
                                            <input type="radio" name="pay" id="" class="cb-size">
                                            <h5 class="p-2">黑貓宅配</h5>
                                        </div>
                                    </div>
                                    <hr class="featurette-divider">
                                    <div class="row">
                                        <div class="col d-flex align-items-center px-4">
                                            <input type="radio" name="pay" id="" class="cb-size">
                                            <h5 class="p-2">
                                                超商店到店</h5>
                                        </div>
                                    </div>
                                    <hr class="featurette-divider">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="col-3 ml-auto">
                            <div class="totle d-flex justify-content-between">
                                <h5 class="color-grey">數量：</h5>
                                <h5>3</h5>
                            </div>
                            <div class="totle d-flex justify-content-between">
                                <h5 class="color-grey">小計：</h5>
                                <h5>$3800</h5>
                            </div>
                            <div class="totle d-flex justify-content-between">
                                <h5 class="color-grey">運費：</h5>
                                <h5>$60</h5>
                            </div>
                            <div class="totle d-flex justify-content-between">
                                <h5 class="color-grey">總計：</h5>
                                <h5>$99999</h5>
                            </div>
                        </div>
                    </div>

                    <hr class="featurette-divider">
                    <!-- 上/下一步 -->
                    <div class="row">
                        <div class="col d-flex justify-content-between align-items-center">
                            <a href="{{ asset('/shopping-1') }}"><button type="button" class="btn btn-outline-primary btn-lg my-button">上一步</button></a>
                            <a href="{{ asset('/shopping-3') }}"><button type="button" class="btn btn-primary btn-lg my-button">下一步</button></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection







