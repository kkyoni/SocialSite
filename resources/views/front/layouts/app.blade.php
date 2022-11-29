<!doctype html>
<html class="no-js" lang="en">
@include('front.includes.head')
<body>
    <div class="wrapper">
        @include('front.includes.menu')
        
        @if(Route::current()->uri() != '/')
        @include('front.includes.breadcrumbs')
        @endif
        @yield('mainContent')
        @include('front.includes.footer')
    </div>
   @include('front.includes.footer_script')
</body>
</html>