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
<div class="container-fluid">
    <div class="header">
        <a href="/" class="logo" style="margin-left: 5.5%">
            <img src="upload/anh/logo.png"  height="70px">
        </a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
        <ul class="menu">
            <li class="dropdown active">
                <a >Home</a>
                <ul class="dropdown-menu">
                    <li><a href="index-alt2.html">Homepage 2</a></li>
                    <li><a href="index-alt3.html">Homepage 3</a></li>
                </ul>
            </li>
            <li><a href="#forget">San pham</a></li>
            <li><a href="#forget">Dich vu</a></li>
            <li><a href="#forget">Doi tac</a></li>
            <li><a href="#forget">Gioi thieu</a></li>
            <li><a href="#forget">Lien he</a></li>
            <li><a href="#forget">tuyen dung</a></li>
        </ul>

    </div>
</div>

<div class="clearfix"></div>

{{--slide--}}
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-6 col-xs-12 "  id="silde11"  style="margin-top: 100px">
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

<div class="container-fluid" >
   <div class="row">
       <div  class="col-6 col-sm-6 col-md-6 col-lg-6 col-xs-6 col-xl-6">
           <div class="contact_left">
               <div class="contact_form">
                   <h2>Thông tin liên hệ</h2>
                   <h4 class="flash"></h4>
                   <div class="clear" style="height: 13px;">&nbsp;</div>
                   <p style="font-size:14px;"><strong>Công ty Cổ phần Thương mại và Dịch vụ I.F.S.C</strong><br>
                       Địa chỉ:Nhà số 15 ngõ 125/1  Trung Kính, Cầu Giấy, Hà Nội<br>
                       Điện thoại: 04. 2242 5615 - Hotline: <span></span><br>
                       Email: contact@iforce.com.vn, website: www.iforce.com.vn</p>
                   <form action="" method="POST" enctype="multipart/form-data" >
                       {{ csrf_field() }}
                       <div class="form-group" >
                           <input class="form-control" name="ten" placeholder="Họ và tên"   id="ContactFullname" />
                           <div class="space50">&nbsp;</div>
                           <input class="form-control" name="sdt" placeholder="Điện thoại  "  id="ContactMobile"  />
                           <div class="space50">&nbsp;</div>
                           <input class="form-control" name="email" placeholder="Email"  id="ContactEmail" />
                           <div class="space50">&nbsp;</div>
                           <input class="form-control" name="noidung" placeholder="Nội dung liên hệ"   id="ContactContent" />
                           <div class="space50">&nbsp;</div>
                           <input class="form-control" name="ketqua" placeholder="2 + 2 = ?"  id="ContactContent"  />
                           <div class="space50">&nbsp;</div>
                       </div>
                       <button type="submit" class="btns">Gửi liên hệ  </button>
                       <button type="reset" class="btns">Nhập lại</button>

                   </form>
               </div>
               <script>
                   jQuery('.creload').on('click', function() {
                       var mySrc = $(this).prev().attr('src');
                       var glue = '?';
                       if(mySrc.indexOf('?')!=-1)  {
                           glue = '&';
                       }
                       $(this).prev().attr('src', mySrc + glue + new Date().getTime());
                       return false;
                   });
               </script>
               <!--End .contact_form-->
           </div>
           <!-- End .contact_left -->

           <!-- End .contact_right -->
           <div class="clear" style="height: 100px;">&nbsp;</div>
       </div>
    <div class=" col-12 col-sm-6 col-md-6 col-lg-6 col-xs-6 col-xl-6" >
        <h2>Bản đồ chỉ dẫn</h2>
        <div class="clear" style="height: 20px;">&nbsp;</div>
        <div class="clear" style="height: 20px;">&nbsp;</div>
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
