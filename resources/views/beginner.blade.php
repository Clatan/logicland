@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
    @vite(['resources/css/map.css'])
    @vite(['resources/css/beginner.css'])
@endsection

@section('content')
    <div id= "main-content">
        <div class="navbar">
            <div class="navbarback">
                <img src="{{ asset('asset/back.svg') }}" alt="Back Button" class="button-back"
                    onclick="window.location.href='{{ url('/home') }}'"
                    onmouseover="this.src='{{ asset('asset/back-hover.svg') }}'"
                    onmouseout="this.src='{{ asset('asset/back.svg') }}'">
            </div>

            <div class="navbar-left" id="life-container">

            </div>
            <div class="navbar-center">
                <p class="text-overlay">Beginner</p>
            </div>
            <div class="navbar-right">
                <img id="audio-btn" src="{{ asset('asset/audio-on.svg') }}" alt="audio">
                <a href="/setting" data-no-spa>
                    <img id="setting-btn" src="{{ asset('asset/setting.svg') }}" alt="setting">
                </a>
                <audio id="bgMusic" loop>
                    <source src="{{ asset('asset/bg-music.mp3') }}" type="audio/mpeg">
                </audio>
            </div>
        </div>

        {{-- <a href="{{ url('/beginner/stage1/1') }}" data-no-spa>
            <img src="{{ asset('asset/map-spring/spring1.svg') }}" alt="stage" class="stage1 button-stage">
        </a>
        <a href="{{ url('/beginner/stage2/2') }}" data-no-spa>
            <img src="{{ asset('asset/map-spring/spring2.svg') }}" alt="stage" class="stage2 button-stage">
        </a>
        <a href="{{ url('/beginner/stage3/3') }}" data-no-spa>
            <img src="{{ asset('asset/map-spring/spring3.svg') }}" alt="stage" class="stage3 button-stage">
        </a>
        <a href="{{ url('/beginner/stage4/4') }}" data-no-spa>
            <img src="{{ asset('asset/map-spring/spring4.svg') }}" alt="stage" class="stage4 button-stage">
        </a>
        <a href="{{ url('/beginner/stage5/5') }}" data-no-spa>
            <img src="{{ asset('asset/map-spring/spring5.svg') }}" alt="stage" class="stage5 button-stage">
        </a> --}}

        @php
            $stages = [
                1 => '/beginner/stage1/1',
                2 => '/beginner/stage2/2',
                3 => '/beginner/stage3/3',
                4 => '/beginner/stage4/4',
                5 => '/beginner/stage5/5',
            ];
        @endphp

        @foreach ($stages as $stage => $url)
            <a href="{{ $stage <= $currentStage ? $url : '#' }}" data-no-spa
                class="button-stage stage{{ $stage }} {{ $stage > $currentStage ? 'locked' : '' }}">
                <img src="{{ asset('asset/map-spring/spring' . $stage . '.svg') }}" alt="stage">
            </a>
        @endforeach

    </div>
    <script>
        function updateAttempts() {
            fetch('/user/attempts')
                .then(response => response.json())
                .then(data => {
                    const container = document.getElementById('life-container');
                    container.innerHTML = '';
                    for (let i = 0; i < data.attempt_remaining; i++) {
                        const img = document.createElement('img');
                        img.src = '{{ asset('asset/life.svg') }}';
                        img.alt = 'life';
                        container.appendChild(img);
                    }
                });
        }

        setInterval(updateAttempts, 2000);
        updateAttempts();
    </script>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: #000;
        }

        body {
            background: url('{{ asset('asset/map-spring/bckg-spring.svg') }}') no-repeat top left;
            background-size: 100% auto;
            background-attachment: scroll;
            height: 120vh;
            display: flex;
        }

        /* mobile phone view */
        @media (max-width: 768px) {
            body {
                background: url('asset/map-spring/spring.svg') no-repeat top left;
                background-size: cover;
                height: 120vh;
                width: 100%;
                display: flex;
            }
        }

        /* setengah layar laptop lebih dikit yang kepake */
        @media (max-width: 900px) {
            body {
                background: url('asset/map-spring/spring.svg') no-repeat top left;
                background-size: cover;
                height: 120vh;
                width: 100%;
                display: flex;
            }
        }


        /* layar sisa 1/5 fullscreen */
        @media (min-width: 992px) {
            body {
                background: url('asset/map-spring/spring.svg') no-repeat top left;
                background-size: 100% auto;
                height: 120vh;
                width: 100%;
                display: flex;
            }
        }


        @media (min-width: 1024px) {
            body {
                background: url('asset/map-spring/bckg-spring.svg') no-repeat top left;
                background-size: 100% auto;
                height: 120vh;
                width: 100%;
                display: flex;
            }
        }
    </style>
@endsection
