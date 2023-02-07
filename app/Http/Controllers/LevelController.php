<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {

        $admins = Level::paginate(8);


        return view('adminpage.level.index', compact('admins'));
    }
    public function create()
    {



        return view('adminpage.level.create');
    }
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'addMoreInputFields.*.level' => 'required',
        // ]);
        // foreach ($request->addMoreInputFields as $key => $value) {
        //     Level::create($value);
        // };
        // return redirect()->route('level.index');
        if ($request->ajax()) {


            foreach ($request->data as $key => $value) {

                Level::create([
                    "level" => $value["level"],

                ]);
            }
        }
        return response()->json(array("success" => true));
    }
    public function edit($id)
    {
        $admin = Level::find($id);
        return view('adminpage.level.edit', compact('admin'));
    }
    public function update(Request $request, $id)
    {

        $admin = Level::find($id);
        $admin->level = $request->Input('level');
        $admin->update();


        return redirect('level')->with('status', 'level updated successfully');
    }
    public function destroy($id)
    {
        $admin = Level::find($id);


        $admin->delete();
        return redirect('level')->with('status', 'level  deleted successfully');
    }
}
