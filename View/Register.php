<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
        }
        .card {
            border-radius: 15px;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #764ba2;
        }
        .btn-custom {
            background: #764ba2;
            border: none;
        }
        .btn-custom:hover {
            background: #5a3790;
        }
    </style>
</head>

<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4 col-sm-10">

        <div class="card shadow-lg p-4">
            <h3 class="text-center mb-4">Register</h3>

            <form>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name"  required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" required>
                </div>

                <button class="btn btn-custom w-100">Create Account</button>

                <p class="text-center mt-3">
                    Already have an account? <a href="#">Login</a>
                </p>
            </form>
        </div>

    </div>
</div>

</body>
</html>