<?php

namespace App\Http\Controllers;

use App\Models\HR;
use App\Models\Form;
use App\Models\Admin;
use App\Models\Position;
use App\Models\experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResourceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $hrs = HR::latest()->paginate(10);
        $form = Form::all();

        //dd($hrs[0]->form->position->position_type_id);
        // hrs -> form ->postion->prositontype_id
        return view('resource.index', compact('hrs'));
    }
    public function index2()
    {

        $hrs = HR::latest()->paginate(5);



        return view('lowresource.lowresource', compact('hrs'));
    }

    public function create()
    {
        $form = Form::all();

        // $position_type = 'high';
        // if (DB::table('admins')->where('position_type', 'high')->first()) {

        return view('resource.evaluate', compact('form'));
    }



    public function createhr($prod_id)
    {
        $form = Form::findOrFail($prod_id);

        $forms = experience::where('form_id', $form->id)->get();
        // return view('resource.evaluate', ['id' => $prod_id,'form'=>$form]);

        if ($form->position->position_type_id == 1) {


            return view('resource.evaluate', ['id' => $prod_id, 'form' => $form, 'forms' => $forms]);
        } elseif ($form->position->position_type_id == 2) {


            return view('lowresource.lowevaluation', ['id' => $prod_id, 'form' => $form, 'forms' => $forms]);
        } else {
            return back();
        }
    }
    public function store(Request $request)
    {

        // $this->validate($request, [
        //     'product_name'     => 'required',

        //     'category_id' => 'required',
        //     'description' => 'required'
        // ]);

        // Product::create($request->all());

      $resource= $request->validate(
            [

                // 'performance' => 'required',
                'performance' => 'required',
                'experience' => 'required',
                'resultbased' => 'required',
                'exam' => 'required',
                // 'MoreRoles' => 'required',


            ]
        );


        $resource = new HR;


        $resource->performance = $request->Input('performance');
        $resource->presidentGrade = $request->Input('presidentGrade');
        $resource->user_id = auth()->user()->id;
        $resource->experience = $request->Input('experience');
        $resource->resultbased = $request->Input('resultbased');
        $resource->exam = $request->Input('exam');
        if (($resource->save() == true)) {
            // $resource->status_hr ->fill(1) ;
            $resource->status_hr = 1;

        }
        $resource->save();






        if ($request->type == 'high') {
            return redirect('resource')->with('status', 'evaluation added successfully');
        } else if ($request->type == 'low') {
            return redirect('lowresource');
        }
    }
    public function storeRestore(Request $request, $prod_id)
    {

        $prod = Form::findOrFail($prod_id);




        $resource = new HR;


        $resource->performance = $request->performance;
        $resource->experience = $request->experience;
        $resource->resultbased = $request->resultbased;
        $resource->user_id = auth()->user()->id;
        $resource->presidentGrade = $request->presidentGrade;
        $resource->exam = $request->exam;
        // $resource->status_hr = $request->status_hr;
        $resource->form_id = $prod->id;
        // dd($resource->save());
        if (($resource->save() == true)) {
            // $resource->status_hr ->fill(1) ;
            $resource->status_hr = 1;
            $prod->h_r_id=1;
        }
        $resource->save();
       $prod->save();

        // }
        if ($request->type == 'high') {
            return redirect('resource')->with('status', 'evaluation added successfully');
        } else if ($request->type == 'low') {
            return redirect('lowresource')->with('status', 'evaluation added successfully');;
        }
    }
    public function edit($id)
    {

        $hr = HR::find($id);

        return view('resource.edit', ['hr' => $hr]);
    }

    public function update(Request $request, $id)
    {
        $hr = HR::find($id);


        // $hr->performance = $request->Input('performance');
        // $hr->experience = $request->Input('experience');
        // $hr->resultbased = $request->Input('resultbased');
        // $hr->exam = $request->Input('exam');
        $hr->presidentGrade = $request->Input('presidentGrade');
        if ($hr->update()) {
            $hr->status_president = 1;
        };
        $hr->update();

        return redirect('evaluation')->with('status', 'stock updated successfully');
    }
}
