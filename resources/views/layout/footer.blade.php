<section id="footer">
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container-fluid my-5" style="background-color: #1A205D">

        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #1A205D">
            <!-- Section: Social media -->

            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5 p-4">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <img src="/SMK.jpeg" alt="" class="img-thumbnail">
                            <div class="text-center mt-2">
                                <a href="https://web.facebook.com/smk2triplejciteureup" target="_blank"
                                    class="text-white me-4">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                {{-- <a href="" class="text-white me-4">
                                    <i class="fab fa-twitter"></i>
                                </a> --}}
                                <a href="https://www.instagram.com/tjkt.smk2tj/"target="_blank" class="text-white me-4">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="" class="text-white me-4">
                                    <i class="fa-solid fa-location-dot"></i>
                                </a>
                                {{-- <a href="" class="text-white me-4">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="" class="text-white me-4">
                                    <i class="fab fa-github"></i>
                                </a> --}}
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->

                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Quick Links</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="/home" class="text-white">Home</a>
                            </p>
                            <p>
                                <a href="{{ route('learning.index') }}" class="text-white">E-Learning</a>
                            </p>
                            <p>
                                <a href="{{ route('kegiatan.index') }}" class="text-white">Kegiatan</a>
                            </p>
                            <p>
                                <a href="{{ route('berita.index') }}" class="text-white">Berita</a>
                            </p>
                            <p>
                                <a href="/about" class="text-white">Tentang Kami</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Get In Information</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p><i class="fas fa-map-location-dot mr-3"></i> Jl. Landbow No. 01 Karang Asem Barat, Karang Asem
                                Bar., Kec. Citeureup, Kabupaten Bogor, Jawa Barat 16810</p>
                            <p><i class="fas fa-envelope mr-3"></i>tjkt.smktj@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i>+62 857-1826-4848</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #1A205D">
                © 2023 Copyright
                <a class="text-white" href="https://mdbootstrap.com/">Teknik Komputer & Jaringan SMK2TJ</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

    </div>
</section>

@yield('footer')
