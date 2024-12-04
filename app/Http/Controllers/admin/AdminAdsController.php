<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ListAdd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminAdsController extends Controller
{
    public function ListAdsShow(){
        $admin = Auth::guard('admin')->user();
        $conutactDetailsAds=ListAdd::all();
        return view('Admin.Contact Details.listAds',compact('admin','conutactDetailsAds'));
    }
    public function detetelListAdds($id){
        $admin = Auth::guard('admin')->user();
        $ContactBecomeSupplier=ListAdd::findOrFail($id);
        $ContactBecomeSupplier->delete();
        return redirect()->route('admin.ListAdsShow')->with('message', 'List Ads deleted successfully!');
       }
}
