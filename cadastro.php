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
    $nome       = $_POST["nome"];
    $email      = $_POST["email"];
    $endereco   = $_POST["endereco"];
    $telefone1  = $_POST["telefone1"];
    $telefone2  = $_POST["telefone2"];

    include_once 'conexao.php';
    
    $sql = "insert into contatos values(null, '".$nome."','".$email."','".$telefone1."','".$telefone2."','".$endereco."')";
    
    $ok = $nome != "" && $email != "" && $endereco != "" && $telefone1 != "" ;
    
if($ok)
{
    if(mysqli_query($con,$sql))  
    {
         ?>
        <div class="alert alert-success" role="alert">
            Contato cadastrado com sucesso!
        </div>

        <div id="btnConfirmacao">
            <a href="index.php"><button id="btnVoltar1" type="button" class="btn btn-warning">OK</button></a>
        </div>
        <?php
        }
        else
        {
         ?>
        <div class="alert alert-warning" role="alert">
            Erro ao cadastrar contato!
        </div>

        <div id="btnConfirmacao">
            <a href="index.php"><button id="btnVoltar1" type="button" class="btn btn-warning">OK</button></a>
        </div>
        <?php
        }
}
        
else
{
    ?>
        <div class="alert alert-danger" role="alert">
            Favor preencher todos os campos!
        </div>

        <div id="btnConfirmacao">
            <a href="index.php"><button id="btnVoltar1" type="button" class="btn btn-warning">OK</button></a>
        </div>
        <?php
}
    mysqli_close($con);

?>

    </div>
</body>

</html>