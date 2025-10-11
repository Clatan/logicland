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
            <text class="text-overlay">Intermediate</text>
        </div>

        <div class="navbar-right">
            <img id="audio-icon" src="{{ asset('asset/audio-on.svg') }}" alt="audio" onclick="toggleAudio()">
            <img src="{{ asset('asset/setting.svg') }}" alt="setting">
        </div>
    </div>

    <a href="{{ url('/intermediate/stage1') }}">
      <img src="{{ asset('asset/map-autumn/autumn1.svg') }}" alt="stage" style="position: absolute; top: 510px; left: 100px;">
    </a>

    <a href="{{ url('/intermediate/stage2') }}">
      <img src="{{ asset('asset/map-autumn/autumn2.svg') }}" alt="stage" style="position: absolute; top: 430px; left: 430px;">
    </a>

    <a href="{{ url('/intermediate/stage3') }}">
      <img src="{{ asset('asset/map-autumn/autumn3.svg') }}" alt="stage" style="position: absolute; top: 500px; left: 700px;">
    </a>

    <a href="{{ url('/intermediate/stage4') }}">
      <img src="{{ asset('asset/map-autumn/autumn4.svg') }}" alt="stage" style="position: absolute; bottom: -260px; right: 430px;">
    </a>

    <a href="{{ url('/intermediate/stage5') }}">
      <img src="{{ asset('asset/map-autumn/autumn5.svg') }}" alt="stage" style="position: absolute; bottom: -340px; right: 100px;">
    </a>

<style>
  body {
    background: url('{{ asset('asset/map-autumn/bckg-autumn.svg') }}') no-repeat top left;
    background-size: 100% auto;
    background-attachment: scroll;
    height: 150vh;
  }
</style>
@endsection