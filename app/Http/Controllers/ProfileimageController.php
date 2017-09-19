<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Profileimage;
class ProfileimageController extends Controller
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



        $imgc=Profileimage::select('id')->where('user_id','=',Auth::user()->id)->first();

        if(count($imgc)==0){

            $img=new Profileimage;
}
        else{

            $img=Profileimage::find($imgc->id);           
        }


        if($request->hasFile('pp')){


        $image=$request->file('pp');

        $filename=time().'.'.$image->getClientOriginalExtension();


         $location=public_path('images/'.$filename);


         move_uploaded_file($_FILES["pp"]["tmp_name"], $location);




            $img->image=$filename;

            $img->user_id=Auth::user()->id;

            $img->save();
       

           
        }


        return redirect()->back()->with('success', 'Your Profile Pic Is Changed!');



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
