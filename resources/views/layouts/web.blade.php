<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
	@if (Route::getCurrentRoute()->uri() == 'login')
	<header id="header"><!--header-->		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{route('index')}}"><img src="{{ asset('images/home/logo.png') }}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<!--<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>-->
								@if(Auth::check())
								@role('Administrador')
								<li><a href="{{route('home.index')}}"> Panel de Administrador</a></li>
								@endrole
								<li><a href="{{ route('logout') }}"
										onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
										Cerrar Sesion
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>								
								@else
								<li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Iniciar Sesion</a></li>
								@endif
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
								<li><a href="{{route('index')}}">Inicio</a></li>
								<li><a href="{{route('shop')}}">Tienda</a></li>
								<li><a href="{{route('blogs')}}">Blog</a></li>
								<li><a href="{{route('contact-us')}}">Contacto</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" name="search" value="{{ @$search }}"placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
</header><!--/header-->	
	@else
		@include('includes.header')
	@endif
    @if (Route::getCurrentRoute()->uri() == '/')
		@include('includes.slider')
	@elseif (Route::getCurrentRoute()->uri() == 'shop')
		@include('includes.advertising')
	@endif 
	@if (Route::getCurrentRoute()->uri() == 'contact-us')
	<div id="contact-page" class="container">
    	<div class="bg">
	    	@yield('content') 
    	</div>	
    </div>
	@elseif (Route::getCurrentRoute()->uri() == 'login')
	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>
	@else
    <section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
				@include('includes.sidebar')
				</div>
				<div class="col-sm-9">
				@yield('content')
				</div>
			</div>
		</div>
	</section>
	@endif 
	@if (Route::getCurrentRoute()->uri() != 'login')
		@include('includes.footer')
	@endif
    @include('includes.scripts')
</body>
</html>