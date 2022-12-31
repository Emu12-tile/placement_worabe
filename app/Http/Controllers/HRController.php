<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class HRController extends Controller
{
    public function index()
    {
        $forms = Form::paginate(5);
        // return view('stock.index', compact('stocks'));
        return view('hr.index', compact('forms'));
    }
}
