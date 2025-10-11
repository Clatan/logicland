@extends('layouts.app')

@section('title', 'Login Account')

@section('custom-css')
    @vite(['resources/css/login.css'])
@endsection

@section('content')

<img src="{{ asset('asset/island-polos-full.svg') }}" alt="land" class="island">
<div class="login-box">
    <img src="{{ asset('asset/bckg-login.svg') }}" alt="button-stand-login" class="button-stand-login">
    <a href="\welcome" class="button-cancel" data-no-spa></a>
    <h1 class="login-title">Login Acc</h1>

    <form action="/login-post" method="POST">
        @csrf
        <input type="text" name="username" class="login-input" placeholder="Enter your username" required
            autocomplete="off">
        <input type="password" name="password" class="login-input" placeholder="Enter your password" required>
        @if (session('error'))
            <div class="error-message"
                style="color: red; text-align: center; margin-bottom: 5px; font-weight: bold; z-index: 10;">
                {{ session('error') }}
            </div>
        @endif
        <button type="submit" class="login">Login</button>
    </form>
    <div class="signup-link">
    Don't have an account yet?
        <a href="/signup" data-no-spa>Sign Up</a>
    </div>
</div>

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

@endsection
