<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $forms = Form::paginate(5);

     
        return view('hr.table', compact('forms'));
    }
}
