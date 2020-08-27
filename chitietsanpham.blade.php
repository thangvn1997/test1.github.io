@extends('layout.index')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-6 col-xs-12 "  id="silde11"  style="margin-top: 10px">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"  >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="upload/anh/ads_product_1375602493.png"  class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    <div class="row">

                        <!-- Blog Post Content Column -->
                        <div class="col-sm-7">

                            <h1>{{$sanpham1->ten}}</h1>


                            <p class="lead">
                                by <a href="#">Admin</a>
                            </p>

                            <!-- Preview Image -->
                            <img src="upload/sanpham/{{$sanpham1->hinhanh}}" width="220px" height="130px" style="text-align: center" alt="" />

                            <!-- Date/Time -->
                            <p><span class="glyphicon glyphicon-time"></span> Posted on {{$sanpham1->updated_at}}</p>

                            <p>{!!$sanpham1->noidung!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear1"></div>
@endsection
