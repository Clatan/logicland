@extends('layouts.app')

@section('title', 'Setting')

@section('custom-css')
@vite(['resources/css/setting.css'])
@endsection

@section('content')

<img src="{{ asset('asset/island-polos-full.svg') }}" alt="land" class="island">
<div class="setting-box">
    <img src="{{ asset('asset/bckg-setting.svg') }}" alt="bckgsetting" class="bckgsetting">
    <a href="\home" class="button-cancel" data-no-spa></a>
    <h1 class="setting-title">Setting Account</h1>

    <p><strong>Username:</strong> {{ $user->username ?? 'N/A' }}</p>
    <p><strong>Email:</strong> {{ $user->email ?? 'N/A' }}</p>

    <h3 class="text-overlay">Change Password</h3>
    @if(session('error'))
        <div style="color:red">{{ session('error') }}</div>
    @endif
    @if(session('success'))
        <div style="color:green">{{ session('success') }}</div>
    @endif

    <form id="change-password-form" method="POST" action="{{ route('setting.updatePassword') }}">
        @csrf
        <label for="password-baru">New Password:</label>
        <input type="password" id="password-baru" name="password" required>

        <label for="password-konfirmasi">Confrim Password:</label>
        <input type="password" id="password-konfirmasi" name="password_confirmation" required>

        <button type="submit" class="button-change-password">Change Password</button>
    </form>

    <form id="logout-form" method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="button-logout">Logout</button>
    </form>

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