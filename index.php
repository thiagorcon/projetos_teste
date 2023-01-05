<?php
include_once'topo.php';
?>
<br><br>
<h3>Novo produto</h3>
<form action="gravar.php" method="post" class="form-group">
    Nome do produto: <br>
    <input type="text" name="nome" id="" placeholder="Digite o nome do produto" class="form-control">
    <br><br>
    Estoque: <br>
    <input type="text" name="estoque" id="" placeholder="Digite a quantidade do produto em estoque" class="form-control">
    <br><br>
    Valor unitário: <br>
    <input type="text" name="valor" id="" placeholder="Digite o valor do produto" class="form-control">
    <br><br>
    Categoria: <br>
    <select name="categoria" id="">
        <option value="eletronico">Eletronico</option>
        <option value="roupas">Roupas</option>
        <option value="livros">Livros</option>
    </select>

    <br><br>

    <input type="submit" class="btn btn-primary" value="Cadastrar">
    <input type="reset" class="btn btn-danger" value="Limpar campos">

</form>




<?php
include_once'rodape.php';
?>