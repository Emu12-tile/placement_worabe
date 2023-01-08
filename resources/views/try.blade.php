@extends('app')

@section('content')
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->

        <!-- Container -->
        <div class="container ">
            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                                data-feather="align-left"></i></span>Application form</span></h4>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title"></h5>
                        <p class="mb-25"></p>
                        {{-- <section class="hk-sec-wrapper">

                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label class="mb-5">ስም</label>
                                            <input type="text" class="form-control mt-15" placeholder="Input Box">


                                        </div>
                                        <div class="col-md-4">
                                            <label class="mb-5">የ አባት ስም</label>
                                            <input type="text" class="form-control mt-15"
                                                placeholder="Readonly Input Box">

                                        </div>
                                        <div class="col-md-4">
                                            <label class="mb-5">የ አያት ስም</label>
                                            <input type="text" class="form-control mt-15"
                                                placeholder="Disabled Input Box">

                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-5 mt-15">የ አያት ስም</label>
                                            <input class="form-control form-control-lg mt-15" type="text"
                                                placeholder=".form-control-lg">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="firstName">First name</label>
                                            <input class="form-control" id="firstName" placeholder="" value=""
                                                type="text">
                                        </div>
                                    </div>
                                </div>
                        </section> --}}
                        <div class="row">
                            <div class="col-sm bg-light-20 ">
                                <form action="{{ url('add-information') }}" method="POST" enctype="multipart/form-data" id="add_form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="firstName">ስም</label>
                                            <input class="form-control" @error('firstName') is-invalid @enderror"
                                                id="firstName" placeholder="" value="{{ old('firstName') }}" type="text"
                                                name="firstName">
                                            @error('firstName')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="middleName">የ አባት ስም</label>
                                            <input class="form-control" @error('middleName') is-invalid @enderror"
                                                id="middleName" placeholder="" value="{{ old('middleName') }}"
                                                type="text" name="middleName">
                                            @error('middleName')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="lastName">የ አያት ስም</label>
                                            <input class="form-control" @error('lastName') is-invalid @enderror"
                                                id="lastName" placeholder="" value="{{ old('lastName') }}" type="text"
                                                name="lastName">
                                            @error('lastName')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">ኢሜይል</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                                </div>
                                                <input name="email" type="email" class="form-control"
                                                    @error('email') is-invalid @enderror" id="exampleInputEmail_1"
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
                                                <input type="tel"name="phone"
                                                    class="form-control"@error('phone') is-invalid @enderror"
                                                    placeholder="Enter phone" value="{{ old('phone') }}">
                                                @error('phone')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="education level">የ ትምህርት ደረጃ</label>
                                            {{-- <select class="form-control custom-select d-block w-100"
                                                    id="education level">
                                                    @foreach ($educationLevel as $level)
                                                        @if ($req->educationLevel == $level->status)
                                                            <option value="{{ $name->status }}"selected>
                                                                {{ $name->status }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $name->status }}">{{ $name->status }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select> --}}
                                            <select class="form-control custom-select d-block w-100 " name="admin_id">
                                                @foreach ($level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->education_level }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="education level">የ ትምህርት አይነት</label>
                                            <select class="form-control custom-select d-block w-100 "
                                                name="educationtype_id">
                                                @foreach ($type as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('educationtype_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->education_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        {{-- <div class="form-group">
                                    <label class="control-label mb-10">ጾታ</label>
                                    <div>
                                        <div class="custom-control custom-radio mb-5">
                                            <input id="radio_1" name="radio1" class="custom-control-input"
                                                checked="" type="radio">
                                            <label class="custom-control-label" for="radio_1">ወንድ</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="radio_2" name="radio1" class="custom-control-input"
                                                checked="" type="radio">
                                            <label class="custom-control-label" for="radio_1">ሴት</label>
                                        </div>
                                    </div>
                                </div> --}}


                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label mb-10" for="exampleInputEmail_1">ፋይል</label>
                                        <div class="input-group">

                                            <input name="file" type="file" class="form-control dropify"
                                                @error('email') is-invalid @enderror" id="exampleInputEmail_1"
                                                placeholder="Enter email" value="{{ old('file') }}">
                                            @error('file')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- </section>

                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Sizing</h5>
                        <p class="mb-25">Set heights using classes like <code>.form-control-lg,
                                custom-select-lg</code> and <code>.form-control-sm, custom-select-sm</code>.
                        </p>
                        <div class="row">
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control form-control-lg mt-15" type="text"
                                            placeholder=".form-control-lg">
                                        <input class="form-control mt-15" type="text" placeholder="Default input">
                                        <input class="form-control form-control-sm mt-15" type="text"
                                            placeholder=".form-control-sm">
                                    </div>
                                    <div class="col-md-6">



                                    </div>
                                </div>
                            </div>
                        </div> --}}
                         <div id="show-item">
                                <div class="form-group row" data-group="1">



                                    {{-- <div class="form-group row"> --}}
                                    <label for="inputEmail3" class="col-sm-1 col-form-label">Number</label>
                                    <div class="col-md-4">

                                        <input type="number" name="number" class="form-control @error('number') is-invalid @enderror" id="inputname" placeholder=" number">
                                        @error('number')
                                        <span class=" error invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-primary  addRow" style=" border-radius:50%">+</a>
                                    </div>
                                </div>

                              </div>
                         </div>



                                    <div class="form-group row mb-0 pull-right">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">አስረክብ</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                    </section>




                </div>
            </div>
            <!-- /Row -->
        </div>
    </div>
@endsection
@section('javascript')
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
<script>

    $(document).ready(function() {
        $(".addRow").click(function(e) {
            e.preventDefault();
            $("#add_form .pull-right").before(` <div class="row">
                            <div class="col-sm">

                                    <div class="form-group row">



                                        {{-- <div class="form-group row"> --}}
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Number</label>
                                        <div class="col-md-4">

                                            <input type="number"
                                                name="number"class="form-control @error('number') is-invalid @enderror"
                                                id="inputname" placeholder=" number">
                                            @error('number')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-danger removeRow" style=" border-radius:50%" >-</a>
                                        </div>
                                    </div>


                    `);
        });
        $(document).on('click', '.removeRow', function(e) {
            e.preventDefault();
            let row_item = $(this).parents().eq(3);
            $(row_item).remove();
        });

    //     $("#add_form").on("submit", function(e) {
    //         e.preventDefault();
    //         form_groups = $(this).find(".form-group");
    //         var flag = true;

    //         var quantities = [];

    //         $(form_groups).each((key, value)=>{

    //             item = {
    //                 "equipment": "",
    //                 "quantity": ""
    //             }

    //             var equipment = $(value).find("select").val()
    //             var quantity = $(value).find("input[type='number']").val()

    //             if(equipment == undefined || equipment == "")
    //             {
    //                 $(value).find("select").addClass("is-invalid");
    //                 $flag = false;
    //             }

    //             if(quantity == undefined || quantity == "")
    //             {
    //                 $(value).find("input[type='number']").addClass("is-invalid");
    //                 $flag = false;
    //                 return;
    //             }

    //             if(equipment && quantity)
    //             {
    //                 $(value).find("input[type='number']").removeClass("is-invalid");
    //                 $(value).find("select").removeClass("is-invalid");

    //                 item.equipment = equipment
    //                 item.quantity = quantity

    //                 quantities.push(item)
    //             }
    //         })

    //         if(quantities.length+1 == form_groups.length)
    //         {
    //             $.ajax({
    //                 url: "/admin/experimentEquipment",
    //                 type: "post",
    //                 data: {
    //                     "data": quantities
    //                 },
    //                 headers: {
    //                     "X-CSRF-TOKEN": "{{csrf_token()}}"
    //                 },
    //                 success: function(data){
    //                     if(data.success)
    //                     {
    //                         location.href="/admin/experimentEquipment"
    //                     }
    //                 }
    //             })
    //         }

    //     })
    // })


</script>
</script>
@endsection
