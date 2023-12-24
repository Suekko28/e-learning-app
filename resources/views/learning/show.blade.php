@extends('layout.app')

@section('navbar')
    <main>
        <div class="container mt-5">
            <h4 class="text-center mb-3 fs-2">{{ $learning->title }}</h4>
            <img src="{{ asset('storage/images/' . $learning->image) }}" class="img-fluid mx-auto d-block" width="500px   "
                height="500px" alt="...">
            <div class="caption mt-3 mb-3">
                {!! $learning->content !!}
            </div>
            <div class="col text-right">
                <a class="btn text-white fw-bold" href="/learning/start-quiz?id={{ $learning->id }}"
                    style="background-color: #1A205D" target="_blank">Ikuti Quiz</a>
                <a class="btn text-white fw-bold" href="{{ $learning->drive }}" style="background-color: #1A205D"
                    target="_blank">Download Materi</a>
            </div>

            <h4>E-Learning Terbaru</h4>
            <hr style="width: 100%">
            <div class="row justify-content-start">
                @foreach ($latest as $item)
                    <div class="card mt-2 me-2 border border-0 shadow rounded mb-2" style="width: 20rem">
                        <img src="{{ asset('storage/images/' . $item->image) }}" class="card-img-top img-fluid mt-2"
                            style="height: 300px; object-fit:cover" alt="...">
                        <div class="card-body border-0">
                            <p class="card-text"><small class="text-body-secondary">
                                    {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small></p>
                            <a href="{{ route('learning.show', ['id' => $item->id]) }}" class="text-black">
                                <h5 class="card-title">{{ $item->title }}</h5>
                            </a>
                            <p class="card-text">{{ $item->thumbnail }}</p>
                            <a href="{{ route('learning.show', ['id' => $item->id]) }}"
                                class="text-danger fw-medium read">Baca
                                Selengkapnya</a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    @include('layout.footer')
@endsection
