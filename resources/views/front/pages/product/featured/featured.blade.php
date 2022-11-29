@if(sizeof($featured_product) > 0)
<div class="featured-product-section mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left mb-40">
                    <h2 class="uppercase">Featured product</h2>
                    <h6>There are many variations of passages of brands available,</h6>
                </div>
            </div>
        </div>
        <div class="featured-product">
            <div class="row active-featured-product slick-arrow-2">
                @foreach ($featured_product as $val)
                <div class="col-lg-12">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="{{route('front.single_product',$val->id)}}">
                                <img src="{!! url("storage/single_product/".@$val->images) !!}" alt=""/>
                            </a>
                        </div>
                        <div class="product-info">
                            <h6 class="product-title">
                                <a href="{{route('front.single_product',$val->id)}}">{{$val->product_name}}</a>
                            </h6>
                            <div class="pro-rating">
                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                            </div>
                            <h3 class="pro-price">$ {!! number_format((float)($val->price), 2) !!}</h3>
                            <ul class="action-button">
                                <li>
                                    <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-toggle="modal" class="Quick_product" title="Quickview" data-id="{{$val->id}}"><i class="zmdi zmdi-zoom-in"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="add_to_cart" title="Add to cart" data-id="{{$val->id}}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>          
    </div>            
</div>
@endif