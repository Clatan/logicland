@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
    @vite(['resources/css/home.css'])
@endsection

@section('content')

<div class="navbar">
    <div class="navbar-left">
        <img src="{{ asset('asset/life.svg') }}" alt="life">
        <img src="{{ asset('asset/life.svg') }}" alt="life">
        <img src="{{ asset('asset/life.svg') }}" alt="life">
    </div>

    <div class="navbar-center">
        <img src="{{ asset('asset/logo-title.svg') }}" alt="logicland">
    </div>

    <div class="navbar-right">
        <img id="audio-icon" src="{{ asset('asset/audio-on.svg') }}" alt="audio">
        <a href="/setting" data-no-spa>
            <img id="setting-btn" src="{{ asset('asset/setting.svg') }}" alt="setting">
        </a>
    </div>
</div>
        
<div>
    <a href="{{ url('/beginner') }}" data-no-spa>
        <img src="{{ asset('asset/island-spring.svg') }} " alt="Beginner" class="island-container top-left">
    </a>

    <a href="{{ url('/elementary') }}" data-no-spa>
        <img src="{{ asset('asset/island-summer.svg') }}" alt="Elementary" class="island-container top-right">
    </a>

    <a href="{{ url('/intermediate') }}" data-no-spa>
        <img src="{{ asset('asset/island-autumn.svg') }}" alt="Intermediate" class="island-container bottom-left">
    </a>

    <a href="{{ url('/advance') }}" data-no-spa>
        <img src="{{ asset('asset/island-winter.svg') }}" alt="Advance" class="island-container bottom-right">
    </a>
</div>
    
<img src="{{ asset('asset/bridge-1.svg') }}" alt="road" style="position: fixed; top: 195px; left: 500px; width: 270px;">
<img src="{{ asset('asset/bridge-2.svg') }}" alt="road" style="position: fixed; bottom: 250px; right: 620px; width: 220px;">
<img src="{{ asset('asset/bridge-3.svg') }}" alt="road" style="position: fixed; bottom: 170px; right: 510px; width: 200px; transform: rotate(-8deg);">

<style>
    body {
        background: url('{{ asset('asset/bckg.svg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
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
    audioBtn.src = isPlaying
        ? "{{ asset('asset/audio-on.svg') }}"
        : "{{ asset('asset/audio-off.svg') }}";

    // Mainkan audio jika sebelumnya sedang aktif
    if (isPlaying) {
        audio.play().catch(() => {});
    }

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
        audioBtn.src = isPlaying
            ? "{{ asset('asset/audio-turnoff.svg') }}"
            : "{{ asset('asset/audio-turnon.svg') }}";
    });

    audioBtn.addEventListener('mouseleave', () => {
        audioBtn.src = isPlaying
            ? "{{ asset('asset/audio-on.svg') }}"
            : "{{ asset('asset/audio-off.svg') }}";
    });

    // Hover efek setting
    if (settingBtn) {
        settingBtn.addEventListener('mouseenter', () => {
            settingBtn.src = "{{ asset('asset/setting-hover.svg') }}";
        });
        settingBtn.addEventListener('mouseleave', () => {
            settingBtn.src = "{{ asset('asset/setting.svg') }}";
        });
    }
});
</script>
@endsection