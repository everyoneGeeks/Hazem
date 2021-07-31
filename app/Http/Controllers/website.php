<?php

namespace App\Http\Controllers;

use home;
use App\Team;
use App\client;
use App\pricing;
use App\headline;
use App\services;
use App\Complains;
use App\portfolio;
use App\aboutUsBox;
use App\Testimonials;
use Illuminate\Http\Request;

class website extends Controller
{

    public function sendEmail(Request $request){
        $sendemail=new Complains;
        $sendemail->name=$request->name;
        $sendemail->email=$request->email;
        $sendemail->message=$request->message;
        $sendemail->subject=$request->subject;
        $sendemail->save();
        return redirect()->back();

    }


public function index(){
    $headlines=headline::get();
    $client=client::get();
    $aboutUsBox=aboutUsBox::get();
    $services=services::get();
    $portfolio=portfolio::with('images')->get();
    $Team=Team::get();
    $Testimonials=Testimonials::get();
    $pricing=pricing::get();



    return view('home',compact('headlines','client','pricing','aboutUsBox','services','portfolio','Team','Testimonials'));




}


public function info($id){
    $headlines=headline::get();

    $portfolio=portfolio::where('id',$id)->with('images')->first();
    return view('info',compact('portfolio','headlines'));

}

public function LangChange(Request $request)
{
    \App::setLocale($request->lang);
    session()->put('locale', $request->lang);  
    return redirect()->back();
}

}
