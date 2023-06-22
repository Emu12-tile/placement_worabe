@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    @role('president')
                        <div class="pull-right">
                            <a class="btn btn-dark" href="{{ url('evaluation') }}"> Back</a>

                        </div>
                    @endrole
                    @role('hr')
                        <div class="pull-right ">
                            <a class="btn btn-dark" href="{{ url('pos') }}"> Back</a>

                        </div>
                    @endrole
                    <h3 class="hk-sec-title text-center  text-white mt-50 mb-50" style=" background-color:rgb(17,40,77)">
                        የተወዳዳሪዉ ዝርዝር
                        መረጃ </h3>


                    <div class="row">
                        <div class="col-sm">
                            <form action=""method="POST">

                                @csrf
                                @method('PUT')


                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ሙሉ ስም</label>


                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->full_name }}"
                                            name="full_name"class="form-control" id="inputname" placeholder=" firstName"
                                            readonly>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">ጾታ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->sex }}"
                                            name="sex"class="form-control " id="inputEmail3" readonly>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ኢሜይል</label>
                                    <div class="col-sm-10">
                                        <input type="email" value="{{ $form->email }}" name="email"class="form-control"
                                            id="inputname" placeholder="email" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ስልክ
                                        ቁጥር</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->phone }}" name="phone"class="form-control"
                                            id="inputname" placeholder="phone" readonly>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">አሁን ያሉበት የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->positionofnow }}"
                                            name="positionofnow"class="form-control " id="inputEmail3" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">ደረጃ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->level->level }}"
                                            name="level"class="form-control " id="inputEmail3" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fee" class="col-sm-2 col-form-label">ደምወዝ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->fee }}"
                                            name="fee"class="form-control " id="fee" readonly>
                                    </div>
                                </div>
                                <h4 class="text-white text-center mt-50 mb-4" style=" background-color:rgb(17,40,77)">
                                    የትምህርት
                                    ደረጃና የትምህርት ዝግጅት በቅድመ ተከተል</h4>
                                <div class="form-group row mb-100">

                                    <label for="inputname" class="col-sm-2 col-form-label"></label>

                                    <div class="col-sm-10">
                                        @foreach ($edu as $fo)
                                            <input type="text"
                                                value="{{ $fo->edu_level->education_level }} , {{ $fo->education_type->education_type }}"
                                                name="education_level"class="form-control " id="inputEmail3" readonly>
                                        @endforeach
                                    </div>

                                </div>
                                {{-- <h4 class="text-white  text-center mt-3 mb-4 " style=" background-color:rgb(17,40,77)"> የ
                                    መወዳደርያ የስራ ክፍልና የስራ መደብ</h4>
                                <button
                                    class="text-white text-left mt-3 mb-4 mr-150 text-left"style=" background-color:rgb(17,40,77)">
                                    ምርጫ 1</button>
                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">የስራ ክፍሉ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->job_category->job_category }}"
                                            name="job_category"class="form-control " id="inputEmail3" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="position" class="col-sm-2 col-form-label">የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->position->position }}"
                                            name="position"class="form-control " id="position" readonly>
                                    </div>
                                </div>

                                <button class="text-white text-left mt-3 mb-4 mr-150 text-left"
                                    style=" background-color:rgb(17,40,77)"> ምርጫ 2</button>
                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">የስራ ክፍሉ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->jobcat2->job_category }}"
                                            name="job_category"class="form-control " id="job_category" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mb-25">
                                    <label for="position" class="col-sm-2 col-form-label">የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->choice2->position }}"
                                            name="position"class="form-control " id="position" readonly>
                                    </div>
                                </div> --}}
                                <div class="form-group row mt-100">
                                    <label for="UniversityHiringEra" class="col-sm-2 col-form-label">በዩኒቨርስቲዉ የቅጥር ዘመን
                                        በኢትዮጵያ
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->UniversityHiringEra }}"
                                            name="UniversityHiringEra"class="form-control " id="UniversityHiringEra"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="UniversityHiringEra" class="col-sm-2 col-form-label">በዩኒቨርስቲዉ አገልግሎት ዘመን
                                        (በዓመት,የስራ
                                        መደብ)
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->servicPeriodAtUniversity }}"
                                            name="servicPeriodAtUniversity"class="form-control "
                                            id="servicPeriodAtUniversity" readonly>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="UniversityHiringEra" class="col-sm-2 col-form-label">በሌላ መስርያ ቤት አገልግሎት
                                        ዘመን(በዓመት,የስራ
                                        መደብ)
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->servicPeriodAtAnotherPlace }}"
                                            name="servicPeriodAtAnotherPlace"class="form-control "
                                            id="servicPeriodAtAnotherPlace" readonly>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="servicPeriodAtAnotherPlace" class="col-sm-2 col-form-label">አገልግሎት ከዲፕሎማ
                                        በፊት(በዓመት,የስራ መደብ)
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->serviceBeforeDiplo }}"
                                            name="serviceBeforeDiplo"class="form-control " id="serviceBeforeDiplo"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="UniversityHiringEra" class="col-sm-2 col-form-label"> አገልግሎት ከዲፕሎማ/ዲግሪ
                                        በኋላ(በዓመት, የስራ መደብ)
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->serviceAfterDiplo }}"
                                            name="serviceAfterDiplo"class="form-control " id="serviceAfterDiplo"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="resultOfrecentPerform" class="col-sm-2 col-form-label"> የሁለት ተከታታይ የቅርብ ጊዜ
                                        የሥራ
                                        አፈጻፀም አማካይ
                                        ውጤት(ከ100 በቁጥር)
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->resultOfrecentPerform }}"
                                            name="resultOfrecentPerform"class="form-control " id="resultOfrecentPerform"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="DisciplineFlaw" class="col-sm-2 col-form-label"> የዲስፕሊን ጉድለት
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->DisciplineFlaw }}"
                                            name="DisciplineFlaw"class="form-control " id="DisciplineFlaw" readonly>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="MoreRoles" class="col-sm-2 col-form-label">ተጨማሪ የሥራ ድርሻ
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->MoreRoles }}"
                                            name="MoreRoles"class="form-control " id="MoreRoles" readonly>
                                    </div>
                                </div>




                                <h4 class="text-white text-center mt-50 mb-4" style=" background-color:rgb(17,40,77)">የስራ
                                    ልምድ</h4>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Experience</label>

                                    <div class="col-sm-10">
                                        @foreach ($exper as $ex)
                                            <input type="text"
                                                value="{{ $ex->startingDate }} እስከ {{ $ex->endingDate }} በ {{ $ex->positionyouworked }} "
                                                name="" class="form-control" id="inputname" placeholder=""
                                                readonly>
                                        @endforeach

                                    </div>
                                </div>
                                @role('admin')
                                    <div class="table-wrap">

                                        <table id="datable_1" class="table table-hover  table-bordered w-50  pb-30">
                                            <thead>
                                                <tr>
                                                    <th colspan="2" class="text-center text-blue-dark-4">Action</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <td class="text-center">Approve:

                                                    <form action="{{ route('hr.update', $form->id) }}" method="POST">

                                                        @csrf
                                                        @method('PUT')

                                                        <button type="submit" class="btn bg-blue-dark-4 text-white pd-10">
                                                            <a data-toggle="tooltip" data-original-title="approve"> <i
                                                                    class=" glyphicon glyphicon-ok pd-25"></i> </a>
                                                        </button>
                                                    </form>
                                                </td>

                                                <td class="text-center w-50">Reject:

                                                    <form action="{{ route('hr.destroy', $form->id) }}" method="POST">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn bg-red-dark-4 text-white pd-10">
                                                            <a data-toggle="tooltip" data-original-title="delete"> <i
                                                                    class=" icon-trash txt-danger"></i> </a>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tbody>
                                        </table>
                                    @endrole

                            </form>





                        </div>


                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
