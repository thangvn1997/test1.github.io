@extends('layout.index')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-6 col-xs-12 "  id="silde11"  style="margin-top: 20px">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"  >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="upload/anh/about_1375627060.jpg"  class="d-block w-100" alt="...">
                        </div>
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
                            <h2 style="text-align: center" >Sản phẩm</h2>
                            <ul id="sub_menu_gioithieu">
                                <li>
                                    <a href="{{route('gioithieu')}}" style="margin-right: 100px">Giới thiệu chung</a>
                                </li>
                                <li>
                                    <a href="{{route('gioithieu1')}}">Lĩnh vực hoạt động</a>
                                </li>
                                <li>
                                    <a href="{{route('gioithieu2')}}">Tầm nhìn sứ mệnh </a>
                                </li>
                            </ul>
                            <div class="clear1"></div>
                        </div>
                    </div>
                </div>
                {{--content--}}
                <div class="col-xs-12  col-sm-12 col-md-12 col-lg-9" style="float: left">
                    {{--                path-way--}}
                    <div class="container-fluid">
                        <div class="path_way">
                            <a href="/">Trang chủ</a> <span>/</span>
                            <a href="/san-pham-giai-phap.html">Giới thiệu</a> <span>/</span>
                            <a>Giới thiệu </a>
                        </div>
                    </div>
                    {{--                product--}}
                    <div class="container-fluid ">

                        <div class="row " style="margin-top: 10px">
                            <h2 class="item_title" style="margin: auto">Lĩnh vực hoạt động</h2>
                            <div class="clear"></div>
                            <div class="clear"></div>
                        </div>

                        <hr class="my-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear1"></div>
@endsection
