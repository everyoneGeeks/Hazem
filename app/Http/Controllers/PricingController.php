<?php

namespace App\Http\Controllers;

use App\pricing;
use App\services;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricings=pricing::with('service')->get();
        return view('pages.pricing.list',compact('pricings'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   
        $pricing=pricing::where('id',$id)->with('service')->first();
        return view('pages.pricing.info',compact('pricing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=services::get();
        $pricing=pricing::where('id',$id)->with('service')->first();
        return view('pages.pricing.edit',compact('pricing','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $rules=[
            'name'=>'required',
            'price'=>'required'
        ];
        $request->validate($rules);


        $pricing=pricing::where('id',$id)->first();

        $pricing->name=$request->name;
        $pricing->price=$request->price;
        $pricing->date=$request->date;
        $pricing->list=$request->list;
        $pricing->services=$request->services;
        $pricing->save();




        \Notify::success('تم تعديل بيانات  بنجاح', ' تعديل بيانات');
        
        return redirect()->back();
    }


}
