@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('admin.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">Edit በአስተዳዳሪው የሚሞላ መረጃ</h5>
                    {{-- <p class="mb-25">Edit staff forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('admin.update', $admin->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">የ ትምህርት ደረጃ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->education_level }}"
                                            name="education_level"class="form-control @error('education_level') is-invalid @enderror""
                                            id="inputname" placeholder="">
                                        @error('education_level')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">የትምህርት ዓይነት</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->education_type }}"
                                            name="education_type"class="form-control @error('education_type') is-invalid @enderror""
                                            id="inputname" placeholder="">
                                        @error('education_type')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">አሁን ያሉበት የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->position }}"
                                            name="position"class="form-control @error('position') is-invalid @enderror""
                                            id="inputname" placeholder="">
                                        @error('position')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">የ ስራ መደብ ዓይነት</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->position_type }}"
                                            name="position_type"class="form-control @error('position_type') is-invalid @enderror""
                                            id="inputname" placeholder="">
                                        @error('position_type')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">የመወዳደርያ የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->apply_for_position }}"
                                            name="apply_for_position"class="form-control @error('apply_for_position') is-invalid @enderror""
                                            id="inputname" placeholder="">
                                        @error('apply_for_position')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">የስራ ክፍል</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->job_category }}"
                                            name="job_category"class="form-control @error('job_category') is-invalid @enderror""
                                            id="inputname" placeholder="">
                                        @error('job_category')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ደረጃ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->level }}"
                                            name="level"class="form-control @error('level') is-invalid @enderror""
                                            id="inputname" placeholder="">
                                        @error('level')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0 pull-right">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
