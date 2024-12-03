<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
       return view('Frontend.Contact');
    }
    public function creatct(){
        return view('Frontend.Contact');
     }
     public function storea(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:blog,slug',
            'number' => 'required|string|min:10|max:10',
            'subject' => 'required |string',
            'message' => 'nullable|string',
        ]);
           $contact=new Contact();
           $contact->name=$request->name;
           $contact->email=$request->email;
           $contact->number=$request->number;
           $contact->subject=$request->subject;
           $contact->message=$request->message;
           $contact->save();
           return redirect()->route('creatct')->with('Message','Contact From Submit');
         



     }
    
}

