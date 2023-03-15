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
                            <form action="" id="add_form" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን</label>
                                        <input class="form-control @error('UniversityHiringEra') is-invalid @enderror" id="UniversityHiringEra" placeholder="UniversityHiringEra" value="{{ $form->UniversityHiringEra ?? '' }}" type="text" name="UniversityHiringEra">
                                        @error('UniversityHiringEra')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="servicPeriodAtUniversity">በዩኒቨርስቲዉ አገልግሎት ዘመን</label>
                                        <input class="form-control
                                                @error('servicPeriodAtUniversity') is-invalid @enderror" id="servicPeriodAtUniversity" placeholder="servicPeriodAtUniversity" value="{{ $form->servicPeriodAtUniversity ?? '' }}" type="text" name="servicPeriodAtUniversity">
                                        @error('servicPeriodAtUniversity')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="servicPeriodAtAnotherPlace">በሌላ መስርያ ቤት አገልግሎት ዘመን</label>
                                        <input class="form-control
                                                @error('servicPeriodAtAnotherPlace') is-invalid @enderror" id="servicPeriodAtAnotherPlace" placeholder="በሌላ መስርያ ቤት አገልግሎት ዘመን" value="{{ $form->servicPeriodAtAnotherPlace ?? '' }}" type="text" name="servicPeriodAtAnotherPlace">
                                        @error('servicPeriodAtAnotherPlace')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="serviceBeforeDiplo"> አገልግሎት ከዲፕሎማ በፊት</label>
                                        <input class="form-control @error('serviceBeforeDiplo') is-invalid @enderror" id="serviceBeforeDiplo" placeholder="አገልግሎት ከዲፕሎማ በፊት" value="{{ $form->serviceBeforeDiplo ?? '' }}" type="text" name="serviceBeforeDiplo">
                                        @error('serviceBeforeDiplo')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="serviceAfterDiplo"> አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ</label>
                                        <input class="form-control mt-25
                                                @error('serviceAfterDiplo') is-invalid @enderror" id="serviceAfterDiplo" placeholder=" አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ" value="{{ $form->serviceAfterDiplo ?? '' }}" type="text" name="serviceAfterDiplo">
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
                                        <input class="form-control mt-25
                                                @error('resultOfrecentPerform') is-invalid @enderror" id="resultOfrecentPerform" placeholder=" የሁለት ተከታታይ የቅርብ ጊዜ የሥራ አፈጻፀም" value="{{ $form->resultOfrecentPerform ?? '' }}" type="text" name="resultOfrecentPerform">
                                        @error('resultOfrecentPerform')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት</label>
                                        <input class="form-control @error('DisciplineFlaw') is-invalid @enderror" id="DisciplineFlaw" placeholder=" የዲስፕሊን ጉድለት" value="{{ $form->DisciplineFlaw ?? '' }}" type="text" name="DisciplineFlaw">
                                        @error('DisciplineFlaw')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="MoreRoles"> ተጨማሪ የሥራ ድርሻ</label>
                                        <input class="form-control @error('MoreRoles') is-invalid @enderror" id="MoreRoles" placeholder="ተጨማሪ የሥራ ድርሻ" value="{{ $form->MoreRoles ?? '' }}" type="text" name="MoreRoles">
                                        @error('MoreRoles')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                </div>



                                <h5 class="text-secondary text-center mt-3 mb-4" id="dynamicAddRemove">የ ስራ ልምድ</h5>
                                <div class="row">
                                    <div class="col-sm">

                                        <div class=" formgr row">

                                            <div class="col-md-3">

                                                <label for="startingDate">የጀመሩበት ዐመት</label>
                                                <input type="date" name="startingDate" value="{{ $form->startingDate ?? '' }}" class="form-control  @error('startingDate') is-invalid @enderror" id="startingDate" placeholder=" ">
                                                @error('startingDate')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                            <div class="col-md-3">
                                                <label for="endingDate">ያበቃበት ቀን </label>
                                                <input type="date" name="endingDate" value="{{ $form->endingDate ?? '' }}" class="form-control  @error('endingDate') is-invalid @enderror" id="endingDate" placeholder=" endingDate">
                                                @error('endingDate')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label for="positionyouworked">የ ስራ መደብ </label>
                                                <input type="text" name="positionyouworked" value="{{ $form->positionyouworked ?? '' }}" class="form-control  @error('positionyouworked') is-invalid @enderror" id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                @error('positionyouworked')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div>
                                                <a href="javascript:void(0)" class="btn btn-primary  addRow mt-40 " style=" border-radius:50%">+</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-navigation mt-3">
                                    {{-- <button type="button" class="previous btn btn-primary  float-left">&lt;
                                            Previous</button> --}}

                                    <a href="{{ route('multiforms.create.step.two') }}" class="btn btn-danger float-left">&lt;Previous</a>

                                    <button type="submit" class="next btn btn-success float-right">Submit</a> </button>
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
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}



    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>



    <script>
       $(document).ready(function() {
        $(".addRow").click(function(e) {

            e.preventDefault();
            $(".form-navigation").before(`
             <div class="row" >
 <div class="col-sm">

                                            <div class=" form-group row">

                                                <div class="col-md-3">


                                                    <input type="date" name="startingDate" value="{{ $form->startingDate ?? '' }}"
                                                        class="form-control  @error('startingDate') is-invalid @enderror"
                                                        id="startingDate" placeholder=" ">
                                                    @error('startingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="col-md-3">

                                                    <input type="date" name="endingDate" value="{{ $form->endingDate ?? '' }}"
                                                        class="form-control  @error('endingDate') is-invalid @enderror"
                                                        id="endingDate" placeholder=" endingDate">
                                                    @error('endingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">

                                                    <input type="text" name="positionyouworked" value="{{ $form->positionyouworked ?? '' }}"
                                                        class="form-control  @error('positionyouworked') is-invalid @enderror"
                                                        id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                    @error('positionyouworked')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="btn btn-danger  removeRow  "
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
                        // $(value).find("select").addClass("is-invalid");
        $(value).find("input[type='text']").addClass("is-invalid");
                        $flag = false;
                    }

                     if(positionyouworked == undefined || positionyouworked == "")
                    {
                        $(value).find("input[type='text']").addClass("is-invalid");
                        $flag = false;
                        return;
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
                        // dd(quantities)

                    }

                })
                // console.log( quantities.length+1 )
                 if (quantities.length == form_groups.length) {

              $.ajax({
                        url: "/stepthree",
                        type: "post",
                        data: {
                            "data": quantities,
                            // "firstName":$("#firstName").val(),
                            // "middleName":$("#middleName").val(),
                            // "lastName":$("#lastName").val(),
                            // "email":$("#email").val(),
                            // "phone":$("#phone").val(),
                            // "sex":$("#sex").val(),
                            // "fee":$('#fee').val(),

                            "UniversityHiringEra":$('#UniversityHiringEra').val(),
                             "servicPeriodAtUniversity":$('#servicPeriodAtUniversity').val(),
                              "servicPeriodAtAnotherPlace":$("#servicPeriodAtAnotherPlace").val(),
                            "serviceBeforeDiplo":$("#serviceBeforeDiplo").val(),
                            "serviceAfterDiplo":$("#serviceAfterDiplo").val(),
                            "resultOfrecentPerform":$('#resultOfrecentPerform').val(),
                             "DisciplineFlaw":$("#DisciplineFlaw").val(),
                            "MoreRoles":$('#MoreRoles').val(),
                            // "admin_id":$("#admin_id").val(),


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
                                // location.href="/export_pdf"
                                 location.href="/"
                            }
                        }
                    })
                }

            })
        })



        // swal("success ", "Successfully Submitted", "success");
    </script>
    @endsection
