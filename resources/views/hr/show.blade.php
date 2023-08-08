{{-- @extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">



                    <h3 class="hk-sec-title text-white text-center color-wrap  "
                        style=" background-color:#088c13; padding:10px;">ዲላ ዩኒቨርሲቲ የሰራተኞች የስራ
                        ድልድል ማወዳደርያ ቅፅ</h3>
                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('addposition', $form->id) }}"method="POST">

                                @csrf
                                @method('PUT')



                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="firstName"> ስም *</label>
                                        <input class="form-control" id="firstName" placeholder=" ስም"
                                            value="{{ $form->full_name }}" type="text" name="firstName" readonly>

                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="sex">ጾታ *</label>
                                        <input type="text" value="{{ $form->sex }}"
                                            name="sex"class="form-control " id="inputEmail3" readonly>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label mb-10" for="email">ኢሜይል (የ አ.ሳ.ቴን ኢሜይል ብቻ
                                            ይጠቀሙ) *</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                            </div>
                                            <input type="email" value="{{ $form->email }}"
                                                name="email"class="form-control" id="inputname" placeholder="email"
                                                readonly>



                                        </div>

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label mb-10">ስልክ
                                            ቁጥር(09...) *</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input type="text" value="{{ $form->phone }}"
                                                name="phone"class="form-control" id="inputname" placeholder="phone"
                                                readonly>
                                        </div>


                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="positionofnow">አሁን ያሉበት የስራ መደብ</label>
                                        <input type="text" value="{{ $form->positionofnow }}"
                                            name="positionofnow"class="form-control " id="inputEmail3" readonly>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="level_id">ደረጃ </label>
                                        <input type="text" value="{{ $form->level ?? '' }}"
                                            name="level"class="form-control " id="inputEmail3" readonly>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="fee">ደምወዝ (ETB)</label>
                                        <input type="text" value="{{ $form->fee }}"
                                            name="fee"class="form-control " id="fee" readonly>
                                    </div>
                                </div>
                                <h3 class="text-white text-center mt-3 mb-4  "
                                    style=" background-color:#088c13; margin:center">
                                    ያለዎት የትምህርት ዝግጅትና የትምህርት ደረጃ
                                </h3>
                                <table id="customers" class="mb-15">
                                    <thead>
                                        <tr>

                                            <th>የትምህርት ደረጃ</th>
                                            <th>የትምህርት ዝግጅት</th>




                                        </tr>



                                    </thead>
                                    <tbody>
                                        @foreach ($edu as $i => $fo)
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











                                <h3 class="text-white text-center mt-3 mb-4  "
                                    style=" background-color:#088c13; margin:center">
                                    አገልግሎት
                                </h3>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን በኢትዮጵያ
                                            አቆጣጠር</label>
                                        <input type="text" value="{{ $form->UniversityHiringEra }}"
                                            name="UniversityHiringEra"class="form-control " id="UniversityHiringEra"
                                            readonly>

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="servicPeriodAtUniversity">በዩኒቨርስቲዉ አገልግሎት ዘመን (በዓመት,የስራ
                                            መደብ)</label>
                                        <input type="text" value="{{ $form->servicPeriodAtUniversity }}"
                                            name="servicPeriodAtUniversity"class="form-control "
                                            id="servicPeriodAtUniversity" readonly>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="servicPeriodAtAnotherPlace">በሌላ መስርያ ቤት አገልግሎት ዘመን(በዓመት,የስራ
                                            መደብ)</label>
                                        <input type="text" value="{{ $form->servicPeriodAtAnotherPlace }}"
                                            name="servicPeriodAtAnotherPlace"class="form-control "
                                            id="servicPeriodAtAnotherPlace" readonly>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="serviceBeforeDiplo"> አገልግሎት ከዲፕሎማ በፊት(በዓመት,የስራ መደብ)</label>
                                        <input type="text" value="{{ $form->serviceBeforeDiplo }}"
                                            name="serviceBeforeDiplo"class="form-control " id="serviceBeforeDiplo"
                                            readonly>

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="serviceAfterDiplo"> አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ(በዓመት, የስራ መደብ)</label>
                                        <input type="text" value="{{ $form->serviceAfterDiplo }}"
                                            name="serviceAfterDiplo"class="form-control " id="serviceAfterDiplo"
                                            readonly>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="resultOfrecentPerform" class=""> የሁለት ተከታታይ የቅርብ ጊዜ የሥራ
                                            አፈጻፀም አማካይ
                                            ውጤት(ከ100 በቁጥር)</label>
                                        <input type="text" value="{{ $form->resultOfrecentPerform }}"
                                            name="resultOfrecentPerform"class="form-control " id="resultOfrecentPerform"
                                            readonly>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት</label>
                                        <input type="text" value="{{ $form->DisciplineFlaw }}"
                                            name="DisciplineFlaw"class="form-control " id="DisciplineFlaw" readonly>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="MoreRoles"> ተጨማሪ የሥራ ድርሻ</label>
                                        <input type="text" value="{{ $form->MoreRoles }}"
                                            name="MoreRoles"class="form-control " id="MoreRoles" readonly>
                                    </div>


                                </div>
                                <h3 class="text-white text-center mt-3 mb-4   "
                                    style=" background-color:#088c13; margin:center nav">የስራ ልምድ(በኢትዮጵያ አቆጣጠር
                                    ብቻ)</h3>
                                <table id="customers" class="mb-15">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">ተ.ቁ</th>
                                            <th rowspan="2">የአገልግሎት ዘመን ከ---እስከ---ዓ.ም</th>
                                            <th rowspan="2">የሥራ ዓይነት</th>

                                            <th colspan="3"> የአገልግሎት ጊዜ</th>
                                            <th rowspan="2">ምርመራ</th>


                                        </tr>
                                        <tr>

                                            <th>ዓመት</td>
                                            <th>ወር</td>
                                            <th>ቀን</td>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ($exper as $i => $fo)
                                            <tr>
                                                <td>{{ ++$i }}</td>

                                                <td>



                                                    ከ{{ Carbon::parse($fo->startingDate)->day }}/{{ Carbon::parse($fo->startingDate)->month }}/{{ Carbon::parse($fo->startingDate)->year }}
                                                    እስከ
                                                    {{ Carbon::parse($fo->endingDate)->day }}/{{ Carbon::parse($fo->endingDate)->month }}/{{ Carbon::parse($fo->endingDate)->year }}
                                                </td>
                                                </td>
                                                <td>{{ $fo->positionyouworked }}</td>
                                                <td>
                                                    <?php

                                                    $fdate = Carbon::parse($fo->startingDate);

                                                    $tdate = Carbon::parse($fo->endingDate);

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


                                <h3 class="text-white text-center mt-3 mb-4 navigation "
                                    style=" background-color:#088c13; margin:center"> የሚወዳደሩበት የስራ ክፍልና
                                    የስራ
                                    መደብ
                                </h3>
                                <button class="text-white text-left mt-3 mb-4 mr-150" style=" background-color:#088c13">
                                    ምርጫ 1</button>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for=""> የስራ ክፍሉ</label>


                                        <select class="form-control custom-select d-block w-100 dynamic"
                                            name="job_category_id" id="job_category_id">
                                            <option value="">Choose</option>
                                            @foreach ($job_category as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ $form->job_category_id == $col->id ? 'selected' : '' }}>
                                                    {{ $col->job_category }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-md-6 form-group">

                                        <label for="position_id"> የስራ መደብ</label>
                                        <select class="form-control custom-select d-block w-100  positionofone"
                                            id="position_id" name="position_id">
                                            <option value="0" disabled="true" selected="true"> position
                                            </option>



                                        </select>
                                        <div id="detailsd" class=" font-20 ">


                                        </div>
                                        <div id="details" class=" ml-25 ">


                                        </div>
                                        <div id="details2" class=" ml-25 ">


                                        </div>
                                        <div id="details4" class=" ml-25 "></div>

                                        <div id="details3" class=" ml-25 ">


                                        </div>

                                    </div>


                                </div>
                                <button class="text-white text-left mt-3 mb-4" style=" background-color:#088c13">
                                    ምርጫ 2</button>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for=""> የስራ ክፍሉ</label>

                                        <select class="form-control custom-select d-block w-100  dynamic2"
                                            name="jobcat2_id" id="jobcat2_id">
                                            <option value="">Choose </option>
                                            @foreach ($jobcat2 as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ $form->jobcat2_id == $col->id ? 'selected' : '' }}>
                                                    {{ $col->job_category }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">

                                        <label for="choice2_id"> የስራ መደብ</label>
                                        <select class="form-control custom-select d-block w-100  positionofone"
                                            id="choice2_id" name="choice2_id">
                                            <option value="0" disabled="true" selected="true"> position
                                            </option>

                                        </select>
                                        <div id="detaild" class=" font-20 "></div>
                                        <div id="detail" class=" ml-25 ">


                                        </div>
                                        <div id="detail2" class=" ml-25 ">


                                        </div>
                                        <div id="detail4" class=" ml-25 "></div>

                                        <div id="detail3" class=" ml-25 ">


                                        </div>

                                    </div>




                                </div>


                                <button type="submit" class="btn bg-blue-dark-3 text-white float-right ">Save
                                </button>




                            </form>


                        </div>

                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>
@endsection
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script>
        $(document).ready(function() {


            $(document).on('change', '.dynamic', function() {

                var cat_id = $(this).val();
                console.log(cat_id);
                var div = $(this).parent();


                var op = " ";

                $.ajax({
                    type: "GET",
                    url: "try/job",
                    data: {
                        "id": cat_id
                    },
                    success: function(data) {

                        op += '<option value="0" selected disabled>select</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].position +
                                '</option>';
                        }

                        $('select[name="position_id"]').html(" ");
                        $('select[name="position_id"]').append(op);
                    },
                    error: function() {

                    }
                });
            });
            $(document).on('change', '#position_id', function() {
                var selected = $(this).val();
                var a = $(this).parent();
                var di = " ";
                var div = " ";
                div21 = " ";
                var div2 = " ";
                var div3 = " ";

                $.ajax({
                    url: "try/selection",
                    type: "GET",
                    data: {
                        "id": selected
                    },
                    dataType: "json",

                    success: function(data) {

                        di += " <b>ስራዉ የሚፈልገው ዝቅተኛ መስፈርት </b>  "
                        $('#detailsd').html(" ");
                        $('#detailsd').append(di);

                        div += " <b> የስራ ልምድ (በ አመት):</b> " + data.experience
                        $('#details').html(" ");
                        $('#details').append(div);

                        div2 += "<b> የትምህርት ደረጃ:</b> " + data.edu_level

                        $('#details2').html(" ");
                        $('#details2').append(div2);
                        div21 += "<b> የትምህርት ዝግጅት:</b> " + data.education_type

                        $('#details4').html(" ");
                        $('#details4').append(div21);
                        div3 += "<b> ደረጃ:</b> " + data.level

                        $('#details3').html(" ");
                        $('#details3').append(div3);


                    },
                    error: function() {

                    }

                });




            });
            $(document).on('change', '.dynamic2', function() {


                var categ_id = $(this).val();

                console.log(categ_id);
                var div = $(this).parent();


                var op = " ";

                $.ajax({
                    type: "GET",
                    url: "try/categ2",
                    data: {
                        "id": categ_id
                    },
                    success: function(data) {

                        op += '<option value="0" selected disabled>select</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].position +
                                '</option>';
                        }

                        $('select[name="choice2_id"]').html(" ");
                        $('select[name="choice2_id"]').append(op);
                    },
                    error: function() {

                    }
                });
            });
            $(document).on('change', '#choice2_id', function() {
                var selected = $(this).val();
                var a = $(this).parent();
                var di = " ";
                var div = " ";
                var div21 = " ";
                var div2 = " ";
                var div3 = " ";

                $.ajax({
                    url: "try/selection2",
                    type: "GET",
                    data: {
                        "id": selected
                    },
                    dataType: "json",

                    success: function(data) {

                        di += " <b>ስራዉ የሚፈልገው ዝቅተኛ መስፈርት </b>  "
                        $('#detaild').html(" ");
                        $('#detaild').append(di);

                        div += "<b> የስራ ልምድ(በ አመት):</b> " + data.experience
                        $('#detail').html(" ");
                        $('#detail').append(div);

                        div2 += "<b> የትምህርት ደረጃ:</b> " + data.edu_level

                        $('#detail2').html(" ");
                        $('#detail2').append(div2);
                        div21 += "<b> የትምህርት ዝግጅት:</b> " + data.education_type

                        $('#detail4').html(" ");
                        $('#detail4').append(div21);
                        div3 += "<b> ደረጃ:</b> " + data.level

                        $('#detail3').html(" ");
                        $('#detail3').append(div3);


                    },
                    error: function() {

                    }

                });




            });





        })
    </script>
@endsection --}}
@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">



                    <h3 class="hk-sec-title text-white text-center color-wrap  "
                        style=" background-color:#088c13; padding:10px;">ዲላ ዩኒቨርሲቲ የሰራተኞች የስራ
                        ድልድል ማወዳደርያ ቅፅ</h3>
                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('addposition', $form->id) }}"method="POST">

                                @csrf
                                @method('PUT')



                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="firstName"> የመጀምርያ ስም *</label>
                                        <input class="form-control" id="firstName" placeholder=" ስም"
                                            value="{{ $form->firstName }}" type="text" name="firstName">

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="middleName"> የአባት ስም*</label>
                                        <input class="form-control" id="middleName" placeholder=" ስም"
                                            value="{{ $form->middleName }}" type="text" name="middleName">

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="lastName"> የአያት ስም *</label>
                                        <input class="form-control" id="lastName" placeholder=" ስም"
                                            value="{{ $form->lastName }}" type="text" name="lastName">

                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="sex">ጾታ *</label>
                                        <input type="text" value="{{ $form->sex }}"
                                            name="sex"class="form-control " id="inputEmail3">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label mb-10" for="email">ኢሜይል (የ አ.ሳ.ቴን ኢሜይል ብቻ
                                            ይጠቀሙ) *</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                            </div>
                                            <input type="email" value="{{ $form->email }}"
                                                name="email"class="form-control" id="inputname" placeholder="email">



                                        </div>

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label mb-10">ስልክ
                                            ቁጥር(09...) *</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input type="text" value="{{ $form->phone }}"
                                                name="phone"class="form-control" id="inputname" placeholder="phone">
                                        </div>


                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="positionofnow">አሁን ያሉበት የስራ መደብ</label>
                                        <input type="text" value="{{ $form->positionofnow }}"
                                            name="positionofnow"class="form-control " id="inputEmail3">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="level_id">ደረጃ </label>
                                        <input type="text" value="{{ $form->level ?? '' }}" name="level"
                                            class="form-control " id="inputEmail3">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="fee">ደምወዝ (ETB)</label>
                                        <input type="text" value="{{ $form->fee }}"
                                            name="fee"class="form-control " id="fee">
                                    </div>
                                </div>
                                <h3 class="text-white text-center mt-3 mb-4  "
                                    style=" background-color:#088c13; margin:center">
                                    ያለዎት የትምህርት ዝግጅትና የትምህርት ደረጃ
                                </h3>
                                {{-- <div class="row">
                                    <div class="col-sm">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table id="edit_datable_2" class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>

                                                            <th>የትምህርት ደረጃ</th>
                                                            <th>የትምህርት ዝግጅት</th>




                                                        </tr>



                                                    </thead>
                                                    <tbody>
                                                        @foreach ($edu as $i => $fo)
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
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                @foreach ($form->education ?? [] as $i => $fo)
                                    <div class="row">
                                        <input type="hidden" value="{{ $fo->id }} "
                                            name="addMoreFields[{{ $i }}][id]"class="form-control "
                                            id="inputEmail3">
                                        <div class="col-md-4 form-group">
                                            <label for="level">Level</label>
                                            <input type="text" value="{{ $fo->level }} "
                                                name="addMoreFields[{{ $i }}][level]"class="form-control "
                                                id="inputEmail3">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="discipline">የትምህርት ዝግጅት</label>
                                            <input type="text" value="{{ $fo->discipline }}"
                                                name="addMoreFields[{{ $i }}][discipline]"class="form-control "
                                                id="inputEmail3">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="completion_date">completion_date</label>
                                            <input type="text" value="{{ $fo->completion_date }}"
                                                name="addMoreFields[{{ $i }}][completion_date]"class="form-control "
                                                id="inputEmail3">
                                        </div>

                                    </div>
                                @endforeach











                                <h3 class="text-white text-center
                                        mt-3 mb-4 "
                                    style=" background-color:#088c13; margin:center">
                                    አገልግሎት
                                </h3>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="UniversityHiringEra"> የቅጥር ዘመን በኢትዮጵያ
                                            አቆጣጠር</label>
                                        <input type="text" value="{{ $form->UniversityHiringEra }}"
                                            name="UniversityHiringEra"class="form-control " id="UniversityHiringEra">

                                    </div>
                                    {{-- <div class="col-md-6 form-group">
                                        <label for="servicPeriodAtUniversity">በዩኒቨርስቲዉ አገልግሎት ዘመን (በዓመት,የስራ
                                            መደብ)</label>
                                        <input type="text" value="{{ $form->servicPeriodAtUniversity }}"
                                            name="servicPeriodAtUniversity"class="form-control "
                                            id="servicPeriodAtUniversity">
                                    </div> --}}

                                    {{-- <div class="col-md-6 form-group">
                                        <label for="servicPeriodAtAnotherPlace">በሌላ መስርያ ቤት አገልግሎት ዘመን(በዓመት,የስራ
                                            መደብ)</label>
                                        <input type="text" value="{{ $form->servicPeriodAtAnotherPlace }}"
                                            name="servicPeriodAtAnotherPlace"class="form-control "
                                            id="servicPeriodAtAnotherPlace">
                                    </div> --}}
                                    {{-- <div class="col-md-6 form-group">
                                        <label for="serviceBeforeDiplo"> አገልግሎት ከዲፕሎማ በፊት(በዓመት,የስራ መደብ)</label>
                                        <input type="text" value="{{ $form->serviceBeforeDiplo }}"
                                            name="serviceBeforeDiplo"class="form-control " id="serviceBeforeDiplo">

                                    </div> --}}
                                    {{-- <div class="col-md-6 form-group">
                                        <label for="serviceAfterDiplo"> አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ(በዓመት, የስራ መደብ)</label>
                                        <input type="text" value="{{ $form->serviceAfterDiplo }}"
                                            name="serviceAfterDiplo"class="form-control " id="serviceAfterDiplo">
                                    </div> --}}
                                    <div class="col-md-6 form-group">
                                        <label for="resultOfrecentPerform" class=""> የሁለት ተከታታይ የቅርብ ጊዜ የሥራ
                                            አፈጻፀም አማካይ
                                            ውጤት(ከ100 በቁጥር)</label>
                                        <input type="text" value="{{ $form->resultOfrecentPerform }}"
                                            name="resultOfrecentPerform"class="form-control " id="resultOfrecentPerform">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="DisciplineFlaw">የፋይል ጥራት</label>
                                        <input type="text" value="{{ $form->DisciplineFlaw }}"
                                            name="DisciplineFlaw"class="form-control " id="DisciplineFlaw">
                                    </div>
                                    {{-- <div class="col-md-6 form-group">
                                        <label for="MoreRoles"> ተጨማሪ የሥራ ድርሻ</label>
                                        <input type="text" value="{{ $form->MoreRoles }}"
                                            name="MoreRoles"class="form-control " id="MoreRoles">
                                    </div> --}}


                                </div>
                                <h3 class="text-white text-center mt-3 mb-4   "
                                    style=" background-color:#088c13; margin:center nav">የስራ ልምድ(በኢትዮጵያ አቆጣጠር
                                    ብቻ)</h3>

                                @foreach ($form->experiences ?? [] as $i => $fo)
                                    <div class="row ">
                                        <input type="hidden" value="{{ $fo->id }} "
                                            name="addMoreInputFields[{{ $i }}][id]"class="form-control "
                                            id="inputEmail3">
                                        <div class="col-md-4 form-group">
                                            <label for="startingDate">የጀመሩበት ዓመት(ወር/ቀን/ዓመት)</label>
                                            <input type="date" value="{{ $fo->startingDate }}"
                                                name="addMoreInputFields[{{ $i }}][startingDate]"class="form-control "
                                                id="inputEmail3">
                                            @error('startingDate')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="endingDate">ያበቃበት ዓመት(ወር/ቀን/ዓመት)</label>
                                            <input type="date" value="{{ $fo->endingDate }}"
                                                name="addMoreInputFields[{{ $i }}][endingDate]"class="form-control "
                                                id="inputEmail3">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="positionyouworked">የስራ መደብ</label>
                                            <input type="text" value="{{ $fo->positionyouworked }}"
                                                name="addMoreInputFields[{{ $i }}][positionyouworked]"class="form-control "
                                                id="inputEmail3">
                                        </div>
                                        {{-- <div>
                                                <a href="javascript:void(0)"
                                                    class="btn color-wrap text-white bg-blue-dark-4  addRow mt-40 "
                                                    style=" border-radius:50%">+</a>
                                            </div> --}}

                                        {{-- </div> --}}
                                    </div>
                                @endforeach
                                <div id="myform">
                                    <div class="row">
                                        <div class="col-sm">

                                            <div class=" formgr row">

                                                <div class="col-md-3">

                                                    <label for="startingDate">የጀመሩበት ዓመት(ወር/ቀን/ዓመት)</label>
                                                    <input type="date" name="addFields[0][startingDate]"
                                                        value="{{ old('startingDate') }}"
                                                        class="form-control  @error('startingDate') is-invalid @enderror"
                                                        id="startingDate" placeholder=" ">
                                                    @error('startingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="col-md-3">
                                                    <label for="endingDate">ያበቃበት ቀን(ወር/ቀን/ዓመት) </label>
                                                    <input type="date" min="startingDate"
                                                        name="addFields[0][endingDate]" value="{{ old('endingDate') }}"
                                                        class="form-control  @error('endingDate') is-invalid @enderror"
                                                        id="endingDate" placeholder=" endingDate">
                                                    @error('endingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="positionyouworked">የስራ መደብ </label>
                                                    <input type="text" name="addFields[0][positionyouworked]"
                                                        value="{{ old('positionyouworked') }}"
                                                        class="form-control  @error('positionyouworked') is-invalid @enderror"
                                                        id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                    @error('positionyouworked')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)"
                                                        class="btn color-wrap text-white bg-blue-dark-4  addRow mt-40 "
                                                        style=" border-radius:50%">+</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>





                                <h3 class="text-white text-center mt-3 mb-4 navigation "
                                    style=" background-color:#088c13; margin:center"> የሚወዳደሩበት የስራ ክፍልና
                                    የስራ
                                    መደብ
                                </h3>
                                <button class="text-white text-left mt-3 mb-4 mr-150" style=" background-color:#088c13">
                                    ምርጫ 1</button>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for=""> የስራ ክፍሉ</label>


                                        <select class="form-control custom-select d-block w-100 dynamic"
                                            name="job_category_id" id="job_category_id">
                                            <option value="">Choose</option>
                                            @foreach ($job_category as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ $form->job_category_id == $col->id ? 'selected' : '' }}>
                                                    {{ $col->job_category }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-md-6 form-group">

                                        <label for="position_id"> የስራ መደብ</label>
                                        <select class="form-control custom-select d-block w-100  positionofone"
                                            id="position_id" name="position_id">
                                            <option value="0" disabled="true" selected="true">
                                                position
                                            </option>



                                        </select>
                                        <div id="detailsd" class=" font-20 ">


                                        </div>
                                        <div id="details" class=" ml-25 ">


                                        </div>
                                        <div id="details2" class=" ml-25 ">


                                        </div>
                                        <div id="details4" class=" ml-25 "></div>

                                        <div id="details3" class=" ml-25 ">


                                        </div>

                                    </div>


                                </div>
                                <button class="text-white text-left mt-3 mb-4" style=" background-color:#088c13">
                                    ምርጫ 2</button>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for=""> የስራ ክፍሉ</label>

                                        <select class="form-control custom-select d-block w-100  dynamic2"
                                            name="jobcat2_id" id="jobcat2_id">
                                            <option value="">Choose </option>
                                            @foreach ($jobcat2 as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ $form->jobcat2_id == $col->id ? 'selected' : '' }}>
                                                    {{ $col->job_category }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">

                                        <label for="choice2_id"> የስራ መደብ</label>
                                        <select class="form-control custom-select d-block w-100  positionofone"
                                            id="choice2_id" name="choice2_id">
                                            <option value="0" disabled="true" selected="true">
                                                position
                                            </option>

                                        </select>
                                        <div id="detaild" class=" font-20 "></div>
                                        <div id="detail" class=" ml-25 ">


                                        </div>
                                        <div id="detail2" class=" ml-25 ">


                                        </div>
                                        <div id="detail4" class=" ml-25 "></div>

                                        <div id="detail3" class=" ml-25 ">


                                        </div>

                                    </div>




                                </div>






                                <button type="submit" class="btn bg-blue-dark-3 text-white float-right ">Save
                                </button>




                            </form>


                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script>
        $(document).ready(function() {

            var i = 0
            $(".addRow").click(function(e) {
                ++i;
                e.preventDefault();
                $("#myform").append(`
                        <div class="row" >
                                    <div class="col-sm">

                                            <div class=" formgr row">

                                                <div class="col-md-3">
                                       <label for="startingDate"></label>

                                                    <input type="date" name="addFields[${i}][startingDate]" value="{{ old('startingDate') }}"
                                                        class="form-control  @error('startingDate') is-invalid @enderror"
                                                        id="startingDate" placeholder=" ">
                                                    @error('startingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="col-md-3">
                                                  <label for="endingDate"></label>
                                                    <input type="date" name="addFields[${i}][endingDate]" value="{{ old('endingDate') }}}"
                                                        class="form-control  @error('endingDate') is-invalid @enderror"
                                                        id="endingDate" placeholder=" endingDate">
                                                    @error('endingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="positionyouworked"></label>

                                                    <input type="text" name="addFields[${i}][positionyouworked]" value="{{ old('positionyouworked') }}"
                                                        class="form-control  @error('positionyouworked') is-invalid @enderror"
                                                        id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                    @error('positionyouworked')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div>

                                                    <a href="javascript:void(0)" class="btn btn-danger  removeRow mt-20 "
                                                        style=" border-radius:50%">-</a>
                                                </div>
                                            </div>

                                        </div>
                                </div>





                    `);
            });

            $(document).on('click', '.removeRow', function(e) {

                e.preventDefault();

                let row_item = $(this).parents('.formgr');
                $(row_item).remove();
            });
            $(document).on('change', '.dynamic', function() {

                var cat_id = $(this).val();
                console.log(cat_id);
                var div = $(this).parent();


                var op = " ";

                $.ajax({
                    type: "GET",
                    url: "try/job",
                    data: {
                        "id": cat_id
                    },
                    success: function(data) {

                        op += '<option value="0" selected disabled>select</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].position +
                                '</option>';
                        }

                        $('select[name="position_id"]').html(" ");
                        $('select[name="position_id"]').append(op);
                    },
                    error: function() {

                    }
                });
            });
            $(document).on('change', '#position_id', function() {
                var selected = $(this).val();
                var a = $(this).parent();
                var di = " ";
                var div = " ";
                div21 = " ";
                var div2 = " ";
                var div3 = " ";

                $.ajax({
                    url: "try/selection",
                    type: "GET",
                    data: {
                        "id": selected
                    },
                    dataType: "json",

                    success: function(data) {

                        di += " <b>ስራዉ የሚፈልገው ዝቅተኛ መስፈርት </b>  "
                        $('#detailsd').html(" ");
                        $('#detailsd').append(di);

                        div += " <b> የስራ ልምድ (በ አመት):</b> " + data.experience
                        $('#details').html(" ");
                        $('#details').append(div);

                        div2 += "<b> የትምህርት ደረጃ:</b> " + data.edu_level

                        $('#details2').html(" ");
                        $('#details2').append(div2);
                        div21 += "<b> የትምህርት ዝግጅት:</b> " + data.education_type

                        $('#details4').html(" ");
                        $('#details4').append(div21);
                        div3 += "<b> ደረጃ:</b> " + data.level

                        $('#details3').html(" ");
                        $('#details3').append(div3);


                    },
                    error: function() {

                    }

                });




            });
            $(document).on('change', '.dynamic2', function() {


                var categ_id = $(this).val();

                console.log(categ_id);
                var div = $(this).parent();


                var op = " ";

                $.ajax({
                    type: "GET",
                    url: "try/categ2",
                    data: {
                        "id": categ_id
                    },
                    success: function(data) {

                        op += '<option value="0" selected disabled>select</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].position +
                                '</option>';
                        }

                        $('select[name="choice2_id"]').html(" ");
                        $('select[name="choice2_id"]').append(op);
                    },
                    error: function() {

                    }
                });
            });
            $(document).on('change', '#choice2_id', function() {
                var selected = $(this).val();
                var a = $(this).parent();
                var di = " ";
                var div = " ";
                var div21 = " ";
                var div2 = " ";
                var div3 = " ";

                $.ajax({
                    url: "try/selection2",
                    type: "GET",
                    data: {
                        "id": selected
                    },
                    dataType: "json",

                    success: function(data) {

                        di += " <b>ስራዉ የሚፈልገው ዝቅተኛ መስፈርት </b>  "
                        $('#detaild').html(" ");
                        $('#detaild').append(di);

                        div += "<b> የስራ ልምድ(በ አመት):</b> " + data.experience
                        $('#detail').html(" ");
                        $('#detail').append(div);

                        div2 += "<b> የትምህርት ደረጃ:</b> " + data.edu_level

                        $('#detail2').html(" ");
                        $('#detail2').append(div2);
                        div21 += "<b> የትምህርት ዝግጅት:</b> " + data.education_type

                        $('#detail4').html(" ");
                        $('#detail4').append(div21);
                        div3 += "<b> ደረጃ:</b> " + data.level

                        $('#detail3').html(" ");
                        $('#detail3').append(div3);


                    },
                    error: function() {

                    }

                });




            });






        })
    </script>
@endsection
