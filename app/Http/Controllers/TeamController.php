<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Teams=Team::get();
        return view('pages.Team.list',compact('Teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Team.add');
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
            'position'=>'required',
        ];
        $request->validate($rules);

        $Team=new Team;
        $Team->name=$request->name;
        $Team->position=$request->position;
        $Team->facebook=$request->facebook;
        $Team->linkedin=$request->linkedin;
        $Team->twiter=$request->twiter;
        $Team->instgram=$request->instgram;
        if($request->hasFile('image')){
            $this->SaveFile($Team,'image','image','upload/services');
        }
        $Team->save();
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
        $Team=Team::where('id',$id)->first();
        return view('pages.Team.info',compact('Team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Team=Team::where('id',$id)->first();
        return view('pages.Team.edit',compact('Team'));
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
            'position'=>'required',
        ];
        $request->validate($rules);

        $Team=Team::where('id',$id)->first();
        $Team->name=$request->name;
        $Team->position=$request->position;
        $Team->facebook=$request->facebook;
        $Team->linkedin=$request->linkedin;
        $Team->twiter=$request->twiter;
        $Team->instgram=$request->instgram;

        if($request->hasFile('image')){
            $this->SaveFile($Team,'image','image','upload/services');
        }
        
        $Team->save();

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
        $Team=Team::where('id',$id)->delete();
    }
}
