<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactcontrol extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function subcontact(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        $contact = new contact;
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->password = md5($request['password']);
        $contact->save();
        $contact = contact::all();
        echo "<pre>";
        print_r($contact->toArray());
    }

}
