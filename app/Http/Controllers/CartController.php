<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subproduct_cart;

use App\cart;

use Session;

use App\Address;

use App\Category;

use App\Subcategory;

use Auth;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    

    $category=Category::all();
    $Subcategory=Subcategory::all();

if(Auth::guest()){

    $id=session('guest_id');
}
else{
    $id=Auth::user()->id;
}
    

    $cart=cart::select('id')->where('user_id','=',$id)->first();
    $subproducts=null;

    if(count($cart))
    $subproducts=cart::find($cart->id)->subproducts()->distinct('subproduct_id')->get();

    //dd($subproducts);

    if(!count($cart))
        {
            $cart=new cart;
            $cart->user_id=$id;
            $cart->save();
         }


    session(['cart_id' => $cart->id]);
        
  //  dd($subproducts);
        return view('account.mycart')->withCategory($category)->withSubcategory($Subcategory)->withSubproducts($subproducts)->withCart($cart);
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
        //

         // dd($request);

// creating a new instance of cart for the new user

        $cart=Cart::select('*')->where('user_id','=',$request->user_id)->first();

        if(count($cart)==0)
        {
            $cart=new cart;
            $cart->user_id=$request->user_id;
            $cart->save();
         }



$checkforproductincart=subproduct_cart::where([
    ['cart_id','=',$cart->id],
    ['subproduct_id','=',$request->subproduct_id],
    ])->first();

    if(count($checkforproductincart)!=0){
        Session::flash('success','You Aleardy Have This Product in Your Cart!!');

             return redirect()->back();

}


         $subproduct_cart=new subproduct_cart;

         $subproduct_cart->subproduct_id=$request->subproduct_id;
         $subproduct_cart->cart_id=$cart->id;
         $subproduct_cart->quantity=$request->quantity;

         $subproduct_cart->save();

         
         $subproducts=subproduct_cart::select('subproduct_id')->distinct()->where('cart_id','=',$cart->id)->get()->count();


            session(['cart_count' => $subproducts]);

         // else{

         //    $wishlist->user_id=$request->id;
         //    $wishlist->save();
         // }


        Session::flash('success','Product Added To Cart!!');

         return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    $category=Category::all();
    $Subcategory=Subcategory::all();
if(Auth::guest()){
    $uid=session('guest_id');
}
else{
    $uid=Auth::user()->id;
}
    
    $cart=cart::select('id')->where('user_id','=',$uid)->first();

    $address=Address::where('user_id','=',$uid)->first();

    // dd($address);
    $subproducts=0;
    if(count($cart))
    $subproducts=cart::find($cart->id)->subproducts()->distinct('subproduct_id')->get();



        return view('account.confirmaddress')->withCategory($category)->withSubcategory($Subcategory)->withSubproducts($subproducts)->withCart($cart)->withAddress($address);


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

        // dd($id);
        $cart_id=session('cart_id');
        
        $pro=subproduct_cart::where([
            ['subproduct_id', '=', $id],
            ['cart_id', '=', $cart_id],
            ])->first();

        $pro->delete();

        $cc=session('cart_count');
        session(['cart_count'=>$cc-1]);
        Session::flash('Success','The Product is Removed from Wishlist!');


        return redirect()->route('cart.index');

    }
}
