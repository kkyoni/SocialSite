<header class="header-area header-wrapper">
    <div class="header-top-bar plr-185">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-none d-md-block">
                    <div class="call-us">
                        <p class="mb-0 roboto">0123456789</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="top-link clearfix">
                        <ul class="link f-right">
                            @auth
                            <li>
                                <a href="{{route('front.my_account')}}">
                                    <i class="zmdi zmdi-account"></i>
                                    My Account
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <i class="zmdi zmdi-favorite"></i>
                                    Wish List (0)
                                </a>
                            </li>
                            <li>
                                <a href="{{route('front.logout')}}">
                                    <i class="zmdi zmdi-power-off"></i>
                                    LogOut
                                </a>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('front.showLoginForm') }}">
                                    <i class="zmdi zmdi-lock"></i>
                                    Login
                                </a>
                            </li>
                            @endauth
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="header-middle-area plr-185">
        <div class="container-fluid">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- logo -->
                    <div class="col-lg-2 col-md-4">
                        <div class="logo">
                            <a href="#">
                                <img src="{{ url(\Settings::get('site_logo')) }}" alt="main logo">
                            </a>
                        </div>
                    </div>
                    <!-- primary-menu -->
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav id="primary-menu">
                            <ul class="main-menu text-center">
                                <li class="@if(Route::current()->uri() == '/')active @endif"><a href="{{route('welcome')}}">Home</a></li>
                                <li class="@if(Request::segment('1') == 'product')active @endif"><a href="{{route('front.product')}}">Product</a></li>
                                <li class="@if(Request::segment('1') == 'blog')active @endif"><a href="{{ route('front.blog') }}">Blog</a></li>
                                <li class="@if(Request::segment('1') == 'faq')active @endif"><a href="{{ route('front.faq') }}">Faq</a></li>
                                <li class="@if(Request::segment('1') == 'about_us')active @endif"><a href="{{route('front.about_us')}}">About us</a></li>
                                <li class="@if(Request::segment('1') == 'contact')active @endif"><a href="{{route('front.contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- header-search & total-cart -->
                    @auth
                    @php
                        $cart_items = App\Models\Cart::with('product')->where('user_id',Auth::user()->id)->where('status','inactive')->get();
                        $cart_items_count = App\Models\Cart::where('user_id',Auth::user()->id)->where('status','inactive')->count();
                        $cart_items_sum = App\Models\Cart::where('user_id',Auth::user()->id)->where('status','inactive')->sum('total_price');
                    @endphp
                    <div class="col-lg-2 col-md-8">
                        <div class="search-top-cart  f-right">
                            <div class="total-cart f-left">
                                <div class="total-cart-in">
                                    <div class="cart-toggler">
                                        <a href="#">
                                            <span class="cart-quantity">{{$cart_items_count}}</span><br>
                                            <span class="cart-icon">
                                                <i class="zmdi zmdi-shopping-cart-plus"></i>
                                            </span>
                                        </a>                            
                                    </div>
                                    <ul style="height: 700px;overflow: auto;">
                                        <li>
                                            <div class="top-cart-inner your-cart">
                                                <h5 class="text-capitalize">Your Cart</h5>
                                            </div>
                                        </li>
                                        @foreach ($cart_items as $val)
                                        <li>
                                            <div class="total-cart-pro">
                                                <div class="single-cart clearfix">
                                                    <div class="cart-img f-left">
                                                        <a href="{{route('front.single_product',$val->product->id)}}">
                                                            <img src="{!! url("storage/single_product/".@$val->product->images) !!}" alt="Cart Product" style="width:100px; height:111px;"/>
                                                        </a>
                                                        <div class="del-icon">
                                                            <a href="javascript:void(0)" class="cart_remove_product" data-id="{{$val->id}}">
                                                                <i class="zmdi zmdi-close"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="cart-info f-left">
                                                        <h6 class="text-capitalize">
                                                            <a href="{{route('front.single_product',$val->product->id)}}">{!! str_limit($val->product->product_name, 23) !!}</a>
                                                        </h6>
                                                        <p>
                                                            <span>Brand <strong>:</strong></span>{{$val->product->brand->brand_name}}
                                                        </p>
                                                        <p>
                                                            <span>Items <strong>:</strong></span>{{$val->quantity}}
                                                        </p>
                                                        <p>
                                                            <span>Price <strong>:</strong></span>{!! number_format((float)($val->total_price), 2) !!}
                                                        </p>
                                                        <p>
                                                            <span>Color <strong>:</strong></span>{{$val->product->color->color_name}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        
                                        <li>
                                            <div class="top-cart-inner subtotal">
                                                <h4 class="text-uppercase g-font-2">
                                                    Total  =  
                                                    <span>$ {!! number_format((float)($cart_items_sum), 2) !!}</span>
                                                </h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="top-cart-inner view-cart">
                                                <h4 class="text-uppercase">
                                                    <a href="#">View cart</a>
                                                </h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="top-cart-inner check-out">
                                                <h4 class="text-uppercase">
                                                    <a href="#">Check out</a>
                                                </h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>


{{-- <div class="mobile-menu-area d-block d-lg-none section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="#">Home</a>
                                <ul>
                                    <li>
                                        <a href="#">Home Version 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Home Version 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Home Version 3</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 4 Animated Text</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 5 Animated Text Ovlerlay</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 6 Background Video</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 7 BG-Video Ovlerlay</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 8 Boxed-1</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 9 Gradient</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 10 Boxed-2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Products</a>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="#">Shop</a>
                                    </li>
                                    <li>
                                        <a href="#">Shop Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="#">Shop Right Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="#">Shop List</a>
                                    </li>
                                    <li>
                                        <a href="#">Shop List Right Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="#">Single Product</a>
                                    </li>
                                    <li>
                                        <a href="#">Single Product Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="#">Single Product No Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="#">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="#">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#">Checkout</a>
                                    </li>
                                    <li>
                                        <a href="#">Order</a>
                                    </li>
                                    <li>
                                        <a href="#">Login</a>
                                    </li>
                                    <li>
                                        <a href="#">My Account</a>
                                    </li>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">404</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog Right Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog style 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog 2 Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog 2 Right Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div> --}}