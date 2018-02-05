@extends('layouts.web')
@section('content')
<div class="features_items"><!--features_items-->
	<h2 class="title text-center">Productos destacados</h2>
	@foreach($products as $product)
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img class="img-responsive" src="{{ asset('/image/products/'.$product->cover_img) }}" alt="{{$product->cover_img}}">
					<h2>${{ $product->price }}</h2>
					<p>{{ $product->name }}</p>
					<a href="{{ route('shop.details', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-plus-square-o"></i>Ver detalle</a>
				</div>
				<div class="product-overlay">
					<div class="overlay-content">
						<h2>${{ $product->price }}</h2>
						<p>{{ $product->name }}</p>
						<a href="{{ route('shop.details', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-plus-square-o"></i>Ver detalle</a>
					</div>
				</div>
			</div>
			<!-- <div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
					<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
				</ul>
			</div>-->
		</div>
	</div>
	@endforeach
	{{ $products->links() }}
</div><!--features_items-->
@endsection