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
    @vite('resources/css/home.css')
</head>
<body>
    <audio id="bg-audio" loop>
        <source src="{{ asset('asset/audio.mp3') }}" type="audio/mpeg">
    </audio>

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
            <img id="audio-icon" src="{{ asset('asset/audio-on.svg') }}" alt="audio" onclick="toggleAudio()">
            <img src="{{ asset('asset/setting.svg') }}" alt="setting">
        </div>
    </div>
        
    <div>
        <a href="{{ url('/beginner') }}">
            <img src="{{ asset('asset/island-spring.svg') }}" alt="Beginner" class="island-container top-left">
            <h2 class="text-overlay beginner">Beginner</h2>
        </a>

        <a href="{{ url('/elementary') }}">
            <img src="{{ asset('asset/island-summer.svg') }}" alt="Elementary" class="island-container top-right">
            <h2 class="text-overlay elementary">Elementary</h2>
        </a>

        <a href="{{ url('/intermediate') }}">
            <img src="{{ asset('asset/island-autumn.svg') }}" alt="Intermediate" class="island-container bottom-left">
            <h2 class="text-overlay intermediate">Intermediate</h2>
        </a>

        <a href="{{ url('/advance') }}">
            <img src="{{ asset('asset/island-winter.svg') }}" alt="Advance" class="island-container bottom-right">
            <h2 class="text-overlay advance">Advance</h2>
        </a>
    </div>
        
    <img src="{{ asset('asset/bridge-1.svg') }}" alt="road" style="position: fixed; top: 195px; left: 500px; width: 270px;">
    <img src="{{ asset('asset/bridge-2.svg') }}" alt="road" style="position: fixed; bottom: 250px; right: 600px; width: 220px;">
    <img src="{{ asset('asset/bridge-3.svg') }}" alt="road" style="position: fixed; bottom: 170px; right: 510px; width: 200px; transform: rotate(-8deg);">

    <script>
        let audioPlaying = false;
        const audioElement = document.getElementById('bg-audio');
        const audioIcon = document.getElementById('audio-icon');

        function toggleAudio() {
            if (audioPlaying) {
                audioElement.pause();
                audioIcon.src = "{{ asset('asset/audio-off.svg') }}";
            } else {
                audioElement.volume = 1;
                audioElement.play();
                audioIcon.src = "{{ asset('asset/audio-on.svg') }}";
            }
            audioPlaying = !audioPlaying;
        }

    </script>

</body>


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
</html>