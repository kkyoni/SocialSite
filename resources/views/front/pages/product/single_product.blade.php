@extends('front.layouts.app')
@section('title', 'Single Product')
@section('mainContent')
<section id="page-content" class="page-wrapper section">
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="single-product-area mb-80">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="imgs-zoom-area">
                                    <img id="zoom_03" src="{!! url("storage/single_product/".@$single_product->images) !!}" data-zoom-image="{!! url("storage/single_product/".@$single_product->images) !!}" alt="">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                                @foreach ($product_image as $val)
                                                <div class="p-c">
                                                    <a href="#" data-image="{!! url("storage/".@$val->images) !!}" data-zoom-image="{!! url("storage/".@$val->images) !!}">
                                                        <img class="zoom_03" src="{!! url("storage/".@$val->images) !!}" alt="">
                                                    </a>
                                                </div>
                                                
                                                @endforeach
                                                <div class="p-c">
                                                    <a href="#" data-image="{!! url("storage/single_product/".@$single_product->images) !!}" data-zoom-image="{!! url("storage/single_product/".@$single_product->images) !!}">
                                                        <img class="zoom_03" src="{!! url("storage/single_product/".@$single_product->images) !!}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="single-product-info">
                                    <h3 class="text-black-1">{{$single_product->product_name}} </h3>
                                    <h6 class="brand-name-2">{{$single_product->brand->brand_name}}</h6>
                                    <hr>
                                    <div class="single-pro-color-rating clearfix">
                                        <div class="sin-pro-color f-left">
                                            <p class="color-title f-left">Color</p>
                                            <div class="widget-color f-left">
                                                <ul>
                                                    <li class="color-1"><a href="#"></a></li>
                                                    <li class="color-2"><a href="#"></a></li>
                                                    <li class="color-3"><a href="#"></a></li>
                                                    <li class="color-4"><a href="#"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pro-rating sin-pro-rating f-right">
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                            <span class="text-black-5">( 27 Rating )</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="plus-minus-pro-action clearfix">
                                        <div class="sin-plus-minus f-left clearfix">
                                            <p class="color-title f-left">Qty</p>
                                            <div class="cart-plus-minus f-left">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </div>
                                        <div class="sin-pro-action f-right">
                                            <ul class="action-button">
                                                <li>
                                                    <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <h3 class="pro-price">Price: $ {!! number_format((float)($single_product->price), 2) !!}</h3>
                                    <hr>
                                    <div>
                                        <a href="#" class="button extra-small button-black" tabindex="-1">
                                            <span class="text-uppercase">Buy now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <hr>
                                <div class="single-product-tab reviews-tab">
                                    <ul class="nav mb-20">
                                        <li><a class="active" href="#description" data-toggle="tab">description</a></li>
                                        <li><a href="#information" data-toggle="tab">information</a></li>
                                        <li><a href="#reviews" data-toggle="tab">reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active show" id="description">
                                            {!! $single_product->description !!}
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="information">
                                            {!! $single_product->information !!}
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="reviews">
                                            <div class="reviews-tab-desc">
                                                <div class="media mt-30">
                                                    <div class="media-left">
                                                        <a href="#"><img class="media-object" src="{{ asset('assets/front/img/author/1.jpg')}}" alt="#"></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="clearfix">
                                                            <div class="name-commenter pull-left">
                                                                <h6 class="media-heading"><a href="#">Gerald Barnes</a>
                                                                </h6>
                                                                <p class="mb-10">27 Jun, 2019 at 2:30pm</p>
                                                            </div>
                                                            <div class="pull-right">
                                                                <ul class="reply-delate">
                                                                    <li><a href="#">Reply</a></li>
                                                                    <li>/</li>
                                                                    <li><a href="#">Delate</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    @include('front.pages.product.related')
                </div>
                <div class="col-lg-3 order-lg-1 order-2">
                    @include('front.pages.path.search')
                    @include('front.pages.path.categories')
                    @include('front.pages.path.recent')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection