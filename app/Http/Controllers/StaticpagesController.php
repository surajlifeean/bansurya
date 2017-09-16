<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Category;

use App\subproduct;

use App\Subcategory;

class StaticpagesController extends Controller
{
    
    public function aboutus()
    {
        
    $category=Category::all();
    $Subcategory=Subcategory::all();
    $subproduct=subproduct::all();
    
    return view('staticpage.aboutus')->withCategory($category)->withSubcategory($Subcategory)->withSubproduct($subproduct);
    }

    public function policy()
    {
        
    $category=Category::all();
    $Subcategory=Subcategory::all();
    $subproduct=subproduct::all();
    
    return view('staticpage.policy')->withCategory($category)->withSubcategory($Subcategory)->withSubproduct($subproduct);
    }

}
