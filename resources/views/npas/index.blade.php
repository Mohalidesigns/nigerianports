
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
        <!-- <link href="{asset('admin/plugins/datatables/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{asset('admin/plugins/datatables/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" /> -->
        <!-- Responsive datatable examples -->
        <link href="{asset('admin/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />




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

                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            @if(session()->get('success'))
                            <div class="alert alert-success">
                              {{ session()->get('success') }}
                            </div><br/>
                          @endif
                                <div class="card-header">
                                    <h4 class="card-title">List of Registered Trucks</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <table  id="myTable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                        <th>SN</th>
                                            <th>Company Name</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Vehicle Reg.Number</th>
                                            <th>Chassis/Engine Number</th>
                                            <th>Vehicle Make</th>
                                            <th>Fee</th>
                                            <th>Issue Date</th>
                                            <th>Expiry Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach($npas as $npa)
                                        <tr>
                                            <td><b>{{++$i}}.</b></td>
                                            <td><a href="{{route('npas.show',$npa->id)}}">{{$npa->cname}}</a> </td>
                                            <td>{{$npa->phone}}</td>
                                            <td>{{$npa->address}}</td>
                                            <td>{{$npa->vregistration}}</td>
                                            <td>{{$npa->enumber}}</td>
                                            <td>{{$npa->vmake}}</td>
                                            <td>{{$npa->fee}}</td>
                                            <td>{{$npa->idate}}</td>
                                            <td>{{$npa->edate}}</td>


                                            @if (Auth::user()->hasRole('super-admin'))
                                            <td><a href="{{ route('npas.edit',$npa->id)}}" class="btn btn-primary">Edit</a></td>
                                            <td>
                                                <form action="{{ route('npas.destroy', $npa->id)}}" method="post">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            @endif
                                        </tr>
                                         @endforeach
                                    </tbody>
                                    </table>
                                    <!-- {!! $npas->links() !!} -->
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->

                @include('includes.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->




        <!-- jQuery  -->
        <script src="{{asset('./admin/js/jquery.min.js')}}"></script>
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
        <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Required datatable js -->
      <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/dataTables.bootstrap5.min.js')}}"></script>

        <script src="{{asset('admin/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/buttons.colVis.min.js')}}"></script>

        <script src="{{asset('admin/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/pages/jquery.datatable.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/js/app.js')}}"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>


        <script ></script>
        <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        } );
        </script>

    </body>
</html>
