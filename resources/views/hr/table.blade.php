@extends('layouts.admin')

@section('content')
    {{-- TODO change this to componnent --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">

        <section class="hk-sec-wrapper mt-100">
            <div class="pull-right hk-sec-title">


            </div>
            <h5 class="hk-sec-title">በ 2015 ዓ.ም በአዲሱ መዋቅር እያንዳንዱ ተወዳዳሪ የሚሞላበት ፎርም ዝርዝር ይዘት </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-sm  table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th rowspan="3">ተቁ</th>
                                        <th rowspan="3">ሙሉ ስም</th>



                                        <th rowspan="3">ጾታ</th>

                                        <th rowspan="3">አሁን ያሉበት የስራ መደብ</th>

                                        <th rowspan="3">ደረጃ</th>

                                        <th rowspan="3">ደምወዝ</th>
                                        <th colspan="8">የተወዳደሩበት የ ሥራ ክፍልና የሥራ መደብ</th>
                                    </tr>

                                    <tr>
                                        <th colspan="3"> ምርጫ 1</th>
                                        <th colspan="3"> ምርጫ 2</th>
                                        <th rowspan="2"> ፊርማ </th>
                                        <th rowspan="2"> መግለጫ </th>
                                    </tr>
                                    <tr>
                                        <td>የስራ ክፍሉ</td>
                                        <td>የስራ መደብ</td>
                                        <td>ደረጃ</td>
                                        <td>የስራ ክፍሉ</td>
                                        <td>የስራ መደብ</td>
                                        <td>ደረጃ</td>
                                    </tr>




                                </thead>
                                <tbody>

                                    @foreach ($forms as $i => $form)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $form->full_name }}</td>
                                            <td>{{ $form->sex }}</td>
                                            <td>{{ $form->positionofnow }}</td>
                                            <td>{{ $form->level->level }}</td>
                                            <td>{{ $form->fee }}</td>
                                            <td>{{ $form->job_category->job_category }}</td>
                                            <td>{{ $form->position->position }}</td>
                                            <td>{{ $form->level->level }}</td>
                                            <td>{{ $form->job_category->job_category }}</td>
                                            <td>{{ $form->position->position }}</td>
                                            <td>{{ $form->level->level }}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {!! $forms->links() !!} --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
{{-- @section('javascript')

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> --}}


{{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function() {



            $("#add_evaluation").submit(function(e) {

                if ($(this).val() != '') {

                    $("#btn-submit").prop("disabled", );

                } else {
                    $("#btn-submit").prop("disabled", false);

                }



            });

        });
    </script> --}}