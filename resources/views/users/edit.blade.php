@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">በአስተዳዳሪው የሚሞላ መረጃ</h5>
                    {{-- <p class="mb-25">Create Schedule forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ url('add-user') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <label for="firstName"> ስም</label>
                                            <input type="text" value="{{ $user->name }}"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                placeholder="name" name="name">
                                            @error('firstName')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="col-sm">
                                        <div class=" form-group row">
                                            <label for="email"> email</label>
                                            <input type="text" value="{{ $user->email }}"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                placeholder="email" name="email">
                                            @error('email')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="col-sm">
                                        <div class="form-group row">
                                            <label for="position_type_id" >የስራ መደብ
                                                ዓይነት</label>
                                            {{-- <div class="col-sm-10"> --}}
                                                <select class="form-control custom-select  " name="position_type_id">

                                                    @foreach ($role as $col)
                                                        <option value="{{ $col->id }}"
                                                            {{ $col->id == $user->role_id ? 'selected' : '' }}>
                                                            {{ $col->name }}</option>
                                                    @endforeach
                                                </select>
                                            {{-- </div> --}}
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
