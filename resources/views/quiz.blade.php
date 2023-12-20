@extends('layout.app')

@section('navbar')

    <form>
        @foreach ($allQuiz as $quiz)
        <fieldset id="question-{{$loop->iteration}}" style="background-color: #02050f; background-image: url(https://i.imgur.com/FvVxt2D.png)">
            <legend>{!!$quiz->question!!}</legend>
            <input type="hidden" name="quiz_id[]" id="quiz_id[]" value="{{$quiz->id}}">
            <div>
                <input type="radio" name="answer[]" id="answera"> <label for="answera">{{$quiz->option_a}}</label> <br>
                <input type="radio" name="answer[]" id="answerb"> <label for="answerb">{{$quiz->option_b}}</label> <br>
                <input type="radio" name="answer[]" id="answerc"> <label for="answerc">{{$quiz->option_c}}</label> <br>
                <input type="radio" name="answer[]" id="answerd"> <label for="answerd">{{$quiz->option_d}}</label> <br>
                <section>
                    <div class="message correct">
                        <img src="https://i.imgur.com/H9NVua3.jpg">
                        <p>This is right!</p>
                        <p>Yuri Alekseyevich Gagarin  was a Soviet Air Forces pilot and cosmonaut who became the first human
                            to journey into outer space; his capsule, Vostok 1, completed one orbit of Earth on 12 April
                            1961.</p>
                    </div>
                    <p class="message incorrect">This is incorrect!</p>
                    <p class="message incorrect_a">
                        <img src="https://i.imgur.com/VFpGLPs.png">
                        Baron Munchausen <a href="http://онлайн-читать.рф/распе-мюнхаузен-первое-путешествие-на-луну/"
                            target="_blank">went</a> straight to the Moon!
                    </p>
                    <p class="message incorrect_c">Alan Shepard was first man in space from USA.</p>
                </section>
                <p class="button-next"><a class="button" href="#q2">Next question</a></p>
            </div>
        </fieldset>

        @endforeach

        <fieldset id="q2" style="background-image: url(https://i.imgur.com/yOkDIBr.jpg)">
            <legend>Of the following, which planet is closest<br> to the Sun?</legend>
            <div>
                <input type="radio" name="q2" id="q2a"> <label for="q2a">Earth</label>
                <input type="radio" name="q2" id="q2b"> <label for="q2b">Venus</label>
                <input type="radio" name="q2" id="q2c"> <label for="q2c">Uranus</label>
                <input type="radio" name="q2" id="q2d"> <label for="q2d">Mars</label>
                <section>
                    <div class="message correct">
                        <img src="https://i.imgur.com/ZXXauVP.jpg">
                        <p>This is right!</p>
                        <p>Venus is the second planet from the Sun. Venus is by far the hottest planet in the Solar System,
                            with a mean surface temperature of 735 K (462 °C; 863 °F), even though Mercury is closer to the
                            Sun.</p>
                    </div>
                    <p class="message incorrect">This is incorrect!</p>
                    <p class="message incorrect_a">
                        <img src="https://i.imgur.com/w3eCA6r.png">
                        But that would explain global warming...
                    </p>
                    <p class="message incorrect_c">Uranus would be on fire!</p>
                </section>
                <p class="button-next"><a class="button" href="#q3">Next question</a></p>
            </div>
        </fieldset>


        <fieldset id="q3" style="background-image: url(https://i.imgur.com/m8ahGsU.png)">
            <legend>What constellation is depicted<br> in the picture?</legend>
            <div>
                <input type="radio" name="q3" id="q3a"> <label for="q3a">Lyra</label>
                <input type="radio" name="q3" id="q3b"> <label for="q3b">Libra</label>
                <input type="radio" name="q3" id="q3c"> <label for="q3c">Cancer</label>
                <input type="radio" name="q3" id="q3d"> <label for="q3d">Corvus</label>
                <input type="radio" name="q3" id="q3e"> <label for="q3e">Capricornus</label>
                <section>
                    <div class="message correct">
                        <img src="https://i.imgur.com/HekMpOL.png">
                        <p>This is right!</p>
                        <p>Libra is a constellation of the zodiac and is located in the Southern celestial hemisphere. Its
                            name is Latin for weighing scales.</p>
                    </div>
                    <p class="message incorrect">This is incorrect!</p>
                    <p class="message incorrect_a">
                        <img src="https://i.imgur.com/p7qQfSg.png">
                        This is what Lyra looks like:
                    </p>
                    <p class="message incorrect_c">
                        <img src="https://i.imgur.com/ffVKsNQ.png">
                        This is what Cancer looks like:
                    </p>
                    <p class="message incorrect_d">
                        <img src="https://i.imgur.com/4V73LxX.jpg">
                        This is what Corvus looks like: <br>
                        Awwww... So cute!
                    </p>
                    <p class="message incorrect_e">
                        <img src="https://i.imgur.com/DsvBDPU.png">
                        This is what Capricornus looks like:
                    </p>
                </section>
                <p class="button-next">
                <p class="button-next"><a class="button" href="#q4">Next question</a></p>
                </p>
            </div>
        </fieldset>

        <fieldset id="q4" style="background-image: url(https://i.imgur.com/0jdj6Tz.png)">
            <legend>How many sunsets from IIS can be seeen<br> in twenty-four hours period?</legend>
            <div>
                <input type="radio" name="q4" id="q4a"> <label for="q4a">1</label>
                <input type="radio" name="q4" id="q4b"> <label for="q4b">2</label>
                <input type="radio" name="q4" id="q4c"> <label for="q4c">4</label>
                <input type="radio" name="q4" id="q4d"> <label for="q4d">8</label>
                <input type="radio" name="q4" id="q4e"> <label for="q4e">16</label>
                <input type="radio" name="q4" id="q4f"> <label for="q4f">24</label>
                <input type="radio" name="q4" id="q4g"> <label for="q4g">32</label>
                <section>
                    <div class="message correct">
                        <img src="https://i.imgur.com/Ko80gZu.jpg">
                        <p>This is right!</p>
                        <p>16 sunrises and 16 sunsets can be seen from ISS but for very short period of time - just 10
                            seconds each.</p>
                    </div>
                    <p class="message incorrect">This is incorrect!</p>
                    <p class="message incorrect_a">
                        This would be pretty boring to see same amount of sunsets as we have on Earth.
                    </p>
                </section>
                <p class="button-next">
                    <span class="congrats">Congratulations, you have finished the quiz!</span>
                </p>
            </div>
        </fieldset>




        <section id="start">
            <p class="button-start"><a class="button" href="#question-1">Start the quiz</a></p>
        </section>

    </form>
    <div style="margin-bottom:300px;"></div>
    @include('layout.footer')
@endsection
