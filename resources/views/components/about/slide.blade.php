<section id="up" class="page-head flex-min-height-box dark-bg-2">
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
                    <h2 class="overlay-loading2 tr-delay03 medium-title red-color phone-mobile">{{ $data->title }}</h2>
                    <h3 class="large-title-bold text-color-4 phone-mobile">
                        <span class="overlay-loading2 overlay-light-bg-1 tr-delay04">{{ $data->sub_title }}</span><br>
                        <span class="overlay-loading2 overlay-light-bg-1 tr-delay05">{{ $data->title_tow }}</span><br>
                        <span class="overlay-loading2 overlay-light-bg-1 tr-delay06">{{ $data->sub_title_tow }}</span>
                    </h3>
                    <p class="d-flex-wrap top-margin-20 text-color-4 phone-mobile">
                        <span
                            class="small-title-oswald text-height-20 fade-loading tr-delay07 top-margin-10">{{ $data->title_three }}</span>
                        <span
                            class="small-title-oswald text-height-20 fade-loading tr-delay08 top-margin-10">{{ $data->sub_title_three }}</span>
                        <span class="small-title-oswald text-height-20 fade-loading tr-delay09 top-margin-10">{{ $data->title_four }}</span>
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