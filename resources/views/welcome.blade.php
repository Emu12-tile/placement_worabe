@extends('app')

@section('content')

    <div class="hk-pg-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <section class="hk-sec-wrapper mt-100">

                        <h5 class="hk-sec-title"></h5>
                        <p class="mb-25"> </p>

                        <div class="row">
                            <div class="col-sm">
                                <form action="" method="POST" id="add_form">
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

                                        <div class="col-md-6 form-group">
                                            <label for="education level">የ ትምህርት ክፍል</label>


                                            <select class="form-control custom-select d-block w-100 "  id="admin_id" name="admin_id">
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
                                         <div class="col-md-6 form-group">
                                            <label for="education level"> የ አመልካች መደብ </label>


                                            <select class="form-control custom-select d-block w-100 " name="admin_id">
                                                @foreach ($level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->position }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="education level"> የ መወዳደርያ መደብ </label>


                                            <select class="form-control custom-select d-block w-100 " name="admin_id">
                                                @foreach ($level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('admin_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->position }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                        <label class="control-label mb-10" for="exampleInputEmail_1">ፋይል</label>
                                        <div class="input-group">

                                            <input name="file" id="file" type="file" class="form-control dropify"
                                                @error('email') is-invalid @enderror" id="exampleInputEmail_1"
                                                placeholder="Enter email" value="{{ old('file') }}">
                                            @error('file')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                        {{-- <div class="col-sm form-group">
                                            <label for="file">የ ትምህርት ደረጃ</label>
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                        class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                        class="fileinput-filename"></span>
                                                    </div>
                                                <span class="input-group-append">
                                                    <span class=" btn btn-primary btn-file"><span
                                                            class="fileinput-new">Select file</span><span
                                                            class="fileinput-exists">Change</span>
                                                            <input type="hidden" value='name'>
                                                        <input type="file" name="file">
                                                    </span>
                                                    <a href="#" class="btn btn-secondary fileinput-exists"
                                                        data-dismiss="fileinput">Remove</a>
                                                </span>
                                            </div>

                                        </div> --}}


                                    </div>
                                    <h5 class="hk-sec-title ">የ ስራ ልምድ</h5>
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
                                                    <a href="javascript:void(0)" class="btn btn-primary  addRow mt-30 "
                                                        style=" border-radius:50%">+</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row mb-0 pull-right">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary" id="add_btn" >Submit</button>
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



                                    <!-- Modal -->

@endsection








@section('javascript')
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
<script>

    $(document).ready(function() {
        $(".addRow").click(function(e) {
            e.preventDefault();
            $("#add_form .pull-right").before(`
                            <div class="row">
                                        <div class="col-sm">
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
    //  console.log('hi',quantities.length+1 ,form_groups.length);
            // if(quantities.length+1 == form_groups.length)
            // {

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
                        "file":$("#file").val(),
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
                            
                            location.href="/"
                        }
                    }
                })
            // }

        })
    })


</script>


@endsection
