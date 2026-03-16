<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register — InvenTrack</title>
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
            padding: 2rem 1rem;
        }
        body::before {
            content: '';
            position: absolute;
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(99,102,241,0.15), transparent 70%);
            top: -200px; right: -150px;
            border-radius: 50%;
        }
        body::after {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(167,139,250,0.1), transparent 70%);
            bottom: -100px; left: -100px;
            border-radius: 50%;
        }

        .auth-card {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(99,102,241,0.2);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 2.5rem;
            width: 100%;
            max-width: 440px;
            position: relative;
            z-index: 1;
            box-shadow: 0 25px 60px rgba(0,0,0,0.4);
            animation: fadeUp 0.5s ease;
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .logo { text-align: center; margin-bottom: 1.8rem; }
        .logo-icon {
            width: 56px; height: 56px;
            background: linear-gradient(135deg, #6366f1, #a78bfa);
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            color: white;
            margin-bottom: 0.8rem;
            box-shadow: 0 8px 24px rgba(99,102,241,0.4);
        }
        .logo h1 {
            font-size: 1.4rem;
            font-weight: 700;
            background: linear-gradient(135deg, #6366f1, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .logo p { color: #64748b; font-size: 0.82rem; margin-top: 0.2rem; }

        h2 { font-size: 1.15rem; font-weight: 600; color: #e2e8f0; margin-bottom: 0.3rem; }
        .subtitle { color: #64748b; font-size: 0.83rem; margin-bottom: 1.6rem; }

        .form-group { margin-bottom: 1.1rem; }
        label { display: block; font-size: 0.82rem; font-weight: 500; color: #94a3b8; margin-bottom: 0.45rem; }
        .input-wrap { position: relative; }
        .input-wrap i { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #475569; font-size: 0.88rem; }

        input[type="email"], input[type="password"], input[type="text"] {
            width: 100%;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(99,102,241,0.2);
            border-radius: 10px;
            padding: 0.72rem 0.9rem 0.72rem 2.6rem;
            color: #e2e8f0;
            font-size: 0.88rem;
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
        input.is-invalid { border-color: rgba(239,68,68,0.5) !important; }

        .toggle-password {
            position: absolute; right: 14px; top: 50%;
            transform: translateY(-50%);
            color: #475569; cursor: pointer;
            font-size: 0.9rem; background: none; border: none; padding: 0;
        }
        .toggle-password:hover { color: #94a3b8; }

        .error-msg { color: #f87171; font-size: 0.76rem; margin-top: 0.35rem; display: flex; align-items: center; gap: 0.3rem; }

        .btn-primary {
            width: 100%;
            background: linear-gradient(135deg, #6366f1, #a78bfa);
            color: white; border: none; border-radius: 10px;
            padding: 0.85rem; font-size: 0.93rem; font-weight: 600;
            cursor: pointer; transition: all 0.25s;
            font-family: 'Inter', sans-serif;
            box-shadow: 0 4px 20px rgba(99,102,241,0.35);
            margin-top: 0.5rem;
        }
        .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 8px 30px rgba(99,102,241,0.5); }
        .btn-primary:active { transform: translateY(0); }

        .divider { text-align: center; margin: 1.3rem 0; position: relative; }
        .divider::before { content: ''; position: absolute; top: 50%; left: 0; width: 100%; height: 1px; background: rgba(99,102,241,0.15); }
        .divider span { background: #0f172a; padding: 0 0.8rem; color: #475569; font-size: 0.8rem; position: relative; }

        .login-link { text-align: center; font-size: 0.84rem; color: #64748b; }
        .login-link a { color: #6366f1; text-decoration: none; font-weight: 600; }
        .login-link a:hover { color: #a78bfa; }

        .password-strength { height: 3px; border-radius: 2px; margin-top: 0.4rem; background: rgba(255,255,255,0.08); overflow: hidden; }
        .strength-bar { height: 100%; border-radius: 2px; transition: width 0.3s, background 0.3s; width: 0; }
    </style>
</head>
<body>
    <div class="auth-card">
        <div class="logo">
            <div class="logo-icon"><i class="fas fa-boxes-stacked"></i></div>
            <h1>InvenTrack</h1>
            <p>Inventory Management System</p>
        </div>

        <h2>Create an account</h2>
        <p class="subtitle">Fill in the details below to get started</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <div class="input-wrap">
                    <i class="fas fa-user"></i>
                    <input type="text" id="name" name="name" placeholder="John Doe"
                           value="{{ old('name') }}" required autofocus
                           class="{{ $errors->has('name') ? 'is-invalid' : '' }}">
                </div>
                @error('name') <p class="error-msg"><i class="fas fa-circle-exclamation"></i>{{ $message }}</p> @enderror
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <div class="input-wrap">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="you@example.com"
                           value="{{ old('email') }}" required
                           class="{{ $errors->has('email') ? 'is-invalid' : '' }}">
                </div>
                @error('email') <p class="error-msg"><i class="fas fa-circle-exclamation"></i>{{ $message }}</p> @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrap">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Minimum 6 characters" required
                           class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                           oninput="checkStrength(this.value)">
                    <button type="button" class="toggle-password" onclick="togglePassword('password', this)">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <div class="password-strength"><div class="strength-bar" id="strengthBar"></div></div>
                @error('password') <p class="error-msg"><i class="fas fa-circle-exclamation"></i>{{ $message }}</p> @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <div class="input-wrap">
                    <i class="fas fa-shield-halved"></i>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                           placeholder="Re-enter your password" required>
                    <button type="button" class="toggle-password" onclick="togglePassword('password_confirmation', this)">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <button type="submit" class="btn-primary">
                <i class="fas fa-user-plus"></i> Create Account
            </button>
        </form>

        <div class="divider"><span>or</span></div>

        <p class="login-link">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
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

        function checkStrength(val) {
            const bar = document.getElementById('strengthBar');
            let score = 0;
            if (val.length >= 6) score++;
            if (val.length >= 10) score++;
            if (/[A-Z]/.test(val)) score++;
            if (/[0-9]/.test(val)) score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;

            const colors = ['#ef4444','#f97316','#eab308','#22c55e','#10b981'];
            const widths = ['20%','40%','60%','80%','100%'];
            bar.style.width = widths[score - 1] || '0%';
            bar.style.background = colors[score - 1] || 'transparent';
        }
    </script>
</body>
</html>
