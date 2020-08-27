@extends('layout.index')

@section('content')

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
{{--                            <div class="carousel-caption d-none d-md-block">--}}
{{--                                <h5>Second slide label</h5>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                            </div>--}}
                        </div>
                        <div class="carousel-item">
                            <img src="http://iforce.com.vn/files/uploads/galleries/news-home1-1378729279-04025002062016.jpg" alt="iForce system" class="d-block w-100" alt="...">
{{--                            <div class="carousel-caption d-none d-md-block">--}}
{{--                                <h5>Third slide label</h5>--}}
{{--                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>--}}
{{--                            </div>--}}
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
                       Sản phẩm giải pháp
                    </div>

                    <img class="card-img-top" height="225" width="200" src="upload/anh/news-may-in-ma-vach-zebra-zm600-05254902062016.png">
                    @foreach($sanpham2 as $sp)
                    <div class="card-body">
                        <a class="card-text" href="{{route('chitietsp',$sp->id)}}">{{$sp->ten}}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 20px">
                <div class="card">
                    <div class="card-header" style="  margin-bottom: 2px; height: 45px">
                        Dịch vụ
                    </div>
                    <img class="card-img-top"height="225" width="200" src="upload/dichvu/1597657078.jpeg">
                    @foreach($dichvu3 as $sp)
                        <div class="card-body">
                            <a class="card-text" href="{{route('chitietdv',$sp->id)}}">{{$sp->ten}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 20px">
                <div class="card">
                    <div class="card-header" style="  margin-bottom: 2px; height: 45px">
                      Tuyển dụng
                    </div>
                    <img class="card-img-top" height="225" width="200" src="upload/tuyendung/download (1).png">
                    @foreach($tuyendung2 as $sp)
                        <div class="card-body">
                            <a href="{{route('chitiettd',$sp->id)}}">{{$sp->ten}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{--main--}}
    <div class="container-fluid"  style="margin-top: 20px">
        <div class="title-top-slide " style="text-align: center" ><span >ĐỐI TÁC KHÁCH HÀNG</span></div>

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
@endsection

