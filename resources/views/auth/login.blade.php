<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — InvenTrack</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Background blobs */
        body::before {
            content: '';
            position: absolute;
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(99,102,241,0.15), transparent 70%);
            top: -150px; left: -150px;
            border-radius: 50%;
        }
        body::after {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(167,139,250,0.1), transparent 70%);
            bottom: -100px; right: -100px;
            border-radius: 50%;
        }

        .auth-card {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(99,102,241,0.2);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 2.5rem;
            width: 100%;
            max-width: 420px;
            position: relative;
            z-index: 1;
            box-shadow: 0 25px 60px rgba(0,0,0,0.4);
            animation: fadeUp 0.5s ease;
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        .logo-icon {
            width: 60px; height: 60px;
            background: linear-gradient(135deg, #6366f1, #a78bfa);
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            color: white;
            margin-bottom: 1rem;
            box-shadow: 0 8px 24px rgba(99,102,241,0.4);
        }
        .logo h1 {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #6366f1, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .logo p { color: #64748b; font-size: 0.85rem; margin-top: 0.3rem; }

        h2 { font-size: 1.2rem; font-weight: 600; color: #e2e8f0; margin-bottom: 0.3rem; }
        .subtitle { color: #64748b; font-size: 0.85rem; margin-bottom: 1.8rem; }

        .form-group { margin-bottom: 1.2rem; }
        label { display: block; font-size: 0.82rem; font-weight: 500; color: #94a3b8; margin-bottom: 0.5rem; }
        .input-wrap { position: relative; }
        .input-wrap i { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #475569; font-size: 0.9rem; }
        input[type="email"], input[type="password"], input[type="text"] {
            width: 100%;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(99,102,241,0.2);
            border-radius: 10px;
            padding: 0.75rem 0.9rem 0.75rem 2.6rem;
            color: #e2e8f0;
            font-size: 0.9rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.25s;
            outline: none;
        }
        input:focus {
            border-color: #6366f1;
            background: rgba(99,102,241,0.08);
            box-shadow: 0 0 0 3px rgba(99,102,241,0.15);
        }
        input::placeholder { color: #475569; }

        .toggle-password {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #475569;
            cursor: pointer;
            font-size: 0.9rem;
            background: none;
            border: none;
            padding: 0;
        }
        .toggle-password:hover { color: #94a3b8; }

        .remember-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }
        .remember-row label { margin: 0; display: flex; align-items: center; gap: 0.4rem; cursor: pointer; font-size: 0.83rem; }
        .remember-row input[type="checkbox"] {
            width: 15px; height: 15px;
            accent-color: #6366f1;
            padding: 0;
        }
        .forgot-link { color: #6366f1; font-size: 0.83rem; text-decoration: none; }
        .forgot-link:hover { color: #a78bfa; }

        .btn-primary {
            width: 100%;
            background: linear-gradient(135deg, #6366f1, #a78bfa);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 0.85rem;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s;
            font-family: 'Inter', sans-serif;
            box-shadow: 0 4px 20px rgba(99,102,241,0.35);
        }
        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 30px rgba(99,102,241,0.5);
        }
        .btn-primary:active { transform: translateY(0); }

        .error-msg { color: #f87171; font-size: 0.78rem; margin-top: 0.4rem; }

        .divider { text-align: center; margin: 1.5rem 0; position: relative; }
        .divider::before {
            content: '';
            position: absolute;
            top: 50%; left: 0;
            width: 100%; height: 1px;
            background: rgba(99,102,241,0.15);
        }
        .divider span {
            background: #0f172a;
            padding: 0 0.8rem;
            color: #475569;
            font-size: 0.8rem;
            position: relative;
        }

        .register-link { text-align: center; font-size: 0.85rem; color: #64748b; }
        .register-link a { color: #6366f1; text-decoration: none; font-weight: 600; }
        .register-link a:hover { color: #a78bfa; }

        .alert {
            background: rgba(239,68,68,0.12);
            border: 1px solid rgba(239,68,68,0.3);
            color: #f87171;
            border-radius: 10px;
            padding: 0.8rem 1rem;
            font-size: 0.85rem;
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="auth-card">
        <div class="logo">
            <div class="logo-icon"><i class="fas fa-boxes-stacked"></i></div>
            <h1>InvenTrack</h1>
            <p>Inventory Management System</p>
        </div>

        <h2>Welcome back!</h2>
        <p class="subtitle">Sign in to your account to continue</p>

        @if($errors->any())
            <div class="alert">
                <i class="fas fa-circle-exclamation"></i>
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <div class="input-wrap">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="you@example.com" value="{{ old('email') }}" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrap">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <button type="button" class="toggle-password" onclick="togglePassword('password', this)">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="remember-row">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    Remember me
                </label>
                <a href="#" class="forgot-link">Forgot password?</a>
            </div>

            <button type="submit" class="btn-primary">
                <i class="fas fa-right-to-bracket"></i> Sign In
            </button>
        </form>

        <div class="divider"><span>or</span></div>

        <p class="register-link">
            Don't have an account? <a href="{{ route('register') }}">Create one</a>
        </p>
    </div>

    <script>
        function togglePassword(id, btn) {
            const input = document.getElementById(id);
            const icon = btn.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.className = 'fas fa-eye-slash';
            } else {
                input.type = 'password';
                icon.className = 'fas fa-eye';
            }
        }
    </script>
</body>
</html>
