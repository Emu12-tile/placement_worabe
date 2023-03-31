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

                <a href="{{ url('category-add') }}" class="mr-25" data-toggle="tooltip" data-original-title="add">
                    <i class="icon-plus icon-4x"> </i> add </a>
            </div>
            <h5 class="hk-sec-title">በአስተዳዳሪው የተሞላ መረጃ </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>ተ.ቁ</th>
                                        <th>የስራ መደብ ክፍል</th>
                                        <th>status</th>
                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $i => $admin)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $admin->category }}
                                            </td>
                                            <td>
                                                <select data-target="{{ $admin->id }}"
                                                    class="form-control  requestStatus"
                                                    @error('catstatus') is-invalid @enderror" name="catstatus"
                                                    id="catstatus">

                                                    <option selected disabled>action</option>

                                                    @foreach ($status as $name)
                                                        @if ($admin->catstatus == $name->status)
                                                            <option value="{{ $name->status }}" selected>{{ $name->status }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $name->status }}">{{ $name->status }}</option>
                                                        @endif
                                                    @endforeach

                                                </select>
                                            </td>


                                            <td>
                                                <a href="{{ url('edit_category/' . $admin->id) }}" data-toggle="tooltip"
                                                    data-original-title="Edit"> <i class="icon-pencil"></i> </a>

                                                <a href="{{ url('delete-category/' . $admin->id) }}">



                                                    <button type="submit" class="btn btn-danger pd-10"
                                                         data-toggle="tooltip" data-original-title="delete"> <i
                                                                class=" icon-trash txt-danger"></i>
                                                    </button>
                                                </a>


                                            </td>
                                            {{-- <td>{{ $admin->performance + $hr->experience + $hr->resultbased + $hr->exam }} --}}




                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {!! $admins->links() !!}

                        </div>
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
                // console.log("test")
                $.ajax({
                    url: "{{ route('chan_status') }}",

                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: {
                        "status": $(this).val(),
                        "admin": $(this).attr("data-target")
                    },
                    success: function(response) {
                        if (response.status) {
                            alert("Status changed succussfully");
                        }
                    },
                    error: function(response) {}
                });
            }
        });
    </script>
@endsection
