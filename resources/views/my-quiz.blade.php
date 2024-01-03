@extends('layout.app')
@section('navbar')
    <div class="container mt-5">
        <div class="row">
                <div class="card p-5">
                    <h3 class="">Hasil Quiz</h3>
                    <div class="col text-body-secondary text-lighter mb-3">Quiz Yang Telah Kamu Selesaikan</div>
                <div class="table-responsive table-quiz">
                    <table class="table table-bordered vw-100 ">
                        <caption>List of Materi Quiz</caption>
                        <thead>
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Judul Materi</th>
                                <th scope="col">Score</th>
                                <th scope="col">Jawaban Benar</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Review</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = $results->firstItem(); ?>
                            </tr>
                            @foreach ($results as $result)
                                <tr>
                                    <th scope="row" class="text-center">{{ $i }}</th>
                                    <td scope="row" class="text-center">{{ $result->learning->title }}</td>
                                    <td scope="row" class="text-center">{{ $result->score }}</td>
                                    <td scope="row" class="text-center"> {{ $result->true_answer }}</td>
                                    <td scope="row" class="text-center">{{ $result->created_at }}</td>
                                    <td scope ="row" class="text-center"> <a class="btn btn-sm btn-primary"
                                            href="/learning/start-quiz?id={{ $result->learning_id }}#question-1"
                                            target="_blank">Review</a>
                                    </td>
                                    <?php $i++; ?>
                                </tr>

                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
            {{ $results->links() }}
        </div>
    </div>

    @include('layout.footer')
@endsection
