<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\BecomePartner as ModelsBecomePartner;
use Illuminate\Http\Request;

class BecomePartner extends Controller
{
    public function indexB(){
        return view('Frontend.BecomePartner');
    }
    public function creatctb(){
        return view('Frontend.BecomePartner');
     }
    public function storeb(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:blog,slug',
            'number' => 'required|string|min:10|max:10',
            'subject' => 'required |string',
            'message' => 'nullable|string',
        ]);
           $contact=new ModelsBecomePartner();
           $contact->name=$request->name;
           $contact->email=$request->email;
           $contact->number=$request->number;
           $contact->subject=$request->subject;
           $contact->message=$request->message;
           $contact->save();
           return redirect()->route('creatctb')->with('Message','Contact From Submit');
     }
}
