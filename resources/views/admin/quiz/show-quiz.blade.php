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
                                            <a href="{{ url('/admin/kegiatan') }}" class="nav-link active">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Kegiatan</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/berita') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Berita</p>
                                            </a>
                                        </li>

                                    </ul>

                                <li class="nav-item">
                                    <a href="{{ url('admin/quiz') }}" class="nav-link">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
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
                                    <h1 class="m-0 fw-bold">All Quiz</h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ url('admin/quiz') }}">Quiz</a></li>
                                        <li class="breadcrumb-item active">All Quiz</li>
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
                            <!--Question section using form element-->
                            <form name="csQuizForm" onsubmit="return submitAnswers()" class="card p-4">
                                <div class="text-left"><!--opening of div tag-->
                                    <!--Question-->
                                    @foreach ($allQuiz as $quiz)
                                        <div class="number-quiz">
                                            {{$loop->iteration.'. '}}
                                            <a href="/admin/quiz/{{$quiz->id}}/edit"><i class="ml-3 fas fa-pen text-warning"></i></a>
                                            <form action="/admin/quiz/{{$quiz->id}}" method="POST" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="border-0 bg-transparant d-inline" style="background-color: transparent;"
                                                    onclick="return confirm(`Hapus quiz ini?`);"><i class="fas fa-trash text-danger"></i></button>
                                            </form>
                                        </div>
                                            {!!$quiz->question!!}
                                            <input type="radio" name="q1" value="a" id="q1a"
                                                class=""> {{$quiz->option_a}}
                                                @if ($quiz->option_true == 'option_a')
                                                    <div class="badge badge-success">benar</div>
                                                @endif
                                        <br>
                                            <input type="radio" name="q1" value="b" id="q1b"
                                                class=""> {{$quiz->option_b}}
                                                @if ($quiz->option_true == 'option_b')
                                                    <div class="badge badge-success">benar</div>
                                                @endif
                                        <br>
                                            <input type="radio" name="q1" value="c" id="q1c"
                                                class=""> {{$quiz->option_c}}
                                                @if ($quiz->option_true == 'option_c')
                                                    <div class="badge badge-success">benar</div>
                                                @endif
                                        <br>
                                            <input type="radio" name="q1" value="d" id="q1d"
                                                class=""> {{$quiz->option_d}}
                                                @if ($quiz->option_true == 'option_d')
                                                    <div class="badge badge-success">benar</div>
                                                @endif
                                        <br><br>
                                    @endforeach
                                    <!--back button element-->
                                    <a href="/admin/quiz" class="btn btn-sm btn-outline-info myLink">Back</a>
                                </div>

                            </form><!--close of form element-->
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
