<?php

namespace App\Http\Controllers;

use App\Models\ListAdd;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function adds(){
        return view('Frontend.ads');
       }
       public function createdAdd(){
    return view('Frontend.ads');
       }
       public function addStore(Request $request){
           // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:blog,slug',
            'number' => 'required|string|min:10|max:10',
            'subject' => 'required |string',
            'message' => 'nullable|string',
        ]);
           $contactAdd=new ListAdd();
           $contactAdd->name=$request->name;
           $contactAdd->email=$request->email;
           $contactAdd->number=$request->number;
           $contactAdd->subject=$request->subject;
           $contactAdd->message=$request->message;
           $contactAdd->save();
           return redirect()->route('createdAdd')->with('Message','List Your ADs From Submit');
     
       }
}
