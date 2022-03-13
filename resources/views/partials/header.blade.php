<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> {{ config_web('phone') }}</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> {{ config_web('email') }}</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{ config_web('link_facebook') }}"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
								<li><a href="#"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
								<li><a href="{{ route('showCart') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<li><a href="#"><i class="fa fa-lock"></i> Đăng nhập</a></li>
								<li><a href="#"><i class="fa fa-lock"></i> Đăng ký</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{ route('home') }}" class="active">Home</a></li>
								@foreach($menus as $menu)
								<li class=""><a href="#">{{$menu->name}} @if($menu->parentMenu->count())<i class="fa fa-angle-down"></i>@endif</a>
								<ul role="menu" class="sub-menu">
								@include('partials.header-menu')
								</ul>
                                </li> 
								@endforeach
							</ul>
						</div>


					</div>
					<div class="col-sm-3">
						<form action="{{ route('search') }}" method="GET">
						<div class="search_box pull-right">
							<input type="text" name="search" value="{{ request()->input('search') }}" placeholder="Tìm kiếm"/>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->