<!DOCTYPE html>
<html lang="br">
<head>
<meta charset="UTF-8">
<title>Trabalhando com Sessao</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<?php 
session_start();
$_SESSION['endereco']=$_POST['endereco'];
$_SESSION['ciadede']=$_POST['cidade'];
$_SESSION['estado']=$_POST['estado'];
$_SESSION['cep']=$_POST['cep'];

?>
       
</head>
<body>

<div class="container">
        <div class="jumbotron">
            <h1>Cadastro</h1>
        </div>
<form name="pagamento"  method="post" action="grava.php">
<fieldset class="row mb-3">
<legend class="col-form-label col-sm-2 pt-0">Dados da Compra</legend>
<div class="row mb-3">
<label for="forpag" class="col-sm-2 col-form-label">Forma de pagamento:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="forpag" name="forpag">
</div>
</div>
<div class="row mb-3">
<label for="valor" class="col-sm-2 col-form-label">valor</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="valor" name="valor">
</div>
</div>
</fieldset>
    <button type="submit" class="btn btn-primary" name="enviar" value="enviar">Enviar</button>
</form>
</div>
</body>
</html>