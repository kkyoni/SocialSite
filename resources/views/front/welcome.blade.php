@extends('front.layouts.app')
@section('title', 'Home')
@section('mainContent')
@include('front.pages.slider.slider')
<section id="page-content" class="page-wrapper section">
    @include('front.pages.brands.brands')
    @include('front.pages.product.featured.featured')
    {{-- @include('front.pages.product.list.list') --}}
    <div class="blog-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left mb-40">
                        <h2 class="uppercase">Latest blog</h2>
                        <h6>There are many variations of passages of brands available,</h6>
                    </div>
                </div>
            </div>
    @include('front.pages.blog.blog')
    <div class="col-lg-12 mt-20 text-center">
        <a class="button small mb-20" href="{{route('front.blog')}}"><span>Buttons </span> </a>
    </div>
</div>
</div>

</section>
@endsection
