<?php

namespace App\Http\Controllers;

use App\portfolio;
use App\portfolioImage;
use App\services;
use Illuminate\Http\Request;
use Helmesvs\Notify\Facades\Notify;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolioList=portfolio::get();
        return view('pages.portfolio.list',compact('portfolioList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=services::get();
        return view('pages.portfolio.add',compact('services'));

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
            'services'=>'required',
            'name'=>'required',
            'description'=>'required',
            'client'=>'required',
            'url'=>'required',
            'date'=>'required'
        ];

        $request->validate($rules);

        $portfolio=new portfolio;
        $portfolio->name=$request->name;
        $portfolio->description=$request->description;
        $portfolio->services_id=$request->services;
        $portfolio->client=$request->client;  
        $portfolio->url=$request->url;   
        $portfolio->date=$request->date;     
        $portfolio->save();
     
        foreach ($request->images as $image) {
            $portfolioImage=new portfolioImage;
            $portfolioImage->prortfolio_id=$portfolio->id;

            $file =$image;
			$filename = \Str::random(6).'_'.time().'.'.$file->getClientOriginalExtension();
			$file->move('upload/portfolio',$filename);

			$portfolioImage->image ='/upload/portfolio/'.$filename;

            $portfolioImage->save();
        }


        Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio=portfolio::where('id',$id)->first();
        return view('pages.portfolio.info',compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=services::get();
        $portfolio=portfolio::where('id',$id)->first();
        return view('pages.portfolio.edit',compact('portfolio','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $rules=[
            'services'=>'required',
            'name'=>'required',
            'description'=>'required',
            'client'=>'required',
            'link'=>'required',
            'date'=>'required'
        ];

        $request->validate($rules);

        $portfolio=portfolio::where('id',$id)->first();
        $portfolio->name=$request->name;
        $portfolio->description=$request->description;
        $portfolio->services_id=$request->services;
        $portfolio->client=$request->client;  
        $portfolio->url=$request->url;   
        $portfolio->date=$request->date;     
        $portfolio->save();

    }


    public function ImageAdd(Request $request,$id)
    {



            $portfolioImage=new portfolioImage;

            $file =$request->image;
			$filename = \Str::random(6).'_'.time().'.'.$file->getClientOriginalExtension();
			$file->move('upload/portfolio',$filename);

			$portfolioImage->image ='/upload/portfolio/'.$filename;


            $portfolioImage->prortfolio_id=$id;
            $portfolioImage->save();
        
        Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');

        return redirect()->back();
    }




        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function ImageDelete(Request $request,$id)
    {
        $portfolio=portfolioImage::where('id',$id)->first()->delete();
        Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio=portfolio::where('id',$id)->first()->delete();
        Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');
        return redirect()->back();
    }
}
