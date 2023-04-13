@extends('layouts.admin')

@section('content')
    {{-- TODO change this to componnent --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
        <section class="hk-sec-wrapper mt-100">
            @role('hr')
                <div class="pull-right hk-sec-title">

                    <a href="{{ url('positionhigh') }}" class=" btn btn-dark mr-25"> back </a>
                </div>
            @endrole
            <h5 class="hk-sec-title">የተወዳዳሪዎች 1ኛ ምርጫ ከ ቡድን መሪ በላይ አጠቃላይ ውጤት </h5>
            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap ">
                        <div class="table-responsive">
                            @role('hr')
                                <table id="datable_3" class="table table-hover table-bordered w-100  pb-30">
                                @endrole
                                @role('president')
                                    <table id="datable_1" class="table table-hover table-bordered w-100  pb-30">
                                    @endrole
                                    <thead>
                                        <tr>
                                            <th>ተ.ቁ</th>

                                            <th>ሙሉ ስም</th>
                                            @role('hr')
                                                <th>ውጤት ሰጪ ከኮሚቴ</th>

                                                <th>ለትምህርት ዝግጅት የሚሰጥ ነጥብ</th>
                                                <th>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</th>
                                                <th>ለውጤት ተኮር ምዘና</th>

                                                <th>ለፈተና ውጤት</th>
                                                <th>አጠቃላይ ውጤት(65%)</th>
                                            @endrole


                                            @role('president')
                                                <th>ውጤት ሰጪ ከኮሚቴ</th>
                                                <th>የሚወዳደሩበት የስራ መደብ</th>
                                                <th>የሚወዳደሩበት የስራ ክፍል</th>
                                                {{-- <th>የ ትምህርት ደረጃ</th>
                                            <th>የ ትምህርት ዝግጅት</th> --}}

                                                <th>አጠቃላይ ውጤት(65%)</th>
                                                {{-- @role('president') --}}
                                                <th>presidential</th>
                                            @endrole

                                        </tr>
                                    </thead>

                                    @role('hr')
                                        <tbody>
                                            <?php
                                            $j = 0;
                                            ?>
                                            @foreach ($hrs as $i => $hr)
                                                @if ($hr->form->position->position_type_id == 1)
                                                    <tr>
                                                        <td>{{ ++$j }}</td>
                                                        <td>{{ $hr->form->full_name }}
                                                        </td>
                                                        {{-- @role('hr') --}}
                                                        <td>{{ $hr->user->name }}</td>
                                                        <td>{{ $hr->performance }}</td>
                                                        <td>{{ $hr->experience }}</td>
                                                        <td>{{ $hr->resultbased }}</td>
                                                        <td>{{ $hr->exam }}</td>
                                                        {{-- @endrole --}}


                                                        <td>
                                                            {{ $hr->performance + $hr->experience + $hr->resultbased + $hr->exam }}

                                                        </td>





                                                        @role('president')
                                                            @if ($hr->status_hr == 1)
                                                                <td> <a class="btn  btn-dark " type="submit" id="btn-evaluate"
                                                                        href="{{ route('addpresident', $hr->id) }}">
                                                                        evaluate</a>
                                                                </td>
                                                            @endif
                                                        @endrole

                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    @endrole
                                    @role('president')
                                        <tbody>
                                            <?php
                                            $j = 0;
                                            ?>
                                            @foreach ($hrs as $i => $hr)
                                                @if ($hr->form->position->position_type_id == 1)
                                                    @if ($hr->status_hr == 1 && $hr->status_president == 0)
                                                        <tr>
                                                            <td>{{ ++$j }}</td>
                                                            <td>
                                                            <button type="button" class="btn btn-primary "
                                                                data-toggle="modal" data-target="#id_{{ $i }}">
                                                                {{ $hr->form->full_name }}</button>
                                                                <div class="modal fade" id="id_{{ $i }}"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLongTitle">
                                                                                    የተወዳዳሪው ሙሉ መረጃ</h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form>




                                                                                    <div class="form-group row">
                                                                                        <label for="inputEmail3"
                                                                                            class="col-sm-2 col-form-label">ሙሉ
                                                                                            ስም</label>


                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                                value="{{ $hr->form->full_name }}"
                                                                                                name="full_name"class="form-control"
                                                                                                id="inputname"
                                                                                                placeholder=" firstName"
                                                                                                readonly>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="inputname"
                                                                                            class="col-sm-2 col-form-label">ጾታ</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                                value="{{ $hr->form->sex }}"
                                                                                                name="sex"class="form-control "
                                                                                                id="inputEmail3" readonly>
                                                                                        </div>
                                                                                    </div>



                                                                                    <div class="form-group row">
                                                                                        <label for="inputEmail3"
                                                                                            class="col-sm-2 col-form-label">ኢሜይል</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="email"
                                                                                                value="{{ $hr->form->email }}"
                                                                                                name="email"class="form-control"
                                                                                                id="inputname"
                                                                                                placeholder="email" readonly>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group row">
                                                                                        <label for="inputEmail3"
                                                                                            class="col-sm-2 col-form-label">ስልክ
                                                                                            ቁጥር</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                                value="{{ $hr->form->phone }}"
                                                                                                name="phone"class="form-control"
                                                                                                id="inputname"
                                                                                                placeholder="phone" readonly>
                                                                                        </div>
                                                                                    </div>



                                                                                    <div class="form-group row">
                                                                                        <label for="inputname"
                                                                                            class="col-sm-2 col-form-label">አሁን
                                                                                            ያሉበት የስራ
                                                                                            መደብ</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                                value="{{ $hr->form->positionofnow }}"
                                                                                                name="positionofnow"class="form-control "
                                                                                                id="inputEmail3" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="inputname"
                                                                                            class="col-sm-2 col-form-label">ደረጃ</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                                value="{{ $hr->form->level->level }}"
                                                                                                name="level"class="form-control "
                                                                                                id="inputEmail3" readonly>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group row">
                                                                                        <label for="fee"
                                                                                            class="col-sm-2 col-form-label">ደምወዝ</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                                value="{{ $hr->form->fee }}"
                                                                                                name="fee"class="form-control "
                                                                                                id="fee" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h4 class="text-gold text-center mt-50 mb-4"
                                                                                        style=" background-color:rgb(17,40,77)">
                                                                                        የትምህርት
                                                                                        ደረጃና የትምህርት ዝግጅት በቅድመ ተከተል</h4>
                                                                                    <div class="form-group  mb-100">

                                                                                        <label for="inputname"></label>


                                                                                        @foreach ($hr->form->education as $fo)
                                                                                            <input type="text"
                                                                                                value="[{{ $fo->edu_level->education_level }} , {{ $fo->education_type->education_type }}],"
                                                                                                name="education_level"class="form-control "
                                                                                                id="inputEmail3" readonly>
                                                                                        @endforeach


                                                                                    </div>
                                                                                    <h4 class="text-gold  text-center mt-3 mb-4 "
                                                                                        style=" background-color:rgb(17,40,77)">
                                                                                        የ
                                                                                        መወዳደርያ የስራ ክፍልና የስራ መደብ</h4>
                                                                                    <button
                                                                                        class="text-gold text-left mt-3 mb-4 mr-150 text-left"style=" background-color:rgb(17,40,77)">
                                                                                        ምርጫ 1</button>
                                                                                    <div class="form-group row">
                                                                                        <label for="inputname"
                                                                                            class="col-sm-2 col-form-label">የስራ
                                                                                            ክፍሉ</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                                value="{{ $hr->form->job_category->job_category }}"
                                                                                                name="job_category"class="form-control "
                                                                                                id="inputEmail3" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="position"
                                                                                            class="col-sm-2 col-form-label">የስራ
                                                                                            መደብ</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                                value="{{ $hr->form->position->position }}"
                                                                                                name="position"class="form-control "
                                                                                                id="position" readonly>
                                                                                        </div>
                                                                                    </div>

                                                                                    <button
                                                                                        class="text-gold text-left mt-3 mb-4 mr-150 text-left"
                                                                                        style=" background-color:rgb(17,40,77)">
                                                                                        ምርጫ
                                                                                        2</button>
                                                                                    <div class="form-group row">
                                                                                        <label for="inputname"
                                                                                            class="col-sm-2 col-form-label">የስራ
                                                                                            ክፍሉ</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                                value="{{ $hr->form->jobcat2->job_category }}"
                                                                                                name="job_category"class="form-control "
                                                                                                id="job_category" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row mb-25">
                                                                                        <label for="position"
                                                                                            class="col-sm-2 col-form-label">የስራ
                                                                                            መደብ</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                                value="{{ $hr->form->choice2->position }}"
                                                                                                name="position"class="form-control "
                                                                                                id="position" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group  mt-100">
                                                                                        <label
                                                                                            for="UniversityHiringEra">በዩኒቨርስቲዉ
                                                                                            የቅጥር ዘመን
                                                                                            በኢትዮጵያ
                                                                                        </label>

                                                                                        <input type="text"
                                                                                            value="{{ $hr->form->UniversityHiringEra }}"
                                                                                            name="UniversityHiringEra"class="form-control "
                                                                                            id="UniversityHiringEra" readonly>

                                                                                    </div>
                                                                                    <div class="form-group  ">
                                                                                        <label
                                                                                            for="UniversityHiringEra">በዩኒቨርስቲዉ
                                                                                            አገልግሎት
                                                                                            ዘመን
                                                                                            (በዓመት,የስራ
                                                                                            መደብ)
                                                                                        </label>

                                                                                        <input type="text"
                                                                                            value="{{ $hr->form->servicPeriodAtUniversity }}"
                                                                                            name="servicPeriodAtUniversity"class="form-control "
                                                                                            id="servicPeriodAtUniversity"
                                                                                            readonly>

                                                                                    </div>
                                                                                    <div class="form-group  ">
                                                                                        <label for="UniversityHiringEra">በሌላ
                                                                                            መስርያ ቤት አገልግሎት
                                                                                            ዘመን(በዓመት,የስራ
                                                                                            መደብ)
                                                                                        </label>

                                                                                        <input type="text"
                                                                                            value="{{ $hr->form->servicPeriodAtAnotherPlace }}"
                                                                                            name="servicPeriodAtAnotherPlace"class="form-control "
                                                                                            id="servicPeriodAtAnotherPlace"
                                                                                            readonly>

                                                                                    </div>
                                                                                    <div class="form-group  ">
                                                                                        <label
                                                                                            for="servicPeriodAtAnotherPlace">አገልግሎት
                                                                                            ከዲፕሎማ
                                                                                            በፊት(በዓመት,የስራ መደብ)
                                                                                        </label>

                                                                                        <input type="text"
                                                                                            value="{{ $hr->form->serviceBeforeDiplo }}"
                                                                                            name="serviceBeforeDiplo"class="form-control "
                                                                                            id="serviceBeforeDiplo" readonly>

                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label for="UniversityHiringEra">
                                                                                            አገልግሎት ከዲፕሎማ/ዲግሪ
                                                                                            በኋላ(በዓመት, የስራ መደብ)
                                                                                        </label>

                                                                                        <input type="text"
                                                                                            value="{{ $hr->form->serviceAfterDiplo }}"
                                                                                            name="serviceAfterDiplo"class="form-control "
                                                                                            id="serviceAfterDiplo" readonly>

                                                                                    </div>
                                                                                    <div class="form-group  ">
                                                                                        <label for="resultOfrecentPerform">
                                                                                            የሁለት ተከታታይ የቅርብ
                                                                                            ጊዜ
                                                                                            የሥራ
                                                                                            አፈጻፀም አማካይ
                                                                                            ውጤት(ከ100 በቁጥር)
                                                                                        </label>

                                                                                        <input type="text"
                                                                                            value="{{ $hr->form->resultOfrecentPerform }}"
                                                                                            name="resultOfrecentPerform"class="form-control "
                                                                                            id="resultOfrecentPerform"
                                                                                            readonly>

                                                                                    </div>
                                                                                    <div class="form-group  ">
                                                                                        <label for="DisciplineFlaw"> የዲስፕሊን
                                                                                            ጉድለት
                                                                                        </label>

                                                                                        <input type="text"
                                                                                            value="{{ $hr->form->DisciplineFlaw }}"
                                                                                            name="DisciplineFlaw"class="form-control "
                                                                                            id="DisciplineFlaw" readonly>

                                                                                    </div>
                                                                                    <div class="form-group  ">
                                                                                        <label for="MoreRoles">ተጨማሪ የሥራ ድርሻ
                                                                                        </label>

                                                                                        <input type="text"
                                                                                            value="{{ $hr->form->MoreRoles }}"
                                                                                            name="MoreRoles"class="form-control "
                                                                                            id="MoreRoles" readonly>

                                                                                    </div>




                                                                                    <h4 class="text-gold text-center mt-50 mb-4"
                                                                                        style=" background-color:rgb(17,40,77)">
                                                                                        የስራ
                                                                                        ልምድ</h4>

                                                                                    <div class="form-group ">
                                                                                        <label for="inputEmail3"></label>


                                                                                        @foreach ($hr->form->experiences as $ex)
                                                                                            <input type="text"
                                                                                                value="[{{ $ex->startingDate }} እስከ {{ $ex->endingDate }} በ {{ $ex->positionyouworked }}], "
                                                                                                name=""
                                                                                                class="form-control"
                                                                                                id="inputname" placeholder=""
                                                                                                readonly>
                                                                                        @endforeach


                                                                                    </div>

                                                                                </form>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Close</button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>{{ $hr->user->name }}</td>

                                                            <td>{{ $hr->form->position->position }}</td>

                                                            <td>{{ $hr->form->job_category->job_category }}</td>
                                                            {{-- <td>{{ $edu->education_type->education_type }}</td> --}}

                                                            {{-- <td>{{ $hr->performance }}</td>
                                                            <td>{{ $hr->experience }}</td>
                                                            <td>{{ $hr->resultbased }}</td>
                                                            <td>{{ $hr->exam }}</td> --}}
                                                            <td>
                                                                {{ $hr->performance + $hr->experience + $hr->resultbased + $hr->exam }}

                                                            </td>






                                                            <td> <a class="btn  btn-dark " type="submit" id="btn-evaluate"
                                                                    href="{{ route('addpresident', $hr->id) }}">
                                                                    evaluate</a>
                                                            </td>


                                                        </tr>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </tbody>
                                    @endrole
                                </table>
                        </div>



                    </div>
                </div>
            </div>

        </section>





    </div>
@endsection
