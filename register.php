<?php
include_once './components/header.php'

?>

<div class="container-fluid d-flex align-items-center justify-content-center">

    <form action="./session.php" method="POST" class="d-flex flex-column gap-3">
        <input type="text" placeholder="name" name="name" class=" p-2 g-col-6" required>
        <input type="text" placeholder="contact number" name="contact" class=" p-2 g-col-6" required>
        <textarea name="address" id="" placeholder="address" class=" p-2 g-col-6" required></textarea>
        <input type="submit" value="Register" class="btn btn-primary p-2 g-col-6" name="">
    </form>
</div>
<?php
include_once './components/footer.php'

?>