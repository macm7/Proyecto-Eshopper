<div class="left-sidebar">
	<h2>Categorías</h2>
	<div class="panel-group category-products" id="accordian"><!--category-productsr-->
		@foreach($categories as $category)
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a href="{{ route('shop.cat', $category->id) }}">{{$category->category}}</a></h4>
			</div>
		</div>
		@endforeach
	</div><!--/category-products-->
	<div class="shipping text-center"><!--shipping-->
		<img src="{{asset('images/home/shipping.jpg')}}" alt="" />
	</div><!--/shipping-->
</div>