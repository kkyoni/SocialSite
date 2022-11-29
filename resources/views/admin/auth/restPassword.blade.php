@extends('admin.layouts.appAuth')
@section('authContent')
<div class="ibox-content ibox-content_login">
	@if(Session::has('message'))
	<div class="alert alert-{!! Session::get('alert-type') !!}">
		{!! Session::get('message') !!}
	</div>
	@endif
	<img src="{{ url(\Settings::get('site_logo')) }}" alt="image" class="rounded-circle" height="60px" width="60px" style="margin:0 auto">
	<h2 class="font-bold">Forgot password {{Settings::get('project_title')}}</h2>
	<div class="row">
		<div class="col-lg-12">
			<form method="POST" action="{{ route('admin.sendLinkToUser') }}">
				@csrf
				<div class="form-group">
					<input type="email"  name="email" class="form-control" placeholder="Email address" required="">
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<button type="submit" class="btn btn-primary block full-width m-b">Send new password</button>
				<a href="{{route('admin.login')}}"><small>{{ __('Back to login') }}</small></a>
			</form>
			<p class="m-t"> <small>{{Settings::get('copyright')}} &copy; {{ date('Y') }}</small> </p>
		</div>
	</div>
</div>
@endsection
@section('authStyles')
@endsection
@section('authScripts')
@endsection