@extends('layout.app')

@section('navbar')
    <main>
        <div class="mt-5 text-center">
            <div class="d-flex justify-content-center">
                <hr class="me-3" size="2%">
                <h5 class="fw-bold"> E-Learning </h5>
                <hr class="ms-3" size="2%">
            </div>
        </div>

        <div class="container mt-5">
            <form action="{{ route('search.detail.learning') }}" method="GET" class="d-flex form-inputs w-50 mx-auto">
                <input class="form-control mb-5" value="{{ old('search.detail.learning') }}" type="text" name="search"
                    placeholder="Cari apa kamu?" aria-label="Search">
                <i class="fas fa-search"></i>
            </form>
        </div>

        <div class="container mt-3">
            <div class="row justify-content-start">
                @foreach ($learning as $item)
                    <div class="card mt-2 me-2 border border-0 shadow rounded mb-2" style="width: 20rem">
                        <img src{{ Storage::url('public/news/' . $item->image) }}" class="card-img-top img-fluid mt-2"
                            style="height: 300px; object-fit:cover" alt="...">
                        <div class="card-body border-0">
                            <p class="card-text"><small class="text-body-secondary">
                                {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small></p>
                            <a href="{{ route('learning.show', ['id' => $item->id]) }}" class="text-black">
                                <h5 class="card-title">{{ $item->title }}</h5>
                            </a>
                            <p class="card-text">{{ $item->thumbnail }}</p>
                            <a href="{{ route('learning.show', ['id' => $item->id]) }}" class="text-danger fw-medium read">Baca
                                Selengkapnya</a>

                        </div>
                    </div>
                @endforeach
            </div>
            {{ $learning->links() }}
        </div>
        @include('layout.footer')
    </main>
@endsection
