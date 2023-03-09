@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('admin.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">በአስተዳዳሪው የሚሞላ መረጃ</h5>
                    {{-- <p class="mb-25">Create Schedule forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('admin.store') }}" method="POST">
                                @csrf

                               
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">የ ትምህርት ደረጃ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ old('education_level') }}" name="education_level"
                                            class="form-control " id="numberPerWeek" placeholder="የ ትምህርት ደረጃ ">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">የትምህርት ዓይነት</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ old('education_type') }}" name="education_type"
                                            class="form-control " id="education_type" placeholder="የ ትምህርት ዓይነት">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">አሁን ያሉበት የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ old('position') }}" name="position"
                                            class="form-control " id="position" placeholder="አሁን ያሉበት የስራ መደብ ">
                                        {{-- @error('position')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">የስራ መደብ ዓይነት</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ old('position_type') }}" name="position_type"
                                            class="form-control " id="position_type" placeholder="የ ስራ መደብ ዓይነት ">
                                        {{-- @error('position_type')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">የመወዳደርያ የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ old('apply_for_position') }}"
                                            name="apply_for_position" class="form-control " id="apply_for_position"
                                            placeholder="የ መወዳደርያ የስራ መደብ ">
                                        {{-- @error('apply_for_position')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">የስራ ክፍል</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ old('job_category') }}" name="job_category"
                                            class="form-control " id="job_category" placeholder="የስራ ክፍል ">
                                        {{-- @error('job_category')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label"> ደረጃ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ old('level') }}" name="level"
                                            class="form-control" id="level" placeholder="ደረጃ ">
                                        {{-- @error('level')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                </div>





                                <div class="form-group row mb-0 pull-right">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">CREATE</button>
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
