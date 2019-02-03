<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Menu do Sistema</title>
    <?php include_once 'head.php'; ?>
</head>

<body>
    <div class="container">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action"><i id="calendario" class="fas fa-calendar-alt">&nbsp;<b id="titulo"><i>Agenda</i></b></i></a>
            <a href="form-cadastro.php" class="list-group-item list-group-item-action list-group-item-success"><b>Gravar Cliente</b> &nbsp;<i id="disquete" class="far fa-save"></i></a>
            <a href="consulta.php" class="list-group-item list-group-item-action list-group-item-danger"><b>Consultar Cliente</b> &nbsp; <i id="loopa" class="fas fa-search"></i> </a>
        </div>
    </div>
</body>
</html>
