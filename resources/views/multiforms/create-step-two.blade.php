@extends('app')
@section('content')
    <div class="hk-pg-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <section class="hk-sec-wrapper mt-100">

                        <h3 class="hk-sec-title text-white text-center color-wrap  "
                            style=" background-color:rgb(17,40,77); padding:10px;">አዲስ አበባ ሳይንስና ቴክኖሎጂ ዩኒቨርሲቲ የሰራተኞች የ ስራ
                            ድልድል ማወዳደርያ ቅፅ</h3>
                        <p class="mb-25"> </p>

                        <div class="row">
                            <div class="col-sm">
                                <form action="{{ route('multiforms.create.step.two.post') }}" method="POST">
                                    @csrf
                                 <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="ethinicity">ብሔር</label>
                                                <input type="text" value="{{ old('ethinicity') }}"
                                                    class="form-control @error('ethinicity') is-invalid @enderror"
                                                    id="ethinicity" placeholder="ብሔር" name="ethinicity">
                                                @error('ethinicity')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="birth_date">የትውልድ ዘመን</label>
                                                <input type="text" value="{{ old('birth_date') }}"
                                                    class="form-control @error('birth_date') is-invalid @enderror"
                                                    id="birth_date" placeholder="የትውልድ ዘመን" name="birth_date">
                                                @error('birth_date')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="jobcat">አሁን ያሉበት የስራ ክፍል</label>
                                                <input type="text" value="{{ old('jobcat') }}"
                                                    class="form-control @error('jobcat') is-invalid @enderror"
                                                    id="jobcat" placeholder="አሁን ያሉበት የስራ ክፍል" name="jobcat">
                                                @error('jobcat')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="positionofnow">አሁን ያሉበት የስራ መደብ</label>
                                                <input type="text" value="{{ old('positionofnow') }}"
                                                    class="form-control @error('positionofnow') is-invalid @enderror"
                                                    id="positionofnow" placeholder="አሁን ያሉበት የስራ መደብ"
                                                    name="positionofnow">
                                                @error('positionofnow')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="level">አሁን ያሉበት ደረጃ </label>
                                                <input type="text" value="{{ old('level') }}"
                                                    class="form-control @error('level') is-invalid @enderror"
                                                    id="level" placeholder="አሁን ያሉበት ደረጃ" name="level">
                                                @error('level')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                {{-- <select class="form-control custom-select d-block w-100 " id="level"
                                                    name="level">
                                                    @foreach ($level as $col)
                                                        <option value="{{ $col->id }}"
                                                            {{ old('level_id') == $col->id ? 'selected' : '' }}>
                                                            {{ $col->level }}</option>
                                                    @endforeach
                                                </select> --}}
                                            </div>
                                            {{-- <div class="col-md-4 form-group">
                                                <label for="fee">ደምወዝ (ETB)</label>
                                                <input class="form-control @error('fee') is-invalid @enderror"
                                                    id="fee" placeholder="ደምወዝ" value="{{ old('fee') }}"
                                                    type="number" name="fee">
                                                @error('fee')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div> --}}
                                        </div>
                                        <h3 class="text-white text-center mt-3 mb-4  "
                                            style=" background-color:rgb(17,40,77); margin:center">
                                            ያለዎትን የትምህርት ዝግጅትና የትምህርት ደረጃ ያስገቡ
                                        </h3>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class=" educ row">
                                                    <div class="col-md-3">

                                                        <label for="level">የትምህርት ደረጃ</label>
                                                        <input type="text" name="addMoreFields[0][level]"
                                                            value="{{ old('level') }}"
                                                            class="form-control  @error('level') is-invalid @enderror"
                                                            id="level" placeholder="educational level ">
                                                        @error('level')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="discipline">የትምህርት ዝግጅት (በተቋም) </label>
                                                        <input type="text" name="addMoreFields[0][discipline]"
                                                            value="{{ old('discipline') }}"
                                                            class="form-control  @error('discipline') is-invalid @enderror"
                                                            id="discipline" placeholder=" የትምህርት ዝግጅት (በተቋም)">
                                                        @error('discipline')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="academicPreparationCOC">የትምህርት ዝግጅት (ሲኦሲ) </label>
                                                        <input type="text"
                                                            name="addMoreFields[0][academicPreparationCOC]"
                                                            value="{{ old('academicPreparationCOC') }}"
                                                            class="form-control  @error('academicPreparationCOC') is-invalid @enderror"
                                                            id="academicPreparationCOC" placeholder=" የትምህርት ዝግጅት (ሲኦሲ)">
                                                        @error('academicPreparationCOC')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label for="completion_date">completion_date </label>
                                                        <input type="text" name="addMoreFields[0][completion_date]"
                                                            value="{{ old('completion_date') }}"
                                                            class="form-control  @error('completion_date') is-invalid @enderror"
                                                            id="completion_date" placeholder="completion_date">
                                                        @error('completion_date')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0)"
                                                            class="btn color-wrap text-white bg-blue-dark-4  addrow mt-40 "
                                                            style=" border-radius:50%">+</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="text-white text-center mt-3 mb-4 navigation "
                                            style=" background-color:rgb(17,40,77); margin:center">
                                        </h3>
                                    <div class="form-navigation mt-3">

                                        <a href="{{ route('multiforms.create-step-one') }}"
                                            class="btn color-wrap text-white bg-red-dark-4 float-left"><i
                                                class="fa fa-angle-left"></i> የቀድሞ</a>

                                        <button type="submit"
                                            class="next btn text-white color-wrap bg-blue-dark-3 float-right">ቀጣይ <i
                                                class="fa fa-angle-right"></i></button>
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://raw.github.com/mattpowell/localstorageshim/master/localstorageshim.min.js" type="text/javascript">
    </script>

    <script>
        $(document).ready(function() {
            var i = 0
            setTimeout(function() {
                $('#success-message').fadeOut('slow');
            }, 5000);
            $(".addRow").click(function(e) {
                ++i;
                e.preventDefault();
                $("#myform").append(`
                        <div class="row" >
                                    <div class="col-sm">

                                            <div class=" formgr row">

                                                <div class="col-md-3">
                                                <label for="startingDate"></label>

                                                    <input type="date" name="addMoreInputFields[${i}][startingDate]" value="{{ old('startingDate') }}"
                                                        class="form-control  @error('startingDate') is-invalid @enderror"
                                                        id="startingDate" placeholder=" ">
                                                    @error('startingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="col-md-3">
                                                  <label for="endingDate"></label>
                                                    <input type="date" name="addMoreInputFields[${i}][endingDate]" value="{{ old('endingDate') }}}"
                                                        class="form-control  @error('endingDate') is-invalid @enderror"
                                                        id="endingDate" placeholder=" endingDate">
                                                    @error('endingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="positionyouworked"></label>

                                                    <input type="text" name="addMoreInputFields[${i}][positionyouworked]" value="{{ old('positionyouworked') }}"
                                                        class="form-control  @error('positionyouworked') is-invalid @enderror"
                                                        id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                    @error('positionyouworked')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div>

                                                    <a href="javascript:void(0)" class="btn btn-danger  removeRow mt-20 "
                                                        style=" border-radius:50%">-</a>
                                                </div>
                                            </div>

                                        </div>
                                </div>





                    `);
            });

            $(document).on('click', '.removeRow', function(e) {

                e.preventDefault();

                let row_item = $(this).parents('.formgr');
                $(row_item).remove();
            });

            var j = 0;

            $(".addrow").click(function(e) {
                ++j;
                e.preventDefault();
                $(".navigation").before(`
                <div class="row">
                    <div class="col-sm">
                        <div class=" educ row">
                            <div class="col-md-3">

                                <label for="level">የትምህርት ደረጃ</label>
                                <input type="text" name="addMoreFields[${j}][level]"
                                value="{{ old('level') }}"
                                class="form-control  @error('level') is-invalid @enderror"
                                id="level" placeholder="educational level ">
                                @error('level')
                                <span class=" error invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror

                            </div>
                            <div class="col-md-3">
                                <label for="discipline">የትምህርት ዝግጅት (በተቋም) </label>
                                <input type="text"
                                    name="addMoreFields[${j}][discipline]"
                                    value="{{ old('discipline') }}"
                                    class="form-control  @error('discipline') is-invalid @enderror"
                                    id="discipline" placeholder=" የትምህርት ዝግጅት (በተቋም)">
                                @error('discipline')
                                    <span class=" error invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                              <div class="col-md-3">
                                                        <label for="academicPreparationCOC">የትምህርት ዝግጅት (ሲኦሲ) </label>
                                                        <input type="text" name="addMoreFields[${j}][academicPreparationCOC]"
                                                            value="{{ old('academicPreparationCOC') }}"
                                                            class="form-control  @error('academicPreparationCOC') is-invalid @enderror"
                                                            id="academicPreparationCOC" placeholder=" የትምህርት ዝግጅት (ሲኦሲ)">
                                                        @error('academicPreparationCOC')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label for="completion_date">completion_date </label>
                                                        <input type="text" name="addMoreFields[${j}][completion_date]"
                                                            value="{{ old('completion_date') }}"
                                                            class="form-control  @error('completion_date') is-invalid @enderror"
                                                            id="completion_date" placeholder="completion_date">
                                                        @error('completion_date')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                <div>
                               <a href="javascript:void(0)" class="btn btn-danger  removerow mt-20 "
                                                        style=" border-radius:50%">-</a>
                            </div>
                        </div>
                    </div>
                </div>



                    `);
            });

            $(document).on('click', '.removerow', function(e) {

                e.preventDefault();
                // $this.parents('')
                let row_item = $(this).parents('.educ');
                $(row_item).remove();
            });
           








        });

        // Function to handle form submission
    </script>
@endsection
