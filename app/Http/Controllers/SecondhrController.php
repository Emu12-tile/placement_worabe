<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Secondhr;
use App\Models\experience;
use Illuminate\Http\Request;

class SecondhrController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $hrs = Secondhr::all();

        // $hrs = Secondhr::join('forms', 'forms.id', '=', 'secondhrs.form_id')
        // ->join('choice2s', 'choice2s.id', '=', 'forms.choice2_id')
        // ->where('choice2s.position_type_id', 1)->get();

        return view('secondchoice.index', compact('hrs'));
    }
    public function secondchoice()
    {

        // $forms = Form::all();
        $forms = Form::where('secondhrs', null)->paginate(5);


        return view('secondchoice.secondchoice', compact('forms'));
    }

    public function index2()
    {

        $hrs = Secondhr::latest()->paginate(10);
        // $hrs = Secondhr::join('forms', 'forms.id', '=', 'h_r_s.form_id')
        //     ->join('positions', 'positions.id', '=', 'forms.position_id')
        //     ->where('positions.position_type_id', 2)->get();
        // dd($hrs);

        return view('secondchoice.lowresource', compact('hrs'));
    }




    public function createhr1($prod1_id)
    {
        $form = Form::findOrFail($prod1_id);

        $forms = experience::where('form_id', $form->id)->get();
        // return view('resource.evaluate', ['id' => $prod_id,'form'=>$form]);

        if ($form->choice2->position_type_id == 1) {


            return view('secondchoice.evaluate', ['id' => $prod1_id, 'form' => $form, 'forms' => $forms]);
        } elseif ($form->choice2->position_type_id == 2) {


            return view('secondchoice.lowevaluation', ['id' => $prod1_id, 'form' => $form, 'forms' => $forms]);
        } else {
            return back();
        }
    }
    public function store(Request $request)
    {



        $res = new Secondhr;


        $res->performance = $request->Input('performance');
        $res->presidentGrade = $request->Input('presidentGrade');
        $res->user_id = auth()->user()->id;
        $res->experience = $request->Input('experience');
        $res->resultbased = $request->Input('resultbased');
        $res->exam = $request->Input('exam');
        if (($res->save() == true)) {
            // $resource->status_hr ->fill(1) ;
            $res->status_hr = 1;
        }
        $res->save();






        if ($request->type == 'first') {
            return redirect('secondhr')->with('status', 'evaluation added successfully');
        } else if ($request->type == 'second') {
            return redirect('secondlow');
        }
    }
    public function storeRestore1(Request $request, $prod1_id)
    {

        $prod1 = Form::findOrFail($prod1_id);



        $res = new Secondhr;


        $res->performance = $request->performance;
        $res->experience = $request->experience;
        $res->resultbased = $request->resultbased;
        $res->user_id = auth()->user()->id;
        $res->presidentGrade = $request->presidentGrade;
        $res->exam = $request->exam;
        // $resource->status_hr = $request->status_hr;
        $res->form_id = $prod1->id;
        // dd($resource->save());
        if (($res->save() == true)) {
            // $resource->status_hr ->fill(1) ;
            $res->status_hr = 1;
            $prod1->secondhrs = 1;
        }
        $res->save();
        $prod1->save();


        // }
        if ($request->type == 'first') {
            return redirect('secondhr')->with('status', 'evaluation added successfully');
        } else if ($request->type == 'second') {
            return redirect('secondlow')->with('status', 'evaluation added successfully');;
        }
    }
    public function edit($id)
    {

        $hr = Secondhr::find($id);

        return view('secondchoice.edit', ['hr' => $hr]);
    }

    public function update(Request $request, $id)
    {
        $hr = Secondhr::find($id);


        // $hr->performance = $request->Input('performance');
        // $hr->experience = $request->Input('experience');
        // $hr->resultbased = $request->Input('resultbased');
        // $hr->exam = $request->Input('exam');
        $hr->presidentGrade = $request->Input('presidentGrade');
        if ($hr->update()) {
            $hr->status_president = 1;
        };
        $hr->update();

        return redirect('choice2evaluation')->with('status', 'stock updated successfully');
    }
    public function destroy($id)
    {
        $form = Form::find($id);


        $form->delete();
        return back()->with('status', '  deleted successfully');
    }
}
