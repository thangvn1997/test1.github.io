@extends('layout.index')
@section('content')
    <div class="container">
        <div id="baner">
            <div class="xSlider" id="block_id_36">
                <ul style="height: 230px;  overflow: hidden;" class="slides">
                    <li style="position: absolute; display: list-item;" class="slide selected">
                        <a href="">
                            <img alt="Sản phẩm" src="upload/anh/ads_tuyen_dung_1375602519.png"  border="0">
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

                        @foreach($tuyendung3 as $l)
                            <li><a href="{{route('loaitd',$l->id)}}"  style="font-size: 16px">{{$l->ten}}</a></li>
                        @endforeach

                    </ul>
                    <div class="clear1"></div>
                </div>
            </div>
            <div class="m_space"></div>
            <div id="content" class="space-top-none">

                <div class="main-content">
                    <div class="col-md-8">
                        <div class="path_way">
                            <a href="/">Trang chủ</a> <span>--></span>
                            <a href="/san-pham-giai-phap.html">Tuyển dụng</a>
                        </div>
                    </div>

                    <div class="space60" style="height: 10px">&nbsp;</div>
                    <div class="row" style="margin-top: 30px">
                        <div class="col-sm-8">

                            @foreach($tuyendung1 as $sp)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href=""><img src="upload/tuyendung/{{$sp->hinhanh}}" alt="" height="100px"></a>
                                        </div>

                                        <div class="space20"></div>

                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="single-item">
                                        <div class="single-item-body">
                                            <p class="single-item-title"><h3 >{{$sp->ten}}</h3></p>

                                        </div>
                                        <div class="space20"></div>
                                        <div class="pull-left">
                                            <p class="single-item-title">{{$sp->noidung}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            @endforeach
                                <div class="row" style="text-align: center">{{$tuyendung1->links()}}</div>
                        </div>



                    </div> <!-- end section with sidebar and main content -->


                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div>
    </div> <!-- .container -->
@endsection
