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

                        <button class="btn btn-danger text-white fw-medium p-3 rounded-pill explore"
                            onclick="scrollToContent()">Explore Now</button>
                    </div>
                </div>
            </div>
        </section>


        <section id="content">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md">
                        <img src="/bg-jumbo.jpg" alt="Tentang Kami" class="img-fluid">
                    </div>
                    <div class="col-md">
                        <h2 class="text-left mb-2 fw-bold">Apa itu TJKT?</h2>
                        <p class="lh-lg">Teknik Jaringan Komputer dan Telekomunikasi (TJKT) merupakan program keahlian yang membekali peserta didik dengan keterampilan, pengetahuan, dan sikap agar kompeten dalam merakit, menginstall program, merawat dan memperbaiki komputer serta jaringannya. Lulusan program keahlian ini memiliki kemampuan melakukan installasi jaringan komputer, baik itu jaringan komputer dalam rumah, antar kantor, antar kota, antar provinsi, bahkan antar negara.</p>
                        <a href="/about" class="btn btn-danger">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            

            <div class="container mt-5">
                <h4 class="fw-bold">E-Learning</h4>
                <div class="row mb-3">
                    <div class="col text-body-secondary text-lighter">Pembelajaran Teknik Komputer & Jaringan</div>
                    <div class="col text-right"><a class="text-black fw-bold" href="{{ route('learning.index') }}">Lihat
                            Selengkapnya</a></div>
                </div>
                <div class="row justify-content-start">
                    @foreach ($news as $item)
                        <div class="card mt-2 me-2 border border-0 shadow rounded mb-2" style="width: 20rem">
                            <img src="{{ Storage::url('public/news/' . $item->image) }}" class="card-img-top img-fluid mt-2"
                                style="height: 300px; object-fit:cover" alt="...">
                            <div class="card-body border-0">
                                <a href="{{ route('berita.show', ['id' => $item->id]) }}" class="text-black">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                </a>
                                <p class="card-text">{{ $item->thumbnail }}</p>
                                <p class="card-text"><small class="text-body-secondary">
                                        {{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</small></p>
                                <a href="{{ route('berita.show', ['id' => $item->id]) }}" class="text-danger fw-medium">Baca
                                    Selengkapnya</a>
    
                            </div>
                        </div>
                    @endforeach
                </div>


                <h4 class="fw-bold mt-5">Kegiatan</h4>
                <div class="row mb-3">
                    <div class="col text-body-secondary text-lighter">Kegiatan Yang Telah Diselanggarakan</div>
                    <div class="col text-right"><a class="text-black fw-bold" href="{{ route('kegiatan.index') }}">Lihat
                            Selengkapnya</a></div>
                </div>

                <div class="card-group">
                    @foreach ($act as $item)
                        <div class="card me-2 shadow-sm" style="width: 20rem">
                            <img src="{{ Storage::url('public/act/' . $item->image) }}" class="card-img-top img-fluid"
                                style="height: 300px; object-fit: cover;" alt="...">
                            <div class="card-body border-0">
                                <p class="card-text"><small class="text-body-secondary">
                                        {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small></p>
                                <a href="{{ route('kegiatan.show', ['id' => $item->id]) }}" class="text-black">
                                    <h5 class="card-title fw-semibold">{{ $item->title }}</h5>
                                </a>
                                <p class="card-text">{{ $item->thumbnail }}</p>
                                <a href="{{ route('kegiatan.show', ['id' => $item->id]) }}"
                                    class="text-danger fw-medium">Baca Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <h4 class="fw-bold mt-5">Berita</h4>
                <div class="row mb-3">
                    <div class="col text-body-secondary text-lighter">Berita Seputar Jurusan</div>
                    <div class="col text-right"><a class="text-black fw-bold" href="{{ route('berita.index') }}">Lihat
                            Selengkapnya</a></div>
                </div>

                <div class="card-group">
                    @foreach ($news as $item)
                        <div class="card me-2 shadow-sm" style="width: 20rem">
                            <img src="{{ Storage::url('public/news/' . $item->image) }}" class="card-img-top img-fluid"
                                style="height: 300px; object-fit: cover;" alt="...">
                            <div class="card-body border-0">
                                <p class="card-text"><small class="text-body-secondary">
                                        {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small></p>
                                <a href="{{ route('berita.show', ['id' => $item->id]) }}" class="text-black">
                                    <h5 class="card-title fw-semibold">{{ $item->title }}</h5>
                                </a>
                                <p class="card-text">{{ $item->thumbnail }}</p>
                                <a href="{{ route('berita.show', ['id' => $item->id]) }}"
                                    class="text-danger fw-medium">Baca Selengkapnya</a>
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
                    <div class="card me-2 rounded shadow-sm" style="width: 20rem">
                        <img src="/heri1.jpg" class="card-img-top img fluid" style="height: 300px; object-fit: cover;"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Herry Karyono, S.T</h5>
                            <p class="card-text">Kepala Program Jurusan TKJ</p>
                        </div>
                    </div>

                    <div class="card me-2 rounded shadow-sm" style="width: 20rem">
                        <img src="/heru.jpg" class="card-img-top img fluid" style="height: 300px; object-fit: cover;"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Heru Salehudin, S.T</h5>
                            <p class="card-text">Pengajar TKJ</p>
                            <p class="card-text">Guru Mapel : <br><span class="text-body-secondary">Dasar Kejuruan
                                    TKJ<br>Komputer dan Jaringan Dasar</span></p>

                        </div>
                    </div>

                    <div class="card me-2 rounded shadow-sm" style="width: 20rem">
                        <img src="/aditya.jpg" class="card-img-top img fluid" style="height: 300px; object-fit: cover;"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Moch. Aditya D.N</h5>
                            <p class="card-text">Pengajar TKJ</p>
                            <p class="card-text">Guru Mapel : <br><span class="text-body-secondary">Adminitrasi
                                    Infastruktur Jaringan<br>Teknologi Layanan Jaringan<br>PWD</span></p>
                        </div>
                    </div>

                    <div class="card me-2 rounded" style="width: 20rem">
                        <img src="/yudha.jpg" class="card-img-top img fluid" style="height: 300px; object-fit: cover;"
                            alt="...">
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

        @include('layout.footer')
        <script>
            function scrollToContent() {
                // Get the target section
                var contentSection = document.getElementById('content');

                // Scroll to the target section smoothly
                contentSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        </script>
    </main>
@endsection
