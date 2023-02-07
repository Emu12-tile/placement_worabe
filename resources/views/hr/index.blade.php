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
            <h5 class="hk-sec-title">List of applicants </h5>


            <div class="row" id="search_list">
                <div class="col-sm">
                    <div class="table-wrap">

                        <table id="datable_1" class="table table-hover  table-bordered w-100  pb-30">
                            <thead>
                                <tr>
                                    <th>ተቁ</th>
                                    <th>ሙሉ ስም</th>



                                    <th>የስራ መደብ</th>

                                    <th>የ ትምህርት ደረጃ</th>

                                    <th>የ ትምህርት አይነት</th>
                                    @role('hr')
                                        <th>የሰው ኃይል ግምገማ</th>
                                    @endrole






                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($forms as $i => $form)
                                    @if ($form->h_r_id==null)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>
                                                <form action="" method="POST"><a
                                                        href="{{ route('hr.show', $form->id) }}" class="mr-25"
                                                        data-toggle="tooltip"
                                                        data-original-title="show">{{ $form->full_name }} </a>
                                            </td>
                                            </form>
                                            {{-- <td>{{$form->h_r_id}}</td> --}}
                                            <td>{{ $form->position->position }}</td>
                                            <td>{{ $form->edu_level->education_level }}</td>
                                            <td>{{ $form->education_type->education_type }}</td>

                                            @role('hr')
                                                <td> <button><a class="btn " type="submit" id="btn-evaluate"
                                                            href="{{ route('addHr', $form->id) }}"> evaluate</a></button>
                                                </td>
                                            @endrole

                                            </td>
                                        </tr>
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
                console.log('hi');
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
