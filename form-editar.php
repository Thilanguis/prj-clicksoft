<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente</title>
    <?php include_once 'head.php'; ?>
</head>

<body>
   <?php
   if(isset($_GET["idContato"]))
   {
       include_once 'conexao.php';
       
       $sql = "select * from contatos where idContato=".$_GET["idContato"];
       
       $result = mysqli_query($con, $sql);
       
       $totalResgistros = mysqli_num_rows($result);
       
       $row = mysqli_fetch_array($result); 
       
       $outroTel = ($row["telefone2"] != "") ? "show" : "hide";
    ?>
    <div class="container">
        <div id="formAgenda">
            <form action="editar.php" method="post">
                <div class="form-row">
                   <input type="hidden" name="idContato" value="<?php echo $row["idContato"]; ?>">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row["nome"]; ?>">
                    </div>
                    <div class="form-group col-md-6 addTel">
                        <label for="telefone1">Telefone</label>
                        &nbsp;<i class="fas fa-plus-circle"></i>
                        &nbsp;<i class="fas fa-minus-circle"></i>
                        <input type="tel" class="form-control" id="telefone1" value="<?php echo $row["telefone1"]; ?>" name="telefone1">
                        
                        <label class="addTel1 <?php echo $outroTel; ?>" for="telefone2">Outro telefone</label>
                        <input class="addTel1 form-control <?php echo $outroTel; ?>" id="telefone2" value="<?php echo $row["telefone2"]?>" name="telefone2">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" value="<?php echo $row["email"]; ?>" name="email">
                </div>
                <div class="form-group col-md-12">
                    <label for="endereco">Endereço completo</label>
                    <input type="text" class="form-control" id="endereco" value="<?php echo $row["endereco"]; ?>" name="endereco">
                </div>
                <div>
                    <a href="index.php"><button id="btnVoltar" type="button" class="btn btn-warning">Início</button></a>
                    <button id="btnSalvar" type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>                   
<?php  }  ?>
</body>
</html>
