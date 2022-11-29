@extends('front.layouts.app')
@section('title', 'About Us')
@section('mainContent')
<section id="page-content" class="page-wrapper section">
    <div class="about-section mb-80">
        <div class="container">
            {!! $cms_about->description !!}
        </div>
    </div>
</section>
@endsection