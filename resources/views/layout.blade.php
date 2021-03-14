@include('layouts/partials/head')

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +1 5589 55488 55
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM</span>
      </div>
      <div class="languages">
        <ul>
          <li></li>
          
        </ul>
      </div>
    </div>
  </div>

  @include('layouts/partials/header')



  <main id="main">
    @yield('content')
  </main><!-- End #main -->

  @include('layouts/partials/footer')
