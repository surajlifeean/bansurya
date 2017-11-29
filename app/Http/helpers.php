<?php

namespace App\Http\Controllers;

use App\color;

use Illuminate\Http\Request;

use App\Product_Image;

use App\User;

use App\Size;

use App\Shipping;

use App\Product;

use App\subproduct;

use session;

class myhelper{

public static function getcolorfromid($id){

$color=Color::find($id);
	return $color->color_code;

}

public static function getsizefromid($id){

$size=Size::find($id);
	return $size->name;

}



public static function getimagefromid($id){

$image=Product_Image::where('p_id','=',$id)->get();

	return $image[0]->name;

}

public static function createguest(){

	$user=new User();

	$user->name="Guest";
	$user->save();

	 session(['cart_count' => 0]);
   

	session(['guest_id' =>$user->id]);

	return $user->id;
}

public static function getshippingcost(){

$ship=Shipping::first();

	return $ship;

}
public static function getproductvariants($id){

	//i must send an array of other sizes and color. so colors will be displayed based on size selection

	$product=subproduct::find($id)->product->subproducts;
	$variants=array();
	foreach($product as $key=>$pro){

		if($pro->quantity>0)
		$variants[$key][myhelper::getsizefromid($pro->size)]=myhelper::getcolorfromid($pro->color);
	}
	return $variants;

}


}
?>