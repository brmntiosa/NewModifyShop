<header class="header trans_300">

    <!-- Top Navigation -->
    <div class="top_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_nav_left">pengiriman gratis untuk semua pesanan di atas 20.000rb</div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="top_nav_right">
                        <ul class="top_nav_menu">
                            <li class="account">
                                <a href="#">
                                    My Account
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="account_selection">
                                    <li><a href="/"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="main_nav_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="logo_container">
                        <a href="#">Outfit<span>shop</span></a>
                    </div>
                    <nav class="navbar">
                        <ul class="navbar_menu">
                            <li><a href="/home">home</a></li>
                            <li><a href="{{route('site.kategori.getIndex')}}">Kategori</a></li>
                            <li><a href="{{route('site.wishlist.index')}}">Wishlist</a></li>
                        </ul>
                        <div class="hamburger_container">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
