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

<script type="module">
    const audio = document.getElementById('bg-audio');
    const audioBtn = document.getElementById('audio-btn');
    let isPlaying = localStorage.getItem('audioPlaying') === 'true';

    window.addEventListener('DOMContentLoaded', () => {
        if (isPlaying) {
            audio.play().catch(() => {});
            audioBtn.src = "{{ asset('asset/audio-on.svg') }}";
        } else {
            audioBtn.src = "{{ asset('asset/audio-off.svg') }}";
        }
    });

    document.addEventListener('click', function (e) {
        const link = e.target.closest('a');
        if (link && link.href.startsWith(window.location.origin) && !link.hasAttribute('data-no-spa')) {
            e.preventDefault();

            fetch(link.href)
                .then(res => res.text())
                .then(html => {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    const newContent = doc.getElementById('main-content').innerHTML;
                    document.getElementById('main-content').innerHTML = newContent;
                    window.history.pushState({}, '', link.href);
                })
                .catch(err => console.error(err));
        }
    });

    window.addEventListener('popstate', () => {
        fetch(window.location.href)
            .then(res => res.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newContent = doc.getElementById('main-content').innerHTML;
                document.getElementById('main-content').innerHTML = newContent;
            });
    });
</script>
@yield('custom-js')
</body>
</html>