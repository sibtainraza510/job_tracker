<div class="navbar">
    <div class="container">
        <div class="navbar-top">
            <div class="navbar-brand">📋 Job Tracker</div>
            @auth
                <div class="navbar-user">Welcome, {{ auth()->user()->name }}</div>
            @endauth
        </div>
        <div class="nav-links">
            <a href="{{ route('welcome') }}">🏠 Home</a>
            
            @auth
                <a href="{{ route('dashboard') }}">📊 Dashboard</a>
                <a href="{{ route('jobs.index') }}">💼 My Jobs</a>
                <a href="{{ route('jobs.create') }}">➕ New Job</a>
                <a href="{{ route('profile.edit') }}">👤 Profile</a>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" style="color: white; background: transparent; border: none; cursor: pointer; padding: 8px 12px; font-size: 13px;">🚪 Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">🔐 Login</a>
                <a href="{{ route('register') }}">✍️ Register</a>
            @endauth
        </div>
    </div>
</div>
