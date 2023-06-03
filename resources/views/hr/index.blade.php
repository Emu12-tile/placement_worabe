@extends('layouts.admin')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">

        <section class="hk-sec-wrapper mt-100">
            <div class="pull-right hk-sec-title">
                {{-- <a href="{{ url('pos') }}" class="btn btn-dark mr-25"> back </a> --}}

            </div>
            <h5 class="hk-sec-title">የአመልካቾች ዝርዝር</h5>


            <div class="row" id="search_list">
                <div class="col-sm">
                    <div class="table-wrap">

                        <table id="datable_1" class="table table-hover  table-bordered w-100  pb-30">
                            <thead>
                                <tr>
                                    <th>ተቁ</th>
                                    <th>ሙሉ ስም</th>
                                    @role('admin')
                                        {{-- <th>የስራ ክፍል/የስራ መደብ(1ኛ ምርጫ)</th>
                                        <th>የስራ ክፍል/የስራ መደብ(2ኛ ምርጫ)</th> --}}

                                        <th> action</th>


                                        {{-- <th>Submit</th>
                                        <th>pdf</th> --}}
                                    @endrole


                                    {{-- <th>የሚወዳደሩበት የስራ መደብ</th> --}}




                                    @role('hr')
                                        {{-- <th> አሁን ያሉበት የትምህርት ደረጃና የትምህርት ዝግጅት</th> --}}
                                        <th>Submittedby HR</th>


                                        <th>የሰው ኃይል ግምገማ</th>
                                    @endrole





                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 0;
                                ?>
                                @foreach ($forms as $i => $form)
                                    @role('admin')
                                        @if ($form->isEditable == 0)
                                            <tr>
                                                <td>{{ ++$j }}</td>
                                                <td>


                                                    <button type="button" class="btn btn-primary " data-toggle="modal"
                                                        data-target="#id2_{{ $i }}">
                                                        {{ $form->full_name }}</button>
                                                    <div class="modal fade" id="id2_{{ $i }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLongTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                        የተወዳዳሪው ሙሉ መረጃ</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>




                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-2 col-form-label">ሙሉ ስም</label>


                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->full_name }}"
                                                                                    name="full_name"class="form-control"
                                                                                    id="inputname" placeholder=" firstName"
                                                                                    readonly>
                                                                            </div>

                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputname"
                                                                                class="col-sm-2 col-form-label">ጾታ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->sex }}"
                                                                                    name="sex"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                            </div>
                                                                        </div>



                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-2 col-form-label">ኢሜይል</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="email"
                                                                                    value="{{ $form->email }}"
                                                                                    name="email"class="form-control"
                                                                                    id="inputname" placeholder="email" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-2 col-form-label">ስልክ
                                                                                ቁጥር</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->phone }}"
                                                                                    name="phone"class="form-control"
                                                                                    id="inputname" placeholder="phone" readonly>
                                                                            </div>
                                                                        </div>



                                                                        <div class="form-group row">
                                                                            <label for="inputname"
                                                                                class="col-sm-2 col-form-label">አሁን ያሉበት የስራ
                                                                                መደብ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->positionofnow }}"
                                                                                    name="positionofnow"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputname"
                                                                                class="col-sm-2 col-form-label">ደረጃ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->level }}"
                                                                                    name="level"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="fee"
                                                                                class="col-sm-2 col-form-label">ደምወዝ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->fee }}"
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


                                                                            @foreach ($form->education as $fo)
                                                                                <input type="text"
                                                                                    value="[{{ $fo->certificate }} , {{ $fo->discipline1 }}]"
                                                                                    name="education_level"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                                <input type="text"
                                                                                    value="[{{ $fo->diploma }} , {{ $fo->discipline2 }}],"
                                                                                    name="education_level"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                                <input type="text"
                                                                                    value="[{{ $fo->bsc }} , {{ $fo->discipline3 }}],"
                                                                                    name="education_level"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                                <input type="text"
                                                                                    value="[{{ $fo->msc }} , {{ $fo->discipline2 }}],"
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
                                                                                class="col-sm-2 col-form-label">የስራ ክፍሉ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->job_category->job_category ?? '' }}"
                                                                                    name="job_category"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="position"
                                                                                class="col-sm-2 col-form-label">የስራ መደብ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->position ?? '' }}"
                                                                                    name="position"class="form-control "
                                                                                    id="position" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <button
                                                                            class="text-gold text-left mt-3 mb-4 mr-150 text-left"
                                                                            style=" background-color:rgb(17,40,77)"> ምርጫ
                                                                            2</button>
                                                                        <div class="form-group row">
                                                                            <label for="inputname"
                                                                                class="col-sm-2 col-form-label">የስራ ክፍሉ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->jobcat2->job_category ?? '' }}"
                                                                                    name="job_category"class="form-control "
                                                                                    id="job_category" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-25">
                                                                            <label for="position"
                                                                                class="col-sm-2 col-form-label">የስራ መደብ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->choice2->position ?? '' }}"
                                                                                    name="position"class="form-control "
                                                                                    id="position" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group  mt-100">
                                                                            <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን
                                                                                በኢትዮጵያ
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->UniversityHiringEra }}"
                                                                                name="UniversityHiringEra"class="form-control "
                                                                                id="UniversityHiringEra" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="UniversityHiringEra">በዩኒቨርስቲዉ አገልግሎት
                                                                                ዘመን
                                                                                (በዓመት,የስራ
                                                                                መደብ)
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->servicPeriodAtUniversity }}"
                                                                                name="servicPeriodAtUniversity"class="form-control "
                                                                                id="servicPeriodAtUniversity" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="UniversityHiringEra">በሌላ መስርያ ቤት አገልግሎት
                                                                                ዘመን(በዓመት,የስራ
                                                                                መደብ)
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->servicPeriodAtAnotherPlace }}"
                                                                                name="servicPeriodAtAnotherPlace"class="form-control "
                                                                                id="servicPeriodAtAnotherPlace" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="servicPeriodAtAnotherPlace">አገልግሎት
                                                                                ከዲፕሎማ
                                                                                በፊት(በዓመት,የስራ መደብ)
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->serviceBeforeDiplo }}"
                                                                                name="serviceBeforeDiplo"class="form-control "
                                                                                id="serviceBeforeDiplo" readonly>

                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label for="UniversityHiringEra"> አገልግሎት ከዲፕሎማ/ዲግሪ
                                                                                በኋላ(በዓመት, የስራ መደብ)
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->serviceAfterDiplo }}"
                                                                                name="serviceAfterDiplo"class="form-control "
                                                                                id="serviceAfterDiplo" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="resultOfrecentPerform"> የሁለት ተከታታይ የቅርብ
                                                                                ጊዜ
                                                                                የሥራ
                                                                                አፈጻፀም አማካይ
                                                                                ውጤት(ከ100 በቁጥር)
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->resultOfrecentPerform }}"
                                                                                name="resultOfrecentPerform"class="form-control "
                                                                                id="resultOfrecentPerform" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->DisciplineFlaw }}"
                                                                                name="DisciplineFlaw"class="form-control "
                                                                                id="DisciplineFlaw" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="MoreRoles">ተጨማሪ የሥራ ድርሻ
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->MoreRoles }}"
                                                                                name="MoreRoles"class="form-control "
                                                                                id="MoreRoles" readonly>

                                                                        </div>




                                                                        <h4 class="text-gold text-center mt-50 mb-4"
                                                                            style=" background-color:rgb(17,40,77)">
                                                                            የስራ
                                                                            ልምድ</h4>

                                                                        <div class="form-group ">
                                                                            <label for="inputEmail3"></label>


                                                                            @foreach ($form->experiences as $ex)
                                                                                <input type="text"
                                                                                    value="[{{ $ex->startingDate }} እስከ {{ $ex->endingDate }} በ {{ $ex->positionyouworked }}], "
                                                                                    name="" class="form-control"
                                                                                    id="inputname" placeholder="" readonly>
                                                                            @endforeach


                                                                        </div>

                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>


                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>


                                                </td>



                                                {{-- <td>{{ $form->job_category->job_category ?? 'to be selected' }}\
                                                    {{ $form->position->position ?? 'to be selected' }}</td>
                                                <td>{{ $form->jobcat2->job_category ?? 'to be selected' }}\
                                                    {{ $form->choice2->position ?? 'to be selected' }}
                                                </td> --}}



                                                <td><a class="btn  bg-blue-dark-4 text-white btn-sm" type="submit"
                                                        id="btn-evaluate" href="{{ route('hr.show', $form->id) }}">Edit</a>
                                                </td>





                                                {{-- <td> <button type="button" class="btn bg-green-dark-4 text-white btn-sm"
                                                        data-toggle="modal" data-target="#id1_{{ $i }}">
                                                        Submit
                                                    </button>


                                                    <div class="modal fade" id="id1_{{ $i }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalCenter"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Submission</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Are you sure do you want to submit
                                                                        {{ $form->full_name }}?

                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <form action="{{ route('hr.update', $form->id) }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf

                                                                        @method('PUT')
                                                                        <button type="submit" class="btn btn-green">
                                                                            Yes</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td> --}}


                                                {{-- <td> <button type="button" class="btn btn-primary requestStat btn-sm "
                                                        data-toggle="modal" data-target="#id_{{ $i }}"><i
                                                            class="ion ion-md-archive "></i>pdf
                                                    </button>

                                                    <div class="modal fade" id="id_{{ $i }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLongTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div id="element-to-print">



                                                                        <h1
                                                                            style="font-family: Noto Sans Ethiopic, sans-serif; text-align:center ">
                                                                            አዲስ አበባ ሳይንስና ቴክኖሎጂ ዩኒቨርሲቲ </h1>
                                                                        <h3 style="text-align:center">የአስተዳደር ሠራተኞች
                                                                            ፕሮፋይል</h3>
                                                                        <p>1/ የሠራተኛው ሙሉ ስም:-{{ $form->firstName }}
                                                                            {{ $form->middleName }}
                                                                            {{ $form->lastName }} </p>

                                                                        <p>2/ አሁን ያሉበት የስራ መደብ
                                                                            መጠርያ:-{{ $form->positionofnow }} &emsp;
                                                                            ደረጃ፦{{ $form->level ?? '' }} &emsp;
                                                                            ደምወዝ:-{{ $form->fee }}
                                                                        </p>
                                                                        <p>3/ የተማሩት የት/ት ደረጃና የት/ት ዝግጅት:-
                                                                        <table id="customers" class="mb-15">
                                                                            <thead>
                                                                                <tr>

                                                                                    <th>የትምህርት ደረጃ</th>
                                                                                    <th>የትምህርት ዝግጅት</th>




                                                                                </tr>



                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($form->education as $i => $fo)
                                                                                    <tr>

                                                                                        <td> {{ $fo->certificate ?? '' }}</td>
                                                                                        <td> {{ $fo->discipline1 ?? '' }}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>{{ $fo->diploma ?? '' }} </td>
                                                                                        <td>{{ $fo->discipline2 ?? '' }} </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> {{ $fo->bsc ?? '' }}</td>
                                                                                        <td> {{ $fo->discipline3 ?? '' }}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>{{ $fo->msc ?? '' }} </td>



                                                                                        <td>{{ $fo->discipline4 ?? '' }} </td>

                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>

                                                                        <p>4/ በዩኒቨርስቲዉ የቅጥር
                                                                            ዘመን:-{{ $form->UniversityHiringEra }}

                                                                        </p>
                                                                        <p>5/ በዩኒቨርስቲዉ አገልግሎት
                                                                            ዘመን:-{{ $form->servicPeriodAtUniversity }}
                                                                        </p>
                                                                        <p>6/ በሌላ መስርያ ቤት አገልግሎት
                                                                            ዘመን:-{{ $form->servicPeriodAtAnotherPlace }}
                                                                        </p>
                                                                        <h5>7/ የሚወዳደሩበት የስራ ክፍልና የስራ መደብ</h5>
                                                                        <p> ምርጫ 1</p>

                                                                        <p> የስራ ክፍል
                                                                            :-{{ $form->job_category->job_category ?? '' }}
                                                                        </p>
                                                                        <p> የስራ መደብ፣ {{ $form->position->position ?? '' }}
                                                                        </p>
                                                                        <p>
                                                                            ምርጫ 2</p>
                                                                        <p> የስራ ክፍል:-
                                                                            {{ $form->jobcat2->job_category ?? '' }} </p>
                                                                        <p> የስራ መደብ:- {{ $form->choice2->position ?? '' }}
                                                                        </p>
                                                                        <div class="html2pdf__page-break"></div>
                                                                        <p>8/ ጠቅላላ የስራ ልምድ ብዛትና የስራው አይነት</p>

                                                                        <table id="customers">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2">ተ.ቁ</th>
                                                                                    <th rowspan="2">የአገልግሎት ዘመን
                                                                                        ከ---እስከ---ዓ.ም</th>
                                                                                    <th rowspan="2">የሥራ ዓይነት</th>

                                                                                    <th colspan="3"> የአገልግሎት ጊዜ</th>
                                                                                    <th rowspan="2">ምርመራ</th>


                                                                                </tr>
                                                                                <tr>

                                                                                    <th>ዓመት
                                                                                    </th>
                                                                                    <th>ወር
                                                                                    </th>
                                                                                    <th>ቀን</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($form->experiences as $i => $fo)
                                                                                    <tr>
                                                                                        <td>{{ ++$i }}</td>

                                                                                        <td>

                                                                                            ከ{{ Carbon::parse($fo->startingDate)->day }}/{{ Carbon::parse($fo->startingDate)->month }}/{{ Carbon::parse($fo->startingDate)->year }}
                                                                                            እስከ
                                                                                            {{ Carbon::parse($fo->endingDate)->day }}/{{ Carbon::parse($fo->endingDate)->month }}/{{ Carbon::parse($fo->endingDate)->year }}
                                                                                        </td>


                                                                                        <td>{{ $fo->positionyouworked }}
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php

                                                                                            $fdate = Carbon::parse($fo->startingDate);

                                                                                            $tdate = Carbon::parse($fo->endingDate);

                                                                                            //

                                                                                            $days = $tdate->diffInDays($fdate);
                                                                                            $months = $tdate->diffInMonths($fdate);

                                                                                            $years = $tdate->diffInYears($fdate);

                                                                                            $time = $tdate->diff($fdate);
                                                                                            echo $time->y;

                                                                                            ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php

                                                                                            $fdate = Carbon::parse($fo->startingDate);

                                                                                            $tdate = Carbon::parse($fo->endingDate);

                                                                                            $time = $tdate->diff($fdate);
                                                                                            echo $time->m;
                                                                                            ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php

                                                                                            $time = $tdate->diff($fdate);

                                                                                            echo $time->d;

                                                                                            ?>
                                                                                        </td>
                                                                                        <td></td>

                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                        <div class="html2pdf__page-break"></div>
                                                                        <p>9/ አገልግሎት ከዲፕሎማ/ዲግሪ በፊት:-
                                                                            {{ $form->serviceBeforeDiplo }} ፣ አገልግሎት
                                                                            ከዲፕሎማ/ዲግሪ በኋላ
                                                                            {{ $form->serviceAfterDiplo }}</p>
                                                                        <p>10/ የሁለት ተከታታይ የቅርብ ጊዜ የሥራ አፈጻፀም አማካይ
                                                                            ውጤት:-{{ $form->resultOfrecentPerform }}</p>
                                                                        <p>11/ የዲስፕሊን ጉድለት:-{{ $form->DisciplineFlaw }}
                                                                        </p>
                                                                        <p>12/ ተጨማሪ የሥራ ድርሻ:-{{ $form->MoreRoles }}</p>
                                                                        <p>ቅጹን የሞላው ሰራተኛ ስም
                                                                            &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;
                                                                            ፊርማ&mdash;&mdash;&mdash;&mdash;
                                                                            ቀን&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;
                                                                        </p>
                                                                        <p>ስለትክክለኛነቱ ያረጋገጠው የሰዉ ሀብት ባለሙያ
                                                                            ፊርማ&mdash;&mdash;&mdash;&mdash;&mdash;
                                                                            ቀን&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;
                                                                        </p>




                                                                    </div>

                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>





                                                            </div>
                                                        </div>

                                                    </div>
                                                </td> --}}











                                            </tr>
                                        @endif
                                    @endrole
                                    @role('hr|user')
                                        @if ($form->isEditable == 1)
                                            <tr>
                                                <td>{{ ++$j }}</td>
                                                <td>

                                                    <button type="button" class="btn btn-primary " data-toggle="modal"
                                                        data-target="#id_{{ $i }}">
                                                        {{ $form->full_name }}</button>
                                                    <div class="modal fade" id="id_{{ $i }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLongTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
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
                                                                                class="col-sm-2 col-form-label">ሙሉ ስም</label>


                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->full_name }}"
                                                                                    name="full_name"class="form-control"
                                                                                    id="inputname" placeholder=" firstName"
                                                                                    readonly>
                                                                            </div>

                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputname"
                                                                                class="col-sm-2 col-form-label">ጾታ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->sex }}"
                                                                                    name="sex"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                            </div>
                                                                        </div>



                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-2 col-form-label">ኢሜይል</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="email"
                                                                                    value="{{ $form->email }}"
                                                                                    name="email"class="form-control"
                                                                                    id="inputname" placeholder="email"
                                                                                    readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-2 col-form-label">ስልክ
                                                                                ቁጥር</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->phone }}"
                                                                                    name="phone"class="form-control"
                                                                                    id="inputname" placeholder="phone"
                                                                                    readonly>
                                                                            </div>
                                                                        </div>



                                                                        <div class="form-group row">
                                                                            <label for="inputname"
                                                                                class="col-sm-2 col-form-label">አሁን ያሉበት የስራ
                                                                                መደብ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->positionofnow }}"
                                                                                    name="positionofnow"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputname"
                                                                                class="col-sm-2 col-form-label">ደረጃ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->level }}"
                                                                                    name="level"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="fee"
                                                                                class="col-sm-2 col-form-label">ደምወዝ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->fee }}"
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


                                                                            @foreach ($form->education as $fo)
                                                                                <input type="text"
                                                                                    value="[{{ $fo->certificate }} , {{ $fo->discipline1 }}]"
                                                                                    name="education_level"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                                <input type="text"
                                                                                    value="[{{ $fo->diploma }} , {{ $fo->discipline2 }}],"
                                                                                    name="education_level"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                                <input type="text"
                                                                                    value="[{{ $fo->bsc }} , {{ $fo->discipline3 }}],"
                                                                                    name="education_level"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                                <input type="text"
                                                                                    value="[{{ $fo->msc }} , {{ $fo->discipline2 }}],"
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
                                                                                class="col-sm-2 col-form-label">የስራ ክፍሉ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->job_category->job_category }}"
                                                                                    name="job_category"class="form-control "
                                                                                    id="inputEmail3" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="position"
                                                                                class="col-sm-2 col-form-label">የስራ መደብ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->position }}"
                                                                                    name="position"class="form-control "
                                                                                    id="position" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <button
                                                                            class="text-gold text-left mt-3 mb-4 mr-150 text-left"
                                                                            style=" background-color:rgb(17,40,77)"> ምርጫ
                                                                            2</button>
                                                                        <div class="form-group row">
                                                                            <label for="inputname"
                                                                                class="col-sm-2 col-form-label">የስራ ክፍሉ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->jobcat2->job_category }}"
                                                                                    name="job_category"class="form-control "
                                                                                    id="job_category" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-25">
                                                                            <label for="position"
                                                                                class="col-sm-2 col-form-label">የስራ መደብ</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                    value="{{ $form->choice2->position }}"
                                                                                    name="position"class="form-control "
                                                                                    id="position" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group  mt-100">
                                                                            <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን
                                                                                በኢትዮጵያ
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->UniversityHiringEra }}"
                                                                                name="UniversityHiringEra"class="form-control "
                                                                                id="UniversityHiringEra" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="UniversityHiringEra">በዩኒቨርስቲዉ አገልግሎት
                                                                                ዘመን
                                                                                (በዓመት,የስራ
                                                                                መደብ)
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->servicPeriodAtUniversity }}"
                                                                                name="servicPeriodAtUniversity"class="form-control "
                                                                                id="servicPeriodAtUniversity" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="UniversityHiringEra">በሌላ መስርያ ቤት አገልግሎት
                                                                                ዘመን(በዓመት,የስራ
                                                                                መደብ)
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->servicPeriodAtAnotherPlace }}"
                                                                                name="servicPeriodAtAnotherPlace"class="form-control "
                                                                                id="servicPeriodAtAnotherPlace" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="servicPeriodAtAnotherPlace">አገልግሎት
                                                                                ከዲፕሎማ
                                                                                በፊት(በዓመት,የስራ መደብ)
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->serviceBeforeDiplo }}"
                                                                                name="serviceBeforeDiplo"class="form-control "
                                                                                id="serviceBeforeDiplo" readonly>

                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label for="UniversityHiringEra"> አገልግሎት ከዲፕሎማ/ዲግሪ
                                                                                በኋላ(በዓመት, የስራ መደብ)
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->serviceAfterDiplo }}"
                                                                                name="serviceAfterDiplo"class="form-control "
                                                                                id="serviceAfterDiplo" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="resultOfrecentPerform"> የሁለት ተከታታይ የቅርብ
                                                                                ጊዜ
                                                                                የሥራ
                                                                                አፈጻፀም አማካይ
                                                                                ውጤት(ከ100 በቁጥር)
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->resultOfrecentPerform }}"
                                                                                name="resultOfrecentPerform"class="form-control "
                                                                                id="resultOfrecentPerform" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->DisciplineFlaw }}"
                                                                                name="DisciplineFlaw"class="form-control "
                                                                                id="DisciplineFlaw" readonly>

                                                                        </div>
                                                                        <div class="form-group  ">
                                                                            <label for="MoreRoles">ተጨማሪ የሥራ ድርሻ
                                                                            </label>

                                                                            <input type="text"
                                                                                value="{{ $form->MoreRoles }}"
                                                                                name="MoreRoles"class="form-control "
                                                                                id="MoreRoles" readonly>

                                                                        </div>




                                                                        <h4 class="text-gold text-center mt-50 mb-4"
                                                                            style=" background-color:rgb(17,40,77)">
                                                                            የስራ
                                                                            ልምድ</h4>

                                                                        <div class="form-group ">
                                                                            <label for="inputEmail3"></label>


                                                                            @foreach ($form->experiences as $ex)
                                                                                <input type="text"
                                                                                    value="[{{ $ex->startingDate }} እስከ {{ $ex->endingDate }} በ {{ $ex->positionyouworked }}], "
                                                                                    name="" class="form-control"
                                                                                    id="inputname" placeholder="" readonly>
                                                                            @endforeach


                                                                        </div>

                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    {{-- @role('user')
                                                                        <form action="{{ route('hr.destroy', $form->id) }}"
                                                                            method="POST">

                                                                            @csrf
                                                                            @method('DELETE')

                                                                            <button type="submit"
                                                                                class="btn btn-danger pd-10">Reject
                                                                                <a data-toggle="tooltip"
                                                                                    data-original-title="delete">
                                                                                    <i class=" icon-trash txt-danger"></i> </a>
                                                                            </button>
                                                                        </form>
                                                                    @endrole --}}

                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                {{-- <td>{{ $form->position }}</td> --}}

                                                {{-- <td>
                                                    @foreach ($form->education as $edu)
                                                        ({{ $edu->edu_level->education_level }},{{ $edu->education_type->education_type }})
                                                        ,
                                                    @endforeach
                                                </td> --}}

                                                <td>{{ $form->submit }}</td>

                                                <td> <a class="btn  btn-dark " type="submit" id="btn-evaluate"
                                                        href="{{ route('addHr', $form->id) }}">
                                                        evaluate</a>
                                                </td>





                                            </tr>
                                        @endrole
                                    @endif
                                @endforeach

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"
        integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(".requestStat").on("click", function() {
            var element = $(this).closest("tr").find("#element-to-print")[0]
            html2pdf(element, {
                margin: 15,
                filename: 'Application form.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 3,
                    logging: true,
                    dpi: 192,
                    letterRendering: true
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait',
                }


            });
        });
    </script>
@endsection
