@extends('layouts.app')

@section('title', 'Setting Account')

@section('custom-css')
@vite(['resources/css/setting.css'])
@endsection

@section('content')

<img src="{{ asset('asset/island-polos-full.svg') }}" alt="land" class="island">
<div class="setting-box">
    <img src="{{ asset('asset/bckg-setting.svg') }}" alt="bckgsetting" class="bckgsetting">
    <a href="\home" class="button-cancel" data-no-spa></a>
    <h1 class="setting-title">Setting Account</h1>
    
    <div class="main-container">
        <div class="profile-container">
            <div class="text-container">
                <p><strong>Username</strong></p>
                <p><strong>Email</strong></p>
            </div>
    
            <div class="text-container">
                <p><strong>:</strong></p>
                <p><strong>:</strong></p>
            </div>
            
            <div class="text-container">
                <p>{{ $username ?? 'N/A' }}</p>
                <p>{{ $email ?? 'N/A' }}</p>
            </div>
        </div>

        <form id="change-password-form" method="POST" action="{{ route('password.update') }}">
            @csrf
            <label>New Password</label>
            <input type="password" name="new_password" class="setting-input" placeholder="Enter your new password" required>
            @error('new_password') <span style="color:red; font-family:'Nunito'">{{ $message }}</span> @enderror
            
            <label for="password-konfirmasi" class="label">Confrim Password</label>
            <input type="password" name="new_password_confirmation" class="setting-input" placeholder="Confirm your new password" required>
            
            <button type="submit" class="button-change-password">Change Password</button>
        </form>
        
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="button-logout">Logout</button>
        </form>
        @if(session('error'))
            <div style="color:red">{{ session('error') }}</div>
        @endif
        @if(session('success'))
            <div style="color:green">{{ session('success') }}</div>
        @endif
        
    </div>


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

    
    .setting-box p,
    .setting-box h1,
    .setting-box h3,
    .setting-box form {
        position: relative;
        z-index: 1; /* Teks dan form di atas gambar */
    }
</style>

@endsection