<?php

/**
 * Clase para representar un cuenta de banco
 *
 * Esta clase representa una cuenta de banco con propiedades como el identificador,
 * y saldo. También incluye métodos para realizar ingresos y retiradas de efectivo
 *
 * @category   Banco
 * @package    CuentaBanco
 * @subpackage Clases
 * @since 2.0.0
 * @version    2.1.0
 */
require 'CuentaBanco.php';

class Banco {

    /**
     * Nombre del banco
     *
     * @var string
     */
    private $nombre;

    /**
     * Cuentas de banco
     *
     * @var array
     */
    private $cuentas = [];

    /**
     * Constructor de la clase Banco
     *
     * @param float $saldo El saldo de la cuenta del banco
     */
    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function abrirCuenta(float $saldo, string $titular) {
        $cuenta = new CuentaBanco($saldo, $titular);
        $this->cuentas[] = $cuenta;
    }

}
