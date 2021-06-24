@if (count($data) > 0)
    <section class="cmt-row testimonial-section clearfix">
        <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-1 col-md-2 col-lg-3"></div>
                <div class="col-10 col-md-8 col-lg-6">
                    <!-- section title -->
                    <div class="section-title with-desc text-center clearfix">
                        <div class="title-header">
                            <h5>Tiêu điểm</h5>
                            <h2 class="title">Câu hỏi thường gặp</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
                <div class="col-1 col-md-2 col-lg-3"></div>
            </div><!-- row end-->
            <div class="row">
                <div class="accordion mb-35 col-12">

                    @foreach ($data as $index => $value)

                        <div class="toggle cmt-style-classic cmt-toggle-title-bgcolor-grey @if (!$index) active @endif">
                            <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseOne{{ $index }}">Is
                                    {{ $value->question }}</a></div>

                            <div class="toggle-content" style="display: @if (!$index) block @endif;">
                                <p>{{ $value->ask }}</p>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
