<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Auth;

use App\User;

use App\Personalinfo;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $id=Auth::user()->id;

        $user=User::find($id);

        $user->name=$request->username;

        $user->mobile_number=$request->mobno;

        $user->save();

        $newsletter=Personalinfo::where('user_id','=',$id)->first();

        if(count($newsletter)==0){
           $newsletter=new Personalinfo;
 
            $newsletter->newsletter_sub=$request->newslettersub;
            $newsletter->user_id=$id;
            $newsletter->save();
        }
        else{

            $newsletter->newsletter_sub=$request->newslettersub;
            $newsletter->user_id=$id;
            $newsletter->save();

        }

        return redirect()->back()->with('success', 'Your Details Are Updated!');


     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
