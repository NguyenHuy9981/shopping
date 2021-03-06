
@extends('layouts.main')

@section('title')
  <title>Trang chủ</title>
@endsection

@section('sidebar')
@include('partials.sidebar')
@endsection


@section('css')
<link href="{{ asset('public\home\home.css') }}" rel="stylesheet"/>
@endsection


@section('content')
    
	<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                        @if($products->total() > 0)

						@foreach($products as $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{ config('app.base_url') . $product->feature_image }}" alt="" />
											<h2>{{ number_format($product->price) }}</h2>
											<p>{{ $product->name }}</p>
											<a data-url="{{ route('addToCart', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{ number_format($product->price) }}</h2>
												<p>{{ $product->name }}</p>
												<a data-url="{{ route('addToCart', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="{{ route('product.detail', $product->id) }}"><i class="fa fa-plus-square"></i>Xem sản phẩm</a></li>
									</ul>
								</div>
							</div>
							
						</div>
						@endforeach

                        @else
                        <div class="col-sm-12 search-bot">
                        <h4>Không có sản phẩm phù hợp với kết quả "{{ request()->input('search') }}"</h4>
                            <h5>Để tìm được kết quả chính xác hơn, bạn vui lòng:</h5>
                            <ul>
                                <li>-Kiểm tra lỗi chính tả của từ khóa đã nhập</li>
                                <li>-Thử lại bằng từ khóa khác</li>
                                <li>-Thử lại bằng những từ khóa tổng quát hơn</li>
                                <li>-Thử lại bằng những từ khóa ngắn gọn hơn</li>
                            </ul>
                            
                        </div>
                        @endif
                        
					</div><!--features_items-->
					

					
					
					
	</div>

	
	
@endsection

@section('js')
  <!-- import thư viện JS -->
  <script src="{{ asset('public\home\home.js') }}"></script>
@endsection


