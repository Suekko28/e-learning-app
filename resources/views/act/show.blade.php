@extends('layout.app')

@section('navbar')
    <main>
        <div class="container mt-5">
            <h4 class="text-center mb-3 fs-2">{{ $act->title }}</h4>
            <img src="{{ Storage::url('public/act/' . $act->image) }}" class="img-fluid mx-auto d-block" width="300px"
                height="300px" alt="...">
            <div class="caption mt-3 mb-3">
                {!! $act->content !!}
            </div>

            <h4>Kegiatan Terbaru</h4>
            <hr style="width: 100%">
            <div class="row justify-content-start">
                @foreach ($latest as $item)
                    <div class="card mt-2 me-2 border border-0 shadow rounded mb-2" style="width: 20rem">
                        <img src="{{ Storage::url('public/act/' . $item->image) }}" class="card-img-top img-fluid mt-2"
                            style="height: 300px; object-fit:cover" alt="...">
                        <div class="card-body border-0">
                            <p class="card-text"><small class="text-body-secondary">
                                {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</small></p>
                            <a href="{{ route('act.show', ['id' => $item->id]) }}" class="text-black">
                                <h5 class="card-title">{{ $item->title }}</h5>
                            </a>
                            <p class="card-text">{{ $item->thumbnail }}</p>
                            <a href="{{ route('act.show', ['id' => $item->id]) }}" class="text-danger fw-medium read">Baca
                                Selengkapnya</a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    @include('layout.footer')
@endsection
