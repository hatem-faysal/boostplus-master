   <!-- light-bg-2 start -->
   <div class="light-bg-2 top-bottom-padding-120" data-midnight="black">
       <!-- testimonials-slider start -->
       <div class="testimonials-slider container small">
           <!-- swiper-wrapper start -->
           <div class="swiper-wrapper">
             
               @foreach($data as $testimonial)
                <!-- slide start -->
                <div class="swiper-slide text-center">
                    <img src="{{ asset($testimonial->getFirstMediaUrl('Page')) }}" alt="author">
                    <div class="testimonials-content">
                        <p class="text-color-4 p-style-bold">
                            {!! $testimonial->description !!}
                        </p>
                    </div>
                    <div class="text-color-1 small-title-oswald">
                    {{$testimonial->title}}, <span class="text-color-2">{{$testimonial->sub_title}}</span>
                    </div>
                </div>
                <!-- slide end -->
               @endforeach
               
           </div><!-- swiper-wrapper end -->

           <!-- swiper-pagination -->
           <div class="swiper-pagination"></div>
       </div><!-- testimonials-slider end -->
   </div><!-- light-bg-2 end -->