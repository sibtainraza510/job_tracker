@extends('layouts.simple')

@section('content')

<div class="card">
    <div class="card-title">&#128100; My Profile</div>

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}" required>
            @error('name')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
            @error('email')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div style="margin-top: 10px;">
            <button type="submit" class="btn">&#10003; Update Profile</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-title">&#128274; Change Password</div>

    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="current_password">Current Password</label>
            <input type="password" id="current_password" name="current_password" required>
            @error('current_password')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" id="password" name="password" required>
            @error('password')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm New Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn">&#10003; Update Password</button>
    </form>
</div>

<div class="card" style="border-left: 3px solid #e74c3c;">
    <div class="card-title" style="color: #e74c3c;">&#9888; Delete Account</div>

    <p style="margin-bottom: 20px; color: #666;">Once you delete your account, there is no going back. Please be certain.</p>

    <form action="{{ route('profile.destroy') }}" method="POST"
          onsubmit="return confirm('Are you sure? This cannot be undone!');">
        @csrf
        @method('DELETE')

        <div class="form-group">
            <label for="delete_password">Confirm Your Password</label>
            <input type="password" id="delete_password" name="password" required>
            @error('password')<div class="error-text">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-danger">&#128465; Delete Account</button>
    </form>
</div>

@endsection
