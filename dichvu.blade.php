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
                    <h2 style="text-align: center; margin-right: 30px;">Dịch vụ</h2>
                    <ul id="sub_menu_gioithieu">

                        @foreach($dichvu2 as $l)
                            <li><a href="{{route('loaidv',$l->id)}}"  style="font-size: 16px">{{$l->ten}}</a></li>
                        @endforeach

                    </ul>
                    <div class="clear1"></div>
                </div>
            </div>
            <div class="m_space"></div>
            <div class="m_right">
                <div class="path_way">
                    <a href="/">Trang chủ</a> <span>--></span>
                    <a href="/san-pham-giai-phap.html">Dịch vụ</a>
                </div>
                <div class="clear1"></div>
                <div class="product_list">

                    <div class="product_list">

                        @foreach($dichvu1 as $sp)
                            <div class="product_item">
                                <div class="product_thumb">
                                    <a href="{{route('chitietdv',$sp->id)}}">
                                        <img src="upload/dichvu/{{$sp->hinhanh}}" width="220px" height="130px" alt="" />                        </a>
                                </div>
                                <div class="clear"></div>
                                <a href="{{route('chitietdv',$sp->id)}}">{{$sp->ten}}</a>
                            </div>
                        @endforeach
                        <div class="product_space">&nbsp;</div>

                    </div>
                    <div class="row" style="text-align: center">{{$dichvu1->links()}}</div>
                </div>
                <div class="clear   "></div>

            </div>
        </div>
    </div> <!-- .container -->
@endsection
