<section class="cmt-row post-section style2 clearfix">
    <div class="container">
        <div class="row">
            <!-- row -->
            <div class="col-md-2 col-lg-3"></div>
            <div class="col-sm-12 col-md-8 col-lg-6">
                <!-- section title -->
                <div class="section-title with-desc text-center clearfix">
                    <div class="title-header">
                        <h2 class="title">Bài viết nổi bật</h2>
                    </div>
                </div><!-- section title end -->
            </div>
            <div class="col-md-2 col-lg-3"></div>
        </div><!-- row end -->
        <div class="row">
            <div class="post-slide owl-carousel owl-theme owl-loaded" data-item="3" data-nav="false" data-dots="false"
                data-auto="false">
                @foreach ($data as $index => $value)


                    <div class="featured-imagebox featured-imagebox-post top-image style2 box-shadow">
                        <div class="featured-thumbnail">
                            <!-- featured-image -->
                            <img class="img-fluid" src="{{ $value->thumbnail }}" alt="{{ $value->title }}">
                            <div class="cmt-box-post-date">
                                <!-- cmt-box-post-date -->
                                <span class="cmt-entry-date">
                                    <time class="entry-date" datetime="{{ $value->created_at->toIso8601String() }}">
                                        @if ($value->created_at->isToday())
                                            Hôm <br> nay
                                        @else
                                            {{ $value->created_at->format('d') }}
                                            <span
                                                class="entry-month entry-year">{{ $value->created_at->format('M') }}</span>
                                        @endif
                                    </time>
                                </span>
                            </div><!-- cmt-box-post-date end -->
                        </div>
                        <div class="featured-content text-left box-shadow">
                            <!-- featured-content -->
                            <div class="post-title featured-title">
                                <h5><a href="{{ $value->slug_title }}.html">{{ $value->title }}</a></h5>
                            </div>
                            <div class="post-meta pb-15">
                                <span class="cmt-meta-line byline"><i class="fa fa-user cmt-textcolor-skincolor"></i>
                                    Admin</span>
                                <span class="cmt-meta-line comments-link"><i
                                        class="fa fa-clock-o cmt-textcolor-skincolor"></i>
                                    {{ $value->diff_for_humans }}</span>
                            </div><!-- post-meta end -->
                            <div class="post-desc featured-desc">
                                <div class="custom-content pt-12">
                                    {!! $value->short_content !!}
                                </div>
                            </div>
                            <a class="cmt-btn cmt-btn-size-sm cmt-icon-btn-right cmt-btn-color-darkgrey btn-inline"
                                href="{{ $value->slug_title }}.html">Xem thêm<i class="ti ti-angle-right"></i></a>
                        </div><!-- featured-content end -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
