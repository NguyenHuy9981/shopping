<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ route('home') }}">Home</a></li>
				  <li class="active">Giỏ hàng</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@php
							$total = 0;
						@endphp


						@if(!empty($carts))
                        @foreach($carts as $cart)
						<tr>
							<td class="cart_product">
								<a href=""><img class="width-height" src="{{ config('app.base_url') . $cart['feature_image'] }}" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{ $cart['name'] }}</a></h4>
								<p>Mã ID: {{ $cart['id'] }}</p>
							</td>
							<td class="cart_price">
								<p>{{ number_format($cart['price']) }} VNĐ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" data-id="{{ $cart['id'] }}" data-url="{{ route('updateCart') }}" type="number" name="quantity" value="{{ $cart['quantity'] }}" min="1">
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{ number_format($cart['price'] * $cart['quantity']) }} VNĐ</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" data-id="{{ $cart['id'] }}" data-url="{{ route('deleteCart') }}"><i class="fa fa-times"></i></a>
							</td>

							@php
								$total += $cart['price'] * $cart['quantity'] ;
							@endphp
						</tr>
                        @endforeach
						@endif

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-6">
					<div class="total_area">
						<ul>

							<li>Tổng hóa đơn <span>{{ number_format($total) }} VNĐ</span></li>
						</ul>
							<a class="btn btn-default check_out" href="">Thanh toán</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->