<?php

namespace App\Http\Controllers;

use App\Models\jobcat2;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function index()
    {

        $admins = JobCategory::all();


        return view('adminpage.job_category.index', compact('admins'));
    }
    public function create()
    {



        return view('adminpage.job_category.create');
    }
    public function store(Request $request)
    {

        if ($request->ajax()) {


            foreach ($request->data as $key => $value) {

                JobCategory::create([
                    "job_category" => $value["job_category"],

                ]);
                jobcat2::create([
                    "job_category" => $value["job_category"],

                ]);
            }
        }
        return response()->json(array("success" => true));
    }
    public function edit($id)
    {
        $admin = JobCategory::find($id);
        return view('adminpage.job_category.edit', compact('admin'));
    }
    public function update(Request $request, $id)
    {

        $admin = JobCategory::find($id);
        $admin->job_category = $request->Input('job_category');
        $admin->update();
        $admin2 = jobCat2::find($id);
        $admin2->job_category = $request->Input('job_category');
        $admin2->update();


        return redirect('jobcategory')->with('status', 'jobcategory updated successfully');
    }
    public function destroy($id)
    {
        $admin2 = Jobcat2::find($id);


        $admin2->delete();
        $admin = JobCategory::find($id);


        $admin->delete();
        return redirect('jobcategory')->with('status', 'jobcategory  deleted successfully');
    }
}
