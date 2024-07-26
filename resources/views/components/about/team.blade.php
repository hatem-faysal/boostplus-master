<!-- section start -->
<section class="dark-bg-2">
    <!-- flex-container start -->
    <div class="flex-container container bottom-padding-60 top-padding-120">
        <!-- column start -->
        <div class="four-columns bottom-padding-60">
            <div data-animation-container class="content-right-margin-20 team-title-box">
                <h2 data-animation-child class="small-title-oswald overlay-anim-box2 red-color"
                    data-animation="overlay-anim2">{{ $data[0]->title_tow??'' }}</h2>
                <h3 class="title-style text-color-4">
                    <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01"
                        data-animation="overlay-anim2">{{ $data[0]->sub_title_tow??'' }}</span><br>
                    <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02"
                        data-animation="overlay-anim2">{{ $data[0]->title_three??'' }}</span><br>
                    <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03"
                        data-animation="overlay-anim2">{{ $data[0]->sub_title_three??'' }}</span>
                </h3>
            </div>
        </div><!-- column end -->
        <!-- column start -->
        @foreach ($data as $item)
        <div class="four-columns bottom-padding-60">
            <a data-animation-container href="{{ $item->route?? '#' }}"
                class="content-left-right-margin-10 hover-box pointer-large d-block">
                <div data-animation-child class="overlay-anim-box2 overlay-dark-bg-1 team-img-box"
                    data-animation="overlay-anim2">
                    <img class="hover-img" src="{{ asset($item->getFirstMediaUrl('Page') )}}" alt="{{ $item->title }}">
                </div>
                <div class="team-content">
                    <h4 data-animation-child
                        class="small-title-oswald text-color-4 hover-content fade-anim-box tr-delay01"
                        data-animation="fade-anim">{{ $item->title }}</h4><br>
                    <p data-animation-child
                        class="p-letter-style text-color-4 hover-content fade-anim-box tr-delay02"
                        data-animation="fade-anim">{{ $item->sub_title }}</p>
                </div>
            </a>
        </div><!-- column end -->
        @endforeach
    </div><!-- flex-container end -->
</section><!-- section end -->