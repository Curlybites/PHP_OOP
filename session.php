<?php
require_once './registerprocess.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $contact = isset($_POST['contact']) ? htmlspecialchars(trim($_POST['contact'])) : '';
    $address = isset($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : '';

    $database = new Database();
    $registration = new Registration($database);
    $registration->register($name, $contact, $address);
}
