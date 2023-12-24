@extends('layout.app')
@section('navbar')
        @foreach ($results as $result)
            <section id="start" style="margin-top: 10px;">
                <fieldset id="score" style="background-color: #00000; display: block; height: auto; width: 400px; margin-bottom: 0px;">
                    <div class="row">
                        <div class="col-lg-8">
                            <h5>{{$result->learning->title}}</h5>
                        </div>
                        <div class="col-lg-3">
                            <a class="btn btn-sm btn-outline-primary" href="/learning/start-quiz?id={{$result->learning_id}}#question-1" target="_blank">Review</a>
                        </div>
                    </div>
                    <p class="text-left mt-3">
                        Score : {{$result->score}} <br>
                        Total jawaban benar : {{$result->true_answer}} <br>
                    </p>

                    <p class="text-center">{{$result->created_at}} <br></p>
                </fieldset>
            </section>
        @endforeach
        <div class="row justify-content-center mt-5">
            <div class="col-lg-3">
                {{ $results->links() }}
            </div>
        </div>
    @include('layout.footer')
@endsection
