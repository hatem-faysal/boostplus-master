@extends('frontend.layouts.master')

@section('titlefrontend')
{{ str_replace("-"," ",ucfirst(TranslationHelper::translate('Home'))) }}
@endsection

@section('cssfrontend')
@endsection

@section('contentfrontend')

<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
   
    <x-home.Slider />
    <x-home.Creative />
    <x-home.RecentWork />
    <x-home.Partenrs />



   
</main>
<!-- animsition-overlay end -->
@endsection


@section('jsfrontend')
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
@endsection