@if (count($data))


    <div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay"
        data-alias="classic4export" data-source="gallery">

        <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
        <div id="rev_slider_5_1" class="rev_slider fullwidthabanner" data-version="5.4.8.1">
            <ul>
                @foreach ($data as $value)
                    <li data-index="rs-{{$value}}" data-transition="boxslide" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-thumb="{{ $value->image }}" data-rotate="0"
                        data-saveperformance="off" data-title="Slide">

                        <!-- Slider -->
                        <img src="{{ $value->image }}" alt="{{ $value->title }}" title="{{ $value->title }}"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            class="rev-slidebg" data-no-retina>

                        <!-- Title -->
                        <div class="tp-caption head-font" id="{{$value}}"
                            data-x="['left','left','center','center']" data-hoffset="['50','20','0','0']"
                            data-y="['top','top','middle','middle']" data-voffset="['230','229','-70','-20']"
                            data-fontsize="['70','70','60','40']" data-lineheight="['75','75','60','50']"
                            data-fontweight="['900','900','900','900']"
                            data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1200,"speed":800,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                            {!! $value->title !!}
                        </div>

                        <!-- Desc -->
                        <div class="tp-caption custom-desc" id="sl{{$value}}r-6" data-x="['left','left','center','center']"
                            data-hoffset="['50','20','0','-473']" data-y="['top','top','middle','middle']"
                            data-voffset="['392','389','56','76']" data-fontsize="['17','17','16','12']"
                            data-lineheight="['27','27','26','18']" data-fontweight="['300','300','300','300']"
                            data-color="['rgb(242, 244, 248)','rgb(242, 244, 248)','rgb(242, 244, 248)','rgb(242, 244, 248)']"
                            data-width="none" data-height="none" data-whitespace="nowrap"
                            data-visibility="['on','on','on','off']" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":1600,"speed":800,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','center','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                            {!! $value->description !!}
                        </div>

                        <!-- Button -->
                        <a class="tp-caption cmt-btn cmt-btn-bgcolor-skincolor cmt-btn-size-sm"
                            href="{{ $value->link }}" target="_self" id="sl{{$value}}r-7"
                            data-x="['left','left','center','center']" data-hoffset="['50','20','-70','-68']"
                            data-y="['top','top','middle','middle']" data-voffset="['483','475','126','89']"
                            data-fontsize="['16','15','12','11']" data-lineheight="['18','18','12','11']"
                            data-fontweight="['600','600','600','600']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text" data-actions='' data-responsive_offset="on"
                            data-frames='[{"delay":1900,"speed":800,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[14,14,10,10]"
                            data-paddingright="[30,30,25,20]" data-paddingbottom="[10,10,9,9]"
                            data-paddingleft="[30,30,25,20]">Tìm hiểu ngay
                        </a>

                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
