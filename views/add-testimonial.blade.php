<!-- {% extends "base.html" %} -->
@extends('base')

	@section('browsertitle')
		TravelSite: Testimonials
	@stop

	@section('content')

		<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-8">
			    <h1>Add Testimonials</h1>
			    <hr>

			    <form name="testimonialform" id="testimonialform" action="/add-testimonial" method="post" class="form-horizontal">
			    	<div class="form-group">
			    	    <label for="title" class="col-sm-2 control-label">Title</label>
			    	    <div class="col-sm-10">
			    	    	<input type="text" id="title" name="title" class="form-control required" placeholder="Title">
			    	    </div>
			    	</div>
			    	<div class="form-group">
			    		<label for="testimonial" class="col-sm-2 control-label">Testimonial</label>
			    		<div class="col-sm-10">
			    			<textarea id="testimonial" placeholder="testimonial..........!" class="form-control required" name="testimonial" resize="no-resize"></textarea>
			    		</div>
			    	</div>
			    	<hr>

			    	<div class="form-group">
			    		<div class="col-sm-offset-2 col-sm-10">
			    			<button type="submit" class="btn btn-primary">Submit Testimonial</button>
			    		</div>
			    	</div>
			    </form>
			</div>

			<div class="col-sm-2"></div>
		</div>

	@stop

	@section('bottomjs')
		<script>
			$(document).ready(function(){
				$("#testimonialform").validate();
			});
		</script>
	@stop
