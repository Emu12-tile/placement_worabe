@extends('layouts.admin')

@section('content')
    {{-- TODO change this to componnent --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @role('hr')
        <div class="container">

            <section class="hk-sec-wrapper mt-100">
                <div class="pull-right hk-sec-title">

                    <a href="{{ url('pos') }}" class=" btn btn-dark mr-25"> back </a>
                </div>
                <h5 class="hk-sec-title">የተወዳዳሪዎች 1ኛ ምርጫ ከቡድን መሪ በላይ አጠቃላይ ውጤት </h5>
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



                                            {{-- <th>አጠቃላይ ውጤት(100%)</th> --}}

                                            <th>አጠቃላይ ውጤት(65%)</th>
                                            <th>Action</th>

                                            <th>Submission</th>


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

                                                    <td>{{ $hr->user->name }}</td>
                                                    <td>{{ $hr->performance }}</td>
                                                    <td>{{ $hr->experience }}</td>
                                                    <td>{{ $hr->resultbased }}</td>
                                                    <td>{{ $hr->exam }}</td>




                                                    <td>
                                                        {{ $hr->performance + $hr->experience + $hr->resultbased + $hr->exam }}

                                                    </td>

                                                    <td> <a class="btn  bg-blue-dark-4 text-white " type="submit"
                                                            id="btn-evaluate" href="{{ route('resource.edit', $hr->id) }}">
                                                            Edit</a>


                                                    </td>
                                                    <td>
                                                        <form action="{{ url('update-resource/' . $hr->id) }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf

                                                            @method('PUT')
                                                            <button class="btn  bg-green-dark-4 text-white "
                                                                value="{{ $hr->id }}" type="submit" id="btn_evaluate">
                                                                Submit</button>
                                                        </form>

                                                    </td>







                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>



                        </div>
                    </div>
                </div>

            </section>
        </div>
    @endrole

@endsection
