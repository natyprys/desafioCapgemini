<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Anúncios</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		#tamanhoContainer {
			width: 500px;
		}
		#botao {
			background-color: #00b894;
		}
	</style>
</head>
<body>
	<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
	<h4>Cadastro de Anúncio</h4>
	<form action="cadastrarAnuncio.php" method="post" style="margin-top: 20px;">
		<div class="form-group">
			<label>Nome do Anúncio</label>
			<input type="text" class="form-control" name="nome_anuncio" placeholder="Informe o nome do anúncio" required autocomplete="off">
		</div><br>
		<div class="form-group">
			<label>Cliente</label>
			<input type="text" class="form-control" name="cliente" placeholder="Informe o nome do cliente" required autocomplete="off">
		</div><br>
		<div class="form-group">
			<label>Data de Início</label>
			<input type="text" id="datepicker" class="form-control datepicker" name="data_inicio" placeholder="Formato DD/MM/YYYY" required autocomplete="off">
		</div><br>
		<div class="form-group">
			<label>Data de Término</label>
			<input type="text" id="datepicker" class="form-control datepicker" name="data_termino" placeholder="Formato DD/MM/YYYY" required autocomplete="off">
		</div><br>
		<div class="form-group">
			<label>Investimento</label>
			<input type="number" class="form-control" name="investimento_dia" placeholder="Informe o investimento por dia" required autocomplete="off">
		</div><br>
		<div style="text-align: right;">
			<a href="index.php" role="button" class="btn btn-sm btn-outline-info">Voltar</a>
			<button type="submit" id="botao" class="btn btn-success btn-sm">Cadastrar</button>
		</div>
	</form>
	<!-- Bootstrap JS -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script>
    	$( ".datepicker" ).datepicker({
    	   format: 'dd-mm-yyyy'
    	});
    </script>
</body>
</html>