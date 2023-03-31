<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $forms = Form::where('isEditable',1)->paginate(10);

// ->with('i', (request()->input('page', 1) - 1) * 5)
        return view('hr.table', compact('forms'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
    // function get_ajax_data(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $forms = Form::paginate(5);
    //         return view('hr.table', compact('forms'))->render();
    //     }
    // }
}
