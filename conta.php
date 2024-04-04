<?php
$titular = "José Fulano";
$saldo = 1000.00;
do {
    
    echo "********************\n";
    echo "Titular: $titular\n";
    echo "Saldo atual: R$ $saldo\n";
    echo "********************\n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    $comandoDoMenu = (int) fgets(STDIN);
    if ($comandoDoMenu == 1) {
        echo "Saldo: $saldo\n";
    } else if ($comandoDoMenu == 2) {
        $saque = (float) fgets(STDIN);
        if ($saque <= $saldo) {
            $saldo = $saldo - $saque;
            echo "Saldo: $saldo\n";
        } else if ($saque > $saldo) {
            echo "Saldo insuficiente\n";
        }
    } else if ($comandoDoMenu == 3) {
        $deposito = (float) fgets(STDIN);
        $saldo = $saldo + $deposito;
    }
 } while ($comandoDoMenu != 4);

?>

