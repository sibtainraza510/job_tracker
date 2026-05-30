@extends('layouts.simple')

@section('content')

<div class="card">
    <div class="card-title">👤 My Profile</div>

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ auth()->user()->name }}" required>
            @error('name')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ auth()->user()->email }}" required>
            @error('email')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div style="margin-top: 30px;">
            <button type="submit" class="btn">✓ Update Profile</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-title">🔐 Change Password</div>

    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Current Password</label>
            <input type="password" name="current_password" required>
            @error('current_password')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>New Password</label>
            <input type="password" name="password" required>
            @error('password')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn">✓ Update Password</button>
    </form>
</div>

<div class="card" style="border-left: 3px solid #e74c3c;">
    <div class="card-title" style="color: #e74c3c;">⚠️ Delete Account</div>

    <p style="margin-bottom: 20px; color: #666;">Once you delete your account, there is no going back. Please be certain.</p>

    <form action="{{ route('profile.destroy') }}" method="POST" onsubmit="return confirm('Are you sure? This cannot be undone!');">
        @csrf
        @method('DELETE')

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password" required>
            @error('password')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-danger">🗑️ Delete Account</button>
    </form>
</div>

@endsection
