<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{


    public function create()
    {
        return view('experience.create');
    }


    public function store(Request $request)
    {
        // dd($request);
        // dd($request->ajax());
        if ($request->ajax()) {
            $items = Form::get();

            foreach ($request->data as $key => $value) {
               
                experience::create([
                    // "form_id" => $items->id,

                    "positionyouworked" => $value["positionyouworked"],
                    "startingDate" => $value["startingDate"],
                    "endingDate" => $value["endingDate"],
                ]);
            }
        }
    }
}
