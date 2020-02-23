<?php

namespace App\Http\Controllers;

use Egulias\EmailValidator\Validation\Error\RFCWarnings;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
   /* public function Register(Request $request){


        request()->validate([
            'nickname'         => 'required',
            'email'            => 'required|email|unique:users',
            'password'         => 'required',
            'repeat-password'  => 'required',
        ]);
        if (request('password') && request('repeat-password'))
        {
            $new_pass=bcrypt($request->password);
        }
        else
        {
            return redirect()->route('login');
        }
            DB::table('users')
                ->insert([
                
                    'nickname' => $request->nickname,
                    'email'    => $request->email,
                    'password' => $new_pass,
                    'status'   => 1
                ]);
        Alert::toast('Başarıyla kayıt oldunuz.')->animation('tada faster','fadeIn')->timerProgressBar();
        return redirect()->route('login');

        }
    /*public function postRegistration(Request $request)
    {
        request()->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();

        $check = $this->create($data);

        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }*/
}
