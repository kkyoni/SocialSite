<footer id="footer" class="footer-area section">
    <div class="footer-top">
        <div class="container-fluid">
            <div class="plr-185">
                <div class="footer-top-inner gray-bg">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-5">
                            <div class="single-footer footer-about">
                                <div class="footer-logo">
                                    <img src="{{ url(\Settings::get('site_logo')) }}" alt="">
                                </div>
                                <div class="footer-brief">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the subas industry's standard dummy text ever since the 1500s,</p>
                                    <p>When an unknown printer took a galley of type and If you are going to use a passage of Lorem Ipsum scrambled it to make.</p>
                                </div>
                                <ul class="footer-social">
                                    <li>
                                        <a class="facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="google-plus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="#" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="rss" href="#" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 d-block d-xl-block d-lg-none d-md-none">
                            <div class="single-footer">
                                <h4 class="footer-title border-left">Shipping</h4>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="{{route('front.product')}}"><i class="zmdi zmdi-circle"></i><span>Products</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.blog') }}"><i class="zmdi zmdi-circle"></i><span>Blog</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.about_us')}}"><i class="zmdi zmdi-circle"></i><span>About Us</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.contact')}}"><i class="zmdi zmdi-circle"></i><span>Contact</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="single-footer">
                                <h4 class="footer-title border-left">my account</h4>
                                <ul class="footer-menu">
                                    {{-- <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>My Account</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>My Wishlist</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>My Cart</span></a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ route('front.showLoginForm') }}"><i class="zmdi zmdi-circle"></i><span>Sign In</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.showLoginForm') }}"><i class="zmdi zmdi-circle"></i><span>Registration</span></a>
                                    </li>
                                    {{-- <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>Check out</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>Oder Complete</span></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single-footer">
                                <h4 class="footer-title border-left">Get in touch</h4>
                                <div class="footer-message">
                                    <form action="#">
                                        <input type="text" name="name" placeholder="Your name here...">
                                        <input type="text" name="email" placeholder="Your email here...">
                                        <textarea class="height-80" name="message" placeholder="Your messege here..."></textarea>
                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">submit message</button> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom black-bg">
        <div class="container-fluid">
            <div class="plr-185">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p class="copy-text"> © {{ date('Y') }} <strong>{{Settings::get('copyright')}}</strong> Made With <i class="zmdi zmdi-favorite" style="color: red;" aria-hidden="true"></i> By <a class="company-name" href="{{route('welcome')}}">
                        <strong> {{Settings::get('project_title')}}</strong></a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="quickview-wrapper">
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body quick_product_show">
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="style-customizer closed">
    <div class="buy-button">
        <a href="index.html" class="customizer-logo"><img src="{{ asset('assets/front/images/logo/logo.png')}}" alt="Theme Logo"></a>
        <a class="opener" href="#"><i class="zmdi zmdi-settings"></i></a>
    </div>
    <div class="clearfix content-chooser">
        <h3>Layout Options</h3>
        <p>Which layout option you want to use?</p>
        <ul class="layoutstyle clearfix">
            <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>
            <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>
        </ul>
        <h3>Color Schemes</h3>
        <p>Which theme color you want to use? Select from here.</p>
        <ul class="styleChange clearfix">
            <li class="skin-default selected" title="skin-default" data-style="skin-default" ></li>
            <li class="skin-green" title="green" data-style="skin-green"></li>
            <li class="skin-purple" title="purple" data-style="skin-purple"></li>
            <li class="skin-blue" title="blue" data-style="skin-blue"></li>
            <li class="skin-cyan" title="cyan" data-style="skin-cyan"></li>
            <li class="skin-amber" title="amber" data-style="skin-amber"></li>
            <li class="skin-blue-grey" title="blue-grey" data-style="skin-blue-grey"></li>
            <li class="skin-teal" title="teal" data-style="skin-teal"></li>
        </ul>
        <h3>Background Patterns</h3>
        <p>Which background pattern you want to use?</p>
            <ul class="patternChange clearfix">
            <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
            <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
            <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
            <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
            <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
            <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
            <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
            <li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
        </ul>
        <h3>Background Images</h3>
        <p>Which background image you want to use?</p>
        <ul class="patternChange main-bg-change clearfix">
            <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img src="{{ asset('assets/front/images/customizer/bodybg/01.jpg')}}" alt=""></li>
            <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img src="{{ asset('assets/front/images/customizer/bodybg/02.jpg')}}" alt=""></li>
            <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img src="{{ asset('assets/front/images/customizer/bodybg/03.jpg')}}" alt=""></li>
            <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img src="{{ asset('assets/front/images/customizer/bodybg/04.jpg')}}" alt=""></li>
            <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img src="{{ asset('assets/front/images/customizer/bodybg/05.jpg')}}" alt=""></li>
            <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img src="{{ asset('assets/front/images/customizer/bodybg/06.jpg')}}" alt=""></li>
            <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img src="{{ asset('assets/front/images/customizer/bodybg/07.jpg')}}" alt=""></li>
            <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img src="{{ asset('assets/front/images/customizer/bodybg/08.jpg')}}" alt=""></li>
        </ul>
        <ul class="resetAll">
            <li><a class="button button-border button-reset" href="#">Reset All</a></li>
        </ul>
    </div>
</div> --}}

