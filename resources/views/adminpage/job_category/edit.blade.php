@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('jobcategory.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title"> በአስተዳዳሪው የሚሞላ መረጃ</h5>
                    {{-- <p class="mb-25">Edit staff forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('jobcategory.update', $admin->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> የስራ ክፍል </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->job_category }}"
                                            name="job_category"class="form-control @error('job_category') is-invalid @enderror""
                                            id="inputname" placeholder=" የስራ ክፍል">
                                        @error('job_category')
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
