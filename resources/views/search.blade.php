@extends('layout.app')

@section('navbar')
    @if ($kosong == true)
        <img src="/notfound.jpg" alt="" width="500px" height="500px" class="d-block mx-auto">
    @else
        <div class="container mt-5">
            <h4 class="fw-bold">E-Learning</h4>
            <div class="row mb-3">
                <div class="col text-body-secondary text-lighter">Pembelajaran Teknik Komputer & Jaringan</div>
            </div>
            <div class="d-flex flex-row">
                @foreach ($learning as $item)
                    <div class="card me-2 shadow-sm rounded" style="width: 20rem">
                        <img src="{{ Storage::url('public/images/' . $item->image) }}" class="card-img-top img-fluid"
                            style="height: 300px; object-fit: cover;" alt="...">
                        <div class="card-body border-0">
                            <p class="card-text"><small class="text-body-secondary">
                                    {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small></p>
                            <a href="{{ route('learning.show', ['id' => $item->id]) }}" class="text-black">
                                <h5 class="card-title fw-semibold">{{ $item->title }}</h5>
                            </a>
                            <p class="card-text">{{ $item->thumbnail }}</p>
                            <a href="{{ route('learning.show', ['id' => $item->id]) }}" class="text-danger fw-medium">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $learning->links() }}
        </div>

        <div class="container mt-5">
            <h4 class="fw-bold mt-5">Kegiatan</h4>
            <div class="row mb-3">
                <div class="col text-body-secondary text-lighter">Kegiatan Yang Diselanggarakan</div>
            </div>
            <div class="d-flex flex-row">
                @foreach ($act as $item)
                    <div class="card me-2 shadow-sm rounded" style="width: 20rem">
                        <img src="{{ Storage::url('public/act/' . $item->image) }}" class="card-img-top img-fluid"
                            style="height: 300px; object-fit: cover;" alt="...">
                        <div class="card-body border-0">
                            <p class="card-text"><small class="text-body-secondary">
                                    {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small></p>
                            <a href="{{ route('kegiatan.show', ['id' => $item->id]) }}" class="text-black">
                                <h5 class="card-title fw-semibold">{{ $item->title }}</h5>
                            </a>
                            <p class="card-text">{{ $item->thumbnail }}</p>
                            <a href="{{ route('kegiatan.show', ['id' => $item->id]) }}" class="text-danger fw-medium">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $act->links() }}
        </div>

        <div class="container mt-5">
            <h4 class="fw-bold mt-5">Berita</h4>
            <div class="row mb-3">
                <div class="col text-body-secondary text-lighter">Berita Seputar Jurusan</div>
            </div>
            <div class="d-flex flex-row">
                @foreach ($news as $item)
                    <div class="card me-2 shadow-sm rounded" style="width: 20rem">
                        <img src="{{ Storage::url('public/news/' . $item->image) }}" class="card-img-top img-fluid"
                            style="height: 300px; object-fit: cover;" alt="...">
                        <div class="card-body border-0">
                            <p class="card-text"><small class="text-body-secondary">
                                    {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small></p>
                            <a href="{{ route('berita.show', ['id' => $item->id]) }}" class="text-black">
                                <h5 class="card-title fw-semibold">{{ $item->title }}</h5>
                            </a>
                            <p class="card-text">{{ $item->thumbnail }}</p>
                            <a href="{{ route('berita.show', ['id' => $item->id]) }}" class="text-danger fw-medium">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $news->links() }}
        </div>
    @endif
@endsection
