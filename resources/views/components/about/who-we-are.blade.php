<!-- flex-min-height-box start -->
<section id="down" class="dark-bg-1 flex-min-height-box about-page">
    <!-- flex-min-height-inner start -->
    <div class="flex-min-height-inner">
        <!-- container start -->
        <div class="container top-bottom-padding-120">
            <!-- flex-container start -->
            <div data-animation-container class="flex-container">
                <!-- column start -->
                <div class="four-columns">
                    <div class="content-right-margin-20">
                        <h2 data-animation-child class="title-style title-fill" data-animation="title-fill-anim" style="font-size: xxx-large;"
                            data-text="{{ $data[0]->title??'' }}">{{ $data[0]->title??'' }}</h2>
                    </div>
                </div>
                <div class="eight-columns">
                    <div class="content-left-margin-10" style="font-size: 20px;">
                        <p data-animation-child class="p-style-large text-color-5 fade-anim-box tr-delay01"
                            data-animation="fade-anim">{!! $data[0]->description??'' !!}</p>
                    </div>
                </div><!-- column end -->
                <!-- column start -->
                {{-- @foreach ($data as $item)
                <div class="four-columns top-padding-60">
                    <div class="content-right-margin-20">
                        <h6 data-animation-child class="small-title-oswald title-fill tr-delay02"
                            data-animation="title-fill-anim" data-text="{{ $item->sub_title }}">{{ $item->sub_title }}</h6>
                        <ul class="list-dots">
                            <li>
                                <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay03"
                                    data-animation="fade-anim">{{ $item->title_tow }}</p>
                            </li>
                            <li>
                                <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04"
                                    data-animation="fade-anim">{{ $item->sub_title_tow }}</p>
                            </li>
                        </ul>
                    </div>
                </div><!-- column end -->
                @endforeach --}}
                <!-- column start -->
            </div><!-- flex-container end -->
        </div><!-- container end -->
    </div><!-- flex-min-height-inner end -->
</section><!-- flex-min-height-box end -->
