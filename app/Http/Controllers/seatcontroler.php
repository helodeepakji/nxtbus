<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class seatcontroler extends Controller
{
    public function source(Request $request)
    {
        if ((!session('username'))&&(!session('logined'))) {
            return redirect('/login');
        }else{
            
            $source = DB::select("Select * FROM `city` WHERE city_name = '$request->src'");
            $destination = DB::select("Select * FROM `city` WHERE city_name = '$request->des'");
            
            $date = $request->date;
            $busid = $request->busid;
            $src = $request->src;
            $des = $request->des;
            $source1 = $source[0]->source1;
            $source2 = $source[0]->source2;
            $destination1 = $destination[0]->source1;
            $destination2 = $destination[0]->source2;

            $data = compact('src','des','source1','source2','destination1','destination2','busid','date');
            return view('seatselect')->with($data);
        } 
    }

    protected function checksrc(Request $request)
    {
        if ((!session('username'))&&(!session('logined'))) {
            return redirect('/login');
        }else{
            $request->validate(
                [
                    'seat_list' => 'required',
                    'bpoint' => 'required',
                    'dpoint' => 'required',
                    'busid' => 'required'
                    ]
                );
                
                $data = compact('request');
                return view('booking')->with($data);
            }
        }

}
