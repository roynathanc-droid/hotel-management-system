<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register - The Kicukiro Heights</title>
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

        .register-box {
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            padding: 40px 50px;
            width: 400px;
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

        .login-link {
            margin-top: 15px;
        }

        .login-link a {
            color: #D4AF37;
            text-decoration: none;
            font-weight: 500;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .alert {
            background-color: #e6ffed;
            color: #007a33;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-box">
            <h2>Admin Register</h2>

            @if (session('success'))
                <div class="alert">{{ session('success') }}</div>
            @endif

            <form action="{{ route('admin.registerAdmin') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="phonenumber" placeholder="Phone Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

                <button type="submit">Register</button>
            </form>

            <div class="login-link">
                <p>Already have an account? <a href="{{ route('admin.loginAdmin') }}">Login here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
