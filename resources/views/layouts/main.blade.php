<!DOCTYPE html>
	<html lang="{{ app()->getLocale() }}">
	<head>
		
		 @include('partials._head')

	</head>
	<body id="top">
	

       @include('partials._nav')

       <div class="wrapper">
       @yield('content')
       </div>
       
          <!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog modal-sm">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <center><h4 class="modal-title">Need a Website at a Cheap Rate?</h4>
		          <a class="btn" href="{{ URL::to('/') }}">Click Here</a>
		          <h4 class="modal-title">Starting From Just $10</h4>
		          </center>

		        </div>
		      </div>
		    </div>
		  </div>

	 @include('partials._footer')
	

	</body>
</html>

		