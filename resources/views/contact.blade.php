@extends('layouts.layout')

@section('title', 'Liên hệ')
@section('description', 'Liên hệ với Emaarland')

@section('content')
    <div class="cmt-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box">
                        <div class="page-title-heading">
                            <h1 class="title">Liên hệ</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/"><i class="ti ti-home"></i> Trang chủ</a>
                            </span>
                            <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                            <span><span>Liên hệ</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
<!--contact-box-section-->
<section class="cmt-row contact-box-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-box text-center">
                    <h5>Trụ sở Emaarland</h5>
                    <span>20 chi nhánh tại Việt Nam</span>
                    <div class="contact-detail-box">
                        <div class="featured-icon">
                            <div class="cmt-icon cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                <i class="fa fa-life-ring"></i>
                            </div>
                        </div>
                        <span>Phone: (+84) 946624835</span>
                        <span>Email: <a href="mailto:emaarland.vn">admin@emaarland.vn</a></span>
                        <h6><a href="#">Xem địa chỉ trên map</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-box text-center">
                    <h5>Liên hệ</h5>
                    <span>Liên hệ nhanh với chúng tôi</span>
                    <div class="contact-detail-box">
                        <div class="featured-icon">
                            <div class="cmt-icon cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                <i class="flaticon flaticon-phone-call"></i>
                            </div>
                        </div>
                        <span>Hotline: (+84) 946624835</span>
                        <h6><a href="#">Gọi ngay</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-box text-center">
                    <h5>Trụ sở Emaarland</h5>
                    <span>Văn phòng chính</span>
                    <div class="contact-detail-box">
                        <div class="featured-icon">
                            <div class="cmt-icon cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                <i class="flaticon flaticon-clock"></i>
                            </div>
                        </div>
                        <span>Thứ 2 - Thứ 7: 9h đến 18 <br> Chủ nhật: Nghỉ</span>
                        <h6><a href="#">Tới ngay</a></h6>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--contact-box-section end-->
<!--map-section end-->
<div class="cmt-row map-section cmt-bgcolor-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="spacing-12 box-shadow cmt-bgcolor-white">
                    <!-- section title -->
                    <div class="section-title clearfix">
                        <div class="title-header">
                            <h4 class="title">Gửi yêu cầu Online</h4>
                        </div>
                    </div><!-- section title end -->
                    <form id="cmt-quote-form" class="cmt-quote-form clearfix" method="post" action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" value="" placeholder="Tên" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="address" type="text" value="" placeholder="Địa chỉ Email" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="phone" type="text" value="" placeholder="Số điện thoại" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" rows="3" placeholder="Lời nhắn" class="form-control" required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-left">
                                    <button type="submit" id="submit" class="cmt-btn cmt-btn-size-md cmt-btn-bgcolor-skincolor w-100" value="">
                                        Gửi ngay cho Emaarland
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--map-section-->


@endsection
