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
                            <table id="datable_3" class="table table-hover  table-bordered w-100  pb-30">
                                <thead>
                                    <tr>
                                        <th rowspan="3">ተቁ</th>
                                        <th rowspan="3">ሙሉ ስም</th>






                                        <th colspan="4">የተወዳደሩበት የሥራ ክፍልና የሥራ መደብ</th>
                                        <th rowspan="3"> ፊርማ </th>
                                        <th rowspan="3">ምርጫ1 </th>
                                        <th rowspan="3">ምርጫ2</th>


                                    </tr>

                                    <tr>
                                        <th colspan="2"> ምርጫ 1</th>
                                        <th colspan="2"> ምርጫ 2</th>


                                    </tr>
                                    <tr>
                                        <td>የስራ ክፍሉ</td>
                                        <td>የስራ መደብ</td>

                                        <td>የስራ ክፍሉ</td>
                                        <td>የስራ መደብ</td>

                                    </tr>




                                </thead>
                                <tbody>

                                    @foreach ($hrs as $i => $hr)
                                        <tr>

                                            <td>{{ ++$i }}</td>
                                            <td>{{ $hr->full_name }}</td>

                                            <td>{{ $hr->form->job_category->job_category }}</td>
                                            <td>{{ $hr->form->position->position }}</td>

                                            <td>{{ $hr->form->jobcat2->job_category }}</td>
                                            <td>{{ $hr->form->choice2->position }}</td>

                                            {{-- <td>{{ $form->h_r->performance }}</td> --}}
                                            {{-- <td>{{ $hr->secondhr->performance }}</td> --}}
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- {!! $hrs->links() !!} --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
