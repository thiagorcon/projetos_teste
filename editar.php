<?php
include_once'topo.php';
// recebo da tela o id para fazer a edição
$id = $_GET["id"];
// abrir conexão com o banco
include_once 'fonte/conexao.php';
// montar instrução para pegar os dados do produto para expor na tela.
$sql = "select * from produto where idproduto =".$id;

$rs = mysqli_query($con, $sql); 
if (mysqli_num_rows($rs) == 1) {
    $row = mysqli_fetch_array($rs);
}
?>
<br><br>
<h3>Atualizar dados do produtos</h3>
<form action="atualizar.php" method="post" class="form-group">

<input type="hidden" name="id" value="<?php echo $row["idproduto"]; ?>" >

<br><br>
    Nome do produto: <br>
    <input type="text" name="nome" id=""  value="<?php echo $row["nome"]; ?>" class="form-control">
    <br><br>
    Estoque: <br>
    <input type="text" name="estoque" id="" value="<?php echo $row["estoque"]; ?>" class="form-control">
    <br><br>
    Valor: <br>
    <input type="text" name="valor" id="" value="<?php echo $row["valor"]; ?>" class="form-control">
    <br><br>
    Categoria: <br>
    <select name="categoria" id="">
        <opition value ="<?php echo $row['categoria']; ?>">
                <?php echo $row["categoria"]; ?>"</opition> 
        <option value="eletronico">Eletronico</option>
        <option value="roupas">Roupas</option>
        <option value="livros">Livros</option>
    </select>

    <br><br>

    <input type="submit" class="btn btn-primary" value="Atualizar produto">
    <input type="reset" class="btn btn-danger" value="Limpar campos">

</form>




<?php
include_once'rodape.php';
?>