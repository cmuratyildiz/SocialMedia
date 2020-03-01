<?php

namespace App\Http\Controllers;

use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function Login()
    {
        return view('login');
    }

    public function PostLogin(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                $user = User::where('email', $data['email'])->first();
                if ($user->status == 1) {

                    if ($user->type == 1){
                        Alert::toast('Hoşgeldiniz, Admin ßey..')->animation('tada faster', 'fadeIn')->width('300px');
                        return redirect()->intended(route('home'));
                    }
                    else
                    {
                        Alert::toast('Hoşgeldiniz, Admin ßey..')->animation('tada faster', 'fadeIn')->width('300px');
                        return redirect()->intended(route('home'));
                    }
                }
                else{
                    return redirect()->route('login')->with('info', 'Hesap aktif değil!');
                }
            } else {
                return redirect()->back()->with('info', 'Bilgileriniz uyuşmadı tekrar deneyiniz!');
            }
        }
    }

    public function Logout()
    {
        Auth::logout();
        return Redirect::to("login")->with('success', 'Başarıyla çıkış yapıldı!');
    }

    public function Register(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $usersCount = User::where('email', $data['email'])->count();
            if ($usersCount > 0) {
                return redirect()->back()->with('warning', 'Email adresi kayıtlı!');
            } else {
                $image = $data['select_file'];
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path("avatar"), $new_name);

                if ($data['password'] && $data['repeat-password']){
                    $newpassword = $data['password'];
                }
                $type = 0;
                $user = new User;
                $user->name     = $data['name'];
                $user->lastname = $data['lastname'];
                $user->nickname = $data['name']. "-". rand(1,9999);
                $user->email    = $data['email'];
                $user->password = bcrypt($newpassword);
                $user->type     = $type;
                $user->status   = 1;
                $user->photo    = $new_name;
                $user->save();

                // Send Register Email
                $email = $data['email'];
                $messageData = ['email'=>$data['email'],'name'=>$data['name']];
                Mail::send('emails.register',$messageData,function($message) use($email){
                    $message->to($email)->subject('Registration with E-com Website');
                });

//                // Send Confirmation Email
//                $email = $data['email'];
//                $messageData = ['email' => $data['email'], 'name' => $data['name'], 'code' => base64_encode($data['email'])];
//                Mail::send('emails.confirmation', $messageData, function ($message) use ($email) {
//                    $message->to($email)->subject('Confirm your E-com Account');
//                });

                return redirect()->back()->with('success', 'Başarıyla kayıt oldunuz!');

            }
        }
    }

    public function Forgot(Request $request){
        if ($request->isMethod('post')){
            $data = $request->all();
            $userCount = User::where('email','=',$data['email'])->count();

            if ($userCount>0){
                echo "kayıt var";
            }
            else{
                echo "kayıt yok";
            }
        }
        return view('forgot');
    }

    public function ForgottenPassword(Request $request){
        if ($request->isMethod('post')){
            $data = $request->all();
            $userCount = User::where('email','=',$data['email'])->count();

            if ($userCount>0){
                echo "kayıt var";
            }
            else{
                echo "kayıt yok";
            }
        }
    } // burda kaldım
}
