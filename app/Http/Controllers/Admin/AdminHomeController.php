<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Shares;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function index(){

        $total_users        = User::all()->count();
        $today_created_user = User::whereDate('date',Carbon::today())->get()->count();
        $last_shares        = Shares::where('status', '=', 1)->get()->take(10);
        $total_shares       = Shares::all()->count();
        $total_categories   = Categories::all()->count();
        return view('backend.AdminHome',compact('total_users','today_created_user','last_shares','total_shares','total_categories'));
    }
}
