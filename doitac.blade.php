@extends('layout.index')
@section('content')
    {{--main--}}
    <div class="container-fluid" style="margin-top: 15px">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-6 col-xs-12 "  >
                <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12" style="float: left">
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
                            @foreach($doitac1 as $sp)
                                <div class="col-xl-4  col-sm-12 col-md-6 col-lg-6 dt1 " style="margin-top: 10px">
                                    <img src="upload/doitac /{{$sp->hinhanh}}" width="100%" height="200px"   alt="" />

                                    <a  style="font-size: 15px; margin: auto">{{$sp->ten}}</a>
                                </div>
                            @endforeach
                        </div>
                        <div class="clear"></div>
                        <div class="row" style="text-align: center">{{$doitac1->links()}}</div>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear1"></div>
    {{--footer--}}
@endsection
