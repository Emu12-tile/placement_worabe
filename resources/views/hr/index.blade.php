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
            <h5 class="hk-sec-title">የአመልካቾች ዝርዝር</h5>


            <div class="row" id="search_list">
                <div class="col-sm">
                    <div class="table-wrap">

                        <table id="datable_1" class="table table-hover  table-bordered w-100  pb-30">
                            <thead>
                                <tr>
                                    <th>ተቁ</th>
                                    <th>ሙሉ ስም</th>



                                    <th>የሚወዳደሩበት የስራ መደብ</th>




                                    @role('hr')
                                        <th> አሁን ያሉበት የትምህርት ደረጃና የትምህርት ዝግጅት</th>
                                        <th>የሰው ኃይል ግምገማ</th>
                                    @endrole
                                    @role('admin')
                                        <th colspan="2">Action</th>
                                    @endrole




                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($forms as $i => $form)
                                    @role('admin')
                                        @if ($form->isEditable == 0)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>
                                                    <form action="" method="POST"><a
                                                            href="{{ route('hr.show', $form->id) }}" class="mr-25"
                                                            data-toggle="tooltip"
                                                            data-original-title="show">{{ $form->full_name }} </a>
                                                    </form>
                                                </td>


                                                <td>{{ $form->position }}</td>




                                                <td>
                                                    <form action="{{ route('hr.destroy', $form->id) }}" method="POST">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger pd-10">
                                                            <a data-toggle="tooltip" data-original-title="delete"> <i
                                                                    class=" icon-trash txt-danger"></i> </a>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{ route('hr.update', $form->id) }}" method="POST">

                                                        @csrf
                                                        @method('PUT')

                                                        <button type="submit" class="btn btn-blue pd-10">
                                                            <a data-toggle="tooltip" data-original-title="approve"> <i
                                                                    class=" glyphicon glyphicon-ok pd-25"></i> </a>
                                                        </button>
                                                    </form>
                                                </td>



                                                </td>
                                            </tr>
                                        @endif
                                    @endrole
                                    @role('hr')
                                        @if ($form->isEditable == 1)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>
                                                    <form action="" method="POST"><a
                                                            href="{{ route('hr.show', $form->id) }}" class="mr-25"
                                                            data-toggle="tooltip"
                                                            data-original-title="show">{{ $form->full_name }} </a>
                                                </td>
                                                </form>

                                                <td>{{ $form->position }}</td>

                                                <td>
                                                    @foreach ($form->education as $edu)
                                                        ({{ $edu->edu_level->education_level }},{{ $edu->education_type->education_type }})
                                                        ,
                                                    @endforeach
                                                </td>



                                                <td> <a class="btn  btn-dark " type="submit" id="btn-evaluate"
                                                        href="{{ route('addHr', $form->id) }}">
                                                        evaluate</a>
                                                </td>




                                            </tr>
                                        @endrole
                                    @endif
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
@section('javascript')
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> --}}
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    </head>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function() {



            $("#btn-evaluate").submit(function(e) {
                // console.log('hi');
                if ($(this).val() != '') {

                    $("#btn-submit").prop("disabled", );

                } else {
                    $("#btn-submit").prop("disabled", false);

                }



            });
            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "search",
                    type: "GET",
                    data: {
                        'search': query
                    },
                    success: function(data) {
                        $('#search_list').html(data);
                    }
                });
                //end of ajax call
            });

        });
    </script>
