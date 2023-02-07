<?php

namespace App\Http\Controllers;

use App\Models\EduLevel;
use App\Models\Level;
use App\Models\Position;
use App\Models\PositionType;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {

        $admins = Position::latest()->paginate(4);


        return view('adminpage.position.index', compact('admins'));
    }
    public function create()
    {

        $position = PositionType::all();
        $level = Level::all();
        $edu_level = EduLevel::all();




        return view('adminpage.position.create', compact('level', 'position', 'edu_level'));
    }
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'addMoreInputFields.*.position' => 'required',
        //     'addMoreInputFields.*.position_type' => 'required',
        //     'addMoreInputFields.*.edu_level_id' => 'required',
        //     'addMoreInputFields.*.experience' => 'required',
        //     'addMoreInputFields.*.level_id' => 'required',


        // ]);
        // dd($request);
        foreach ($request->addMoreInputFields as $key => $value) {
            // dd($value);
            Position::create(
                [
                    "position" => $value["position"],
                    "position_type_id" => $value["position_type_id"],
                    "experience" => $value["experience"],
                    "edu_level_id" => $value["education_level_id"],
                    "level_id" => $value["level_id"],


                ]
            );
        };
        return redirect()->route('position.index');







        // if ($request->ajax()) {

        //     $items = PositionType::get();
        //     $items=Level::get();
        //     $items=EduLevel::get();
        //     foreach ($request->data as $key => $value) {
        //         $item = $items->find($value['position_type']);
        //         $item = $items->find($value['level']);
        //         $item = $items->find($value['education_level']);

        //         if ($item) {
        //             Position::create([
        //                 "position_type_id" => $value["position_type"],
        //                 "position" => $value["position"],
        //                 "level_id"=>$value["level"],
        //                 "edu_level_id" => $value["education_level"],
        //                 "experience" => $value["experience"],

        //             ]);
        //         }
        //     }
        // }
        // return response()->json(array("success" => true));
    }
    public function edit($id)
    {
        $level = PositionType::all();
        $admin = Position::find($id);
        return view('adminpage.position.edit', compact('admin', 'level'));
    }
    public function update(Request $request, $id)
    {

        $admin = Position::find($id);
        $admin->position = $request->Input('position');
        $admin->position_type_id = $request->position_type_id;
        $admin->update();


        return redirect('position')->with('status', 'position updated successfully');
    }
    public function destroy($id)
    {
        $admin = Position::find($id);


        $admin->delete();
        return redirect('position')->with('status', 'position  deleted successfully');
    }
}
