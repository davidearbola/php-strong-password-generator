<?php

$UserNumber = $_GET['UserNumber'];
$password = '';
$dizionario = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!£$%&?àèìòù';

include 'func.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASSWORD GENERATOR</title>
</head>

<body>
    <h1>Genera password</h1>
    <p>Quanto deve essere lunga la password?</p>
    <form action="form.php" method="GET">
        <input type="number" name="UserNumber">
        <button type="submit">Genera</button>
    </form>
    <?php
    if (isset($UserNumber)) {
        echo generatedPassword($UserNumber, $dizionario, $password);
    }
    ?>
</body>

</html>