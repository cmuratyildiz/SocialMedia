<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Citys;
use App\Pages;
use App\Shares;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {

        $categories  = Categories::where('status', 1)->get();//homeblade category select
        $citys       = Citys::where('status', 1)->get();
        $suggestions = User::orderBy('id','desc')->where('status',1)->get();//yeni kayit olanlar
        $page        = Pages::with('children')->where('parent_id', 0)->get()->take(8);//menu


        view()->share(['categories' => $categories, 'citys' => $citys, 'suggestions' => $suggestions, 'page'=>$page]);

    }
}
