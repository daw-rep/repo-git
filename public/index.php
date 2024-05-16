<?php
/*
 * @author daw-profesor daw-profesor@daw.es
 * @copyright 2023 Equipo Daw Distancia
 * @link https://elbanco.es Documentación de condiciones de uso del banco. 
 */

require '../src/CuentaBanco.php';

$cuenta1 = new CuentaBanco(50);

$cuenta3 = new CuentaBanco(3000);

$cuenta1->ingreso(100);

$cuenta2->retirada(50);

echo "La cuenta ", $cuenta1->getId(), " tiene un saldo de ", $cuenta1->getSaldo(), "</br>";
echo "La cuenta ", $cuenta2->getId(), " tiene un saldo de ", $cuenta2->getSaldo();
