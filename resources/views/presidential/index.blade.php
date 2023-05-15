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

                <a href="{{ url('result-choice1') }}" class=" btn btn-dark mr-25"> back </a>
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
                                        <th>Submit</th>



                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($pres as $i => $hr)
                                        @if ($hr->status == 0)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>
                                                    <form action="" method="POST"><a
                                                            href="{{ route('hr.show', $hr->hr->form->id) }}" class="mr-25"
                                                            data-toggle="tooltip"
                                                            data-original-title="show">{{ $hr->hr->form->full_name }}</a>
                                                    </form>
                                                </td>



                                                <td>{{ $hr->hr->performance + $hr->hr->experience + $hr->hr->resultbased + $hr->hr->exam }}
                                                </td>
                                                <td>{{ $hr->presidentGrade }}</td>
                                                <td>{{ $hr->hr->performance + $hr->hr->experience + $hr->hr->resultbased + $hr->hr->exam + $hr->presidentGrade }}
                                                </td>
                                                <td> <a class="btn  bg-blue-dark-4  text-white" type="submit"
                                                        id="btn-evaluate" href="{{ route('evaluation.edit', $hr->id) }}">
                                                        Edit</a>


                                                </td>
                                                <td>
                                                    <form action="{{ url('update-evaluation/' . $hr->id) }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf

                                                        @method('PUT')
                                                        <button class="btn bg-green-dark-4 text-white " type="submit"
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
