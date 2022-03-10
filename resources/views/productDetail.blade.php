
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
    
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{ config('app.base_url') . $product->feature_image }}" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								  @if($product->images->count())
								    <div class="carousel-inner">
									@foreach($product->images as $key => $productImage)
										<div class="item {{$key == 0 ? 'active' : ''}}">

										<a href=""><img class="width-height" src="{{ config('app.base_url') . $productImage->image_path }}" alt=""></a>

										</div>
									@endforeach
										
									</div>
								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
								  @endif
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{ $product->name }}</h2>
								<p>Mã ID: {{ $product->id }}</p>
								<img src="images/product-details/rating.png" alt="" />
								<span class="quantity">
									<span>{{ number_format($product->price) }} VNĐ</span>
									<label>Số lượng:</label>
									<input class="quantity-value" type="number" min="1" value="1"/>
									<button type="button" class="btn btn-fefault cart add-to-detail" data-url="{{ route('addToCart', $product->id) }}">
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng
									</button>
								</span>
								<p><b>Tình trạng:</b> Còn hàng</p>
								<p><b>Trạng thái:</b> Còn mới</p>
								
								<b>Tag:</b> 
								@if($product->tags->count()) 
                                    @foreach($product->tags as $tag_Product) 
								<a class="btn btn-primary " href="#" role="button">{{ $tag_Product->name }}</a>
                                        
									@endforeach
                                @endif
								
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
</div><!--/product-details-->
	
@endsection

@section('js')
  <!-- import thư viện JS -->
  <script src="{{ asset('public\home\home.js') }}"></script>
@endsection

