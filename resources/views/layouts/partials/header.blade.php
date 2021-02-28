<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"  ><a href="/home">Foodies</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul class="header-text">

        <li ><a href="/home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="/restaurant">Restaurant</a></li>
        <li><a href="#specials">Specials</a></li>

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
        <ul>
                          @if (Route::has('login'))
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                    </svg></a>


                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="nav-link" href="{{ route('login') }}" style="color: black">{{ __('Login') }}</a>





                                  <a class="nav-link" href="{{ route('register') }}" style="color: black">{{ __('Register') }}</a>
                              </li>
                          @endif
                      </ul>
                      @else

                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->first_name }}</a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" style="color: black" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
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
