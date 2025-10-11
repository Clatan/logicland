@extends('layouts.app')

@section('title', 'Welcome to LogicLand')

@section('custom-css')
@vite(['resources/css/app.css'])
@endsection

@section('content')
<img src="{{ asset('asset/island-polos-full.svg') }}" alt="land" class="island">
<div class="main-container">
    <img src="{{ asset('asset/about-login.svg') }}" alt="button-stand" class="button-stand">
    <a href="/about" class="button about-button" data-no-spa></a>
    <a href="/login" class="button login-button" data-no-spa></a>
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