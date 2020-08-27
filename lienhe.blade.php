@extends('layout.index')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-6 col-xs-12 "  id="silde11"  style="margin-top: 20px">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"  >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="upload/anh/contact_banner.jpg"  class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear1"></div>
    <div class="container-fluid" style="margin-top: 30px" >
        <div class="row">
            <div class="col-xl-1 col-lg-1 " ></div>
            <div  class="col-xl-5 col-lg-5 col-md-6" style="border-right: #0e0e0e 2px solid">
                <div class="contact_left">
                    <div class="contact_form">
                        <h2 style="text-align: center">Thông tin liên hệ</h2>
                        <h4 class="flash"></h4>
                        <div class="clear" style="height: 13px;">&nbsp;</div>
                        <p style="font-size:14px;"><strong>Công ty Cổ phần Thương mại và Dịch vụ I.F.S.C</strong><br>
                            Địa chỉ:Nhà số 15 ngõ 125/1  Trung Kính, Cầu Giấy, Hà Nội<br>
                            Điện thoại: 04. 2242 5615 - Hotline: <span></span><br>
                            Email: contact@iforce.com.vn, website: www.iforce.com.vn</p>
                        <form action="" method="POST" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            <div class="form-group" >
                                <input class="form-control" name="ten" placeholder="Họ và tên"   id="ContactFullname" />
                                <div class="space50">&nbsp;</div>
                                <input class="form-control" name="sdt" placeholder="Điện thoại  "  id="ContactMobile"  />
                                <div class="space50">&nbsp;</div>
                                <input class="form-control" name="email" placeholder="Email"  id="ContactEmail" />
                                <div class="space50">&nbsp;</div>
                                <input class="form-control" name="noidung" placeholder="Nội dung liên hệ"   id="ContactContent" />
                                <div class="space50">&nbsp;</div>
                                <input class="form-control" name="ketqua" placeholder="2 + 2 = ?"  id="ContactContent"  />
                                <div class="space50">&nbsp;</div>
                            </div>
                            <button  type="submit" class="btns">Gửi liên hệ  </button>
                            <button type="reset" class="btns">Nhập lại</button>

                        </form>
                    </div>

                </div>
                <!-- End .contact_left -->

                <!-- End .contact_right -->
                <div class="clear" style="height: 100px;">&nbsp;</div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6" >
                <h2 style="text-align: center">Bản đồ chỉ dẫn</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
                        width="100%" height="380" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
                <div class="clear" style="height: 20px;">&nbsp;</div>
                <div class="clear" style="height: 20px;">&nbsp;</div>
            </div>
        </div>
    </div>

@endsection
