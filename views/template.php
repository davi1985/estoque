<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Sistema de Estoque</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
	</head>
	<body>
		
		<div class="container page-header">
			<h1>Sistema de Cadastro de Produtos</h1>
			<small>'Até aqui nos ajudou o Senhor...'</small>

		</div>

		<div class="container">
			<?php
				$this->loadViewInTemplate($viewName, $viewData);
			?>
		</div>
		


		<script src="<?php echo BASE_URL; ?>assets/js/jquery.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>