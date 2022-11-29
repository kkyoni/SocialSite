<div class="modal-product clearfix">
    <div class="product-images">
        <div class="main-image images">
            <img alt="" src="{!! url("storage/single_product/".@$quick_product->images) !!}">
        </div>
    </div>                        
    <div class="product-info">
        <h1>{{$quick_product->product_name}}</h1>
        <div class="price-box-3">
            <div class="s-price-box">
                <span class="new-price">$ {!! number_format((float)($quick_product->price), 2) !!}</span>
            </div>
        </div>
        <a href="{{route('front.single_product',$quick_product->id)}}" class="see-all">See all features</a>
        <div class="quick-add-to-cart">
                <div class="numbers-row">
                    <input type="number" id="french-hens" value="3">
                    <input type="hidden" id="quick_price" value="{{$quick_product->price}}">
                </div>
                <a href="javascript:void(0)" class="single_add_to_cart_button" data-id="{{$quick_product->id}}" style="line-height:45px">Add to cart</a>
        </div>
        <div class="quick-desc">
            {!! str_limit($quick_product->description, 120) !!}
        </div>
        <div class="social-sharing">
            <div class="widget widget_socialsharing_widget">
                <h3 class="widget-title-modal">Share this product</h3>
                <ul class="social-icons clearfix">
                    <li>
                        <a class="facebook" href="#" target="_blank" title="Facebook">
                            <i class="zmdi zmdi-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="google-plus" href="#" target="_blank" title="Google +">
                            <i class="zmdi zmdi-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="#" target="_blank" title="Twitter">
                            <i class="zmdi zmdi-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a class="pinterest" href="#" target="_blank" title="Pinterest">
                            <i class="zmdi zmdi-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a class="rss" href="#" target="_blank" title="RSS">
                            <i class="zmdi zmdi-rss"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
