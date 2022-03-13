
@extends('layouts.main')

@section('title')
  <title>Trang chủ</title>
@endsection

@section('sidebar')
@include('partials.sidebar')
@endsection

@section('slider')
@include('partials.slider')
@endsection

@section('css')
<link href="{{ asset('public\home\home.css') }}" rel="stylesheet"/>
@endsection


@section('content')
    
	<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm nổi bật</h2>
						@foreach($products as $product)
						<div class="col-sm-4">
							
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{ config('app.base_url') . $product->feature_image }}" alt="" />
											<h2>{{ number_format($product->price) }} VNĐ</h2>
											<p>{{ $product->name }}</p>
											<a data-url="{{ route('addToCart', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{ number_format($product->price) }} VNĐ</h2>
												<p>{{ $product->name }}</p>
												<a data-url="{{ route('addToCart', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li> -->
										<li><a href="{{ route('product.detail', $product->id) }}"><i class="fa fa-plus-square"></i>Xem sản phẩm</a></li>
									</ul>
								</div>
							</div>
							
						</div>
						@endforeach
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
							@php
								$t = 0;
							@endphp
								@foreach($tags as $tag)
									@php
										$t += 1;
									@endphp
								<li class="{{$t === 1 ? 'active' : ''}}"><a href="#{{ $tag->id }}" data-toggle="tab">{{ $tag->name }}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="tab-content">
						@php
							$u = 0;
						@endphp
						
						@foreach($tags as $tag)
							@php
								$u += 1;
							@endphp
							<div class="tab-pane fade {{$u === 1 ? 'active in' : ''}}" id="{{ $tag->id }}" >
						@if($tag->products->count())
							@foreach($tag->products as $productOfTag)
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{ config('app.base_url') . $productOfTag->feature_image }}" alt="" />
												<h2>{{ number_format($productOfTag->price) }} VNĐ</h2>
												<p>{{ $productOfTag->name }}</p>
												<a data-url="{{ route('addToCart', $productOfTag->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>
							@endforeach
						@endif
						</div>
						@endforeach	
						</div>
					</div><!--/category-tab-->
					
					
					
	</div>

	
	
@endsection

@section('js')
  <!-- import thư viện JS Sweetalert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- import thư viện JS -->
  <script src="{{ asset('public\home\home.js') }}"></script>
@endsection


