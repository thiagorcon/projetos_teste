<?php
// resgatar os dados da tela
$id = $_POST["id"];
$nome = $_POST["nome"];
$estoque = $_POST["estoque"];
$valor = $_POST["valor"];
$categoria = $_POST["categoria"];

// montar o sql da atualização

$sql = "UPDATE produto set nome = ' ".$nome." ', estoque = ' ".$estoque." ', valor = ' ".$valor." ',categoria = ' ".$categoria." ' where idproduto =".$id;

//abrir conexao com o banco de dados
include_once'fonte/conexao.php';

//executar
if(mysqli_query($con,$sql)){
    $msg = "atualizado com sucesso!";
}else{
    $msg = "erro ao atualizar.";
}

mysqli_close($con);

echo"<script>
alert('".$msg."');
location.href='consultar.php';
</script>"

?>