@extends('emails.base-email')

@section('body')
	<p>
		Welcome to Travelsite
	</p>

	<p>
		Please <a href="{!! getenv('HOST') !!}/verify-account?token={!! $token !!}">click this link to activate</a> your account
	</p>
@stop