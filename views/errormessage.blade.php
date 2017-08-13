
	<!-- Blade syntax -->

	@if (isset($_SESSION['msg']))
		<div class="alert alert-danger" role="alert">
			<ul>
    			@foreach($_SESSION['msg'] as $error)
    				<li> 
    					{!! $error !!}
    				</li>
    			@endforeach
	    	</ul>
    	</div>
    @endif
	
	@if (isset($_SESSION['successmsg']))
		<div class="alert alert-success" role="alert">
				<center>{!! $_SESSION['successmsg'] !!}</center>
		</div>
	@endif
	