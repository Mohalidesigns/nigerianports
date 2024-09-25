<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- title -->
    <title>Prompt | Saas Application Landing Page</title>
    <meta content="Coderthemes" name="author" />
    <meta content="A fully featured multi purpose template" name="description" />

    <!-- theme favicon -->
    <link rel="shortcut icon" href="{{asset('ui/images/favicon.png')}}">


    <!-- third party plugins -->
    <link rel="stylesheet" href="{{asset('ui/css/vendor.min.css')}}" type="text/css" />

    <!-- theme css -->
    <link rel="stylesheet" href="{{asset('ui/css/theme.min.css')}}" type="text/css" />


</head>

<body>

    <div class="header-2 primary">
    @include('header')
    </div>

    <section class="hero-4 pb-5 pt-7 py-sm-7 bg-gradient2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="hero-title">Truck Search</h1>
                        <p class="fs-17 text-muted">Want to see the status of your Truck? Serch below</p>

                        <div class="mt-5">
                            <div class="form-control-with-hint">
                            <input type="text" name="search" id="search" placeholder="Enter search name" class="form-control" onfocus="this.value=''">
                                <span class="form-control-feedback"><i class="icon-xs" data-feather="search"></i></span>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    <!-- cta + footer start -->
    <section class="py-3 bg-gradient3 position-relative">
        <div class="container pt-4">
            <div class="row">

            <div class="row text-md-start text-center">
                <div class="col-md-6">
                    <p class="pb-0 mb-0 text-muted"><script>document.write(new Date().getFullYear())</script> © Prompt. All rights reserved. Designed & Developed
                        by <a href="https://mohalidesigns.com/mohammedali.html">Mohalidesigns</a></p>
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
    <!-- footer end -->

    <!-- back to top -->
    <a class="btn btn-soft-primary shadow-none btn-icon btn-back-to-top" href='#'><i class="icon-xxs" data-feather="arrow-up"></i></a>

    <!-- javascript -->
    <!-- vendor js -->
    <script src="{{asset('ui/js/vendor.min.js')}}"></script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script>
            $(document).ready(function(){
             $('#search').on('keyup',function(){
                 var query= $(this).val();
                 $.ajax({
                    url:"search",
                    type:"GET",
                    data:{'search':query},
                    success:function(data){
                        $('#search_list').html(data);
                    }
             });

            });
            });
        </script>


</body>

</html>
