@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('position.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">በአስተዳዳሪው የሚሞላ መረጃ</h5>
                    {{-- <p class="mb-25">Create Schedule forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('position.store') }}" id="add_form" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <div class="col-md-4">

                                                <label for="position"> የስራ መደብ</label>
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
                                                <label for="job_category_id">የስራ ክፍል</label>
                                                <select class="form-control custom-select d-block w-100 "
                                                    name="addMoreInputFields[0][job_category_id]">
                                                    @foreach ($job_category as $col)
                                                        <option value="{{ $col->id }}"
                                                            {{ old('job_category_id') == $col->id ? 'selected' : '' }}>
                                                            {{ $col->job_category }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            {{-- <div class="col-md-3">

                                                <label for="education_level_id">የትምህርት ደረጃ </label>

                                                <select class="form-control custom-select d-block w-100 "
                                                    name="addMoreInputFields[0][education_level_id]">
                                                    @foreach ($edu_level as $col)
                                                        <option value="{{ $col->id }}"
                                                            {{ old('education_level_id') == $col->id ? 'selected' : '' }}>
                                                            {{ $col->education_level }}</option>
                                                    @endforeach
                                                </select>

                                            </div> --}}
                                            <div class="col-md-3">

                                                <label for="edu_level">የትምህርት ደረጃ </label>
                                                <select class="form-control custom-select d-block w-100 "
                                                    name="addMoreInputFields[0][edu_level]">
                                                    <option selected disabled>-- የት/ት ደረጃ ይምረጡ --</option>
                                                    @foreach ($educ as $name)
                                                        <option value="{{ $name->education_level }}">
                                                            {{ $name->education_level }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-md-4">

                                                <label for="experience"> የስራ ልምድ</label>
                                                <input type="number" name="addMoreInputFields[0][experience]"
                                                    value="{{ old('experience') }}"
                                                    class="form-control  @error('experience') is-invalid @enderror"
                                                    id="experience" placeholder="  የስራ ልምድ(በዓመት)">
                                                @error('experience')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            {{-- <div class="col-md-4">

                                                <label for="level_id">ደረጃ</label>
                                                <select class="form-control custom-select d-block w-100 "
                                                    name="addMoreInputFields[0][level]">
                                                    @foreach ($level as $col)
                                                        <option value="{{ $col->id }}"
                                                            {{ old('level_id') == $col->id ? 'selected' : '' }}>
                                                            {{ $col->level }}</option>
                                                    @endforeach
                                                </select>

                                            </div> --}}
                                            <div class="col-md-4">

                                                <label for="level"> ደረጃ </label>
                                                <select class="form-control custom-select d-block w-100 "
                                                    name="addMoreInputFields[0][level]">
                                                    <option selected disabled>--ደረጃ ይምረጡ --</option>
                                                    @foreach ($lev as $name)
                                                        <option value="{{ $name->level }}">
                                                            {{ $name->level }}</option>
                                                    @endforeach
                                                </select>

                                            </div>

                                            <div class="col-md-3">

                                                <label for="position_type_id">የስራ መደብ ዓይነት</label>
                                                <select class="form-control custom-select d-block w-100 "
                                                    name="addMoreInputFields[0][position_type_id]">
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
                                        <button type="submit" class="btn btn-primary" id="add_btn">Create</button>
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
        var i = 0;
        $(document).ready(function() {

            $(".addRow").click(function(e) {
                ++i;
                e.preventDefault();
                $("#add_form .pull-right").before(`

                                <div class="row">
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <div class="col-md-4">

                                              <label for="position_id"></label>
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

                                                <label for="job_category_id"></label>
                                                <select class="form-control custom-select d-block w-100 "
                                                    name="addMoreInputFields[${i}][job_category_id]">
                                                    @foreach ($job_category as $col)
                                                        <option value="{{ $col->id }}"
                                                            {{ old('job_category_id') == $col->id ? 'selected' : '' }}>
                                                            {{ $col->job_category }}</option>
                                                    @endforeach
                                                </select>

                                            </div>


                                                 <div class="col-md-3">

                                                <label for="edu_level"> </label>
                                                <select class="form-control custom-select d-block w-100 "
                                                    name="addMoreInputFields[${i}][edu_level]">
                                                    <option selected disabled>--  የት/ት ደረጃ ይምረጡ --</option>
                                                    @foreach ($educ as $name)
                                                        <option value="{{ $name->education_level }}">
                                                            {{ $name->education_level }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                                <div class="col-md-4">
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
                                            <div class="col-md-4">

                                                <label for="level">  </label>
                                                <select class="form-control custom-select d-block w-100 "
                                                    name="addMoreInputFields[${i}][level]">
                                                    <option selected disabled>-- ደረጃ ይምረጡ --</option>
                                                    @foreach ($lev as $name)
                                                        <option value="{{ $name->level }}">
                                                            {{ $name->level }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-md-3">

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

        })
    </script>
@endsection
