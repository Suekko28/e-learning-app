@extends('layout.app-admin')

@section('navbar-admin')
<main>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/logo_tkj.jpg" alt="AdminLTELogo" height="60" width="60">
      </div>
    
      <!-- Navbar -->
     
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="/logo_tkj.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Server TJKT</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          
          <!-- SidebarSearch Form -->
      
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{url('admin/dashboard')}}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-solid fa-folder-open"></i>
                  <p>
                    Posts
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/admin/materi')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Materi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/admin/kegiatan')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kegiatan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/admin/berita')}}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Berita</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Berita</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Berita</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            @include('layout.message')
            <div class="row">
                <div class="col text-body-secondary text-lighter">
                    <a href="{{ url('/admin/berita/create') }}" class="btn btn-success  mb-3 text-white"><i
                            class="fa-solid fa-plus"></i> Berita</a>
                </div>
                <div class="col d-flex justify-content-end">
                    <form action="{{route('search.admin.berita')}}" class="d-flex form-inputs w-50" method="GET">
                        <input value="{{ old('search.admin.berita') }}" class="form-control" type="text" name="search" placeholder="Masukan Judul Berita" aria-label="Search">
                        <i class="fas fa-search"></i>
                    </form>
                </div>
        </div>
            </div>
            <div class="row">
              <div class="table-responsive">
                <table class="table table-bordered vw-100 ">
                  <caption>List of Kegiatan</caption>
                  <thead>
                    <tr class="text-center">
                      <th scope="col">No</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Konten</th>
                      <th scope="col">Thumbnail</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = $data->firstItem() ?>
                    </tr>
                    @foreach ($data as $item)
                      <tr>  
                      <th scope="row" class="text-center">{{$i}}</th>
                      <td scope="row" class="text-center">
                        <img src="{{Storage::url('public/news/' . $item->image )  }}" class="rounded" style="width: 150px">
                      <td scope="row">{{$item->title}}</td>
                      <td scope="row">{!! $item->content !!}</td>
                      <td scope="row">{{$item->thumbnail}}</td>
                      <td scope="row">
                        <a href="{{url('/admin/berita/'. $item->id) .'/edit'}}" class="btn btn-warning mb-2"><i class=" fa fa-solid fa-pen-to-square" style="color:white;"></i></a>
                        <form action="{{url('/admin/berita/'. $item->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                        <button class="btn btn-danger mb-2"><i class="fa fa-solid fa-trash"></i></button>
                      </form>
                      </td>
                      <?php $i++ ?>
                  </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
              {{ $data->links() }}

              
     
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->

        </section>

        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>&copy; 2023 Copyright <a href="#">Teknik Jaringan Komputer & Telekomunikasi</a>
          <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0.0
        </div>
      </footer>
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    </main>

@endsection