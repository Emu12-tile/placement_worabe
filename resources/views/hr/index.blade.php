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
            <h5 class="hk-sec-title">List if applicants </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>First Name</th>
                                        <th>የ አባት ስም</th>
                                        <th>የ አያት ስም</th>
                                        <th></th>
                                        {{-- <th>Specification</th> --}}
                                        <th>ኢሜይል</th>
                                        {{-- <th>Description</th> --}}
                                        <th>የ ትምህርት ደረጃ</th>
                                        <th>የ ትምህርት ደረጃ</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($forms as $i => $form)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                             <td>{{ $form->firstName }}</td>
                                             <td>{{ $form->middleName }}</td>
                                             <td>{{ $form->lastName }}</td>
                                             <td>{{ $form->firstName }}</td>
                                            <td>{{ $form->admin->education_level }}</td>

                                            <td>{{ $form->educationtype->education_type }}</td>
                                            {{-- <td>{{ $stock->specification }}</td> --}}

                                            
                                            <td> <a class="btn btn-dark" href="{{ route('addReq', $stock->id) }}"> Add to
                                                    Cart</a></td>
                                            <td>
                                                <form action="{{ route('stock.destroy', $stock->id) }}" method="POST">
                                                    <a href="{{ route('stock.show', $stock->id) }}" class="mr-25"
                                                        data-toggle="tooltip" data-original-title="show"> <i
                                                            class="icon-eye"></i> </a>
                                                    <a href="{{ route('stock.edit', $stock->id) }}" class="mr-25"
                                                        data-toggle="tooltip" data-original-title="Edit"> <i
                                                            class="icon-pencil"></i> </a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">
                                                        <a data-toggle="tooltip" data-original-title="delete"> <i
                                                                class=" icon-trash txt-danger"></i> </a>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {!! $stocks->links() !!}

                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
