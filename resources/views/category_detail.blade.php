@extends('layouts.layout')

@section('title', $data->title)

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
                            <a href="#"><span>{{ $data->title }}</span></a>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <div v class="sidebar cmt-sidebar-right cmt-bgcolor-grey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-8 content-area">
                    @if (count($data->blogs) == 0)
                        Chuyên mục này chưa có bài viết. Quay lại <a class="text-warning" href="/">trang chủ</a>
                    @endif
                    @foreach ($data->blogs as $value)
                        <article class="post cmt-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="cmt-post-featured-wrapper cmt-featured-wrapper">
                                <div class="cmt-post-featured">
                                    <img class="img-fluid" src="{{ $value->thumbnail }}" alt="">
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- cmt-blog-classic-content -->
                            <div class="cmt-blog-classic-content">
                                <div class="cmt-post-entry-header">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a
                                                href="{{ asset($value->slug_title) }}.html">{{ $value->title }}</a></h2>
                                    </header>
                                </div>
                                <div class="post-meta pb-15">
                                    <span class="cmt-meta-line byline">
                                        <i class="fa fa-user cmt-textcolor-skincolor"></i>
                                        Admin
                                    </span>
                                    <span class="cmt-meta-line comments-link">
                                        <i class="fa fa-clock-o cmt-textcolor-skincolor"></i>
                                        {{ $value->diff_for_humans }}
                                    </span>
                                    <span class="cmt-meta-line">
                                        <i class="fa fa-tags cmt-textcolor-skincolor"></i>
                                        {{ $data->title }}
                                    </span>
                                </div><!-- post-meta end -->
                                <div class="entry-content">
                                    <div class="cmt-box-desc-text">
                                        <div class="custom-content pt-12">
                                            {!! $value->short_content !!}
                                        </div>
                                    </div>
                                    <div class="cmt-blogbox-desc-footer">
                                        <div class="cmt-blogbox-footer-readmore">
                                            <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-color-darkgrey cmt-btn-style-border mt-20"
                                                href="{{ asset($value->slug_title) }}.html">Xem thêm</a>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- cmt-blog-classic-content end -->
                        </article>
                    @endforeach
                    {{-- <div class="pagination-block">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>
                    </div> --}}
                </div>
                <div class="col-lg-4 widget-area sidebar-right">
                    <aside class="widget widget-search">
                        <h3 class="widget-title">Search</h3>
                        <form role="search" method="get" class="search-form" action="#">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <i class="fa fa-search"></i>
                                <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                            </label>
                        </form>
                    </aside>
                </div>
            </div><!-- row end -->
        </div>
    </div>
@endsection
