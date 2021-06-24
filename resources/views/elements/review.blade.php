@if (count($data) > 0)


<section class="cmt-row testimonial-section cmt-bgcolor-skincolor cmt-bg cmt-bgimage-yes bg-img4 clearfix">
    <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
    <div class="container">
        <div class="row">
            <!-- row -->
            <div class="col-1 col-md-2 col-lg-3"></div>
            <div class="col-10 col-md-8 col-lg-6">
                <!-- section title -->
                <div class="section-title with-desc text-center clearfix">
                    <div class="title-header">
                        <h5 class="cmt-textcolor-skincolor">Chuyên mục</h5>
                        <h2 class="title">Khách hàng nói gì về <strong
                                class="cmt-textcolor-skincolor">Emaarland</strong>?</h2>
                    </div>
                </div><!-- section title end -->
            </div>
            <div class="col-1 col-md-2 col-lg-3"></div>
        </div><!-- row end-->
        <div class="row">
            <!-- wrap-testimonial -->
            <div class="testimonial-slide owl-carousel" data-item="3" data-nav="false" data-dots="true"
                data-auto="false">
                <!-- testimonials -->
                @foreach ($data as $value )


                <div class="testimonials cmt-testimonial-box-view-style1">
                    <div class="testimonial-content">
                        <!-- testimonial-content -->
                        <blockquote class="testimonial-text">{{$value->description}}</blockquote>
                        <div class="testimonial-avatar">
                            <div class="testimonial-img">
                                <!-- testimonial-img -->
                                <img class="img-fluid" src="{{$value->avatar}}"
                                    alt="testimonial-img">
                            </div>
                            <div class="testimonial-caption">
                                <h5>{{$value->user_name}}</h5><!-- testimonial-caption -->
                                <label>{{$value->position}}</label>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!-- wrap-testimonial end-->
        </div>
    </div>
</section>
@endif
