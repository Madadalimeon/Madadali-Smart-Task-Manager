<?php

class Config
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "smart-task-manager";
    public $conn;

    public function Database()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("connected failed" . $this->conn->connect_error);
            return $this->conn;
        }
    }
}
