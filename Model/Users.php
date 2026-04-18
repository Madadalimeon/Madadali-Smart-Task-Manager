<?php
require_once "../Config/Config.php";

class Users
{
    private $db;

    public function __construct()
    {
        $this->db = new Config();
        $this->db->Database();
    }

    public function Register($username,$password)
    {
        $SQL = "INSERT INTO stm_register (STM_Username, STM_Password) VALUES ('$username','$password')";
        $result = mysqli_query($this->db->conn, $SQL);
        if ($result) {
            header("Location: ../View/Login.php");
        } else {
            echo "Error: " . mysqli_error($this->db->conn);
        }
    }

    public function Login($username,$password)
    {
        $SQL = "SELECT * FROM stm_register WHERE STM_Username='$username'";
        $result = mysqli_query($this->db->conn, $SQL);
        if ($result->num_rows > 0) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['STM_Password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                header("Location: ../View/index.php");
            } else {
                echo "<div class='alert alert-danger'>Invalid password.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>User not found.</div>";
        }
    }
}
