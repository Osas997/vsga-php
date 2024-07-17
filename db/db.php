<?php
class Connection
{
    protected $conn;

    public function __construct()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "vsga";

        $this->conn = new mysqli($host, $user, $password, $database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
