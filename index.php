<?php


require_once __DIR__ . '/functions.php';

session_start();

$password_length = isset($_GET['password-length']) ? $_GET['password-length'] : 0;
$password = '';


//se non è vuota la length impostata da user => crea password a cui passiamo la length della password. il risultato viene poi salvato in $password
if (!empty($password_length)) {
    $password = creaPassword($password_length);
    $_SESSION['password'] = $password;
    header('location: ./result.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-PASSWORD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

    <h2>Password Generetor</h2>
    <form action="index.php" method="GET">
        <div class="mb-3">
            <label for="password-length" class="form-label">password-length</label>
            <input type="number" value="<?php echo $password_length ?>" name="password-length" class="form-control" id="password-length" min="8" max="25">
        </div>
        <button type="submit" class="btn btn-primary">Submitta</button>

        <?php if ($password) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $password ?>
            </div>
        <?php endif ?>  
    </form>
</body>



</html>