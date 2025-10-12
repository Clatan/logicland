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
            <img src="{{ asset('asset/beginner/' . $question->question_detail) }}" alt="Soal" width="400"
                class="question-img">
            <div>
                <form action="/submit-answer" method="POST" class="answer-container">
                    @csrf
                    <input type="hidden" name="question_id" value="{{ $question->question_id }}">

                    <button type="submit" name="answer" value="A" class="answer-btn btn-A">
                        <img src="{{ asset('asset/beginner/stage5-A.svg') }}" width="100">
                    </button>

                    <button type="submit" name="answer" value="B" class="answer-btn btn-B">
                        <img src="{{ asset('asset/beginner/stage5-B.svg') }}" width="100">
                    </button>

                    <button type="submit" name="answer" value="C" class="answer-btn btn-C">
                        <img src="{{ asset('asset/beginner/stage5-C.svg') }}" width="100">
                    </button>

                    <button type="submit" name="answer" value="D" class="answer-btn btn-D">
                        <img src="{{ asset('asset/beginner/stage5-D.svg') }}" width="100">
                    </button>
                </form>

            </div>
        </div>

        @if (session('popup_status'))
            <div class="popup-overlay">
                <div class="popup-box">
                    <p class="popup-header">Stage {{ $question->question_id }}</p>
                    <p
                        class="popup-text @if (session('popup_status') === 'Success') status-success
                                        @else
                                            status-failed @endif">
                        {{ session('popup_message') }}</p>

                    <div class="popup-buttons">
                        <a href="{{ url('/home') }}" class="btn btn-home" data-no-spa>Home</a>
                        <a href="{{ url('/beginner/stage5/5') }}" class="btn btn-retry" data-no-spa>Retry</a>
                        @if (session('popup_status') === 'Success' && $question->question_id === session('user_stage_id'))
                            <a href="{{ url('/elementary') }}" class="btn btn-next" data-no-spa>Next Level</a>
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
            background: url('{{ asset('asset/map-spring/bckg-spring.svg') }}') no-repeat top left;
            background-size: cover;
            overflow: hidden;
            */
        }
    </style>

@endsection
