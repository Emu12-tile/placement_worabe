@extends('app')
@section('content')
    <div class="hk-pg-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <section class="hk-sec-wrapper mt-100">

                        <h3 class="hk-sec-title text-white text-center color-wrap  "
                            style=" background-color:rgb(17,40,77); padding:10px;">አዲስ አበባ ሳይንስና ቴክኖሎጂ ዩኒቨርሲቲ የሰራተኞች የ ስራ
                            ድልድል ማወዳደርያ ቅፅ</h3>
                        <p class="mb-25"> </p>

                        <div class="row">
                            <div class="col-sm">
                                <form action="{{ route('multiforms.create.step.two.post') }}" method="POST">
                                    @csrf

                                    <div class="row">




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
                                                value="{{ $form->level_id ?? '' }} {{ old('level_id') }}" name="level_id">
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
                                                placeholder="ደምወዝ" value="{{ $form->fee ?? '' }}{{ old('fee') }}"
                                                type="number" name="fee">
                                            @error('fee')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row dyna">

                                        <div class="col-md-6 form-group">
                                            <label for="education level">የትምህርት ዝግጅት</label>


                                            <select class="form-control custom-select d-block w-100 " id="education_type_id"
                                                value="{{ $form->education_type_id ?? '' }}{{ old('education_type_id') }}"
                                                name="addMoreFields[0][education_type_id]">
                                                @foreach ($edutype as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ $col->id == $form->education_type_id ? 'selected' : '' }}>
                                                        {{ $col->education_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-5 form-group">
                                            <label for="edu_level_id">የትምህርት ደረጃ</label>
                                            <select
                                                class="form-control custom-select d-block w-100 masters "value="{{ $form->edu_level_id ?? '' }}"
                                                name="addMoreFields[0][edu_level_id]">
                                                <option value="">Chose </option>
                                                @foreach ($edu_level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ $col->id == $form->edu_level_id ? 'selected' : '' }}>
                                                        {{ $col->education_level }}</option>
                                                @endforeach
                                            </select>
                                        </div>






                                        {{-- <div class=" col-md-4 form-group firstDegree" style="display: none"><label
                                            for="education level"> የመጀመርያ ዲግሪ የትምህርት ዝግጅት</label>
                                        <input type="text"
                                            value="{{ $form->firstdergee ?? '' }}{{ old('firstdergee') }}"
                                            class="form-control @error('positionofnow') is-invalid @enderror"
                                            id="firstdergee" placeholder="የመጀመርያ ዲግሪ የትምህርት ዝግጅት" name="firstdergee">
                                        @error('firstdergee')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}





                                        <div>
                                            <a href="javascript:void(0)"
                                                class="btn color-wrap text-white bg-blue-dark-4  addRow mt-40 "
                                                style=" border-radius:50%">+</a>
                                        </div>
                                    </div>



                                    <h3 class="text-white text-center mt-3 mb-4  navigation "
                                        style=" background-color:rgb(17,40,77); margin:center"> የሚወዳደሩበት የስራ ክፍልና የስራ
                                        መደብ
                                    </h3>
                                    <button class="text-white text-left mt-3 mb-4 mr-150"
                                        style=" background-color:rgb(17,40,77)">
                                        ምርጫ 1</button>
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
                                    <button class="text-white text-left mt-3 mb-4" style=" background-color:rgb(17,40,77)">
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

                                    <div class="form-navigation mt-3">

                                        <a href="{{ route('multiforms.create-step-one') }}"
                                            class="btn color-wrap text-white bg-red-dark-4 float-left"><i
                                                class="fa fa-angle-left"></i> የቀድሞ</a>

                                        <button type="submit"
                                            class="next btn text-white color-wrap bg-blue-dark-3 float-right">ቀጣይ <i
                                                class="fa fa-angle-right"></i></button>
                                        {{-- <button type="submit" class="btn btn-success  float-right">Submit</button> --}}
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
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                var i = 0
                $(".addRow").click(function(e) {
                    ++i;
                    e.preventDefault();
                    $(".navigation").before(`
<div class="row dyna">
              <div class="col-md-6 form-group">
                                            <label for="education level"></label>


                                            <select class="form-control custom-select d-block w-100 " id="education_type_id"
                                                value="{{ $form->education_type_id ?? '' }}{{ old('education_type_id') }}"
                                                name="addMoreFields[${i}][education_type_id]">
                                                @foreach ($edutype as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ $col->id == $form->education_type_id ? 'selected' : '' }}>
                                                        {{ $col->education_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-5 form-group">
                                            <label for="edu_level_id"></label>
                                            <select
                                                class="form-control custom-select d-block w-100 masters "value="{{ $form->edu_level_id ?? '' }}"
                                                name="addMoreFields[${i}][edu_level_id]">
                                                <option value="">Chose </option>
                                                @foreach ($edu_level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ $col->id == $form->edu_level_id ? 'selected' : '' }}>
                                                        {{ $col->education_level }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                                    <a href="javascript:void(0)" class="btn btn-danger  removeRow mt-40  "
                                                        style=" border-radius:50%">-</a>
                                                </div>
                                            </div>

                                        </div>
                                </div>


</div>



                    `);
                });

                $(document).on('click', '.removeRow', function(e) {

                    e.preventDefault();
                    let row_item = $(this).parents('.dyna');
                    $(row_item).remove();

                });

                $(document).on('change', '.masters', function() {

                    var selection = $('.masters Option:Selected').val();
                    // const text = $('.masters').find(":selected").text('ሁለተኛ ዲግሪ')

                    if (selection == 6) {
                        // console.log(selection == "ሁለተኛ ዲግሪ");
                        $('.firstDegree').show();
                    } else {
                        $('.firstDegree').hide();
                    }
                });

                $(document).on('change', '.dynamic', function() {

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
