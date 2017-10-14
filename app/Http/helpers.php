<?php
use App\color;

use App\Product_Image;

function getcolorfromid($id){

$color=Color::find($id);
	return $color->color_code;

}

function getimagefromid($id){

$image=Product_Image::where('p_id','=',$id)->get();

	return $image[0]->name;

}



?>