<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="">
    <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 400px;">
        
        <h3 class="text-center mb-4">Register</h3>

        <!-- <form action="./../Controller/login/RegisterContriller.php" method="post"> -->
        <form id="Register_form" method="post">

            
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Enter your Username">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>

            <div class="d-grid">
                <input class="btn btn-primary" type="submit" name="submit" value="Login">
            </div>

        </form>

    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script></script>