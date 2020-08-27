@extends('layout.index')
@section('content')
    <div class="container-fluid" >
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-6 col-xs-12 "  id="silde11"  style="margin-top: 5px">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"  >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="upload/anh/ads_tuyen_dung_1375602519.png"  class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear1"></div>
    {{--main--}}
    <div class="container-fluid" style=" margin-top: 15px">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-6 col-xs-11 "  >
                {{--menu--}}
                <div class="col-xs-12 col-sm-6 col-md-3" style="float: left">
                    <div class="menu-list1">
                        <div class="box_cat">
                            <h2 style="text-align: center" >Tuyển dụng</h2>
                            <ul id="sub_menu_gioithieu">
                                @foreach($tuyendung2 as $l)
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
                            <a href="/san-pham-giai-phap.html">Tuyển dụng</a>

                        </div>
                    </div>
                    {{--                product--}}
                    <div class="container-fluid ">

                        <div class="row " style="background: white">
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
@endsection
