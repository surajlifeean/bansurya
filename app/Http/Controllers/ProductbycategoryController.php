<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;

use session;

use App\Category;

use App\subproduct;

use App\Subcategory;

use App\Product_Image;

class ProductbycategoryController extends Controller
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
    $subproduct=subproduct::all();
    
    return view('pages.productlisting')->withCategory($category)->withSubcategory($Subcategory)->withSubproduct($subproduct);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);

    session(['sortby'=>'']);
    $category=Category::all();
    $Subcategory=Subcategory::all();

        $subproduct=Category::select('*')
        ->join('products','products.category_id','=','categories.id')
        ->join('subproducts','subproducts.product_id','=','products.id')
        ->where('categories.id','=',$id)
        ->get();



    $images=Product_Image::select(DB::raw("min(id) as id"))
    ->groupBy('p_id')
            ->get();

             $colors=array();
            foreach($subproduct as $sp){
                $colors[]=$sp->color;
            }

            $colors=array_unique($colors);
        

    //dd($colors);


    $sortcolor = DB::table('colors')
                    ->whereIn('id', $colors)
                    ->get();

    
    $oneimage = DB::table('product__images')
                    ->whereIn('id', $images)
                    ->get();

      $size=array();
            foreach ($subproduct as $sp) {
                 $size[]=$sp->size;
            }

             $size=array_unique($size);
        
            $sortsize = DB::table('sizes')
                    ->whereIn('id', $size)
                    ->get();


   // dd($oneimage);

        return view('pages.productlisting')->withSubproducts($subproduct)->withCategory($category)->withSubcategory($Subcategory)->withImages($oneimage)->withColors($sortcolor)->withSizes($sortsize);

    
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
