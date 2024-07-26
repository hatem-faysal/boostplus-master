<section id="up" class="page-head flex-min-height-box dark-bg-1">
    <!-- page-head-bg -->
    <div class="page-head-bg overlay-loading2"
        style="background-image: url({{ asset($data->getFirstMediaUrl('Page') )}});"></div>
    <!-- flex-min-height-inner start -->
    <div class="flex-min-height-inner">
        <!-- flex-container start -->
        <div class="container top-bottom-padding-120 flex-container response-999">
            <!-- column start -->
            <div class="six-columns six-offset">
                <div class="content-left-margin-40">
                    <h2 class="large-title-bold phone-mobile">
                        <span class="load-title-fill tr-delay03" data-text="{{ $data->title }}">{{ $data->title }}</span><br>
                        <span class="load-title-fill tr-delay04" data-text="{{ $data->sub_title }}">{{ $data->sub_title }}</span><br>
                        <span class="load-title-fill tr-delay05" data-text="{{ $data->title_tow }}">{{ $data->title_tow }}</span>
                    </h2>
                    <p class="p-style-bold-up text-height-20 d-flex-wrap phone-mobile">
                        <span class="load-title-fill tr-delay08" data-text="{{ $data->sub_title_tow }}">{{ $data->sub_title_tow }}</span>
                        <span class="load-title-fill tr-delay09" data-text="{{ $data->title_three }}">{{ $data->title_three }}</span>
                        <span class="load-title-fill tr-delay10" data-text="{{ $data->sub_title_three }}">{{ $data->sub_title_three }}</span>
                    </p>
                </div>
            </div><!-- column end -->
        </div><!-- flex-container end -->
    </div><!-- flex-min-height-inner end -->

    <!-- scroll-btn start -->
    <a href="#down" class="scroll-btn pointer-large">
        <div class="scroll-arrow-box">
            <span class="scroll-arrow"></span>
        </div>
        <div class="scroll-btn-flip-box">
            <span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
        </div>
    </a><!-- scroll-btn end -->
</section><!-- page-head end -->