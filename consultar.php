<script>
    function excluir(id) {
        if (confirm('deseja realmente excluir esse produto?')) {
            location.href = 'excluir.php?id=' + id;
        }

    }
</script>
<?php
include_once 'topo.php';

// montar instrução para trazer todo produto
$sql = "select *from produto";
// abrir conexao com o banco

include_once './fonte/conexao.php';


// executar a consulta ao banco de dados
$rs = mysqli_query($con, $sql);

if (mysqli_num_rows($rs) > 0) { ?>
    <table class="table table-stiped">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Estoque</td>
            <td>Valor unitário</td>
            <td>Categoria</td>
            <td>Excluir</td>
            <td>Editar</td>
        </tr>
        <?php


        while ($row = mysqli_fetch_array($rs)) {
        ?>

            <tr>
                <td><?php echo $row["idproduto"]; ?></td>
                <td><?php echo $row["nome"]; ?></td>
                <td><?php echo $row["estoque"]; ?></td>
                <td><?php echo $row["valor"]; ?></td>
                <td><?php echo $row["categoria"]; ?></td>
                <td>
                    <a href="#" onclick="excluir(<?php echo $row["idproduto"]; ?>)">
                        <button type="button" class="btn btn-danger">
                            Excluir
                        </button>
                    </a>
                </td>

                <td>
                    <!-- está levando o ?id -->
                    <a href="editar.php?id=<?php echo $row["idproduto"]; ?>">
                        <button type="button" class="btn btn-success">
                            Editar
                        </button>
                    </a>
                </td>
            </tr>

    <?php
        }
    } else {
        echo "Nenhum produto cadastrado!";
    }

    // fecha a conexao com o banco

    mysqli_close($con);


    include_once 'rodape.php';
    ?>