
<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>truck Admin - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{asset('admin/images/favicon.ico')}}">

        <!-- jvectormap -->
        <link href="{asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">

        <!-- App css -->
        <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="">
        <!-- Left Sidenav -->

        @include('includes.sidebar')
        <!-- end left-sidenav-->


        <div class="page-wrapper">
            <!-- Top Bar Start -->
            @include('includes.topbar')
            <!-- Top Bar End -->
            <!-- Page Content-->
            <div class="page-content">
            <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Dashboard</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Nigerian Ports Authority</a></li>
                                        </ol>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">New Truck Registration</h4>
                                </div><!--end card-header-->
                                @if(session()->get('success'))
                            <div class="alert alert-success">
                              {{ session()->get('success') }}
                            </div><br/>
                          @endif
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <form method="POST" action="{{ route('truck.update', $truck->id) }}"  enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-lg-8">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Company Name/Owners Name</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="cname" value='{{ $truck->cname }}'>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-tel-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Company Address</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="caddress" value='{{ $truck->caddress }}'>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-password-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Phone Number</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="number"  name="cnumber" value='{{ $truck->cnumber }}'>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-number-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Company Email</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="number" name="cemail" value='{{ $truck->cemail }}'>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="exampleColorInput" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Registration Number</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="regnumber" value='{{ $truck->regnumber }}'>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Chassis Number</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="chassis" value='{{ $truck->chassis }}'>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Truck Make</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="truckmake" value='{{ $truck->truckmake }}'>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Supervised By</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="supo" value='{{ $truck->supo }}'>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                        </form>


                                        <div class="col-lg-2"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->


                </div><!-- container -->

                @include('includes.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->




        <!-- jQuery  -->
        <script src="admin/js/jquery.min.js"></script>
        <script src="admin/js/bootstrap.bundle.min.js"></script>
        <script src="admin/js/metismenu.min.js"></script>
        <script src="admin/js/waves.js"></script>
        <script src="admin/js/feather.min.js"></script>
        <script src="admin/js/simplebar.min.js"></script>
        <script src="admin/js/moment.js"></script>
        <script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="admin/plugins/apex-charts/apexcharts.min.js"></script>
        <script src="admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="admin/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="admin/pages/jquery.analytics_dashboard.init.js"></script>

        <!-- App js -->
        <script src="admin/js/app.js"></script>

    </body>
</html>
