<section class="latest-news top-padding-120 bottom-padding-30 light-bg-1" data-midnight="black">
    <!-- container start -->
    <div class="container">
        <!-- text-center start -->
        <div data-animation-container class="text-center">
            <h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2">{{ $cmsPage->title??'' }}</h2><br>
            <p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5" data-animation="fade-anim">{{ $cmsPage->sub_title??'' }}</p>
        </div><!-- text-center end -->

        <!-- flex-container start -->
        <div class="flex-container response-999 top-padding-60">
            @foreach ($data as $item)
            <!-- column start -->
            <div class="four-columns bottom-padding-90">
                <article class="content-right-margin-20 light-bg-2" data-animation-container>
                    <a href="{{ route('blog.front',$item->slug) }}" class="pointer-large animsition-link hover-box d-block">
                        <div class="overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2">
                            <img class="hover-img" src="{{ asset($item->getFirstMediaUrl('Blogs') )}}" alt="blog img">
                        </div>
                        <h3 class="title-style text-color-1 top-margin-30 blog-title content-padding-l-r-20">
                            <span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">{{ $item->title??'' }}</span><br>
                            <span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">{{ $item->sub_title }}</span><br>
                            <span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">{{ $item->title_tow }}</span>
                        </h3>
                    </a>
                    <div class="content-padding-bottom-20 content-padding-l-r-20">
                        <ul data-animation-child class="blog-category top-margin-30 fade-anim-box tr-delay04 text-color-2" data-animation="fade-anim">
                            <li><i class="fas fa-thumbtack text-color-3"></i></li>
                            <li class="p-letter-style pointer-small hover-color"><a href="{{ route('blog.front',$item->slug) }}">{{ $item->sub_title_tow }}</a></li>
                        </ul>
                        <ul data-animation-child class="blog-tags top-margin-10 fade-anim-box tr-delay05 text-color-2" data-animation="fade-anim">
                            <li><i class="fas fa-tags text-color-3"></i></li>
                            <li class="p-letter-style pointer-small hover-color"><a href="{{ route('blog.front',$item->slug) }}">{{ $item->title_three }}</a></li>
                        </ul>
                        <div data-animation-child class="blog-autor-date top-margin-30 fade-anim-box tr-delay06 text-color-1" data-animation="fade-anim">
                            <a class="xsmall-title-oswald pointer-small hover-color" href="{{ route('blog.front',$item->slug) }}">{{ $item->sub_title_three }}</a>
                            <a class="xsmall-title-oswald pointer-small hover-color" href="{{ route('blog.front',$item->slug) }}">{{ $item->created_at->toFormattedDateString('m-d') }}</a>
                        </div>
                    </div>					
                </article>
            </div><!-- column end -->
            @endforeach
        </div><!-- flex-container end -->
    </div><!-- container end -->
        <div class="bottom-padding-90 text-center">
            <div class="arrow-btn-box">
                <a href="{{ route('blog.front') }}" class="arrow-btn pointer-large">{{ $cmsPage->button ??'Read More'}}</a>
            </div>
        </div><!-- loading more btn end -->
</section><!-- latest-news end -->