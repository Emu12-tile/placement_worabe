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
                {{-- <a href="{{ url('pos') }}" class="btn btn-dark mr-25"> back </a> --}}

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



                                    <th> action</th>




                                    {{-- <th>የሚወዳደሩበት የስራ መደብ</th> --}}










                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 0;
                                ?>
                                @foreach ($forms as $i => $form)
                                    @role('admin')
                                        @if ($form->isEditable == 0)
                                            <tr>
                                                <td>{{ ++$j }}</td>
                                                <td>

                                                    {{ $form->full_name }}



                                                </td>
                                                <td><a class="btn  bg-blue-dark-4 text-white btn-sm" type="submit"
                                                        id="btn-evaluate"
                                                        href="{{ url('forms/edit', $form->id) }}">Edit</a>
                                                </td>



                                                {{-- <td>{{ $form->position }}</td> --}}








                                            </tr>
                                        @endif
                                    @endrole
                                @endforeach

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection


