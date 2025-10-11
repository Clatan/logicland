@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
    @vite(['resources/css/map.css'])
    @vite(['resources/css/elementary.css'])
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
                <p class="text-overlay">Elementary</p>
            </div>
            <div class="navbar-right">
                <img id="audio-icon" src="{{ asset('asset/audio-on.svg') }}" alt="audio" onclick="toggleAudio()">
                <img src="{{ asset('asset/setting.svg') }}" alt="setting">
            </div>
        </div>

        <a href="{{ url('/elementary/stage1') }}" data-no-spa>
            <img src="{{ asset('asset/map-summer/summer5.svg') }}" alt="stage" class="stage1">
        </a>
        <a href="{{ url('/elementary/stage2') }}" data-no-spa>
            <img src="{{ asset('asset/map-summer/summer4.svg') }}" alt="stage" class="stage2">
        </a>
        <a href="{{ url('/elementary/stage3') }}" data-no-spa>
            <img src="{{ asset('asset/map-summer/summer3.svg') }}" alt="stage" class="stage3">
        </a>
        <a href="{{ url('/elementary/stage4') }}" data-no-spa>
            <img src="{{ asset('asset/map-summer/summer2.svg') }}" alt="stage" class="stage4">
        </a>
        <a href="{{ url('/elementary/stage5') }}" data-no-spa>
            <img src="{{ asset('asset/map-summer/summer1.svg') }}" alt="stage" class="stage5">
        </a>

        <style>
            body {
                background: url('{{ asset('asset/map-summer/bckg-summer.svg') }}') no-repeat center center;
                background-size: cover;
                background-attachment: scroll;
                height: 150vh;
            }
        </style>
    </div>
@endsection
