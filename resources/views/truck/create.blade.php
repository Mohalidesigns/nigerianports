<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- title -->
    <title>Prompt - Contact Us</title>
    <meta content="Coderthemes" name="author" />
    <meta content="A fully featured multi purpose template" name="description" />

    <link rel="shortcut icon" href="{{asset('ui/images/favicon.png')}}">


    <!-- third party plugins -->
    <link rel="stylesheet" href="{{asset('ui/css/vendor.min.css')}}" type="text/css" />

    <!-- theme css -->
    <link rel="stylesheet" href="{{asset('ui/css/theme.min.css')}}" type="text/css" />
</head>

<body>
    <div class="header-7 bg-gradient2">
    @include('header')

        <section class="hero-4 pt-lg-6 pb-sm-9 pb-6 pt-9">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="hero-title mb-0">Requirement for Truck Isnpection for NPA MSS</h1>
                    </div>
                </div>
            </div>
            <div class="shape bottom">
                <svg width="1440px" height="40px" viewBox="0 0 1440 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="shape-b" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="curve" fill="#fff">
                            <path
                                d="M0,30.013 C239.659,10.004 479.143,0 718.453,0 C957.763,0 1198.28,10.004 1440,30.013 L1440,40 L0,40 L0,30.013 Z"
                                id="Path"></path>
                        </g>
                    </g>
                </svg>
            </div>
        </section>
    </div>

    <!-- Contact us start -->
    <section class="section pb-lg-7 py-4 position-relative">
        <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-2">

                </div>
                <div class="col-lg-8">
                    <div class="card shadow-none">
                        <div class="card-body p-xl-5 p-0">
                            <p class="mb-5">Please fill out the following form and we will get back to you shortly</p>

                            <form method="POST" action="{{ route('truck.store') }}">
                                        @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName1" class="fw-medium form-label">Company Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="cname" placeholder="Enter Here" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="fw-medium form-label">Company Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="caddress" placeholder="Enter Here" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName1" class="fw-medium form-label">Company Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="cnumber" placeholder="Enter Here " />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="fw-medium form-label">Company Email<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="cemail" placeholder="Enter Here" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="fw-medium form-label">Truck Registration Numnber<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="regnumber" placeholder="Enter Here" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName1" class="fw-medium form-label">Chassis Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="chassis" placeholder="Enter Here " />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="fw-medium form-label">Truck Make<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="truckmake" placeholder="Enter Here" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="fw-medium form-label">Supervisor<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="supo" placeholder="Enter Here" value="Supervisor"  />
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">

                </div>
            </div>
        </div>
    </section>
    <!-- Contact us end -->

    <!-- footer starts -->
    <section class="pt-5 pb-4 bg-gradient3 position-relative">
        <div class="container">
            <div class="row text-md-start text-center">
                <div class="col-md-6">
                    <p class="pb-0 mb-0 text-muted"><script>document.write(new Date().getFullYear())</script> © Prompt. All rights reserved. Crafted
                        by <a href="https://coderthemes.com/">Coderthemes</a></p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="align-items-end mt-md-0 mt-4">
                        <ul class="list-unstyled mb-0">
                            <li class="d-inline-block me-4">
                                <a href=""><i data-feather="facebook" class="icon icon-xs"></i></a>
                            </li>
                            <li class="d-inline-block me-4">
                                <a href=""><i data-feather="twitter" class="icon icon-xs"></i></a>
                            </li>
                            <li class="d-inline-block">
                                <a href=""><i data-feather="linkedin" class="icon icon-xs"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer ends -->

    <!-- back to top -->
    <a class="btn btn-soft-primary shadow-none btn-icon btn-back-to-top" href="#"><i class="icon-xxs" data-feather="arrow-up"></i></a>

    <!-- javascript -->
    <!-- vendor js -->
    <script src="{{asset('ui/js/vendor.min.js')}}"></script>


    <!-- theme js -->
    <script src="{{asset('ui/js/theme.min.js')}}"></script>


</body>

</html>
