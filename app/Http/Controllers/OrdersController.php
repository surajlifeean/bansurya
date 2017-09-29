<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Category;

use App\Subcategory;

use App\cart;

use App\subproducts;

use Auth;

use App\Orders;

use Session;

class OrdersController extends Controller
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

    $id=Auth::user()->id;

    $cart=cart::select('id')->where('user_id','=',$id)->first();

    $subproducts=cart::find($cart->id)->subproducts()->distinct('subproduct_id')->get();

    //dd($subproducts);

    $peakorderid=Orders::orderBy('order_id','desc')->first();

if(count($peakorderid)==0)
    $nextorderid=1;
else
    $nextorderid=++$peakorderid->order_id;


 
    foreach ($subproducts as $subproduct) {
        # code...
    $order=new Orders;

    $order->user_id=Auth::user()->id;
    $order->product_name=$subproduct->product->name;
    $order->product_price=$subproduct->price;
    $order->subproduct_id=$subproduct->product_id;
    $order->discount=$subproduct->discount;
    $order->order_id=$nextorderid;
    $order->payment_mode=$request->paymentmode;

    // $order->product_name

    $order->save();
}


        Session::flash('success','Your Order Is Successfully Placed! It will be delivered in 7 to 10 working days.');

        return view('account.thanks')->withCategory($category)->withSubcategory($Subcategory);


        //
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