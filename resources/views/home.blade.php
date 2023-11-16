@extends('layout.app')

@section('navbar')
    <main>
        <section id="jumbotron">
            <div class="jumbotron jumbotron-fluid jumbotronbg">
                <div class="container-jumbo">
                    <div class="container">
                        <h1 class="pt-5 text-white mb-3">Teknik Jaringan Komputer Telekomunikasi</h1>
                        <h2 class="display-4">Merupakan program keahlian yang membekali peserta didik dengan
                            <br>
                            keterampilan, pengetahuan, dan sikap agar kompeten dalam merakit,
                            <br>
                            menginstall program, merawat dan memperbaiki komputer serta jaringan.
                        </h2>

                        <button class="btn btn-danger text-white fw-medium p-3 rounded-pill explore">Explore Now</button>
                    </div>
                </div>
            </div>
        </section>


        <section id="content">
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <img src="/bg-jumbo.jpg" alt="Tentang Kami">
                    </div>
                    <div class="col">
                        <h3 class="text-left">Tentang Kami</h3>
                        <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni numquam
                            explicabo nemo enim consequatur nam esse doloremque dolor voluptate eos, sunt officiis saepe ea?
                            Atque eum inventore culpa tempore doloremque.</p>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <h4 class="fw-bold">E-Learning</h4>
                <div class="row mb-3">
                    <div class="col text-body-secondary text-lighter">Pembelajaran Teknik Komputer & Jaringan</div>
                    <div class="col text-right"><a class="text-black fw-bold" href="{{route('learning.index')}}">Lihat Selengkapnya</a></div>
                </div>
                <div class="card-group">
                    @foreach ($learning as $item)
                        <div class="card me-2 shadow-sm" style="width: 15rem">
                            <img src="{{ Storage::url('public/images/' . $item->image) }}" class="card-img-top img-fluid"
                                style="height: 310px;" alt="...">
                            <div class="card-body border-0">
                                <a href="" class="text-black">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                </a>
                                <p class="card-text">{{ $item->thumbnail }}</p>
                                <p class="card-text"><small class="text-body-secondary"> {{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</small></p>
                            </div>
                        </div>
                    @endforeach
                </div>


                <h4 class="fw-bold mt-5">Kegiatan</h4>
                <div class="row mb-3">
                    <div class="col text-body-secondary text-lighter">Kegiatan Yang Telah Diselanggarakan</div>
                    <div class="col text-right"><a class="text-black fw-bold" href="#">Lihat Selengkapnya</a></div>
                </div>

                <div class="card-group">
                    @foreach ($act as $item)
                        <div class="card me-2 shadow-sm" style="width: 15rem">
                            <img src="{{ Storage::url('public/act/' . $item->image) }}" class="card-img-top img-fluid"
                                style="height: 310px;" alt="...">
                            <div class="card-body border-0">
                                <a href="" class="text-black">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                </a>
                                <p class="card-text">{{ $item->thumbnail }}</p>
                                <p class="card-text"><small class="text-body-secondary"> {{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</small></p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <h4 class="fw-bold mt-5">Berita</h4>
                <div class="row mb-3">
                    <div class="col text-body-secondary text-lighter">Berita Seputar Jurusan</div>
                    <div class="col text-right"><a class="text-black fw-bold" href="#">Lihat Selengkapnya</a></div>
                </div>

                <div class="card-group">
                    @foreach ($news as $item)
                        <div class="card me-2 shadow-sm" style="width: 15rem">
                            <img src="{{ Storage::url('public/news/' . $item->image) }}" class="card-img-top img-fluid"
                                style="height: 310px;" alt="...">
                            <div class="card-body border-0">
                                <a href="" class="text-black">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                </a>
                                <p class="card-text">{{ $item->thumbnail }}</p>
                                <p class="card-text"><small class="text-body-secondary"> {{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</small></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="container-fluid text-center p-5 mt-5" style="background-color: #1A205D">
                <h4 class="text-white mx-auto">Kolaborasi</h4>
                <div class="d-flex flex-row mb-3 justify-content-center text-white">
                    <div class="p-2">
                        <img src="/logo_ut.png" alt="" class="img-thumbnail" width="132px" height="132px">
                    </div>
                    <div class="p-2">
                        <img src="/bonet.png" alt="" class="img-thumbnail" width="300px" height="150px">
                    </div>
                    <div class="p-2">
                        <img src="/logo_lp3i.png" alt="" class="img-thumbnail" width="100px" height="100px  ">

                    </div>
                </div>
            </div>

            <div class="container">
                <h4 class="fw-bold mt-5 mb-3">Kenalan Yuk !</h4>
                <div class="card-group">
                    <div class="card me-2" style="width: 15rem">
                        <img src="/bg-jumbo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Herry Karyono, S.T</h5>
                            <p class="card-text">Kepala Program Jurusan TKJ</p>
                        </div>
                    </div>

                    <div class="card me-2" style="width: 15rem">
                        <img src="/bg-jumbo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Heru Salehudin, S.T</h5>
                            <p class="card-text">Pengajar TKJ</p>
                            <p class="card-text">Guru Mapel : <br><span class="text-body-secondary">Dasar Kejuruan
                                    TKJ<br>Komputer dan Jaringan Dasar</span></p>

                        </div>
                    </div>

                    <div class="card me-2" style="width: 15rem">
                        <img src="/bg-jumbo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Moch. Aditya D.N</h5>
                            <p class="card-text">Pengajar TKJ</p>
                            <p class="card-text">Guru Mapel : <br><span class="text-body-secondary">Adminitrasi
                                    Infastruktur Jaringan<br>Teknologi Layanan Jaringan<br>PWD</span></p>
                        </div>
                    </div>

                    <div class="card me-2" style="width: 15rem">
                        <img src="/bg-jumbo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Yudha Prasetyo NH</h5>
                            <p class="card-text">Toolman TKJ</p>
                            <p class="card-text">Guru Mapel : <br><span class="text-body-secondary">Dasar Desain
                                    Grafis<br>Dasar Keahlian TJKT</span></p>

                        </div>
                    </div>

                </div>
            </div>

        </section>

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
                                        <a href="#!" class="text-white">Home</a>
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
        <!-- End of .container -->






    </main>
@endsection
