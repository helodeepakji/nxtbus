<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\contactcontrol;
use App\Http\controllers\logincontrol;
use App\Http\controllers\seatcontroler;
use App\Http\controllers\payment;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/buslist', function (Request $request) {
    $src = $request->srce;
    $date = $request->date;
    $desc = $request->destination;
    $data = compact("src","date","desc");
    return view('buslist')->with($data);
});

Route::post('/payment', [payment::class,'savedata']);

Route::post('/paymentstatus', [payment::class,'checkstatus']);

Route::get('/paymentstatus/{order_id?}',function ($order_id) {
    if ((!session('username'))&&(!session('logined'))) {
        return redirect('/login');
    }else{
        $username = session('username');
        $data = DB::select("SELECT * from `booking` WHERE `order_id` = '$order_id' AND `username` = '$username'");
        if ($data) {
            $data = compact('data');
            return view('bill')->with($data);             
        }else{
            return redirect('/login');
        }
    }
});



Route::get('/busbooking', function () {
    if ((!session('username'))&&(!session('logined'))) {
        return redirect('/login');
    }else{
        $username = session('username');
        $data = DB::select("SELECT * from `booking` WHERE `username` = '$username' ORDER BY `booking`.`sno` DESC");
        $data = compact('data');
        return view('busbooking')->with($data);             
    }
});



Route::post('/booking', [seatcontroler::class,'checksrc']);

Route::get('/seatselect', [seatcontroler::class,'source']);

Route::get('/contact',[contactcontrol::class,'contact']);

Route::post('/contact',[contactcontrol::class,'subcontact']);

Route::get('/login',[logincontrol::class,'open']);

Route::post('/login',[logincontrol::class,'login']);

Route::get('/signin',[logincontrol::class,'signin']);

Route::post('/signin',[logincontrol::class,'savedata']);

Route::get('/profile',function(){
    echo session('username');
    echo session('logined');
});

Route::get('/logout',function(){
    session()->forget('username');
    session()->forget('logined');
    return redirect('/');
});


Route::get('/glogin',[logincontrol::class,'glogin']);


Route::get('/callback',[logincontrol::class,'callbackHandel']);


