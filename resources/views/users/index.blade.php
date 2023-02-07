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
                    <div class="table-wrap ">
                        <div class="table-responsive">
                            <table id="datable_1" class="table table-hover table-bordered w-100  pb-30">
                                <thead>
                                    <tr>
                                        <th>ተ.ቁ</th>
                                        <th>ሙሉ ስም</th>
                                        <th>ውጤት ሰጪ</th>
                                        <th>ለትምህርት ዝግጅት የሚሰጥ ነጥብ</th>
                                        <th>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</th>
                                        <th>ለውጤት ተኮር ምዘና</th>

                                        <th>ለፈተና ውጤት</th>
                                        <th>አጠቃላይ ውጤት(65%)</th>

                                        {{-- <th>አጠቃላይ ውጤት(100%)</th> --}}
                                        @role('president')
                                            <th>presidential</th>
                                        @endrole
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hrs as $i => $hr)

                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $hr->form->firstName }}
                                                </td>
                                                <td>{{ $hr->user->name }}</td>
                                                <td>{{ $hr->performance }}</td>
                                                <td>{{ $hr->experience }}</td>
                                                <td>{{ $hr->resultbased }}</td>
                                                <td>{{ $hr->exam }}</td>

                                                <td>
                                                    {{ $hr->performance + $hr->experience + $hr->resultbased + $hr->exam }}

                                                </td>





                                                @role('president')
                                                    <td> <a class="btn btn-dark" href="{{ route('resource.edit', $hr->id) }}">
                                                            evaluate
                                                        </a></td>
                                                @endrole


                                            </tr>
                                            @endif
                                       

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
