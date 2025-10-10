<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Account</title>
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
        <form action="/signup-post" method="POST">
            @csrf
            <div class="input-group">
                <input type="email" name="email" class="signup-input" placeholder="Enter your email" required autocomplete="off">
                <div class="error-message {{ $errors->has('email') ? 'show' : '' }}">
                    {{ $errors->first('email') }}
                </div>
            </div>
            <div class="input-group">
                <input type="text" name="username" class="signup-input" placeholder="Enter your username" required autocomplete="off">
                <div class="error-message {{ $errors->has('username') ? 'show' : '' }}">
                    {{ $errors->first('username') }}
                </div>
            </div>
            <div class="input-group">
                <input type="password" name="password" class="signup-input" placeholder="Enter your password" required>
                <div class="error-message {{ $errors->has('password') ? 'show' : '' }}">
                    {{ $errors->first('password') }}
                </div>
            </div>

            <button type="submit" class="signup-button">Register</button>
                
        </form>
            <div class="login-link">
            Already have an account?
            <a href="/login">Login</a>
    </div>
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