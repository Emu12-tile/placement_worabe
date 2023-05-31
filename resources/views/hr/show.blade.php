@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    {{--
                        <h3 class="hk-sec-title text-gold text-center color-wrap  "
                            style=" background-color:#08488C; padding:10px;">አዳማ  ሳይንስና ቴክኖሎጂ ዩኒቨርሲቲ የሰራተኞች የ ስራ
                            ድልድል ማወዳደርያ ቅፅ</h3>
                        <p class="mb-25"> </p>

                        <div class="row">
                            <div class="col-sm">
                                <h1 class="text-center text-wrap font-30 font-weight-600">ይቅርታ!!!</h1>
                                <h1 class="text-center text-wrap font-24 font-weight-600">የመወዳደርያ ቅፅ ለመሙላት የተሰጠዎት ጊዜ አልቋል ።
                                </h1>



                            </div>
                        </div> --}}



                    <h3 class="hk-sec-title text-gold text-center color-wrap  "
                        style=" background-color:#08488C; padding:10px;">አዳማ ሳይንስና ቴክኖሎጂ ዩኒቨርሲቲ የሰራተኞች የስራ
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
                                        <input type="text" value="{{ $form->level->level ?? '' }}"
                                            name="level"class="form-control " id="inputEmail3" readonly>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="fee">ደምወዝ (ETB)</label>
                                        <input type="text" value="{{ $form->fee }}"
                                            name="fee"class="form-control " id="fee" readonly>
                                    </div>
                                </div>
                                <h3 class="text-gold text-center mt-3 mb-4  "
                                    style=" background-color:#08488C; margin:center">
                                    ያለዎት የትምህርት ዝግጅትና የትምህርት ደረጃ
                                </h3>
                                <table id="customers" class="mb-15">
                                    <thead>
                                        <tr>
                                            <th>ተ.ቁ</th>
                                            <th>የትምህርት ዝግጅት</th>
                                            <th>የትምህርት ደረጃ</th>



                                        </tr>


                                    </thead>
                                    <tbody>
                                        @foreach ($edu as $i => $fo)
                                            <tr>
                                                <td>{{ ++$i }}</td>

                                                <td>{{ $fo->edu_level->education_level }} </td>
                                                <td> {{ $fo->education_type->education_type }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>











                                <h3 class="text-gold text-center mt-3 mb-4  "
                                    style=" background-color:#08488C; margin:center">
                                    አገልግሎት
                                </h3>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን በኢትዮጵያ
                                            አቆጣጠር(ወር/ቀን/ዓመት)</label>
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
                                <h3 class="text-gold text-center mt-3 mb-4   "
                                    style=" background-color:#08488C; margin:center nav">የስራ ልምድ(በኢትዮጵያ አቆጣጠር
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
                                                {{-- <td>{{ date('m/d/y', strtotime($form->startingDate)) }}-{{ date('m/d/y', strtotime($form->endingDate)) }} --}}
                                                <td>
                                                    {{-- {{ Carbon::createFromFormat( $fo->startingDate)->format('d/m/y') }}-{{ $fo->endingDate }} --}}
                                                    {{-- {{   Carbon::createFromFormat('m/d/Y', $fo->startingDate)->format('d-m-Y')}} --}}
                                                    {{-- {{ Carbon::createFromFormat('d/m/Y', $fo->startingDate) }} --}}


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
                                                    
                                                    // $years = $tdate - $fdate;
                                                    
                                                    // echo abs($years);
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
                                                    
                                                    // $months = $tdate - $fdate;
                                                    
                                                    //   echo abs($months);
                                                    $time = $tdate->diff($fdate);
                                                    echo $time->m;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    
                                                    // $fdate = Carbon::parse($fo->startingDate);
                                                    
                                                    // $tdate = Carbon::parse($fo->endingDate);
                                                    $time = $tdate->diff($fdate);
                                                    // $days = $tdate - $fdate;
                                                    echo $time->d;
                                                    // echo abs($days);
                                                    ?>
                                                </td>
                                                <td></td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                                <h3 class="text-gold text-center mt-3 mb-4 navigation "
                                    style=" background-color:#08488C; margin:center"> የሚወዳደሩበት የስራ ክፍልና
                                    የስራ
                                    መደብ
                                </h3>
                                <button class="text-gold text-left mt-3 mb-4 mr-150" style=" background-color:#08488C">
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
                                            {{-- @foreach ($position as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ $form->position_id == $col->id ? 'selected' : '' }}>
                                                    {{ $col->position }}</option>
                                            @endforeach --}}


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
                                <button class="text-gold text-left mt-3 mb-4" style=" background-color:#08488C">
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
                                            {{-- @foreach ($choice2 as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ $form->choice2_id == $col->id ? 'selected' : '' }}>
                                                    {{ $col->position }}</option>
                                            @endforeach --}}

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
@endsection
