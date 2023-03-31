@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="pull-right">
                    <a class="btn btn-dark" href="{{ route('resource.index') }}"> Back</a>
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
                                                        <th>የ ማወዳደርያ ነጥብ(65%)</th>
                                                    @endrole
                                                    @role('president')
                                                        <th>የ ማወዳደርያ ነጥብ(35%)</th>
                                                    @endrole

                                                </tr>
                                            </thead>
                                            {{-- <div class="collapse" id="collapseExample"> --}}
                                            {{-- <div class="card card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid.
                                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                                nesciunt sapiente ea proident.
                                            </div> --}}
                                            {{-- </div> --}}
                                            <tbody>
                                                @role('president')
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td> በበላይ አመራር ለአመራርነት ክህሎት የሚሠጥ ነጥብ </td>
                                                        <td>
                                                            {{-- <button class="btn btn-primary hide" onclick="tableToggle()">
                                                            25
                                                        </button> --}}
                                                            <button class="btn btn-primary" type="button"
                                                                data-toggle="collapse" data-target="#collapseExamplepres"
                                                                aria-expanded="false" aria-controls="collapseExample">
                                                                35
                                                            </button>
                                                        </td>

                                                    </tr>
                                                @endrole
                                                @role('hr')
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td> ለትምህርት ዝግጅት የሚሰጥ ነጥብ</td>
                                                        <td>
                                                            {{-- <button class="btn btn-primary hide" onclick="tableToggle()">
                                                            25
                                                        </button> --}}
                                                            <button class="btn btn-primary" type="button"
                                                                data-toggle="collapse" data-target="#collapseExample"
                                                                aria-expanded="false" aria-controls="collapseExample">
                                                                25
                                                            </button>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</td>
                                                        <td><button class="btn btn-primary" type="button"
                                                                data-toggle="collapse" data-target="#collapse2"
                                                                aria-expanded="false" aria-controls="collapseExample">
                                                                15
                                                            </button></td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>ለውጤት ተኮር ምዘና</td>
                                                        <td>10</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>ለፈተና ውጤት (የጽሁፍ፣ የቃል)</td>
                                                        <td>15</td>

                                                    </tr>
                                                @endrole

                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                            </div>


                            {{-- <div class="col-md-6 "> --}}
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">

                                    <div class="table-wrap mb-20 ">
                                        <div class="table-responsive">
                                            <table class="table table-active table-bordered mb-0">
                                                <thead class="thead-active">
                                                    <tr>
                                                        <th>ተ.ቁ</th>

                                                        <th>የማወዳደሪያ መስፈርት</th>
                                                        <th>ቡድን መሪ እና በላይ(25%)</th>

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
                                                        <td>25</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>ሁለተኛ ዲግሪ የትምህርት ዝግጅት ያለው</td>
                                                        <td>23</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>የመጀመሪያ ዲግሪ የትምህርት ዝግጅት ያለው</td>
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
                                                        <th>ቡድን መሪ እና በላይ(15%)</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>

                                                        <td> አስር ዓመት እና በላይ አግባብነት ያለው የስራ
                                                            ልምድ ያለው </td>
                                                        <td>
                                                            15
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td> ሰባት ዓመት እና ከአስር ዓመት በታች አግባብነት
                                                            ያለው የስራ ልምድ ያለው </td>
                                                        <td>12.5</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>አምስት ዓመት እና ከሰባት ዓመት በታች
                                                            አግባብነት ያለው የስራ ልምድ ያለው</td>
                                                        <td>10</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>ከአምሰት አመት በታች አግባብነት ያለው የስራ
                                                            ልምድ ያለው</td>
                                                        <td>7.5</td>

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
                                                            ተልእኮ ጋር በማቀናጀት ለስኬት የራሱን ድርሻ ለመወጣት በቂግንዛቤ የያዘና ሌላውን ለማስገንዘብ
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
                            {{-- </div> --}}
                        </div>
                        <form action="{{ route('resource.update', $hr->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                {{-- <div class="col-md-6"> --}}


                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table table-sm table-bordered mb-0">
                                                <thead class="thead-active">
                                                    <tr>

                                                        <th>ሙሉ ስም</th>

                                                        <th>የትምህርት ደረጃ</th>
                                                        <th>የሚወዳደሩበት የስራ መደብ</th>



                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>

                                                        <td>{{ $hr->form->full_name }}
                                                        </td>
                                                        <td>{{ $hr->form->edu_level->education_level }}</td>
                                                        <td>{{ $hr->form->position->position }}</td>





                                                    </tr>

                                                </tbody>
                                            </table>
                                            {{-- {!! $hrs->links() !!} --}}

                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                            <div class="row">
                                @role('president')
                                    <div class="col-md-6 form-group">
                                        <label for="firstName">ለትምህርት ዝግጅት የሚሰጥ ነጥብ</label>
                                        <input class="form-control" @error('presidentGrade') is-invalid @enderror"
                                            id="firstName" placeholder="ለትምህርት ዝግጅት የሚሰጥ ነጥብ ከ (35%)"
                                            value="{{ $hr->presidentGrade }}" type="number" name="presidentGrade"
                                            min="1" max="35" required>
                                        @error('presidentGrade')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                @endrole
                                @role('hr')
                                    <div class="col-md-6 form-group">
                                        <label for="firstName">ለትምህርት ዝግጅት የሚሰጥ ነጥብ</label>
                                        <input class="form-control" @error('performance') is-invalid @enderror" id="firstName"
                                            placeholder="" value="{{ $hr->performance }}" type="number" name="performance"
                                            min="1" max="25">
                                        @error('performance')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="middleName">ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</label>
                                        <input class="form-control" @error('experience') is-invalid @enderror" id="middleName"
                                            placeholder="" value="{{ $hr->experience }}" type="number" name="experience"
                                            min="1" max="25">
                                        @error('experience')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="lastName">ለውጤት ተኮር ምዘና </label>
                                        <input class="form-control" @error('resultbased') is-invalid @enderror"
                                            id="resultbased" placeholder="" value="{{ $hr->resultbased }}" type="decimal"
                                            name="resultbased" min="1" max="25">
                                        @error('resultbased')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="exam">ለፈተና ውጤት</label>
                                        <input class="form-control" @error('exam') is-invalid @enderror" id="exam"
                                            placeholder="" value="{{ $hr->exam }}" type="number" name="exam"
                                            min="1" max="28">
                                        @error('exam')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                @endrole






                            </div>
                            <div class="form-group row mb-0 pull-right">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="add_btn">አስረክብ</button>
                                </div>
                            </div>





                        </form>

                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection
