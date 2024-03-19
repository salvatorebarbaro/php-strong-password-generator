<?php include './functions.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password forte</title>
    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="py-2 fs-1 my-2 text-danger text-center ">Password forte</h1>
        <div class="row">
            <div class="col">
            <form class="d-flex flex-column  " action="" method="get">
                
                <div class="col d-flex justify-content-center my-4">
                    <label class="fs-5 text-uppercase text-success " for="lunghezza password" >lunghezza password</label>
                    <!--                                                                                                 eseguiamo un controllo sul parametro inviato se è  password_length lo andiamo ad eseguire come normale se è false andiamo a inserire 0 cosi correggiamo l'errore della password sempre a schermo               -->
                    <input class="mx-5" type="number" min="1" max="10" name="password_length" value=""<?php echo isset($_GET['password_length']) ? $_GET['password_length'] : '0'; ?>>
                </div>
                <div class="col d-flex justify-content-center my-2">
                    <button class="btn btn-primary" type="submit">invia</button>
                </div>
                

            </form>    
            </div>
            
        </div>
        <div class="row text-center">
            <h3>Password</h3>
            <div class="col d-flex justify-content-center ">
                
                <!-- Stampa la password generata -->
                <?php  GeneratePassword(); ?>
            </div>
        </div>
    </div>

    

    <!-- link boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
