<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Foodies</h3>
                        <p class="contact">
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>New Restaurants</h4>
                    <ul>
                        @foreach ($newrestaurants as $item)
                            <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $item->restaurant_name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Eten</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Pizza</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Grieks</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Lunch</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Mediterraans</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Broodjes</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Foodies</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

<!-- assets JS Files -->

<script src="/assets/jquery/jquery.min.js"></script>
<script src="/assets/jquery/jquery.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/jquery.easing/jquery.easing.min.js"></script>
<script src="/assets/php-email-form/validate.js"></script>
<script src="/assets/owl.carousel/owl.carousel.min.js"></script>
<script src="/assets/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/venobox/venobox.min.js"></script>
<script src="/assets/aos/aos.js"></script>


<!-- Main JS File -->
<script src="/js/main.js"></script>
<script src="/js/cancelorder.js"></script>
</body>

</html>
