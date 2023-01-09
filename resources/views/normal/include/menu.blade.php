<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="header_top">
            <div class="container-fluid">
                <div class="top_nav_container">
                    <div class="contact_nav">
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call : +01 7738605499
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                Email : uts.com.in@gmail.com
                            </span>
                        </a>
                    </div>
                    <from class="search_form">
                        <input type="text" class="form-control" placeholder="Search here...">
                        <button class="" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </from>
                    <div class="user_option_box">
                        <a href="{{ route('get_login') }}" class="account-link">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                                Login
                            </span>
                        </a>
                        <a href="{{ route('get_register') }}" class="account-link">
                            <i class="fa fa-registered" aria-hidden="true"></i>
                            <span>
                                Register
                            </span>
                        </a>
                        {{-- <a href="" class="account-link">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                                My Account
                            </span>
                        </a> --}}
                        <a href="" class="cart-link">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span>
                                Cart
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="header_bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('get_home') }}">
                        <span>
                            EMart
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{ route('get_home') }}">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('get_about') }}"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('get_product') }}">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('get_whyus') }}">Why Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('get_testimonial') }}">Testimonial</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- end header section -->

</div>
