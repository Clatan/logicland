@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
    @vite(['resources/css/map.css'])
@endsection

@section('content')

<div class="navbar">
  <div class="navbarback">
    <img 
        src="{{ asset('asset/back.svg') }}" 
        alt="Back Button" 
        class="button-back"
        onclick="window.location.href='{{ url('/home') }}'"
        onmouseover="this.src='{{ asset('asset/back-hover.svg') }}'"
        onmouseout="this.src='{{ asset('asset/back.svg') }}'"
    >
  </div>
  
    <div class="navbar-left">
        <img src="{{ asset('asset/life.svg') }}" alt="life">
        <img src="{{ asset('asset/life.svg') }}" alt="life">
        <img src="{{ asset('asset/life.svg') }}" alt="life">
    </div>
    <div class="navbar-center">
        <p class="text-overlay">Beginner</p>
    </div>
    <div class="navbar-right">
        <img id="audio-icon" src="{{ asset('asset/audio-on.svg') }}" alt="audio" onclick="toggleAudio()">
        <img src="{{ asset('asset/setting.svg') }}" alt="setting">
    </div>
</div>

<a href="{{ url('/beginner/stage1/1') }}" data-no-spa>
  <img src="{{ asset('asset/map-spring/spring1.svg') }}" alt="stage" style="position: absolute; top: 400px; left: 100px;">
</a>
<a href="{{ url('/beginner/stage2/2') }}" data-no-spa>
  <img src="{{ asset('asset/map-spring/spring2.svg') }}" alt="stage" style="position: absolute; top: 355px; left: 430px;">
</a>
<a href="{{ url('/beginner/stage3/3') }}" data-no-spa>
  <img src="{{ asset('asset/map-spring/spring3.svg') }}" alt="stage" style="position: absolute; top: 500px; left: 700px;">
</a>
<a href="{{ url('/beginner/stage4/4') }}" data-no-spa>
  <img src="{{ asset('asset/map-spring/spring4.svg') }}" alt="stage" style="position: absolute; bottom: -260px; right: 430px;">
</a>
<a href="{{ url('/beginner/stage5/5') }}" data-no-spa>
  <img src="{{ asset('asset/map-spring/spring5.svg') }}" alt="stage" style="position: absolute; bottom: -340px; right: 100px;">
</a>

<style>
  html, body {
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
    height: 150vh;
  }
</style>
@endsection