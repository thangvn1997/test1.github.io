@extends('layout.index')
@section('content')
    {{--slide--}}
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-6 col-xs-12 "  id="silde11"  style="margin-top: 10px">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"  >
                        <div class="carousel-item">
                            <img src="http://iforce.com.vn/files/uploads/galleries/news-home1-1378729279-04025002062016.jpg" alt="iForce system" class="d-block w-100" alt="...">
                        </div>
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
                            <h2 style="text-align: center" >Dịch vụ</h2>
                            <ul id="sub_menu_gioithieu">
                                @foreach($dichvu3 as $l)
                                    <li><a href="{{route('loaisp',$l->id)}}"  style="font-size: 16px">{{$l->ten}}</a></li>
                                @endforeach
                            </ul>
                            <div class="clear1"></div>
                        </div>
                    </div>
                </div>
                {{--conten--}}
                <div class="col-xs-12  col-sm-12 col-md-12 col-lg-9" style="float: left">
                    {{--path-way--}}
                    <div class="container-fluid">
                        <div class="path_way">
                            <a href="/">Trang chủ</a> <span>/</span>
                            <a href="/san-pham-giai-phap.html">Sản phẩm - giải pháp</a>
                        </div>
                    </div>
                    {{--                product--}}
                    <div class="container-fluid ">
                        <div class="row ">
                            @foreach($dichvu1 as $sp)
                                <div class="col-xl-4 col-sm-6 col-md-4 col pd-1  col-lg-4  ">
                                    <img src="upload/dichvu/{{$sp->hinhanh}}" width="220px" height="130px" alt="" />                        </a>
                                    <a href="{{route('chitietdv',$sp->id)}}">{{$sp->ten}}</a>
                                </div>
                            @endforeach
                        </div>
                        <div class="clear"></div>
                        <div class="row" style="text-align: center">{{$dichvu1->links()}}</div>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear1"></div>
    {{--footer--}}
@endsection
