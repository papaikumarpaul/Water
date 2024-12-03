<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BecomeSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminBecomeSupplierController extends Controller
{
   
    public function BecomeSupplier(){
        $admin = Auth::guard('admin')->user();
        $conutactDetailsSupplier=BecomeSupplier::all();
        return view('Admin.Contact Details.becomesupplier',compact('admin','conutactDetailsSupplier'));
    }
    public function detetelBecomeSupplier($id){
        $admin = Auth::guard('admin')->user();
        $ContactBecomeSupplier=BecomeSupplier::findOrFail($id);
        $ContactBecomeSupplier->delete();
        return redirect()->route('admin.conutactDetailsSupplier')->with('message', 'BecomeSupplier  deleted successfully!');
       }
}
