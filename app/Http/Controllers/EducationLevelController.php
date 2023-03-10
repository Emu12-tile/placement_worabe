<?php

namespace App\Http\Controllers;

use App\Models\EduLevel;
use Illuminate\Http\Request;

class EducationLevelController extends Controller
{
    public function index()
    {

        $admins = EduLevel::paginate(8);


        return view('adminpage.Education_level.index', compact('admins'));
    }
    public function create()
    {



        return view('adminpage.Education_level.create');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'addMoreInputFields.*.education_level' => 'required',
        ]);
        foreach ($request->addMoreInputFields as $key => $value) {
            EduLevel::create($value);
        };
        return redirect()->route('educationlevel.index');
    }
    public function edit($id)
    {
        $admin = EduLevel::find($id);
        return view('adminpage.Education_level.edit', compact('admin'));
    }
    public function update(Request $request, $id)
    {

        $admin = EduLevel::find($id);
        $admin->education_level = $request->Input('education_level');
        $admin->update();


        return redirect('educationlevel')->with('status', 'educationlevel updated successfully');
    }
    public function destroy($id)
    {
        $admin = EduLevel::find($id);


        $admin->delete();
        return redirect('educationlevel')->with('status', 'educationlevel  deleted successfully');
    }
}
