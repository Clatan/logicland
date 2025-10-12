@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
    @vite(['resources/css/map.css'])
    @vite(['resources/css/intermediate.css'])
@endsection

@section('content')
    <div class="main-content">
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
                <text class="text-overlay">Intermediate</text>
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

        {{-- <a href="{{ url('/intermediate/stage1/1') }}" data-no-spa>
            <img src="{{ asset('asset/map-autumn/autumn1.svg') }}" alt="stage" class="stage1 button-stage">
        </a>

        <a href="{{ url('/intermediate/stage2/2') }}" data-no-spa>
            <img src="{{ asset('asset/map-autumn/autumn2.svg') }}" alt="stage" class="stage2 button-stage">
        </a>

        <a href="{{ url('/intermediate/stage3/3') }}" data-no-spa>
            <img src="{{ asset('asset/map-autumn/autumn3.svg') }}" alt="stage" class="stage3 button-stage">
        </a>

        <a href="{{ url('/intermediate/stage4/4') }}" data-no-spa>
            <img src="{{ asset('asset/map-autumn/autumn4.svg') }}" alt="stage" class="stage4 button-stage">
        </a>

        <a href="{{ url('/intermediate/stage5/5') }}" data-no-spa>
            <img src="{{ asset('asset/map-autumn/autumn5.svg') }}" alt="stage" class="stage5 button-stage">
        </a> --}}

        @php
            $stages = [
                1 => '/intermediate/stage1/1',
                2 => '/intermediate/stage2/2',
                3 => '/intermediate/stage3/3',
                4 => '/intermediate/stage4/4',
                5 => '/intermediate/stage5/5',
            ];

            // Mapping view stage -> stage_id di DB
            $stageIdMap = [
                1 => 11,
                2 => 12,
                3 => 13,
                4 => 14,
                5 => 15,
            ];
        @endphp

        @foreach ($stages as $viewStage => $url)
            @php
                $dbStageId = $stageIdMap[$viewStage];
                $locked = $dbStageId > $currentStage;
            @endphp
            <a href="{{ $locked ? '#' : $url }}" data-no-spa
                class="button-stage stage{{ $viewStage }} {{ $locked ? 'locked' : '' }}">
                <img src="{{ asset('asset/map-autumn/autumn' . $viewStage . '.svg') }}" alt="stage">
            </a>
        @endforeach

        <style>
            body {
                background: url('{{ asset('asset/map-autumn/bckg-autumn.svg') }}') repeat top left;
                background-size: 100% auto;
                background-attachment: scroll;
                height: 120vh;
                display: flex;
            }

            /* mobile phone view */
            @media (max-width: 768px) {
                body {
                    background: url('asset/map-autumn/autumn.svg') no-repeat top left;
                    background-size: cover;
                    height: 120vh;
                    width: 100%;
                    display: flex;
                }
            }

            /* setengah layar laptop lebih dikit yang kepake */
            @media (max-width: 900px) {
                body {
                    background: url('asset/map-autumn/autumn.svg') no-repeat top left;
                    background-size: cover;
                    height: 120vh;
                    width: 100%;
                    display: flex;
                }
            }


            /* layar sisa 1/5 fullscreen */
            @media (min-width: 992px) {
                body {
                    background: url('asset/map-autumn/autumn.svg') no-repeat top left;
                    background-size: 100% auto;
                    height: 120vh;
                    width: 100%;
                    display: flex;
                }
            }


            @media (min-width: 1024px) {
                body {
                    background: url('asset/map-autumn/bckg-autumn.svg') no-repeat top left;
                    background-size: 100% auto;
                    height: 120vh;
                    width: 100%;
                    display: flex;
                }
            }
        </style>
    </div>

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
