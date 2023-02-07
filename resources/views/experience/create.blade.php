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
                                <form action="" id='add_form' method="POST">
                                    @csrf
                                    <h5 class="text-secondary text-center mt-3 mb-4" id="dynamicAddRemove">የስራ ልምድ</h5>
                                    <div class="row">
                                        <div class="col-sm">

                                            <div class=" form-group row">
 \
                                                <div class="col-md-3">

                                                    <label for="startingDate">የጀመሩበት ዐመት</label>
                                                    <input type="date" name="startingDate"
                                                        value="{{ $form->startingDate ?? '' }}"
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
                                                        value="{{ $form->endingDate ?? '' }}"
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
                                                    <input type="text" name="positionyouworked"
                                                        value="{{ $form->positionyouworked ?? '' }}"
                                                        class="form-control  @error('positionyouworked') is-invalid @enderror"
                                                        id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                    @error('positionyouworked')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="btn btn-primary  addRow mt-40 "
                                                        style=" border-radius:50%">+</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="form-navigation mt-3">
                                        {{-- <button type="button" class="previous btn btn-primary  float-left">&lt;
                                            Previous</button> --}}



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


                                                    <input type="DATE" name="startingDate" value="{{ $form->startingDate ?? '' }}"
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
                form_groups = $(this).find(".form-group");
                var flag = true;

                var quantities = [];

                $(form_groups).each((key, value)=>{

                    item = {
                        "positionyouworked": "",
                        "startingDate": "",
                         "endingDate": "",
                    }

                    var positionyouworked = $(value).find("input[type='text']").val()
                    var startingDate = $(value).find("input[type='DATE']").val();
                     var endingDate = $(value).find("input[type='date']").val();


                    //  if(positionyouworked == undefined || positionyouworked == "")
                    // {
                    //     $(value).find("input[type='text']").addClass("is-invalid");
                    //     $flag = false;
                    //     return;
                    // }
                    // if(startingDate == undefined || startingDate == "")
                    // {
                    //     $(value).find("input[type='DATE']").addClass("is-invalid");
                    //     $flag = false;
                    //     return;
                    // }
                    //  if(endingDate == undefined || endingDate == "")
                    // {
                    //     $(value).find("input[type='date']").addClass("is-invalid");

                    //     $flag = false;
                    //     return;
                    // }

                    // if(positionyouworked && startingDate && endingDate )
                    // {
                    //     $(value).find("input[type='DATE']").removeClass("is-invalid");
                    //      $(value).find("input[type='date']").removeClass("is-invalid");
                    //     $(value).find("input[type='text']").removeClass("is-invalid");

                        item.positionyouworked = positionyouworked
                        item.startingDate = startingDate
                        item.endingDate=endingDate
                        quantities.push(item)
                        // dd(quantities)
                    // }

                })
                console.log(form_groups.length)
                  if(quantities.length == form_groups.length){
            $.ajax({
                        url: "/experience",
                        type: "post",
                        data: {
                            "data": quantities,



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

