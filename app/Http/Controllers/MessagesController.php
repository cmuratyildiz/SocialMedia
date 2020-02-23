<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function Messages(){

        $user_id     =  Auth::user()->id;
        $AllMessages =  DB::table('users')
            ->join('messages', 'messages.sender', '=', 'users.id')
            ->where('messages.receiver', '=', $user_id)
            ->get();

        /*$cek=Message::with('user')->where('id', '=' ,$user_id)->get();*/
        if ($AllMessages->count()<1){
            Alert::toast('Gösterilecek meseaj yok..')->animation('tada faster','fadeIn')->timerProgressBar();

        }
        return view('messages', compact('messages', 'AllMessages'));
    }

}
