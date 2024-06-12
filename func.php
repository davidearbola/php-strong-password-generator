<?php
function generatedPassword($number, $caratteri, $pass)
{
    while (strlen($pass) < $number) {
        $numero = rand(0, strlen($caratteri) - 1);
        if (strpos($pass, $caratteri[$numero]) === false) {
            $pass .= $caratteri[$numero];
        }
    }
    return "<h2>Password Generata:</h2>
    <span>{$pass}</span";
}
