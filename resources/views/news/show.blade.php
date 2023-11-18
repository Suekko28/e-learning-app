@extends('layout.app')

@section('navbar')
    <main>
        <div class="container mt-5">
            <h4 class="text-center mb-3">{{ $news->title }}</h4>
            <img src="{{ Storage::url('public/news/' . $news->image) }}" class="img-fluid mx-auto d-block" width="300px"
                height="300px" alt="...">
            <div class="caption mt-3 mb-3">
                {!! $news->content !!}
            </div>
            <div class="col text-right"><a class="btn text-white fw-bold" href="{{ $news->drive }}"
                    style="background-color: #1A205D" target="_blank">Download Materi</a></div>

            <h4>Kegiatan Terbaru</h4>
            <hr style="width: 100%">
            <div class="card-group">
              @foreach ($latest as $item)
                  <div class="card me-2 shadow-sm" style="width: 15rem">
                      <img src="{{ Storage::url('public/news/' . $item->image) }}" class="card-img-top img-fluid"
                          style="height: 310px;" alt="...">
                      <div class="card-body border-0">
                        <a href="{{route('kegiatan.show',['id' => $item->id])}}" class="text-black">
                          <h5 class="card-title">{{ $item->title }}</h5>
                      </a>
                    <p class="card-text">{{ $item->thumbnail }}</p>
                          <p class="card-text"><small class="text-body-secondary"> {{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</small></p>
                      </div>
                  </div>
              @endforeach
          </div>
        </div>


    </main>







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
                                    <a href="" class="text-white me-4">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="" class="text-white me-4">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="" class="text-white me-4">
                                        <i class="fab fa-google"></i>
                                    </a>
                                    <a href="" class="text-white me-4">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="" class="text-white me-4">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="" class="text-white me-4">
                                        <i class="fab fa-github"></i>
                                    </a>
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
                                    <a href="#!" class="text-white">Beranda</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">E-Learning</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Kegiatan</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Berita</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Tentang Kami</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">Get In Information</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                                <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                                <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                                <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
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
@endsection
