@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="pull-right">
                    <a class="btn btn-dark" href="{{ route('hr.index') }}"> Back</a>
                </div>
                <h5 class="hk-sec-title"> የመመዘኛ መስፈርቶች
                </h5>
                {{-- <p class="mb-40">A tiny editable jQuery Bootstrap spreadsheet. Just start typing to edit, or move around
                    with arrow keys or mouse clicks!</p> --}}

                <div class="row">

                    <div class="col-sm">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="table-wrap mb-20">
                                    <div class="table-responsive">

                                        <table class="table table-active table-bordered mb-0">
                                            <thead class="thead-active">
                                                <tr>
                                                    <th>ተ.ቁ</th>
                                                    <th>የመመዘኛ መስፈርቶች</th>
                                                    @role('hr')
                                                        <th>የ ማወዳደርያ ነጥብ(100%)</th>
                                                    @endrole

                                                </tr>
                                            </thead>

                                            <tbody>

                                                @role('hr')
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td> ለትምህርት ዝግጅት የሚሰጥ ነጥብ</td>
                                                        <td>

                                                            <button class="btn btn-primary" type="button"
                                                                data-toggle="collapse" data-target="#collapseExample"
                                                                aria-expanded="false" aria-controls="collapseExample">
                                                                40
                                                            </button>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ </td>
                                                        <td><button class="btn btn-primary" type="button"
                                                                data-toggle="collapse" data-target="#collapse2"
                                                                aria-expanded="false" aria-controls="collapseExample">
                                                                30
                                                            </button></td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>ለውጤት ተኮር ምዘና</td>
                                                        <td>30</td>

                                                    </tr>
                                                @endrole

                                            </tbody>

                                        </table>

                                    </div>
                                </div>

                            </div>


                            <div class="col-md-6 ">
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">

                                        <div class="table-wrap mb-20 ">
                                            <div class="table-responsive">
                                                <table class="table table-active table-bordered mb-0">
                                                    <thead class="thead-active">
                                                        <tr>
                                                            <th>ተ.ቁ</th>

                                                            <th>የማወዳደሪያ መስፈርት</th>
                                                            <th>ቡድን መሪ በታች(40%)</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>

                                                            <td> የስራ መደቡ የሚጠይቀው ዝቅተኛ ትምህርት
                                                                ዝግጅት የመጀመሪያ ዲግሪ ለሆኑ የስራ መደቦች</td>
                                                            <td>

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1.1</th>
                                                            <td> ፒ.ኤች.ዲ (ሶስተኛ ዲግሪ) የትምህርት ዝግጅት
                                                                ያለው</td>
                                                            <td>40</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1.2</th>
                                                            <td>ሁለተኛ ዲግሪ የትምህርት ዝግጅት ያለው</td>
                                                            <td>36</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1.3</th>
                                                            <td>የመጀመሪያ ዲግሪ የትምህርት ዝግጅት ያለው</td>
                                                            <td>32</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>

                                                                የስራ መደቡ የሚጠይቀው ዝቅተኛ ትምህርት
                                                                ዝግጅት የኮሌጅ ዲፕሎማ ወይም ደረጃ ሶስት
                                                                ለሆኑ የስራ መደቦች
                                                        </tr>
                                                        </td>
                                                        <td></td>

                                                        <tr>
                                                            <th scope="row">2.1</th>
                                                            <td>የመጀመሪያ ዲግሪ የትምህርት ዝግጅት ያለው</td>
                                                            <td>40</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2.2</th>
                                                            <td>ደረጃ 4 ወይም ደረጃ 5 የትምህርት ዝግጅት ያለው

                                                            </td>
                                                            <td>36</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2.3</th>
                                                            <td> የኮሌጅ ዲፕሎማ ወይም ደረጃ ሶስት የትምህርት
                                                                ዝግጅት ያለው

                                                            </td>
                                                            <td>32</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2.4</th>
                                                            <td> 10+2 ወይም ደረጃ 2 የትምህርት ዝግጅት ያለው

                                                            </td>
                                                            <td>28</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2.5</th>
                                                            <td>10+1 ወይም ደረጃ 1 የትምህርት ዝግጅት ያለው

                                                            </td>
                                                            <td>24</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2.6</th>
                                                            <td>በቀድሞ 12ኛ ወይም በአዲሱ 10ኛ ክፍል እና
                                                                በታች የትምህርት ዝግጅት ያለው

                                                            </td>
                                                            <td>20</td>

                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="collapse" id="collapse2">
                                    <div class="card card-body">

                                        <div class="table-wrap mb-20 ">
                                            <div class="table-responsive">
                                                <table class="table table-active table-bordered mb-0">
                                                    <thead class="thead-active">
                                                        <tr>
                                                            <th>ተ.ቁ</th>

                                                            <th>የማወዳደሪያ መስፈርት</th>
                                                            <th>ቡድን መሪ እና በታች(30%)</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>

                                                            <td> አስር ዓመት እና በላይ አግባብነት ያለው የስራ
                                                                ልምድ ያለው </td>
                                                            <td>
                                                                30
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td> ሰባት ዓመት እና ከአስር ዓመት በታች አግባብነት
                                                                ያለው የስራ ልምድ ያለው </td>
                                                            <td>25</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>አምስት ዓመት እና ከሰባት ዓመት በታች
                                                                አግባብነት ያለው የስራ ልምድ ያለው</td>
                                                            <td>20</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>ከአምሰት አመት በታች አግባብነት ያለው የስራ
                                                                ልምድ ያለው</td>
                                                            <td>15</td>

                                                        </tr>

                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="collapseExamplepres">
                                    <div class="card card-body">

                                        <div class="table-wrap mb-20 ">
                                            <div class="table-responsive">
                                                <table class="table table-active table-bordered mb-0">
                                                    <thead class="thead-active">
                                                        <tr>
                                                            <th>ተ.ቁ</th>

                                                            <th>የማወዳደሪያ መስፈርት</th>
                                                            <th>ነጥብ
                                                                ክብደት</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>

                                                            <td>የመንግስትን ሀብት በቁጠባ መጠቀም፣ ታማኝነትና ቅንነት

                                                                መላበስ</td>
                                                            <td>
                                                                5
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>በወቅቱ ተገቢነት ያለው ውሳኔ መስጠት </td>
                                                            <td>5</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>የሴክተሩን ፖሊሲ፣ ስትራቴጂና ፕሮግራሞችን ከተቋሙ ራእይና
                                                                ተልእኮ ጋር በማቀናጀት ለስኬት የራሱን ድርሻ ለመወጣት በቂግንዛቤ የያዘና ሌላውን
                                                                ለማስገንዘብ
                                                                የሚተጋ </td>
                                                            <td>5</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>ተጨማሪ ተልእኮ ወስዶ የመፈፀምና በወቅቱ የማቅረብ ብቃት፣

                                                                ቁርጠኝነትና ከፍተኛ የተነሳሽነት ስሜት መኖር

                                                            </td>
                                                            <td>5</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>የአመራር ብቃት ፣ የተግባቦት ብቃት ፣ የዕቅድ ዝግጅት ጥራት
                                                                ፣የሪፖርት ዝግጀት ጥራት፣፤ በውስጡ ያሉ ሰራተኞችን

                                                                የመምራት ብቃት፣ ሁልጊዜ ከሰራተኞች ጋር አብሮ የመስራት</td>
                                                            <td>5</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td> የኢንፎርሜሽን ኮሙኒኬሽን ቴከኖሎጂን በብቃት ለስራ ።

                                                                መጠቀም </td>
                                                            <td>5</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">7</th>
                                                            <td> ለማህደር ጥራት የሚሰጥ ነጥብ</td>
                                                            <td>5</td>

                                                        </tr>

                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('addHrPost', $id) }}" method="POST" id="add_evaluation">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">


                                    <div class="col-sm">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-bordered mb-0">
                                                    <thead class="thead-active">
                                                        <tr>

                                                            <th>ሙሉ ስም</th>

                                                            {{-- <th>የትምህርት ደረጃ</th> --}}
                                                            <th>የትምህርት ደረጃ</th>
                                                            <th>የ ስራ መደብ</th>
                                                            <th>ለስራ ልምድ </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>

                                                            <td>{{ $form->firstName }}
                                                            </td>
                                                            <td>{{ $form->edu_level->education_level }}</td>

                                                            <td>
                                                                {{ $form->position->position }}
                                                            </td>
                                                            @foreach ($forms as $fo)
                                                                <td>

                                                                    <?php

                                                                    $fdate = Carbon::parse($fo->startingDate)->year;

                                                                    $tdate = Carbon::parse($fo->endingDate)->year;

                                                                    $years = $tdate - $fdate;

                                                                    echo $years;

                                                                    ?>
                                                                </td>
                                                            @endforeach




                                                        </tr>

                                                    </tbody>
                                                </table>
                                                {{-- {!! $hrs->links() !!} --}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                @role('hr')
                                    <div class="col-md-6 form-group">
                                        <label for="firstName">ለትምህርት ዝግጅት የሚሰጥ ነጥብ</label>
                                        <input class="form-control" @error('performance') is-invalid @enderror" id="firstName"
                                            placeholder="" value="{{ old('performance') }}" type="number" name="performance"
                                            min="1" max="40">
                                        @error('performance')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="middleName">ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</label>
                                        <input class="form-control" @error('experience') is-invalid @enderror" id="middleName"
                                            placeholder="" value="{{ old('experience') }}" type="number" name="experience"
                                            min="1" max="30">
                                        @error('experience')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="lastName">ለውጤት ተኮር ምዘና </label>
                                        <input class="form-control" @error('resultbased') is-invalid @enderror"
                                            id="resultbased" placeholder="ለውጤት ተኮር ምዘና " value="{{ old('resultbased') }}"
                                            type="number" name="resultbased" min="1" max="30">
                                        @error('resultbased')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                @endrole
                                <input type="hidden" name="type" value="low">





                            </div>
                            <div class="form-group row mb-0 pull-right">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="add_btn">አስረክብ</button>
                                </div>
                            </div>





                        </form>
                        {{-- @endif --}}
                        {{-- @endforeach --}}

                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection
