<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


use App\Category;

use App\subproduct;

use App\Subcategory;

use App\Product_Image;

class ProductbysubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
    $category=Category::all();
    $Subcategory=Subcategory::all();

    $cat_id=(int)floor($id/100000);
    $subcat_id=$id%100000;

    //dd($subcat_id);

        $subproduct=Category::select('*')
        ->join('products','products.category_id','=','categories.id')
        ->join('subproducts','subproducts.product_id','=','products.id')
        ->where([
                    ['category_id','=',$cat_id],
                    ['Subcategory_id', '=',$subcat_id]
                ])
        ->get();

       // dd($subproduct);

    $images=Product_Image::select(DB::raw("min(id) as id"))
    ->groupBy('p_id')
            ->get();
    
    $oneimage = DB::table('product__images')
                    ->whereIn('id', $images)
                    ->get();


   // dd($oneimage);

        return view('pages.productlisting')->withSubproducts($subproduct)->withCategory($category)->withSubcategory($Subcategory)->withImages($oneimage);


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
