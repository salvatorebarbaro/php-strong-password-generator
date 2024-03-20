<?php
session_start();

if(isset($_SESSION['generatePassword'])) {
    $password = $_SESSION['generatePassword'];
    unset($_SESSION['generatePassword']); // Rimuovi la password dalla sessione dopo averla mostrata
} else {
    $password = "Nessuna password generata.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>
    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="py-2 fs-1 my-2 text-danger text-center ">Password generata</h1>
        <div class="row">
            <div class="col">
                <div class="col d-flex justify-content-center my-4">
                    <h3> <?php echo $password; ?></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- link boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
