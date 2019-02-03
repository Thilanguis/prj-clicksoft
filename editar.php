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
    
    $idContato         = $_POST["idContato"];
    $nome       = $_POST["nome"];
    $email      = $_POST["email"];
    $endereco   = $_POST["endereco"];
    $telefone1  = $_POST["telefone1"];
    $telefone2  = $_POST["telefone2"];

    include_once 'conexao.php';
    
    $sql = "update contatos set nome ='".$nome."', email='".$email."', telefone1='".$telefone1."', telefone2='".$telefone2."', endereco = '".$endereco."' where idContato=".$idContato;

    if(mysqli_query($con,$sql))  
    {
        ?>
        <div  class="alert alert-success" role="alert">
            Contato atulizado com sucesso!
        </div>
    
    <div id="btnConfirmacao">
        <a href="consulta.php"><button id="btnVoltar1" type="button" class="btn btn-warning">OK</button></a>
    </div>
    <?php
        
    }
    else
    {
        echo "Erro ao atualizado contato.";
    }
    
    mysqli_close($con);

?>


</div>
</body>
</html>