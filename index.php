<?php
$password_length = isset($_GET['password-length']) ? $_GET['password-length'] : 0;
$password = '';

function creaPassword($length)
{


    $password = '';


    $caratteri_lower = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $caratteri_upper = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $caratteri_numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $caratteri_specials = ["!", "£", "$", "%", "&", "/", "@", "#", "*", "?"];



    $caratteri_all = array_merge($caratteri_lower, $caratteri_numbers, $caratteri_specials, $caratteri_upper);


    for ($i = 1; $i <= $length; $i++) {
        $random = rand(0, count($caratteri_all) - 1);
        $password .= $caratteri_all[$random];
    }


    return $password;
}
//se non è vuota la length impostata da user => crea password a cui passiamo la length della password. il risultato viene poi salvato in $password
if (!empty($password_length)) {
$password = creaPassword($password_length);
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