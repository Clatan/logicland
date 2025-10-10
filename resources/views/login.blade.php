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
    @vite('resources/css/login.css')
      @vite('resources/css/app.css')
</head>

<body>
    <img src="{{ asset('asset/island-polos-full.svg') }}" alt="land" style="position: absolute; bottom: -50px; width: 90%;">
    <div class="login-box">
        <img src="{{ asset('asset/bckg-login.svg') }}" alt="button-stand-login" class="button-stand-login">
        <a href="\welcome" class="button-cancel"></a>
        <h1 class="login-title">Login Acc</h1>
        

        <form action="/login-post" method="POST">
            @csrf
            <input type="text" name="username" class="login-input" placeholder="Enter your username" required autocomplete="off">
            <input type="password" name="password" class="login-input" placeholder="Enter your password" required>
            @if (session('error'))
                <div class="error-message" style="color: red; text-align: center; margin-bottom: 5px; font-weight: bold; z-index: 10;">
                    {{ session('error') }}
                </div>
            @endif
            <button type="submit" class="login-button">Login</button>
        </form>
        <div class="signup-link">
            Don't have an account yet?
            <a href="/signup">Sign Up</a>
        </div>
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
