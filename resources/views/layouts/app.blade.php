<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LogicLand')</title>
    <link rel="icon" type="svg+xml" href="{{ asset('asset/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    @yield('custom-css')
</head>

<body>
    <audio id="bg-audio" loop>
        <source src="{{ asset('asset/audio.mp3') }}" type="audio/mpeg">
    </audio>

    @yield('content')

    <script>
        c const audio = document.getElementById('bg-audio');
        const audioBtn = document.getElementById('audio-btn');
        let isPlaying = false;

        if (localStorage.getItem('audioPlaying') === 'true') {
            audio.play().catch(() => {}); 
            isPlaying = true;
            audioBtn.src = "{{ asset('asset/audio-on.svg') }}";
        }

        audioBtn.addEventListener('click', () => {
            if (isPlaying) {
                audio.pause();
                audioBtn.src = "{{ asset('asset/audio-off.svg') }}";
            } else {
                audio.play();
                audioBtn.src = "{{ asset('asset/audio-on.svg') }}";
            }
            isPlaying = !isPlaying;
            localStorage.setItem('audioPlaying', isPlaying);
        });

        audioBtn.addEventListener('mouseenter', () => {
            if (isPlaying)
                audioBtn.src = "{{ asset('asset/audio-turn-off.svg') }}";
            else
                audioBtn.src = "{{ asset('asset/audio-turn-on.svg') }}";
        });
        audioBtn.addEventListener('mouseleave', () => {
            audioBtn.src = isPlaying
                ? "{{ asset('asset/audio-on.svg') }}"
                : "{{ asset('asset/audio-off.svg') }}";
        });

        document.addEventListener('click', function(e) {
            const link = e.target.closest('a');
            if (link && link.href.startsWith(window.location.origin)) {
                e.preventDefault();
                fetch(link.href)
                    .then(res => res.text())
                    .then(html => {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');
                        const newContent = doc.getElementById('main-content').innerHTML;
                        document.getElementById('main-content').innerHTML = newContent;
                        window.history.pushState({}, '', link.href);
                    });
            }
        });
    </script>
</body>

</html>
