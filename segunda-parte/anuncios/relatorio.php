<?php
	echo '<h2>Relatório Diário</h2>';
	$id = $_GET['id'];
	echo 'Valor Investido: ' . $id;
	$visuOriginal = (int) $id * 30;
	echo '<br>' . '1. Quantidade de visualizações do anúncio original: ' . $visuOriginal;
	$clicamOriginal = (int) $visuOriginal * 0.12;
	echo '<br>' . '2. Quantidade de cliques no anúncio original: ' . (int) $clicamOriginal;
	$compartilhamento = (int) $clicamOriginal / 20 * 3;
	$compartilhamento= (int) $compartilhamento * 4;
	echo '<br>' . '3. Quantidade de compartilhamentos nas redes sociais aproximada: ' . $compartilhamento;
	$novasVisualizacoes = (int) $compartilhamento * 40;
	echo '<br>' . '4. Quantidade de visualizações nas redes sociais aproximada: ' . $novasVisualizacoes;
	$visuTotal = $visuOriginal + $novasVisualizacoes;
	echo '<br>' . '5. Visualizações totais aproximada: ' . $visuTotal;
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 128px;">
	<div style="padding-top: 20px;">
		<center>
			<a href="index.php" role="button" class="btn btn-sm btn-outline-info">Voltar</a>
		</center>
	</div>
</div>