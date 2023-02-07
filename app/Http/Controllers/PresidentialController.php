<?php

namespace App\Http\Controllers;

use App\Models\HR;
use App\Models\Form;
use Illuminate\Http\Request;

class PresidentialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
            // list all aplicants that applied for postion type i.e high 2
            // where posion type 2
            // prod id
        // hr-
        $hrs = HR::paginate(5);
        

        return view('presidential.index', compact('hrs'));
    }
    public function search()
    {
        $hrs = HR::paginate(5);
        $search_text = $_GET['query'];
        $product = Form::where('firstName',  'LIKE', '%' . $search_text . '%')->get();
        // $cat = Product::where('category_name',  'LIKE', '%' . $search_text . '%')->get();
        return view('presidential.index', compact('product','hrs'));
    }
}
