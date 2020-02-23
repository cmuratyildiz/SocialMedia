<?php

namespace App\Http\Controllers;

use App\Shares;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\User;

class FriendsController extends Controller
{
    public function friendsProfile($nickname)
    {
        $user_id      = User::where('nickname', $nickname)->first()->id;
        $userDetails  = User::where('id', $user_id)->first();

        $friends      = User::where('nickname',$nickname)->get();

//        $FriendShares = DB::table('shares')
//            ->join('users', 'users.id', '=', 'shares.user_id')
//            ->join('categories', 'categories.id', '=', 'shares.category')
//            ->join('user_details', 'user_details.user_id', '=', 'users.id')
//            ->join('citys', 'citys.code', '=', 'user_details.city')
//            /*->join('friends','friends.id','=','user.id')*/
//            ->where('users.id', '=', $user_id)
//            ->orderBy('shares.id', 'desc')
//            ->get();

        $FriendShares = Shares::with('user')->where('user_id',$user_id)->get();
        return view('friends', compact('friends', 'userDetails','FriendShares'));
    }

    public function Message(Request $request, $user_id){

        request()->validate([
            'message'  => 'required',
        ]);
        DB::table('comments')->insert([
            'sender'   => Auth::user()->id,
            'receiver' => $user_id,
            'content'  => $request->message,
            'date'     => Carbon::now()

            ]);
        Alert::toast('Mesajınız başarıyla gönderildi..')->animation('tada faster','fadeIn')->timerProgressBar();
        return redirect()->route('home');
    }
}
