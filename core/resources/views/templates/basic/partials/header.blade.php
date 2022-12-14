
    <!-- Header Section Starts Here -->
    <header>
        {{-- <div class="header-top bg-white">
            <div class="container">
                <div class="header-top-wrap d-flex flex-wrap justify-content-between align-items-center">
                    <div class="right-side">
                        <ul>

                            @if($pages->count() > 0)
                                @foreach ($pages as $item)
                                    <li><a href="{{route('pages', ['id' => $item->id, 'slug'=> slug($item->data_values->page_title) ])}}">@php echo __($item->data_values->page_title) @endphp</a></li>
                                @endforeach
                            @endif

                            <li><a href="{{route('order-track')}}">@lang('Track Your Order')</a></li>
                        </ul>
                    </div>
                    <div class="left-side">
                        <div class="language_setting">
                            <div class="active_lang ">


                                @if (session('lang') == 'en')

                                @php
                                    $default = $language->where('code', 'en')->first();
                                @endphp

                                    <div class="img">
                                        <img src="{{ getImage('assets/images/lang' .'/'. $default['icon'],'64x64')}}" alt="@lang('image')">
                                    </div>
                                    <span class="text-capitalize">@lang('English')</span>
                                @else
                                    @php $lang = $language->where('code', session('lang'))->first() @endphp
                                    <div class="img">
                                        <img src="{{ getImage('assets/images/lang' .'/'. $lang['icon'],'64x64')}}" alt="@lang('country')">
                                    </div>
                                    <span class="text-capitalize">{{__($lang->name)}}</span>
                                @endif

                                <i class="las la-caret-down"></i>
                            </div>
                            <ul class="language_setting_list">
                                @foreach ($language as $lang)
                                @if ($lang->code == request()->session()->get('lang'))
                                @continue
                                @endif
                                <li>
                                    <a href="{{ route('lang', $lang->code) }}">
                                        <div class="img">
                                            <img src="{{ getImage('assets/images/lang' .'/'. $lang['icon'],'64x64')}}" alt="@lang('country')">
                                        </div>
                                        <span class="text-capitalize">{{__($lang->name)}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="header-middle bg-6 py-3">
            <div class="container">
                <div class="header-wrapper justify-content-between align-items-center">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{ getImage('assets/images/logoIcon/logo.png', '183x54') }}" alt="@lang('logo')">
                        </a>
                    </div>
                    <form action="{{route('product.search')}}" method="GET" class="header-search-form @if(!request()->routeIs('home')) w-100 @endif" >
                        <div class="header-form-group">
                            <input type="text" name="search_key" value="{{request()->search_key}}" placeholder="@lang('Search')...">
                            <button type="submit"><i class="las la-search"></i></button>
                        </div>
                        <div class="select-item">
                            <select class="select-bar" name="category_id">
                                <option selected value="0">@lang('All Categories')</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">@lang($category->name)</option>
                                    @php
                                        $prefix = '--'
                                    @endphp
                                    @foreach ($category->allSubcategories as $subcategory)
                                        @include($activeTemplate.'partials.subcategories', ['subcategory' => $subcategory, 'prefix'=>$prefix])
                                        <option value="{{ $subcategory->id }}">
                                            {{ $prefix }}@lang($subcategory->name)
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </form>

                    <div class="header-contact">
                        <span><i class="las la-phone"></i></span>
                        <a href="tel: +8801958666999"><strong>
                            +880-1958-666999
                        </strong></a>
                    </div>

                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-top bg-3">
            <div class="container">
                <div class="header-top-wrap d-flex flex-wrap justify-content-between align-items-center">
                    {{-- <div class="view-category d-none d-lg-block 
                    @if(request()->routeIs('home')) d-xl-none @endif">
                        <a href="javascript:void(0)">@lang('Categories')<i class="las la-angle-down"></i></a>
                    </div> --}}
                    {{-- ==========Start Navbar======= --}}
                    <ul class = "navbar-nv">
                        <li>
                            <a href="{{route('home')}}">@lang('<i class="fas fa-home"></i>')</a>
                        </li>
            
                        <li>
                          <a href = "https://felnatech.com/new/category/1/security" class = "menu-link">
                            SECURITY
                            <span class = "drop-icon">
                              <i class = "fas fa-chevron-down"></i>
                            </span>
                          </a>
                          <div class = "sub-menu">
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h4><a href = "https://felnatech.com/new/category/5/cctv-dahua">CCTV DAHUA</a></h4>
                              <ul>
                                <li><a href = "https://felnatech.com/new/category/12/dvrxvr">DVR/XVR</a></li>
                                <li><a href = "#">Full Package</a></li>
                                <li><a href = "#">HD Camera</a></li>
                                <li><a href = "#">IP Camera</a></li>
                                <li><a href = "#">NVR</a></li>
                                <li><a href = "#">Wifi/PTZ Camera</a></li>
                              </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h4>CCTV HIKVISION</h4>
                              <ul>
                                <li><a href = "#">DVR/XVR</a></li>
                                <li><a href = "#">HD Camera</a></li>
                                <li><a href = "#">IP Camera</a></li>
                                <li><a href = "#">NVR</a></li>
                                <li><a href = "#">Wifi/PTZ Camera</a></li>
                              </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h2>More Security Camera</h2>
                              <button type = "button" class = "btn">shop here</button>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <img src = "{{ getImage('assets/images/navimg/nav1.jpg', '128x128') }}" alt = "product image">
                            </div>
                            <!-- end of item -->
                          </div>
                        </li>
            
                        <li>
                          <a href = "#" class = "menu-link">
                            COMPUTER
                            <span class = "drop-icon">
                              <i class = "fas fa-chevron-down"></i>
                            </span>
                          </a>
                          <div class = "sub-menu">
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h4>BRAND COMPUTER</h4>
                              <ul>
                                <li><a href = "#">Desktop</a></li>
                                <li><a href = "#">Laptop</a></li>
                              </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h4>COMPUTER ITEM</h4>
                              <ul>
                                <li><a href = "#">Monitor</a></li>
                                <li><a href = "#">SSD</a></li>
                                <li><a href = "#">HDD</a></li>
                                <li><a href = "#">Motherboard</a></li>
                              </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h2>PC Builder</h2>
                              <button type = "button" class = "btn">Build</button>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <img src = "{{ getImage('assets/images/navimg/nav1.jpg', '128x128') }}" alt = "product image">
                            </div>
                            <!-- end of item -->
                          </div>
                        </li>
            
                        <li>
                          <a href = "#" class = "menu-link">
                            ACCESSORIES
                            <span class = "drop-icon">
                              <i class = "fas fa-chevron-down"></i>
                            </span>
                          </a>
                          <div class = "sub-menu">
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h4>LAPTOP</h4>
                              <ul>
                                <li><a href = "#">Laptop Bag</a></li>
                                <li><a href = "#">SSD</a></li>
                                <li><a href = "#">Mouse</a></li>
                              </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h4>TAB</h4>
                              <ul>
                                <li><a href = "#">Samsung</a></li>
                                <li><a href = "#">IPad</a></li>
                              </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h2>Trending</h2>
                              <button type = "button" class = "btn">shop here</button>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <img src = "{{ getImage('assets/images/navimg/nav1.jpg', '128x128') }}" alt = "product image">
                            </div>
                            <!-- end of item -->
                          </div>
                        </li>
            
                        <li>
                          <a href = "#" class = "menu-link">
                            OTHERS
                            <span class = "drop-icon">
                              <i class = "fas fa-chevron-down"></i>
                            </span>
                          </a>
                          <div class = "sub-menu">
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h4>Filter</h4>
                              <ul>
                                <li><a href = "#">Water Filter</a></li>
                              </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h4>IPS</h4>
                              <ul>
                                <li><a href = "#">Singer</a></li>
                                <li><a href = "#">V Guard</a></li>
                              </ul>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <h2>Test water</h2>
                              <button type = "button" class = "btn">click here</button>
                            </div>
                            <!-- end of item -->
                            <!-- item -->
                            <div class = "sub-menu-item">
                              <img src = "{{ getImage('assets/images/navimg/nav1.jpg', '128x128') }}" alt = "product image">
                            </div>
                            <!-- end of item -->
                          </div>
                        </li>
                      </ul>
                    {{-- ===========End Navbar============= --}}



                    {{-- <form action="{{route('product.search')}}" method="GET" class="header-search-form mr-auto @if(!request()->routeIs('home')) w-100 @endif" >
                        <div class="header-form-group">
                            <input type="text" name="search_key" value="{{request()->search_key}}" placeholder="@lang('Search')...">
                            <button type="submit"><i class="las la-search"></i></button>
                        </div>
                        <div class="select-item">
                            <select class="select-bar" name="category_id">
                                <option selected value="0">@lang('All Categories')</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">@lang($category->name)</option>
                                    @php
                                        $prefix = '--'
                                    @endphp
                                    @foreach ($category->allSubcategories as $subcategory)
                                        @include($activeTemplate.'partials.subcategories', ['subcategory' => $subcategory, 'prefix'=>$prefix])
                                        <option value="{{ $subcategory->id }}">
                                            {{ $prefix }}@lang($subcategory->name)
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </form>
                    @if(request()->routeIs('home'))
                        <div class="right-toggle text-right d-xl-none">
                            <i class="las la-ellipsis-v"></i>
                        </div>
                    @endif --}}
                    <ul class="shortcut-icons">
                        <li>
                            <a href="javascript:void(0)" class="dashboard-menu-bar">
                                <i class="las la-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('compare')}}">
                                <i class="las la-sync-alt"></i>
                                <span class="compare-count amount">0</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="wish-button">
                                <i class="lar la-heart"></i>
                                <span class="wishlist-count amount">0</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="cart-button">
                                <i class="las la-shopping-bag"></i>
                                <span class="cart-count amount">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="pos-rel d-none d-lg-block @if(request()->routeIs('home')) d-xl-none @endif">
                    <div class="left-category single-style">
                        <ul class="categories">
                            @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('products.category', ['id'=>$category->id, 'slug'=>slug($category->name)]) }}">
                                    @php echo $category->icon @endphp {{ $category->name }}
                                </a>

                                <div class="cate-icon">
                                    <i class="las la-angle-down"></i>
                                </div>
                                @if($category->allSubcategories->count() > 0)
                                <ul class="sub-category">
                                    @foreach ($category->allSubcategories as $subcategory)
                                        @include($activeTemplate.'partials.menu_subcategories', ['subcategory' => $subcategory])
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu d-lg-none">
        <div class="mobile-menu-header">
            <div class="mobile-menu-close">
                <i class="las la-times"></i>
            </div>
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ getImage('assets/images/logoIcon/logo_2.png', '183x54') }}" alt="@lang('logo')">
                </a>
            </div>
            <div class="language_setting">
                <div class="active_lang cl-white">

                    @if (session('lang') == 'en')

                    @php
                        $default = $language->where('code', 'en')->first();
                    @endphp
                        <div class="img">
                            <img src="{{ getImage('assets/images/lang' .'/'. $default['icon'],'64x64')}}" alt="@lang('image')">
                        </div>
                        <span class="text-capitalize">@lang('English')</span>
                    @else
                        @php $lang = $language->where('code', session('lang'))->first() @endphp
                        <div class="img">
                            <img src="{{ getImage('assets/images/lang' .'/'. $lang['icon'],'64x64')}}" alt="@lang('country')">
                        </div>
                        <span class="text-capitalize">{{__($lang->name)}}</span>
                    @endif
                    <i class="las la-caret-down"></i>
                </div>
                <ul class="language_setting_list">
                    @foreach ($language as $lang)
                    @if ($lang->code == request()->session()->get('lang'))
                    @continue
                    @endif

                    <li>
                        <a href="{{ route('lang', $lang->code) }}">
                            <div class="img">
                                <img src="{{ getImage('assets/images/lang' .'/'. $lang['icon'],'64x64')}}" alt="@lang('country')">
                            </div>
                            <span class="text-capitalize">{{__($lang->name)}}</span>
                        </a>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
        <ul class="nav-tabs nav border-0">
            <li>
                <a href="#cate" class="active" data-toggle="tab">@lang('Category')</a>
            </li>
            <li>
                <a href="#menu" data-toggle="tab">@lang('Menu')</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="cate">
                <div class="left-category single-style">
                    <ul class="categories">
                        @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('products.category', ['id'=>$category->id, 'slug'=>slug($category->name)]) }}">
                                @php echo $category->icon @endphp {{ $category->name }}
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>

                            @if($category->allSubcategories->count()>0)
                            <ul class="sub-category">
                                @foreach ($category->allSubcategories as $subcategory)
                                    @include($activeTemplate.'partials.menu_subcategories', ['subcategory' => $subcategory])
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="quick-links mt-4">
                    <ul>
                        @if($pages->count() > 0)
                            @foreach ($pages as $item)
                                <li><a href="{{route('pages', ['id' => $item->id, 'slug'=> slug($item->data_values->page_title) ])}}">@php echo __($item->data_values->page_title) @endphp</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="menu">
                <div class="mobile-menu-body">
                    {{-- =============Mobile Menu Start============== --}}
                    <ul class="navbar-nav">
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>

                        <li>
                            <a href="{{ route('products') }}">@lang('Products')</a>
                        </li>

                        <li>
                            <a href="{{ route('brands') }}">@lang('Brands')</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">@lang('Contact')</a>
                        </li>
                    </ul>
                    {{-- =============Mobile Menu End============== --}}
                </div>
            </div>
        </div>
    </div>

    <!-- ===========Cart=========== -->
    <div id="body-overlay" class="body-overlay"></div>
    <div class="cart-sidebar-area" id="cart-sidebar-area">
        <div class="top-content">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ getImage('assets/images/logoIcon/logo_2.png', '183x54') }}" alt="@lang('logo')">
            </a>
            <span class="side-sidebar-close-btn"><i class="las la-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products cart--products">


            </div>
        </div>
    </div>
    <!-- ===========Cart End=========== -->

    <!-- ===========Wishlist=========== -->
    <div class="cart-sidebar-area" id="wish-sidebar-area">
        <div class="top-content">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ getImage('assets/images/logoIcon/logo_2.png', '183x54') }}" alt="@lang('logo')">
            </a>
            <span class="side-sidebar-close-btn"><i class="las la-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products wish-products">

            </div>
        </div>
    </div>
    <!-- ===========Wishlist End=========== -->

    <!-- Header Section Ends Here -->
    <div class="dashboard-menu before-login-menu d-flex flex-wrap justify-content-center flex-column">
        <span class="side-sidebar-close-btn"><i class="las la-times"></i></span>
        @guest
        <div class="login-wrapper py-5 px-4">
            <h4 class="subtitle cl-white">@lang('My Account')</h4>
            <form method="POST" action="{{ route('user.login')}}" class="sign-in-form">
                @csrf
                <div class="form-group">
                    <label for="login-username">@lang('Username')</label>
                    <input type="text" class="form-control" name="username" id="login-username" value="{{ old('email') }}" placeholder="@lang('Username')">
                </div>
                <div class="form-group">
                    <label for="login-pass">@lang('Password')</label>
                    <input type="password" class="form-control" name="password" id="login-pass" placeholder="********">
                </div>

                @php $captcha =   getCustomCaptcha('login captcha') @endphp

                @if($captcha)
                <div class="form-group">
                    <label for="password">@lang('Captcha')</label>
                    <input type="text" class="mb-4" name="captcha" autocomplete="off" placeholder="@lang('Enter The Code Below')">
                    @lang($captcha)
                </div>
                @endif

                <div class="form-group text-right pt-2">
                    <button type="submit" class="login-button">@lang('Login')</button>
                </div>

                <div class="pt-2 mb-0">
                    <p class="create-accounts">
                        <a href="{{route('user.password.request')}}" class="mb-2">@lang('Forgot Password')?</a>
                    </p>
                    <p class="create-accounts">
                        <span>@lang('Don\'t have an account')? <a href="{{route('user.register')}}" class="link-color">@lang('Create An Account')</a> </span>
                    </p>
                </div>
            </form>
        </div>
        @endguest

        @auth
        @include($activeTemplate.'user.partials.dp')
        <ul class="cl-white">
            @include($activeTemplate.'user.partials.sidebar')
        </ul>
        @endauth


    </div>
