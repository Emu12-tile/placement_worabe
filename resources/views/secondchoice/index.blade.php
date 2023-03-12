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

                <a href="{{ route('secondchoice.secondchoice') }}"  class="btn btn-dark mr-25"> back </a>
            </div>
            <h5 class="hk-sec-title">Evaluation </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap ">
                        <div class="table-responsive">
                            <table id="datable_1" class="table table-hover table-bordered w-100  pb-30">
                                <thead>
                                    <tr>
                                        <th>ተ.ቁ</th>

                                        <th>ሙሉ ስም</th>
                                        @role('hr')
                                            <th>ውጤት ሰጪ</th>

                                            <th>ለትምህርት ዝግጅት የሚሰጥ ነጥብ</th>
                                            <th>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</th>
                                            <th>ለውጤት ተኮር ምዘና</th>

                                            <th>ለፈተና ውጤት</th>
                                        @endrole


                                        {{-- <th>አጠቃላይ ውጤት(100%)</th> --}}
                                        @role('president')
                                            <th>የሚወዳደሩበት የስራ መደብ</th>
                                            <th>የ ትምህርት ደረጃ</th>
                                            <th>የ ትምህርት አይነት</th>
                                        @endrole
                                        <th>አጠቃላይ ውጤት(65%)</th>
                                        @role('president')
                                            <th>presidential</th>
                                        @endrole

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $j = 0;
                                    ?>
                                    @foreach ($hrs as $i => $hr)
                                        @if ($hr->form->position->position_type_id == 1)
                                            <tr>
                                                <td>{{ ++$j }}</td>
                                                <td>{{ $hr->form->full_name }}
                                                </td>
                                                @role('hr')
                                                    <td>{{ $hr->user->name }}</td>
                                                    <td>{{ $hr->performance }}</td>
                                                    <td>{{ $hr->experience }}</td>
                                                    <td>{{ $hr->resultbased }}</td>
                                                    <td>{{ $hr->exam }}</td>
                                                @endrole
                                                @role('president')
                                                    <td>{{ $hr->form->choice2->position }}</td>
                                                    <td>{{ $hr->form->edu_level->education_level }}</td>
                                                    <td>{{ $hr->form->education_type->education_type }}</td>
                                                @endrole

                                                <td>
                                                    {{ $hr->performance + $hr->experience + $hr->resultbased + $hr->exam }}

                                                </td>





                                                @role('president')
                                                    <td>
                                                        @if ($hr->status_president == 0)
                                                            <a class="btn btn-dark"
                                                                href="{{ route('secondhr.edit', $hr->id) }}">
                                                                evaluate
                                                            </a>
                                                        @endif
                                                    </td>
                                                @endrole

                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- {!! $hrs->links() !!} --}}


                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
