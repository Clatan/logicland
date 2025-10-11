@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
    @vite(['resources/css/stage.css'])
@endsection

@section('content')

    <div class="navbar">
        <div class="navbarback">
            <img src="{{ asset('asset/back.svg') }}" alt="Back Button" class="button-back"
                onclick="window.location.href='{{ url('/beginner') }}'"
                onmouseover="this.src='{{ asset('asset/back-hover.svg') }}'"
                onmouseout="this.src='{{ asset('asset/back.svg') }}'">
        </div>

        <div class="navbar-left">
            <img src="{{ asset('asset/life.svg') }}" alt="life">
            <img src="{{ asset('asset/life.svg') }}" alt="life">
            <img src="{{ asset('asset/life.svg') }}" alt="life">
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
            <img src="{{ asset('asset/beginner/' . $question->question_detail) }}" alt="Soal" width="600"
                class="question-img">
            <div>
                <form action="/submit-answer" method="POST" class="answer-container">
                    @csrf
                    <input type="hidden" name="question_id" value="{{ $question->question_id }}">

                    <button type="submit" name="answer" value="A" class="answer-btn btn-A">
                        <img src="{{ asset('asset/beginner/stage1-A.svg') }}" width="400">
                    </button>

                    <button type="submit" name="answer" value="B" class="answer-btn btn-B">
                        <img src="{{ asset('asset/beginner/stage1-B.svg') }}" width="400">
                    </button>

                    <button type="submit" name="answer" value="C" class="answer-btn btn-C">
                        <img src="{{ asset('asset/beginner/stage1-C.svg') }}" width="400">
                    </button>

                    <button type="submit" name="answer" value="D" class="answer-btn btn-D">
                        <img src="{{ asset('asset/beginner/stage1-D.svg') }}" width="400">
                    </button>
                </form>

            </div>
        </div>

        @if (session('popup_status'))
            <div class="popup-overlay">
                <div class="popup-box">
                    <p class="popup-text">{{ session('popup_status') }}</p>
                    <div class="popup-buttons">
                        <a href="{{ url('/home') }}" class="btn btn-home">Home</a>
                        <a href="{{ url('/beginner/stage1/1') }}" class="btn btn-retry">Retry</a>
                        <a href="{{ url('/beginner') }}" class="btn btn-next">Next Stage</a>
                    </div>
                </div>
            </div>
            {{-- <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const overlay = document.getElementById('popupOverlay');
                    overlay.style.display = 'flex'; // tampilkan popup

                    // Klik di luar kotak popup untuk menutup
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
            background: url('{{ asset('asset/map-spring/bckg-spring.svg') }}') no-repeat top left;
            overflow: hidden;
            */
        }
    </style>

@endsection
