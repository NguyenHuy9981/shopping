
@extends('layouts.main')

@section('title')
  <title>Trang chủ</title>
@endsection

@section('css')
<link href="{{ asset('public\home\home.css') }}" rel="stylesheet"/>
@endsection


@section('content')
    
	<div class="wrapper">

    @include('partials.cartComponent')
					
	</div>				
					
	
	
@endsection

@section('js')
  <!-- import thư viện JS -->
  <script src="{{ asset('public\cart\cart.js') }}"></script>
@endsection