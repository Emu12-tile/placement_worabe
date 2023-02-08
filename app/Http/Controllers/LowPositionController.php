<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\lowhrs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LowPositionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $hrs = lowhrs::paginate(8);
        $form = Form::all();

        return view('lowresource.index', compact('hrs'));
    }

    public function create()
    {

        // $position_type = 'high';
        // if (DB::table('admins')->where('position_type', 'high')->first()) {

        return view('lowresource.lowEvaluation', compact('main'));
    }



    public function createhr($prod_id)
    {
        $form = Form::findOrFail($prod_id);
        if ($form->position->position_type_id == 1) {

        return view('resource.evaluate', ['id' => $prod_id,'form'=>$form]);
        }

    }
    public function store(Request $request)
    {
        // stock product id
        // product name
        // dd($request);
        $resource = new lowhrs;

        $resource->performance = $request->Input('performance');
        $resource->presidentGrade = $request->Input('performance');

        $resource->experience = $request->Input('experience');
        $resource->resultbased = $request->Input('resultbased');


        $resource->save();

        return redirect('lowresource')->with('status', 'evaluation added successfully');
    }
    public function storeRestore(Request $request, $prod_id)
    {
        // stock product id
        // product name
        // dd($prod_id);
        $prod = Form::findOrFail($prod_id);
        // dd($prod);

        $resource = new lowhrs;


        $resource->performance = $request->performance;
        $resource->experience = $request->experience;
        $resource->resultbased = $request->resultbased;



        $resource->form_id = $prod->id;

        $resource->save();


        return redirect('lowresource')->with('status', 'evaluation added successfully');



}
}
