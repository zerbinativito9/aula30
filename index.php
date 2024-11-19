<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Descubra a Estação do Ano</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Qual é a Estação do Ano?</h1>
<div class="content-container">
<div class="form-container">
<form method="POST">
<label for="dia">Dia:</label>
<input type="number" id="dia" name="dia" required min="1" max="31">
<label for="mes">Mês:</label>
<input type="number" id="mes" name="mes" required min="1" max="12">
<button type="submit">Ver estação</button>
</form>
</div>

<div class="result-container">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$dia = (int)$_POST['dia'];
$mes = (int)$_POST['mes'];
$estacao = '';
$imagem = '';
if (($mes == 12 && $dia >= 21) || ($mes == 1 || $mes == 2) || ($mes == 3 && $dia < 20)) {
$estacao = 'Verão';
$imagem = 'https://lh3.googleusercontent.com/proxy/QcugMDEg6L1XhOEXyZLPkjdUr_2XPtHC2DkBxfK5lyzNYW8tiT2oqqF11ngj7uUIpbYr2JSzQg9IQVr2XRHycnQ6v50jgoUx6jJR6FzvS7GMJa7ARUWc_HuH6hhulYSBudTitw'; 
} elseif (($mes == 3 && $dia >= 20) || ($mes == 4 || $mes == 5) || ($mes == 6 && $dia < 21)) {
$estacao = 'Outono';
$imagem = 'https://recreio.com.br/media/uploads/aleatorio/outono_capa.jpg'; 
} elseif (($mes == 6 && $dia >= 21) || ($mes == 7 || $mes == 8) || ($mes == 9 && $dia < 23)) {
$estacao = 'Inverno';
$imagem = 'https://static.escolakids.uol.com.br/2020/07/frio-extremo.jpg'; 
} elseif (($mes == 9 && $dia >= 23) || ($mes == 10 || $mes == 11) || ($mes == 12 && $dia < 21)) {
$estacao = 'Primavera';
$imagem = 'https://educasc.com.br/wp-content/uploads/2023/09/iStock-1394440950-scaled.webp'; 
} else {
echo "<p>Data inválida. Tente novamente.</p>";
exit;
}
echo "<h2>A estação do ano é: $estacao</h2>";
echo "<img src='$imagem' alt='Imagem da estação $estacao'>";
}

?>
</div>
</div>
</body>
</html>
