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
      <p class="text-overlay">Elementary</p>
  </div>
  <div class="navbar-right">
      <img id="audio-icon" src="{{ asset('asset/audio-on.svg') }}" alt="audio" onclick="toggleAudio()">
      <img src="{{ asset('asset/setting.svg') }}" alt="setting">
  </div>
</div>

<a href="{{ url('/elementary/stage1') }}" data-no-spa>
  <img src="{{ asset('asset/map-summer/summer5.svg') }}" alt="stage" style="position: absolute; top: 450px; right: 100px;">
</a>
<a href="{{ url('/elementary/stage2') }}" data-no-spa>
  <img src="{{ asset('asset/map-summer/summer4.svg') }}" alt="stage" style="position: absolute; top: 380px; right: 430px;">
</a>
<a href="{{ url('/elementary/stage3') }}" data-no-spa>
  <img src="{{ asset('asset/map-summer/summer3.svg') }}" alt="stage" style="position: absolute; top: 500px; left: 590px;">
</a>
<a href="{{ url('/elementary/stage4') }}" data-no-spa>
  <img src="{{ asset('asset/map-summer/summer2.svg') }}" alt="stage" style="position: absolute; bottom: -260px; left: 430px;">
</a>
<a href="{{ url('/elementary/stage5') }}" data-no-spa>
  <img src="{{ asset('asset/map-summer/summer1.svg') }}" alt="stage" style="position: absolute; bottom: -340px; left: 100px;">
</a>

<style>
  body {
    background: url('{{ asset('asset/map-summer/bckg-summer.svg') }}') no-repeat top left;
    background-size: 100% auto;
    background-attachment: scroll;
    height: 150vh;
  }
</style>
@endsection