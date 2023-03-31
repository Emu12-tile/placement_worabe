<?php

namespace App\Http\Controllers;

use App\Models\HR;
use App\Models\Form;
use App\Models\Admin;
use App\Models\Position;
use App\Models\Education;
use App\Models\experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class ResourceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $hrs = HR::where('status_hr', 0)->get();
        return view('resource.index', compact('hrs'));
    }
    public function index4()
    {
        $hrs = HR::where('status_hr', 1)->get();
        return view('resource.result', compact('hrs'));
    }

    public function poshigh()
    {
        $forms = Position::join('forms', 'forms.position_id', '=', 'positions.id')
        ->join('categories', 'categories.id', '=', 'positions.category_id')
        ->where('categories.catstatus', 'active')
        ->distinct('positions.id')
        ->get(['positions.id', 'positions.position', 'positions.job_category_id']);


        return view('resource.pos', compact('forms'));
    }
    public function posDetailhigh($id)
    {


        $pos_id = (int) $id;

        $hrs = HR::join('forms', 'forms.id', '=', 'h_r_s.form_id')
        ->join('positions', 'positions.id', '=', 'forms.position_id')

        ->where('status_hr', 1)
        ->where('positions.id', $pos_id)
            ->select('h_r_s.*')
            ->get();



        return view('resource.result', compact('hrs'));
    }


    public function poslow()
    {

        $forms = Position::join('forms', 'forms.position_id', '=', 'positions.id')
        ->join('categories', 'categories.id', '=', 'positions.category_id')
        ->where('categories.catstatus', 'active')
        ->distinct('positions.id')
        ->get(['positions.id', 'positions.position', 'positions.job_category_id']);

        return view('lowresource.pos', compact('forms'));
    }
    public function positionDetail($id)
    {


        $pos_id = (int) $id;

        $hrs = HR::join('forms', 'forms.id', '=', 'h_r_s.form_id')
        ->join('positions', 'positions.id', '=', 'forms.position_id')

            ->where('status_hr', 1)
            ->where('positions.id', $pos_id)
            ->select('h_r_s.*')
            ->get();
            // dd($hrs);



        return view('lowresource.index', compact('hrs'));
    }





    public function index2()
    {

        $hrs = HR::where('status_hr', 0)->latest()->paginate(8);




        return view('lowresource.lowresource', compact('hrs'));
    }
    public function index3()
    {

        $hrs = HR::where('status_hr', 1)->latest()->paginate(8);

        return view('lowresource.index', compact('hrs'));
    }




    public function createhr($prod_id)
    {
        // dd($prod_id);
        $form = Form::findOrFail($prod_id);

        $forms = experience::where('form_id', $form->id)->get();
        $edu = Education::where('form_id', $form->id)->get();


        if ($form->position->position_type_id == 1) {


            return view('resource.evaluate', ['id' => $prod_id, 'form' => $form, 'forms' => $forms, 'edu' => $edu]);
        } elseif ($form->position->position_type_id == 2) {


            return view('lowresource.lowEvaluation', ['id' => $prod_id, 'form' => $form, 'forms' => $forms, 'edu' => $edu]);
        } else {
            return back();
        }
    }
    public function store(Request $request)
    {


        $resource = new HR;


        $resource->performance = $request->Input('performance');
        $resource->presidentGrade = $request->Input('presidentGrade');
        $resource->user_id = auth()->user()->id;
        $resource->experience = $request->Input('experience');
        $resource->resultbased = $request->Input('resultbased');
        $resource->exam = $request->Input('exam');
        if (($resource->save() == true)) {
            // $resource->status_hr ->fill(1) ;
            // $resource->status_hr = 1;

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
            // $resource->status_hr = 1;
            $prod->hrs = 1;
        }
        $resource->save();
        $prod->save();



        if ($request->type == 'high') {
            return redirect('resource')->with('status', 'evaluation added successfully');
        } else if ($request->type == 'low') {
            return redirect('lowresource')->with('status', 'evaluation added successfully');;
        }
    }
    public function edit($id)
    {

        $hr = HR::find($id);
        $edu = Education::where('form_id', $hr->form->id)->get();

        $forms = experience::where('form_id', $hr->form->id)->get();
        if ($hr->form->position->position_type_id == 1) {
            return view('resource.edit', ['hr' => $hr, 'forms' => $forms, 'edu' => $edu]);
        }
        if ($hr->form->position->position_type_id == 2) {
            return view('lowresource.edit', ['hr' => $hr, 'forms' => $forms, 'edu' => $edu]);
        }
    }

    public function update(Request $request, $id)
    {
        $hr = HR::find($id);




        $hr->performance = $request->Input('performance');
        $hr->experience = $request->Input('experience');
        $hr->resultbased = $request->Input('resultbased');
        $hr->exam = $request->Input('exam');
        $hr->user_id = auth()->user()->id;

        $hr->update();
        if ($request->type == 'high') {
            return redirect('resource')->with('status', 'evaluation edited successfully');
        } else if ($request->type == 'low') {
            return redirect('lowresource')->with('status', 'evaluation edited successfully');;
        }
    }
    public function update1(Request $request, $id)
    {
        $hr = HR::find($id);


        $hr->status_hr = 1;


        $hr->update();


        return redirect('resource')->with('status', 'stock updated successfully');
    }
    public function update2(Request $request, $id)
    {
        $hr = HR::find($id);


        $hr->status_hr = 1;


        $hr->update();


        return redirect('lowresource')->with('status', 'stock updated successfully');
    }
}
