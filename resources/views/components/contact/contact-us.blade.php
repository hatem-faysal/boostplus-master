<!-- flex-min-height-box start -->
<section id="down" class="dark-bg-1 flex-min-height-box">
    <!-- flex-min-height-inner start -->
    <div class="flex-min-height-inner">
        <!-- container start -->
        <div class="container top-padding-120 bottom-padding-60">
            <div data-animation-container>
                <h2 class="large-title text-center">
                    <span data-animation-child class="title-fill" data-animation="title-fill-anim"
                        data-text="{{ $data[0]->title_three??'' }}">{{ $data[0]->title_three??'' }}</span>
                </h2>
                <p data-animation-child class="p-style-small text-color-5 fade-anim-box tr-delay03"
                    data-animation="fade-anim">{!! $data[0]->sub_description??'' !!}</p>
            </div>

            <!-- flex-container start -->
            <div class="flex-container top-padding-90 contact-box">
                <!-- column start -->
                <div class="four-columns bottom-padding-60">
                    <div data-animation-container class="content-right-margin-20">
                        <p data-animation-child class="small-title-oswald red-color overlay-anim-box2"
                            data-animation="overlay-anim2">{{ $data[0]->title??'' }}</p>
                        <p class="title-style text-color-4">
                            <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01"
                                data-animation="overlay-anim2">{{ $data[0]->sub_title??'' }}</span><br>
                            <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02"
                                data-animation="overlay-anim2">{{ $data[0]->title_tow??'' }}</span><br>
                            <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03"
                                data-animation="overlay-anim2">{{ $data[0]->sub_title_tow??'' }}</span>
                        </p>
                        {{-- <h6 data-animation-child class="flip-btn-box fade-anim-box tr-delay04"
                            data-animation="fade-anim">
                            <a href="mailto:{{SettingHelper::settings('Email','email@xen_agency.com')}}" class="flip-btn pointer-large"
                                data-text="{{SettingHelper::settings('Email','email@xen_agency.com')}}">{{SettingHelper::settings('Email','email@xen_agency.com')}}</a>
                        </h6> --}}
                    </div>
                </div><!-- column end -->
                <!-- column start -->
                <div class="four-columns bottom-padding-60">
                    <div data-animation-container class="content-left-right-margin-10">
                        <p data-animation-child class="small-title-oswald red-color overlay-anim-box2"
                            data-animation="overlay-anim2">{{ $data[1]->title??'' }}</p>
                        <h6 class="title-style text-color-4">
                            <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01"
                                data-animation="overlay-anim2">{{ $data[1]->sub_title??'' }}</span><br>
                            <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02"
                                data-animation="overlay-anim2">{{ $data[1]->title_tow??'' }}</span><br>
                            <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03"
                                data-animation="overlay-anim2">{{ $data[1]->sub_title_tow??'' }}</span>
                        </h6>
                        {{-- <div data-animation-child class="flip-btn-box fade-anim-box tr-delay04"
                            data-animation="fade-anim">
                            <a href="{{SettingHelper::settings('ifram_map','https://www.google.com.eg/maps/@30.0824129,31.2876736,11z/data=!3m1!4b1?hl=en&entry=ttu')}}" class="flip-btn pointer-large" data-text="open in google maps">open in
                                google maps</a>
                        </div> --}}
                    </div>
                </div><!-- column end -->
                <!-- column start -->
                <div class="four-columns bottom-padding-60">
                    <div data-animation-container class="content-left-margin-20">
                        <p data-animation-child class="small-title-oswald red-color overlay-anim-box2"
                            data-animation="overlay-anim2">{{ $data[2]->title??'' }}</p>
                        <p class="title-style text-color-4">
                            <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01"
                                data-animation="overlay-anim2">{{ $data[2]->sub_title??'' }}</span><br>
                            <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02"
                                data-animation="overlay-anim2">{{ $data[2]->title_tow??'' }}</span><br>
                            <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03"
                                data-animation="overlay-anim2">{{ $data[2]->sub_title_tow??'' }}</span>
                        </p>
                        {{-- <h6 data-animation-child class="flip-btn-box fade-anim-box tr-delay04"
                            data-animation="fade-anim">
                            <a href="tel:{{SettingHelper::settings('Phone','+23 8 8532 7834')}}" class="flip-btn pointer-large" data-text="{{SettingHelper::settings('Phone','+23 8 8532 7834')}}">{{SettingHelper::settings('Phone','+23 8 8532 7834')}}</a>
                        </h6> --}}
                    </div>
                </div><!-- column end -->
            </div><!-- flex-container end -->
        </div><!-- container end -->
    </div><!-- flex-min-height-inner end -->
</section><!-- flex-min-height-box end -->