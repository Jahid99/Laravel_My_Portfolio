@extends('layouts.main')
	

       
@section('content')

		<section id="blog-left">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-0 col-sm-10 col-sm-offset-1">
						
						
						<div class="blog-comment-main">
							<div class="blog-comment">
								<div class="comment-text">
									<h1>{{ $post->title }}</h1>

									<p>{!! $post->body !!}</p>
									<span>Posted In : {{ date('M j, Y', strtotime($post->created_at)) }}</span>
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