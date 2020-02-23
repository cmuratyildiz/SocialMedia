<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function Login()
    {
        return view('login');
    }
    /*public  function PostLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            return redirect()->intended(route('home'));


        }
        else{
            return redirect()->route('login')->withErrors('email yada şifre hatalı');
        }
    }*/
    public function PostLogin(Request $request)
    {
        request()->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
        {
            Alert::toast('Hoşgeldiniz, keyifli vakitler..')->animation('tada faster','fadeIn')->width('300px');
            return redirect()->intended(route('home'));
        }
        return Redirect::to("login")->with('warning', 'Başarısız şifre denemesi, Lütfen tekrar deneyin...');
    }
    public function Logout()
    {
        Auth::logout();
        return Redirect::to("login")->with('success', 'Başarıyla çıkış yapıldı!');
    }
    public function Register(Request $request){

        request()->validate([
            'name'             => 'required',
            'lastname'         => 'required',
            'email'            => 'required',
            'password'         => 'required',
            'repeat-password'  => 'required',
            'select_file'      => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if (request('password') && request('repeat-password'))
        {
            $new_pass = bcrypt($request->password);
        }
        else
        {
            return Redirect::to('login');
        }
        $image = $request->file('select_file');
        $new_name = rand() .'.'. $image->getClientOriginalExtension();
        $image->move(public_path("avatar"), $new_name);

        $type = 0;
        DB::table('users')
            ->insert([

                'name'     => $request->name,
                'lastname' => $request->lastname,
                'nickname' => $request->name."-".rand(1,9999),
                'email'    => $request->email,
                'password' => $new_pass,
                'type'     => $type,
                'status'   => 1,
                'photo'    => $new_name
            ]);

        Alert::toast('Başarıyla kayıt oldunuz.')->animation('tada faster','fadeIn')->timerProgressBar();
        return Redirect::to('login');
    }
    /*public function Register(){

        if (Input::get()){

            $name  = Input::get('name');
            $mail  = Input::get('mail');
            $photo = "";
            $city  = Input::get('city');
            $pass  = Input::get('password');
            $rpass = Input::get('repeat-password');
            $rules = Input::get('cc');

            if ($pass == $rpass){
                $newpass=bcrypt($pass);
            }
            if (empty($photo)){
                $photo="images/resources/user-pro-img.png";
            }
            if (empty($rules)){
                $rules=0;
            }
            else{
                $rules=1;
            }

            DB::table('users')
                ->insert([


                    'name'=>$name,
                    'nickname'=>$name,
                    'photo'=>$photo,
                    'email'=>$mail,
                    'city'=>$city,
                    'password'=>$newpass,
                    'rules'=>$rules

                ]);
            return redirect()->route('login');
        }
        else{
            return redirect()->route('login')->withErrors('Eksiksiz doldurunuz!');
        }
    }*/
}
