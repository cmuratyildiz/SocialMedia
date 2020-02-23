<?php

namespace App\Http\Controllers;

use App\Shares;
use App\User;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{
    public function index(){

       /* $shares = DB::table('shares')
            ->join('users', 'users.id', '=', 'shares.user_id')
            ->join('user_details', 'user_details.user_id', '=', 'users.id')
            ->where('users.id', '=', Auth::user()->id)
            ->orderBy('shares.id', 'desc')
            ->get();*/

        $userDetails = User::where('id', Auth::user()->id)->first();
        $shares      = Shares::with('comments')
            ->where('user_id',Auth::user()->id)
            ->where('status',1)
            ->orderByDesc('date')
            ->get();


        return view('profile', compact('shares','userDetails'));
    }

    public function updatePost(Request $request){//burda kaldım

        request()->validate([
            'title'        => 'required',
            'description'  => 'required'

        ]);
        DB::table('shares')
            ->where('shares.id','=',$request->id)
            ->update([
                'title'       => $request->title,
                'description' => $request->description,
            ]);
        Alert::toast('Durumunuz güncellendi.')->animation('tada faster','fadeIn')->timerProgressBar()->position('top-start');
        return redirect()->route('profile');

    }
    public function deletePost($id){

        Shares::find($id)->delete($id);

        return response()->json([
            'success' => 'Başarıyla silindi!'
        ]);
    }
    public function sharePost(Request $request){

        $data = $request->all();

    }
    public function hidePost(Request $request){

        $data = $request->all();

    }



}
