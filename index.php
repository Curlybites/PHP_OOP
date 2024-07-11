<?php

require_once './database.php';

$db = new Database();
$connection = $db->dbconnection();

if ($connection) {
    echo "Connected to the database successfully!";
} else {
    echo "Failed to connect to the database.";
}

// // method
// $vehicle = new VehicleType("Toyota", "SUV", 2024, 4, "Car");
// $vehicle->displayDetails();
