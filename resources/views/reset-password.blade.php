<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenZ | Login</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css"> <!-- Optional if shared -->
    <style>
        body {
            background-image: url('/images/login-bg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .form-container:hover {
            transform: scale(1.02);
        }

        h2 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 12px;
            transition: border-color 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #ffcc00 !important;
            box-shadow: 0 0 5px rgba(255, 204, 0, 0.5);
            outline: none;
        }

        .text-danger {
            font-size: 0.9rem;
            display: block;
            text-align: left;
            margin-top: 5px;
        }

        .btn {
            background-color: #ffcc00;
            border: none;
            padding: 12px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            width: 100%;
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #ff9900;
            transform: scale(1.05);
        }

        .toggle-form {
            margin-top: 15px;
            font-size: 1rem;
        }

        .toggle-form a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease-in-out;
        }

        .toggle-form a:hover {
            text-decoration: underline;
            color: #ff9900;
        }

        .text-right a {
            font-size: 0.9rem;
        }

        @media (max-width: 576px) {
            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

<div class="form-container" id="loginForm">
    <h2>Welcome Back</h2>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ url('/storedata2') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <span class="text-danger">
                @error('email') {{ $message }} @enderror
            </span>
        </div>

        <div class="form-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="text-danger">
                @error('password') {{ $message }} @enderror
            </span>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="form-group text-right mt-2 mb-3">
            <a href="{{ url('/forgot-password') }}" class="text-muted">Forgot Password?</a>
        </div>

        <div class="toggle-form">
            <p>Don't have an account? <a href="{{ url('/signup') }}">Sign up</a></p>
        </div>
    </form>
</div>

</body>
</html>
