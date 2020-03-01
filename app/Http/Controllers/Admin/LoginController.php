<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('backend.AdminLogin');
    }
    public function AdminLogin(Request $request){
         if ($request->isMethod('post')){
             $data = $request->all();
             if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
                 $admin = Admin::where('email', '=', $data['email'])->first();
                 if ($admin->status == 1){
                     Alert::toast('Hoşgeldiniz, Admin ßey..')->animation('tada faster', 'fadeIn')->width('300px');
                     return redirect()->route('admin.home');
                 }
             }
         }
    }
}
