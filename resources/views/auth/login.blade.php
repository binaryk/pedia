@extends('front.template')

@section('main')

		<div class="container-login">
			<div class="col-md-6 col-md-offset-3">
				@if(session()->has('error'))
					@include('partials/error', ['type' => 'danger', 'message' => session('error')])
				@endif


				{!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<div class="row login-box">

					{!! Form::control('text', 6, 'log', $errors, trans('front/login.log')) !!}
					{!! Form::control('password', 6, 'password', $errors, trans('front/login.password')) !!}
					{!! Form::submit(trans('front/form.send'), ['col-lg-12']) !!}
					{!! Form::check('memory', trans('front/login.remind')) !!}
					{!! Form::text('address', '', ['class' => 'hpet']) !!}
					<div class="col-lg-12">
						{!! link_to('password/email', trans('front/login.forget')) !!}
					</div>

				</div>

				{!! Form::close() !!}

			</div>
			</div>


@stop

