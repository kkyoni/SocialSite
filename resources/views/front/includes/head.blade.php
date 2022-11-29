<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{Settings::get('project_title')}} || @yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{{ url(\Settings::get('favicon_logo')) }}">
<link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/front/lib/css/nivo-slider.css')}}">
<link rel="stylesheet" href="{{ asset('assets/front/css/core.css')}}">
<link rel="stylesheet" href="{{ asset('assets/front/css/shortcode/shortcodes.css')}}">
<link rel="stylesheet" href="{{ asset('assets/front/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css')}}">
<link rel="stylesheet" href="{{ asset('assets/front/css/custom.css')}}">
<link rel="stylesheet" href="{{ asset('assets/front/css/style-customizer.css')}}">
<link href="#" data-style="styles" rel="stylesheet">
<script src="{{ asset('assets/front/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js">
@yield('styles')
<style>
.main-menu > .active > a {color: #FF7F00;}
</style>
</head>