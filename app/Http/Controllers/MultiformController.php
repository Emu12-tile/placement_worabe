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
use App\Models\Education;
use App\Models\experience;
use App\Models\JobCategory;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\EducationType;
use App\Models\EmployerSupport;
use App\Models\Morerole;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
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
                'email' => ['nullable', 'string', 'email', 'max:255',  'regex:/(.*)@mwu.edu.et/i', 'unique:' . Form::class],
                'phone' => 'nullable',
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



        $form = $request->session()->get('form');


        return view('multiforms.create-step-two', compact('form'));
    }

    public function postCreateStepTwo(Request $request)
    {
        // dd($request);

        $validatedData = $request->validate(
            [
                // 'firstdergee' => 'required',
                'ethinicity' => 'required',

                'level' => 'required',
                'addMoreFields.*.level' => 'required',
                'addMoreFields.*.discipline' => 'required',
                'addMoreFields.*.academicPreparationCOC' => 'required',
                'addMoreFields.*.completion_date' => 'required',

                'positionofnow' => 'required',
                'birth_date' => 'required',
                'jobcat' => 'required',

            ]
        );

        // dd($validatedData);

        $form = $request->session()->get('form');
        $form->fill($validatedData);
        $request->session()->put('form', $form);
        return redirect()->route('multiforms.create.step.three');
    }
    public function createStepThree(Request $request)
    {
        // $level = Admin::all();
        $form = $request->session()->get('form');


        return view('multiforms.create-step-three', compact('form'));
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
                'serviceBeforeDiplo' => 'required',
                'serviceAfterDiplo' => 'required',
                'resultOfrecentPerform' => 'required', 'regex:/^(?:d*.d{1,2}|d+)$/', 'min:1', 'max:100',
                'DisciplineFlaw' => 'required',
                'MoreRoles' => 'nullable',


            ]
        );


        $form =
            Form::create([
                'firstName' => $data->firstName,
                'middleName' => $data->middleName,
                'lastName' => $data->lastName,
                'email' => $data->email,
                'phone' => $data->phone,

                'level' => $data->level,
                // 'edu_level_id' => $data->edu_level_id,
                'position_id' => $data->position_id,
                'choice2_id' => $data->choice2_id,
                'job_category_id' => $data->job_category_id,
                'jobcat2_id' => $data->jobcat2_id,
                'positionofnow' => $data->positionofnow,
                'firstdergee' => $data->firstdergee,
                'sex' => $data->sex,
                'ethinicity' => $data->ethinicity,
                'birth_date' => $data->birth_date,
                'jobcat' => $data->jobcat,

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

        foreach ($request->addMoreFields as $key => $val) {
            Education::create([
                "form_id" => $form->id,
                "level" => $val["level"],
                "discipline" => $val["discipline"],
                "academicPreparationCOC" => $val["academicPreparationCOC"],
                "completion_date" => $val["completion_date"],

            ]);
        }





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
        return redirect('/submitted/' . $form->id);
    }

    public function submit($id)
    {
        $form = Form::find($id);
        // dd($form);
        return view('homepage.submit', ['form' => $form]);
    }

    public function export_pdf($id)
    {
        $form = Form::find($id);
        $edu = Education::where('form_id', $form->id)->get();
        $forms = experience::where('form_id', $form->id)->get();
        $morerole = Morerole::where('form_id', $form->id)->get();
        $employer_support = EmployerSupport::where('form_id', $form->id)->get();

        return view('homepage.export', compact('form', 'forms', 'edu', 'employer_support', 'morerole'))
            ->with('success', 'Export completed successfully.')
            ->with('redirect', Redirect::to('/hr'));
    }
    public function edit1($id)
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
        $form = Form::find($id);

        $forms = experience::where('form_id', $form->id)->get();

        $form = Form::find($id);

        $forms = experience::where('form_id', $form->id)->get();
        return view('multiforms.edit', compact('form', 'forms', 'level', 'level2', 'position', 'position2', 'jobcat2', 'edu_level', 'job_category', 'edutype', 'form', 'choice2'));
    }
    public function update1(Request $request, $id)
    {
        $form = Form::find($id);


        $form->firstName = $request->Input('firstName');
        $form->middleName = $request->Input('middleName');
        $form->lastName = $request->Input('lastName');
        $form->email = $request->Input('email');
        $form->sex = $request->Input('sex');
        $request->session()->put('form', $form);
        // $form->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('edit-steptwo/', $id);
    }
    public function edit2($id)
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
        $form = Form::find($id);

        $forms = experience::where('form_id', $form->id)->get();
        return view('multiforms.edit2', compact('form', 'forms', 'level', 'level2', 'position', 'position2', 'jobcat2', 'edu_level', 'job_category', 'edutype', 'form', 'choice2'));
    }
    // public function edit3($id)
    // {

    //     $form = Form::find($id);

    //     $forms = experience::where('form_id', $form->id)->get();
    //     return view('multiforms.edit', compact('form', 'forms'));
    // }
    public function update2(Request $request, $id)
    {
        $form = Form::find($id);


        $form->fee = $request->Input('fee');
        $form->position_id = $request->Input('position_id');
        $form->job_category_id = $request->Input('job_category_id');
        $form->jobcat2_id = $request->Input('jobcat2_id');
        $form->level_id = $request->Input('level_id');
        $form->edu_level_id = $request->Input('edu_level_id');
        $form->education_type_id = $request->Input('education_type_id');
        $form->positionofnow = $request->Input('positionofnow');
        $form->choice2_id = $request->Input('choice2_id');

        $form->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect()->route('edit-steptwo');
    }
}
