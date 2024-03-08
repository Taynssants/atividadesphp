<?php
//CRIAR A CLASSE IMOVEL, QUE POSSUI UM ENDEREÇO E UM PREÇO
//CRIAR UMA CLASSE NOVO, QUE HERDA IMOVEL E POSSUI UM
//ADICIONAL NO PREÇO
//CRIAR MÉTODOS DE ACESSO E IMPRESSÃO DESTE VALOR ADICIONAL
//(UTILIZAR ENCAPSULAMENTO)
//CRIAR UMA CLASSE VELHO, QUE HERDA IMOVEL E POSSUI UM
//DESCONTO NO PREÇO
//CRIAR MÉTODOS DE ACESSO E IMPRESSÃO PARA ESTE DESCONTO
//(UTILIZAR ENCAPSULAMENTO)

class Imovel {
    private $endereco;
    private $preco;

    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function__construct($endereco, $preco){
        $this->setEndereco($endereco);
        $this->setPreco($preco);
    }
}
?>
