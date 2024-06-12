<?php

$UserNumber = $_GET['UserNumber'];
$password = ''


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASSWORD GENERATOR</title>
</head>

<body>
    <h1>Password Generata:</h1>

    <?php for ($i = 0; $i < $UserNumber; ++$i) {
        $password .= "x";
    }
    ?>
    <span> <?php echo $password ?> </span>


</body>

</html>