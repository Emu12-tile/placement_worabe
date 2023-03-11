<?php

namespace App\Http\Controllers;

use App\Models\HR;
use Carbon\Carbon;
use App\Models\Form;
use App\Models\Admin;
use App\Models\Level;



use App\Models\EduLevel;
use App\Models\Position;
use App\Models\experience;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Models\EducationType;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{


    public function index()
    {



        $forms = Form::where('hrs', null)->paginate(5);

        return view('hr.index', compact('forms'));








    }

    public function create()
    {
        $level = Level::all();
        $form = Form::all();

        $edu_level = EduLevel::all();
        $job_category = JobCategory::all();
        $position = Position::all();

        $job_category2 = JobCategory::all();
        $edutype = EducationType::all();
        $level2 = Level::all();

        $position2 = Position::all();



        return view('try', compact('level', 'edu_level', 'job_category', 'position', 'job_category2', 'level2', 'edutype', 'position2', 'form'));
    }
    public function store(Request $request)
    {
       

        if ($request->ajax()) {
            $input = $request->all();
            $items = new Form();
            $items->fill($input)->save();
            $items = Form::find('form_id');
            // dd($input);
            $form
                =                Form::create([
                    "firstName" => $request->firstName,
                    "middleName" => $request->middleName,
                    "lastName" => $request->lastName,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "sex" => $request->sex,
                    "fee" => $request->fee,
                    "position_id" => $request->position_id,
                    "education_type_id" => $request->education_type_id,
                    "level_id" => $request->level_id,
                    "edu_level_id" => $request->edu_level_id,
                    "job_category_id" => $request->job_category_id,
                    "positionofnow" => $request->positionofnow,
                    "UniversityHiringEra" => $request->UniversityHiringEra,
                    "servicPeriodAtUniversity" => $request->servicPeriodAtUniversity,
                    "servicPeriodAtAnotherPlace" => $request->servicPeriodAtAnotherPlace,
                    "serviceBeforeDiplo" => $request->serviceBeforeDiplo,
                    "serviceAfterDiplo" => $request->serviceAfterDiplo,
                    "resultOfrecentPerform" => $request->resultOfrecentPerform,
                    "DisciplineFlaw" => $request->DisciplineFlaw,
                    "MoreRoles" => $request->MoreRoles,


                ]);
            foreach ($request->data as $key => $value) {
                // dd($request);
                // if ($items) {
                experience::create([
                    "form_id" => $form->id,
                    "positionyouworked" => $value["positionyouworked"],
                    "startingDate" => $value["startingDate"],
                    "endingDate" => $value["endingDate"],
                ]);

                // dd($request);


                // }
            }
            // $item->save();

        }
        return response()->json(array("success" => true));
    }
    public function show($id)
    {
        // naming description paskal , camelCase,
        //
        $form = Form::find($id); //
        $fo = Form::all();
        $forms = Form::select("*", DB::raw("CONCAT(forms.firstName,' ',forms.middleName,' ',forms.lastName) as full_name"))
            ->get();
        // dd($form);
        // $forms = Form::findOrFail('full_name');
        return view('hr.show', ['form' => $form, 'forms' => $forms, 'fo' => $fo]);
    }


    public function table()
    {
        $forms = Form::paginate(5);
        $forms = Form::select("*", DB::raw("CONCAT(forms.firstName,' ',forms.middleName,' ',forms.lastName) as full_name"))
            ->get();
        // $formList = Form::all();
        return view('hr.table', compact('forms'));
    }


    public function search()
    {
        // $forms = Form::paginate(10);
        $search_text = $_GET['query'];
        $forms = Form::where('firstName',  'LIKE', '%' . $search_text . '%')->get();
        // $cat = Product::where('category_name',  'LIKE', '%' . $search_text . '%')->get();
        return view('hr.index', compact('forms'));
    }
    public function destroy($id)
    {
        $form = Form::find($id);


        $form->delete();
        return back()->with('status', '  deleted successfully');
    }
}
