@extends('layouts.app')

@section('title', 'Welcome to LogicLand')

@section('custom-css')
@vite(['resources/css/app.css'])
@endsection

@section('content')
<img src="../asset/island-polos.svg" alt="land" class="island"style="position: absolute; bottom: -50px; width: 90%;">
<a href="\load" class="button-cancel"></a>
<div class="main-container">
    <img src="{{ asset('asset/about-login.svg') }}" alt="button-stand" class="button-stand" style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);">
    <a href="/about" class="button about-button" style= "position: absolute; top: 60%; transform: translate(-0%, -125%);"></a>
    <a href="/login" class="button login-button" style= "position: absolute; top: 60%; transform: translate(-0%, -30%);"></a>
</div>

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

@endsection