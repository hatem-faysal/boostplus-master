

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-Meta.Meta />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <title> @yield('titlefrontend') </title>
	@include('frontend.layouts.css.css')


</head>

<body class="loader">
	<!-- loading start -->
	<x-Loading.Loading />

	    
		<!-- pointer start -->
		<div class="pointer" id="pointer">
			<i class="fas fa-long-arrow-alt-right"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-link"></i>
		</div><!-- pointer end -->
		
		<!-- to-top-btn start -->
		<a class="to-top-btn pointer-small" href="#up">
			  <span class="to-top-arrow"></span>		    
		</a><!-- to-top-btn end -->
	    
		<x-Frontend.Head />

		
       <x-Frontend.Nav />

		@yield('contentfrontend')

		<x-Frontend.footer />

	@include('frontend.layouts.js.js')

</body>

</html>

