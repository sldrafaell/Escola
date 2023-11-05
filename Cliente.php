<?php
class Cliente extends Conta {
    private $idade;
    private $endereco;
    
    public function __construct(string $numero,float $saldo, string $nome, int $idade, string $endereco) {
        parent::__construct($numero, $nome, $saldo);
        $this->setIdade($idade);
        $this->setEndereco($endereco);
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    
}