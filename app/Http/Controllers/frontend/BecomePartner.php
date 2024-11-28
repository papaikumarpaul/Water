<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BecomePartner extends Controller
{
    public function index(){
        return view('Frontend.BecomePartner');
    }
}
