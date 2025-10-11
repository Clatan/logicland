@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
    @vite(['resources/css/map.css'])
@endsection

@section('content')

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
            <text class="text-overlay">Advance</text>
        </div>

        <div class="navbar-right">
            <img id="audio-icon" src="{{ asset('asset/audio-on.svg') }}" alt="audio" onclick="toggleAudio()">
            <img src="{{ asset('asset/setting.svg') }}" alt="setting">
        </div>
    </div>

    <a href="{{ url('/advance/stage1') }}">
        <img src="{{ asset('asset/map-winter/winter5.svg') }}" alt="stage"
            style="position: absolute; top: 450px; right: 100px;">
    </a>

    <a href="{{ url('/advance/stage2') }}">
        <img src="{{ asset('asset/map-winter/winter4.svg') }}" alt="stage"
            style="position: absolute; top: 380px; right: 430px;">
    </a>

    <a href="{{ url('/advance/stage3') }}">
        <img src="{{ asset('asset/map-winter/winter3.svg') }}" alt="stage"
            style="position: absolute; top: 500px; left: 590px;">
    </a>

    <a href="{{ url('/advance/stage4') }}">
        <img src="{{ asset('asset/map-winter/winter2.svg') }}" alt="stage"
            style="position: absolute; bottom: -260px; left: 430px;">
    </a>

    <a href="{{ url('/advance/stage5') }}">
        <img src="{{ asset('asset/map-winter/winter1.svg') }}" alt="stage"
            style="position: absolute; bottom: -340px; left: 100px;">
    </a>

    <style>
        body {
            background: url('{{ asset('asset/map-winter/bckg-winter.svg') }}') no-repeat top left;
            background-size: 100% auto;
            background-attachment: scroll;
            height: 150vh;
        }
    </style>
@endsection
