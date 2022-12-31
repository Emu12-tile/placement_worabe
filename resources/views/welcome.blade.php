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
        <div class="container">
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
                            <div class="col-sm">
                                <form action="{{ url('add-information') }}" method="POST" enctype="multipart/form-data">
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
