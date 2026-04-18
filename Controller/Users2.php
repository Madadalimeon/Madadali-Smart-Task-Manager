<?php
include("../Model/Users.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username =  $_POST['username'];
    $password =  $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<div class='alert alert-danger'>All fields are required.</div>";
        exit;
    }

    $user = new Users();
    $user->Login($username, $password);
}