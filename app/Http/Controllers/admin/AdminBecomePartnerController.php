<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BecomePartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminBecomePartnerController extends Controller
{
    public function BecomePartner(){
        $admin = Auth::guard('admin')->user();
        $conutactDetailsBecome=BecomePartner::all();
        return view('Admin.Contact Details.becomepartner',compact('admin','conutactDetailsBecome'));
    }
    public function detetelBecomePartner($id){
        $admin = Auth::guard('admin')->user();
        $ContactBecomePartner=BecomePartner::findOrFail($id);
        $ContactBecomePartner->delete();
        return redirect()->route('admin.conutactDetailsBecome')->with('message', 'Become A Partner  deleted successfully!');
       }
}
