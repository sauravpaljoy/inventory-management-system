<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Inventory Management System')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #0f172a; color: #e2e8f0; min-height: 100vh; }

        /* Navbar */
        .navbar {
            background: rgba(15,23,42,0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(99,102,241,0.2);
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .navbar-brand {
            font-size: 1.3rem;
            font-weight: 700;
            background: linear-gradient(135deg, #6366f1, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration: none;
        }
        .navbar-menu { display: flex; align-items: center; gap: 1rem; }
        .navbar-menu a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            padding: 0.4rem 0.8rem;
            border-radius: 8px;
            transition: all 0.2s;
        }
        .navbar-menu a:hover { color: #e2e8f0; background: rgba(99,102,241,0.15); }
        .btn-logout {
            background: rgba(239,68,68,0.15);
            color: #f87171 !important;
            border: 1px solid rgba(239,68,68,0.3);
        }
        .btn-logout:hover { background: rgba(239,68,68,0.25) !important; }

        /* Main content */
        .main-content { padding: 2rem; max-width: 1200px; margin: 0 auto; }

        /* Flash messages */
        .alert {
            padding: 0.9rem 1.2rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }
        .alert-success { background: rgba(34,197,94,0.15); border: 1px solid rgba(34,197,94,0.3); color: #4ade80; }
        .alert-error   { background: rgba(239,68,68,0.15);  border: 1px solid rgba(239,68,68,0.3);  color: #f87171; }
    </style>
    @yield('styles')
</head>
<body>
    <nav class="navbar">
        <a href="{{ route('dashboard') }}" class="navbar-brand">
            <i class="fas fa-boxes-stacked"></i> InvenTrack
        </a>
        <div class="navbar-menu">
            <a href="{{ route('dashboard') }}"><i class="fas fa-gauge"></i> Dashboard</a>
            <a href="#"><i class="fas fa-box"></i> Products</a>
            <a href="#"><i class="fas fa-tags"></i> Categories</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn-logout" style="background:none;border:none;cursor:pointer;color:#f87171;font-size:0.9rem;font-weight:500;padding:0.4rem 0.8rem;border-radius:8px;border:1px solid rgba(239,68,68,0.3);transition:all 0.2s;">
                    <i class="fas fa-right-from-bracket"></i> Logout
                </button>
            </form>
        </div>
    </nav>

    <div class="main-content">
        @if(session('success'))
            <div class="alert alert-success"><i class="fas fa-circle-check"></i> {{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-error"><i class="fas fa-circle-exclamation"></i> {{ session('error') }}</div>
        @endif

        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>
