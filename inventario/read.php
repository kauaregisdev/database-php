<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Lista de Usuários</title>
</head>
<body>
    <header></header>
    <main>
        <section>
            <table class="table table-striped">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
                <?php
                    require_once "conexao.php";
                    $sql = "SELECT * FROM usuario";
                    $result = $con->query($sql);
                    if($result->num_rows){
                        while($line = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?= $line['codigo'];?></td>
                                <td><?= $line['nome'];?></td>
                                <td><?= $line['email'];?></td>
                                <td><?= $line['data_nasc'];?></td>
                                <td><?= $line['telefone'];?></td>
                                <td><a class="btn btn-primary" href="update.php?id=<?php echo $linha['codigo'];?>">Alterar</a></td>
                                <td><a class="btn btn-danger" href="delete.php?id=<?php echo $linha['codigo'];?>">Excluir</a></td>
                            </tr>
                <?php
                        }
                    }else{
                        echo "Nenhum registro encontrado!";
                    }
                ?>
            </table>
        </section>
    </main>
    <footer></footer>
</body>
</html>