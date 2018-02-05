@extends('layouts.web')
	@section('content')

		<div class="product-details"><!--product-details-->

			<div class="col-sm-5">
				<div class="view-product">
					<img class="img-responsive" src="{{ asset('/image/products/'.$product->cover_img) }}" alt="{{$product->cover_img}}">
				</div>
			</div>
			
			<div class="col-sm-7">	
				<div class="product-information"><!--/product-information-->
					<h2>{{ $product->name }}</h2>
					<p>Código: {{ $product->ref_code }}</p>
					<span>
						<span>US ${{ $product->price }}</span>
					</span>
					<p><b>Cantidad: </b> {{ $product->quantity }}</p>
					<p><b>Disponibilidad: </b> {{ $product->availability }}</p>
					<p><b>Condición: </b> {{ $product->condition }}</p>
					<p><b>Categoria: </b> {{ $product->category_id }}</p>
									
				</div><!--/product-information-->
			</div>
		
		</div><!--/product-details-->
						
		<div class="category-tab shop-details-tab"><!--category-tab-->

			<div class="col-sm-12">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#details" data-toggle="tab">Descripción</a></li>
					<li><a href="#reviews" data-toggle="tab">Reseñas</a></li>
				</ul>
			</div>

			<div class="tab-content">

				<div class="tab-pane fade active in" id="details" >
					<div class="col-sm-12">
						<p>{{ $product->description }}</p>
					</div>
				</div>

				<div class="tab-pane fade" id="reviews" > 

					<div class="col-sm-12">

								<p><b>Escriba una reseña del producto</b></p>		
								<form role="form" action="{{ route('shop.review', $product->id) }}" method="post">
									{{ csrf_field() }}
									{{ method_field('POST') }}

									<span>	
										<input type="text" id="name" name="name" 
										placeholder="Nombre" value="{{ old('name') }}" size="500">
										@if($errors->has('name'))
											<span class="help-block">
												<strong> {{ $errors->first('name') }} </strong>
											</span>
										@endif

										<input type="email" id="email" name="email" 
										placeholder="Correo" value="{{ old('email') }}" size="500">
										@if($errors->has('email'))
											<span class="help-block">
												<strong> {{ $errors->first('email') }} </strong>
											</span>
										@endif

									</span>
									<textarea rows="3" id="review" name="review"></textarea>
									<button type="submit" class="btn btn-default pull-right">
										Publicar
									</button>
								</form>

						@foreach($product->reviews as $review)	
							<div class="media"> <!-- Review -->
								<div class="media-body">

										<ul class="sinlge-post-meta">
											<li><i class="fa fa-user"></i>{{ $review->name }}</li>
											<li><i class="fa fa-clock-o"></i>{{ $review->created_at->format('H:i') }}</li>
											<li><i class="fa fa-calendar"></i>{{ $review->created_at->format('M d, Y') }}</li>
										</ul>
										<p>{{ $review->review }}</p>

								</div>
							
							</div> <!-- Review -->

						@endforeach 

					</div>

				</div>

			</div>	
			
		</div><!--/category-tab-->
		<div class="recommended_items"><!--recommended_items-->
			<h2 class="title text-center">Productos recomendados</h2>
			<div id="recommended-item-carousel" class="ce" data-ride="carousel">
				<div class="carousel-inner">
					@foreach($productsFeatured as $productFeatured)	
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
								<img class="img-responsive" src="{{ asset('/image/products/'.$productFeatured->cover_img) }}" alt="{{$productFeatured->cover_img}}">
									<h2>US${{ $productFeatured->price }}</h2>
									<p>{{ $productFeatured->name }}</p>
									<a href="{{ route('shop.details', $product) }}" class="btn btn-default"><i class="fa fa-plus-square-o"></i> Ver mas</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach		
				</div>			
			</div>
		</div>

	@endsection