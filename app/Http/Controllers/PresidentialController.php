<?php

namespace App\Http\Controllers;

use App\Models\HR;
use App\Models\Form;
use App\Models\Secondhr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $hrs = HR::where('status_president',1)->join('forms', 'forms.id', '=', 'h_r_s.form_id')
            ->join('positions', 'positions.id', '=', 'forms.position_id')
            ->where('positions.position_type_id', 1)->paginate(15);

        // $hrs = HR::latest()->paginate(5);


        return view('presidential.index', compact('hrs'));
    }
    public function choice2()
    {
        // $hrs = HR::latest()->paginate(5);
        $hrs = Secondhr::where('status_president', 1)->join('forms', 'forms.id', '=', 'secondhrs.form_id')
            ->join('choice2s', 'choice2s.id', '=', 'forms.choice2_id')
            ->where('choice2s.position_type_id', 1)->paginate(5);
        return view('presidential.choice2evaluation', compact('hrs'));
    }


    public function all()
    {
        $hrs = HR::all();
        return view('presidential.bothresult', compact('hrs'));
    }

    public function search()
    {
        $hrs = HR::paginate(5);
        $search_text = $_GET['query'];
        $product = Form::where('firstName',  'LIKE', '%' . $search_text . '%')->get();
        // $cat = Product::where('category_name',  'LIKE', '%' . $search_text . '%')->get();
        return view('presidential.index', compact('product', 'hrs'));
    }
}
