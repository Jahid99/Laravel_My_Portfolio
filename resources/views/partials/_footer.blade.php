<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<a href="{{ URL::to('/') }}"><img src="{{ URL::to('img/logo.png') }}" alt=""></a>
							<p>All rights reserved © 2017</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

		<!-- load Js -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>
		<script src="{{ URL::to('js/waypoints.min.js') }}"></script>
		<script src="{{ URL::to('js/lightbox.js') }}"></script>
		<script src="{{ URL::to('js/jquery.counterup.min.js') }}"></script>
		<script src="{{ URL::to('js/owl.carousel.min.js') }}"></script>
		<script src="{{ URL::to('js/html5lightbox.js') }}"></script>
		<script src="{{ URL::to('js/jquery.mixitup.js') }}"></script>
		<script src="{{ URL::to('js/wow.min.js') }}"></script>
		<script src="{{ URL::to('js/jquery.scrollUp.js') }}"></script>
		<script src="{{ URL::to('js/jquery.sticky.js') }}"></script>
		@php 
          if(Request::is('/')){ @endphp
		<script src="{{ URL::to('js/jquery.nav.js') }}"></script>
		@php  }else{ @endphp
		<script type="text/javascript">
			$(window).load(function(){
    			setTimeout(function(){ $('#myModal').modal('show'); }, 5);
			});
		</script>
		@php } @endphp
		<script src="{{ URL::to('js/main.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
		<script src="{{ URL::to('js/scroll.js') }}"></script>
		
		
	