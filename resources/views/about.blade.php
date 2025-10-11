@extends('layouts.app')

@section('title', 'About LogicLand')

@section('custom-css')
@vite(['resources/css/about.css'])
@endsection

@section('content')

<img src="{{ asset('asset/island-polos-full.svg') }}" alt="land" class="island">
<a href="\welcome" class="button-cancel" data-no-spa></a>

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

</html>
