
<!doctype html>
<html lang="en">

<head>
<title>NPA :: Dashboard</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="">
<meta name="author" content="">

<link rel="icon" href="#" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('print/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('print/css/font-awesome.min.css')}}">

  <link href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css')}}" rel="stylesheet">


<link rel="stylesheet" href="{{asset('print/css/chartist.min.css')}}">
<link rel="stylesheet" href="{{asset('print/css/chartist-plugin-tooltip.css')}}">
<link rel="stylesheet" href="{{asset('print/css/bootstrap-datepicker3.min.css')}}">

<link rel="stylesheet" href="{{asset('print/css/default.css')}}">
<link rel="stylesheet" href="{{asset('print/css/default.date.css')}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('print/css/main.css')}}">
<link rel="stylesheet" href="{{asset('print/css/color_skins.css')}}">

<style>
    <style>
        .pagebreak { page-break-before: always; }
        @media print {
            .printable {
                background-color: white;
                height: 100%;
                width: 100%;
                position: fixed;
                top: 0;
                left: 0;
                margin: 0;
                padding: 15px;
                font-size: 14px;
                line-height: 18px;
                z-index: 9912;
            }
            .unprintable {
                display: none;
            }
            @page {
                size: landscape;
            }
            @page { margin: 0; }
            body { margin: 1.6cm; }
        }
    </style>
    <style>

    .form-group-a {

    }

      .form-group-a-b {
    margin-left: 60px;
    }
    .down{
        margin-top: 10px;
        position: absolute;
    }
    .side{
        margin-left: 48px;
    }
    .up{
        margin-top: 88x;
    }
    .move{
        margin-right: 20px;
    }
    .alll{
        margin-top: 215px;
    }
    </style>
</head>
<body class="theme-orange" id="main-content">

<!-- Page Loader -->
<!-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>
    </div>
</div> -->
<!-- Overlay For Sidebars -->

<div id="wrapper">


        <div class="container-fluid" >
            <div class="block-header unprintable">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="/npas/index" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> New Truck Registration</h2>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                    </div>
                </div>
            </div>

            <!-- Color Pickers -->
            <div class="row clearfix printable" id="stickerPrint">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div class="row pagebreak clearfix">
                                <div class="col-xs-1"></div>
                                <div class="col-xs-4">
                                        <div class="form-group-a alll">
                                        <label></label><br><br>
                                           <strong> {{$npas->cname}}</strong>
                                        </div>
                                        <div class="form-group-a ">
                                            <label></label><br>
                                            <strong> {{$npas->phone}}</strong>
                                        </div>
                                        <div class="form-group-a ">
                                            <label></label><br>
                                            <strong> {{$npas->address}}</strong>
                                        </div>
                                        <div class="form-group-a ">
                                            <label></label><br><br>
                                             <strong>{{$npas->vregistration}}</strong>
                                        </div>
                                        <div class="form-group-a ">
                                            <label></label><br>
                                             <strong>{{$npas->enumber}}</strong>
                                        </div>
                                        <div class="form-group-a" >
                                            <label></label><br>
                                             <strong>{{$npas->vmake}}</strong>
                                        </div>
                                        <div class="form-group-a ">
                                            <label></label><br>
                                            <strong> {{$npas->fee}}</strong>
                                        </div>
                                        <div class="form-group-a " style="margin-top: 10px;">
                                            <label></label><br>
                                            <strong> {{$npas->idate}}</strong>
                                        </div>
                                        <div class="form-group-a " >
                                            <label></label><br>
                                             <strong>{{$npas->edate}}</strong>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary unprintable"  type="button" onclick="window.print()">Print</button>

                                        </div>
                                        <div class="col-xs-7">
                                            <center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                                 <div class="col-xs-8 col-xs-offset-1"  style="font-size: 45px; font-weight: bold; text-transform: uppercase;">
                                                {{$npas->vregistration}}
                                            </div><br><br><br>
                                            </center>

                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-xs-6">
                                                <div class="form-group-a side up">
                                                     <strong>{{$npas->enumber}}</strong>
                                                </div>
                                                <div class="form-group-a down side up" style="position: absolute;"><br>
                                                     <strong >{{$npas->idate}}</strong>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group-a-b up">
                                                    <strong> {{$npas->vmake}}</strong>
                                                </div>
                                                <div class="form-group-a-b down up"><br>
                                                        <strong > {{$npas->edate}}</strong>
                                                </div>
                                            </div>
                                            </div>
                                <center>
                                <div class="row">
                                <div class="col-xs-6 col-xs-offset-2 move" style="margin-top: 15px; ">
                                   <div >{!! QrCode::size(180)->generate($npas->vregistration. ', ' .$npas->edate. ', ' .$npas->idate. ', ' .$npas->cname. ' ,' .$npas->address. ' ,' .$npas->vmake. ' ,' .$npas->enumber. ', ' .$npas->phone. ', ' .$npas->fee); !!}</div>
                                </div>
                                <div class="col-xs-8 col-xs-offset-1"  style="font-size: 45px; font-weight: bold; text-transform: uppercase; margin-top: -10px;">
                                    {{$npas->edate}}
                                </div>
                            </div> </center>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


</div>

<!-- Javascript -->
<script src="{asset('print/js/libscripts.bundle.js')}}"></script>
<script src="{asset('print/js/vendorscripts.bundle.js')}}"></script>
<script src="{asset('print/js/bootstrap-datepicker.min.js')}}"></script>
<script src="http://code.jquery.com/jquery-1.10.2.js')}}"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js')}}"></script>

<script src="{asset('print/js/chartist.bundle.js')}}"></script>
<script src="{asset('print/js/knob.bundle.js')}}"></script> <!-- Jquery Knob-->

<script src="{asset('print/js/mainscripts.bundle.js')}}"></script>
<script src="{asset('print/js/index.js')}}"></script>

<script src="{asset('print/js/jquery.1.7.0.js')}}"></script>
<script src="{asset('print/js/legacy.js')}}"></script>
<script src="{asset('print/js/picker.date.js')}}"></script>
<script src="{asset('print/js/picker.js')}}"></script>


</body>
</html>
