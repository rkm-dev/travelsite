<!-- {% extends "base.html" %} -->
@extends('base')

	<!-- {% block browsertitle %}
		Travelsite: Register
	{% endblock %} -->

	@section('browsertitle')
		TravelSite: Register
	@stop

	@section('content')
		<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-8">
			    <h1>Register</h1>
			    <hr>

			    <form id="registerform" name="registerform" class="form-horizontal" action="/register" method="post" novalidate>
			    	<div class="form-group">
			    	    <label for="first_name" class="col-sm-2 control-label">First Name</label>
			    	    <div class="col-sm-10">
			    	    	<input type="text" id="first_name" class="form-control required" name="first_name" placeholder="First Name" required="required">
			    	    </div>
			    	</div>

			    	<div class="form-group">
			    		<label for="last_name" class="col-sm-2 control-label">Last Name</label>
			    		<div class="col-sm-10">
			    			<input type="text" id="last_name" class="form-control required" placeholder="Last Name" name="last_name" required="required">
			    		</div>
			    	</div>

			    	<div class="form-group">
			    		<label for="email" class="col-sm-2 control-label">Email</label>
			    		<div class="col-sm-10">
			    			<input type="email" id="email" class="form-control required email" placeholder="user@email.com" name="email" required="required">
			    		</div>
			    	</div>

			    	<div class="form-group">
			    		<label for="verify_email" class="col-sm-2 control-label">Verify Email</label>
			    		<div class="col-sm-10">
			    			<input type="email" id="verify_email" class="form-control required email" placeholder="user@email.com" name="verify_email" required="required">
			    		</div>
			    	</div>

			    	<div class="form-group">
			    		<label for="password" class="col-sm-2 control-label">Password</label>
			    		<div class="col-sm-10">
			    			<input type="password" id="password" class="form-control required" placeholder="Password" name="password" required="required">
			    		</div>
			    	</div>

			    	<div class="form-group">
			    		<label for="confirm_password" class="col-sm-2 control-label">Verify Password</label>
			    		<div class="col-sm-10">
			    			<input type="password" id="confirm_password" class="form-control required" placeholder="confirm_password" name="confirm_password" required="required">
			    		</div>
			    	</div>
			    	<hr>

			    	<div class="form-group">
			    		<div class="col-sm-offset-2 col-sm-10">
			    			<input type="submit" class="btn btn-primary" value="Sign Up">
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
				$('#registerform').validate({  //jquery-validate include in the base.html
					rules: {
						verify_email: {
							required: true,
							email: true,
							equalTo: "#email"
						},
						confirm_password: {
							required: true,
							equalTo: "#password"
						}
					}
				});
			});
		</script>
	@stop
	


