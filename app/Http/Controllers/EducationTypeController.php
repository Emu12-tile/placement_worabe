<?php

namespace App\Http\Controllers;

use App\Models\EducationType;
use Illuminate\Http\Request;

class EducationTypeController extends Controller
{
    public function index()
    {
        $admins = EducationType::paginate(20);


        return view('adminpage.education_type.index', compact('admins'));
    }
    public function create()
    {



        return view('adminpage.education_type.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->ajax()) {


            foreach ($request->data as $key => $value) {

                EducationType::create([
                    "education_type" => $value["education_type"],

                ]);
            }
        }
        return response()->json(array("success" => true));
    }
    public function edit($id)
    {
        $admin = EducationType::find($id);
        return view('adminpage.education_type.edit', compact('admin'));
    }
    public function update(Request $request, $id)
    {

        $admin = EducationType::find($id);
        $admin->education_type = $request->Input('education_type');
        $admin->update();


        return redirect('educationtype')->with('status', 'educationtype updated successfully');
    }
    public function destroy($id)
    {
        $admin = EducationType::find($id);


        $admin->delete();
        return redirect('educationtype')->with('status', 'educationtype  deleted successfully');
    }
}
