<!-- section start -->
<section class="light-bg-1 top-bottom-padding-120" data-midnight="black">
    <!-- container start -->
    <div data-animation-container class="container small bottom-padding-60">
        <div class="text-center">
            <h2 data-animation-child class="large-title text-color-1 overlay-anim-box2"
                data-animation="overlay-anim2">{{ $data->title }}</h2>
            <h2 data-animation-child class="large-title text-color-1 overlay-anim-box2"
                data-animation="overlay-anim2">{{ $data->sub_title }}</h2>
        </div>
        
        <div class="top-margin-30">
            <h3 style="text-align: center;" data-animation-child class="small-title-oswald text-color-2 text-height-20 fade-anim-box tr-delay01"
                data-animation="fade-anim">{!! $data->description !!}</h3>
            <p data-animation-child class="p-style-xsmall text-color-1 fade-anim-box tr-delay02"
                data-animation="fade-anim">{!! $data->sub_description !!}</p>
        </div>
    </div><!-- container end -->
</section><!-- section end -->