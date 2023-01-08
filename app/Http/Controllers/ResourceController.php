<?php

namespace App\Http\Controllers;

use App\Models\HR;
use App\Models\Form;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $hrs = HR::paginate(5);


        return view('resource.index', compact('hrs'));
    }

    public function create()
    {
        return view('resource.evaluate');
    }

    public function createhr($prod_id)
    {
        // dd($prod_id);
        //TODO check $prod_id is number
        return view('resource.evaluate', ['id' => $prod_id]);
    }
    public function store(Request $request)
    {
        // stock product id
        // product name
        // dd($request);
        $resource = new HR;

        $resource->performance = $request->Input('performance');


        $resource->experience = $request->Input('experience');
        $resource->resultbased = $request->Input('resultbased');
        $resource->exam = $request->Input('exam');

        $resource->save();


        return redirect('resource')->with('status', 'evaluation added successfully');
    }
    public function storeRestore(Request $request, $prod_id)
    {
        // stock product id
        // product name
        // dd($prod_id);
        $prod = Form::findOrFail($prod_id);
        // dd($prod);

        $resource = new HR;


        $resource->performance = $request->performance;
        $resource->experience = $request->experience;
        $resource->resultbased = $request->resultbased;
        $resource->exam = $request->exam;

        $resource->form_id = $prod->id;

        $resource->save();

        return redirect('resource')->with('status', 'evaluation added successfully');
    }
}
