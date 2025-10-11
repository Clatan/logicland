@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
@vite(['resources/css/load.css'])
@endsection

@section('content')
<div class="centered-container">
    <a href="{{ url('/welcome') }}" class="start-button">
        <h1 class="text-overlay floating-text">Start</h1>
    </a>
    <img class="floating-logo" src="{{ asset('asset/logo.svg') }}" alt="Logic Land"
        style="position:absolute; top: 47%; left: 50%; transform: translate(-50%, -50%); z-index: 5; width: 45%;">
    <img class= "floating-cloud" src="{{ asset('asset/cloud.svg') }}" alt="cloud"
        style="position:absolute; top: 54%; ;left: 50%; transform: translate(-50%, -50%); z-index: 1; width: 100%;">
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogicLand</title>
    <link rel="icon" type="svg+xml" href="{{ asset('asset/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">
    @vite('resources/css/load.css')
    @vite('resources/css/app.css')

</head>

<body>
    <audio id="bg-audio" loop>
        <source src="{{ asset('asset/audio.mp3') }}" type="audio/mpeg">
    </audio>

    <div class="centered-container">
        <a href="{{ url('/welcome') }}" class="start-button">
            <h1 class="text-overlay textLoad">Start</h1>
        </a>
        <img class="logoLogic" src="{{ asset('asset/logo.svg') }}" alt="Logic Land">
        <img class= "cloudLoad" src="{{ asset('asset/cloud.svg') }}" alt="cloud">
    </div>

<script>
    const startBtn = document.getElementById('start-btn');
    const audio = document.getElementById('bg-audio');

    startBtn.addEventListener('click', () => {
        // Mainkan musik setelah klik (agar tidak diblokir browser)
        audio.play();
        localStorage.setItem('audioPlaying', true);
    });
</script>

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