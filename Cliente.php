<?php
class Cliente {
    private int $idade;
    private string $endereco;
    private Conta $conta;
    
    public function __construct($idade, $endereco, $conta) {
        $this->setIdade($idade);
        $this->setEndereco($endereco);
        $this->setConta($conta);
    }
   public function setIdade(int $idade) {
    $this->idade = $idade;
   }
   public function setEndereco(string $endereco) {
    $this->endereco = $endereco;
   }
   public function setConta(Conta $conta) {
    $this->conta = $conta;
   }
   public function getIdade() {
    return $this->idade;
   }
   public function getEndereco() {
    return $this->endereco;
   }
   public function getConta() {
    return $this->conta;
   }

}