@extends('layout.index')
@section('content')
    {{--slide--}}

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
                            @foreach($sanpham1 as $sp)
                            <div class="col-xl-4 col-sm-6 col-md-4 col pd-1  col-lg-4  ">
                                <img  src="upload/sanpham/{{$sp->hinhanh}}">
                                <a href="{{route('chitietsp',$sp->id)}}">{{$sp->ten}}</a>
                            </div>
                            @endforeach
                        </div>
                        <div class="row" style="text-align: center">{{$sanpham1->links()}}</div>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear1"></div>
@endsection
