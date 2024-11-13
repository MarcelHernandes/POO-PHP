<?php
    namespace PHP\Modelo;//Definir local do projeto
    require_once('Cliente.php');//Requisitando uma classe
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/ConsultarCodigo.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');
    use PHP\Modelo\Cliente;//Definir a classe
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\MOdelo\DAO\ConsultarCodigo;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Excluir;

    /*

    $endCliente = new Endereco("Avenida Senador Vergueiro",
                               "400",
                               "Centro",
                               "são Bernardo do Campo",
                               "São Paulo",
                               "Brasil",
                               "03756-080");

    $cliente = new Cliente("12345", "Allan", "1199999", $endCliente, 560.60);//Criar um novo objeto
    $funcionario = new Funcionario("1", "Buganza", "69", "Assistente", 1200, $endCliente);


    echo $cliente->imprimir();
    echo $endCliente->imprimir()."<br>";

    echo $funcionario->imprimir();
    echo $endCliente->imprimir()."<br>";
   
    */

    $conn = new Conexao();
    $conn->conectar();//Acessar o banco de dados 

    //$inserir = new Inserir();//Criando acesso a classe inserir
    //echo $inserir->CadastrarPessoa($conn,"1","Fabio","Rua","11");
    $conn = new Conexao();
    $conn->conectar(); //Acessar o banco de dados

   /* $inserir = new Inserir();
    echo $inserir->cadastrarPessoa($conn,"1", "Fabio", "Rua","11");
   */
    $consultar = new Consultar();
    echo $consultar->consultarIndividual($conn,'1');
    echo $consultar->consultarIndividual($conn,'2');
    echo $consultar->consultarIndividual($conn,'3');

    $atualizar = new Atualizar();
    echo $atualizar->atualizarPessoa($conn, "nome", "Allan", 1);

    $excluir = new Excluir();
    $excluir->excluirPessoa($conn,1);

    
?>