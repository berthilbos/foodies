@include('layouts/partials/head')

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-exclamation-circle"></i> Due to the corona pandemic all deliveries will take place without physical contact. Please be aware.</i>
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
