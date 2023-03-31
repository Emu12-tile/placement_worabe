<?php

namespace App\Http\Controllers;

use App\Models\HR;
use Carbon\Carbon;
use App\Models\Form;
use App\Models\Admin;
use App\Models\Level;



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
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{


    // public function index()
    // {



    //     $forms = Form::all()->where('hrs', null);



    //     return view('hr.index', compact('forms'));
    // }

    public function posDetail($id)
    {


        $pos_id = (int) $id;

        $forms = Form::join('positions', 'positions.id', '=', 'forms.position_id')
            ->join('categories', 'categories.id', '=', 'positions.category_id')
            ->where('categories.catstatus', 'active')
            ->where('hrs', null)
            ->where('positions.id', $pos_id)
            ->select('forms.*', 'positions.position')
            ->get();


        return view('hr.index', compact('forms'));
    }
    public function pos()
    {





        // $forms = Form::join('positions', 'positions.id', '=', 'forms.position_id')
        //     ->join('categories', 'categories.id', '=', 'positions.category_id')
        //     ->where('categories.catstatus', 'active')->distinct('positions.id')
        //     ->get(['forms.id', 'positions.position', 'positions.job_category_id']);


        $forms = Position::join('forms', 'forms.position_id', '=', 'positions.id')
            ->join('categories', 'categories.id', '=', 'positions.category_id')
            ->where('categories.catstatus', 'active')
            ->distinct('positions.id')
            ->get(['positions.id', 'positions.position', 'positions.job_category_id']);





        return view('hr.pos', compact('forms'));
    }
    public function posDetail2($id)
    {


        $pos_id = (int) $id;

        $forms = Form::join(
            'choice2s',
            'choice2s.id',
            '=',
            'forms.choice2_id'
        )
            ->join(
                'categories',
                'categories.id',
                '=',
                'choice2s.category_id'
            )
            ->where('categories.catstatus', 'active')
            ->where('secondhrs', null)
            ->where('choice2s.id', $pos_id)
            ->select('forms.*')
            ->get();


        return view('secondchoice.secondchoice', compact('forms'));
    }
    public function pos2()
    {


        $forms = choice2::join('forms', 'forms.choice2_id', '=', 'choice2s.id')
            ->join('categories', 'categories.id', '=', 'choice2s.category_id')
            ->where('categories.catstatus', 'active')
            ->distinct('choice2s.id')
            ->get(['choice2s.id', 'choice2s.position', 'choice2s.jobcat2_id']);



        // $forms = Form::join('positions', 'positions.id', '=', 'forms.position_id')
        //     ->join('categories', 'categories.id', '=', 'positions.category_id')
        //     ->where('categories.catstatus', 'active')->distinct('positions.id')
        //     ->get(['forms.id', 'positions.position', 'positions.job_category_id']);







        return view('secondchoice.pos', compact('forms'));
    }


    public function create()
    {

        $level = Level::all();
        $form = Form::all();

        $edu_level = EduLevel::all();
        $job_category = JobCategory::all();
        // $position = Position::where('category_id');
        // $position = Position::
        $position = Position::join('categories', 'categories.id', '=', 'positions.category_id')
            ->where('categories.catstatus', 'active')->get();

        // $position = Position::orderBy('category_id', 'ASC')->pluck('category_id', 'id');
        // dd($position);
        $jobcat2 = jobcat2::all();
        $edutype = EducationType::all();

        // $position2 = Position::all();



        return view('try', compact('level', 'edu_level', 'job_category', 'position', 'jobcat2', 'edutype', 'form'));
    }
    public function store(Request $request)
    {




        $this->validate($request, [
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'sex' => 'required',
            'email' => ['required', 'string', 'email', 'max:255',  'regex:/(.*)@aastu.edu.et/i', 'unique:' . Form::class],
            'phone' => 'required|numeric|digits:10',
            'fee' => 'required',
            'position_id' => 'required',
            'job_category_id' => 'required',
            'jobcat2_id' => 'required',
            'level_id' => 'required',
            'position_id' => 'required',
            'choice2_id' => 'required',

            'positionofnow' => 'required',
            'choice2_id' => 'required',
            'addMoreFields.*.edu_level_id' => 'required',
            'addMoreFields.*.education_type_id' => 'required',

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

        ]);

        $form =
            Form::create(
                [
                    'firstName' => $request->firstName,
                    'middleName' => $request->middleName,
                    'lastName' => $request->lastName,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    // slug
                    'tag_slug' => Str::slug($request->firstName, '-' . Str::random()),

                    // 'education_type_id' => $request->education_type_id,
                    'level_id' => $request->level_id,
                    // 'edu_level_id' => $request->edu_level_id,
                    'position_id' => $request->position_id,
                    'choice2_id' => $request->choice2_id,
                    'job_category_id' => $request->job_category_id,
                    'jobcat2_id' => $request->jobcat2_id,
                    'positionofnow' => $request->positionofnow,
                    // 'firstdergee' => $request->firstdergee,
                    'sex' => $request->sex,
                    'fee' => $request->fee,
                    "UniversityHiringEra" => $request->UniversityHiringEra,
                    "servicPeriodAtUniversity" => $request->servicPeriodAtUniversity,
                    "servicPeriodAtAnotherPlace" => $request->servicPeriodAtAnotherPlace,
                    "serviceBeforeDiplo" => $request->serviceBeforeDiplo,
                    "serviceAfterDiplo" => $request->serviceAfterDiplo,
                    "resultOfrecentPerform" => $request->resultOfrecentPerform,
                    "DisciplineFlaw" => $request->DisciplineFlaw,
                    "MoreRoles" => $request->MoreRoles,
                ]
            );
        // $request->session()->get('form');
        // $form->save();

        foreach ($request->addMoreFields as $key => $val) {

            Education::create([

                "form_id" => $form->id,
                "edu_level_id" => $val["edu_level_id"],
                "education_type_id" => $val["education_type_id"],

            ]);
        }
        foreach ($request->addMoreInputFields as $key => $value) {
            experience::create([
                "form_id" => $form->id,
                "positionyouworked" => $value["positionyouworked"],
                "startingDate" => $value["startingDate"],
                "endingDate" => $value["endingDate"],
            ]);
        }


        return redirect('/submitted/' . $form->id);
    }
    public function show($id)
    {

        $form = Form::find($id); //
        $fo = Form::all();
        $edu = Education::where('form_id', $form->id)->get();
        $exper = experience::where('form_id', $form->id)->get();
        $forms = Form::select("*", DB::raw("CONCAT(forms.firstName,' ',forms.middleName,' ',forms.lastName) as full_name"))
            ->get();

        return view('hr.show', ['form' => $form, 'forms' => $forms, 'fo' => $fo, 'edu' => $edu, 'exper' => $exper]);
    }


    // public function table()
    // {
    //     $forms = Form::paginate(5);
    //     $forms = Form::select("*", DB::raw("CONCAT(forms.firstName,' ',forms.middleName,' ',forms.lastName) as full_name"))
    //         ->get();
    //     // $formList = Form::all();
    //     return view('hr.table', compact('forms'));
    // }


    public function position(Request $request)
    {
        // join('categories', 'categories.id', '=', 'positions.category_id') ->where('categories.catstatus', 'active')

        // $position = Position::select('position', 'id')
        //     ->join('categories', 'categories.id', '=', 'positions.category_id')
        //     ->where('categories.catstatus', '=', 'active')
        //     ->where('positions.job_category_id', $request->id)
        //     ->take(100)->get();

        $position = Position::select('position', 'positions.id')
            ->join('categories', 'categories.id', '=', 'positions.category_id')
            ->where('categories.catstatus', '=', 'active')
            ->where('positions.job_category_id', $request->id)
            ->take(100)->get();


        return response()->json($position);
    }
    public function position2(Request $request)
    {

        $position2 = choice2::select('position', 'choice2s.id')
            ->join('categories', 'categories.id', '=', 'choice2s.category_id')
            ->where('categories.catstatus', '=', 'active')
            ->where('choice2s.jobcat2_id', $request->id)
            ->take(100)->get();

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

    public function update(Request $request, $id)
    {
        $hr = Form::find($id);


        //  dd($hr);


        $hr->isEditable = 1;


        $hr->update();
        // dd($hr);

        return redirect('pos')->with('status', 'approved  successfully');
    }



    public function destroy($id)
    {
        $form = Form::find($id);


        $form->delete();
        return back()->with('status', '  deleted successfully');
    }
}
