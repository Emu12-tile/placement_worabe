@extends('app')
@section('content')
    <div class="hk-pg-wrapper   ">
        {{-- bg-light-60    --}}
        <div class="container ">
            <div class="row">
                <div class="col-xl-12 ">

                    <section class="hk-sec-wrapper mt-100">

                        <h3 class="hk-sec-title text-white text-center color-wrap  "
                            style=" background-color:rgb(17,40,77); padding:10px;">አዲስ አበባ ሳይንስና ቴክኖሎጂ ዩኒቨርሲቲ የሰራተኞች የ ስራ
                            ድልድል ማወዳደርያ ቅፅ</h3>
                        <p class="mb-25"> </p>

                        <div class="row">
                            <div class="col-sm">
                                <form action="{{ url('update-stepone/' . $form->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="firstName">የመጀመሪያ ስም *</label>
                                            <input class="form-control @error('firstName') is-invalid @enderror"
                                                type="text" placeholder="የመጀመሪያ ስም" value="{{ $form->firstName }}"
                                                id="firstName" name="firstName">
                                            @error('firstName')
                                                <span class=" error invalid-feedback">
                                                    <strong>የመጀመሪያ ስም ያስፈልጋል </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="middleName">የ አባት ስም *</label>
                                            <input class="form-control @error('middleName') is-invalid @enderror"
                                                id="middleName" placeholder="የ አባት ስም"
                                                value="{{ $form->middleName ?? '' }}{{ old('middleName') }}" type="text"
                                                name="middleName">
                                            @error('middleName')
                                                <span class=" error invalid-feedback">
                                                    <strong>የ አባት ስም ያስፈልጋል</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="lastName">የ አያት ስም *</label>
                                            <input class="form-control @error('lastName') is-invalid @enderror"
                                                id="lastName" placeholder="የ አያት ስም"
                                                value="{{ $form->lastName ?? '' }}{{ old('lastName') }}" type="text"
                                                name="lastName">
                                            @error('lastName')
                                                <span class=" error invalid-feedback">
                                                    <strong>የ አያት ስም ያስፈልጋል</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="sex">ጾታ *</label>
                                            <select class="form-control custom-select " id="sex" name="sex">

                                                <option value="ሴት "{{ $form->sex == 'ሴት' ? 'selected' : '' }}>ሴት</option>
                                                <option value="ወንድ" {{ $form->sex == 'ወንድ' ? 'selected' : '' }}>ወንድ
                                                </option>

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="control-label mb-10" for="email">ኢሜይል (የአ.አ.ሳ.ቴን ኢሜይል ብቻ ይጠቀሙ
                                                ) *</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                                </div>
                                                <input name="email" type="email"
                                                    class="form-control
                                                    @error('email') is-invalid @enderror"
                                                    id="email" placeholder="@aastu.edu.et"
                                                    value="{{ $form->email ?? '' }}{{ old('email') }}">
                                                @error('email')
                                                    <span class=" error invalid-feedback">
                                                        <strong>የአ.አ.ሳ.ቴን ኢሜይል ይጠቀሙ </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="control-label mb-10">ስልክ
                                                ቁጥር (09...) *</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                </div>
                                                <input type="tel" name="phone" id="phone"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    placeholder="09..."
                                                    value="{{ $form->phone ?? '' }}{{ old('phone') }}">
                                                @error('phone')
                                                    <span class=" error invalid-feedback">
                                                        <strong>ትክክለኛዉን ስልክ
                                                            ቁጥር ያስገቡ</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="education level">የትምህርት ዝግጅት</label>


                                            <select class="form-control custom-select d-block w-100 " id="education_type_id"
                                                value="{{ $form->education_type_id ?? '' }}{{ old('education_type_id') }}"
                                                name="education_type_id">
                                                @foreach ($edutype as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ $col->id == $form->education_type_id ? 'selected' : '' }}>
                                                        {{ $col->education_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="edu_level_id">የትምህርት ደረጃ</label>
                                            <select
                                                class="form-control custom-select d-block w-100 "value="{{ $form->edu_level_id ?? '' }}"
                                                name="edu_level_id">
                                                @foreach ($edu_level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ $col->id == $form->edu_level_id ? 'selected' : '' }}>
                                                        {{ $col->education_level }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="col-md-4 form-group">
                                            <label for="positionofnow">አሁን ያሉበት የስራ መደብ</label>
                                            <input type="text"
                                                value="{{ $form->positionofnow ?? '' }}{{ old('positionofnow') }}"
                                                class="form-control @error('positionofnow') is-invalid @enderror"
                                                id="positionofnow" placeholder="አሁን ያሉበት የስራ መደብ" name="positionofnow">
                                            @error('positionofnow')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="level_id">ደረጃ </label>
                                            <select class="form-control custom-select d-block w-100 "
                                                value="{{ $form->level_id ?? '' }}" name="level_id">
                                                @foreach ($level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ $col->id == $form->level_id ? 'selected' : '' }}>
                                                        {{ $col->level }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="fee">ደምወዝ (ETB)</label>
                                            <input class="form-control @error('fee') is-invalid @enderror" id="fee"
                                                placeholder="ደምወዝ" value="{{ $form->fee ?? '' }}" type="number"
                                                name="fee">
                                            @error('fee')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>

                                    <h3 class="text-white text-center mt-3 mb-4 "
                                        style=" background-color:rgb(17,40,77); margin:center"> የሚወዳደሩበት የስራ ክፍልና የስራ መደብ
                                    </h3>
                                    <button class="text-white text-left mt-3 mb-4 mr-150"
                                        style=" background-color:rgb(17,40,77)"> ምርጫ 1</button>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for=""> የስራ ክፍሉ</label>


                                            <select class="form-control custom-select d-block w-100 dynamic "
                                                value="{{ old('job_category_id') }}" name="job_category_id"
                                                id="job_category_id">
                                                <option value="">Chose </option>
                                                @foreach ($job_category as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ $col->id == $form->job_category_id ? 'selected' : '' }}>
                                                        {{ $col->job_category }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="col-md-6 form-group">

                                            <label for="position_id"> የስራ መደብ</label>
                                            <select class="form-control custom-select d-block w-100  positionofone"
                                                id="position_id" name="position_id" value="{{ old('position_id') }}">
                                                <option value="0" disabled="true" selected="true"> position</option>


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
                                    <button class="text-white text-left mt-3 mb-4"
                                        style=" background-color:rgb(17,40,77)">
                                        ምርጫ 2</button>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for=""> የስራ ክፍሉ</label>


                                            <select class="form-control custom-select d-block w-100  dynamic2"
                                                value="{{ $form->jobcat2_id ?? '' }}" name="jobcat2_id">
                                                <option value="">Chose </option>
                                                @foreach ($jobcat2 as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ $col->id == $form->jobcat2_id ? 'selected' : '' }}>
                                                        {{ $col->job_category }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">

                                            <label for="choice2_id"> የስራ መደብ</label>
                                            <select class="form-control custom-select d-block w-100  positionofone"
                                                id="choice2_id" name="choice2_id">
                                                <option value="0" disabled="true" selected="true"> position</option>


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

                                    {{-- <div class="form-navigation mt-3">

                                        <a href="{{ route('multiforms.create-step-one') }}"
                                            class="btn color-wrap text-white bg-red-dark-4 float-left"><i
                                                class="fa fa-angle-left"></i> የቀድሞ</a>

                                        <button type="submit"
                                            class="next btn text-white color-wrap bg-blue-dark-3 float-right">ቀጣይ <i
                                                class="fa fa-angle-right"></i></button>

                                    </div> --}}




                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን(በኢትዮጵያ አቆጣጠር)</label>
                                            <input type="date"
                                                value="{{ $form->UniversityHiringEra ?? '' }}{{ old('UniversityHiringEra') }}"
                                                class="form-control @error('UniversityHiringEra') is-invalid @enderror"
                                                id="UniversityHiringEra" placeholder="በዩኒቨርስቲዉ የቅጥር ዘመን"
                                                name="UniversityHiringEra">
                                            @error('UniversityHiringEra')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="servicPeriodAtUniversity">በዩኒቨርስቲዉ አገልግሎት ዘመን (በዓመት)</label>
                                            <input
                                                class="form-control
                                                @error('servicPeriodAtUniversity') is-invalid @enderror"
                                                id="servicPeriodAtUniversity" placeholder="በዩኒቨርስቲዉ አገልግሎት ዘመን"
                                                value="{{ $form->servicPeriodAtUniversity ?? '' }}{{ old('servicPeriodAtUniversity') }}"
                                                type="text" name="servicPeriodAtUniversity">
                                            @error('servicPeriodAtUniversity')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="servicPeriodAtAnotherPlace">በሌላ መስርያ ቤት አገልግሎት ዘመን (በዓመት)</label>
                                            <input
                                                class="form-control
                                                @error('servicPeriodAtAnotherPlace') is-invalid @enderror"
                                                id="servicPeriodAtAnotherPlace" placeholder="በሌላ መስርያ ቤት አገልግሎት ዘመን"
                                                value="{{ $form->servicPeriodAtAnotherPlace ?? '' }}{{ old('servicPeriodAtAnotherPlace') }}"
                                                type="text" name="servicPeriodAtAnotherPlace">
                                            @error('servicPeriodAtAnotherPlace')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="serviceBeforeDiplo"> አገልግሎት ከዲፕሎማ በፊት (በዓመት)</label>
                                            <input class="form-control @error('serviceBeforeDiplo') is-invalid @enderror"
                                                id="serviceBeforeDiplo" placeholder="አገልግሎት ከዲፕሎማ በፊት"
                                                value="{{ $form->serviceBeforeDiplo ?? '' }}{{ old('serviceBeforeDiplo') }}"
                                                type="text" name="serviceBeforeDiplo">
                                            @error('serviceBeforeDiplo')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="serviceAfterDiplo"> አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ (በዓመት)</label>
                                            <input
                                                class="form-control mt-25
                                                @error('serviceAfterDiplo') is-invalid @enderror"
                                                id="serviceAfterDiplo" placeholder=" አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ"
                                                value="{{ $form->serviceAfterDiplo ?? '' }}{{ old('serviceAfterDiplo') }}"
                                                type="text" name="serviceAfterDiplo">
                                            @error('serviceAfterDiplo')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="resultOfrecentPerform" class=""> የሁለት ተከታታይ የቅርብ ጊዜ የሥራ
                                                አፈጻፀም አማካይ
                                                ውጤት</label>
                                            <input
                                                class="form-control mt-25
                                                @error('resultOfrecentPerform') is-invalid @enderror"
                                                id="resultOfrecentPerform" placeholder=" የሁለት ተከታታይ የቅርብ ጊዜ የሥራ አፈጻፀም"
                                                value="{{ $form->resultOfrecentPerform ?? '' }}{{ old('resultOfrecentPerform') }}"
                                                type="text" name="resultOfrecentPerform">
                                            @error('resultOfrecentPerform')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት</label>
                                            <input class="form-control @error('DisciplineFlaw') is-invalid @enderror"
                                                id="DisciplineFlaw" placeholder=" የዲስፕሊን ጉድለት"
                                                value="{{ $form->DisciplineFlaw ?? '' }}{{ old('DisciplineFlaw') }}"
                                                type="text" name="DisciplineFlaw">
                                            @error('DisciplineFlaw')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="MoreRoles"> ተጨማሪ የሥራ ድርሻ</label>
                                            <input class="form-control @error('MoreRoles') is-invalid @enderror"
                                                id="MoreRoles" placeholder="ተጨማሪ የሥራ ድርሻ"
                                                value="{{ $form->MoreRoles ?? '' }}{{ old('MoreRoles') }}"
                                                type="text" name="MoreRoles">
                                            @error('MoreRoles')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>
                                    <h3 class="text-white text-center mt-3 mb-4  "
                                        style=" background-color:rgb(17,40,77); margin:center">የ ስራ ልምድ</h3>
                                    {{-- <h5 class="text-secondary text-center mt-3 mb-4" id="dynamicAddRemove">የ ስራ ልምድ</h5> --}}
                                    <div class="row">
                                        <div class="col-sm">

                                            <div class=" formgr row">

                                                <div class="col-md-3">

                                                    <label for="startingDate">የጀመሩበት ዐመት</label>
                                                    <input type="date" name="addMoreInputFields[0][startingDate]"
                                                        value="{{ $form->startingDate }}"
                                                        class="form-control  @error('startingDate') is-invalid @enderror"
                                                        id="startingDate" placeholder=" ">
                                                    @error('startingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="col-md-3">
                                                    <label for="endingDate">ያበቃበት ቀን </label>
                                                    <input type="date" min="startingDate"
                                                        name="addMoreInputFields[0][endingDate]"
                                                        value="{{ $form->endingDate ?? '' }}{{ old('endingDate') }}"
                                                        class="form-control  @error('endingDate') is-invalid @enderror"
                                                        id="endingDate" placeholder=" endingDate">
                                                    @error('endingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="positionyouworked">የ ስራ መደብ </label>
                                                    <input type="text" name="addMoreInputFields[0][positionyouworked]"
                                                        value="{{ $form->positionyouworked ?? '' }}{{ old('positionyouworked') }}"
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



                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {



            $(document).on('change', '.dynamic', function() {
                // console.log("hmm its change");

                var cat_id = $(this).val();


                var div = $(this).parent();


                var op = " ";

                $.ajax({
                    type: "GET",
                    url: "steptwo/job",
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
                // console.log(selected);
                $.ajax({
                    url: "/steptwo/selection",
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
                // console.log("hmm its change");

                var categ_id = $(this).val();

                console.log(categ_id);
                var div = $(this).parent();


                var op = " ";

                $.ajax({
                    type: "GET",
                    url: "steptwo/categ2",
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
                // console.log(selected);
                $.ajax({
                    url: "/steptwo/selection2",
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
