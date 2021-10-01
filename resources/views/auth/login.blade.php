@extends('layout.template')

@section('title', 'login')

@section('css')
    <link rel="stylesheet" href="./css/login.css">
    <style>
        nav{
            display: none !important;
        }
        footer{
            display: none;
        }
    </style>
@endsection



@section('main')
    <div class="row no-gutters">
        <div class="col">
            <div class="back-img position-absolute"></div>
            <div class="mask position-relative">
                <div class="row no-gutters">
                        <div class="col-6 left d-none d-lg-flex justify-content-center flex-column px-5 ">
                            <h1>Keep it special</h1>
                            <p>Capture your personal memory in unique way, anywhere.</p>
                        </div>
                            <div class="left-bottom text-center d-lg-block">
                                <i class="fab fa-twitter font-icon"></i>
                                <i class="fab fa-facebook-f mx-4 font-icon"></i>
                                <i class="fab fa-instagram font-icon"></i>
                            </div>

                    <div class="col-12 col-lg-6">
                        <div class="back-spec d-lg-block"></div>
                        <div class="right">
                            <div class="log-in">
                                <div class="logo">
                                    <div class="log-pic"></div>
                                    <h5 class="log-text text-center">數位方塊</h5>
                                </div>
                                <div class="links text-center my-4">
                                    <i class="fab fa-facebook-f link"></i>
                                    <i class="fab fa-google-plus-g link mx-2"></i>
                                    <i class="fab fa-linkedin-in link"></i>
                                </div>
                                <div class="text-center"><span>or use email your account</span></div>
                                <form class="py-3" method="POST" action="{{ route('login') }}" id="login">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="請輸入 Email 帳號" value="{{ old('email') }}" required autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="請輸入密碼" required name="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <a class="text-right" href="{{ route('password.request') }}"><span>{{ __('Forgot Your Password?') }}</span></a>
                                </form>
                                <button type="submit" class="btn btn-primary btn-lg w-100 my-botton">{{ __('Login') }}</button>

                                <div class="left-bottom-1 text-center my-5 d-lg-none">
                                    <i class="fab fa-twitter font-icon"></i>
                                    <i class="fab fa-facebook-f mx-4 font-icon"></i>
                                    <i class="fab fa-instagram font-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






@section('js')
    <script>
        let btn = document.querySelector('.my-botton')
        let form = document.querySelector('#login')
        btn.addEventListener('click',function () {
            form.submit()
        })
    </script>
@endsection
