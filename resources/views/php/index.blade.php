<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laravel 11</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-card {
            max-width: 400px;
            margin: 100px auto;
            background-color: #84cce9;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .login-card-header {
            background-color: #3881c5;
            color: #fff;
            padding: 20px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .login-card-body {
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-card-header">
            <div class="text-center">
                {{-- <div class="circle">
                    <svg width="100" height="100" viewBox="0 0 500 500" src="logo.svg ">
                        <circle cx="250" cy="250" r="200"/>
                        </svg>
                        </div> --}}
                <embed type="image/svg+xml" src="logo.svg" width="300" height="300">
                {{-- <img src="{{ asset('public/logo.svg') }}" alt="Logo" width="100"> --}}
            </div>
            <h4 class="text-center mt-3">Login to Your Account</h4>
        </div>
        <div class="login-card-body">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</body>
</html>