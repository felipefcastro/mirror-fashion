<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Mirror Fashion</title>

		<link rel="stylesheet" href="css/reset.css"></link>
		<link rel="stylesheet" href="css/estilos.css"></link>
		<link rel="stylesheet" href="css/produto.css"></link>
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)"></link>
	</head>
	
	<body>
		<?php include("cabecalho.php"); ?>

<div class="produto-back">
	<div class="container">
		<div class="produto">
			<h1>Fuzzy Cardigan</h1>
			<p>por apenas R$ 129,00</p>

			<form action="checkout.php" method="POST">
				<fieldset class="cores">
					<legend>Escolha a cor:</legend>

					<input type="radio" name="cor" value="verde" id="verde" checked>
					<label for="verde">
						<img src="img/produtos/foto2-verde.png" alt="verde">
					</label>

					<input type="radio" name="cor" value="rosa" id="rosa">
					<label for="rosa">
						<img src="img/produtos/foto2-rosa.png" alt="rosa">
					</label>

					<input type="radio" name="cor" value="azul" id="azul">
					<label for="azul">
						<img src="img/produtos/foto2-azul.png" alt="azul">
					</label>

				</fieldset><!--

			--><fieldset class="tamanhos">
					<legend>Escolha o tamanho:</legend>
					<input type="range" name="tamanho" min="36" max="50" step="2" id="tamanho">
					<output for="tamanho" name="valortamanho">42</output>
				</fieldset>

				<input type="submit" class="comprar" value="Comprar">
				<input type="hidden" name="nome" value="Fuzzy Cardigan"><!-- Usuário não pode modificar, mas eu preciso enviar para checkout.php -->
				<input type="hidden" name="preco" value="129.00"><!-- Usuário não pode modificar, mas eu preciso enviar para checkout.php -->
			</form>
		</div>

			<div class="detalhes">
				<h2>Detalhes do Produto</h2>

				<p>Esse é o melhor casaco de Cardigã que você já viu. Excelente msterial italiano com estampa desenhada pelos artesãos
				da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a jato.</p>

				<table>
					<thead>
						<tr>
							<th>Característica</th>
							<th>Detalhes</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e Poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e Verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>
			</div><!-- Fim produto -->
	</div><!-- Fim  container-->
</div><!-- Fim  produto-back-->

		<?php include("rodape.php"); ?>
		<script src="js/produto.js"></script>
	</body>
</html>