<?php
include("../Model/Users.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username =  $_POST['username'];    
    $password =  $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    if (empty($username) || empty($password)) {
        echo "<div class='alert alert-danger'>All fields are required.</div>";
        exit;
    }

    $user = new Users();
    $user->Register($username, $password_hash);
}