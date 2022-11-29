<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img src="{{ url(\Settings::get('site_logo')) }}" alt="image" class="rounded-circle" height="60px" width="60px" style="border-radius:20%!important">
                    <ul class="dropdown-menu animated fadeInLeft m-t-xs">
                        <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    <img alt="image" class="rounded-circle" height="60px" width="60px" style="border-radius:20%!important" src="{{ url(\Settings::get('site_logo')) }}">
                </div>
            </li>
            <li class="@if(Request::segment('2') == 'dashboard') active @endif" data-toggle="tooltip" title="Dashboard">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">
                        Dashboard
                    </span>
                </a>
            </li>

            <li class="@if(Request::segment('2') == 'user') active @endif" data-toggle="tooltip" title="Users">
                <a href="{{ route('admin.user.index') }}">
                    <i class="fa fa-users"></i>
                    <span class="nav-label">
                        Users
                    </span>
                </a>
            </li>

            <li class="@if(Request::segment('2') == 'slider') active @endif" data-toggle="tooltip" title="Slider">
                <a href="{{ route('admin.slider.index') }}">
                    <i class="fa fa-sliders"></i>
                    <span class="nav-label">
                        Slider
                    </span>
                </a>
            </li>

            <li class="@if(Request::segment('2') == 'product') active @endif" data-toggle="tooltip" title="Product">
                <a href="{{ route('admin.product.index') }}">
                    <i class="fa fa-product-hunt"></i>
                    <span class="nav-label">
                        Product
                    </span>
                </a>
            </li>

            <li class="@if(Request::segment('2') == 'faq') active @endif" data-toggle="tooltip" title="Faq">
                <a href="{{ route('admin.faq.index') }}">
                    <i class="fa fa-industry"></i>
                    <span class="nav-label">
                        Faq
                    </span>
                </a>
            </li>

            <li class="@if(Request::segment('2') == 'contact') active @endif" data-toggle="tooltip" title="Contact">
                <a href="{{ route('admin.contact.index') }}">
                    <i class="fa fa-phone-square"></i>
                    <span class="nav-label">
                        Contact
                    </span>
                </a>
            </li>

            <li class="@if(Request::segment('2') == 'colors') active @endif" data-toggle="tooltip" title="Colors">
                <a href="{{ route('admin.colors.index') }}">
                    <i class="fa fa-rss"></i>
                    <span class="nav-label">
                        Colors
                    </span>
                </a>
            </li>

            <li class="@if(Request::segment('2') == 'cms') active @endif" data-toggle="tooltip" title="Cms">
                <a href="{{ route('admin.cms.index') }}">
                    <i class="fa fa-file-text"></i>
                    <span class="nav-label">
                        Cms
                    </span>
                </a>
            </li>

            <li class="@if(Request::segment('2') == 'brand') active @endif" data-toggle="tooltip" title="Brand">
                <a href="{{ route('admin.brand.index') }}">
                    <i class="fa fa-adn"></i>
                    <span class="nav-label">
                        Brand
                    </span>
                </a>
            </li>
            <li class="@if(Request::segment('2') == 'blog') active @endif" data-toggle="tooltip" title="Blog">
                <a href="{{ route('admin.blog.index') }}">
                    <i class="fa fa-star"></i>
                    <span class="nav-label">
                        Blog
                    </span>
                </a>
            </li>
            

            

            
            <li class="@if(Request::segment('2') == 'settings') active @endif" data-toggle="tooltip" title="Settings">
                <a href="{{ url('admin/settings') }}">
                    <i class="fa fa-cogs"></i>
                    <span class="nav-label">Settings</span>
                </a>
            </li>
            
        </ul>
    </div>
</nav>