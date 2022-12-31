    <!-- Vertical Nav -->
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <nav class="hk-nav hk-nav-light">
        <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i
                    data-feather="x"></i></span></a>
        <div class="nicescroll-bar">
            <div class="navbar-nav-wrap">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="" data-toggle="collapse" data-target="#dash_drp">
                            <i class="ion ion-ios-keypad"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>


                        <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="">CRM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard2.html">Project</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard3.html">Statistics</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <hr class="nav-separator">
                    <div class="nav-header">
                        <span>utils</span>
                        <span>GS</span>
                    </div>
                    <ul class="navbar-nav flex-column">

                        {{-- @role('admin') --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    Users
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('department.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    Department
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category.index') }}">
                                <i class="glyphicon glyphicon-th-list "style="font-size:18px"></i>
                                <span class="nav-link-text">
                                    Categories
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    Product
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stock.index') }}">
                                <i class="glyphicon glyphicon-signal"></i>
                                <span class="nav-link-text">
                                    Stock In
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('req.index') }}">
                                <i class="material-icons">add_shopping_cart</i>
                                <span class="nav-link-text">
                                    Request
                                </span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stock-out.index') }}">
                                <i class="fa fa-archive"></i>
                                <span class="nav-link-text">
                                    Stock Out
                                </span>
                            </a>
                        </li> --}}
                        {{-- @endrole --}}



                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.quantity.index') }}">
                                <i class="ion ion-md-archive"></i>
                                <span class="nav-link-text">
                                    Quantity
                                </span>
                            </a>
                        </li> --}}

                        {{-- </ul>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.staff.index') }}">
                            <i class="ion ion-ios-copy"></i>
                            <span class="nav-link-text">
                                Staff
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.siUnit.index') }}">
                            <i class="glyphicon glyphicon-eur"></i>
                            <span class="nav-link-text">
                                SI Unit
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.course.index') }}">
                            <i class="ion ion-ios-book"></i>
                            <span class="nav-link-text">
                                Course
                            </span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.equipment.index') }}">
                            <i class=" ion ion-ios-construct"></i>
                            <span class="nav-link-text">
                                Equipment
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.schedule.index') }}">
                            <i class="fa fa-calendar"></i>
                            <span class="nav-link-text">
                                Schedule
                            </span>
                        </a>
                    </li>

                </ul>

                </ul> --}}

                        {{-- <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#content_drp">
                            <i class="glyphicon glyphicon-glass"></i>
                            <span class="nav-link-text">Labratory</span>
                        </a>
                        <ul id="content_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.laboratory.index') }}">
                                            <i class="glyphicon glyphicon-glass"></i>
                                            <span class="nav-link-text"> Laboratory</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.laboratoryCourse.index') }}">
                                            <i class="ion ion-ios-filing"></i>
                                            <span class="nav-link-text">
                                                Laboratory Course
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.laboratoryEquipment.index') }}">
                                            <i class="ion ion-md-aperture"></i>
                                            <span class="nav-link-text">
                                                Labratory Equipment
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#content_exp">
                            <i class="ion ion-ios-filing"></i>
                            <span class="nav-link-text">Experiment</span>
                        </a>
                        <ul id="content_exp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.experiment.index') }}">
                                            <i class="ion ion-md-analytics"></i>
                                            <span class="nav-link-text">
                                                Experiment
                                            </span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.experimentEquipment.index') }}">
                                            <i class="ion ion-ios-filing"></i>
                                            <span class="nav-link-text">
                                                Experiment Equipment
                                            </span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="media-object.html">Media Object</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
 --}}



            </div>
        </div>
    </nav>
    <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
    <!-- /Vertical Nav -->

    <!-- Setting Panel -->
    <div class="hk-settings-panel">
        <div class="nicescroll-bar position-relative">
            <div class="settings-panel-wrap">
                <div class="settings-panel-head">
                    <img class="brand-img d-inline-block align-top" src="{{ asset('assets/dist/img/logo-light.png') }}"
                        alt="brand" />
                    <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span
                            class="feather-icon"><i data-feather="x"></i></span></a>
                </div>
                <hr>
                <h6 class="mb-5">Layout</h6>
                <p class="font-14">Choose your preferred layout</p>
                <div class="layout-img-wrap">
                    <div class="row">
                        <a href="javascript:void(0);" class="col-6 mb-30 active">
                            <img class="rounded opacity-70" src="{{ asset('assets/dist/img/layout1.png') }}"
                                alt="layout">
                            <i class="zmdi zmdi-check"></i>
                        </a>

                    </div>
                </div>
                <hr>
                <h6 class="mb-5">Navigation</h6>
                <p class="font-14">Menu comes in two modes: dark & light</p>
                <div class="button-list hk-nav-select mb-10">
                    <button type="button" id="nav_light_select"
                        class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                                class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="nav_dark_select"
                        class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                                class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <h6 class="mb-5">Top Nav</h6>
                <p class="font-14">Choose your liked color mode</p>
                <div class="button-list hk-navbar-select mb-10">
                    <button type="button" id="navtop_light_select"
                        class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                                class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="navtop_dark_select"
                        class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                                class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Scrollable Header</h6>
                    <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                </div>
                <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
            </div>
        </div>
        <img class="d-none" src="{{ asset('assets/dist/img/logo-light.png') }}" alt="brand" />
        <img class="d-none" src="{{ asset('assets/dist/img/logo-dark.png') }}" alt="brand" />
    </div>
    <!-- /Setting Panel -->
