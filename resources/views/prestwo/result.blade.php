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

                <a href="{{ route('positionpres2') }}" class=" btn btn-dark mr-25"> back </a>
            </div>
            <h5 class="hk-sec-title">በኮሚቴና በበላይ አመራር የተሰጠ አጠቃላይ ውጤት(ከ100%) </h5>

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

                                    @foreach ($pres as $i => $hr)
                                        @if ($hr->status == 1)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $hr->secondhr->form->full_name }}
                                                </td>



                                                <td>{{ $hr->secondhr->performance + $hr->secondhr->experience + $hr->secondhr->resultbased + $hr->secondhr->exam }}
                                                </td>
                                                <td>{{ $hr->presidentGrade }}</td>
                                                <td>{{ $hr->secondhr->performance + $hr->secondhr->experience + $hr->secondhr->resultbased + $hr->secondhr->exam + $hr->presidentGrade }}
                                                </td>

                                            </tr>
                                        @endif
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- {!! $pres->links() !!} --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
