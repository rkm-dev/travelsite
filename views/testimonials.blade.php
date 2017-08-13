@extends('base')

	@section('browsertitle')
		Travelsite: Testimonials
	@stop

	@section('content')

		<div class="list-group">
			<a href="#" class="list-group-item active">
				<h2 class="list-group-item-heading">Testimonials</h2>
			</a>
		</div>

		<div class="list-group">
			@foreach ($testimonials as $item)
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">
						{!! $item->title !!}
						<span class="list-group-item-text pull-right" style="font-size: 14px;color: darkslategrey;">{!! date("F d, Y", strtotime($item->created_at)) !!}</span>
					</h4>
					<p>{!! $item->testimonial !!}</p>
				</a>
			@endforeach
		</div>
	@stop