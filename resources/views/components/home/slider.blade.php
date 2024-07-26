			<section class="home-slider" id="up">

				<!-- swiper-wrapper start -->
			  	<div class="swiper-wrapper">
                    @foreach ($data as $item)
				  	<!-- swiper-slide start -->
				  	<div class="swiper-slide flex-min-height-box home-slide {{ $data->last()->id==$item->id ? 'red-slide':'' }}">
					  	<!-- slide-bg -->
                        <div class="slide-bg overlay-loading2 overlay-dark-bg-1" style="background-image:url({{ asset($item->getFirstMediaUrl('Page') )}})"></div>
				      	<!-- home-slider-content start -->
                        {{-- <div class="home-slider-content flex-min-height-inner red-bg"> --}}
					  	<div class="home-slider-content flex-min-height-inner {{ $data->last()->id==$item->id ? 'red-bg':'dark-bg-1' }}">
						  	<!-- flex-container start -->
					      	<div class="container top-bottom-padding-120 flex-container response-999">
						      	<!-- column start -->
						      	<div class="six-columns {{ $data->last()->id==$item->id ? '':'six-offset' }}">
							      	<div class="content-left-margin-40">
							      	
								      	<h2 class="large-title-bold phone-mobile">
							  				<span class="slider-title-fill slider-tr-delay01" data-text="{{ $item->title }}">{{ $item->title }}</span><br>
							  				<span class="slider-title-fill slider-tr-delay02" data-text="{{ $item->sub_title }}">{{ $item->sub_title }}</span><br>
							  				<span class="slider-title-fill slider-tr-delay03" data-text="{{ $item->title_tow }}">{{ $item->title_tow }}</span>
						  				</h2>
						  				<p class="p-style-bold-up text-height-20 d-flex-wrap phone-mobile">
										  	<span class="slider-title-fill slider-tr-delay04" data-text="{{ $item->sub_title_tow }}">{{ $item->sub_title_tow }}</span><br>
										  	<span class="slider-title-fill slider-tr-delay05" data-text="{{ $item->title_three }}">{{ $item->title_three }}</span><br>
										  	<span class="slider-title-fill slider-tr-delay06" data-text="{{ $item->sub_title_three }}">{{ $item->sub_title_three }}</span><br>
										  	<span class="slider-title-fill slider-tr-delay06" data-text="{{ $item->title_four }}">{{ $item->title_four }}</span><br>
										  	<span class="slider-title-fill slider-tr-delay06" data-text="{{ $item->sub_title_four }}">{{ $item->sub_title_four }}</span><br>
									  	</p>
									  	
									  	<div class="slider-fade slider-tr-delay07 top-margin-30">
										  	<div class="border-btn-box border-btn-red pointer-large">
												<div class="border-btn-inner">
										      		<a href="{{ $item->route }}" class="border-btn" data-text="{{ $item->button }}">{{ $item->button }}</a>
										    	</div>
											</div>
									  	</div>
							      	</div>
						      	</div><!-- column end -->
					      	</div><!-- flex-container end -->
				      	</div><!-- home-slider-content end -->
				    </div><!-- swiper-slide end -->
                    @endforeach
			  	</div><!-- swiper-wrapper end -->
			  	
			  	<!-- swiper-button-next start -->
			  	<div class="swiper-button-next">
				  	<div class="slider-arrow-next-box">
					  	<span class="slider-arrow-next"></span>
				  	</div>
			  	</div><!-- swiper-button-next end -->
			  	<!-- swiper-button-prev start -->
			  	<div class="swiper-button-prev">
				  	<div class="slider-arrow-prev-box">
					  	<span class="slider-arrow-prev"></span>
				  	</div>
			  	</div><!-- swiper-button-prev end -->
			  	
			  	<!-- swiper-pagination -->
			  	<div class="swiper-pagination"></div>
			  	
			  	<!-- scroll-btn start -->
				<a href="#down" class="scroll-btn pointer-large">
					<div class="scroll-arrow-box">
						<span class="scroll-arrow"></span>
					</div>
					<div class="scroll-btn-flip-box">
						<span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
					</div>
				 </a><!-- scroll-btn end -->
			</section><!-- home-slider end -->