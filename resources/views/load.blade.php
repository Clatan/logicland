@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
@vite(['resources/css/load.css'])
@endsection

@section('content')

<audio id="bg-audio" loop>
    <source src="{{ asset('asset/audio.mp3') }}" type="audio/mpeg">
</audio>

<div class="centered-container">
    <a id="start-bt" href="{{ url('/welcome') }}" class="start-button" data-no-spa>
        <h1 class="text-overlay textLoad">Start</h1>
    </a>
    <img class="logoLogic" src="{{ asset('asset/logo.svg') }}" alt="Logic Land">
    <img class= "cloudLoad" src="{{ asset('asset/cloud.svg') }}" alt="cloud">
</div>

<script>
    const startBtn = document.getElementById('start-btn');
    const audio = document.getElementById('bg-audio');

    startBtn.addEventListener('click', () => {
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