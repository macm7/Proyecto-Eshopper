<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
							<!-- <div class="col-sm-6">
								<h1><span>E</span>-SHOPPER</h1>
								<h2>g</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div> -->
							@foreach ($sliders as $slide) 
							<div class="item @if($slide->id === $slide->first()->id) {{ 'active' }} @endif">
								<img src="{{ asset('/image/sliders/'.$slide->img_name) }}" class="img-responsive" alt="{{ $slide->img_name }}" />
									{{--<img src="images/home/pricing.png"  class="pricing" alt="" />--}}
							</div>
                            @endforeach
					</div>
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				
			</div>
		</div>
	</div>
</section><!--/slider-->