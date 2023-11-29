<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Tambahkan stylesheet Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
<!-- Tambahkan script Bootstrap (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.1.2/esm/ionicons.min.js" integrity="sha512-2ySmquu6HK3CAvwLllh0R8K8buFPMZsUwWLZIlB7WW8c8ilUtoNyhsmEsQn2U0IV1USr2Oc/9DJzlr4cxAbuxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-light shadow-sm">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="/home">
            <img src="/logo_tkj.jpg" alt="Logo Murgana" width="60" height="60">
          </a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mx-auto p-2">
              <li class="nav-item me-3">
                <a class="nav-link {{ Request::segment(1) === 'home' ? 'active' : null}}" aria-current="page" href="/home">Beranda</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link {{ Request::segment(1) === 'learning' ? 'active' : null}}" href="{{route('learning.index')}}">E-Learning</a>
              </li>
              {{-- @if(auth()->user()->role==1) --}}
              <li class="nav-item me-3">
                <a class="nav-link {{ Request::segment(1) === 'kegiatan' ? 'active' : null}}" href="{{route('kegiatan.index')}}">Kegiatan</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link {{ Request::segment(1) === 'berita' ? 'active' : null}}" href="{{route('berita.index')}}">Berita</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link {{ Request::segment(1) === 'about' ? 'active' : null}}" href="/about">Tentang Kami</a>
              </li>
              {{-- @endif --}}
            </ul>
            <form action="/search" class="d-flex form-inputs w-25">
              <input class="form-control" name="search" value="{{old('search')}}" type="text" placeholder="Cari disini" aria-label="Search">
              <i class="fas fa-search"></i>
            </form>
          
          </div>
        </div>
      </nav>
      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>
    </body>
</html>
@yield('navbar')