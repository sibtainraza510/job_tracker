<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Tracker</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #ecf0f1; color: #333; }
        .navbar { background: #2c3e50; color: white; padding: 15px 0; margin-bottom: 20px; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .navbar-top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
        .navbar-brand { font-size: 24px; font-weight: bold; }
        .navbar-user { font-size: 14px; }
        .nav-links { display: flex; gap: 15px; flex-wrap: wrap; }
        .nav-links a, .nav-links form button { color: white; text-decoration: none; padding: 8px 12px; border: none; cursor: pointer; font-size: 13px; background: transparent; }
        .nav-links a:hover, .nav-links form button:hover { background: #34495e; border-radius: 4px; }
        .alert { padding: 12px; margin-bottom: 20px; border-radius: 4px; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .card { background: white; border: 1px solid #ddd; border-radius: 4px; padding: 20px; margin-bottom: 20px; }
        .card-title { font-size: 20px; font-weight: bold; margin-bottom: 15px; color: #2c3e50; }
        .btn { display: inline-block; padding: 8px 16px; background: #3498db; color: white; text-decoration: none; border: none; border-radius: 4px; cursor: pointer; margin-right: 10px; margin-bottom: 10px; font-size: 14px; }
        .btn:hover { background: #2980b9; }
        .btn-danger { background: #e74c3c; }
        .btn-danger:hover { background: #c0392b; }
        .btn-secondary { background: #95a5a6; }
        .btn-secondary:hover { background: #7f8c8d; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table th, table td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        table th { background: #ecf0f1; font-weight: bold; }
        table tr:hover { background: #f9f9f9; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #333; }
        .form-group input, .form-group textarea, .form-group select { width: 100%; padding: 10px; border: 1px solid #bdc3c7; border-radius: 4px; font-family: Arial, sans-serif; }
        .form-group input:focus, .form-group textarea:focus, .form-group select:focus { outline: none; border-color: #3498db; box-shadow: 0 0 5px #3498db; }
        .form-group textarea { min-height: 100px; resize: vertical; }
        .error-text { color: #e74c3c; font-size: 12px; margin-top: 5px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .stat-box { background: white; border: 1px solid #ddd; padding: 20px; border-radius: 4px; text-align: center; }
        .stat-number { font-size: 32px; font-weight: bold; color: #3498db; }
        .stat-label { color: #7f8c8d; margin-top: 10px; }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">✓ {{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <strong>⚠ Errors:</strong> Please fix the issues below.
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
