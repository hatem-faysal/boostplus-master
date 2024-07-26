			<!-- section start -->
			<section class="light-bg-1 bottom-padding-30 top-padding-120" data-midnight="black">
				<!-- container start -->
				<div data-animation-container class="container small bottom-padding-60 text-center">
					<h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2">{{ $data[0]->title??'' }}</h2><br>
					<p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5" data-animation="fade-anim">{{ $data[0]->sub_title??'' }}</p>
				</div><!-- container end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-right-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">{{ $data[0]->title_tow??'' }}</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">{{ $data[0]->sub_title_tow??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">{{ $data[0]->title_three??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">{{ $data[0]->sub_title_three??'' }}</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">{!! $data[0]->description??'' !!}</p>
										
										<!--<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">-->
										<!--	<a href="{{ $data[0]->route??'' }}" class="arrow-btn pointer-large animsition-link">{{ $data[0]->button??'' }}</a>-->
										<!--</div>-->
										
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="{{ $data[0]->route??'' }}" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
                                        <div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url({{ asset($data[0]->getFirstMediaUrl('Page') )}})"></div>
									</a>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container reverse container small">
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="{{ $data[1]->route??'' }}" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url({{ asset($data[1]->getFirstMediaUrl('Page') )}})"></div>
									</a>
								</div><!-- column end -->
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-left-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">{{ $data[1]->title??'' }}</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">{{ $data[1]->sub_title??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">{{ $data[1]->sub_title_tow??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">{{ $data[1]->title_three??'' }}</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">{!! $data[1]->description??'' !!}</p>
										
										<!--<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">-->
										<!--	<a href="{{ $data[1]->route??'' }}" class="arrow-btn pointer-large animsition-link">{{ $data[1]->button??'' }}</a>-->
										<!--</div>-->
										
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-right-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">{{ $data[2]->title??'' }}</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">{{ $data[2]->sub_title??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">{{ $data[2]->title_tow??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">{{ $data[2]->sub_title_tow??'' }}</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">{!! $data[2]->description??'' !!}</p>
										
										<!--<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">-->
										<!--	<a href="{{ $data[2]->route??'' }}" class="arrow-btn pointer-large animsition-link">{{ $data[2]->button??'' }}</a>-->
										<!--</div>-->
										
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="{{ $data[2]->route??'' }}" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url({{ asset($data[2]->getFirstMediaUrl('Page') )}})"></div>
									</a>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container reverse container small">
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="{{ $data[3]->route??'' }}" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url({{ asset($data[3]->getFirstMediaUrl('Page') )}})"></div>
									</a>
								</div><!-- column end -->
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-left-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">{{ $data[3]->title??'' }}</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">{{ $data[3]->sub_title??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">{{ $data[3]->title_tow??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">{{ $data[3]->sub_title_tow??'' }}</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">{!! $data[3]->description??'' !!}</p>
										
										<!--<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">-->
										<!--	<a href="{{ $data[3]->route??'' }}" class="arrow-btn pointer-large animsition-link">{{ $data[3]->button??'' }}</a>-->
										<!--</div>-->
										
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
{{-- -----------------new --}}
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-right-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">{{ $data[4]->title??'' }}</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">{{ $data[4]->sub_title??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">{{ $data[4]->title_tow??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">{{ $data[4]->sub_title_tow??'' }}</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">{!! $data[4]->description??'' !!}</p>
										
										<!--<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">-->
										<!--	<a href="{{ $data[4]->route??'' }}" class="arrow-btn pointer-large animsition-link">{{ $data[4]->button??'' }}</a>-->
										<!--</div>-->
										
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="{{ $data[4]->route??'' }}" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										@if (isset($data[4]))
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url({{ asset($data[4]->getFirstMediaUrl('Page') )}})"></div>
										@endif
									</a>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container reverse container small">
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="{{ $data[5]->route??'' }}" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										@if (isset($data[5]))
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url({{ asset($data[5]->getFirstMediaUrl('Page') )}})"></div>
										@endif
									</a>
								</div><!-- column end -->
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-left-margin-40">
										<span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">{{ $data[5]->title??'' }}</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">{{ $data[5]->sub_title??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">{{ $data[5]->title_tow??'' }}</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">{{ $data[5]->sub_title_tow??'' }}</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">{!! $data[5]->description??'' !!}</p>
										
										<!--<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">-->
										<!--	<a href="{{ $data[5]->route??'' }}" class="arrow-btn pointer-large animsition-link">{{ $data[5]->button??'' }}</a>-->
										<!--</div>-->
										
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
{{-- -----------------endnew --}}

			</section><!-- section end -->