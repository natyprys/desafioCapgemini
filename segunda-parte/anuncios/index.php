<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Anúncios</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="https://kit.fontawesome.com/73e7bda217.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="margin-top: 40px;">
		<h3>Anúncios</h3><br>
		<table class="table">
		  <thead class="table-light">
		    <tr>
		      <th scope="col" class="text-center">ID Anúncio</th>
		      <th scope="col" class="text-center">Nome do Anúncio</th>
		      <th scope="col" class="text-center">Cliente</th>
		      <th scope="col" class="text-center">Data de Início</th>
		      <th scope="col" class="text-center">Data de Término</th>
		      <th scope="col" class="text-center">Investimento por Dia</th>
		      <th scope="col" class="text-center">Ação</th>
		    </tr>
		  </thead>
		    	<?php
		    		include 'conexao.php';
		    		$sql = "SELECT * FROM `anuncio`";
		    		$busca = mysqli_query($conexao, $sql);
		    			while($array = mysqli_fetch_array($busca)) {
		    				$id_anuncio = $array['id_anuncio'];
		    				$nome_anuncio = $array['nome_anuncio'];
		    				$cliente = $array['cliente'];
		    				$data_inicio = $array['data_inicio'];
		    				$data_termino = $array['data_termino'];
		    				$investimento_dia = $array['investimento_dia'];
		    	?>
		    <tr>
		      <td class="text-center"><?php echo $id_anuncio ?></td>
		      <td class="text-center"><?php echo $nome_anuncio ?></td>
		      <td class="text-center"><?php echo $cliente ?></td>
		      <td class="text-center"><?php echo $data_inicio ?></td>
		      <td class="text-center"><?php echo $data_termino ?></td>
		      <td class="text-center"><?php echo $investimento_dia ?></td>
		      <td class="text-center">
		      	<a class="btn btn-warning btn-sm" href="relatorio.php?id=<?php echo $investimento_dia?>" role="button"><i class="far fa-chart-bar"></i>&nbsp;Relatório</a>
		      	<a class="btn btn-danger btn-sm" href="excluirAnuncio.php?id=<?php echo $id_anuncio?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>
		    </tr>
		    <?php } ?>
		</table>
		<div style="text-align: right;">
			<a href="formularioCadastro.php" role="button" class="btn btn-sm btn-outline-primary" style="margin-bottom: 20px; margin-top: 20px;">Cadastrar Anúncio</a>
		</div>
	</div>
	<!-- Bootstrap JS -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>