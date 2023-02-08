<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\choice2;
use App\Models\EduLevel;
use App\Models\PositionType;
use Illuminate\Http\Request;

class Choice2Controller extends Controller
{
    public function index()
    {

        $admins = choice2::latest()->paginate(4);


        return view('adminpage.choice2.index', compact('admins'));
    }
    public function create()
    {

        $position = PositionType::all();
        $level = Level::all();
        $edu_level = EduLevel::all();




        return view('adminpage.choice2.create', compact('level', 'position', 'edu_level'));
    }
    public function store(Request $request)
    {

        foreach ($request->addMoreInputFields as $key => $value) {
            // dd($value);
            choice2::create(
                [
                    "position" => $value["position"],
                    "position_type_id" => $value["position_type_id"],
                    "experience" => $value["experience"],
                    "edu_level_id" => $value["education_level_id"],
                    "level_id" => $value["level_id"],


                ]
            );
        };
        return redirect()->route('choice2.index');
    }
    public function edit($id)
    {
        $level = PositionType::all();
        $admin = choice2::find($id);
        $edu_level = EduLevel::all();
        return view('adminpage.choice2.edit', compact('admin', 'level', 'edu_level'));
    }
    public function update(Request $request, $id)
    {

        $admin = choice2::find($id);
        $admin->position = $request->Input('position');
        $admin->experience = $request->Input('experience');
        $admin->position_type_id = $request->position_type_id;
        $admin->edu_level_id = $request->education_level_id;
        $admin->update();


        return redirect('choice2')->with('status', 'position updated successfully');
    }
    public function destroy($id)
    {
        $admin = choice2::find($id);


        $admin->delete();
        return redirect('choice2')->with('status', 'position  deleted successfully');
    }
}
