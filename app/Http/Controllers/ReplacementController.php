<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Orders;

use App\Profileimage;

use Auth;

use App\Replacement;

use App\Category;

use App\Subcategory;

use App\Address;


class ReplacementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $rep=Replacement::where('user_id','=',Auth::user()->id)->paginate(5);

        $image=Profileimage::where('user_id','=',Auth::user()->id)->first();

        $category=Category::all();
        $Subcategory=Subcategory::all();

        return view('order.myreplacements')->withOrders($rep)->withImagedet($image)->withCategory($category)->withSubcategory($Subcategory);

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
       // dd($request);
        $this->validate($request,[

        'id'=>'required|numeric',
        'size'=>'required',
        'color'=>'required',
        'issue'=>'required',
         'remarks'=>'required',
        ]);
        $replace=new Replacement;        
        $replace->o_id=$request->id;
        $replace->size=$request->size;
        $replace->issue=$request->issue;
        $replace->color=$request->color;
        $replace->remarks=$request->remarks;
        $replace->user_id=Auth::user()->id;
      
        $replace->save();

        $status=Orders::find($request->id);
        $status->order_status="replacement";
        $status->save();

        return redirect()->back()->with('success','Replacement Request Has Been Placed! Our Team Will Get In Touch With You Soon');
           
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
        $orderret=Orders::find($id);
        $Address=Address::where('user_id','=',Auth::user()->id)->first();
        $image=Profileimage::where('user_id','=',Auth::user()->id)->first();

        return view('order.replacement')->withCategory($category)->withSubcategory($Subcategory)->withOrderret($orderret)->withImagedet($image)->withAddress($Address);
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
