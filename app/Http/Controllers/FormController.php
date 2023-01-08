<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Admin;
use App\Models\Educationtype;
use Illuminate\Http\Request;

class FormController extends Controller
{
    
    public function index()
    {
        // Auth::user()->assignRole('admin');
        // Auth::user()->assignRole('president');
        // Auth::user()->assignRole('hr');


        // $usertype = Auth::user()->role_id; //return 1, 2, or 3

        // $forms = [];
        // $allow_edit = true;

        // if ($usertype == 1) //hr
        // {
        $forms = Form::paginate(5);
        // } else if ($usertype == 2) //president
        // {
        //     $forms = Form::where(['evaluated_by_hr' => 1])->paginate(5);
        // } else //3 admin
        // {
        //     $forms = Form::paginate(5);
        //     $allow_edit = false;
        // }

        return view('hr.index', compact('forms'));
    }
    // return view('hr.index', compact('forms', 'allow_edit'));
    public function create()
    {

        $level = Admin::all();
        // $type = Educationtype::all();

        // $user = DB::table('users')->get();
        return view('welcome', compact('level'));
    }
    public function store(Request $request)
    {
        // dd($request);
        if ($request->ajax()) {
            $items = Form::get();

            foreach ($request->data as $key => $value) {
                $item = $items->find($value['admin']);
                // dd($value);
                if ($item) {
                    Form::create([
                        "admin_id" => $value["admin"],
                        "date" => $value["startingDate"],
                        "date" => $value["endingDate"],
                        "firstName" => $request->firstName,
                        "middleName" => $request->middleName,
                        "lastName" => $request->lastName,
                        "email" => $request->email,
                        "phone" => $request->phone,
                        "file" => $request->file,
                        // "educationtype_id" => $request->educationtype_id,


                    ]);
                    // dd($request);

                }
            }
            // $item->save();
            return response()->json(array("success" => true));
        }
        // dd($request->input());
        // $form = new Form;
        // $form->firstName = $request->Input('firstName');
        // $form->middleName = $request->Input('middleName');
        // $form->lastName = $request->Input('lastName');
        // $form->email = $request->Input('email');
        // $form->phone = $request->Input('phone');
        // $form->file = $request->Input('file');
        // $form->admin_id = $request->admin_id;
        // $form->educationtype_id = $request->educationtype_id;



        // return redirect('hr')->with('status', 'hr added successfully');
    }
}
