<?php
//CRIAR UMA CLASSE NOVO, QUE HERDA IMOVEL E POSSUI UM
//ADICIONAL NO PREÇO
//CRIAR MÉTODOS DE ACESSO E IMPRESSÃO DESTE VALOR ADICIONAL
//(UTILIZAR ENCAPSULAMENTO)
include "Imovel.php";
class Novo extends Imovel{
    
    private $adicional;

    public function getAdicional(){
        return $this->adicional;
    }

    public function setAdicional($adicional){
        $this->adicional = $adicional;
    }

    public function adicionalNovo(){
        $this->preco = 500;
        $this->adicional = 100;
        $money = ($this->preco + $this->adicional)
        return $money;
    }

    public function__construct($endereco, $preco, $adicional, $money)
 $this->setEndereco($endereco);
 $this->setPreco($preco);
 $this->setAdicional($adicional);
 $this->setMoney($Money);
}

?>
