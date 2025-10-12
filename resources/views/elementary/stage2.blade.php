@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
    @vite(['resources/css/stage.css'])
@endsection

@section('content')

    <div class="navbar">
        <div class="navbarback">
            <img src="{{ asset('asset/back.svg') }}" alt="Back Button" class="button-back"
                onclick="window.location.href='{{ url('/elementary') }}'"
                onmouseover="this.src='{{ asset('asset/back-hover.svg') }}'"
                onmouseout="this.src='{{ asset('asset/back.svg') }}'">
        </div>

        <div class="navbar-left">

        </div>
        <div class="navbar-center">
            <P class="text-overlay">Stage {{ $question->question_id }}</P>
        </div>
        <div class="navbar-right">
            <img id="audio-icon" src="{{ asset('asset/audio-on.svg') }}" alt="audio" onclick="toggleAudio()">
            <img src="{{ asset('asset/setting.svg') }}" alt="setting">
        </div>
    </div>

    <div>
        <div class="question-container" style="justify-content: center; align-items: center;">
            <img src="{{ asset('asset/elementary/' . $question->question_detail) }}" alt="Soal" width="600"
                class="question-img">
            <div>
                <form action="/submit-answer" method="POST" class="answer-container">
                    @csrf
                    <input type="hidden" name="question_id" value="{{ $question->question_id }}">

                    <button type="submit" name="answer" value="A" class="answer-btn btn-A">
                        <img src="{{ asset('asset/elementary/stage2-A.svg') }}" width="300">
                    </button>

                    <button type="submit" name="answer" value="B" class="answer-btn btn-B">
                        <img src="{{ asset('asset/elementary/stage2-B.svg') }}" width="300">
                    </button>

                    <button type="submit" name="answer" value="C" class="answer-btn btn-C">
                        <img src="{{ asset('asset/elementary/stage2-C.svg') }}" width="300">
                    </button>

                    <button type="submit" name="answer" value="D" class="answer-btn btn-D">
                        <img src="{{ asset('asset/elementary/stage2-D.svg') }}" width="300">
                    </button>
                </form>

            </div>
        </div>

        @if (session('popup_status'))
            <div class="popup-overlay">
                <div class="popup-box">
                    <p class="popup-header">Stage {{ $question->question_id }}</p>
                    <p class="popup-text @if(session('popup_status') === 'Success')
                                            status-success
                                        @else
                                            status-failed
                                        @endif">{{ session('popup_message') }}</p>
                    
                    <div class="popup-buttons">
                        <a href="{{ url('/home') }}" class="btn btn-home" data-no-spa>Home</a>
                        <a href="{{ url('/elementary/stage2/2') }}" class="btn btn-retry" data-no-spa>Retry</a>
                        @if(session('popup_status') === 'Success')
                            <a href="{{ url('/elementary') }}" class="btn btn-next" data-no-spa>Next Stage</a>
                        @endif
                    </div>
                </div>
            </div>
            {{-- <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const overlay = document.getElementById('popupOverlay');
                    overlay.style.display = 'flex'; 

                    overlay.addEventListener('click', (e) => {
                        if (e.target === overlay) {
                            overlay.style.display = 'none';
                        }
                    });
                });
            </script> --}}
        @endif

    </div>


    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            background-color: #000;
            background: url('{{ asset('asset/map-summer/bckg-summer.svg') }}') no-repeat top left;
         background-size: cover;
            overflow: hidden;
            */
        }
    </style>

    <script>
        function updateAttempts() {
            fetch('/user/attempts')
                .then(response => response.json())
                .then(data => {
                    const container = document.getElementById('life-container');
                    container.innerHTML = ''; // kosongkan dulu
                    for (let i = 0; i < data.attempt_remaining; i++) {
                        const img = document.createElement('img');
                        img.src = '{{ asset('asset/life.svg') }}';
                        img.alt = 'life';
                        container.appendChild(img);
                    }
                });
        }

        // update setiap 2 detik
        setInterval(updateAttempts, 2000);
        updateAttempts(); // panggil langsung saat page load
    </script>


@endsection
