<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CovidStatus;
use App\Models\VaccineRegister;


class HomeController extends Controller
{

    public function index(){

        $Barishal = VaccineRegister::where('division', 'Barishal')->get()->count();
        $Chattogram = VaccineRegister::where('division', 'Chattogram')->get()->count();
        $Dhaka = VaccineRegister::where('division', 'Dhaka')->get()->count();
        $Khulna = VaccineRegister::where('division', 'Khulna')->get()->count();
        $Rajshahi = VaccineRegister::where('division', 'Rajshahi')->get()->count();
        $Rangpur = VaccineRegister::where('division', 'Rangpur')->get()->count();
        $Mymensingh = VaccineRegister::where('division', 'Mymensingh')->get()->count();
        $Sylhet = VaccineRegister::where('division', 'Sylhet')->get()->count();



        $covidPositive = CovidStatus::where('status', 1)->get()->count();
        $covidNigative = CovidStatus::where('status', 0)->get()->count();
        $covidTestAll = CovidStatus::all()->count();

        return view('front_index', compact('Barishal', 'Chattogram', 'Dhaka', 'Khulna', 'Rajshahi', 'Rangpur', 'Mymensingh', 'Sylhet','covidPositive', 'covidNigative', 'covidTestAll'));
    }


    
}
