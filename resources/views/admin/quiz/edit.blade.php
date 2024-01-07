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
                        <img src="/logo_tkj.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                            style="opacity: .8">
                        <span class="brand-text font-weight-light">Server TJKT</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user panel (optional) -->

                        <!-- SidebarSearch Form -->

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                                <li class="nav-item">
                                    <a href="{{ url('admin/dashboard') }}" class="nav-link">
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
                                    <h1 class="m-0 fw-bold">Input Quiz</h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ url('admin/quiz') }}">Quiz</a></li>
                                        <li class="breadcrumb-item active">Input Quiz</li>
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
                            <form action="/admin/quiz/{{$quiz->id}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body container">
                                        <div class="form-group">
                                            <label for="Konten">Soal</label>
                                            <textarea rows="20" class="form-control" id="question" name="question" required>{!!$quiz->question !!}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="option_a" class="col-form-label">Opsi 1</label>
                                                    <input type="text" class="form-control" id="option_a" name="option_a"
                                                        value="{{$quiz->option_a}}" required>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label for="name" class="col-form-label">Opsi 2</label>
                                                    <input type="text" class="form-control" id="option_b"
                                                        name="option_b" value="{{$quiz->option_b}}"  required>
                                                </div>

                                                <div class="col-sm-3">
                                                    <label for="option_c" class="col-form-label">Opsi 3</label>
                                                    <input type="text" class="form-control" id="option_c"
                                                        name="option_c" value="{{$quiz->option_c}}" required>
                                                </div>

                                                <div class="col-sm-3">
                                                    <label for="option_d" class="col-form-label">Opsi 4</label>
                                                    <input type="text" class="form-control" id="option_d"
                                                        name="option_d" value="{{$quiz->option_d}}" required>
                                                </div>

                                                <div class="col-sm-12 mt-3">
                                                    <label for="option_true" class="col-form-label">Jawaban Benar</label>
                                                    <br>
                                                    <div class=" card p-2">
                                                        <div class="form-check">
                                                            <input type="radio" id="option_true" name="option_true"
                                                                value="option_a" @if ($quiz->option_true == 'option_a') {{'checked'}} @endif>
                                                            <label for="option_a">Jawaban A</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" id="option_true" name="option_true"
                                                                value="option_b" @if ($quiz->option_true == 'option_b') {{'checked'}} @endif>
                                                            <label for="option_b">Jawaban B</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" id="option_true" name="option_true"
                                                                value="option_c" @if ($quiz->option_true == 'option_c') {{'checked'}} @endif>
                                                            <label for="option_c">Jawaban C</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" id="option_true" name="option_true"
                                                                value="option_d" @if ($quiz->option_true == 'option_d') {{'checked'}} @endif>
                                                            <label for="option_d">Jawaban D</label>
                                                        </div>
                                                    </div>

                                            </div>

                                            <div class="d-flex flex-row-reverse">
                                                <button type="submit" class="btn btn-primary ml-3">Simpan</button>
                                                <a href="{{ url('/admin/quiz') }}" class="btn btn-danger">Batal</a>
                                            </div>
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
        CKEDITOR.replace('question');
    </script>
@endsection
