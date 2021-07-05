<?php 
	include 'conexao.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM `anuncio` WHERE id_anuncio = $id";
	$excluir = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 256px;">
	<center>
		<h4>Anúncio excluído com sucesso!</h4>
	</center>
	<div style="padding-top: 20px;">
		<center>
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
		</center>
	</div>
</div>