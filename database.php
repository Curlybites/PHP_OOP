
<?php

require_once './config.php';

class Database
{
    private $host;
    private $user;
    private $password;
    private $db;
    private $conn;

    public function __construct()
    {
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->password = DB_PASSWORD;
        $this->db = DB_NAME;
    }

    public function dbconnection()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else {
            return $this->conn;
        }
    }

    public function closeConnection()
    {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

?>