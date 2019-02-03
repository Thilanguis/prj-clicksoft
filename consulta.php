<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Consulta de Clientes</title>
    <?php include_once 'head.php'; ?>
</head>

<body>
    <div class="container">
        <h3 id="h3Busca"><b>Busca de Contatos Cadastrados</b></h3>
        <form action="consulta.php" method="get">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="nomeBusca" placeholder="Pesquise um nome" name="nome">
                    <div id="botoesBusca">
                        <a href="index.php"><button id="btnVoltar" type="button" class="btn btn-warning">Início</button></a>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary"><i id="loopaBusca1" class="fas fa-search"></i></button>
            </div>
        </form>

        <?php
            if(isset($_GET["nome"]))
            {
                $nome = $_GET["nome"];
                
                include_once 'conexao.php';
                
                $sql = "select * from contatos where nome like '".$nome."%'";
                
                $result = mysqli_query($con, $sql);
                
                $totalRegistros = mysqli_num_rows($result);
                
                if($totalRegistros > 0)
                { ?>
        <table id="tabelaDinamica" class="table table-hover table-stiped">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>Telefone1</th>
                <th>Telefone2</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>

            <?php
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>".$row["nome"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["endereco"]."</td>";
                        echo "<td>".$row["telefone1"]."</td>";
                        echo "<td>".$row["telefone2"]."</td>";
                        echo "<td><a href='form-editar.php?id=".$row["id"]."'><i class='far fa-edit' id='edit'></i></a></td>";
                        echo "<td><a href='#' onclick='excluir(".$row["id"].")'><i class='far fa-trash-alt' id='delet'></i></td>";
                        echo "</tr>";
                    } ?>
        </table>
        <?php } 
                else
                {
                    ?>
        <div id="msgErro" class="alert alert-danger" role="alert">
            Nenhum registro encontrado
        </div>
        <?php  
                }
            }
        ?>
    </div>
</body>

</html>