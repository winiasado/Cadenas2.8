<?php
function contarCaracteres($texto) {
    $total = strlen($texto);
    return $total;
}

function aMayusculas($texto) {
    return strtoupper($texto);
}

function aMinusculas($texto) {
    $res = strtolower($texto);
    return $res;
}

function invertirCadena($texto) {
    return strrev($texto);
}

function esPalindromo($texto) {
    $limpio = strtolower(str_replace(' ', '', $texto));
    $invertido = strrev($limpio);
    if ($limpio == $invertido) {
        return "Si es palindromo";
    } else {
        return "No es palindromo";
    }
}

function contarVocales($texto) {
    $minusculas = strtolower($texto);
    $contador = 0;
    for ($i = 0; $i < strlen($minusculas); $i++) {
        $letra = $minusculas[$i];
        if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
            $contador = $contador + 1;
        }
    }
    return $contador;
}
?>