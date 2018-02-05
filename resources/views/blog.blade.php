@extends('layouts.web')
@section('content')
	<div class="blog-post-area">
		<h2 class="title text-center">Lo mas reciente en el Blog</h2>
		@foreach($posts as $post)
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
			<p>{{ str_limit($post->content, $limit = 250, $end = '...') }}</p>
			<a  class="btn btn-primary" href="{{ route('blog.details', $post->id) }}">Leer mas</a>
		</div>
		@endforeach
		<div class="pagination-area">
			{{ $posts->links() }}
		</div>
	</div>
@endsection