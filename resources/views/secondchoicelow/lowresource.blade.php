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

                <a href="{{ route('pos2') }}" class="btn btn-dark mr-25"> back </a>
            </div>
            <h5 class="hk-sec-title">የተወዳዳሪዎች 2ኛ ምርጫ ከ ቡድን መሪ በታች አጠቃላይ ውጤት </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">

                        <table id="datable_1" class="table table-hover table-bordered w-100  pb-30">
                            <thead>
                                <tr>
                                    <th>ተ.ቁ</th>
                                    <th>ሙሉ ስም</th>
                                    <th>ውጤት ሰጪ</th>

                                    <th>ለትምህርት ዝግጅት የሚሰጥ ነጥብ</th>
                                    <th>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</th>
                                    <th>ለውጤት ተኮር ምዘና</th>

                                    <th>አጠቃላይ ውጤት(100%)</th>
                                    <th>Action</th>
                                    <th>Submit</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($hrs as $i => $hr)
                                    @if ($hr->form->choice2->position_type_id == 2)
                                        <?php
                                        $j = 0;
                                        ?>
                                        <tr>
                                            <td>{{ ++$j }}</td>
                                            <td>{{ $hr->form->full_name }}
                                            </td>
                                            <td>{{ $hr->user->name }}</td>
                                            <td>{{ $hr->performance }}</td>
                                            <td>{{ $hr->experience }}</td>
                                            <td>{{ $hr->resultbased }}</td>

                                            <td>{{ $hr->performance + $hr->experience + $hr->resultbased }}
                                            </td>
                                            <td> <a class="btn  bg-blue-dark-4 text-white " type="submit" id="btn-evaluate"
                                                    href="{{ route('secondhr.edit', $hr->id) }}">
                                                    Edit</a>


                                            </td>
                                            <td>
                                                <form action="{{ url('update-lowsecondhr/' . $hr->id) }}" method="POST"
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

                        </table>
                        {{-- {!! $hrs->links() !!} --}}
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
