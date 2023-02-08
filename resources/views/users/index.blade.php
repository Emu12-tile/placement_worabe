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

                <a href="{{ url('add-user') }}" class="mr-25"> ADD </a>
            </div>
            <h5 class="hk-sec-title">Evaluation </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap ">
                        <div class="table-responsive">
                            <table id="datable_1" class="table table-hover table-bordered w-100  pb-30">
                                <thead>
                                    <tr>
                                        <th>ተ.ቁ</th>
                                        <th>ሙሉ ስም</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>edit</th>
                                        <th>delete</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $i => $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            {{-- <td>{{DB::table('roles')->pluck('name', 'name')->first()}}</td> --}}
                                            <td>

                                            </td>

                                            <td>
                                                <a href="{{ url('delete-user/'. $user->id) }}"> <button type="submit"
                                                        class="btn btn-danger pd-10">
                                                        <a data-toggle="tooltip" data-original-title="delete"> <i
                                                                class=" icon-trash txt-danger"></i> </a>
                                                    </button>
                                                    </i>
                                                </a>
                                            </td>

                                            <td>

                                                <a href="{{ url('edit-user/'. $user->id) }}" data-toggle="tooltip"
                                                    data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                            </td>





                                            </td>







                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        {{-- {!! $hrs->links() !!} --}}


                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
