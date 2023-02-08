<?php

namespace App\Http\Controllers;

use App\Models\HR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
       $forms=HR::all();
        // $hr = DB::table('h_r_s')->select('performance','exam')->get();
    //     $names = DB::table('h_r_s')->pluck('performance');
    //     $hr = DB::table('h_r_s')->pluck('exam');
    //    dd($names+$hr);
        return view('home',compact('forms'));
    }
}
