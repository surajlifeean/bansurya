<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Address;

use Auth;

use Session;

use App\Category;

use App\Subcategory;

use App\cart;

class DeliveryaddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

          $category=Category::all();
          $Subcategory=Subcategory::all();
  
        if(Auth::user())
            $id=Auth::user()->id;
        else
            $id=session('guest_id');       

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
        $address->user_id=$id;

        $address->save();


           // Session::flash('success','Your Address is Added!');

    $cart=cart::select('id')->where('user_id','=',$id)->first();


    $subproducts=0;
    if(count($cart))
    $subproducts=cart::find($cart->id)->subproducts()->distinct('subproduct_id')->get();

if(Auth::guest()){
        return view('account.Delivery-details')->withCategory($category)->withSubcategory($Subcategory)->withSubproducts($subproducts)->withCart($cart);   
}
        else
        return view('account.paymentoption')->withCategory($category)->withSubcategory($Subcategory)->withSubproducts($subproducts)->withCart($cart);


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
    
          $category=Category::all();
          $Subcategory=Subcategory::all();
  

        $this->validate($request,array(

        
            'name'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'city'=>'required',
            'region'=>'required',
            'pcode'=>'required',
            
            ));

        $address=Address::find($id);

        $address->name=$request->name;
        $address->address1=$request->address1;
        $address->address2=$request->address2;
        $address->city=$request->city;
        $address->region=$request->region;
        $address->pcode=$request->pcode;
        $address->user_id=Auth::user()->id;

        $address->save();


           // Session::flash('success','Your Address is updated!');
    $id=Auth::user()->id;

    $cart=cart::select('id')->where('user_id','=',$id)->first();


    $subproducts=0;
    if(count($cart))
    $subproducts=cart::find($cart->id)->subproducts()->distinct('subproduct_id')->get();


        return view('account.paymentoption')->withCategory($category)->withSubcategory($Subcategory)->withSubproducts($subproducts)->withCart($cart);

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
