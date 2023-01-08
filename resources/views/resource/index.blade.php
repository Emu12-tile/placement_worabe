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

                <a href="{{ route('hr.index') }}" class="mr-25"> back </a>
            </div>
            <h5 class="hk-sec-title">Evaluation </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>ተ.ቁ</th>
                                        <th>ሙሉ ስም</th>

                                        <th>ለትምህርት ዝግጅት የሚሰጥ ነጥብ</th>
                                        <th>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</th>
                                        <th>ለውጤት ተኮር ምዘና</th>
                                        <th>ለፈተና ውጤት</th>
                                        <th>አጠቃላይ ውጤት(65%)</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hrs as $i => $hr)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $hr->form->firstName }}
                                            </td>

                                            <td>{{ $hr->performance }}</td>
                                            <td>{{ $hr->experience }}</td>
                                            <td>{{ $hr->resultbased }}</td>
                                            <td>{{ $hr->exam }}</td>
                                            <td>{{ $hr->performance + $hr->experience + $hr->resultbased + $hr->exam }}
                                            </td>



                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {!! $hrs->links() !!}

                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
