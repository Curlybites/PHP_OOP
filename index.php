<?php

require_once './registerprocess.php';
require_once './fetch.php';

// $db = new Database();
// $connection = $db->dbconnection();

// if ($connection) {
//     echo "Connected to the database successfully!";
// } else {
//     echo "Failed to connect to the database.";
// }
?>
<?php
include_once './components/header.php'
?>
<div class="container ">
<a href="" class="btn btn-primary ">Register</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($row = $result->fetch_assoc()):
            ?>
            <tr>
                <th scope="row"><?php echo $row['id'] ?></th>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['contact'] ?></td>
                <td><?php echo $row['address'] ?></td>
            </tr>

            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<?php
include_once './components/footer.php'

?>