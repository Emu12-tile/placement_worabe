@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('educationtype.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">በአስተዳዳሪው የሚሞላ መረጃ</h5>
                    {{-- <p class="mb-25">Create Schedule forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="" id="add_form" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <div class="col-md-6">

                                                <label for="education_type"> የትምህርት ዓይነት</label>
                                                <input type="text" name="education_type"
                                                    value="{{ old('education_type') }}"
                                                    class="form-control  @error('level') is-invalid @enderror"
                                                    id="education_type" placeholder=" የትምህርት ዓይነት">
                                                @error('education_type')
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
 $(document).ready(function() {

        $(".addRow").click(function(e) {
                 ++i;
            e.preventDefault();
            $("#add_form .pull-right").before(`

                                <div class="row">
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <div class="col-md-6">


                                                <input type="text" name="education_type"
                                                    value="{{ old('education_type') }}"
                                                    class="form-control  @error('level') is-invalid @enderror"
                                                    id="education_type" placeholder="የትምህርት ዓይነት">
                                                @error('education_type')
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
        $("#add_form").on("submit", function(e) {

            e.preventDefault();
            form_groups = $(this).find(".form-group");
            var flag = true;

            var quantities = [];

            $(form_groups).each((key, value)=>{

                item = {
                    "education_type": "",

                }


                var education_type = $(value).find("input[type='text']").val()

                if(education_type == undefined || education_type == "")
                {
                    $(value).find("input[type='text']").addClass("is-invalid");
                    $flag = false;
                    return;
                }


                if(education_type )
                {
                    $(value).find("input[type='text']").removeClass("is-invalid");


                    item.education_type = education_type

                    quantities.push(item)
                }
            })


            if(quantities.length+1 == form_groups.length)
            {
                $.ajax({
                    url: "/educationtype",
                    type: "post",
                    data: {
                        "data": quantities
                    },
                    headers: {
                        "X-CSRF-TOKEN": "{{csrf_token()}}"
                    },
                    success: function(data){
                        if(data.success)
                        {
                            location.href="/educationtype"
                        }
                    }
                })
            }

        })

    })
    </script>
@endsection
