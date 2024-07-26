@extends('frontend.layouts.master')

@section('titlefrontend')
{{ str_replace("-"," ",ucfirst(TranslationHelper::translate('Blog Single'))) }}
@endsection

@section('cssfrontend')
<link href="{{ asset('admin/js/toastr/css/toastr.min.css') }}" rel="stylesheet">
@endsection

@section('contentfrontend')
	
@endsection
    <!-- animsition-overlay start -->
    <main class="animsition-overlay" data-animsition-overlay="true">
        <!-- page-head start -->
        <section id="up" class="page-head flex-min-height-box dark-bg-2">
            <!-- page-head-bg -->
            <div class="page-head-bg overlay-loading2" style="background-image: url({{ asset($Blogs->getFirstMediaUrl('Blogs2') )}});"></div>
            
            <!-- flex-min-height-inner start -->
            <div class="flex-min-height-inner">
                <!-- flex-container start -->
                <div class="container top-bottom-padding-120 flex-container response-999">
                    <!-- column start -->
                    <div class="six-columns six-offset">
                        <div class="content-left-margin-40">
                            <h2 class="large-title">
                                <span class="load-title-fill tr-delay03" data-text="{{ $Blogs->title }}">{{ $Blogs->title }}</span><br>
                                <span class="load-title-fill tr-delay04" data-text="{{ $Blogs->sub_title }}">{{ $Blogs->sub_title }}</span><br>
                                <span class="load-title-fill tr-delay05" data-text="{{ $Blogs->title_tow }}">{{ $Blogs->title_tow }}</span>
                            </h2>
                            <div class="d-flex-wrap top-margin-20">
                                <a class="small-title-oswald text-height-20 pointer-large load-title-fill tr-delay06 top-margin-10" href="#" data-text="In: {{ $Blogs->sub_title_tow }}">In: {{ $Blogs->sub_title_tow }}</a>
                                <a class="small-title-oswald text-height-20 pointer-large load-title-fill tr-delay07 top-margin-10" href="#" data-text="By: {{ $Blogs->title_three }}">By: {{ $Blogs->title_three }}</a>
                                <a class="small-title-oswald text-height-20 pointer-large load-title-fill tr-delay08 top-margin-10" href="#" data-text="{{ $Blogs->created_at->toFormattedDateString('m-d') }}">{{ $Blogs->created_at->toFormattedDateString('m-d') }}</a>
                            </div>
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

        <!-- single-post start -->
        <div id="down" class="single-post container bottom-padding-30 top-padding-120 light-bg-1" data-midnight="black">
            <!-- flex-container start -->
            <div class="flex-container">
                <!-- column start -->
                <div class="eight-columns">
                    <!-- single-post-content start -->
                    <div class="light-bg-2">
                        <a class="photo-popup pointer-zoom" href="{{ asset($Blogs->getFirstMediaUrl('Blogs2') )}}">
                            <img src="{{ asset($Blogs->getFirstMediaUrl('Blogs2') )}}" alt="title">
                        </a>
                        <!-- content-margin-block start -->
                        <div class="content-margin-block">
                            <!-- entry-content start -->
                            <article class="entry-content">
                                <p class="p-style-medium text-color-1">{!! $Blogs->description !!}</p>
                        </div><!-- content-margin-block end -->
                    </div><!-- single-post-content end -->
                        
       
                 
                        
                    <!-- post-comments start -->
                    <div class="top-bottom-padding-90">
                        <div class="comments-box top-margin-30">
                            <div class="comments-form-box">
                                <h4 class="p-style-bold-up text-color-1">Leave A Reply</h4>
                                <form class="comments-form top-margin-30" action="{{ route('contactus.store') }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <input type="hidden" name="url" value="{{ url()->current() }}">
                                    <input type="hidden" name="type" value="blog">
                                    <input type="text" value="{{ old('firstname') }}" name="firstname" required class="comment-form-control pointer-small" placeholder="Your First Name">
                                    <input type="text" value="{{ old('lastname') }}" name="lastname" required class="comment-form-control pointer-small" placeholder="Your Last Name">
                                    <input type="email" value="{{ old('email') }}" required name="email" class="comment-form-control pointer-small" placeholder="Your Email">
                                    <textarea name="message" id="message" required class="comment-form-control pointer-small" placeholder="Message">{{ old('message') }}</textarea>
                                    <button class="arrow-btn-box pointer-large">
                                        <span class="arrow-btn">Submit</span>
                                    </button>	
                                </form>
                            </div><!-- comments-form-box end -->
                        </div><!-- comments-box end -->
                    </div><!-- post-comments end -->
                </div><!-- column end -->
                <!-- column start -->
                @include('frontend.page.partical.sidebar-blog')
            </div><!-- flex-container end -->
        </div><!-- single-post end -->
    </main><!-- animsition-overlay end -->

@section('jsfrontend')
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{ asset('admin/js/toastr/js/toastr.min.js') }}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
@include('frontend.layouts.Validation.errorValidation')
@endsection