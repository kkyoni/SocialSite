@if(sizeof($related_product) > 0)
<div class="related-product-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title text-left mb-40">
                <h2 class="uppercase">related product</h2>
                <h6>There are many variations of passages of brands available,</h6>
            </div>
        </div>
    </div>
    <div class="active-related-product">
        @foreach ($related_product as $val)
        <div class="col-lg-12">
            <div class="product-item">
                <div class="product-img">
                    <a href="single-product.html">
                        <img src="{!! url("storage/single_product/".@$val->images) !!}" alt="" />
                    </a>
                </div>
                <div class="product-info">
                    <h6 class="product-title">
                        <a href="single-product.html">{{$val->product_name}}</a>
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
                            <a href="#" data-toggle="modal" data-target="#productModal"
                                title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Add to cart"><i
                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif