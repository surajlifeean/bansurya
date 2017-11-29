<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Subcategory;


use App\Profileimage;

use Auth;

use Hash;

use App\User;
class ChangepwdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


            $image=Profileimage::where('user_id','=',Auth::user()->id)->first();

        $category=Category::all();
    $Subcategory=Subcategory::all();

        return view('account.changepwd')->withCategory($category)->withSubcategory($Subcategory)->withImagedet($image);
    
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

        
            'oldpwd'=>'required',
            'newpwd'=>'required',
            'cnewpwd'=>'required',
            
            ],

            [
        'oldpwd.required' => 'You old password is required',
        'newpwd.required'  => 'New password is required',
        'cnewpwd.required'  => 'Confirm password is required',
    ]

        );
        $password = $request->oldpwd;

        $user=User::find(Auth::user()->id);

        if(Hash::check($password,$user->password))
             $user->fill([
                'password' => Hash::make($request->newpwd)
            ])->save();
 
            $request->session()->flash('success', 'Your password has been changed.');
 
            return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
