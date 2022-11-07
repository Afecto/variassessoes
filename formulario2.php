<!DOCTYPE html>
<html lang="br">
<head>
<meta charset="UTF-8">
<title>Trabalhando com Sessao</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<?php 
session_start();
$_SESSION['nome']=$_POST['nome'];
$_SESSION['sobrnome']=$_POST['sobrenome'];
$_SESSION['cpf']=$_POST['cpf'];
$_SESSION['data']=$_POST['data'];
?>
</head>
<body>

<div class="container">
        <div class="jumbotron">
            <h1>Cadastro</h1>
        </div>
        
<form class="form-inline"  name="Endereco"  method="post" action="formulario3.php">
<fieldset class="row mb-3">
<legend class="col-form-label col-sm-2 pt-0">Logradouro</legend>
<div class="row mb-3">
<label for="endereco" class="col-sm-2 col-form-label">Endereço:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="endereco" name="endereco">
</div>
</div>
<div class="row mb-3">
<label for="cidade" class="col-sm-2 col-form-label">Cidade:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="cidade" name="cidade">
</div>
</div>
<div class="row mb-3">
<label for="estado" class="col-sm-2 col-form-label">Estado:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="estado" name="estado">
</div>
</div>
<div class="row mb-3">
<label for="cpf" class="col-sm-2 col-form-label">CEP:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="cep" name="cep">
</div>
</div>
</fieldset>
    <button type="submit" class="btn btn-primary" name="enviar" value="enviar">Enviar</button>
</form>

</body>
</html>