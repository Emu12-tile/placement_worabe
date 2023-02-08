@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('choice2.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">Edit በአስተዳዳሪው የሚሞላ መረጃ</h5>
                    {{-- <p class="mb-25">Edit staff forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('choice2.update', $admin->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->position }}"
                                            name="position"class="form-control @error('position') is-invalid @enderror"
                                            id="inputname" placeholder=" የስራ መደብ">
                                        @error('position')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="position_type_id" class="col-sm-2 col-form-label">የስራ መደብ ዓይነት</label>
                                    <div class="col-sm-10">
                                        <select class="form-control custom-select  mt-15" name="position_type_id">

                                            @foreach ($level as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ $col->id == $admin->position_type_id ? 'selected' : '' }}>
                                                    {{ $col->position_type }}</option>
                                            @endforeach
                                        </select>
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
