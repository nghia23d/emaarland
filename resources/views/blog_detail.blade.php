@extends('layouts.layout')

@section('title', $data->title)
@section('keywords', $data->tag)
@section('description', $data->meta_description)

@section('content')
    <div class="cmt-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box">
                        <div class="page-title-heading">
                            <h1 class="title">{{ $data->title }}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/"><i class="ti ti-home"></i> Trang chủ</a>
                            </span>
                            <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                            <span><span>Bài viết</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <div class="sidebar style2 cmt-sidebar-right cmt-bgcolor-grey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-8 content-area">
                    <!-- post -->
                    <article class="post cmt-blog-single">
                        <!-- post-featured-wrapper -->
                        <div class="post-featured-wrapper mb-40">
                            <div class="post-featured">
                                <img class="img-fluid" src="{{ $data->thumbnail }}" alt="">
                            </div>
                        </div>
                        <!-- post-featured-wrapper end -->
                        <!-- cmt-blog-classic-box-content -->
                        <div class="cmt-blog-single-content">
                            <div class="entry-content">
                                <div class="post-meta mb-20">
                                    <!-- post-meta -->

                                    <time class="entry-date" datetime="{{ $data->created_at->toIso8601String() }}"> <i
                                            class="fa fa-clock-o cmt-textcolor-skincolor"></i>
                                        {{ $data->created_at->format('G:i - d/m/Y') }}
                                    </time>
                                    <span class="cmt-meta-line byline ml-2"><i
                                            class="ti ti-user cmt-textcolor-skincolor"></i>
                                        Admin</span>

                                    <span class="cmt-meta-line byline"><i class="fa fa-tags cmt-textcolor-skincolor"></i>
                                        Tập đoàn Emaarland</span>
                                </div>
                                <h2 class="title">{{ $data->title }}</h2>
                                <div class="cmt-box-desc-text">
                                    {{-- <div class="blockquote-box">
                                    <blockquote>Maecenas vel nulla eleifend, euismod magna sed, tristique velit. Nam sed eleifend dui, eu eleifend leo. Mauris ornare eros quis placerat mollis. Duis ornare euismod risus at dictum. Proin at porttitor metus. .<cite class="d-block mt-15">Koan Conella</cite> </blockquote>
                                </div> --}}


                                    <div class="custom-content">
                                        {!! $data->content !!}
                                    </div>

                                    <div class="social-media-block clearfix mb-30">
                                        <div class="media-button pull-left res-767-fnone">
                                            <ul class="list-unstyled">
                                                @foreach ($data->tag_array as $tag)
                                                    <li class="popular-block active"><a href="#">{{ $tag }}</a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                        <div class="cmt-social-share-wrapper pull-right res-767-fnone">
                                            <div class="cmt-social-share-title d-inline-block">
                                                <span> Chia sẻ <i class="ti ti-sharethis"></i></span>
                                            </div>
                                            <div class="social-icons circle d-inline-block">
                                                <ul>
                                                    <li class="facebook-icon"><a href="#"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li class="twitter-icon"><a href="#"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li class="google-plus-icon"><a href="#"><i
                                                                class="ti ti-google"></i></a></li>
                                                    <li class="linkedin-icon"><a href="#"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                    <li class="pinterest-icon"><a href="#"><i
                                                                class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- cmt-blog-classic-box-content end -->
                    </article><!-- post end -->
                </div>
                <div class="col-lg-4 widget-area sidebar-right">
                    <div class="position-sticky">
                        <aside class="widget widget-search">
                            <h3 class="widget-title">Tìm kiếm</h3>
                            <form role="search" method="get" class="search-form  box-shadow" action="#">
                                <label>
                                    <span class="screen-reader-text">Từ khóa:</span>
                                    <i class="fa fa-search"></i>
                                    <input type="search" class="input-text" placeholder="Từ khóa" value="" name="s">
                                </label>
                            </form>
                        </aside>

                        <aside class="widget tagcloud-widget">
                            <h3 class="widget-title">Tags</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">Auto</a>
                                <a href="#" class="tag-cloud-link">Automation</a>
                                <a href="#" class="tag-cloud-link">Department</a>
                                <a href="#" class="tag-cloud-link">Partnering</a>
                                <a href="#" class="tag-cloud-link">Provider</a>
                                <a href="#" class="tag-cloud-link">Resources</a>
                                <a href="#" class="tag-cloud-link">Business</a>
                                <a href="#" class="tag-cloud-link">Department</a>
                            </div>
                        </aside>
                        <aside class="widget widget-newsletter text-center">
                            <h3 class="widget-title">Nhận Tin Tức Mới Nhất </h3>
                            <p>Đăng ký để nhận những các dự án đang mở bán sớm nhất </p>
                            <form role="search" method="get" class="newsletter-form" action="#">
                                <input type="email" class="input-text" placeholder="Địa chỉ email" value="" name="email">
                                <button class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-bgcolor-skincolor"
                                    type="submit" value="">Đăng ký</button>
                            </form>
                        </aside>
                    </div>

                </div>
            </div><!-- row end -->
        </div>
    </div>
@endsection
