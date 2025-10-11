@extends('layouts.app')

@section('title', 'LogicLand')

@section('custom-css')
    @vite(['resources/css/map.css'])
    @vite(['resources/css/advance.css'])
@endsection

@section('content')
<div id= "main-content">

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
          <text class="text-overlay">Advance</text>
      </div>

      <div class="navbar-right">
          <img id="audio-icon" src="{{ asset('asset/audio-on.svg') }}" alt="audio" onclick="toggleAudio()">
          <img src="{{ asset('asset/setting.svg') }}" alt="setting">
      </div>
  </div>

  <a href="{{ url('/advance/stage1/1') }}" data-no-spa>
    <img src="{{ asset('asset/map-winter/winter1.svg') }}" alt="stage" class="stage1 button-stage">
  </a>

  <a href="{{ url('/advance/stage2/2') }}" data-no-spa>
    <img src="{{ asset('asset/map-winter/winter2.svg') }}" alt="stage" class="stage2 button-stage">
  </a>

  <a href="{{ url('/advance/stage3/3') }}" data-no-spa>
    <img src="{{ asset('asset/map-winter/winter3.svg') }}" alt="stage" class="stage3 button-stage">
  </a>

  <a href="{{ url('/advance/stage4/4') }}" data-no-spa>
    <img src="{{ asset('asset/map-winter/winter4.svg') }}" alt="stage" class="stage4 button-stage">
  </a>

  <a href="{{ url('/advance/stage5/5') }}" data-no-spa>
    <img src="{{ asset('asset/map-winter/winter5.svg') }}" alt="stage" class="stage5 button-stage">
  </a>
</div>

<style>
  body {
    background: url('{{ asset('asset/map-winter/bckg-winter.svg') }}') no-repeat top left;
    background-size: 100% auto;
    background-attachment: scroll;
    height: 120vh;
  }
</style>
@endsection