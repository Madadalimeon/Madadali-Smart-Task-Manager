<?php
class Database
{
    private $host = "http://localhost/";
    private $username = "root";
    private $password = "";
    private $database = "smart-task-manager";
    public $conn;
    public function Database() {
    $this->conn = new mysqli($this->host,$this->username,$this->password,$this->database); 
    if($this->conn->connect_error)
        die("connection failed" . $this->conn->connect_error);
        return $this->conn;
    }
}
?>