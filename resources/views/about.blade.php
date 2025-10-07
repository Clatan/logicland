<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About LogicLand</title>
    <link rel="icon" type="svg+xml" href="{{ asset('asset/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">
    @vite('resources/css/about.css')
</head>
<body>
    <img src="../asset/island-polos.svg" alt="land" style="position: absolute; bottom: -50px; width: 90%;">
    <a href="\welcome" class="button-cancel"></a>
    
    <div class="main-container">
        <img src="{{ asset('asset/bckg-about.svg') }}" alt="button-stand-about" class="button-stand-about">
        <h1 class="about-title">About LogicLand</h1>
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