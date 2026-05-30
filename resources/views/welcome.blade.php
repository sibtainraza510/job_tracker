<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Tracker - Welcome</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #ecf0f1; color: #333; }
        .navbar { background: #2c3e50; color: white; padding: 15px 0; margin-bottom: 20px; }
        .navbar-content { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; }
        .navbar-brand { font-size: 24px; font-weight: bold; }
        .nav-links a { color: white; text-decoration: none; margin-left: 20px; padding: 8px 12px; background: #34495e; border-radius: 4px; display: inline-block; }
        .nav-links a:hover { background: #1a252f; }
        .nav-links form { display: inline; }
        .nav-links form button { color: white; background: #e74c3c; border: none; padding: 8px 12px; border-radius: 4px; cursor: pointer; margin-left: 20px; font-size: 14px; }
        .nav-links form button:hover { background: #c0392b; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .card { background: white; padding: 40px; border-radius: 4px; text-align: center; }
        .card h1 { font-size: 32px; color: #2c3e50; margin-bottom: 20px; }
        .card p { font-size: 16px; color: #7f8c8d; margin-bottom: 30px; }
        .btn { display: inline-block; padding: 12px 20px; margin: 10px; background: #3498db; color: white; text-decoration: none; border-radius: 4px; cursor: pointer; border: none; font-size: 14px; }
        .btn:hover { background: #2980b9; }
        .btn-secondary { background: #95a5a6; }
        .btn-secondary:hover { background: #7f8c8d; }
        .features { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 40px; text-align: left; }
        .feature { background: #f8f9fa; padding: 20px; border-radius: 4px; border-left: 3px solid #3498db; }
        .feature h3 { font-size: 16px; margin-bottom: 8px; color: #2c3e50; }
        .feature p { font-size: 14px; color: #7f8c8d; margin-bottom: 0; }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-content">
            <div class="navbar-brand">&#128203; Job Tracker</div>
            <div class="nav-links">
                @auth
                    <span style="margin-right: 10px; font-size: 14px;">Welcome, {{ auth()->user()->name }}</span>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                    <a href="{{ route('jobs.index') }}">My Jobs</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <h1>Welcome to Job Tracker</h1>
            <p>Organize and track all your job applications in one place.</p>

            @guest
                <div style="margin-top: 20px;">
                    <p style="margin-bottom: 20px;">Get started by logging in or creating an account.</p>
                    <a href="{{ route('login') }}" class="btn">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                </div>
            @else
                <div style="margin-top: 20px;">
                    <p style="margin-bottom: 20px;">Ready to track your jobs?</p>
                    <a href="{{ route('jobs.index') }}" class="btn">View My Jobs</a>
                    <a href="{{ route('jobs.create') }}" class="btn btn-secondary">Add New Job</a>
                </div>
            @endguest

            <div class="features">
                <div class="feature">
                    <h3>&#128203; Track Applications</h3>
                    <p>Keep all your job applications in one organized place.</p>
                </div>
                <div class="feature">
                    <h3>&#128202; Monitor Status</h3>
                    <p>Track each application from applied to offer or rejection.</p>
                </div>
                <div class="feature">
                    <h3>&#128269; Search & Filter</h3>
                    <p>Quickly find any job application by title or company.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
