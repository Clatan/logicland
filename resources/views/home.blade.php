@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
    @vite(['resources/css/home.css'])
@endsection

@section('content')

    <div class="navbar">
        <div class="navbar-left" id="life-container">

        </div>

        <div class="navbar-center">
            <img src="{{ asset('asset/logo-title.svg') }}" alt="logicland">
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

    @php
        // currentStage dari controller
        // 1-5 -> Beginner unlocked
        // 6-10 -> Beginner + Elementary
        // 11-15 -> Beginner + Elementary + Intermediate
        // 16-20 -> semua unlocked
    @endphp

    <div>
        <a href="{{ $currentStage >= 1 ? url('/beginner') : '#' }}" data-no-spa
            class="island-container top-left beginner {{ $currentStage < 1 ? 'locked' : '' }}">
            <img src="{{ asset('asset/island-spring.svg') }}" alt="Beginner">
        </a>

        <a href="{{ $currentStage >= 6 ? url('/elementary') : '#' }}" data-no-spa
            class="island-container top-right elementary {{ $currentStage < 6 ? 'locked' : '' }}">
            <img src="{{ asset('asset/island-summer.svg') }}" alt="Elementary">
        </a>

        <a href="{{ $currentStage >= 11 ? url('/intermediate') : '#' }}" data-no-spa
            class="island-container bottom-left intermediate {{ $currentStage < 11 ? 'locked' : '' }}">
            <img src="{{ asset('asset/island-autumn.svg') }}" alt="Intermediate">
        </a>

        <a href="{{ $currentStage >= 16 ? url('/advance') : '#' }}" data-no-spa
            class="island-container bottom-right advance {{ $currentStage < 16 ? 'locked' : '' }}">
            <img src="{{ asset('asset/island-winter.svg') }}" alt="Advance">
        </a>
    </div>

    <img src="{{ asset('asset/bridge-1.svg') }}" alt="road" class="road1">
    <img src="{{ asset('asset/bridge-2.svg') }}" alt="road" class="road2">
    <img src="{{ asset('asset/bridge-3.svg') }}" alt="road" class="road3">

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
            overflow: hidden;
        }
    </style>
@endsection

@section('custom-js')
    <script type="module">
        document.addEventListener("DOMContentLoaded", () => {
            const audio = document.getElementById('bgMusic');
            const audioBtn = document.getElementById('audio-btn');
            const settingBtn = document.getElementById('setting-btn');

            let isPlaying = localStorage.getItem('audioPlaying') === 'true';

            // Atur icon awal sesuai status terakhir
            audioBtn.src = isPlaying ?
                "{{ asset('asset/audio-on.svg') }}" :
                "{{ asset('asset/audio-off.svg') }}";

            // Mainkan audio jika sebelumnya sedang aktif
            if (isPlaying) audio.play().catch(() => {});

            // Klik toggle audio
            audioBtn.addEventListener('click', () => {
                if (isPlaying) {
                    audio.pause();
                    audioBtn.src = "{{ asset('asset/audio-off.svg') }}";
                } else {
                    audio.play().catch(() => {});
                    audioBtn.src = "{{ asset('asset/audio-on.svg') }}";
                }
                isPlaying = !isPlaying;
                localStorage.setItem('audioPlaying', isPlaying);
            });

            // Hover efek audio
            audioBtn.addEventListener('mouseenter', () => {
                audioBtn.src = isPlaying ?
                    "{{ asset('asset/audio-turnoff.svg') }}" :
                    "{{ asset('asset/audio-turnon.svg') }}";
            });
            audioBtn.addEventListener('mouseleave', () => {
                audioBtn.src = isPlaying ?
                    "{{ asset('asset/audio-on.svg') }}" :
                    "{{ asset('asset/audio-off.svg') }}";
            });

            if (settingBtn) {
                settingBtn.addEventListener('mouseenter', () => {
                    settingBtn.src = "{{ asset('asset/setting-hover.svg') }}";
                });
                settingBtn.addEventListener('mouseleave', () => {
                    settingBtn.src = "{{ asset('asset/setting.svg') }}";
                });
            }
        });

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
@endsection
