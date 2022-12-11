<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(){
        return view('backend.index');
    }
    
    public function vaccineReg(){

        return view('backend.vaccine_reg');
    }


}
