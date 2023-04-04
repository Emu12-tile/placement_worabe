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

                <a href="{{ url('resultwo') }}" class=" btn btn-dark mr-25"> back </a>
            </div>
            <h5 class="hk-sec-title">የተወዳዳሪዎች 1ኛ ምርጫ ከ ቡድን መሪ በላይ አጠቃላይ ውጤት </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_1" class="table table-hover table-bordered w-100  pb-30">
                                <thead>
                                    <tr>
                                        <th>ተ.ቁ</th>
                                        <th> ስም</th>



                                        <th> በሰው ኃብት ውጤት (65%)</th>

                                        <th> በበላይ አመራር ለአመራርነት ክህሎት የሚሠጥ ነጥብ(35%)</th>
                                        <th>አጠቃላይ ውጤት(100%)</th>

                                        <th>Action</th>
                                        <th>Submission</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($pres as $i => $hr)
                                        @if ($hr->status == 0)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>
                                                    <form action="" method="POST"><a
                                                            href="{{ route('hr.show', $hr->secondhr->form->id) }}"
                                                            class="mr-25" data-toggle="tooltip"
                                                            data-original-title="show">{{ $hr->secondhr->form->full_name }}</a>
                                                    </form>
                                                </td>



                                                <td>{{ $hr->secondhr->performance + $hr->secondhr->experience + $hr->secondhr->resultbased + $hr->secondhr->exam }}
                                                </td>
                                                <td>{{ $hr->presidentGrade }}</td>
                                                <td>{{ $hr->secondhr->performance + $hr->secondhr->experience + $hr->secondhr->resultbased + $hr->secondhr->exam + $hr->presidentGrade }}
                                                </td>
                                                <td> <a class="btn  bg-blue-dark-4  text-white" type="submit"
                                                        id="btn-evaluate"
                                                        href="{{ route('choice2evaluation.edit', $hr->id) }}">
                                                        Edit</a>


                                                </td>
                                                <td>
                                                    <form action="{{ url('update-choice2evaluation/' . $hr->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        @method('PUT')
                                                        <button class="btn   bg-green-dark-4  text-white " type="submit"
                                                            id="btn-evaluate">
                                                            Submit</button>
                                                    </form>

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
