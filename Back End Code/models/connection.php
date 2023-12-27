<?php

class Connection {
    private $host = "localhost";
    private $username ="root";
    private $password ="root";
    private $database ="mobiletop";

    public $conn = null;

    public function __construct() {
       $this->conn = mysqli_connect($this->host, $this->username, "",$this->database, 3306);
//       $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database, 3306);
        if ($this->conn->connect_error) {
            echo $this->conn->connect_error;
        }
    }

    public function __destruct()
    {
        if ($this->conn != null) {
            $this->conn->close();
            $this->conn = null;
        }
    }


}