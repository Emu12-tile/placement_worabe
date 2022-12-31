<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Admin;
use App\Models\Educationtype;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {

        $level = Admin::all();
        $type = Educationtype::all();

        // $user = DB::table('users')->get();
        return view('welcome', compact('level', 'type'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $form = new Form;
        $form->firstName = $request->Input('firstName');
        $form->middleName = $request->Input('middleName');
        $form->lastName = $request->Input('lastName');
        $form->email = $request->Input('email');
        $form->phone = $request->Input('phone');
        $form->admin_id = $request->admin_id;
        $form->educationtype_id = $request->educationtype_id;


        $form->save();
        return redirect('')->with('status', 'department added successfully');
    }
}
