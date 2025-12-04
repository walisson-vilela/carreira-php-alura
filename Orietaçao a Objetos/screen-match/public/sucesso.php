<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sucesso — ScreenMatch</title>
	<link rel="stylesheet" href="sucesso.css">
</head>
<body>
<div class="container">
	<h1>Sucesso!</h1>
	<?php $nome = isset($_GET['nome']) ? htmlspecialchars((string) $_GET['nome']) : ''; ?>
	<p class="message">O filme <strong><?php echo $nome ?: '—'; ?></strong> foi adicionado com sucesso.</p>
	<p><a class="button" href="index.html">Voltar</a></p>
</div>
</body>
</html>