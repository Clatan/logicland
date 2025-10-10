<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogicLand</title>
    <link rel="icon" type="svg+xml" href="{{ asset('asset/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">
    @vite('resources/css/stage.css')
</head>

<body>
    <div>
        <h2>Stage {{ $question->question_id }}</h2>
        <div class="question-container">
            <img src="{{ asset('asset/beginner/' . $question->question_detail) }}" alt="Soal" width="600">
            <div class="answer-container">
                <form action="/submit-answer" method="POST">
                    @csrf
                    <input type="hidden" name="question_id" value="{{ $question->question_id }}">

                    <div>
                        <button type="submit" name="answer" value="A" style="border:none; background:none;" class="answer-btn btn-A">
                            <img src="{{ asset('asset/beginner/stage2-A.svg') }}" width="300">
                        </button>

                        <button type="submit" name="answer" value="B" style="border:none; background:none;" class="answer-btn btn-B">
                            <img src="{{ asset('asset/beginner/stage2-B.svg') }}" width="300">
                        </button>
                    </div>

                    <div>
                        <button type="submit" name="answer" value="C" style="border:none; background:none;" class="answer-btn btn-C">
                            <img src="{{ asset('asset/beginner/stage2-C.svg') }}" width="300">
                        </button>

                        <button type="submit" name="answer" value="D" style="border:none; background:none;" class="answer-btn btn-D">
                            <img src="{{ asset('asset/beginner/stage2-D.svg') }}" width="300">
                        </button>
                    </div>

                </form>

            </div>
        </div>

        {{-- POPUP (selalu tampil jika session ada) --}}
        @if (session('popup'))
            <div id="popup"
                style="
        position:fixed;
        top:40%;
        left:50%;
        transform:translate(-50%, -50%);
        background:white;
        color:black;
        padding:30px;
        border-radius:15px;
        box-shadow:0 0 20px rgba(0,0,0,0.3);
        font-size:20px;
    ">
                {{ session('popup') }}
            </div>
        @endif

    </div>
</body>

<style>
    body {
        background: url('{{ asset('asset/bckg.svg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        height: 110vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        /* overflow: hidden; */
    }
</style>

</html>
