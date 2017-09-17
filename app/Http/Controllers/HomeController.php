<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\subproduct;

use App\Subcategory;

use Auth;

use session;

use App\subproduct_cart;


use App\Wishlist;
class HomeController extends Controller
{
    //
    public function index()
    {
        //

        $subproducts=subproduct_cart::select('subproduct_id')->distinct()->get()->count();


            session(['cart_count' => $subproducts]);


    if(Auth::user()){
    	$wl=Wishlist::where('user_id','=',Auth::user()->id)->first();
    	        session(['wishlist_id' => $wl->id]);

    }


    $category=Category::all();
    $Subcategory=Subcategory::all();
    $subproduct=subproduct::all();
    
    return view('pages.home')->withCategory($category)->withSubcategory($Subcategory)->withSubproduct($subproduct);
    }

}
