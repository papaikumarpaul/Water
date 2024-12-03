<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BecomePartner;
use App\Models\BecomeSupplier;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminContactContriller extends Controller
{
    public function contactDetailsShow(){
        $admin = Auth::guard('admin')->user();
        $conutactDetails=Contact::all();
        return view('Admin.Contact Details.contactdetailsshow',compact('admin','conutactDetails'));
    }
    public function detetelContact($id){
        $admin = Auth::guard('admin')->user();
        $ContactDeted=Contact::findOrFail($id);
        $ContactDeted->delete();
        return redirect()->route('admin.conutactDetails')->with('message', 'Contact  deleted successfully!');
       }
}
