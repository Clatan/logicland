<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account</title>
    <link rel="icon" type="svg+xml" href="{{ asset('asset/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">
    @vite('resources/css/signup.css')
</head>
<body>
    <img src="../asset/island-polos.svg" alt="land" style="position: absolute; bottom: -50px; width: 90%;">
     <div class="signup-box">

        <img src="{{ asset('asset/bckg-login.svg') }}" alt="button-stand-login" class="button-stand-login">
        <a href="\welcome" class="button-cancel"></a>
        <h1 class="signup-title">Register Acc</h1>
        <form action="">
            <input type="email" class="signup-input" placeholder="Enter your email" required>
            <input type="username" class="signup-input" placeholder="Enter your username" required>
            <input type="password" class="signup-input" placeholder="Enter your password" required>
            <button type="submit" class="signup-button">Register</button>
        </form>
        {{-- <div class="signup-link">
        Don't have an account yet?
        <a href="/register">Sign Up</a>
    </div> --}}
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