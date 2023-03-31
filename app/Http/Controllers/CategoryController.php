<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {

        $admins = Category::paginate(8);
        $status = DB::table('statuses')->get();

        return view('adminpage.category.index', compact('admins', 'status'));
    }
    public function create()
    {



        return view('adminpage.category.create');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'category'     => 'required',

        ]);
        Category::create($request->all());
        return redirect('category');
    }
    public function chanStatus(Request $request)
    {
        if ($request->ajax()) {
            $item = Category::find($request->admin);


            if ($item) {
                $item->catstatus = $request->status;
                // $item->store_status = $request->status;
                $item->update();

                return response()->json(array("success" => true));
            }
        }
    }
    public function edit($id)
    {
        $admin = Category::find($id);
        return view('adminpage.category.edit', compact('admin'));
    }
    public function update(Request $request, $id)
    {

        $admin = Category::find($id);
        $admin->category = $request->Input('category');
        $admin->update();


        return redirect('category')->with('status', ' updated successfully');
    }
    public function destroy($id)
    {
        $admin = Category::find($id);


        $admin->delete();
        return redirect('category')->with('status', 'educationlevel  deleted successfully');
    }
}
