<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Category;

use App\Subcategory;

use App\cart;

use App\subproducts;

use App\subproduct_cart;

use Auth;

use App\Orders;

use Session;

use App\Profileimage;
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

    $image=Profileimage::where('user_id','=',Auth::user()->id)->first();

    $category=Category::all();
    $Subcategory=Subcategory::all();

    $allorders=Orders::where('user_id','=',Auth::user()->id)->orderBy('order_id')->get();

    // dd($allorders);

        return view('order.myorders')->withCategory($category)->withSubcategory($Subcategory)->withImagedet($image)->withOrders($allorders);

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
    $order->unit_price=$subproduct->price;
    $order->subproduct_id=$subproduct->id;
    $order->discount=$subproduct->discount;
    $order->order_id=$nextorderid;
    $order->quantity=$subproduct->pivot->quantity;
    $order->payment_mode=$request->paymentmode;
    $order->order_status="To Be Delivered";

    // $order->product_name

    $order->save();
}




       $cart_id=session('cart_id');
       $subproduct_cart=subproduct_cart::where('cart_id','=',$cart_id)->get();


        foreach($subproduct_cart as $csp) {  //csp=cart sub product
        
        $csp->delete();

        $cc=session('cart_count');
        session(['cart_count'=>$cc-1]);


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
