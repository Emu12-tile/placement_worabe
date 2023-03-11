{{-- @extends('app')
@section('content')
    <div class="hk-pg-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <section class="hk-sec-wrapper mt-100">

                        <h5 class="hk-sec-title">
                            የ መወዳደርያ ቅጽ
                        </h5>
                        <p class="mb-25"> </p>

                        <div class="row">
                            <div class="col-sm">
                                <form action="" class="application-form" method="POST" id="add_form">
                                    @csrf

                                    <div class="row">

                                        <div class="col-md-3 form-group">
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
                                        <div class="col-md-3 form-group">
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
                                        <div class="col-md-3 form-group">
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

                                        <div class="col-md-2 form-group">
                                            <label for="firstName">ጾታ</label>
                                            <select class="form-control custom-select ">
                                                <option selected>ጾታ</option>
                                                <option value="1">ሴት</option>
                                                <option value="2">ወንድ</option>

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="control-label mb-10" for="email">ኢሜይል</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
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
                                    <div class="form-navigation row mb-0 ">
                                        <div class="col-sm-10">
                                            <button type="button" class="next btn btn-primary pull-right"
                                                id="add_btn">ቀጣይ</button>
                                            <button type="button" class="previous btn btn-primary pull-left"
                                                id="add_btn">ቀዳሚ</button>
                                            <button type="submit" class="btn btn-success pull-right "
                                                id="add_btn">አስረክብ</button>
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
    <<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(function() {
            var $sections = $('.form-group');

            function navigateTo(index) {
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [type-submit]').toggle(atTheEnd);

            }

            function curIndex() {
                return $sections.index($sections.filter('.current'));
            }
            $('.form-navigation .previous').click(function() {
                navigateTo(curIndex() - 1);
            });
            $('.form-navigation .next').click(function() {
                $('.application-form').parsley().whenValidate({
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
    </script>
@endsection --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Application Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <style>
        .form-section {
            display: none;
        }

        .form-section.current {
            display: inline;
        }

        .parsley-errors-list {
            color: red;
            border-color: red;
        }
    </style>





</head>

<body>

    <div class="container-fluid  ">
        <div class="row justify-content-md-center">
            <div class="col-md-9 ">
                <div class="card px-5 py-3 mt-5 shadow">
                    <h1 class="text-primary text-center mt-3 mb-4"> የመወዳደርያ ቅጽ</h1>



                    <form action="" method="POST" class="employee-form" id="add_form">
                        @csrf
                        <div class="form-section">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="firstName">የመጀመሪያ ስም</label>
                                    <input class="form-control" @error('firstName') is-invalid @enderror" id="firstName"
                                        placeholder="የመጀመሪያ ስም" value="{{ old('firstName') }}" type="text"
                                        name="firstName">
                                    @error('firstName')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="lastName">የ አያት ስም</label>
                                    <input class="form-control" @error('lastName') is-invalid @enderror" id="lastName"
                                        placeholder="የ አያት ስም" value="{{ old('lastName') }}" type="text"
                                        name="lastName">
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
                                    <label for="firstName" >ጾታ</label>
                                    <select class="form-control custom-select " id="sex">
                                        <option selected>ጾታ</option>
                                        <option value="ሴት">ሴት</option>
                                        <option value="ወንድ">ወንድ</option>

                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="control-label mb-10" for="email">ኢሜይል</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                        </div>
                                        <input name="email" type="email" class="form-control"
                                            @error('email') is-invalid @enderror" id="email"
                                            placeholder="@aastu.edu.et" value="{{ old('email') }}">
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
                                            placeholder="09..." value="{{ old('phone') }}" max=10>
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
                                    <label for="education level">የትምህርት ዓይነት</label>


                                    <select class="form-control custom-select d-block w-100 " id="admin_id"
                                        name="admin_id">
                                        @foreach ($level as $col)
                                            <option value="{{ $col->id }}"
                                                {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                {{ $col->education_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="education level">የ ትምህርት ደረጃ</label>
                                    <select class="form-control custom-select d-block w-100 " name="admin_id">
                                        @foreach ($level as $col)
                                            <option value="{{ $col->id }}"
                                                {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                {{ $col->education_level }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for=""> አሁን ያሉበት የስራ መደብ </label>


                                    <select class="form-control custom-select d-block w-100 " name="admin_id">
                                        @foreach ($level as $col)
                                            <option value="{{ $col->id }}"
                                                {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                {{ $col->position }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="">ደረጃ </label>
                                    <select class="form-control custom-select d-block w-100 " name="admin_id">
                                        @foreach ($level as $col)
                                            <option value="{{ $col->id }}"
                                                {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                {{ $col->level }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="fee">ደምወዝ</label>
                                    <input class="form-control" @error('lastName') is-invalid @enderror"
                                        id="fee" placeholder="ደምወዝ" value="{{ old('fee') }}"
                                        type="text" name="fee">
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


                                    <select class="form-control custom-select d-block w-100 " name="admin_id">
                                        @foreach ($level as $col)
                                            <option value="{{ $col->id }}"
                                                {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                {{ $col->job_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for=""> የስራ መደብ</label>
                                    <select class="form-control custom-select d-block w-100 " name="admin_id">
                                        @foreach ($level as $col)
                                            <option value="{{ $col->id }}"
                                                {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                {{ $col->apply_for_position }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for=""> ደረጃ</label>
                                    <select class="form-control custom-select d-block w-100 " name="admin_id">
                                        @foreach ($level as $col)
                                            <option value="{{ $col->id }}"
                                                {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                {{ $col->level }}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>
                            <h6 class="text-secondary text-left mt-3 mb-4"> ምርጫ 2</h6>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for=""> የስራ ክፍሉ</label>


                                    <select class="form-control custom-select d-block w-100 " name="admin_id">
                                        @foreach ($level as $col)
                                            <option value="{{ $col->id }}"
                                                {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                {{ $col->job_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for=""> የስራ መደብ</label>
                                    <select class="form-control custom-select d-block w-100 " name="admin_id">
                                        @foreach ($level as $col)
                                            <option value="{{ $col->id }}"
                                                {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                {{ $col->apply_for_position }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for=""> ደረጃ</label>
                                    <select class="form-control custom-select d-block w-100 " name="admin_id">
                                        @foreach ($level as $col)
                                            <option value="{{ $col->id }}"
                                                {{ old('admin_id') == $col->id ? 'selected' : '' }}>
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
                                        id="UniversityHiringEra" placeholder="UniversityHiringEra" value="{{ old('UniversityHiringEra') }}"
                                        type="text" name="UniversityHiringEra">
                                    @error('UniversityHiringEra')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="servicPeriodAtUniversity">በዩኒቨርስቲዉ አገልግሎት ዘመን</label>
                                    <input class="form-control" @error('servicPeriodAtUniversity') is-invalid @enderror"
                                        id="servicPeriodAtUniversity" placeholder="servicPeriodAtUniversity" value="{{ old('servicPeriodAtUniversity') }}"
                                        type="text" name="servicPeriodAtUniversity">
                                    @error('servicPeriodAtUniversity')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="servicPeriodAtAnotherPlace">በሌላ መስርያ ቤት አገልግሎት ዘመን</label>
                                    <input class="form-control" @error('servicPeriodAtAnotherPlace') is-invalid @enderror"
                                        id="servicPeriodAtAnotherPlace" placeholder="በሌላ መስርያ ቤት አገልግሎት ዘመን" value="{{ old('fee') }}"
                                        type="text" name="servicPeriodAtAnotherPlace">
                                    @error('servicPeriodAtAnotherPlace')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="serviceBeforeDiplo"> አገልግሎት ከዲፕሎማ በፊት</label>
                                    <input class="form-control " @error('serviceBeforeDiplo') is-invalid @enderror"
                                        id="serviceBeforeDiplo" placeholder="አገልግሎት ከዲፕሎማ በፊት" value="{{ old('serviceBeforeDiplo') }}"
                                        type="text" name="serviceBeforeDiplo">
                                    @error('serviceBeforeDiplo')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="serviceAfterDiplo"> አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ</label>
                                    <input class="form-control mt-25" @error('serviceAfterDiplo') is-invalid @enderror"
                                        id="serviceAfterDiplo" placeholder=" አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ" value="{{ old('serviceAfterDiplo') }}"
                                        type="text" name="serviceAfterDiplo">
                                    @error('serviceAfterDiplo')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="resultOfrecentPerform" class=""> የሁለት ተከታታይ የቅርብ ጊዜ የሥራ አፈጻፀም
                                        ውጤት</label>
                                    <input class="form-control mt-25" @error('resultOfrecentPerform') is-invalid @enderror"
                                        id="resultOfrecentPerform" placeholder=" የሁለት ተከታታይ የቅርብ ጊዜ የሥራ አፈጻፀም" value="{{ old('resultOfrecentPerform') }}"
                                        type="text" name="resultOfrecentPerform">
                                    @error('resultOfrecentPerform')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት</label>
                                    <input class="form-control" @error('DisciplineFlaw') is-invalid @enderror"
                                        id="DisciplineFlaw" placeholder=" የዲስፕሊን ጉድለት" value="{{ old('DisciplineFlaw') }}"
                                        type="text" name="DisciplineFlaw">
                                    @error('DisciplineFlaw')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="MoreRoles"> ተጨማሪ የሥራ ድርሻ</label>
                                    <input class="form-control" @error('MoreRoles') is-invalid @enderror"
                                        id="MoreRoles" placeholder="ተጨማሪ የሥራ ድርሻ" value="{{ old('MoreRoles') }}"
                                        type="text" name="MoreRoles">
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

                                    <div class=" form-group row">

                                        <div class="col-md-3">

                                            <label for="startDate">የጀመሩበት ዐመት</label>
                                            <input type="date" name="startDate"
                                                class="form-control  @error('startDate') is-invalid @enderror"
                                                id="inputname" placeholder=" ">
                                            @error('startDate')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="col-md-3">
                                            <label for="endDate">ያበቃበት ቀን </label>
                                            <input type="date" name="endDate"
                                                class="form-control  @error('endDate') is-invalid @enderror"
                                                id="inputname" placeholder=" endDate">
                                            @error('endDate')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">

                                            <label for="position">የ ስራ መደብ</label>
                                            <select class="form-control custom-select d-block w-100 " name="admin_id">
                                                @foreach ($level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->position }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-primary  addRow mt-40 "
                                                style=" border-radius:50%">+</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-navigation mt-3">
                            <button type="button" class="previous btn btn-primary  float-left">&lt; Previous</button>
                            <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
                            <button type="submit" class="btn btn-success  float-right">Submit</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>




    <script>
        // $(function() {
        //     var $sections = $('.form-section');

        //     function navigateTo(index) {
        //         $sections.removeClass('current').eq(index).addClass('current');
        //         $('.form-navigation .previous').toggle(index > 0);
        //         var atTheEnd = index >= $sections.length - 1;
        //         $('.form-navigation .next').toggle(!atTheEnd);
        //         $('.form-navigation [Type=submit]').toggle(atTheEnd);

        //         const step = document.querySelector('.step' + index);
        //         step.style.backgroundColor = "#17a2b8";
        //         step.style.color = "white";
        //     }

        //     function curIndex() {
        //         return $sections.index($sections.filter('.current'));
        //     }
        //     $('.form-navigation .previous').click(function() {
        //         navigateTo(curIndex() - 1);
        //     });
        //     $('.form-navigation .next').click(function() {
        //         $('.employee-form').parsley().whenValidate({
        //             group: 'block-' + curIndex()
        //         }).done(function() {
        //             navigateTo(curIndex() + 1);
        //         });
        //     });
        //     $sections.each(function(index, section) {
        //         $(section).find(':input').attr('data-parsley-group', 'block-' + index);
        //     });
        //     navigateTo(0);
        // });
        $(document).ready(function() {
        $(".addRow").click(function(e) {
            e.preventDefault();
            $("#add_form .form-navigation").before(`

                            <div class="row">
                                        <div class="col-sm mt-15">
                                            <div class="row">
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
                                                    <input type="date" name="startDate"
                                                        class="form-control mt-15 @error('startDate') is-invalid @enderror"
                                                        id="inputname" placeholder=" number">
                                                    @error('number')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                 <div class="col-md-4">


                                                   <select class="form-control mt-15 custom-select d-block w-100 " name="admin_id">
                                                     @foreach ($level as $col)
                                                       <option value="{{ $col->id }}"
                                                        {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->position }}</option>
                                                       @endforeach
                                                  </select>

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
            form_groups = $(this).find(".form-group");
            var flag = true;

            var quantities = [];

            $(form_groups).each((key, value)=>{

                item = {
                    "admin": "",
                    "startingDate": "",
                     "endingDate": "",
                }

                var admin = $(value).find("select").val()
                var startingDate = $(value).find("input[type='date']").val();
                var endingDate = $(value).find("input[type='date']").val()

                if(admin == undefined || admin == "")
                {
                    $(value).find("select").addClass("is-invalid");
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

                if(admin && startingDate && endingDate)
                {
                    $(value).find("input[type='date']").removeClass("is-invalid");
                    $(value).find("select").removeClass("is-invalid");

                    item.admin = admin
                    item.startingDate = startingDate
                    item.endingDate=endingDate
                    quantities.push(item)
                }

            })
        $.ajax({
                    url: "/hr",
                    type: "post",
                    data: {
                        "data": quantities,
                        "firstName":$("#firstName").val(),
                        "middleName":$("#middleName").val(),
                        "lastName":$("#lastName").val(),
                        "email":$("#email").val(),
                        "phone":$("#phone").val(),
                        "sex":$("#sex").val(),
                        "fee":$('#fee').val(),
                        "UniversityHiringEra":$('#UniversityHiringEra').val(),
                         "servicPeriodAtUniversity":$('#servicPeriodAtUniversity').val(),
                          "servicPeriodAtAnotherPlace":$("#servicPeriodAtAnotherPlace").val(),
                        "serviceBeforeDiplo":$("#serviceBeforeDiplo").val(),
                        "serviceAfterDiplo":$("#serviceAfterDiplo").val(),
                        "resultOfrecentPerform":$('#resultOfrecentPerform').val(),
                         "DisciplineFlaw":$("#DisciplineFlaw").val(),
                        "MoreRoles":$('#MoreRoles').val(),
                        "admin_id":$("#admin_id").val(),


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
                            location.href="/export_pdf"
                        }
                    }
                })
            // }

        })
    })


    </script>



</body>

</html>
