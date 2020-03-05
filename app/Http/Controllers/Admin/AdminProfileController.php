<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function index(){
        $user_id = Auth::guard('admin')->user()->id;
        $admin   = Admin::where('id', '=',$user_id)->first();
        return view('backend.AdminProfile',compact('admin'));
    }
}
