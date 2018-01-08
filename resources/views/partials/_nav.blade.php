 <header id="navigation" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="{{ URL::to('/') }}"><img src="{{ URL::to('img/logo.png') }}" height="40" width="164" alt=""></a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav menu">

                        
                        @php 
                            if(Request::is('/')){ @endphp
                                
                            <li id="s1"><a href="{{asset('/#top')}}">Home</a></li>
                            <li id="s2"><a href="{{asset('/#features')}}">Services</a></li>
                            <li id="s3"><a href="{{asset('/#reviews')}}">Reviews</a></li>
                            <li id="s4"><a href="{{asset('/#portfolio')}}">Portfolio</a></li>
                            <li id="s5"><a href="{{asset('/#blog')}}">Blog</a></li>


                        @php }else{ @endphp

                            <li><a href="{{asset('/#top')}}">Home</a></li>
                            <li><a href="{{asset('/#features')}}">Services</a></li>
                            <li><a href="{{asset('/#reviews')}}">Reviews</a></li>
                            <li><a href="{{asset('/#portfolio')}}">Portfolio</a></li>
                            <li class="active"><a href="{{asset('/blog')}}">Blog</a></li>


                        @php } @endphp
                         

                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>