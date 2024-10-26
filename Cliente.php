<?php
    namespace PHP\Modelo;

    require_once('Pessoa.php');
    require_once('Endereco.php');
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;

    Class Cliente extends Pessoa{
        protected float $precoTotal;

        public function __construct(string $cpf,string $nome, string $telefone,Endereco $endereco, float $precoTotal){

            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->precoTotal = $precoTotal;
        }//Fim do construtor

        //Métodos Gets e Set
        public function __get(string $nome):mixed
        {
            return $this->nome;
        }//Fim do gets

        public function __set(string $nomeVariavel, string $novoDado):void
        {
            $this->nomeVariavel = $novoDado;
        }//Fim do set
        
        public function imprimir():string
        {
            return parent::imprimir().
            "<br>Preço Total: ".$this->precoTotal;
        }//Fim do imprimir


    }//Fim da Classe





?>