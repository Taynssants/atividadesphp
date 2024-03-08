<?php
//CRIAR UMA CLASSE VELHO, QUE HERDA IMOVEL E POSSUI UM
//DESCONTO NO PREÇO
//CRIAR MÉTODOS DE ACESSO E IMPRESSÃO PARA ESTE DESCONTO
//(UTILIZAR ENCAPSULAMENTO)
include "Imovel.php";
class Velho extends Imovel {

 private $desconto;

 public function getDesconto(){
    return $this->desconto;
 }
 public function setDesconto($desconto){
    $this->desconto = $desconto;
 }

 public function descontoVelho(){
    $this->preco = 500; 
    $this->desconto = 100;
    $dinheiro = ($this->preco - $this->desconto)
    return $dinheiro
 }

 public function__construct($endereco, $preco, $desconto, $dinheiro)
 $this->setEndereco($endereco);
 $this->setPreco($preco);
 $this->setDesconto($desconto);
 $this->setDinheiro($dinheiro);
}
?>
