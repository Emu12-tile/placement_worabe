@extends('app')
@section('content')
    <div class="hk-pg-wrapper   ">
        {{-- bg-light-60    --}}
        <div class="container ">
            <div class="row">
                <div class="col-xl-12 ">

                    <section class="hk-sec-wrapper mt-100">

                        <h3 class="hk-sec-title text-white text-center color-wrap  "
                            style=" background-color:rgb(17,40,77); padding:10px;">አዲስ አበባ ሳይንስና ቴክኖሎጂ ዩኒቨርሲቲ የሰራተኞች የ ስራ
                            ድልድል ማወዳደርያ ቅፅ</h3>
                        <p class="mb-25"> </p>

                        <div class="row">
                            <div class="col-sm" id='formContainer'>
                                <form action="{{ route('multiforms.create.step.one.post') }}" method="POST">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="firstName">የመጀመሪያ ስም *</label>
                                            <input class="form-control @error('firstName') is-invalid @enderror"
                                                type="text" placeholder="የመጀመሪያ ስም"
                                                value="{{ $form->firstName ?? '' }}{{ old('firstName') }}" id="firstName"
                                                name="firstName">
                                            @error('firstName')
                                                <span class=" error invalid-feedback">
                                                    <strong>የመጀመሪያ ስም ያስፈልጋል </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="middleName">የ አባት ስም *</label>
                                            <input class="form-control @error('middleName') is-invalid @enderror"
                                                id="middleName" placeholder="የ አባት ስም"
                                                value="{{ $form->middleName ?? '' }}{{ old('middleName') }}" type="text"
                                                name="middleName">
                                            @error('middleName')
                                                <span class=" error invalid-feedback">
                                                    <strong>የ አባት ስም ያስፈልጋል</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="lastName">የ አያት ስም *</label>
                                            <input class="form-control @error('lastName') is-invalid @enderror"
                                                id="lastName" placeholder="የ አያት ስም"
                                                value="{{ $form->lastName ?? '' }}{{ old('lastName') }}" type="text"
                                                name="lastName">
                                            @error('lastName')
                                                <span class=" error invalid-feedback">
                                                    <strong>የ አያት ስም ያስፈልጋል</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="sex">ጾታ *</label>
                                            <select
                                                class="form-control custom-select "value="{{ $form->sex ?? '' }}{{ old('sex') }}"
                                                id="sex" name="sex">

                                                <option value="ሴት " {{ old('sex') == 'ሴት' ? 'selected' : '' }}>ሴት
                                                </option>
                                                <option value="ወንድ"{{ old('sex') == 'ወንድ' ? 'selected' : '' }}>ወንድ
                                                </option>

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="control-label mb-10" for="email">ኢሜይል (የአ.አ.ሳ.ቴን ኢሜይል ብቻ ይጠቀሙ
                                                ) *</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                                </div>
                                                <input name="email" type="email"
                                                    class="form-control
                                                    @error('email') is-invalid @enderror"
                                                    id="email" placeholder="@aastu.edu.et"
                                                    value="{{ $form->email ?? '' }}{{ old('email') }}">
                                                @error('email')
                                                    <span class=" error invalid-feedback">
                                                        <strong>የአ.አ.ሳ.ቴን ኢሜይል ይጠቀሙ </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="control-label mb-10">ስልክ
                                                ቁጥር(09...) *</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                </div>
                                                <input type="tel" name="phone" id="phone"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    placeholder="09..."
                                                    value="{{ $form->phone ?? '' }}{{ old('phone') }}">
                                                @error('phone')
                                                    <span class=" error invalid-feedback">
                                                        <strong>ትክክለኛዉን ስልክ
                                                            ቁጥር ያስገቡ</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                        </div>
                                    </div>




                                    <div class="form-navigation mt-3">
                                        <a href="{{ route('multiforms.create.step.two') }}">
                                            <button type="submit" class="next btn bg-blue-dark-3 text-white float-right"
                                                id='step-two'>ቀጣይ <i class="fa fa-angle-right"></i></button></a>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
   
@endsection
