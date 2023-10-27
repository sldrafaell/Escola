<?php
Class Conta {
    private $numero;
    private $nome;
    private $saldo;

    function __construct($numero, $nome, $saldo) {
        $this->definirNumero($numero);
        $this->definirNome($nome);
        $this->definirSaldo($saldo);
    }

    public function definirNumero($numero) {
        $this->numero = $numero;
    }
    public function retornarNumero() {
        return $this->numero.PHP_EOL;
    }
    public function definirNome($nome) {
        $this->nome = $nome;
    }
    public function retornarNome() {
        return $this->nome.PHP_EOL;
    }
    public function definirSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function retornarSaldo() {
        return $this->saldo.PHP_EOL;
    }

    public function retornarConta() {
        $this->retornarNumero();
        $this->retornarNome();
        $this->retornarSaldo();
    }

}