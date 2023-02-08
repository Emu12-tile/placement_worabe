@extends('layouts.admin')


    @extends('layouts.admin')

@section('content')
    <div class="hk-row">
        <div class="col-lg-3 col-md-6 ">
            <div class="card card-sm ">
                <div class="card-body ">
                    <div class="d-flex justify-content-between mb-5 ">
                        <div>
                            <span class="d-block font-15 text-dark font-weight-500">Applicants</span>
                        </div>
                        <div>
                            <span class="text-success font-14 font-weight-500"> {{ \App\Models\Form::count() }}</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="d-block display-4 text-dark mb-5"><i
                                class='glyphicon glyphicon-user'style="font-size:48px;color:black">
                            </i></span>
                        <small class="d-block"></small>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <span class="d-block font-15 text-dark font-weight-500">Evaluated</span>
                        </div>
                        <div>
                            <span class="text-success font-18 font-weight-500">
                                {{-- @if ($pres == 1) --}}
                                {{ \App\Models\HR::query()->where('status_president', '==', '1')->select('presidentGrade')->distinct()->count() }}

                                {{-- {{ $pres->count('president_status',1) }} --}}
                                {{-- @endif --}}
                            </span>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="d-block display-4 text-dark mb-5"><i
                                class='glyphicon glyphicon-th-list 'style="font-size:48px;color:black">
                            </i></span>
                        <small class="d-block"></small>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <span class="d-block font-15 text-dark font-weight-500">Stock in</span>
                        </div>
                        <div>
                            <span
                                class="text-success font-18 font-weight-500">{{ \App\Models\HR::query()->where('status_president', '==', '0')->select('presidentGrade')->distinct()->count() }}</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="d-block display-4 text-dark mb-5"><i
                                class='glyphicon glyphicon-signal'style="font-size:48px;color:green">
                            </i></span>
                        <small class="d-block"></small>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <span class="d-block font-15 text-dark font-weight-500">Request</span>
                        </div>
                        <div>
                            <span class="text-success font-18 font-weight-500">
                                

                                {{-- {{ \App\Models\HR::query()->where('performance', '+', 'exam','>=','40')->select('presidentGrade')->distinct()->count() }}</span> --}}
                        </div>
                    </div>
                    <div class="text-center">
                        {{-- <span class="d-block display-4 text-dark mb-5"><i
                                class='material-icons'style="font-size:48px;color:blue">add_shopping_cart
                            </i></span> --}}
                        <small class="d-block"></small>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card card-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <span class="d-block font-15 text-dark font-weight-500">Stock Out</span>
                        </div>
                        <div>
                            {{-- <span class="text-success font-14 font-weight-500">{{ \App\Models\StockOut::count() }}</span> --}}
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="d-block display-4 text-dark mb-5"><i
                                class='fa fa-archive'style="font-size:48px;color:red">
                            </i></span>
                        <small class="d-block"></small>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <span class="d-block font-15 text-dark font-weight-500">Products</span>
                        </div>
                        <div>
                            {{-- <span class="text-success font-14 font-weight-500"> {{ \App\Models\Product::count() }}</span> --}}
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="d-block display-4 text-dark mb-5"><i
                                class='fa fa-bar-chart-o'style="font-size:48px;color:">
                            </i></span>
                        <small class="d-block"></small>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection


