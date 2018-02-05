@extends('layouts.web')
@section('content')
<div class="features_items"><!--features_items-->
	<h2 class="title text-center">Productos recientes</h2>
	@foreach($products as $product)
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
					<img class="img-responsive" src="{{ asset('/image/products/'.$product->cover_img) }}" alt="{{$product->cover_img}}">
						<h2> {{ $product->price }}</h2>
						<p>{{ $product->name }}</p>
						<a href="{{ route('shop.details', $product->id) }}" class="btn btn-default add-to-cart">Ver detalle</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2> {{ $product->price }}</h2>
							<p>{{ $product->name }}</p>
							<a href="{{ route('shop.details', $product->id) }}" class="btn btn-default add-to-cart">Ver detalle</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- endforeach -->
	@endforeach
	</div><!--features_items-->
	<div class="recommended_items">
		<h2 class="title text-center">Publicaciones recientes</h2>
			<div class="blog-post-area">
			@foreach($posts as $post)
			<div class="single-blog-post col-sm-6">
				<h3>{{$post->title}}</h3>
				<div class="post-meta">
					<ul>
						<li><i class="fa fa-user"></i> {{$post->user->name}}</li>
						<li><i class="fa fa-clock-o"></i>{{ $post->created_at->format('H:i') }}</li>
						<li><i class="fa fa-calendar"></i>{{ $post->created_at->format('M d, Y') }}</li>
					</ul>
				</div>
				<img class="img-responsive" src="{{ asset('/image/post/'.$post->image_name) }}" alt="">
				</br><p>{{ str_limit($post->content, $limit = 250, $end = '...') }}</p>
				<a  class="btn btn-primary" href="{{ route('blog.details', $post->id) }}">Leer mas</a>
			</div>
			@endforeach
		</div>
	</div>
@endsection