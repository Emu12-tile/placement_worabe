<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HRController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        // return view('hr.index', compact('forms', 'allow_edit'));
    }
    public function create()
    {
        return view('hr.evaluate');
    }
    // public function createhr($prod_id)
    // {
    //     // dd($prod_id);
    //     //TODO check $prod_id is number
    //     return view('hr.evaluate', ['id' => $prod_id]);
    // }
    // public function store(Request $request)
    // {

    //     $form = new Form;

    //     $form->user_id = auth()->user()->id;
    //     $form->quantity = $request->quantity;
    //     $form->save();


    //     return redirect('req')->with('status', 'request added successfully');
    // }

}
