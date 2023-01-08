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

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>ተቁ</th>
                                        <th>የመጀመርያ ስም</th>
                                        <th>የ አባት ስም</th>
                                        <th>የ አያት ስም</th>

                                        {{-- <th>Specification</th> --}}
                                        <th>ኢሜይል</th>
                                        {{-- <th>Description</th> --}}
                                        <th>የ ትምህርት ደረጃ</th>
                                        {{-- <th>የ ትምህርት አይነት</th> --}}
                                        @role('president')
                                        <th>የፕሬዝዳንት ግምገማ</th>
                                        @endrole
                                          @role('hr')
                                        <th>የሰው ኃይል ግምገማ</th>
                                        @endrole
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($forms as $i => $form)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $form->firstName }}</td>
                                            <td>{{ $form->middleName }}</td>
                                            <td>{{ $form->lastName }}</td>
                                            <td>{{ $form->email }}</td>
                                            <td>{{ $form->admin->education_level }}</td>
                                           @role('president')

                               <td> <a class="btn btn-dark" href="{{ route('addHr',$form->id) }}"> evaluate</a></td>

                                      @endrole

                                       @role('hr')

                               <td> <a class="btn btn-dark" href=""> evaluate</a></td>

                                      @endrole
                                            {{-- <td>
                                                @if({{ $allow_edit }})
                                                edibutton
                                    @endif
                                    </td> --}}


                                    {{-- <td>{{ $form->educationtype->education_type }}</td> --}}
                                    {{-- <td>{{ $stock->specification }}</td> --}}



                                    </form>

                                    </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {!! $forms->links() !!}

                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
