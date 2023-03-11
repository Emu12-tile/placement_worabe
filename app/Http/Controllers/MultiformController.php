<?php

namespace App\Http\Controllers;

use App\Models\HR;
use Carbon\Carbon;
use App\Models\Form;
use App\Models\Admin;
use App\Models\Level;
use App\Models\choice1;
use App\Models\choice2;
use App\Models\jobcat2;
use App\Models\EduLevel;
use App\Models\Position;
use App\Models\experience;
use App\Models\JobCategory;
use App\Models\EducationType;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;



class MultiformController extends Controller
{


    // public function index()
    // {

    //     $forms = Form::latest()->paginate(4);


    //     return view('hr.index', compact('forms'));
    // }
    public function createStepOne(Request $request)
    {

        $form = $request->session()->get('form');

        return view('multiforms.create-step-one', compact('form'));
    }
    public function postCreateStepOne(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate(
            [
                'firstName' => 'required',
                'middleName' => 'required',
                'lastName' => 'required',
                'sex' => 'required',
                'email' => ['required', 'string', 'email', 'max:255',  'regex:/(.*)@aastu.edu.et/i', 'unique:users'],
                'phone' => 'required',
            ]
        );

        if (empty($request->session()->get('form'))) {
            $form = new Form();
            $form->fill($validatedData);
            $request->session()->put('form', $form);
        } else {
            $form = $request->session()->get('form');
            $form->fill($validatedData);
            $request->session()->put('form', $form);
        }
        return redirect()->route('multiforms.create.step.two');
    }
    public function createStepTwo(Request $request)
    {

        $level = Level::all();
        $edu_level = EduLevel::all();
        $job_category = JobCategory::all();
        $position = Position::all();
        $choice2 = choice2::all();

        $jobcat2 = jobcat2::all();
        // $edutype = EducationType::all();
        $edutype = EducationType::all();
        $level2 = Level::all();

        $position2 = Position::all();
        $form = $request->session()->get('form');


        return view('multiforms.create-step-two', compact('level', 'level2', 'position', 'position2', 'jobcat2', 'edu_level', 'job_category', 'edutype', 'form', 'choice2'));
    }
    // public function position($id)
    // {
    //     $position = DB::table("positions")
    //         ->where("job_category_id", $id)
    //         ->pluck('position', 'id');


    //     return json_encode($position);
    // }
    public function position(Request $request)
    {
        $position = Position::select('position', 'id')
            ->where("job_category_id", $request->id)->take(100)->get();


        return response()->json($position);
    }
    public function position2(Request $request)
    {
        $position2 = choice2::select('position', 'id')
            ->where("jobcat2_id", $request->id)->take(100)->get();


        return response()->json($position2);
    }

    public function selection(Request $request)
    {
        $selected = Position::all()->where("id", $request->id)->first();


        return response()->json($selected);
    }
    public function selection2(Request $request)
    {
        $selected = choice2::all()->where("id", $request->id)->first();


        return response()->json($selected);
    }
    public function postCreateStepTwo(Request $request)
    {
        // dd($request);

        $validatedData = $request->validate(
            [
                'fee' => 'required',
                'position_id' => 'required',
                'job_category_id' => 'required',
                'jobcat2_id' => 'required',
                'level_id' => 'required',
                'edu_level_id' => 'required',
                'education_type_id' => 'required',
                'positionofnow' => 'required',
                'choice2_id' => 'required',


            ]
        );

        if (empty($request->session()->get('form'))) {
            $form = new Form();
            $form->fill($validatedData);
            $request->session()->put('form', $form);
        } else {
            $form = $request->session()->get('form');
            $form->fill($validatedData);
            $request->session()->put('form', $form);
        }

        return redirect()->route('multiforms.create.step.three');
    }
    public function createStepThree(Request $request)
    {
        // $level = Admin::all();
        $form = $request->session()->get('form');


        return view('multiforms.create-step-three', compact('level', 'form'));
    }
    public function postCreateStepThree(Request $request)
    {

        $data = $request->session()->get('form');

        // dd($request->addMoreInputFields);
        $validatedData = $request->validate(
            [
                'addMoreInputFields.*.startingDate' => 'date|nullable',
                'addMoreInputFields.*.endingDate' => 'date|after:starting_date|nullable',
                'addMoreInputFields.*.positionyouworked' => 'nullable',
                'UniversityHiringEra' => 'required',
                'servicPeriodAtUniversity' => 'required',
                'servicPeriodAtAnotherPlace' => 'required',
                'serviceBeforeDiplo' => 'required',
                'serviceAfterDiplo' => 'required',
                'resultOfrecentPerform' => 'required',
                'DisciplineFlaw' => 'required',
                'MoreRoles' => 'required',


            ]
        );


        $form =
            Form::create([
                'firstName' => $data->firstName,
                'middleName' => $data->middleName,
                'lastName' => $data->lastName,
                'email' => $data->email,
                'phone' => $data->phone,

                'education_type_id' => $data->education_type_id,
                'level_id' => $data->level_id,
                'edu_level_id' => $data->edu_level_id,
                'position_id' => $data->position_id,
                'choice2_id' => $data->choice2_id,
                'job_category_id' => $data->job_category_id,
                'jobcat2_id' => $data->jobcat2_id,
                'positionofnow' => $data->positionofnow,
                'sex' => $data->sex,
                'fee' => $data->fee,
                "UniversityHiringEra" => $request->UniversityHiringEra,
                "servicPeriodAtUniversity" => $request->servicPeriodAtUniversity,
                "servicPeriodAtAnotherPlace" => $request->servicPeriodAtAnotherPlace,
                "serviceBeforeDiplo" => $request->serviceBeforeDiplo,
                "serviceAfterDiplo" => $request->serviceAfterDiplo,
                "resultOfrecentPerform" => $request->resultOfrecentPerform,
                "DisciplineFlaw" => $request->DisciplineFlaw,
                "MoreRoles" => $request->MoreRoles,
            ]);
        $request->session()->put('form', $form);
        $form->save();






        foreach ($request->addMoreInputFields as $key => $value) {

            $exp = experience::create([
                "form_id" => $form->id,
                "positionyouworked" => $value["positionyouworked"],
                "startingDate" => $value["startingDate"],
                "endingDate" => $value["endingDate"],
            ]);
            // $request->session()->put('exp', $exp);
            // $exp->save();

        }
        if (empty($request->session()->get('form'))) {
            $form = new Form();
            $form->fill($validatedData);
            $request->session()->put('form', $form);
        } else {
            $form = $request->session()->get('form');
            $form->fill($validatedData);
            $request->session()->put('form', $form);
        }



        // $form->$request->session()->get('form');
        // $exp->$request->session->get('form');
        $request->session()->forget('form');

        // return redirect('/export_pdf/' . $form->id);
        return redirect('/submitted/'.$form->id);
    }



    public function show($id)
    {
        $form = Form::find($id);

        $forms = Form::select("*", DB::raw("CONCAT(forms.firstName,' ',forms.middleName,' ',forms.lastName) as full_name"))
            ->get();

        return view('hr.show', ['form' => $form, 'forms' => $forms]);
    }
    public function submit($id)
    {
        $form = Form::find($id);
        return view('homepage.submit', compact('form'));
    }
    public function export_pdf($id)
    {

        $form = Form::find($id);

        $forms = experience::where('form_id', $form->id)->get();

        return view('homepage.export', compact('form', 'forms'));
    }
}
