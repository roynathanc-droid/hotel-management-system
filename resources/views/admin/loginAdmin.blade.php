<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - The Kicukiro Heights</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f8fa;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            padding: 40px 50px;
            width: 380px;
            text-align: center;
        }

        h2 {
            color: #2b2b2b;
            margin-bottom: 25px;
        }

        input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            outline: none;
            font-size: 15px;
        }

        button {
            width: 100%;
            padding: 12px 15px;
            background-color: #D4AF37;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #c09b30;
        }

        .register-link {
            margin-top: 15px;
        }

        .register-link a {
            color: #D4AF37;
            text-decoration: none;
            font-weight: 500;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .alert {
            background-color: #ffe6e6;
            color: #b30000;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Admin Login</h2>

            @if ($errors->any())
                <div class="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.loginAdmin') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>

                <button type="submit">Login</button>
            </form>

            <div class="register-link">
                <p>Don't have an account? <a href="{{ route('admin.registerAdmin') }}">Register here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
