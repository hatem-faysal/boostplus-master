

@extends('frontend.layouts.master')

@section('titlefrontend')
{{ str_replace("-"," ",ucfirst(TranslationHelper::translate('Blog'))) }}
@endsection

@section('cssfrontend')
@endsection

@section('contentfrontend')
	
@endsection
		<!-- animsition-overlay start -->
		<main class="animsition-overlay" data-animsition-overlay="true">
			<!-- page-head start -->
			<section id="up" class="page-head flex-min-height-box dark-bg-1">
				<!-- page-head-bg -->
				<div class="page-head-bg overlay-loading2" style="background-image: url({{ asset($cmsPageBlogs->getFirstMediaUrl('Page') )}});"></div>
				
				<!-- flex-min-height-inner start -->
	  			<div class="flex-min-height-inner">
		  			<!-- flex-container start -->
		  			<div class="container top-bottom-padding-120 flex-container response-999">
			  			<!-- column start -->
			  			<div class="six-columns six-offset">
				  			<div class="content-left-margin-40">
				  				<h2 class="large-title-bold">
									<span class="load-title-fill tr-delay03" data-text="{{ $cmsPageBlogs->title_tow }}">{{ $cmsPageBlogs->title_tow }}</span><br>
								</h2>
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

			<!-- blog start -->
			<div id="down" class="blog container bottom-padding-30 top-padding-120 light-bg-1" data-midnight="black">
				<!-- flex-container start -->
				<div class="flex-container">
					<!-- column start -->
					<div class="eight-columns latest-news">
						<!-- blog-entry start -->
						@foreach ($data as $item)
							<article class="bottom-padding-90">
								<div class="light-bg-2">
									<a href="{{ route('blog.front',$item->slug) }}" class="pointer-large animsition-link hover-box d-block">
										<div class="overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2">
											<img class="hover-img" src="{{ asset($item->getFirstMediaUrl('Blogs2') )}}" alt="blog img">
										</div>
										<div class="content-padding-l-r-20" data-animation-container>
											<h3 class="title-style text-color-1 top-margin-30 blog-title">
												<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">{{ $item->title }}</span><br>
												<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">{{ $item->sub_title }}</span><br>
												<span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">{{ $item->title_tow }}</span>
											</h3>
											<p data-animation-child class="fade-anim-box hover-content tr-delay03 p-style-medium text-color-2" data-animation="fade-anim">{!! Str::limit($item->sub_description,120) !!}</p>
										</div>
									</a>
									<div class="content-padding-l-r-20 content-padding-bottom-20" data-animation-container>
										<ul data-animation-child class="blog-category top-margin-30 fade-anim-box text-color-2" data-animation="fade-anim">
											<li><i class="fas fa-thumbtack text-color-3"></i></li>
											<li class="p-letter-style pointer-small hover-color"><a href="{{ route('blog.front',$item->slug) }}">{{ $item->sub_title_tow }}</a></li>
										</ul>
										<ul data-animation-child class="blog-tags top-margin-10 fade-anim-box tr-delay01 text-color-2" data-animation="fade-anim">
											<li><i class="fas fa-tags text-color-3"></i></li>
											<li class="p-letter-style pointer-small hover-color"><a href="{{ route('blog.front',$item->slug) }}">{{ $item->title_three }}</a></li>
										</ul>
										<div data-animation-child class="blog-autor-date top-margin-30 fade-anim-box tr-delay02 text-color-1" data-animation="fade-anim">
											<a class="xsmall-title-oswald pointer-small hover-color" href="{{ route('blog.front',$item->slug) }}">{{ $item->sub_title_three }}</a>
											<a class="xsmall-title-oswald pointer-small hover-color" href="{{ route('blog.front',$item->id) }}">{{ $item->created_at->toFormattedDateString('m-d') }}</a>
										</div>
									</div>
								</div>
							</article><!-- blog-entry end -->
						@endforeach
					</div><!-- column end -->
					<!-- column start -->
					@include('frontend.page.partical.sidebar-blog')
				</div><!-- flex-container end -->
			</div><!-- blog end -->
		</main><!-- animsition-overlay end -->

@section('jsfrontend')

@endsection