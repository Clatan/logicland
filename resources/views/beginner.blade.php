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

            <div class="navbar-left">
                @php
                    $attempts = session('attempt_remaining', 0); // default 0 kalau nggak ada
                @endphp

                @for ($i = 0; $i < $attempts; $i++)
                    <img src="{{ asset('asset/life.svg') }}" alt="life">
                @endfor
            </div>
            <div class="navbar-center">
                <p class="text-overlay">Beginner</p>
            </div>
            <div class="navbar-right">
                <img id="audio-btn" src="{{ asset('asset/audio-on.svg') }}" alt="audio" onclick="toggleAudio()">
                <img id="setting-btn" src="{{ asset('asset/setting.svg') }}" alt="setting">
            </div>
        </div>

        <a href="{{ url('/beginner/stage1/1') }}" data-no-spa>
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
        </a>

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
        </style>
    </div>
@endsection
