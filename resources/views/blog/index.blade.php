@extends('layouts.main')
	

       
@section('content')

		<section id="blog-left">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-0 col-sm-10 col-sm-offset-1">
						
						
						<div class="blog-comment-main">
							<div class="blog-comment">
								<div class="comment-text">
									@foreach ($posts as $post)
										<h4><a class="title" href="{{ url('blog/'.$post->slug) }}"  title="{{$post->title}}">{{ $post->title }}</a></h4>
										<p>Posted In : {{ date('M j, Y', strtotime($post->created_at)) }}</p>
										<p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</p>
										
										<a class="btn" href="{{ url('blog/'.$post->slug) }}">Continue Reading</a><br><br>

									@endforeach
								</div>
									<div class="text-center">
										{!! $posts->links(); !!}
									</div>
							</div>
						</div>


						
					</div>
					<div class="col-md-3 col-md-offset-1 col-sm-4">
						<div class="widget">
							<span>Categories</span>
							<div class="widget-body">
								<ul class="category-list">
									@foreach ($categories as $category)
								    	
								    	<li><a href="{{url('blog/category/'.$category->slug)}}">{{ $category->name }}</a></li>
								    @endforeach
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		
@endsection