<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente</title>
    <?php include_once 'head.php'; ?>
</head>

<body>
    <div class="container">
        <div id="formAgenda">
            <form action="cadastro.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
                    </div>
                    <div class="form-group col-md-6 addTel">
                        <label for="telefone1">Telefone</label>
                        &nbsp;<i class="fas fa-plus-circle"></i>
                        &nbsp;<i class="fas fa-minus-circle"></i>
                        <input type="tel" class="form-control" id="telefone1" placeholder="Telefone" name="telefone1">
                        
                        <label class="addTel1 hide" for="telefone2">Outro telefone</label>
                        <input class="addTel1 form-control hide" id="telefone2" placeholder="Outro telefone" name="telefone2">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="Fulano@gmail.com" name="email">
                </div>
                <div class="form-group col-md-12">
                    <label for="endereco">Endereço completo</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Rua das Borboletas Psicodélicas, nº12" name="endereco">
                </div>
                <div>
                    <a href="index.php"><button id="btnVoltar" type="button" class="btn btn-warning">Início</button></a>
                    <button id="btnSalvar" type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
