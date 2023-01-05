<?php 
// pegar dados na tela
$nome = $_POST["nome"];
$estoque = $_POST["estoque"];
$valor = $_POST["valor"];
$categoria = $_POST["categoria"];

//abrir conexao no banco
include_once './fonte/conexao.php';

// montar a instrucao para gravar no banco
$sql ="insert into produto values(null,'".$nome."','".$estoque."','".$valor."','".$categoria."')";
//enviar resposta se foi gravado ou não
if (mysqli_query($con,$sql)) {
    echo "Produto cadastrado com sucesso";
    }else{
        echo "erro ao cadastrar o produto";
    }

    // fecha a conexao com o banco

    mysqli_close($con);

?>








