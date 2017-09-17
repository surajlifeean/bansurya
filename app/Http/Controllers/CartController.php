<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subproduct_cart;

use App\cart;

use Session;

use App\Category;

use App\Subcategory;

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
        return view('account.cart')->withCategory($category)->withSubcategory($Subcategory);
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

         $subproduct_cart=new subproduct_cart;

         $subproduct_cart->subproduct_id=$request->subproduct_id;
         $subproduct_cart->cart_id=$cart->id;

         $subproduct_cart->save();

         
         $subproducts=subproduct_cart::select('subproduct_id')->distinct()->get()->count();


            session(['cart_count' => $subproducts]);

         // else{

         //    $wishlist->user_id=$request->id;
         //    $wishlist->save();
         // }


        Session::flash('success','Product Added To Cart!!');

         return redirect()->route('product.show',$request->subproduct_id);

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
