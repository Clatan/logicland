<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level Elementary</title>
    <link rel="icon" type="svg+xml" href="{{ asset('asset/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">
    @vite('resources/css/map.css')

</head>
<body>
  <audio id="bg-audio" loop>
        <source src="{{ asset('asset/audio.mp3') }}" type="audio/mpeg">
    </audio>

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

    <div class="navbar">
        <div class="navbar-left">
            <img src="{{ asset('asset/life.svg') }}" alt="life">
            <img src="{{ asset('asset/life.svg') }}" alt="life">
            <img src="{{ asset('asset/life.svg') }}" alt="life">
        </div>

        <div class="navbar-center">
            <text class="text-overlay">Elementary</text>
        </div>

        <div class="navbar-right">
            <img id="audio-icon" src="{{ asset('asset/audio-on.svg') }}" alt="audio" onclick="toggleAudio()">
            <img src="{{ asset('asset/setting.svg') }}" alt="setting">
        </div>
    </div>

    <a href="{{ url('/elementary/stage1') }}">
      <img src="{{ asset('asset/map-summer/summer5.svg') }}" alt="stage" style="position: absolute; top: 450px; right: 100px;">
    </a>

    <a href="{{ url('/elementary/stage2') }}">
      <img src="{{ asset('asset/map-summer/summer4.svg') }}" alt="stage" style="position: absolute; top: 380px; right: 430px;">
    </a>

    <a href="{{ url('/elementary/stage3') }}">
      <img src="{{ asset('asset/map-summer/summer3.svg') }}" alt="stage" style="position: absolute; top: 500px; left: 590px;">
    </a>

    <a href="{{ url('/elementary/stage4') }}">
      <img src="{{ asset('asset/map-summer/summer2.svg') }}" alt="stage" style="position: absolute; bottom: -260px; left: 430px;">
    </a>

    <a href="{{ url('/elementary/stage5') }}">
      <img src="{{ asset('asset/map-summer/summer1.svg') }}" alt="stage" style="position: absolute; bottom: -340px; left: 100px;">
    </a>

    
</body>
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
    background: url('{{ asset('asset/map-summer/bckg-summer.svg') }}') no-repeat top left;
    background-size: 100% auto;
    background-attachment: scroll;
    height: 150vh;
  }
</style>
</html>