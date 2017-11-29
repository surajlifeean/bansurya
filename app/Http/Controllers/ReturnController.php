<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Orders;

use App\Profileimage;

use Auth;

use App\Category;

use App\Subcategory;

use App\Address;

use App\Returnorder;

use App\Replacement;
class ReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rep=Returnorder::where('user_id','=',Auth::user()->id)->paginate(5);

        $image=Profileimage::where('user_id','=',Auth::user()->id)->first();

        $category=Category::all();
        $Subcategory=Subcategory::all();

        return view('order.myreturns')->withOrders($rep)->withImagedet($image)->withCategory($category)->withSubcategory($Subcategory);

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
        
        $this->validate($request,[
        'subproduct_id'=>'required|numeric',
        'issue'=>'required',
        'account_number'=>'required|numeric',
        'ifsc_code'=>'required',
         'branch_code'=>'required',
         'remarks'=>'required',
        ]);
        $return=new Returnorder;
        $return->o_id=$request->id;
        $return->issue=$request->issue;
        $return->account_number=$request->account_number;
        $return->ifsc_code=$request->ifsc_code;
        $return->branch_code=$request->branch_code;
        $return->reviews=$request->remarks;
        $return->user_id=Auth::user()->id;
        $return->save();

        $status=Orders::find($request->id);
        $status->order_status="return";
        $status->save();

        return redirect()->back()->with('success','Return Request Has Been Placed! Our Team Will Get In Touch With You Soon');
           
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

        return view('order.returns')->withCategory($category)->withSubcategory($Subcategory)->withOrderret($orderret)->withImagedet($image)->withAddress($Address);

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
