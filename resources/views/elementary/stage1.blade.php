@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
    @vite(['resources/css/map.css'])
    @vite(['resources/css/stage.css'])
@endsection

@section('content')
<div class="main-content">
    <div class="navbar">
        <div class="navbarback">
            <img src="{{ asset('asset/back.svg') }}" alt="Back Button" class="button-back"
                onclick="window.location.href='{{ url('/elementary') }}'"
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
            <img src="{{ asset('asset/elementary/' . $question->question_detail) }}" alt="Soal" width="600"
                class="question-img">
            <div>
                <form action="/submit-answer" method="POST" class="answer-container">
                    @csrf
                    <input type="hidden" name="question_id" value="{{ $question->question_id }}">

                    <button type="submit" name="answer" value="A" class="answer-btn btn-A">
                        <img src="{{ asset('asset/elementary/stage1-A.svg') }}" width="400">
                    </button>

                    <button type="submit" name="answer" value="B" class="answer-btn btn-B">
                        <img src="{{ asset('asset/elementary/stage1-B.svg') }}" width="400">
                    </button>

                    <button type="submit" name="answer" value="C" class="answer-btn btn-C">
                        <img src="{{ asset('asset/elementary/stage1-C.svg') }}" width="400">
                    </button>

                    <button type="submit" name="answer" value="D" class="answer-btn btn-D">
                        <img src="{{ asset('asset/elementary/stage1-D.svg') }}" width="400">
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
                        <a href="{{ url('/elementary/stage1/1') }}" class="btn btn-retry" data-no-spa>Retry</a>
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
            background: url('{{ asset('asset/map-summer/bckg-summer.svg') }}') no-repeat center center;
            background-size: 100% auto;
            background-attachment: scroll;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            background-color: #000;
            widht: 100%;
            height: 120vh;
            display: flex;
            overflow: hidden;
            */
        }
    </style>
</div>
@endsection
