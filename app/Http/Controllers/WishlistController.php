<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Cart;

use Session;

use App\subproduct_wishlist;

use App\Wishlist;

use App\Category;

use App\subproduct;

use App\Subcategory;

use App\Product_Image;

use Auth;

use App\Profileimage;
class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $image=Profileimage::where('user_id','=',Auth::user()->id)->first();

    $category=Category::all();
    $Subcategory=Subcategory::all();
    $subproduct=subproduct::all();

    $id=Auth::user()->id;

    $wishlist=Wishlist::select('id')->where('user_id','=',$id)->first();

    $subproducts=Wishlist::find($wishlist->id)->subproducts()->distinct('subproduct_id')->get();

    // dd($products);
    
        return view('account.wishlist')->withCategory($category)->withSubcategory($Subcategory)->withSubproduct($subproducts)->withImagedet($image);        
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

        $wishlist=Wishlist::select('*')->where('user_id','=',$request->id)->first();

        if(count($wishlist)==0)
        {
            $wishlist=new Wishlist;
            $wishlist->user_id=$request->id;
            $wishlist->save();
         }


$checkforproductinwishlist=subproduct_wishlist::where([
    ['wishlist_id','=',$wishlist->id],
    ['subproduct_id','=',$request->subproduct],
    ])->first();

    if(count($checkforproductinwishlist)!=0){
        Session::flash('success','You Aleardy Have This Product in Your Wishlist!!');

         return redirect()->route('product.show',$request->subproduct);

}

         $subproduct_wishlist=new subproduct_wishlist;

         $subproduct_wishlist->subproduct_id=$request->subproduct;
         $subproduct_wishlist->wishlist_id=$wishlist->id;

         $subproduct_wishlist->save();

         




         // else{

         //    $wishlist->user_id=$request->id;
         //    $wishlist->save();
         // }


        Session::flash('success','Your Wish List is Updated!!');

         return redirect()->route('product.show',$request->subproduct);


        // else{
        //     $
        // }
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
        
        $wishlist_id=session('wishlist_id');
        
        $pro=subproduct_wishlist::where([
    ['subproduct_id', '=', $id],
    ['wishlist_id', '=', $wishlist_id],
    ])->first();

        $pro->delete();

        Session::flash('Success','The Product is Removed from Wishlist!');


        return redirect()->route('wishlist.index');
   


    }
}
