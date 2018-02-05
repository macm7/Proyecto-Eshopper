@extends('layouts.web')
@section('content')
					<div class="blog-post-area">
						<h2 class="title text-center">Nuestro Blog</h2>
						<div class="single-blog-post">
							<h3>{{$post->title}}</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> {{$post->user->name}}</li>
									<li><i class="fa fa-clock-o"></i>{{ $post->created_at->format('H:i') }}</li>
									<li><i class="fa fa-calendar"></i>{{ $post->created_at->format('M d, Y') }}</li>
								</ul>
							</div>
							<img class="img-responsive" src="{{ asset('/image/post/'.$post->image_name) }}" alt="">
							</br>
							<p>{{$post->content}}</p>
						</div>
					</div><!--/blog-post-area-->
					<center><h3>Sobre el creador del post</h3></center>
					<div class="media commnets">
						<div class="pull-left">
							<img class="media-object" src="{{asset('images/blog/man-one.jpg')}}" alt="">
						</div>
						<div class="media-body">
							<h4 class="media-heading">{{$post->user->name}}</h4>
							@empty($post->user->bio)
							<p>Esta persona no posee biografia aun.</p>
							@else
							<p>{{$post->user->bio}}.</p>
							@endempty
						</div>
					</div><!--Comments-->
					
					<div class="response-area">
						<h2>COMENTARIOS</h2>
						@foreach($post->comments as $comment)
						<ul class="media-list">
							<li class="media">		
								<div class="pull-left">
									<img class="media-object" src="{{asset('images/blog/man-two.jpg')}}" alt="">
								</div>
								<div class="media-body">
									<ul class="sinlge-post-meta">
										<li><i class="fa fa-user"></i>{{ $comment->name }}</li>
										<li><i class="fa fa-clock-o"></i>{{ $comment->created_at->format('H:i') }}</li>
									<li><i class="fa fa-calendar"></i>{{ $comment->created_at->format('M d, Y') }}</li>
									</ul>
									<p>{{ $comment->comment }}</p>
									<!--<a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Reply</a>-->
								</div>
							</li>
						</ul>
						@endforeach					
					</div><!--/Response-area-->
					<div class="replay-box">
						<div class="row">
						<form role="form" action="{{ route('blog.comment', $post->id) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('POST') }}
								<div class="col-sm-4">
									<h2>Deja un comentario</h2>
									<div class="blank-arrow form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
										<label>Nombre</label><span>*</span>
										<input type="text" class="form-control" id="name" name="name" 
										placeholder="su nombre..." value="{{ old('name') }}">
										@if($errors->has('name'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
									</div>
									<div class="blank-arrow form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
										<label>Correo Electronico</label><span>*</span>
										<input type="email" class="form-control" id="email" name="email" 
										placeholder="su correo electronico..." value="{{ old('email') }}">
										@if($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="col-sm-8 text-area">
									<div class="blank-arrow form-group has-feedback {{ $errors->has('comment') ? 'has-error' : '' }}">
										<label>Comentario</label><span>*</span>
										<textarea name="comment" id="comment" rows="11" 
										placeholder="escribir comentario..." class="form-control">{{old('comment')}}</textarea>
										@if($errors->has('comment'))
											<span class="help-block">
												<strong>{{ $errors->first('comment') }}</strong>
											</span>
										@endif
									</div>
										<button class="btn btn-primary">Enviar comentario</button>
									</div>
								</div>
							</form>
						</div>
					</div><!--/Repaly Box-->
@endsection