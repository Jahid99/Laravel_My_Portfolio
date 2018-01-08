@extends('layouts.main')
	

       
@section('content')

	<div class="wrapper">
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<h1>Jahidul Haque Pathan - Web Developer</h1>
							<h2><i>Proficient with HTML, CSS, JAVASCRIPT, PHP, MYSQL, SEO, BOOTSTRAP, SASS, AJAX, LARAVEL, CODEIGNITER, GIT ,C , C++ and WORDPRESS<br>I am learning NODEJS and ANGULARJS now.</i></h2>
							<div class="buttons">
								<a href="https://github.com/jahid99" target="_blank" class="btn btn-learn">Follow me on github</a>
								<a href="https://www.facebook.com/JAHIDUL.HAQUE.PATHAN" target="_blank" class="btn btn-learn">Hire me</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="scrolldown">
	            <a id="scroll" href="#features" class="scroll"></a>
	        </div>
		</section>
		<section id="features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2>MY SERVICES</h2>
							<p>I design, build and maintain websites.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-6 col-sm-6">
						<div class="feature-block text-center">
							<div class="icon-box">
								<i class="ion-easel"></i>
							</div>
							<h4 class="wow fadeInUp" data-wow-delay=".3s">Responsive Web Design</h4>
							<p class="wow fadeInUp" data-wow-delay=".5s">Translate designs to front-end code, estimate time and costs.Write maintainable, scalable, responsive, and cross-browser code.My web designing expertise includes: HTML, CSS, JAVASCRIPT, BOOTSTRAP and SASS.</p>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 col-sm-6">
						<div class="feature-block text-center">
							<div class="icon-box">
								<i class="ion-paintbucket"></i>
							</div>
							<h4 class="wow fadeInUp" data-wow-delay=".3s">Web Application Development</h4>
							<p class="wow fadeInUp" data-wow-delay=".5s">I write cleaner and efficient codes that will make your website faster.My web developing expertise includes: PHP, LARAVEL, CODEIGNITER, AJAX, WORDPRESS and Strong database knowledge specifically MySQL.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="reviews">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2>MY CLIENT'S REVIEWS</h2><br>
                              <a href="https://www.fiverr.com/jahid99" target="_blank"><button href="https://www.fiverr.com/jahid99" class="button"><span>Hire me on Fiverr </span></button></a>
						</div>
					</div>
				</div>
				<div class="row">
					
					  <div id="myCarousel" class="carousel slide" data-ride="carousel">
					    <!-- Indicators -->
					    <ol class="carousel-indicators">
					      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					      <li data-target="#myCarousel" data-slide-to="1"></li>
					      <li data-target="#myCarousel" data-slide-to="2"></li>
					      <li data-target="#myCarousel" data-slide-to="3"></li>
					    </ol>

					    <!-- Wrapper for slides -->
					    <div class="carousel-inner" role="listbox">

					      <div class="item active">
					        <img src="img/slide-1.png" alt="Hire Professional Web Developer" width="460" height="345">
					        <div class="carousel-caption">
					          
					        </div>
					      </div>

					      <div class="item">
					        <img src="img/slide-2.png" alt="Hire Professional Web Developer" width="460" height="345">
					        <div class="carousel-caption">
					          
					        </div>
					      </div>
					    
					      <div class="item">
					        <img src="img/slide-3.png" alt="Hire Professional Web Developer" width="460" height="345">
					        <div class="carousel-caption">
					          
					        </div>
					      </div>
					  
					    </div>

					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					      <span class="sr-only">Next</span>
					    </a>
					  </div>
				</div>
			</div>
		</section>

		<section id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2>MY WORKS</h2>
							<p>There are all the works i have done so far.</p>
						</div>
						<div class="block">
							<div class="recent-work-mixMenu">
								<ul>
									<li><button class="filter" data-filter="all">All</button></li>
									@foreach($work_categories as $work_category)
									<li><button class="filter" data-filter=".category-{{ $work_category->slug }}">{{ $work_category->name }}</button></li>
									@endforeach
								</ul>
							</div>
							<div class="recent-work-pic">
								<ul id="mixed-items">
									@foreach($works as $work)
									<li class="mix category-{{ $work->category_slug }} col-md-4 col-xs-6" data-my-order="{{ $work->work_order }}">	
										<a href="img/{{ $work->lightbox_image }}" data-fancybox data-caption="{!! $work->caption !!}">
											<img src="img/{{ $work->image }}" class="img-responsive" alt="{{ $work->image_alt }}" />
											<div class="overlay">
													<h3>{{ $work->overlay_title }}</h3>
													<i class="ion-ios-plus-empty"></i>
											</div>
										</a>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2>My Latest Blog Posts</h2><br>
                              <a href="{{asset('/blog')}}" target="_blank"><button href="https://www.fiverr.com/jahid99" class="button"><span>See All Posts </span></button></a>
						</div>
						<div id="blog-post" class="owl-carousel">
							@foreach ($posts as $post)
							<div>
								<div class="block">
						
									<div class="content">
										<h4><a href="{{ url('blog/'.$post->slug) }}" title="{{$post->title}}">{{ substr(strip_tags($post->title), 0, 35) }}{{ strlen(strip_tags($post->title)) > 10 ? "..." : "" }}</a></h4>
										<small>Posted In : {{ date('M j, Y', strtotime($post->created_at)) }}</small>
										<p>
											{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}
										</p>
										<a href="{{ url('blog/'.$post->slug) }}" class="btn btn-read">Read More</a>
										
									</div>
								</div>
							</div>
							@endforeach
							
							
						</div>	

					</div>
				</div>
			</div>
		</section>

		
		
		@endsection