@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('educationlevel.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">በአስተዳዳሪው የሚሞላ መረጃ</h5>
                    {{-- <p class="mb-25">Create Schedule forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('educationlevel.store') }}" id="add_form" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <div class="col-md-6">

                                                <label for="education_level">የትምህርት ደረጃ</label>
                                                <input type="text" name="addMoreInputFields[0][education_level]"
                                                    value="{{ old('education_level') }}"
                                                    class="form-control  @error('education_level') is-invalid @enderror"
                                                    id="education_level" placeholder=" የትምህርት ደረጃ">
                                                @error('education_level')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div>
                                                <a href="javascript:void(0)" class="btn bg-blue-dark-4 text-white  addRow mt-40 "
                                                    style=" border-radius:50%">+</a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="form-group row mb-0 pull-right">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn bg-blue-dark-4 text-white" id="add_btn" >Create</button>
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


        $(".addRow").click(function(e) {
                 ++i;
            e.preventDefault();
            $("#add_form .pull-right").before(`

                                <div class="row">
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <div class="col-md-6">


                                                <input type="text" name="addMoreInputFields[${i}][education_level]"
                                                    value="{{ old('education_level') }}"
                                                    class="form-control  @error('education_level') is-invalid @enderror"
                                                    id="education_level" placeholder=" የትምህርት ደረጃ">
                                                @error('education_level')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div>
                                                <a href="javascript:void(0)" class="btn bg-red-dark-4 text-white removeRow mt-15" style=" border-radius:50%" >-</a>
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

            e.preventDefault();
            form_groups = $(this).find(".form-group");
            var flag = true;

            var quantities = [];

            $(form_groups).each((key, value)=>{

                item = {

                    "education_level": "",

                }

                var education_level = $(value).find("input[type='string']").val();



                if(education_level == undefined || education_level == "")
                {
                    $(value).find("input[type='string']").addClass("is-invalid");
                    $flag = false;
                    return;
                }


                if(education_level)
                {
                    $(value).find("input[type='string']").removeClass("is-invalid");


                    item.education_level = education_level

                    quantities.push(item)
                }

            })
    //  console.log('hi',quantities.length+1 ,form_groups.length);
            // if(quantities.length+1 == form_groups.length)
            // {

            //     $.ajax({
            //         url: "/hr",
            //         type: "post",
            //         data: {
            //             "data": quantities,


            //             // "educationtype_id":$("educationtype_id").val(),

            //         },
            //         headers: {
            //             "X-CSRF-TOKEN": "{{csrf_token()}}"
            //         },
            //         // try modal

            //         success: function(data){
            //             if(data.success)
            //             {
            //                  swal("Thank You ","Successfully Submitted","success")
            //                 // alert('thank you')
            //             //    $('#exampleModalCenter').modal('show ');
            //                 location.href="/"
            //             }
            //         }
            //     })
            // // }

        // })



    </script>
@endsection
