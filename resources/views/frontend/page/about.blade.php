@extends('frontend.layouts.master')

@section('titlefrontend')
{{ str_replace("-"," ",ucfirst(TranslationHelper::translate('About'))) }}
@endsection

@section('cssfrontend')
@endsection

@section('contentfrontend')


<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
    <!-- page-head start -->

    <x-About.Slide/>
    <x-About.WhoWeAre/>
    <x-About.Creative/>
    {{-- <x-About.Price/> --}}
    {{-- <x-home.Testimonial /> --}}

</main><!-- animsition-overlay end -->

@endsection


@section('jsfrontend')
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
@endsection




