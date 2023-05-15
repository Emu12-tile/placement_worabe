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

                {{-- <a href="{{ url('positionpres') }}" class=" btn btn-dark mr-25"> back </a> --}}
            </div>
            <h5 class="hk-sec-title">የተወዳዳሪዎች 1ኛ ምርጫ ከ ቡድን መሪ በላይ አጠቃላይ ውጤት </h5>

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
                                        {{-- <th>Submitted by</th>
                                        <th>Remark</th> --}}

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($hrs as $i => $hr)
                                        @if ($hr->status == 1)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $hr->hr->form->full_name }} <p>{{ $hr->hr->form->email }}</p>
                                                </td>



                                                <td>{{ $hr->hr->performance + $hr->hr->experience + $hr->hr->resultbased + $hr->hr->exam }}
                                                </td>
                                                <td>{{ $hr->presidentGrade }}</td>
                                                <td>{{ $hr->hr->performance + $hr->hr->experience + $hr->hr->resultbased + $hr->hr->exam + $hr->presidentGrade }}
                                                </td>
                                                {{-- <td>{{ $hr->submittedBy }}</td>
                                                <td>{{ $hr->remark }}</td> --}}

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
    <div class="container">


        <section class="hk-sec-wrapper mt-100">
            <div class="pull-right hk-sec-title">

                {{-- <a href="{{ url('positionpres') }}" class=" btn btn-dark mr-25"> back </a> --}}
            </div>
            <h5 class="hk-sec-title">የተወዳዳሪዎች 2ኛ ምርጫ ከ ቡድን መሪ በላይ አጠቃላይ ውጤት </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_6" class="table table-hover table-bordered w-100  pb-30">
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

                                    @foreach ($secondhrs as $i => $hr)
                                        @if ($hr->status == 1)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $hr->secondhr->form->full_name }} <p>
                                                        {{ $hr->secondhr->form->email }}</p>
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
