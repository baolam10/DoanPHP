@extends('layout')
@section('css')
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- third party css -->
        <link href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('main-content')
<div class="container-fluid">
                <!-- end page title --> 
                <h2 style="text-align: center">Danh sách thống kê người dùng</h2>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <h4 class="header-title mt-0 mb-2">Danh sách quản trị viên</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#f05050 "
                                        data-bgColor="#F9B9B9" value="58"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1"> {{DB::table('quan_tri_vien')->count()}} </h2>
                                    <p class="text-muted mb-0">Bản thống kê danh sách</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Danh sách quản lý người chơi</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7"
                                        data-bgColor="#e8e7f4" value="80"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('nguoi_choi')->count()}} </h2>
                                    <p class="text-muted mb-0">Bản thống kê danh sách</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->
                    </div><!-- end col -->
                    
                
            <h2 style="text-align: center">Danh sách thống kê kiến thức</h2>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card-box widget-user">
                            <img src="assets/images/users/user-1.jpg" class="img-responsive rounded-circle img-thumbnail" alt="user">
                            <div class="mt-3">
                                <h5 class="mb-1">Danh sách các lĩnh vực</h5>
                                <p class="text-muted mb-0 font-13">dotranbaolam@gmail.com</p>
                                <div class="user-position">
                                     {{DB::table('linh_vuc')->count()}} </h2>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box widget-user">
                            <img src="assets/images/users/user-2.jpg" class="img-responsive rounded-circle img-thumbnail" alt="user">
                            <div class="mt-3">
                                <h5 class="mb-1"> Danh sách câu hỏi</h5>
                                <p class="text-muted mb-0 font-13">dotranbaolam@gmail.com</p>
                                <div class="user-position">
                                    {{DB::table('cau_hoi')->count()}} </h2>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box widget-user">
                            <img src="assets/images/users/user-2.jpg" class="img-responsive rounded-circle img-thumbnail" alt="user">
                            <div class="mt-3">
                                <h5 class="mb-1"> Danh sách Credit</h5>
                                <p class="text-muted mb-0 font-13">dotranbaolam@gmail.com</p>
                                <div class="user-position">
                                    {{DB::table('goi_credit')->count()}} </h2>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <h2 style="text-align: center">Danh sách thống kê các cấu hình App</h2>
                <!-- end row -->
               <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-sm bg-soft-purple rounded">
                                        <i class="fe-aperture avatar-title font-22 text-purple"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark my-1"> {{DB::table('cau_hinh_app')->count()}} </h2></h3>
                                        <p class="text-muted mb-1 text-truncate">January's Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h6 class="text-uppercase">Danh sách cấu hình App <span class="float-right">60%</span></h6>
                                <div class="progress progress-sm m-0">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-sm bg-soft-success rounded">
                                        <i class="fe-shopping-cart avatar-title font-22 text-success"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark my-1"> {{DB::table('cau_hinh_diem_cau_hoi')->count()}} </h2></h3>
                                        <p class="text-muted mb-1 text-truncate">January's Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h6 class="text-uppercase">Danh sách cấu hình điểm câu hoi<span class="float-right">49%</span></h6>
                                <div class="progress progress-sm m-0">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: 49%">
                                        <span class="sr-only">49% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-sm bg-soft-primary rounded">
                                        <i class="fe-bar-chart-2 avatar-title font-22 text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark my-1"><h3 class="text-dark my-1"> {{DB::table('cau_hinh_tro_giup')->count()}} </h2></h3>
                                        <p class="text-muted mb-1 text-truncate">January's Sales</p></h3>
                                        <p class="text-muted mb-1 text-truncate">Payouts</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h6 class="text-uppercase">Danh sách cấu hình trợ giúp <span class="float-right">18%</span></h6>
                                <div class="progress progress-sm m-0">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
                                        <span class="sr-only">18% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
</div> <!-- end container -->
@endsection
@section('js')
        <script src="{{asset('assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>
        <script src="{{asset('assets/libs/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
        <!-- third party js ends -->

        <!-- Dashboard init -->
        <script src="{{asset('assets/js/pages/dashboard-2.init.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
@endsection