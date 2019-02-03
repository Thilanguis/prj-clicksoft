<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Menu do Sistema</title>
    <?php include_once 'head.php'; ?>
</head>

<body>
    <div class="container">
        <?php 
            if(isset($_GET["idContato"]))
            {
                include_once 'conexao.php';
                $sql = "delete from contatos where idContato=".$_GET["idContato"];
                if(mysqli_query($con, $sql))
                {
                    ?>
    
        <div class="alert alert-success" role="alert">
            Contato excluido com sucesso!
        </div>
        <div id="btnConfirmacao">
            <a href="consulta.php"><button id="btnVoltar1" type="button" class="btn btn-warning">OK</button></a>
        </div>
        <?php
                }
                else
                { 
                    echo "Erro ao deletar contato.";
                }
                
                mysqli_close($con);
            }
        ?>
    </div>
</body>

</html>