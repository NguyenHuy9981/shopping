<!DOCTYPE html>
<html lang="en">
<head>
  @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('public/eshopper/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/eshopper/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/eshopper/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/eshopper/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/eshopper/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('public/eshopper/css/main.css') }}" rel="stylesheet">
	
    @yield('css')
</head><!--/head-->

<body>

<section>
@include('partials.header')
@yield('slider')

	<div class="container">
		<div class="row">
        @yield('sidebar')
        
        @yield('content')
		</div>
	</div>
    
@include('partials.footer')
</section>

  
    <script src="{{ asset('public/eshopper/js/jquery.js') }}"></script>
	<script src="{{ asset('public/eshopper/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/eshopper/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('public/eshopper/js/price-range.js') }}"></script>
    <script src="{{ asset('public/eshopper/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/eshopper/js/main.js') }}"></script>
    @yield('js')
</body>
</html>