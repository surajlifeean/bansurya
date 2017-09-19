<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;


use App\Subcategory;


use App\Profileimage;

use Auth;


use App\Address;

use Session;
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $image=Profileimage::where('user_id','=',Auth::user()->id)->first();

        $category=Category::all();
    $Subcategory=Subcategory::all();

        return view('account.address')->withCategory($category)->withSubcategory($Subcategory)->withImagedet($image);
    
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
        // dd($request);

        $this->validate($request,array(

        
            'name'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'city'=>'required',
            'region'=>'required',
            'pcode'=>'required',
            
            ));

        $address=new Address;

        $address->name=$request->name;
        $address->address1=$request->address1;
        $address->address2=$request->address2;
        $address->city=$request->city;
        $address->region=$request->region;
        $address->pcode=$request->pcode;
        $address->user_id=Auth::user()->id;

        $address->save();


           Session::flash('success','Your Address is updated!');

        return redirect()->route('address.index');

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
