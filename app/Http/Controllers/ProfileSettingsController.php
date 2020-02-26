<?php

namespace App\Http\Controllers;

use App\User;
use Monolog\Handler\SyslogUdp\UdpSocket;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProfileSettingsController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $user    = User::where('id','=',$user_id)->get();
        return view('profile-settings',compact('user'));
    }

    public function Account(Request $request)
    {
        $request->validate([
            'nickname'    => 'required',
            'email'       => 'required',
            'name'        => 'required',
            'lastname'    => 'required',
            'telephone'   => 'required|max:11',
            'select_file' => 'required',

        ]);

        DB::table('users')
            ->where('id','=',Auth::user()->id)
            ->update([
            'nickname'  => $request->nickname,
            'email'     => $request->email,
            'name'      => $request->name,
            'lastname'  => $request->lastname,
            'telephone' => $request->telephone,
            'photo'     => $request->select_file
        ]);
        Alert::toast('Profil bilgileriniz başarıyla güncellenmiştir..')->animation('tada faster', 'fadeIn');
        return redirect()->route('profile-settings')->withSuccess(['Kayıt Başarılı!']);
    }

    public function ResetPassword(Request $request)
    {
        $oldpass     = Input::get('oldpass');
        $newpass     = Input::get('newpass');
        $repeatpass  = Input::get('repeatpass');
        $id          = Input::get('id');

        if ($newpass == $repeatpass)
        {
            $updatepass = bcrypt($repeatpass);
        }
        else{
            echo 'Şifreler yanlış';
        }

        DB::table('users')
            ->where('id','=',$id)
            ->update([
                'password' => $updatepass
            ]);
        Alert::toast('Şifreniz başarıyla güncellenmiştir..')->animation('tada faster', 'fadeIn');
        Auth::logout();
        return redirect()->route('profile-settings')->withSuccess(['Kayıt Başarılı!']);
    }

    public function DeactiveAccount()
        {
            if (Input::post())
            {
                $email      = Input::get('email');
                $pass       = Input::get('password');
                $iduser     = Input::get('iduser');
                $status     = 0;

                DB::table('users')
                    ->where('id', '=', $iduser)
                    ->update([
                        'status' => $status
                    ]);
                Alert::toast('Hesabınız dondurulmuştur.')->animation('tada faster', 'fadeIn')->timerProgressBar();
                return redirect()->route('logout');

            }
            else{
                return redirect()->route('profile-settings')->withErrors('Eksiksiz doldurunuz!');
            }
        }
}
