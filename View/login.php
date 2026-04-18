<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
        }
        .login-card {
            border-radius: 15px;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #4facfe;
        }
        .btn-custom {
            background: #4facfe;
            border: none;
        }
        .btn-custom:hover {
            background: #3a8de0;
        }
    </style>
</head>

<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4">

        <div class="card login-card shadow-lg p-4">
            <h3 class="text-center mb-4">Login</h3>

            <form method="POST" action="./../Controller/Users2.php">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter your name"  required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>

                <button class="btn btn-custom w-100">Login</button>

                <p class="text-center mt-3">
                    Don't have an account? <a href="register.php">Register</a>
                </p>
            </form>
        </div>

    </div>
</div>

</body>
</html>