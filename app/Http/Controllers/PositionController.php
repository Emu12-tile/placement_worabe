<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\choice2;
use App\Models\EduLevel;
use App\Models\Position;
use App\Models\JobCategory;
use App\Models\PositionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    public function index()
    {

        $admins = Position::latest()->paginate(8);


        return view('adminpage.position.index', compact('admins'));
    }
    public function create()
    {

        $position = PositionType::all();
        $level = Level::all();
        $edu_level = EduLevel::all();
        $educ = DB::table('edu_levels')->get();
        $lev = DB::table('levels')->get();
        $job_category = JobCategory::all();



        return view('adminpage.position.create', compact('lev', 'position', 'edu_level', 'job_category', 'educ'));
    }
    public function store(Request $request)
    {

        foreach ($request->addMoreInputFields as $key => $value) {
            // dd($value);
            Position::create(
                [
                    "position" => $value["position"],
                    "job_category_id" => $value["job_category_id"],
                    "position_type_id" => $value["position_type_id"],
                    "experience" => $value["experience"],

                    "edu_level" => $value["edu_level"],

                    "level" => $value["level"],


                ]
            );

            choice2::create(
                [
                    "position" => $value["position"],
                    "jobcat2_id" => $value["job_category_id"],
                    "position_type_id" => $value["position_type_id"],
                    "experience" => $value["experience"],

                    "edu_level" => $value["edu_level"],

                    "level" => $value["level"],


                ]
            );
        }
        return redirect()->route('position.index');
    }
    public function edit($id)
    {
        $edu_level = EduLevel::all();

        $level = PositionType::all();
        $job_category = JobCategory::all();
        $admin = Position::find($id);
        return view('adminpage.position.edit', compact('admin', 'level', 'edu_level', 'job_category'));
    }
    public function update(Request $request, $id)
    {

        $admin = Position::find($id);
        $admin->position = $request->Input('position');
        $admin->experience = $request->Input('experience');
        $admin->job_category_id = $request->job_category_id;

        $admin->position_type_id = $request->position_type_id;
        $admin->edu_level_id = $request->education_level_id;
        $admin->update();
        $admin2 = choice2::find($id);
        $admin2->position = $request->Input('position');
        $admin2->experience = $request->Input('experience');
        $admin2->jobcat2_id = $request->job_category_id;
        $admin2->position_type_id = $request->position_type_id;
        $admin2->edu_level_id = $request->education_level_id;
        $admin2->update();




        return redirect('position')->with('status', 'position updated successfully');
    }
    public function destroy($id)
    {

        $admin2 = choice2::find($id);
        $admin2->delete();
        $admin = Position::find($id);
        $admin->delete();

        // dd($admin,$admin2);

        // $admin2 = choice2::where($id, $admin->id)->get()->delete();

        return redirect('position')->with('status', 'position  deleted successfully');
    }
}
