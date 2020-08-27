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
                {{--conten--}}
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
                            <h2 class="item_title" style="margin: auto">Giới thiệu chung</h2>
                            <div class="clear"></div>
                            <div class="item_content">
                                <div>
                                    <p>Được th&agrave;nh lập v&agrave; ch&iacute;nh thức đi v&agrave;o hoạt động từ đầu năm 2006, iForce Systems với một đội ngũ c&aacute;c kỹ sư, chuy&ecirc;n gia nhiều kinh nghiệm trong lĩnh vực C&ocirc;ng nghệ th&ocirc;ng tin v&agrave; Viễn th&ocirc;ng tự h&agrave;o được đem đến cho kh&aacute;ch h&agrave;ng những sản phẩm v&agrave; dịch vụ tổng thể theo ti&ecirc;u chuẩn quốc tế.<br />
                                        <br />
                                        &nbsp;&nbsp; C&ocirc;ng ty ch&uacute;ng t&ocirc;i lu&ocirc;n kết hợp h&agrave;i ho&agrave; giữa khả năng c&ocirc;ng nghệ với sự hiểu biết s&acirc;u sắc về nghiệp vụ cũng như kinh nghiệm triển khai nhằm cung cấp một giải ph&aacute;p chuy&ecirc;n nghiệp, thỏa m&atilde;n tối đa c&aacute;c nhu cầu của kh&aacute;ch h&agrave;ng. Mục ti&ecirc;u chiến lược của C&ocirc;ng ty l&agrave; x&acirc;y dựng v&agrave; g&igrave;n giữ niềm tin của kh&aacute;ch h&agrave;ng dựa tr&ecirc;n việc cung cấp c&aacute;c sản phẩm v&agrave; dịch vụ với chất lượng ho&agrave;n hảo nhất.<br />
                                        <br />
                                        &nbsp;&nbsp; T&ocirc;n chỉ kinh doanh của C&ocirc;ng ty ch&uacute;ng t&ocirc;i l&agrave;&nbsp;<strong><em>&nbsp;&ldquo;Lấy thị trường l&agrave;m hướng đạo, lấy nghi&ecirc;n cứu s&aacute;ng tạo l&agrave;m n&ograve;ng cốt, gắn chất lượng sản phẩm dịch vụ với sự tồn vong của c&ocirc;ng ty, lấy nh&acirc;n t&agrave;i l&agrave;m chỗ dựa, lấy quản trị để th&uacute;c đẩy hiệu quả kinh doanh, đưa c&ocirc;ng ty đi theo con đường n&acirc;ng cao uy t&iacute;n thương hiệu Việt&rdquo;.</em></strong><br />
                                        <br />
                                        &nbsp;&nbsp; Với định hướng ph&aacute;t triển thị trường dịch vụ CNTT đang trong qu&aacute; tr&igrave;nh chuy&ecirc;n nghiệp ho&aacute;, ch&uacute;ng t&ocirc;i cam kết đem đến cho kh&aacute;ch h&agrave;ng c&aacute;c giải ph&aacute;p tổng thể về c&ocirc;ng nghệ v&agrave; dịch vụ hỗ trợ với chất lượng tốt nhất, đ&uacute;ng với ti&ecirc;u ch&iacute; hoạt động của m&igrave;nh.<br />
                                        <br />
                                        &nbsp;&nbsp; Hiện tại ch&uacute;ng t&ocirc;i đang c&oacute; một đội ngũ c&aacute;n bộ tr&igrave;nh độ cao đ&atilde; trải qua qu&aacute; tr&igrave;nh l&agrave;m việc v&agrave; học tập tại c&aacute;c nước c&oacute; nền CNTT ph&aacute;t triển như Singapore, Mỹ, &Uacute;c, Ấn Độ, Nhật Bản, Th&aacute;i Lan... với h&agrave;ng loạt c&aacute;c chứng chỉ uy t&iacute;n được c&ocirc;ng nhận tr&ecirc;n to&agrave;n thế giới như:</p>

                                    <ul>
                                        <li>&nbsp;&nbsp;&nbsp;&nbsp; Cisco CCIE/CCNP/CCDP/CCSP</li>
                                        <li>&nbsp;&nbsp;&nbsp;&nbsp; Microsoft MCP/MCSE</li>
                                        <li>&nbsp;&nbsp;&nbsp; (ISC)2 CISSP</li>
                                        <li>&nbsp;&nbsp;&nbsp; CompTIA Security+/Network+/Linux+</li>
                                        <li>&nbsp;&nbsp;&nbsp; Sun SCSA</li>
                                        <li>&nbsp;&nbsp;&nbsp; Oracle OCP DBA</li>
                                    </ul>

                                    <p>&nbsp;&nbsp;&nbsp; &hellip;<br />
                                        <br />
                                        Họ cũng đ&atilde; từng tham gia v&agrave;o qu&aacute; tr&igrave;nh tư vấn, thiết kế, triển khai c&aacute;c sản phẩm CNTT quy m&ocirc; lớn tầm cỡ quốc gia tại c&aacute;c c&ocirc;ng ty t&iacute;ch hợp hệ thống v&agrave; dịch vụ h&agrave;ng đầu Việt Nam.<br />
                                        Ch&uacute;ng t&ocirc;i hiện đang cung cấp cho kh&aacute;ch h&agrave;ng những dịch vụ đẳng cấp vượt trội như sau:<br />
                                        <br />
                                        Tư vấn x&acirc;y dựng hệ thống:</p>

                                    <ul>
                                        <li>Tư vấn c&aacute;c giải ph&aacute;p về CNTT v&agrave; Viễn th&ocirc;ng (hạ tầng mạng, dịch vụ mạng, bảo mật v&agrave; an to&agrave;n th&ocirc;ng tin, lưu trữ dữ liệu...)</li>
                                        <li>Tư vấn chiến lược đầu tư cho CNTT</li>
                                    </ul>

                                    <p><br />
                                        C&aacute;c giải ph&aacute;p v&agrave; dịch vụ t&iacute;ch hợp hệ thống:</p>

                                    <ul>
                                        <li>Cung cấp thiết bị mạng, m&aacute;y chủ, bảo mật, lưu trữ</li>
                                        <li>Dịch vụ c&agrave;i đặt, triển khai, cấu h&igrave;nh v&agrave; vận h&agrave;nh hệ thống</li>
                                        <li>Bảo tr&igrave; v&agrave; quản trị hệ thống c&ocirc;ng nghệ cao với c&aacute;c g&oacute;i dịch vụ kh&aacute;c nhau theo y&ecirc;u cầu của Kh&aacute;ch h&agrave;ng</li>
                                        <li>Đ&aacute;nh gi&aacute; hiệu năng hoạt động v&agrave; mức độ an to&agrave;n của hệ thống</li>
                                        <li>X&acirc;y dựng ch&iacute;nh s&aacute;ch vận h&agrave;nh v&agrave; quản trị hệ thống</li>
                                    </ul>

                                    <p><br />
                                        Ph&aacute;t triển phần mềm v&agrave; ứng dụng thương mại điện tử:</p>

                                    <ul>
                                        <li>Phần mềm ứng dụng doanh nghiệp (Kế to&aacute;n, Quản l&yacute; nh&acirc;n sự, Quản trị dữ liệu kh&aacute;ch h&agrave;ng, Quản l&yacute; Kho...)</li>
                                        <li>Thiết kế Website v&agrave; quảng b&aacute; Thương hiệu cho doanh nghiệp</li>
                                        <li>Phần mềm đ&oacute;ng g&oacute;i theo y&ecirc;u cầu</li>
                                        <li>X&acirc;y dựng c&aacute;c giải ph&aacute;p về Thương mại điện tử (cổng th&ocirc;ng tin điện tử, dịch vụ B-2-B, B-2-C...)</li>
                                    </ul>

                                    <p><br />
                                        Để c&oacute; th&ecirc;m th&ocirc;ng tin chi tiết về sản phẩm v&agrave; dịch vụ của ch&uacute;ng t&ocirc;i, xin mời qu&yacute; vị h&atilde;y gh&eacute; thăm trang Web<a href="http://iforce.com.vn/" style="margin: 0px; padding: 0px; outline: none; border: none; color: rgb(24, 101, 167); text-decoration: none;">http://www.iforce.com.vn</a>&nbsp;hoặc email đến địa chỉ&nbsp;<a href="mailto:contact@iforce.com.vn" style="margin: 0px; padding: 0px; outline: none; border: none; color: rgb(24, 101, 167); text-decoration: none;">contact@iforce.com.vn</a><br />
                                        <br />
                                        Qu&yacute; kh&aacute;ch h&agrave;ng cũng c&oacute; thể gọi điện trực tiếp cho ch&uacute;ng t&ocirc;i theo số:<br />
                                        <br />
                                        Office : 04-2242-5615<br />
                                        <br />
                                        Hotline : 0982-219-103<br />
                                        <br />
                                        Ch&uacute;ng t&ocirc;i lu&ocirc;n sẵn s&agrave;ng để hỗ trợ qu&yacute; kh&aacute;ch một c&aacute;ch tốt nhất!</p>
                                </div>
                            </div>
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
