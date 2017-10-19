<?php

namespace App\Http\Controllers;

use App\color;

use Illuminate\Http\Request;

use App\Product_Image;

use App\User;

use session;

class myhelper{

public static function getcolorfromid($id){

$color=Color::find($id);
	return $color->color_code;

}

public static function getimagefromid($id){

$image=Product_Image::where('p_id','=',$id)->get();

	return $image[0]->name;

}

public static function createguest(){

	$user=new User();

	$user->name="Guest";
	$user->save();

	session(['guest_id' =>$user->id]);

	return $user->id;
}


}
?>