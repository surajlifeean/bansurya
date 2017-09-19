<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Contactus;

class ContactusController extends Controller
{
    public function store(Request $request)
    {
        
    	
        $this->validate($request,array(

        
            'email'=>'required',

            'message'=>'required',
            ));

        $contact=new Contactus;

        $contact->email=$request->email;

        $contact->message=$request->message;

        $contact->save();
        


    	return redirect()->back()->with('message', 'Your Query Is Submited!');


    }

}
