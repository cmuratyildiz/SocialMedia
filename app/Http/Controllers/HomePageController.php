<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Shares;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use RealRashid\SweetAlert\Facades\Alert;

class HomePageController extends Controller
{
    public function index()
    {
        $userDetails =  User::where('id', Auth::user()->id)->first();
        $shares      =  Shares::with('comments')
            ->where('status', 1)
            ->orderByDesc('date')
            ->get();
        $random      =  User::where('status', '=', 1)->get()->random(6);
        return view('home',compact('shares', 'random', 'userDetails'));
    }

    public function NewsPost(Request $request){

        request()->validate([
            'title'        => 'required',
            'category'     => 'required',
            'tag'          => 'required',
            'description'  => 'required',
        ]);
            $status      = 1;
            DB::table('shares')
                ->insert([
                    'user_id'     => Auth::user()->id,
                    'title'       => $request->title,
                    'category'    => $request->category,
                    'tags'        => $request->tag,
                    'description' => $request->description,
                    'status'      => $status,
                    'date'        => Carbon::now()
                ]);
        Alert::toast('Gönderiniz paylaşıldı..')->animation('tada faster','fadeIn')->timerProgressBar()->position('top-start');
            return redirect()->route('home');
        }


    public function addComment (Request $request)
        {
            $comment = new Comment;
            $comment->shares_id = request('shares_id');
            $comment->user_id   = Auth::user()->id;
            $comment->comment   = request('comment');
            $comment->date      = Carbon::now();
            $comment->save();
            Alert::toast('Yorumunuz paylaşıldı..')->animation('tada faster','fadeIn')->timerProgressBar()->position('top-start');
            return redirect()->route('home');
        }

}
