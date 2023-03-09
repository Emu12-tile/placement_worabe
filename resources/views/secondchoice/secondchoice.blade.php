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


            </div>
            <h5 class="hk-sec-title">ምርጫ 2 </h5>


            <div class="row" id="search_list">
                <div class="col-sm">
                    <div class="table-wrap">

                        <table id="datable_1" class="table table-hover  table-bordered w-100  pb-30">
                            <thead>
                                <tr>
                                    <th>ተቁ</th>
                                    <th>ሙሉ ስም</th>



                                    <th>የሚወዳደሩበት የስራ መደብ</th>

                                    <th>የ ትምህርት ደረጃ</th>

                                    <th>የ ትምህርት አይነት</th>
                                    @role('hr')
                                        <th>action</th>
                                        <th>የሰው ኃይል ግምገማ</th>
                                    @endrole






                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($forms as $i => $form)
                                    {{-- @if ($form->h_r_id == null) --}}
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>
                                            <form action="" method="POST"><a href="{{ route('hr.show', $form->id) }}"
                                                    class="mr-25" data-toggle="tooltip"
                                                    data-original-title="show">{{ $form->full_name }} </a>
                                        </td>
                                        </form>
                                        {{-- <td>{{$form->h_r_id}}</td> --}}
                                        <td>{{ $form->choice2->position }}</td>
                                        <td>{{ $form->edu_level->education_level }}</td>
                                        <td>{{ $form->education_type->education_type }}</td>

                                        @role('hr')
                                            <td>
                                                <form action="{{ route('secondhr.destroy', $form->id) }}" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger pd-10">
                                                        <a data-toggle="tooltip" data-original-title="delete"> <i
                                                                class=" icon-trash txt-danger"></i> </a>
                                                    </button>
                                                </form>
                                            </td>
                                            <td> <button><a class="btn " type="submit" id="btn-evaluate"
                                                        href="{{ route('addsecond', $form->id) }}"> evaluate</a></button>
                                            </td>
                                        @endrole

                                        </td>
                                    </tr>
                                    {{-- @endif --}}
                                @endforeach

                            </tbody>
                        </table>
                        {{-- {!! $forms->links() !!} --}}


                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
