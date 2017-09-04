<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\subproduct;

use App\Subcategory;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
    $category=Category::all();
    $Subcategory=Subcategory::all();
    $subproduct=subproduct::all();
    
    return view('pages.home')->withCategory($category)->withSubcategory($Subcategory)->withSubproduct($subproduct);
    }

}
