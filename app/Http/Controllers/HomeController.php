<?php

namespace App\Http\Controllers;

use App\Models\HR;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
    //    $forms=HR::all();


    //    $form=Form::all();
    //    $form->form->position_id;
        // $hr = DB::table('h_r_s')->select('performance','exam')->get();
        // $names = DB::table('forms')->pluck('position_id')->get('position_type_id');
        // $form=$names->position_type_id;
    //     $hr = DB::table('h_r_s')->pluck('exam');
    //    dd(\App\Models\HR::query()->where('status_hr', '==', '0')->select('form_id')->distinct()->count());
//  dd(HR::where('exam', '=', null)->count());

        return view('home');
    }
}
