@extends('app')
@section('content')
    <div class="hk-pg-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper mt-100">

                        <h3 class="hk-sec-title text-white text-center color-wrap  "
                            style=" background-color:rgb(17,40,77); padding:10px;">አዲስ አበባ ሳይንስና ቴክኖልጂ ዩኒቨርሲቲ የሰራተኞች የ ስራ
                            ድልድል ማወዳደርያ ቅፅ</h3>
                        <p class="mb-25"> </p>

                        <div class="row">
                            <div class="col-sm">

                                <form action="{{ route('multiforms.create.step.three.post') }}" id='add_form'
                                    method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን በኢትዮጵያ
                                                አቆጣጠር(ወር/ቀን/ዓመት)</label>
                                            <input
                                                class="form-control
                                                    @error('UniversityHiringEra') is-invalid @enderror"
                                                id="UniversityHiringEra" placeholder="UniversityHiringEra"
                                                value="{{ old('UniversityHiringEra') }}" type="date"
                                                name="UniversityHiringEra">
                                            @error('UniversityHiringEra')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="servicPeriodAtUniversity">ጠቅላላ አገልግሎት ዘመን (በዓመት)</label>
                                            <input
                                                class="form-control
                                                    @error('servicPeriodAtUniversity') is-invalid @enderror"
                                                id="servicPeriodAtUniversity" placeholder="በዩኒቨርስቲዉ አገልግሎት ዘመን"
                                                value="{{ old('servicPeriodAtUniversity') }}" type="text"
                                                name="servicPeriodAtUniversity">
                                            @error('servicPeriodAtUniversity')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- <div class="col-md-6 form-group">
                                                <label for="servicPeriodAtAnotherPlace">በሌላ መስርያ ቤት አገልግሎት ዘመን(በዓመት,የስራ
                                                    መደብ)</label>
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
                                            </div> --}}
                                        <div class="col-md-6 form-group">
                                            <label for="serviceBeforeDiplo"> አገልግሎት ከዲፕሎማ በፊት(በዓመት)</label>
                                            <input
                                                class="form-control
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
                                            <label for="serviceAfterDiplo"> አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ(በዓመት)</label>
                                            <input
                                                class="form-control mt-25
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
                                            <label for="resultOfrecentPerform" class=""> የሁለት ተከታታይ የቅርብ ጊዜ
                                                የሥራ
                                                አፈጻፀም አማካይ
                                                ውጤት(ከ100 በቁጥር)</label>
                                            <input
                                                class="form-control mt-25
                                                    @error('resultOfrecentPerform') is-invalid @enderror"
                                                id="resultOfrecentPerform" placeholder=" የሁለት ተከታታይ የቅርብ ጊዜ የሥራ አፈጻፀም"
                                                value="{{ old('resultOfrecentPerform') }}" type="decimal"
                                                name="resultOfrecentPerform">
                                            @error('resultOfrecentPerform')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="employee_situation"> ሰራተኛው ያለበት ሁኔታ </label>
                                            <input
                                                class="form-control
                                                    @error('employee_situation') is-invalid @enderror"
                                                id="employee_situation" placeholder="ሰራተኛው  ያለበት ሁኔታ "
                                                value="{{ old('employee_situation') }}" type="text"
                                                name="employee_situation">
                                            @error('employee_situation')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት</label>
                                            <input class="form-control @error('DisciplineFlaw') is-invalid @enderror"
                                                id="DisciplineFlaw" placeholder=" የዲስፕሊን ጉድለት"
                                                value="{{ old('DisciplineFlaw') }}" type="text" name="DisciplineFlaw">
                                            @error('DisciplineFlaw')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="DisciplineFlawDate">ቀን (የዲስፕሊን ጉድለት ካለ )</label>
                                            <input class="form-control @error('DisciplineFlawDate') is-invalid @enderror"
                                                id="DisciplineFlawDate" placeholder=" የዲስፕሊን ጉድለት ቀን "
                                                value="{{ old('DisciplineFlawDate') }}" type="date"
                                                name="DisciplineFlawDate">
                                            @error('DisciplineFlawDate')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                             <h3 class="text-white text-center mt-3 mb-4   "
                                            style=" background-color:rgb(17,40,77); margin:center nav navmore">የስራ
                                            ልምድ(በኢትዮጵያ አቆጣጠር
                                            ብቻ)</h3>
                                        <div id="myform">
                                            <div class="row">
                                                <div class="col-sm">

                                                    <div class=" formgr row">

                                                        <div class="col-md-3">

                                                            <label for="startingDate">የጀመሩበት ዓመት(ወር/ቀን/ዓመት)</label>
                                                            <input type="date"
                                                                name="addMoreInputFields[0][startingDate]"
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
                                                                name="addMoreInputFields[0][endingDate]"
                                                                value="{{ old('endingDate') }}"
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
                                                            <input type="text"
                                                                name="addMoreInputFields[0][positionyouworked]"
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

                                    <div class="form-navigation mt-3">
                                        {{-- <button type="button" class="previous btn btn-primary  float-left">&lt;
                                            Previous</button> --}}

                                        <a href="{{ route('multiforms.create.step.two') }}"
                                            class="btn color-wrap text-white bg-red-dark-4 float-left"><i
                                                class="fa fa-angle-left"></i> የቀድሞ</a>

                                        <button type="submit"
                                            class="next btn color-wrap text-white bg-blue-dark-4 float-right">አስረክብ</a>
                                        </button>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>



        <script>
            var i = 0
            $(".addRow").click(function(e) {
                ++i;
                e.preventDefault();
                $(".form-navigation").before(`
             <div class="row" >
                                    <div class="col-sm">

                                            <div class=" formgr row">

                                                <div class="col-md-3">
                                       <label for="startingDate"></label>

                                                    <input type="date" name="addMoreInputFields[${i}][startingDate]" value="{{ $form->startingDate ?? '' }}{{ old('startingDate') }}"
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
                                                    <input type="date" name="addMoreInputFields[${i}][endingDate]" value="{{ $form->endingDate ?? '' }}{{ old('endingDate') }}}"
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

                                                    <input type="text" name="addMoreInputFields[${i}][positionyouworked]" value="{{ $form->positionyouworked ?? '' }}{{ old('positionyouworked') }}"
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
                // $this.parents('')
                let row_item = $(this).parents().eq(3);
                $(row_item).remove();
            });

            //             headers: {
            //                 "X-CSRF-TOKEN": "{{ csrf_token() }}"
            //             },
            //             // try modal

            //             success: function(data) {
            //                 if (data.success) {
            //                     swal("Thank You ", "Successfully Submitted", "success")
            //                     // alert('thank you')
            //                     //    $('#exampleModalCenter').modal('show ');
            //                     // location.href="/export_pdf"
            //                     location.href = "/"
            //                 }
            //             }
            //         })
            //     }

            // })


            // swal("success ", "Successfully Submitted", "success");
        </script>
    @endsection
