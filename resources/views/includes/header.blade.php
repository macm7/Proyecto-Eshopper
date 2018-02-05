<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
				@foreach($contactos as $contacto)
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> {{ $contacto->phone }}</a></li>
								<li><a href="mailto:{{ $contacto->mail }}">{{ $contacto->mail }}</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
							<li>
                            <a href="http://facebook.com/{{ $contacto->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="http://twitter.com/{{ $contacto->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="http://plus.google.com/{{ $contacto->google }}" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="http://youtube.com/channel/{{ $contacto->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a>
                        </li>
							</ul>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div><!--/header_top-->
		
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
								@role('admin')
								<li><a href="{{route('home.index')}}"> Panel de Administrador</a></li>
								@endrole
								@role('usuario')
								<li><a href="{{route('home.index')}}">Creacion de Post</a></li>
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
				</div>
			</div>
		</div><!--/header-bottom-->
</header><!--/header-->	