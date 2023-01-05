<?php 
// recebe o dado 
$id = $_GET["id"];
//abrir a conexão com o banco
include_once './fonte/conexao.php';
//montar a instrução sql
$sql ="delete from produto where idproduto =".$id;

//executar
//enviar resposta se foi gravado ou não

if (mysqli_query($con,$sql)) {
    $msg = "Produto excluido com sucesso";
    }else{
        $msg= "erro ao excluir o produto";
    }

    // fecha a conexão com o banco
    mysqli_close($con);


    // fazer com que depois da exclusão não fique na mesma página mas volte para a pagina consulta
    //outra maneira de chamar o java script - função alert

    echo "<script>
        alert(' ".$msg. " ');
        location.href='consultar.php';
        </script>";

?>