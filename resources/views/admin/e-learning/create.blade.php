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
                    <a href="{{url('/admin/act')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kegiatan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/admin/news')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Berita</p>
                    </a>
                  </li>
                </ul>

                <li class="nav-item">
                  <a href="{{url('admin/quiz')}}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-graduation-cap"></i>
                    <p>
                      Quiz
                    </p>
                  </a>
                </li>

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
                <h1 class="m-0 fw-bold">Input Materi</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{url('admin/materi')}}">Materi</a></li>
                  <li class="breadcrumb-item active">Input Materi</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        @include('layout.message')
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
                <form action="{{url('/admin/materi')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="card-body container">
                      <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="" >
                      </div>
                      <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" >
                      </div>
                      <div class="form-group">
                        <label for="Konten">Konten</label>
                        <textarea rows="5" class="form-control" id="content" name="content" placeholder="Masukkan Isi Materi"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="text" class="form-control" id="thumbnail" name="thumbnail" placeholder="Masukkan Thumbnail" >
                     </div>
                     <div class="form-group">
                        <label for="thumbnail">Link Drive</label>
                        <input type="text" class="form-control" id="thumbnail" name="drive" placeholder="Masukkan Link Drive" >
                     </div>
                        <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary ml-3">Simpan</button>
                        <a href="{{url('/admin/materi')}}" class="btn btn-danger">Batal</a>
                      </div>
                    </div>
                    <!-- /.card-body -->
    
                  </form>
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
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection