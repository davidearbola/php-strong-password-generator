<?php
function generatedPassword($number, $caratteri, $pass)
{
    for ($i = 0; $i < $number; ++$i) {
        $numero = rand(0, strlen($caratteri) - 1);
        $pass .= $caratteri[$numero];
    }
    return "<h2>Password Generata:</h2>
    <span>{$pass}</span";
}
