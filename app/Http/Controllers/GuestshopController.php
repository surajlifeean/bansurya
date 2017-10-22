<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use session;


use App\User;


use App\Category;

use App\Subcategory;

use App\cart;

use Auth;
class GuestshopController extends Controller
{
    public function index()
    {
        
    }

        public function store(Request $request)
    {
       $id=session('guest_id');
       
       $user=User::find($id);

       $user->email=$request->email;

       $user->mobile_number=$request->phone_no;

       $user->save();
                 $category=Category::all();
          $Subcategory=Subcategory::all();
  
        if(Auth::user())
            $id=Auth::user()->id;
        else
            $id=session('guest_id');       



    $cart=cart::select('id')->where('user_id','=',$id)->first();


    $subproducts=0;
    if(count($cart))
    $subproducts=cart::find($cart->id)->subproducts()->distinct('subproduct_id')->get();


         return view('account.paymentoption')->withCategory($category)->withSubcategory($Subcategory)->withSubproducts($subproducts)->withCart($cart);

    }

}
