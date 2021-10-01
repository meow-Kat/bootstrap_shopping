<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // function 只能有特定名稱判斷身分驗證，這隻程式在 22 行裡面的 sendLoginResponse() (47 行) 在連過去 redirectPath() (116 行)
    public function redirectTo()
    {
        // 撈出 login 後的當前身分
        $role = Auth::user()->role ?? null ;
        if ($role == 'admin') {
            return '/admin';
        }elseif($role == 'user'){
            return '/';
        }else{
            return '/login';
        }
    }
}
