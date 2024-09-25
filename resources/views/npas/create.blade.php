
<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>NPA Admin - Dashboard</title>
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
        <link href="{{asset('admin/css/app.min.css')}}" rel="stylesheet" type="text/css" />


        <link href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/default.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/default.date.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/plugins/timepicker/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/datepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">


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
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <form method="POST" action="{{ route('truck.store') }}">
                                        @csrf
                                        <div class="col-lg-8">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Company Name/Owners Name</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="cname"  value="" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Address</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="address" value="" id="example-email-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-tel-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Chassis/Engine Number</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="enumber" value="" id="example-tel-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-password-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Fee</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="number" name="fee" value="" id="example-password-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-number-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Phone Number</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="number" name="phone" value="" id="example-number-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="exampleColorInput" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Vehicle Registration Number</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="vregistration" value="" id="example-password-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Vehicle Make</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" name="vmake" value="" >
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Issue Date</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text"  data-provide="datepicker" data-date-format="d M, yyyy" placeholder="2017-06-04" id="mdate" name="idate" >


                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-sm-4 form-label align-self-center mb-lg-0 text-end">Expiry Date</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text"  data-provide="datepicker" data-date-format="d M, yyyy"  placeholder="2017-06-04" id="mdate" name="edate" >
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Register</button>
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
        <script src="{{asset('admin/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/js/metismenu.min.js')}}"></script>
        <script src="{{asset('admin/js/waves.js')}}"></script>
        <script src="{{asset('admin/js/feather.min.js')}}"></script>
        <script src="{{asset('admin/js/simplebar.min.js')}}"></script>

        <script src="{{asset('admin/js/moment.js')}}"></script>
        <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{asset('admin/plugins/apex-charts/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
        <script src="{{asset('admin/pages/jquery.analytics_dashboard.init.js')}}"></script>


        <script src="{{asset('admin/pages/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('admin/js/datepicker.js')}}"></script>
        <script src="{{asset('admin/js/picker.date.js')}}"></script>
        <script src="{{asset('admin/js/picker.js')}}"></script>
        <script src="{{asset('admin/js/jquery.1.7.0.js')}}"></script>
        <script src="http://code.jquery.com/jquery-1.10.2.js')}}"></script>
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js')}}"></script>



        <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{asset('admin/plugins/select2/select2.min.js')}}"></script>
        <script src="{{asset('admin/plugins/huebee/huebee.pkgd.min.js')}}"></script>
        <script src="{{asset('admin/plugins/timepicker/bootstrap-material-datetimepicker.js')}}"></script>
        <script src="{{asset('admin/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
        <script src="{{asset('admin/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

        <script src="{{asset('admin/pages/jquery.forms-advanced.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('admin/js/app.js')}}"></script>

        <script>
  $(function() {
    $( "#datepicker" ).datepicker( "option", "dateFormat", 'd M, yyyy');
  });
  </script>

    </body>
</html>
