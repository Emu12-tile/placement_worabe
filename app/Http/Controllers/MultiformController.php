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
                'email' => ['required', 'string', 'email', 'max:255',  'regex:/(.*)@aastu.edu.et/i', 'unique:' . Form::class],
                'phone' => 'required|numeric|digits:10',
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
                // 'firstdergee' => 'required',
                'fee' => 'required',
                'position_id' => 'required',
                'job_category_id' => 'required',
                'jobcat2_id' => 'required',
                'level_id' => 'required',
                'addMoreFields.*.edu_level_id' => 'required',
                'addMoreFields.*.education_type_id' => 'required',
                // 'edu_level_id' => 'required',
                // 'education_type_id' => 'required',
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

            $request->session()->put('form', $form, 'fo');
        }

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
                'servicPeriodAtAnotherPlace' => 'required',
                'serviceBeforeDiplo' => 'required',
                'serviceAfterDiplo' => 'required',
                'resultOfrecentPerform' => 'required', 'regex:/^(?:d*.d{1,2}|d+)$/', 'min:1', 'max:100',
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
                // slug
                'tag_slug' => Str::slug($data->lastName, '-' . Str::random()),

                // 'education_type_id' => $data->education_type_id,
                'level_id' => $data->level_id,
                // 'edu_level_id' => $data->edu_level_id,
                'position_id' => $data->position_id,
                'choice2_id' => $data->choice2_id,
                'job_category_id' => $data->job_category_id,
                'jobcat2_id' => $data->jobcat2_id,
                'positionofnow' => $data->positionofnow,
                'firstdergee' => $data->firstdergee,
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

        foreach ($request->addMoreFields as $key => $val) {
            Education::create([
                "form_id" => $form->id,
                "edu_level_id" => $val["edu_level_id"],
                "education_type_id" => $val["education_type_id"],

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
    // public function export_pdf($id)
    // {

    //     $form = Form::find($id);
    //     $edu = Education::where('form_id', $form->id)->get();
    //     $forms = experience::where('form_id', $form->id)->get();

    //     return view('homepage.export', compact('form', 'forms','edu'));
    // }
    public function export_pdf($id)
    {
        $form = Form::find($id);
        $edu = Education::where('form_id', $form->id)->get();
        $forms = experience::where('form_id', $form->id)->get();

        return view('homepage.export', compact('form', 'forms', 'edu'))
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
