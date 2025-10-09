<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogicLand</title>
    <link rel="icon" type="svg+xml" href="{{ asset('asset/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <img src="../asset/island-polos.svg" alt="land" class="island"style="position: absolute; bottom: -50px; width: 90%;">
    <div class="main-container">
        <img src="{{ asset('asset/about-login.svg') }}" alt="button-stand" class="button-stand" style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);">
        <a href="/about" class="button about-button" style= "position: absolute; top: 60%; transform: translate(-0%, -125%);"></a>
        <a href="/login" class="button login-button" style= "position: absolute; top: 60%; transform: translate(-0%, -30%);"></a>
    </div>
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