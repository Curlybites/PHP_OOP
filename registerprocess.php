<?php

require_once './database.php';

class Registration
{
    private $db;
    private $conn;
    private $table_name = "register";


    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function register($name, $contact, $address)
    {
        $conn = $this->db->dbconnection();

        $stmt = $conn->prepare("INSERT INTO register (name, contact, address) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $contact, $address);

        if ($stmt->execute()) {
            echo "User registered successfully.";
        } else {
            echo "Error registering user: " . $stmt->error;
        }

        $stmt->close();
        $this->db->closeConnection();
    }

    public function fetch(){

        $this->conn = $this->db->dbconnection();
        $query = "SELECT * FROM " . $this->table_name;
        $result = $this->conn->query($query);
        
        return $result;
       
    }
}
