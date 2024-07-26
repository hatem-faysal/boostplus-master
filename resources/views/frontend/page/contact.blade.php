@extends('frontend.layouts.master')

@section('titlefrontend')
{{ str_replace("-"," ",ucfirst(TranslationHelper::translate('Contact Us'))) }}
@endsection

@section('cssfrontend')
<link href="{{ asset('admin/js/toastr/css/toastr.min.css') }}" rel="stylesheet">
@endsection

@section('contentfrontend')

<main class="animsition-overlay" data-animsition-overlay="true">
    <!-- page-head start -->
    <x-Contact.Slider/>
    <x-Contact.ContactUs/>
    <x-Contact.Form/>
</main><!-- animsition-overlay end -->

@endsection



@section('jsfrontend')
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{ asset('admin/js/toastr/js/toastr.min.js') }}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
@include('frontend.layouts.Validation.errorValidation')
@endsection