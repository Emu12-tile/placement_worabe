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

                <a href="{{ route('secondhr.index') }}" class="mr-25"> back </a>
            </div>
            <h5 class="hk-sec-title">Evaluation </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_3" class="table table-hover table-bordered w-100  pb-30">
                                <thead>
                                    <tr>
                                        <th>ተ.ቁ</th>
                                        <th> ስም</th>



                                        <th> በሰው ኃብት ውጤት (65%)</th>

                                        <th> በበላይ አመራር ለአመራርነት ክህሎት የሚሠጥ ነጥብ(35%)</th>
                                        <th>አጠቃላይ ውጤት(100%)</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($hrs as $i => $hr)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $hr->form->full_name }}
                                            </td>



                                            <td>{{ $hr->performance + $hr->experience + $hr->resultbased + $hr->exam }}
                                            </td>
                                            <td>{{ $hr->presidentGrade }}</td>
                                            <td>{{ $hr->performance + $hr->experience + $hr->resultbased + $hr->exam + $hr->presidentGrade }}

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
