<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <title>
		{% block browsertitle %} 
			Travelsite 
		{% endblock %}
	</title> -->

	<title>
		@yield('browsertitle')  
	</title>
	
	<link rel="icon" type="image/png" href="/assets/siteicon/travel.png">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/style.css">

	<!-- {% block css %}
	     {% endblock %} -->

	@yield('css')
</head>

<body style="overflow-x: hidden;">

	@include('topnav');

	@yield('outsidecontainer')

	<div class="container">

		<div class="row">
			<br><br>

			@include('errormessage')
		</div>

		@yield('content')

	</div>

	<footer class="footer footer-background">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					Contact Us
					
				</div>
				<div class="col-sm-6">
					footer text
				</div>
				<div class="col-sm-3">
					footer text
				</div>
			</div>
		</div>
	</footer>

	<script src="http://code.jquery.com/jquery-1.11.3.min.js" integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g=" crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js" integrity="sha256-HmfY28yh9v2U4HfIXC+0D6HCdWyZI42qjaiCFEJgpo0=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	@yield('bottomjs')

</body>
</html>