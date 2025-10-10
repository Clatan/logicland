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
    @vite('resources/css/app.css')
</head>

<body>
    <img src="{{ asset('asset/island-polos-full.svg') }}" alt="land" class="island">
    <a href="\welcome" class="button-cancel"></a>

    <div class="main-container">
        <img src="{{ asset('asset/bckg-about.svg') }}" alt="button-stand-about" class="button-stand-about">
        <h1 class="about-title">About LogicLand</h1>
        <h3 class="about-caption">
            LogicLand adalah platform pembelajaran interaktif yang dirancang khusus
            <br> untuk pelajar tingkat SMP dalam melatih kemampuan computational
            <br> thinking — cara berpikir logis, kritis, dan sistematis dalam memecahkan masalah.
            <br> LogicLand menggabungkan konsep pembelajaran dan elemen gamifikasi agar proses
            <br> belajar terasa lebih seru, menantang, dan memotivasi.
        </h3>
    </div>
</body>

<style>
    body {
        background: url('{{ asset('asset/bckg.svg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        height: 110vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
</style>

</html>
