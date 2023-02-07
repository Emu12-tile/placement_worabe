@extends('app')
@section('content')
    <div class="hk-pg-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <section class="hk-sec-wrapper mt-100">

                        <h1 class="hk-sec-title text-primary text-center">የመወዳደርያ ቅጽ</h1>
                        <p class="mb-25"> </p>

                        <div class="row">
                            <div class="col-sm">
                                <form action="" method="POST" class="employee-form" id="add_form">
                                    @csrf
                                    <div class="form-section">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">የመጀመሪያ ስም</label>
                                                <input class="form-control" @error('firstName') is-invalid @enderror"
                                                    id="firstName" placeholder="የመጀመሪያ ስም" value="{{ old('firstName') }}"
                                                    type="text" name="firstName">
                                                @error('firstName')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="lastName">የ አያት ስም</label>
                                                <input class="form-control" @error('lastName') is-invalid @enderror"
                                                    id="lastName" placeholder="የ አያት ስም" value="{{ old('lastName') }}"
                                                    type="text" name="lastName">
                                                @error('lastName')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="middleName">የ አባት ስም</label>
                                                <input class="form-control" @error('middleName') is-invalid @enderror"
                                                    id="middleName" placeholder="የ አባት ስም" value="{{ old('middleName') }}"
                                                    type="text" name="middleName">
                                                @error('middleName')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">ጾታ</label>
                                                <select class="form-control custom-select " id="sex">

                                                    <option value="ሴት">ሴት</option>
                                                    <option value="ወንድ">ወንድ</option>

                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label mb-10" for="email">ኢሜይል</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="icon-envelope-open"></i></span>
                                                    </div>
                                                    <input name="email" type="email" class="form-control"
                                                        @error('email') is-invalid @enderror" id="email"
                                                        placeholder="Enter email" value="{{ old('email') }}">
                                                    @error('email')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label mb-10">ስልክ
                                                    ቁጥር</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input type="tel"name="phone" id="phone"
                                                        class="form-control"@error('phone') is-invalid @enderror"
                                                        placeholder="Enter phone" value="{{ old('phone') }}">
                                                    @error('phone')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                    <div class="form-section">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                            <label for="education level">የ ትምህርት ዓይነት</label>


                                            <select class="form-control custom-select d-block w-100 " id="education_type_id"
                                                 name="education_type_id">
                                                @foreach ($edutype as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('education_type_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->education_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                             <div class="col-md-6 form-group">
                                            <label for="edu_level_id">የትምህርት ደረጃ</label>
                                            <select
                                                class="form-control custom-select d-block w-100 "
                                                name="edu_level_id"  id="edu_level_id">
                                                @foreach ($edu_level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('edu_level_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->education_level }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                           <div class="col-md-4 form-group">
                                            <label for="positionofnow">አሁን ያሉበት የስራ መደብ</label>
                                            <input type="text" value="{{ old('positionofnow') }}"
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
                                            <select class="form-control custom-select d-block w-100 " id="level_id"
                                                 name="level_id">
                                                @foreach ($level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('level_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->level }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                             <div class="col-md-4 form-group">
                                            <label for="fee">ደምወዝ</label>
                                            <input class="form-control @error('fee') is-invalid @enderror" id="fee"
                                                placeholder="ደምወዝ" value="{{ old('fee') }}" type="number"
                                                name="fee">
                                            @error('fee')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        </div>

                                        <h4 class="text-secondary text-center mt-3 mb-4"> የ መወዳደርያ የስራ ክፍልና የስራ መደብ</h4>
                                        <h6 class="text-secondary text-left mt-3 mb-4"> ምርጫ 1</h6>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for=""> የስራ ክፍሉ</label>


                                                <select class="form-control custom-select d-block w-100 "
                                               value="{{ old('job_category_id') }}" name="job_category_id" id="job_category_id">
                                                @foreach ($job_category as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('job_category_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->job_category }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for=""> የስራ መደብ</label>
                                                 <select class="form-control custom-select d-block w-100 "
                                                value="{{ old('position_id') }}" name="position_id" id="position_id">
                                                @foreach ($position as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('position_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->position }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for=""> ደረጃ</label>
                                               <select class="form-control custom-select d-block w-100 "
                                                 name="level_id" id="level_id">
                                                @foreach ($level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('level_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->level }}</option>
                                                @endforeach
                                            </select>
                                            </div>


                                        </div>
                                        <h6 class="text-secondary text-left mt-3 mb-4"> ምርጫ 2</h6>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for=""> የስራ ክፍሉ</label>


                                                <select class="form-control custom-select d-block w-100 "
                                               name="job_category_id" >
                                                @foreach ($job_category as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('job_category_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->job_category }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for=""> የስራ መደብ</label>
                                                <select class="form-control custom-select d-block w-100 "
                                                name="position_id" id="position_id">
                                                @foreach ($position as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('position_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->position }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for=""> ደረጃ</label>
                                                <select class="form-control custom-select d-block w-100 "
                                                name="level_id" >
                                                @foreach ($level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('level_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->level }}</option>
                                                @endforeach
                                            </select>
                                            </div>


                                        </div>

                                    </div>
                                    <div class="form-section">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን</label>
                                                <input class="form-control" @error('lastName') is-invalid @enderror"
                                                    id="UniversityHiringEra" placeholder="UniversityHiringEra"
                                                    value="{{ old('UniversityHiringEra') }}" type="text"
                                                    name="UniversityHiringEra">
                                                @error('UniversityHiringEra')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="servicPeriodAtUniversity">በዩኒቨርስቲዉ አገልግሎት ዘመን</label>
                                                <input class="form-control"
                                                    @error('servicPeriodAtUniversity') is-invalid @enderror"
                                                    id="servicPeriodAtUniversity" placeholder="servicPeriodAtUniversity"
                                                    value="{{ old('servicPeriodAtUniversity') }}" type="text"
                                                    name="servicPeriodAtUniversity">
                                                @error('servicPeriodAtUniversity')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="servicPeriodAtAnotherPlace">በሌላ መስርያ ቤት አገልግሎት ዘመን</label>
                                                <input class="form-control"
                                                    @error('servicPeriodAtAnotherPlace') is-invalid @enderror"
                                                    id="servicPeriodAtAnotherPlace" placeholder="በሌላ መስርያ ቤት አገልግሎት ዘመን"
                                                    value="{{ old('servicPeriodAtAnotherPlace') }}" type="text"
                                                    name="servicPeriodAtAnotherPlace">
                                                @error('servicPeriodAtAnotherPlace')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="serviceBeforeDiplo"> አገልግሎት ከዲፕሎማ በፊት</label>
                                                <input class="form-control "
                                                    @error('serviceBeforeDiplo') is-invalid @enderror"
                                                    id="serviceBeforeDiplo" placeholder="አገልግሎት ከዲፕሎማ በፊት"
                                                    value="{{ old('serviceBeforeDiplo') }}" type="text"
                                                    name="serviceBeforeDiplo">
                                                @error('serviceBeforeDiplo')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="serviceAfterDiplo"> አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ</label>
                                                <input class="form-control mt-25"
                                                    @error('serviceAfterDiplo') is-invalid @enderror"
                                                    id="serviceAfterDiplo" placeholder=" አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ"
                                                    value="{{ old('serviceAfterDiplo') }}" type="text"
                                                    name="serviceAfterDiplo">
                                                @error('serviceAfterDiplo')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="resultOfrecentPerform" class=""> የሁለት ተከታታይ የቅርብ ጊዜ የሥራ
                                                    አፈጻፀም
                                                    ውጤት</label>
                                                <input class="form-control mt-25"
                                                    @error('resultOfrecentPerform') is-invalid @enderror"
                                                    id="resultOfrecentPerform" placeholder=" የሁለት ተከታታይ የቅርብ ጊዜ የሥራ አፈጻፀም"
                                                    value="{{ old('resultOfrecentPerform') }}" type="text"
                                                    name="resultOfrecentPerform">
                                                @error('resultOfrecentPerform')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት</label>
                                                <input class="form-control" @error('DisciplineFlaw') is-invalid @enderror"
                                                    id="DisciplineFlaw" placeholder=" የዲስፕሊን ጉድለት"
                                                    value="{{ old('DisciplineFlaw') }}" type="text"
                                                    name="DisciplineFlaw">
                                                @error('DisciplineFlaw')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="MoreRoles"> ተጨማሪ የሥራ ድርሻ</label>
                                                <input class="form-control" @error('MoreRoles') is-invalid @enderror"
                                                    id="MoreRoles" placeholder="ተጨማሪ የሥራ ድርሻ"
                                                    value="{{ old('MoreRoles') }}" type="text" name="MoreRoles">
                                                @error('MoreRoles')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                        </div>
                                        <h5 class="text-secondary text-center mt-3 mb-4 ">የ ስራ ልምድ</h5>
                                        <div class="row">
                                            <div class="col-sm">

                                                <div class=" formgr row">

                                                    <div class="col-md-3">

                                                        <label for="startingDate">የጀመሩበት ዐመት</label>
                                                        <input type="date" name="startingDate"
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
                                                        <input type="date" name="endingDate"
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
                                                    <input type="text" name="positionyouworked" value="{{ old('positionyouworked') }}"
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
                                                            class="btn btn-primary  addRow mt-40 "
                                                            style=" border-radius:50%">+</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-navigation mt-3">
                                        <button type="button" class="previous btn btn-primary  float-left">&lt;
                                            Previous</button>
                                        <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
                                        <button type="submit" class="btn btn-success  float-right">Submit</button>
                                        {{-- <input type="hidden" id="form_id" name="form_id" value="{{ $form->id()  }}"> --}}
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

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
         $(document).ready(function() {
$(".addRow").click(function(e) {
            e.preventDefault();
            $("#add_form .form-navigation").before(`
                            <div class="row">
                                        <div class="col-sm">
                                                                    <div class=" formgr row">

                                                <div class="col-md-3">
                                                    <input type="date" name="startDate"
                                                        class="form-control mt-15 @error('startDate') is-invalid @enderror"
                                                        id="inputname" placeholder=" number">
                                                    @error('number')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="col-md-3">
                                                    <input type="date" name="startingDate"
                                                        class="form-control mt-15 @error('startingDate') is-invalid @enderror"
                                                        id="inputname" placeholder=" date">
                                                    @error('number')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                 <div class="col-md-4">

                                                    <input type="text" name="positionyouworked" value="{{ old('positionyouworked') }}"
                                                        class="form-control  @error('positionyouworked') is-invalid @enderror"
                                                        id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                    @error('positionyouworked')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                             <div>
                                                   <a href="javascript:void(0)" class="btn btn-danger removeRow mt-15" style=" border-radius:50%" >-</a>
                                             </div>
                                            </div>


                                        </div>

                                    </div>







                    `);
        });
         $(function() {
            var $sections = $('.form-section');

            function navigateTo(index) {
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [Type=submit]').toggle(atTheEnd);

                const step = document.querySelector('.step' + index);
                step.style.backgroundColor = "#17a2b8";
                step.style.color = "white";
            }

            function curIndex() {
                return $sections.index($sections.filter('.current'));


            }
            $('.form-navigation .previous').click(function() {
                navigateTo(curIndex() - 1);
            });
            $('.form-navigation .next').click(function() {
                $('.employee-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function() {
                    navigateTo(curIndex() + 1);
                });
            });
            $sections.each(function(index, section) {
                $(section).find(':input').attr('data-parsley-group', 'block-' + index);

            });
            navigateTo(0);
        });
        $(document).on('click', '.removeRow', function(e) {

            e.preventDefault();
            let row_item = $(this).parents().eq(3);
            $(row_item).remove();
        });

        $("#add_form").on("submit", function(e) {

            e.preventDefault();
            form_groups = $(this).find(".formgr");
            var flag = true;

            var quantities = [];


            $(form_groups).each((key, value)=>{

                item = {
                    "positionyouworked": "",
                    "startingDate": "",
                     "endingDate": "",
                }

                var positionyouworked = $(value).find("input[type='text']").val()
                var startingDate = $(value).find("input[type='date']").val();
                var endingDate = $(value).find("input[type='date']").val()

                if(positionyouworked == undefined || positionyouworked == "")
                {
                    $(value).find("input[type='text']").addClass("is-invalid");
                    $flag = false;
                }

                if(startingDate == undefined || startingDate == "")
                {
                    $(value).find("input[type='date']").addClass("is-invalid");
                    $flag = false;
                    return;
                }
                 if(endingDate == undefined || endingDate == "")
                {
                    $(value).find("input[type='date']").addClass("is-invalid");
                    $flag = false;
                    return;
                }

                if(positionyouworked && startingDate && endingDate)
                {
                    $(value).find("input[type='date']").removeClass("is-invalid");
                     $(value).find("input[type='date']").removeClass("is-invalid");
                   $(value).find("input[type='text']").removeClass("is-invalid");

                    item.positionyouworked = positionyouworked
                    item.startingDate = startingDate
                    item.endingDate=endingDate
                    quantities.push(item)
                }

            })
            //    console.log(form_groups.length)

          if (quantities.length == form_groups.length) {

           $.ajax({
                    url: "/hr",
                    type: "post",
                    data: {
                        "data": quantities,
                        // "form_id":id,
                        "firstName":$("#firstName").val(),
                        "middleName":$("#middleName").val(),
                        "lastName":$("#lastName").val(),
                        "email":$("#email").val(),
                        "phone":$("#phone").val(),
                        "sex":$("#sex").val(),
                        "fee":$('#fee').val(),
                         "position_id":$("#position_id").val(),
                        "job_category_id":$("#job_category_id").val(),
                        "level_id":$("#level_id").val(),
                           "edu_level_id":$("#edu_level_id").val(),

                        "education_type_id":$("#education_type_id").val(),
                        "positionofnow":$('#positionofnow').val(),

                        "UniversityHiringEra":$('#UniversityHiringEra').val(),
                         "servicPeriodAtUniversity":$('#servicPeriodAtUniversity').val(),
                          "servicPeriodAtAnotherPlace":$("#servicPeriodAtAnotherPlace").val(),
                        "serviceBeforeDiplo":$("#serviceBeforeDiplo").val(),
                        "serviceAfterDiplo":$("#serviceAfterDiplo").val(),
                        "resultOfrecentPerform":$('#resultOfrecentPerform').val(),
                         "DisciplineFlaw":$("#DisciplineFlaw").val(),
                        "MoreRoles":$('#MoreRoles').val(),



                        // "educationtype_id":$("educationtype_id").val(),

                    },
                    headers: {
                        "X-CSRF-TOKEN": "{{csrf_token()}}"
                    },
                    // try modal

                    success: function(data){

                        if(data.success)
                        {
                             swal("Thank You ","Successfully Submitted","success")
                            // alert('thank you')
                        //    $('#exampleModalCenter').modal('show ');
                        // dd(data->id);
                            location.href="/try"
                            //  location.href="/try"
                        }
                    }
                })
            }

        })
    })
    </script>
@endsection
