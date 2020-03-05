<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminLoginController extends Controller
{
//    protected $guard = 'admin';
////    protected $redirectTo = '/admin';
////
////    public function __construct()
////
////    {
////        $this->middleware('guest')->except('admin.logout');
////    }

    public function index(){
        return view('backend.AdminLogin');
    }
    public function AdminLogin(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            Alert::toast('Hoşgeldiniz');
            return redirect()->route('admin.home');
        }
        return redirect()->route('admin.login')->with('warning','hatalı giriş denemesi');

    }
    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
