<div style="background: #2c3e50; color: white; padding: 15px 0; margin-bottom: 20px;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
            <div style="font-size: 24px; font-weight: bold;">📋 Job Tracker</div>
            @auth
                <div style="font-size: 14px;">Welcome, {{ auth()->user()->name }}</div>
            @endauth
        </div>
        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
            <a href="{{ route('welcome') }}" style="color: white; text-decoration: none; padding: 8px 12px; font-size: 13px;">🏠 Home</a>
            
            @auth
                <a href="{{ route('dashboard') }}" style="color: white; text-decoration: none; padding: 8px 12px; font-size: 13px;">📊 Dashboard</a>
                <a href="{{ route('jobs.index') }}" style="color: white; text-decoration: none; padding: 8px 12px; font-size: 13px;">📋 My Applications</a>
                <a href="{{ route('jobs.create') }}" style="color: white; text-decoration: none; padding: 8px 12px; font-size: 13px;">➕ Add Application</a>
                <a href="{{ route('profile.edit') }}" style="color: white; text-decoration: none; padding: 8px 12px; font-size: 13px;">👤 Profile</a>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" style="color: white; background: transparent; border: none; cursor: pointer; padding: 8px 12px; font-size: 13px;">🚪 Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" style="color: white; text-decoration: none; padding: 8px 12px; font-size: 13px;">🔐 Login</a>
                <a href="{{ route('register') }}" style="color: white; text-decoration: none; padding: 8px 12px; font-size: 13px;">✍️ Register</a>
            @endauth
        </div>
    </div>
</div>