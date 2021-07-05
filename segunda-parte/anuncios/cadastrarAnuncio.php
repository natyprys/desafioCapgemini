<?php
	include 'conexao.php';
	$nome_anuncio = $_POST['nome_anuncio'];
	$cliente = $_POST['cliente'];
	$data_inicio = $_POST['data_inicio'];
	$data_termino = $_POST['data_termino'];
	$investimento_dia = $_POST['investimento_dia'];

	$sql = "INSERT INTO `anuncio`(`nome_anuncio`, `cliente`, `data_inicio`, `data_termino`, `investimento_dia`) VALUES ('$nome_anuncio', '$cliente', $data_inicio, $data_termino, $investimento_dia)";

	$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 256px;">
	<center>
		<h4>Anúncio cadastrado com sucesso!</h4>
	</center>
	<div style="padding-top: 20px;">
		<center>
			<a href="formularioCadastro.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
		</center>
	</div>
</div>