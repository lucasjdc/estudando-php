<?php
$titular = "Lucas José";
$saldo = 1_000;
echo "********************\n";
echo "Titular: $titular\n";
echo "Saldo atual: R$ $saldo\n";
echo "********************\n";
do {    
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    $comandoDoMenu = (int) fgets(STDIN);
    switch ($comandoDoMenu) {
        case 1:
            echo "*****************\n";
            echo "Saldo atual: $saldo\n";
            echo "*****************\n";
            break;
        case 2:
            echo "Qual valor deseja sacar?\n";
            $saque = (float) fgets(STDIN);
            if ($saque <= $saldo) {
            $saldo = $saldo - $saque;
            echo "Saldo: $saldo\n";
            } else if ($saque > $saldo) {
            echo "Saldo insuficiente\n";
            }
            break;
        case 3:
            echo "Qual valor deseja depositar?\n";
            $deposito = (float) fgets(STDIN);
            $saldo = $saldo + $deposito;
            break;
        case 4:
            echo "Encerrando o programa.\n";
            break;
        default:
            echo "Opção inválida!\n";
            break;
    }
 } while ($comandoDoMenu != 4);

?>
