@section('css')
    <link rel="stylesheet" href="./css/shop.css">
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
                                    <div class="my-item text-center my-shopped">1</div>
                                    <p class="my-text-size-p">確認購物車</p>
                                </div>
                                <div class="col">
                                    <div class="my-item my-shopped">2</div>
                                    <p class="my-text-size-p">付款與運送方式</p>
                                </div>
                                <div class="col">
                                    <div class="my-item my-shopped">3</div>
                                    <p class="my-text-size-p">填寫資料</p>
                                </div>
                                <div class="col">
                                    <div class="my-item-last my-shopped-last">4</div>
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
                                    <h1 class="text-center">訂單成立</h1>
                                    <h4>訂單明細</h4>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col d-flex align-items-center">
                                    <div class="pic-1"></div>
                                    <div class="text px-3">
                                        <P>耿鬼</P>
                                        <span class="text-color-grey">#aaaa</span>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <div class="my-order d-flex align-items-center">
                                        <div class="my-order-num">
                                            <span>x</span>
                                            <span>1</span>
                                        </div>
                                        <p class="my-order-price px-4">$999</p>
                                    </div>

                                </div>
                            </div>

                            <hr class="featurette-divider">

                            <div class="row py-2">
                                <div class="col d-flex align-items-center">
                                    <div class="pic-1"></div>
                                    <div class="text px-3">
                                        <P>耿鬼</P>
                                        <span class="text-color-grey">#aaaa</span>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <div class="my-order d-flex align-items-center">
                                        <div class="my-order-num">
                                            <span>x</span>
                                            <span>1</span>
                                        </div>
                                        <p class="my-order-price px-4">$999</p>
                                    </div>

                                </div>
                            </div>

                            <hr class="featurette-divider">

                            <div class="row py-2">
                                <div class="col d-flex align-items-center">
                                    <div class="pic-1"></div>
                                    <div class="text px-3">
                                        <P>耿鬼</P>
                                        <span class="text-color-grey">#aaaa</span>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <div class="my-order d-flex align-items-center">
                                        <div class="my-order-num">
                                            <span>x</span>
                                            <span>1</span>
                                        </div>
                                        <p class="my-order-price px-4">$999</p>
                                    </div>

                                </div>
                            </div>

                            <hr class="featurette-divider">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col py-3">
                                    <h4>寄送資料</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex py-3">
                                        <h5 class="information">姓名</h5>
                                        <h5>貓貓</h5>
                                    </div>
                                    <div class="d-flex py-3">
                                        <h5 class="information">電話</h5>
                                        <h5>0912345678</h5>
                                    </div>
                                    <div class="d-flex py-3">
                                        <h5 class="information">Email</h5>
                                        <h5>abc@gmail.com</h5>
                                    </div>
                                    <div class="d-flex py-3">
                                        <h5 class="information">地址</h5>
                                        <h5>409 台中市小鎮村英雄路1號</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- 計算 -->
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
                            <span class="d-flex align-items-center">
                            </span>
                            <a href="./index.html"><button type="button" class="btn btn-primary btn-lg my-button">返回首頁</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


