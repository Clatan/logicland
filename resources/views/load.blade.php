<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logic Land</title>
    <link rel="icon" type="svg+xml" href="{{ asset('asset/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="centered-container">
        <a href="{{ url('/') }}" class="start-button">
            <h1 class="text-overlay">Start</h1>
        </a>
        <img src="{{ asset('asset/logo.svg') }}" alt="Logic Land" style="position:absolute; top: 47%; left: 50%; transform: translate(-50%, -50%); z-index: 5; width: 45%;">            
        <img src="{{ asset('asset/cloud.svg') }}" alt="cloud" style="position:absolute; top: 50%; ;left: 50%; transform: translate(-50%, -50%); z-index: 1; width: 100%;">
    </div>
</body>

<style>
    body {
        background: url('{{ asset('asset/bckg.svg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
</style>
</html>