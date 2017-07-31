<!-- {% extends 'base.html' %} -->
@extends('base')

	@section('browsertitle')
		TravelSite
	@stop

	<!-- {% block css %} -->
	@section('css')
		<style>
			.carousel{
				width: 100%;
				margin-top: 30px;
				max-height: 650px;
			}

			div.contain {
				width: 100%;
				max-height: 650px;
				overflow: hidden;
				position: relative;
			}

			img.contain {
			  	width: 100%;
			  	height: auto;
			}
		</style>
	@stop
	<!-- {% endblock %} -->
	

	@section('outsidecontainer')	
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
			</ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		        <div class="item active contain">
		      		<img src="/assets/slider/1.jpg" alt="image 1" class="contain">
		      		<div class="carousel-caption">
		        		TravelSite Tour
		      		</div>
		    	</div>

		    	<div class="item contain">
		      		<img src="/assets/slider/2.jpg" alt="image 2" class="contain">
		      		<div class="carousel-caption">
		        		Experirence Nature As Never Before
		      		</div>
		    	</div>
		    	
		    	<div class="item contain">
		      		<img src="/assets/slider/3.jpg" alt="image 3" class="contain">
		      		<div class="carousel-caption">
		        		Visit Arround The World
		      		</div>
		    	</div>

		    	<div class="item contain">
		      		<img src="/assets/slider/4.jpg" alt="image 4" class="contain">
		      		<div class="carousel-caption">
		        		Immerse Yourself In Raw Beauty Around You
		      		</div>
		    	</div>

		    	<div class="item contain">
		      		<img src="/assets/slider/5.jpg" alt="image 5" class="contain">
		      		<div class="carousel-caption">
		        		Adventure
		      		</div>
		    	</div>

		    	<div class="item contain">
		      		<img src="/assets/slider/6.jpg" alt="image 6" class="contain">
		      		<div class="carousel-caption">
		        		Peace and Beauty
		      		</div>
		    	</div>

		    	<div class="item contain">
		      		<img src="/assets/slider/7.jpg" alt="image 7" class="contain">
		      		<div class="carousel-caption">
		        		Register Now
		      		</div>
		    	</div>

		    	<div class="item contain">
		      		<img src="/assets/slider/8.jpg" alt="image 8" class="contain">
		      		<div class="carousel-caption">
		        		Register Now
		      		</div>
		    	</div>
		  	</div>

		  	<!-- Controls -->
		  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
		</div>
	@stop

	@section('content')
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 well text-center">
				<h3>About</h3>
				<span class="glyphicon glyphicon-globe bigger-icon" aria-hidden="true"> </span><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus rerum id, fugit doloremque itaque maiores, accusamus obcaecati nulla laboriosam, doloribus reiciendis nam vero autem dolorum dolores.</p>
			</div>

			<div class="col-md-4 well empty-well text-center">
				<h3>Tours</h3>
				<span class="glyphicon glyphicon-plane bigger-icon" aria-hidden="true"> </span><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus rerum id, fugit doloremque itaque maiores, accusamus obcaecati nulla laboriosam, doloribus reiciendis nam vero autem dolorum dolores.</p>
			</div>

			<div class="col-md-4 well text-center">
				<h3>Contact</h3>
				<span class="glyphicon glyphicon-earphone bigger-icon" aria-hidden="true"> </span><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus rerum id, fugit doloremque itaque maiores, accusamus obcaecati nulla laboriosam, doloribus reiciendis nam vero autem dolorum dolores.</p>
			</div>
		</div>
	@stop
