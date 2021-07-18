<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonials;

class TestimonialsController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Testimonials=Testimonials::get();
        return view('pages.Testimonials.list',compact('Testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Testimonials.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'image'=>'required',
            'name'=>'required',
            'description'=>'required',
        ];
        $request->validate($rules);

        $Testimonials=new Testimonials;
        $Testimonials->name=$request->name;
        $Testimonials->clientType=$request->client;
        $Testimonials->description=$request->description;
        if($request->hasFile('image')){
            $this->SaveFile($Testimonials,'image','image','upload/services');
        }
        $Testimonials->save();
        \Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Testimonials=Testimonials::where('id',$id)->first();
        return view('pages.Testimonials.info',compact('Testimonials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Testimonials=Testimonials::where('id',$id)->first();
        return view('pages.Testimonials.edit',compact('Testimonials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules=[
            'name'=>'required',
            'description'=>'required'
        ];
        $request->validate($rules);

        $Testimonials=Testimonials::where('id',$id)->first();
        $Testimonials->name=$request->name;
        $Testimonials->clientType=$request->client;
        $Testimonials->description=$request->description;

        if($request->hasFile('image')){
            $this->SaveFile($Testimonials,'image','image','upload/services');
        }
        
        $Testimonials->save();

        \Notify::success('تم تعديل بيانات  بنجاح', ' تعديل بيانات');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Testimonials=Testimonials::where('id',$id)->delete();
    }
}
