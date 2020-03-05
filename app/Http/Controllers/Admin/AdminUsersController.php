<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminUsersController extends Controller
{
    public function total_user(){
        $total_user_info = User::all();
        return view('backend.AdminUsersTable',compact('total_user_info'));
    }
    public function user_info($id)
    {
        $user_details=User::where('id', '=',$id)->first();
        return view('backend.AdminUsersTableUpdate',compact('user_details'));
    }
    public function user_update(Request $request){
        if ($request->isMethod('post')){
            $request->validate([
                'name'        => 'required',
                'lastname'    => 'required',
                'telephone'   => 'required|max:11',
                'nickname'    => 'required',
                'email'       => 'required',
                'photo'       => 'required',
                'password'    => 'required',
            ]);

            DB::table('users')
                ->where('id','=',$request->id)
                ->update([
                    'name'        => $request->name,
                    'lastname'    => $request->lastname,
                    'telephone'   => $request->telephone,
                    'nickname'    => $request->nickname,
                    'email'       => $request->email,
                    'photo'       => $request->select_file,
                    'password'    => bcrypt($request->password),
                ]);
            Alert::toast('Profil bilgileriniz başarıyla güncellenmiştir..')->animation('tada faster', 'fadeIn');
            return redirect()->route('admin.users')->withSuccess(['Kayıt Başarılı!']);
            }
        }

    public function user_destory($id)
    {
        $delete_user= User::where('id', '=', $id)->delete();
        return redirect()->route('admin.users')->with('success','ßaşarıyla Silindi');
    }


}
