@extends('frontend.layouts.master')

@section('titlefrontend')
{{ str_replace("-"," ",ucfirst(TranslationHelper::translate('Portfolio'))) }}
@endsection

@section('cssfrontend')
@endsection

@section('contentfrontend')

<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
    <!-- page-head start -->
    <x-Portfolio.Slider />
    <!-- light-bg-1 start -->
    <div id="down" class="light-bg-1 bottom-padding-30 top-padding-120" data-midnight="black">
        <x-home.RecentWork />
    </div><!-- light-bg-1 end -->

</main><!-- animsition-overlay end -->
@endsection


@section('jsfrontend')
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
@endsection