<?php

require_once './session.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="vh-100 w-100 d-flex">
    <div class="container-fluid d-flex align-items-center justify-content-center">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="d-flex flex-column gap-3">
            <input type="text" placeholder="name" name="name" class=" p-2 g-col-6" required>
            <input type="text" placeholder="contact number" name="contact" class=" p-2 g-col-6" required>
            <textarea name="address" id="" placeholder="address" class=" p-2 g-col-6" required></textarea>
            <input type="submit" value="Register" class="btn btn-primary p-2 g-col-6" name="">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>