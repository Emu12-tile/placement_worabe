@extends('app')
@section('content')
    <div class="hk-pg-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <section class="hk-sec-wrapper mt-100">

                        <h1 class="hk-sec-title text-primary text-center">የመወዳደርያ ቅጽ</h1>
                        <p class="mb-25"> </p>

                        <div class="row">
                            <div class="col-sm">
                                <form action="{{ route('multiforms.create.step.two.post') }}" method="POST">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="education level">የትምህርት ዓይነት</label>


                                            <select class="form-control custom-select d-block w-100 " id="education_type_id"
                                                value="{{ $form->education_type_id ?? '' }}" name="education_type_id">
                                                @foreach ($edutype as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('education_type_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->education_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="edu_level_id">የትምህርት ደረጃ</label>
                                            <select
                                                class="form-control custom-select d-block w-100 "value="{{ $form->edu_level_id ?? '' }}"
                                                name="edu_level_id">
                                                @foreach ($edu_level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('edu_level_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->education_level }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="col-md-4 form-group">
                                            <label for="positionofnow">አሁን ያሉበት የስራ መደብ</label>
                                            <input type="text" value="{{ $form->positionofnow ?? '' }}"
                                                class="form-control @error('positionofnow') is-invalid @enderror"
                                                id="positionofnow" placeholder="አሁን ያሉበት የስራ መደብ" name="positionofnow">
                                            @error('positionofnow')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="level_id">ደረጃ </label>
                                            <select class="form-control custom-select d-block w-100 "
                                                value="{{ $form->level_id ?? '' }}" name="level_id">
                                                @foreach ($level as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('level_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->level }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="fee">ደምወዝ</label>
                                            <input class="form-control @error('fee') is-invalid @enderror" id="fee"
                                                placeholder="ደምወዝ" value="{{ $form->fee ?? '' }}" type="number"
                                                name="fee">
                                            @error('fee')
                                                <span class=" error invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>

                                    <h3 class="text-secondary text-center mt-3 mb-4"> የሚወዳደሩበት የስራ ክፍልና የስራ መደብ</h3>
                                    <h4 class="text-success text-left mt-3 mb-4"> ምርጫ 1</h4>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for=""> የስራ ክፍሉ</label>


                                            <select class="form-control custom-select d-block w-100 "
                                                value="{{ $form->job_category_id ?? '' }}" name="job_category_id">
                                                @foreach ($job_category as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('job_category_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->job_category }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="col-md-6 form-group">

                                            <label for="position_id"> የስራ መደብ</label>
                                            <select class="form-control custom-select d-block w-100 " id="position_id"
                                                value="{{ $form->position_id ?? '' }}" name="position_id">
                                                @foreach ($position2 as $col)
                                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip"
                                                        data-placement="top" title="Tooltip on top">
                                                        <option value="{{ $col->id }}" id="position_id"
                                                            {{ old('position_id') == $col->id ? 'selected' : '' }}>
                                                            {{ $col->position }} (ሥ/ልምድ {{ $col->experience }}፣ደረጃ
                                                            {{ $col->level->level }}፣ት/ት
                                                            ደረጃ {{ $col->edu_level->education_level }})</option>



                                                    </button>
                                                @endforeach
                                            </select>
                                        </div>


                                    </div>
                                    <h4 class="text-success text-left mt-3 mb-4"> ምርጫ 2</h4>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for=""> የስራ ክፍሉ</label>


                                            <select class="form-control custom-select d-block w-100 "
                                                value="{{ $form->jobcat2_id ?? '' }}" name="jobcat2_id">
                                                @foreach ($job_category2 as $col)
                                                    <option value="{{ $col->id }}"
                                                        {{ old('jobcat2_id') == $col->id ? 'selected' : '' }}>
                                                        {{ $col->job_category }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">

                                            <label for="position_id"> የስራ መደብ</label>
                                            <select class="form-control custom-select d-block w-100 " id="position_id"
                                                value="{{ $form->choice2_id ?? '' }}" name="choice2_id">
                                                @foreach ($choice2 as $col)
                                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip"
                                                        data-placement="top" title="Tooltip on top">
                                                        <option value="{{ $col->id }}" id="position_id"
                                                            {{ old('choice2_id') == $col->id ? 'selected' : '' }}>
                                                            {{ $col->position }} (ሥ/ልምድ {{ $col->experience }}፣ደረጃ
                                                            {{ $col->level->level }}፣ት/ት
                                                            ደረጃ {{ $col->edu_level->education_level }})</option>



                                                    </button>
                                                @endforeach
                                            </select>
                                        </div>



                                    </div>

                                    <div class="form-navigation mt-3">
                                        {{-- <button type="button" class="previous btn btn-primary  float-left">&lt;
                                            Previous</button> --}}

                                        <a href="{{ route('multiforms.create-step-one') }}"
                                            class="btn btn-danger float-left">&lt;Previous</a>

                                        <button type="submit" class="next btn btn-primary float-right">Next &gt;</button>
                                        {{-- <button type="submit" class="btn btn-success  float-right">Submit</button> --}}
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
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script>
            let selected;
            let level;
            let experience;
            const select = document.querySelector('#position_id');
            $(".reqStatus").on('change', function()) {
                console.log('hi');
                selected = parseInt(this.value);
                set();
            }

            function set() {
                level = 1
                experience = 2
            }
            // data  level , experience
            // function onPosSelect(id){
            // using postion get position entity level, experience
            // let level ="";
            // let experience = "";

            // res = {level}  {exprience}
            // return res
            // }
        </script>
    @endsection
