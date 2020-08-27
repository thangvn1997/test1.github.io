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
{{--nav--}}
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
<div class="clear"></div>

{{--main--}}

<div class="container-fluid padding">
    <div class="row padding" style="margin-right: 7.2%; margin-left: 7.2%; margin-top: 3px;">
        <div class="col-md-4"style="margin-top: 20px">
            <div class="card">
                <div class="card-header" style="  margin-bottom: 2px; height: 45px">
                   Tuyển Dungj
                </div>
                <img class="card-img-top" src="upload/anh/untitled-1_1378371555.jpg">
                <div class="card-body">
                    <p class="card-text">Nguyen Duc Hoang is a fullstack developer with 12 years of experiences</p>
                    <p class="card-text">Nguyen Duc Hoang is a fullstack developer with 12 years of experiences</p>
                    <p class="card-text">Nguyen Duc Hoang is a fullstack developer with 12 years of experiences</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-top: 20px">
            <div class="card">
                <img class="card-img-top" src="./images/johndoe.png">
                <div class="card-body">
                    <h4 class="card-title">
                        John Doe
                    </h4>
                    <p class="card-text">John Doe is a web developer, he worked for some startup and technology companies</p>
                    <a href="#" class="btn btn-outline-secondary">See profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-top: 20px">
            <div class="card">
                <img class="card-img-top" src="./images/Natasha.png">
                <div class="card-body">
                    <h4 class="card-title">
                        Natasha
                    </h4>
                    <p class="card-text">Natasha is a web designer, she has 5 years of experiences in UI/UX</p>
                    <a href="#" class="btn btn-outline-secondary">See profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{--main--}}
<div class="container-fluid"  style="margin-top: 10px">
    <div class="title-top-slide " style="text-align: center" ><span >Đối tác - khách hàng</span></div>

    <div class="owl-carousel owl-theme " style="width: 85%;height: 80%; margin-left: 8%; margin-top: 10px; border-bottom: #0c0c0c solid 2px;border-top: #0c0c0c solid 2px;"  >

        @foreach($doitac1 as $dt)
        <div class="item">
            <img src="upload/doitac/{{$dt->hinhanh}}" style="height:100%;width: 100%; " alt="" >
        </div>
        @endforeach
        <script>
            jQuery(document).ready(function($){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    nav:false,
                    transition: {
                        mode: 'fade',
                        speed: 2000
                    },
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:5
                        }
                    }
                })
            })
        </script>
    </div>
</div>
<div class="clear" style="height: 100px"></div>
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
