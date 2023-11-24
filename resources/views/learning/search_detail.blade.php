@extends('layout.app')

@section('navbar')

<div class="mt-5 text-center">
    <div class="d-flex justify-content-center">
        <hr class="me-3" size="2%">
        <h5 class="fw-bold"> E-Learning </h5>
        <hr class="ms-3" size="2%">
    </div>
</div>

<div class="container mt-5">
    <form action="{{ route('search.detail.learning') }}" method="GET" class="d-flex form-inputs w-50 mx-auto">
        <input class="form-control mb-5" value="{{ old('search.detail.learning') }}" type="text" name="search" placeholder="Cari apa kamu?" aria-label="Search">
        <i class="fas fa-search"></i>
    </form>
</div>

@if ($kosong == true)
<img src="/notfound.jpg" alt="" width="500px" height="500px" class="d-block mx-auto">

@else
<h5 class="text-center fw-bold mb-3">Hasil Search : {{ $learning }}</h5>
    

<div class="container mt-3">
    <div class="d-flex flex-row">
        @foreach ($learning as $item)
            <div class="card me-2 shadow-sm rounded" style="width: 20rem">
                <img src="{{ Storage::url('public/images/' . $item->image) }}" class="card-img-top img-fluid"
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
    {{ $learning->links() }}
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endif
@endsection