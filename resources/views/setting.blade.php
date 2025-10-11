@extends('layouts.app')

@section('title', 'Welcome to LogicLand')

@section('custom-css')
@vite(['resources/css/app.css'])
@endsection

@section('content')

<a href="\home" class="button-cancel"></a>

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