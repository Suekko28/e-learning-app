@extends('layout.app')

@section('navbar')
    <main>
        <div class="container mt-5">
            <h4 class="text-center mb-3">{{ $learning->title }}</h4>
            <img src="{{ Storage::url('public/images/' . $learning->image) }}" class="img-fluid mx-auto d-block" width="300px"
                height="300px" alt="...">
            <div class="caption mt-3 mb-3">
                {!! $learning->content !!}
            </div>
            <div class="col text-right"><a class="btn text-white fw-bold" href="{{ $learning->drive }}"
                    style="background-color: #1A205D" target="_blank">Download Materi</a></div>

            <h4>E-Learning Terbaru</h4>
            <hr style="width: 100%">
            <div class="card-group">
                @foreach ($latest as $item)
                    <div class="card me-2 shadow-sm" style="width: 15rem">
                        <img src="{{ Storage::url('public/images/' . $item->image) }}" class="card-img-top img-fluid"
                            style="height: 310px;" alt="...">
                        <div class="card-body border-0">
                            <a href="{{ route('learning.show', ['id' => $item->id]) }}" class="text-black">
                                <h5 class="card-title">{{ $item->title }}</h5>
                            </a>
                            <p class="card-text">{{ $item->thumbnail }}</p>
                            <p class="card-text"><small class="text-body-secondary">
                                    {{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</small></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    @include('layout.footer')
@endsection
