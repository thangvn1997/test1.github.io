<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Test reponsive</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>


    <link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet"  href="{{asset('admin/css/syte.css')}}">
    <link rel="stylesheet"  href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet"  href="{{asset('admin/css/bootstrap-grid.css')}}">
    <link rel="stylesheet"  href="{{asset('admin/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet"  href="{{asset('admin/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet"  href="{{asset('admin/css/bootstrap-reboot.min.css')}}">

    <script type="text/javascript" src="admin/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="admin/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="admin/js/bootstrap.js"></script>
    <script type="text/javascript" src="admin/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-md navbar-light primary-color" style="border-bottom: 2px solid #0e0e0e">

    <!-- Navbar brand -->
    <a class="navbar-brand" >
        <img src="upload/anh/logo.png"  height="70">
    </a>
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

        </ul>

    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

<div class="clearfix"></div>

{{--slide--}}
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-6 col-xs-12 "  id="silde11"  style="margin-top: 10px">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"  >
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="http://iforce.com.vn/files/uploads/galleries/news-home2-1378729265-04030102062016.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://iforce.com.vn/files/uploads/galleries/news-home1-1378729279-04025002062016.jpg" alt="iForce system" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="clear1"></div>
{{--main--}}
<div class="container-fluid" style="margin-top: 15px">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-6 col-xs-12 " >
            {{--menu--}}
            <div class="col-xs-12 col-sm-6 col-md-3" style="float: left">
                <div class="menu-list1">
                    <div class="box_cat">
                        <h2 style="text-align: center" >Sản phẩm</h2>
                        <ul id="sub_menu_gioithieu">
                            @foreach($sanpham2 as $l)
                                <li><a href="{{route('loaisp',$l->id)}}"  style="font-size: 16px">{{$l->ten}}</a></li>
                            @endforeach
                        </ul>
                        <div class="clear1"></div>
                    </div>
                </div>
            </div>
            {{--conten--}}
            <div class="col-xs-12  col-sm-12 col-md-12 col-lg-9" style="float: left">
                {{--                path-way--}}
                <div class="container-fluid">
                    <div class="path_way">
                        <a href="/">Trang chủ</a> <span>/</span>
                        <a href="/san-pham-giai-phap.html">Giới thiệu</a> <span>/</span>
                        <a>Giới thiệu chung</a>
                    </div>
                </div>
                {{--                product--}}
                <div class="container-fluid ">

                    <div class="row ">
                        @foreach($tuyendung1 as $sp)
                        <div class="col-md-12 " style="margin-top: 25px">
                            <div class="col-md-3 col-4   col-sm-3 col-lg-3 col-xs-3 col-xl-3 td1" style=" float: left; ">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{route('chitiettd',$sp->id)}}">
                                            <img src="upload/tuyendung/{{$sp->hinhanh}}" alt=""></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-8 col-8 col-lg-8 col-xs-8 col-xl-8 col-sm-8 td2" style="float: left">
                                <div class="single-item">
                                    <div class="single-item-body">
                                        <p class="single-item-title" >
                                        <h3  href="{{route('chitiettd',$sp->id)}}">{{$sp->ten}}</h3>
                                        </p>
                                    </div>
                                    <span class="ni_date">2016-06-02</span>
                                    <div class="space20"></div>
                                    <div class="pull-left">
                                        <p class="single-item-title" >{{$sp->noidung}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <hr class="my-4">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear1"></div>
{{--footer--}}
<div class="container-fluid" >
    <footer >
        <div  class="container-fluid padding" style=" background:#3d3d3d;
                                                            border-top:#f47c20 4px solid; ">
            <div id="footer1">
                <div class="row text-center">
                    <div class="col-md-5 mt-1" style="line-height:20px; padding:0 0 0 30px;">
                        <h2>Liên hệ</h2>
                        <p> <img height="40" width="50" src="upload/anh/download.jpg" style="margin-right: 10px">
                            contact@iforce.com.vn
                        </p>
                        <p> <img height="40" width="50"  src="upload/anh/1.png" style="margin-right: 10px" >
                            04 2242 5615
                        </p>
                        <p> <img height="40" width="50"  src="upload/anh/2.png"style="margin-right: 10px" >
                            Nhà số 15 ngõ 125/1 Trung Kính - Cầu Giấy - Hà Nội
                        </p>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5 mt-2" style="line-height:20px; ">
                        <h2>Kết nối</h2>
                        <div style="height: 10px;"></div>
                        <a><img height="45" width="45" src="upload/anh/icon_facebook.png"></a>
                        <a><img height="45" width="45" src="upload/anh/icon_google_plus.png"></a>
                        <a><img height="45" width="45" src="upload/anh/icon_twitter.png" ></a>
                        <a><img height="45" width="45" src="upload/anh/icon_youtube.png"></a>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-12" style="font-size: 20px; text-align: center">
            <span>Copyright © 2016 iForce. All rights reserved</span>
        </div>
    </footer>
</div>
</body>
</html>
