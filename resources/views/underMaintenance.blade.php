<!DOCTYPE html>
<html lang="en">
<head>
<title>{{Settings::get('project_title')}} || Under Construction</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
<meta name="keywords" content="Hotel Coming Soon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="stylesheet" href="https://demo.w3layouts.com/demos_new/template_demo/22-05-2020/hotel-liberty-demo_Free/985302125/web/css/style.css" type="text/css" media="all" /> <!-- //Style-CSS -->
</head>
<body>
<section class="w3l-coming-soon-page">
	<div class="coming-page-info">
		<div class="wrapper">
			<div class="logo-center">
				<a class="logo" href="{{route('welcome')}}">
					<img src="{{ url(\Settings::get('site_logo')) }}" alt="main logo">
				</a>
			</div>
			<div class="coming-block">
				<h1>Coming Soon</h1>
				<h4 class="">Our website is under construction now</h4>
				<p>We are working very hard to give you the best experience with this one.</p>
			</div>
			<div class="copyright-footer">
				<div class="w3l-copy-right">
					<p>© {{ date('Y') }} {{Settings::get('copyright')}} Coming Soon. All rights reserved | Design by <a href="{{route('welcome')}}" target="_blank">{{Settings::get('copyright')}}</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>