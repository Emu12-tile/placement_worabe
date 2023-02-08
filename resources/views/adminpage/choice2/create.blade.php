@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('choice2.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">በአስተዳዳሪው የሚሞላ መረጃ</h5>
                    {{-- <p class="mb-25">Create Schedule forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('choice2.store') }}" id="add_form" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <div class="col-md-6">

                                                <label for="position">  የስራ መደብ</label>
                                                <input type="text" name="addMoreInputFields[0][position]"
                                                    value="{{ old('position') }}"
                                                    class="form-control  @error('position') is-invalid @enderror"
                                                    id="position" placeholder="  የስራ መደብ">
                                                @error('position')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="col-md-4">

                                                     <label for="education_level_id">የትምህርት ደረጃ </label>
                                                   <select class="form-control custom-select d-block w-100 " name="addMoreInputFields[0][education_level_id]">
                                                     @foreach ($edu_level as $col)
                                                       <option value="{{ $col->id }}"
                                                        {{ old('education_level_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->education_level }}</option>
                                                       @endforeach
                                                  </select>

                                                </div>
                                            <div class="col-md-3">

                                                <label for="experience">  የስራ ልምድ</label>
                                                <input type="number" name="addMoreInputFields[0][experience]"
                                                    value="{{ old('experience') }}"
                                                    class="form-control  @error('experience') is-invalid @enderror"
                                                    id="experience" placeholder="  የስራ ልምድ">
                                                @error('experience')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                             <div class="col-md-4">

                                                     <label for="level_id">ደረጃ</label>
                                                   <select class="form-control custom-select d-block w-100 " name="addMoreInputFields[0][level_id]">
                                                     @foreach ($level as $col)
                                                       <option value="{{ $col->id }}"
                                                        {{ old('level_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->level }}</option>
                                                       @endforeach
                                                  </select>

                                                </div>

                                              <div class="col-md-3">

                                                     <label for="position_type_id">የስራ መደብ ዓይነት</label>
                                                   <select class="form-control custom-select d-block w-100 " name="addMoreInputFields[0][position_type_id]">
                                                     @foreach ($position as $col)
                                                       <option value="{{ $col->id }}"
                                                        {{ old('position_type_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->position_type }}</option>
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
                                <div class="form-group row mb-0 pull-right">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary" id="add_btn" >Create</button>
                                        </div>
                                    </div>
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
        var i=0;
 $(document).ready(function() {

        $(".addRow").click(function(e) {
                 ++i;
            e.preventDefault();
            $("#add_form .pull-right").before(`

                                <div class="row">
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <div class="col-md-6">

 <label for="position_type_id"></label>
                                                <input type="text" name="addMoreInputFields[${i}][position]"
                                                    value="{{ old('position') }}"
                                                    class="form-control  @error('position') is-invalid @enderror"
                                                    id="position" placeholder="የስራ መደብ">
                                                @error('position')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="col-md-4">
 <label for="position_type_id"></label>

                                                   <select class="form-control custom-select d-block w-100 " name="addMoreInputFields[${i}][education_level_id]">
                                                     @foreach ($edu_level as $col)
                                                       <option value="{{ $col->id }}"
                                                        {{ old('education_level_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->education_level }}</option>
                                                       @endforeach
                                                  </select>

                                                </div>
                                                <div class="col-md-3">
 <label for="position_type_id"></label>

                                                <input type="number" name="addMoreInputFields[${i}][experience]"
                                                    value="{{ old('experience') }}"
                                                    class="form-control  @error('experience') is-invalid @enderror"
                                                    id="experience" placeholder="  የስራ ልምድ">
                                                @error('experience')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                             <div class="col-md-3">

 <label for="position_type_id"></label>
                                                   <select class="form-control custom-select d-block w-100 " name="addMoreInputFields[${i}][level_id]">
                                                     @foreach ($level as $col)
                                                       <option value="{{ $col->id }}"
                                                        {{ old('level_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->level }}</option>
                                                       @endforeach
                                                  </select>

                                                </div>
                                            <div class="col-md-4">

 <label for="position_type_id"></label>
                                                   <select class="form-control custom-select d-block w-100 " name="addMoreInputFields[${i}][position_type_id]">
                                                     @foreach ($position as $col)
                                                       <option value="{{ $col->id }}"
                                                        {{ old('position_type_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->position_type }}</option>
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
        $(document).on('click', '.removeRow', function(e) {
            e.preventDefault();
            let row_item = $(this).parents().eq(3);
            $(row_item).remove();
        });
        // $("#add_form").on("submit", function(e) {

        //     e.preventDefault();
        //     form_groups = $(this).find(".form-group");
        //     var flag = true;

        //     var quantities = [];

        //     $(form_groups).each((key, value)=>{

        //         item = {
        //             "position": "",
        //             "position_type":"",
        //             "experience":"",
        //             "level":"",
        //             "education_level":""


        //         }

        //         var position_type = $(value).find("select").val()
        //           var level = $(value).find("select").val()
        //             var edu_level = $(value).find("select").val()
        //         var position = $(value).find("input[type='text']").val()

        //         var experience = $(value).find("input[type='number']").val()

        //        if(position_type == undefined || position_type == "")
        //         {
        //             $(value).find("select").addClass("is-invalid");
        //             $flag = false;
        //         }
        //         if(position == undefined || position == "")
        //         {
        //             $(value).find("input[type='text']").addClass("is-invalid");
        //             $flag = false;
        //             return;
        //         }
        //          if(experience == undefined || experience == "")
        //         {
        //             $(value).find("input[type='number']").addClass("is-invalid");
        //             $flag = false;
        //             return;
        //         }
        //         if(edu_level == undefined || edu_level == "")
        //         {
        //             $(value).find("select").removeClass("is-invalid");

        //             $flag = false;
        //             return;
        //         }
        //          if(level == undefined || level == "")
        //         {
        //             $(value).find("select").removeClass("is-invalid");

        //             $flag = false;
        //             return;
        //         }



        //         if(position&&position_type&&level&&edu_level&&experiencee )
        //         {
        //             $(value).find("input[type='text']").removeClass("is-invalid");
        //              $(value).find("input[type='number']").removeClass("is-invalid");
        //             $(value).find("select").removeClass("is-invalid");

        //             item.position = position
        //             item.level=level
        //             item.edu_level=edu_level

        //             item.experience=experience
        //             item.position_type=position_type
        //             quantities.push(item)

        //         }
        //     })



        //     if(quantities.length+1 == form_groups.length)
        //     {
        //         $.ajax({
        //             url: "/position",
        //             type: "post",
        //             data: {
        //                 "data": quantities
        //             },
        //             headers: {
        //                 "X-CSRF-TOKEN": "{{csrf_token()}}"
        //             },
        //             success: function(data){
        //                 if(data.success)
        //                 {
        //                     location.href="/position"
        //                 }
        //             }
        //         })
        //     }

        // })

    })
    </script>
@endsection
