@extends('layout.index')
@section('content')
    <div class="container">
        <div id="baner">
            <div class="xSlider" id="block_id_36">
                <ul style="height: 230px;  overflow: hidden;" class="slides">
                    <li style="position: absolute; display: list-item;" class="slide selected">
                        <a href="">
                            <img alt="Sản phẩm" src="upload/anh/ads_product_1375602493.png"  border="0">
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </div>

    <div class="container">

        <div id="main">
            <div class="m_left">
                <div class="box_cat">
                    <h2 style="text-align: center; margin-right: 30px;">Tuyển dụng</h2>
                    <ul id="sub_menu_gioithieu">

                        @foreach($tuyendung2 as $l)
                            <li><a href="{{route('loaisp',$l->id)}}"  style="font-size: 16px; ">{{$l->ten}}</a></li>
                        @endforeach

                    </ul>
                    <div class="clear1"></div>
                </div>
            </div>
            <div class="m_space"></div>
            <div class="m_right">
                <div class="path_way">
                    <a href="/">Trang chủ</a> <span>--></span>
                    <a href="/san-pham-giai-phap.html">Sản phẩm - Giải pháp</a>
                </div>
                <div class="clear1"></div>
                <div class="row">

                    <!-- Blog Post Content Column -->
                    <div class="col-sm-7">

                        <h1>{{$tuyendung1->ten}}</h1>


                        <p class="lead">
                            by <a href="#">Admin</a>
                        </p>

                        <!-- Preview Image -->
                        <img src="upload/sanpham/{{$tuyendung1->hinhanh}}" width="220px" height="130px" style="text-align: center" alt="" />

                        <!-- Date/Time -->
                        <p><span class="glyphicon glyphicon-time"></span> Posted on {{$tuyendung1->updated_at}}</p>


                        <p>{!!$tuyendung1->noidung!!}</p>


                    </div>

                </div>
            </div>
        </div>t -->
    </div> <!-- .container -->
@endsection
