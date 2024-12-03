<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\BecomeSupplier as ModelsBecomeSupplier;
use Illuminate\Http\Request;

class BecomeSupplier extends Controller
{
    public function indexS(){
        return view('Frontend.BecomeSupplier');
    }
    public function creatctsds(){
        return view('Frontend.BecomeSupplier');
     }
    public function storeds(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:blog,slug',
            'number' => 'required|string|min:10|max:10',
            'subject' => 'required |string',
            'message' => 'nullable|string',
        ]);
           $contact=new ModelsBecomeSupplier();
           $contact->name=$request->name;
           $contact->email=$request->email;
           $contact->number=$request->number;
           $contact->subject=$request->subject;
           $contact->message=$request->message;
           $contact->save();
           return redirect()->route('creatcta')->with('Message','Contact From Submit');
     }
}
