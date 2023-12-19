<?php

function calcularNivel($vitorias, $derrotas) {
    $saldoVitorias = $vitorias - $derrotas;

    if ($vitorias < 10) {
        $nivel = "Ferro";
    } elseif ($vitorias >= 11 && $vitorias <= 20) {
        $nivel = "Bronze";
    } elseif ($vitorias >= 21 && $vitorias <= 50) {
        $nivel = "Prata";
    } elseif ($vitorias >= 51 && $vitorias <= 80) {
        $nivel = "Ouro";
    } elseif ($vitorias >= 81 && $vitorias <= 90) {
        $nivel = "Diamante";
    } elseif ($vitorias >= 91 && $vitorias <= 100) {
        $nivel = "Lendário";
    } else {
        $nivel = "Imortal";
    }

    return "O Herói tem saldo de $saldoVitorias está no nível de $nivel";
}

if (isset($_POST['vitorias']) && isset($_POST['derrotas'])) {
    $vitorias = intval($_POST['vitorias']);
    $derrotas = intval($_POST['derrotas']);
    
    $resultado = calcularNivel($vitorias, $derrotas);
    echo $resultado;
}

?>
