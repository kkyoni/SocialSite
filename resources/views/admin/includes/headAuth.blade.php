<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> {{Settings::get('project_title')}} - Admin Login</title>
	@notifyCss
	<link href="{{ asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
	{{-- <link href="{{ asset('assets/admin/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet"> --}}
	{{-- <link href="{{ asset('assets/admin/css/animate.css')}}" rel="stylesheet"> --}}
	<link href="{{ asset('assets/admin/css/style.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/particles/style.css')}}" rel="stylesheet">
	<link rel="icon" href="{{ url(\Settings::get('favicon_logo')) }}" type="{{ url(\Settings::get('favicon_logo')) }}" sizes="16x16">
	{{-- <link href="{{ asset('assets/admin/css/custom.css')}}" rel="stylesheet"> --}}
	<style type="text/css">
		.ibox-content{
			width: 350px;
			top: 150px;
			position: absolute;
		}
	</style>
</head>
