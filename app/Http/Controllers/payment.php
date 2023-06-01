<?php

namespace App\Http\Controllers;
use App\Models\booking;
use DB;
use Mail;
use Illuminate\Http\Request;

class payment extends Controller
{
    public function savedata(Request $request)
    {
        if ((!session('username'))&&(!session('logined'))) {
            return redirect('/login');
        }else{
            $request->validate(
                [
                    'phone' => 'required',
                    'email' => 'required|email',
                    'bpoint' => 'required',
                    'dpoint' => 'required'
                    ]
                );
                
                $address = $request->area.', '.$request->city.', '.$request->state.', '.$request->country.', '.$request->pincode;
                $source = $request->bpoint.', '.$request->source;
                $destination = $request->dpoint.', '.$request->destination;
                
                $person = array(array());
                for ($i = 0; $i < $request->member; $i++) { 
                    $person[$i]['name'] = $request['name'.$i];
                    $person[$i]['age'] = $request['age'.$i];
                    $person[$i]['gender'] = $request['gender'.$i];
                    $person[$i]['seat'] = $request['seat'.$i];
                }
                
                $username = session('username');
                $Order_Id = rand(20000,99999); 
                $end = base64_encode(json_encode($person));
                
                $status = DB::insert("INSERT INTO `booking` ( `order_id`, `name`, `member`, `person`, `busid`, `booking_date`, `source`, `destination`, `email`, `phone`, `address`,`username`,`amount`,`payment_id`,`status`) VALUES ('BUS$Order_Id', '$request->name0', '$request->member', '$end', '$request->busid', '$request->jurdate', '$source', '$destination', '$request->email', '$request->phone', '$address','$username','','','');");
                
                $data = DB::select("SELECT * from `booking` WHERE `order_id` = 'BUS$Order_Id' AND `username` = '$username '");
                $data = compact('data');
                if($status){
                    return view('payment')->with($data);
                }else{
                    echo "Failed please contact us";
                }
            }
    }
            
    public function checkstatus(Request $request){
        if($request->razorpay_payment_id){
            $status = DB::insert("UPDATE `booking` SET `amount` = '$request->amount',`payment_id` = '$request->razorpay_payment_id',`status` = 'Success' WHERE `order_id` = '$request->orderid' AND `username` = '$request->username' AND `sno` = '$request->sno'");

            if($status){
                $data = DB::select("SELECT * from `booking` WHERE `order_id` = '$request->orderid' AND `username` = '$request->username'");
                $data = compact('data');
                $email = $data['data'][0]->email;
                Mail::send('layout.ticket',$data,function($messages) use ($email){
                    $messages->to($email);
                    $messages->subject('Thank You For Booking');
                });
                return view('bill')->with($data);           
            }

        }else{
            $status = DB::insert("UPDATE `booking` SET `amount` = '$request->amount', `status` = 'Failed' WHERE `order_id` = '$request->orderid' AND `username` = '$request->username' AND `sno` = '$request->sno'");
        }
    }
}
