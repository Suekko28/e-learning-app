@extends('layout.app')

@section('navbar')


    <form action="/learning/submit-quiz" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="learning_id" value="{{$_GET['id']}}">
        @foreach ($allQuiz as $quiz)
            @if (isset($quizScore))
                <fieldset id="question-{{$loop->iteration}}" style="background-color: #00000;" class="container">
                    <legend>{!!$quiz->question!!}</legend>
                    <input type="hidden" name="quiz_id[{{$loop->index}}]" id="quiz_id[{{$loop->index}}]" value="{{$quiz->id}}">
                    <div>
                        <input type="radio" name="answer[{{$loop->index}}]" id="answer[{{$loop->index}}]"
                            @if ($userQuiz[$loop->index]->answer == 'option_a')
                                checked
                            @else
                                disabled
                            @endif
                        value="option_a"> <label for="answer[{{$loop->index}}]">{{$quiz->option_a}}</label> <br>
                        <input type="radio" name="answer[{{$loop->index}}]" id="answer[{{$loop->index}}]"
                            @if ($userQuiz[$loop->index]->answer == 'option_b')
                                checked
                            @else
                                disabled
                            @endif
                        value="option_b"> <label for="answer[{{$loop->index}}]">{{$quiz->option_b}}</label> <br>
                        <input type="radio" name="answer[{{$loop->index}}]" id="answer[{{$loop->index}}]"
                            @if ($userQuiz[$loop->index]->answer == 'option_c')
                                checked
                            @else
                                disabled
                            @endif
                        value="option_c"> <label for="answer[{{$loop->index}}]">{{$quiz->option_c}}</label> <br>
                        <input type="radio" name="answer[{{$loop->index}}]" id="answer[{{$loop->index}}]"
                            @if ($userQuiz[$loop->index]->answer == 'option_d')
                                checked
                            @else
                                disabled
                            @endif
                        value="option_d"> <label for="answer[{{$loop->index}}]">{{$quiz->option_d}}</label> <br>
                        <section>
                            @if ($userQuiz[$loop->index]->status)
                                <p class="message correct">Jawabanmu benar!</p>
                            @else
                                <div class="message incorrect">
                                    <p>Jawabanmu salah!</p>
                                    <p>Jawaban yang benar adalah, [{{$quiz[$quiz->option_true]}}]</p>
                                </div>
                            @endif
                        </section>
                        <p class="button-next m-1">
                            @if($loop->last)
                                @if ($loop->iteration != 1)
                                    <a class="button" href="#question-{{$loop->iteration-1}}">Previous question</a>
                                @endif
                                    <a class="button" href="/learning/start-quiz?id={{$quiz->learning_id}}">Back to home</a>
                            @else
                                @if ($loop->iteration != 1)
                                    <a class="button" href="#question-{{$loop->iteration-1}}">Previous question</a>
                                @endif
                                <a class="button" href="#question-{{$loop->iteration+1}}">Next question</a>
                            @endif
                        </p>
                </fieldset>
            @else
                <fieldset id="question-{{$loop->iteration}}" style="background-color: #00000;" class="container">
                    <legend>{!!$quiz->question!!}</legend>
                    <input type="hidden" name="quiz_id[{{$loop->index}}]" id="quiz_id[{{$loop->index}}]" value="{{$quiz->id}}">
                    <div>
                        <input type="radio" name="answer[{{$loop->index}}]" id="answer[{{$loop->index}}]" value="option_a"> <label for="answer[{{$loop->index}}]">{{$quiz->option_a}}</label> <br>
                        <input type="radio" name="answer[{{$loop->index}}]" id="answer[{{$loop->index}}]" value="option_b"> <label for="answer[{{$loop->index}}]">{{$quiz->option_b}}</label> <br>
                        <input type="radio" name="answer[{{$loop->index}}]" id="answer[{{$loop->index}}]" value="option_c"> <label for="answer[{{$loop->index}}]">{{$quiz->option_c}}</label> <br>
                        <input type="radio" name="answer[{{$loop->index}}]" id="answer[{{$loop->index}}]" value="option_d"> <label for="answer[{{$loop->index}}]">{{$quiz->option_d}}</label> <br>
                        <p class="button-next m-1">
                            @if($loop->last)
                                @if ($loop->iteration != 1)
                                <a class="button" href="#question-{{$loop->iteration-1}}">Previous question</a>
                            @endif
                                <button class="button" type="submit" onclick="return confirm(`Yakin selesai? Jika tidak bisa submit pastikan semua soal terisi!!`);">Selesaikan Quiz</button>
                            @else
                                @if ($loop->iteration != 1)
                                    <a class="button" href="#question-{{$loop->iteration-1}}">Previous question</a>
                                @endif
                                <a class="button" href="#question-{{$loop->iteration+1}}">Next question</a>
                            @endif
                        </p>
                    </div>
                </fieldset>
            </div>


            @endif
            
        @endforeach

        @if (isset($quizScore))
            <section id="start" style="margin-top: 50px;">
                <fieldset id="score" style="background-color: #00000; display: block; height: 200px; width: 300px;">
                    <h3>Hasil Penilaian</h3>
                    <p class="text-left mt-3">
                        Score : {{$quizScore->score}} <br>
                        Total jawaban benar : {{$quizScore->true_answer}} <br>
                        Total jawaban salah : {{count($allQuiz) - $quizScore->true_answer}} <br>
                    </p>
                    <p class="text-center mt-3">{{$quizScore->created_at}} <br></p>
                </fieldset>
                <p class="button-start"><a class="button" href="#question-1">Review quiz</a></p>
            </section>
        @else
            <section id="start">
                <p class="button-start"><a class="button" href="#question-1">Start the quiz</a></p>
            </section>
        @endif

    </form>
    <div style="margin-bottom:300px;"></div>
    @include('layout.footer')
@endsection
