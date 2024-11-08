<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarIndividual(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_array($result)){
                    if($dados['codigo'] == $codigo){
                        echo "<br>Código: ".$dados['codigo'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Endereco: ".$dados['endereco'].
                             "<br>Telefone: ".$dados['telefone'];
                        return;//Encerrar o processo
                    }
                    echo "Código digitado não é válido!";
                }//While
            }catch(Exception $erro){
                echo $erro;
            }
        }//Fim do método
    }//Fim da class

?>