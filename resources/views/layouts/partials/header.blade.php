<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="/home">Foodies</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul class="header-text">
                @auth
                    @can('role-list')
                        <li><a href="/roles">Roles Manage</a></li>
                        <li><a href="/users">Users Manage</a></li>
                    @endcan
                    @can('product-create')
                        <li><a href="/products">Products Manage</a></li>
                        <li><a href="/restaurants">Restaurants Manage</a></li>
                    @endcan
                @endauth

                @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>





                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>

                @else

                    <a class="nav-link" href="#">{{ Auth::user()->first_name }}</a>
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

        </div>
        </li>
    @endguest

    </ul>
    </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
