<?php
    namespace PHP\Modelo;//Definir local do projeto
    require_once('Cliente.php');//Requisitando uma classe
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    use PHP\Modelo\Cliente;//Definir a classe
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;

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
   

?>