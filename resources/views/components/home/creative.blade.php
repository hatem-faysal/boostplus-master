			<section id="down" class="dark-bg-1 flex-min-height-box">
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container small top-bottom-padding-120">
						<!-- flex-container start -->
						<div data-animation-container class="flex-container">
							<!-- column start -->
							<div class="twelve-columns  text-center">
								<h2 class="large-title inline-head text-height-12">
									<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="{{ $data->title }}">{{ $data->title }}</span><br>
									<span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="{{ $data->sub_title }}">{{ $data->sub_title }}</span>
								</h2>
							</div><!-- column end -->
							<!-- column start -->
							{{-- desktop --}}
							<div class="twelve-columns text-center about-us-homepage-big" style="line-height: 2;">
								<div class="content-right-margin-20" style="width: 49rem; margin: auto; font-size: 17px;">
									<p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay02" data-animation="fade-anim">{!! $data->description !!}</p>
								</div>
							</div><!-- column end -->
							
							{{-- mobile --}}
							<div class="six-columns about-us-homepage" >
								<div class="content-left-margin-20">
									<p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay02" data-animation="fade-anim">{!! $data->description !!}</p>
								</div>
							</div><!-- column end -->
							<!-- column start -->
				
							<!-- column start -->
							<div class="twelve-columns text-center">
								<p data-animation-child class="p-letter-style text-color-4 text-height-13 fade-anim-box tr-delay04" data-animation="fade-anim">{{ $data->title_tow }}</p>
							</div><!-- column end -->
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- flex-min-height-box end -->