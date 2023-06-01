<?php

namespace App\Http\Controllers;
use App\Models\user;
use DB;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class logincontrol extends Controller
{
    public function open()
    {   
        if ((session('username'))&&(session('logined'))) {
            return redirect()->back();
        }else{
            return view('login');
        }
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );

        $user = user::where('username','=',$request->username)->first();
        if ($user) {
            if ($user->password == $request->password) {
                session()->put('username',$request->username);
                session()->put('logined',true);
                return redirect($request->redirect_url) ;
                echo "success";
            }else{
                $err = "Password is missmatch";
                $err = compact('err');
                return view('login')->with($err);
            }
        }else{
            $err = "User is not aviable please singn up";
            $err = compact('err');
            return view('login')->with($err);
        }
        
        $session = session()->all();

        echo "<pre>";
        print_r($request->all());
        print_r($session);
    }

    public function signin(){
        if ((session('username'))&&(session('logined'))) {
            return redirect()->back();
        }else{
            return view('signin');
        }
    }
    
    public function savedata(Request $request){
        $user = DB::select("SELECT * FROM `users` WHERE `username` = '$request->username' OR `email` = '$request->email' OR `phone` = '$request->phone'");
        if ($user) {
            $err = "user is allready exist";
            $err = compact('err');
            return view('signin')->with($err);
        }else{
            echo "<pre>";
            print_r($request->all());
            print_r($user);

            $user = new user();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = $request->password;
            $res = $user->save();
            if ($res) {
                session()->put('username',$request->username);
                session()->put('logined',true);
                return redirect($request->redirect_url) ;
            }
        }
    }

    public function glogin(){
        echo "helodeepakji";
        return Socialite::driver('google')->redirect();
    }

    public function callbackHandel(){
        $user = Socialite::driver('google')->user(); 
        $user = $user->user;
        echo "<pre>";
        print_r($user);
        echo "</pre>";
        if ($user['verified_email']) {
            echo "success";
            $username = substr($user['email'],0,strpos($user['email'],"@"));
            $email = $user['email'];
            $exdata = DB::select("SELECT * FROM `users` WHERE `username` = '$username' OR `email` = '$email'");
            if ($exdata) {
                session()->put('username',$exdata[0]->username);
                session()->put('logined',true);
                return redirect()->back();
            }else{
                $data = new user();
                $data->name = $user['name'];
                $data->username = $username;
                $data->phone = "";
                $data->email = $user['email'];
                $data->password = $user['id'];
                $res = $data->save();
                if ($res) {
                    session()->put('username',$username);
                    session()->put('logined',true);
                    return redirect()->back();
                }
            }

        }
    }
}