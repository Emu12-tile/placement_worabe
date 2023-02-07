<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $admins = Admin::paginate(10);


        return view('adminpage.index', compact('admins'));
    }
    // return view('hr.index', compact('forms', 'allow_edit'));
    public function create()
    {

        // $admin = Admin::all();

        return view('adminpage.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());

        // $this->validate($request, [
        //     'education_level'     => 'required',

        //     'education_type' => 'required',
        //     'position' => 'required',
        //     'position_type' => 'required',
        //     'apply_for_position' => 'required',
        //     'job_category' => 'required',
        //     'level' => 'required',

        // ]);

        Admin::create($request->all());


        return redirect('admin')->with('status', 'admin added successfully');
    }
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('adminpage.edit', compact('admin'));
    }
    public function update(Request $request, $id)
    {

        $admin = Admin::find($id);
        $admin->education_level = $request->Input('education_level');
        $admin->education_type = $request->Input('education_type');
        $admin->position = $request->Input('position');
        $admin->position_type = $request->Input('position_type');
        $admin->apply_for_position = $request->Input('apply_for_position');
        $admin->job_category = $request->Input('job_category');
        $admin->level = $request->Input('level');


        $admin->update();


        return redirect('admin')->with('status', 'info updated successfully');
    }
    public function destroy($id)
    {
        $admin = Admin::find($id);


        $admin->delete();
        return redirect('admin')->with('status', 'inf  deleted successfully');
    }
}
