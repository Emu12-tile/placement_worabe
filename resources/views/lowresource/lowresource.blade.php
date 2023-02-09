@extends('layouts.admin')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">

        <section class="hk-sec-wrapper mt-100">
            <div class="pull-right hk-sec-title">

                <a href="{{ route('hr.index') }}" class="mr-25"> back </a>
            </div>
            <h5 class="hk-sec-title">Evaluation </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        {{-- <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>ተ.ቁ</th>
                                        <th>ሙሉ ስም</th>

                                        <th>ለትምህርት ዝግጅት የሚሰጥ ነጥብ</th>
                                        <th>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</th>
                                        <th>ለውጤት ተኮር ምዘና</th>

                                        <th>አጠቃላይ ውጤት(100%)</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hrs as $i => $hr)
                                        @if ($hr->form->position->position_type_id == 2)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $hr->form->firstName }}
                                                </td>

                                                <td>{{ $hr->performance }}</td>
                                                <td>{{ $hr->experience }}</td>
                                                <td>{{ $hr->resultbased }}</td>

                                                <td>{{ $hr->performance + $hr->experience + $hr->resultbased }}
                                                </td>



                                            </tr>
                                        @endif
                                    @endforeach

                                </tbody>
                            </table>
                            {!! $hrs->links() !!}

                        </div> --}}
                        {{-- datable_3 --}}
                        <table id="datable_3" class="table table-hover table-bordered w-100  pb-30">
                            <thead>
                                <tr>
                                    <th>ተ.ቁ</th>
                                    <th>ሙሉ ስም</th>
                                    <th>ውጤት ሰጪ</th>

                                    <th>ለትምህርት ዝግጅት የሚሰጥ ነጥብ</th>
                                    <th>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</th>
                                    <th>ለውጤት ተኮር ምዘና</th>

                                    <th>አጠቃላይ ውጤት(100%)</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hrs as $i => $hr)
                                    @if ($hr->form->position->position_type_id == 2)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $hr->form->full_name }}
                                            </td>
                                            <td>{{ $hr->user->name }}</td>
                                            <td>{{ $hr->performance }}</td>
                                            <td>{{ $hr->experience }}</td>
                                            <td>{{ $hr->resultbased }}</td>

                                            <td>{{ $hr->performance + $hr->experience + $hr->resultbased }}
                                            </td>



                                        </tr>
                                    @endif
                                @endforeach
                                {{-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot> --}}
                        </table>
                        {{-- {!! $hrs->links() !!} --}}
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
