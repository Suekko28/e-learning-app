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
                                            <a href="{{ url('/admin/materi') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Materi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/act') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Kegiatan</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/news') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Berita</p>
                                            </a>
                                        </li>
                                    </ul>

                                <li class="nav-item">
                                    <a href="{{ url('admin/quiz') }}" class="nav-link">
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
                                    <h1 class="m-0">Quiz</h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Quiz</li>
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
                                    <a href="{{ url('/admin/quiz/create') }}" class="btn btn-success  mb-3 text-white"><i
                                            class="fa-solid fa-plus"></i> Quiz</a>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <form action="{{ route('search.admin.quiz') }}" class="d-flex form-inputs w-50"
                                        method="GET">
                                        <input @isset($_GET['search']) value="{{ $_GET['search'] }}" @endisset
                                            class="form-control" type="text" name="search"
                                            placeholder="Masukan Judul Quiz" aria-label="Search">
                                        <i class="fas fa-search"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- @if ($kosong == true) --}}
                        {{-- <img src="/notfound.jpg" alt="" width="500px" height="500px"
                                    class="d-block mx-auto"> --}}

                        {{-- @else --}}
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%">
                                    <caption>List of Participants for {{ $quiz->title }}</caption>
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">No</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Nilai</th>

                                            <!-- Add more columns as needed -->
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($participants as $participant)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $participant->name }}</td>
                                                <td>{{ $participant->userQuiz->first()->quizScore->score ?? 'N/A' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>



                            <!-- /.row (main row) -->
                        </div><!-- /.container-fluid -->
                        {{-- @endif --}}

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
