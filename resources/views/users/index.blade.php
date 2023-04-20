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


                                            {{-- <td>
                                                @foreach ($user->roles as $role)
                                                    <span class="badge bg-primary">{{ $role->name }}</span>
                                                @endforeach
                                                {{ $user->roles->implode('name', ', ') }}
                                            </td> --}}
                                            <td>

                                                <select data-target="{{ $user->id }}"
                                                    class="form-control  requestStatus  " name="name">


                                                    <option selected >action</option>
                                                    @foreach ($roles as $name)
                                                        @if ($user->roles->implode('name', ', ') == $name->name)
                                                            <option value="{{ $name->name }}" selected>
                                                                {{ $name->name }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $name->name }}">{{ $name->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </td>


                                            <td>

                                                <a href="{{ url('edit-user/' . $user->id) }}" data-toggle="tooltip"
                                                    data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                            </td>

                                            <td>
                                                <a href="{{ url('delete-user/' . $user->id) }}"> <button type="submit"
                                                        class="btn btn-danger pd-10" data-toggle="tooltip"
                                                        data-original-title="delete"> <i class=" icon-trash txt-danger"></i>
                                                    </button>
                                                    </i>
                                                </a>
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
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(".requestStatus").on("change", function() {
            if ($(this).val() != "") {

                $.ajax({
                    url: "user/change_status",

                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        "roles": $(this).val(),
                        "user": $(this).attr("data-target")
                    },
                    success: function(response) {
                        // console.log(data.roles);
                        if (response.roles) {
                            alert(" changed succussfully");
                        }
                    },
                    error: function(response) {}
                });
            }
        });
    </script>
@endsection
