<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP</title>
</head>
<body>
<div class="container">
    <div class="row"></div>
    <div class=" col-md-4"></div>
    <form action="index.php" method="GET">
    <div class="form-group"></div>
    <div><h1>Catálogo de Produtos</h1></div><br>
    <label for="nomeProd">Escolha um produto</label>
<select class="form-control" name="id_produto" id="id_produto">
<option value="prod1">Cadeira</option>
<option value="prod2">Mesa</option>
<option value="prod3">Fogão</option>
<option value="prod4">Cama</option></select><br>
<button type="submit" class="btn btn-info">Ver detalhes</button>
</form>
</div>
<div class="container">
    <div class="row">
    <div class=" col-md-4"></div>
<h2>Detalhes do Produto</h2></div>
<div class="col-md-4">

    <?php 
    
    $id_produto = $_GET['id_produto'];

$detalhes[prod1] = "Parabéns! Você escolheu: cadeira";
$detalhes[prod2] = "Parabéns! Você escolheu: mesa";
$detalhes[prod3] = "Parabéns! Você escolheu: fogão";
$detalhes[prod4] = "Parabéns! Você escolheu: cama";

echo $detalhes[$id_produto];

    ?>
</div>
</div>

</body>
</html>