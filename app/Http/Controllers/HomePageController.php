<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Likes;
use App\Shares;
use App\User;
use Carbon\Carbon;
use Illuminate\Auth\SessionGuard;
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

    public function viewPost($id){
        $userDetails =  User::where('id', Auth::user()->id)->first();
        $random      =  User::where('status', '=', 1)->get()->random(6);
        $shares      =  Shares::with('comments')
            ->where('status', 1)
            ->where('id','=', $id)
            ->get();
        $likepost  = Shares::find($id);
        $likeCtr = Likes::where(['post_id' => $likepost->id])->count();
        return view('singlePost',compact('shares','userDetails','random','likeCtr'));
    }

    public function like($id){

        $loggedin_user = Auth::user()->id;
        $like_user     = Likes::where([ 'user_id' => $loggedin_user, 'post_id' => $id ])->first();
        if (empty($like_user->user_id)){
            $user_id = Auth::user()->id;
            $email   = Auth::user()->email;
            $post_id = $id;
            $like = new Likes();
            $like->user_id = $user_id;
            $like->email   = $email;
            $like->post_id = $post_id;
            $like->save();
            return redirect()->route('home')->with('success', 'Gönderiyi beğendiniz..');
        }
        else{
            return redirect()->route('home')->with('warning', 'bu gönderiyi daha önceden beğendiniz.');
        }
    }

}
