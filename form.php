<?php

$UserNumber = $_GET['UserNumber'];
$userLowChar = $_GET['lowChar'];
$userUpChar = $_GET['upChar'];
$userNumberChar = $_GET['numberChar'];
$userSpecialChar = $_GET['specialChar'];
$password = '';
$dizionario = '';
$character = [
    'lowChar' => 'abcdefghijklmnopqrstuvwxyz',
    'upChar' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
    'number' => '1234567890',
    'specialChar' => '!£$%&?',
];

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
    <form action="form.php" method="GET">
        <label for="number">Quanto deve essere lunga la password?</label>
        <input type="number" id="number" name="UserNumber"><br>

        <label>Vuoi le lettere Minuscole?</label>
        <label>Si</label>
        <input type="checkbox" name="lowChar" value="true">
        <label>No</label>
        <input type="checkbox" name="lowChar" value="false"><br>

        <label>Vuoi le lettere Maiuscole?</label>
        <label>Si</label>
        <input type="checkbox" name="upChar" value="true">
        <label>No</label>
        <input type="checkbox" name="upChar" value="false"><br>

        <label>Vuoi i numeri?</label>
        <label>Si</label>
        <input type="checkbox" name="numberChar" value="true">
        <label>No</label>
        <input type="checkbox" name="numberChar" value="false"><br>

        <label>Vuoi caratteri speciali?</label>
        <label>Si</label>
        <input type="checkbox" name="specialChar" value="true">
        <label>No</label>
        <input type="checkbox" name="specialChar" value="false"><br>

        <button type="submit">Genera</button>
    </form>
    <?php
    if (isset($UserNumber)) {
        if ($userLowChar == 'true') {
            $dizionario .= $character['lowChar'];
        }
        if ($userUpChar == 'true') {
            $dizionario .= $character['upChar'];
        }
        if ($userNumberChar == 'true') {
            $dizionario .= $character['number'];
        }
        if ($userSpecialChar == 'true') {
            $dizionario .= $character['specialChar'];
        }
        echo generatedPassword($UserNumber, $dizionario, $password);
    }
    ?>
</body>

</html>