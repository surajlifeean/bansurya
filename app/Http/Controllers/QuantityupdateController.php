<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subproduct_cart;

use Auth;

class QuantityupdateController extends Controller
{
      public function increment()
     {

		$id=$_REQUEST['id'];     	


     	$subproduct_cart=subproduct_cart::where([
     		['cart_id','=',session('cart_id')],
     		['subproduct_id','=',$id],
     		])->first();

     	
     	$subproduct_cart->quantity=$subproduct_cart->quantity+1;
     	$subproduct_cart->save();
		echo(json_encode($subproduct_cart));

       
        
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function decrement()
    {
        
       
		$id=$_REQUEST['id'];     	


     	$subproduct_cart=subproduct_cart::where([
     		['cart_id','=',session('cart_id')],
     		['subproduct_id','=',$id],
     		])->first();

     	
     	$subproduct_cart->quantity=$subproduct_cart->quantity-1;
     	$subproduct_cart->save();
		echo(json_encode($subproduct_cart));

       
    }
        
}
