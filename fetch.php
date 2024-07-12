<?php 

require_once './registerprocess.php';

    $database = new Database();
    $list = new Registration($database);
    $result = $list->fetch();

?>