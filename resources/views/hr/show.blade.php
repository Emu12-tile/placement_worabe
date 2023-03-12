@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    {{-- <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('hr.index') }}"> Back</a>

                    </div> --}}
                    <h5 class="hk-sec-title">Detail Information </h5>


                    <div class="row">
                        <div class="col-sm">
                            <form action=""method="POST">

                                @csrf
                                @method('PUT')


                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>


                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->full_name }}"
                                            name="full_name"class="form-control" id="inputname" placeholder=" firstName"
                                            disabled>
                                    </div>

                                </div>



                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ኢሜይል</label>
                                    <div class="col-sm-10">
                                        <input type="email" value="{{ $form->email }}" name="email"class="form-control"
                                            id="inputname" placeholder="email" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ስልክ
                                        ቁጥር</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->phone }}" name="phone"class="form-control"
                                            id="inputname" placeholder="phone" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">የትምህርት ደረጃ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->edu_level->education_level }}"
                                            name="education_level"class="form-control font-weight-bold" id="inputEmail3"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">የትምህርት ዓይነት</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->education_type->education_type }}"
                                            name="education_type"class="form-control font-weight-bold" id="inputEmail3"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">አሁን ያሉበት የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->positionofnow }}"
                                            name="positionofnow"class="form-control font-weight-bold" id="inputEmail3"
                                            disabled>
                                    </div>
                                </div>
                              <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">ደረጃ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->level->level }}"
                                            name="level"class="form-control font-weight-bold" id="inputEmail3"
                                            disabled>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label for="fee" class="col-sm-2 col-form-label">ደምወዝ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->fee }}"
                                            name="fee"class="form-control font-weight-bold" id="fee"
                                            disabled>
                                    </div>
                                </div>
                                 <h4 class="text-secondary text-center mt-3 mb-4"> የ መወዳደርያ የስራ ክፍልና የስራ መደብ</h4>
                                        <h6 class="text-secondary text-left mt-3 mb-4"> ምርጫ 1</h6>
                                 <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">የስራ ክፍሉ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->job_category->job_category }}"
                                            name="job_category"class="form-control font-weight-bold" id="inputEmail3"
                                            disabled>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="position" class="col-sm-2 col-form-label">የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->position->position }}"
                                            name="position"class="form-control font-weight-bold" id="position"
                                            disabled>
                                    </div>
                                </div>
                                {{-- <div class="form-group row">
                                    <label for="level" class="col-sm-2 col-form-label">ደረጃ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->position->level->level }}"
                                            name="level"class="form-control font-weight-bold" id="level"
                                            disabled>
                                    </div>
                                </div> --}}
                                 <h6 class="text-secondary text-left mt-3 mb-4"> ምርጫ 2</h6>
                                  <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">የስራ ክፍሉ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->jobcat2->job_category }}"
                                            name="job_category"class="form-control font-weight-bold" id="job_category"
                                            disabled>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="position" class="col-sm-2 col-form-label">የስራ መደብ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->choice2->position }}"
                                            name="position"class="form-control font-weight-bold" id="position"
                                            disabled>
                                    </div>
                                </div>



                                {{-- <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Experience</label>

                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $form->experience->startingDate }}" name="startingDate"
                                                class="form-control" id="inputname" placeholder="startingDate" disabled>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Experience</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $form->endingDate }}"
                                            name="endingDate"class="form-control" id="inputname" placeholder="endingDate"
                                            disabled>
                                    </div>
                                </div>
                                --}}

                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
