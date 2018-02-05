<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							@foreach($contactos as $contacto)
							<p>{{ $contacto->name }}</p>
							@endforeach
						</div>
					</div>
					<div class="col-sm-7">
						@foreach($postsfooter as $postfooter)
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="{{ route('blog.details', $postfooter->id) }}">
									<div class="img-responsive">
										<img src="{{ asset('/image/post/'.$postfooter->image_name) }}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>{{$postfooter->title}}</p>
								<h2>{{ $postfooter->created_at->format('M d, Y') }}</h2>
							</div>
						</div>
						@endforeach
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('images/home/map.png')}}" alt="" />
							<p>{{ $contacto->address }}, {{ $contacto->state }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Servicio</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{route('index')}}">Inicio</a></li>
								<li><a href="{{route('shop')}}">Tienda</a></li>
								<li><a href="{{route('blogs')}}">Blog</a></li>
								<li><a href="{{route('contact-us')}}">Contactenos</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Tienda</h2>
							<ul class="nav nav-pills nav-stacked">
							@foreach($categories as $category)
								<li><a href="{{ route('shop.cat', $category->id) }}">{{$category->category}}</a></li>
							@endforeach
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<!--<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>-->
					</div>
					<div class="col-sm-2">
						<!--<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>-->
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Acerca de {{ $contacto->name }}</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Mantengase al dia con nuestras publicaciones directamente en su inbox...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
</footer><!--/Footer-->		
	