<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout Mirror Fashion</title>
	<meta name="viewport" content="width=device-width">
	<!--<link rel="stylesheet" href="css/bootstrap.css">-->
	<link rel="stylesheet" href="css/bootstrap-flatly.css">
	<link rel="stylesheet" href="css/checkout.css">

</head>
<body>

	<nav class="navbar navbar-default navbar-static-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Mirror Fashion</a>
			<button class="navbar-toggle" type="button"
					data-target=".navbar-collapse" data-toggle="collapse">
				<span class="glyphicon glyphicon-align-justify"></span>			
			</button>
		</div>
		<ul class="nav navbar-nav collapse navbar-collapse">
			<li><a href="sobre.php"><span class="glyphicon glyphicon-home"></span> Sobre</a></li>
			<li><a href="#"> <span class="glyphicon glyphicon-question-sign"></span> Ajuda</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>	Perguntas frequentes</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Entre em contato</a></li>
		</ul>
	</nav>

	<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha!</h1>
			<p>Obrigado por comprar na Mirror Fashion!
			Preencha seus dados para efetivar a compra.</p>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-4">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Sua compra</h2>
					</div><!-- Fim panel-heading -->
					<div class="panel-body">
						<img src="img/produtos/foto2-verde.png" alt="Fuzzy Cardigan"
							class="img-thumbnail img-responsive">
						<dl>
							<dt>Cor</dt>
							<dd><?= $_POST['cor'] ?></dd>

							<dt>Tamanho</dt>
							<dd><?= $_POST['tamanho'] ?></dd> 

							<dt>Produto</dt>
							<dd><?= $_POST['nome'] ?></dd> 

							<dt>Preço</dt>
							<dd id="preco"><?= $_POST['preco'] ?></dd> 
						</dl>

						<div class="form-group">
							<label for="qt">Quantidade</label>
							<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
						</div>
						<div class="form-group">
							<label for="total">Total</label>
							<output for="qt preco" id="total" class="form-control">
								<?= $_POST['preco'] ?>
							</output>
						</div>

					</div><!-- Fim panel-body -->
				</div><!-- Fim panel panel-default -->
			</div><!-- Fim col-sm-4 -->

				<form class="col-sm-8">
					<div class="row">
						
						<fieldset class="col-md-6">
							<legend>Dados Pessoais</legend>

							<div class="form-group">
								<label for="nome">Nome Completo</label>
								<input type="text" class="form-control" name="nome" id="nome" autofocus required>
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<div class="input-group">
									<span class="input-group-addon">@</span>
									<input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com">
								</div>
							</div>

							<div class="form-group">
								<label for="cpf">CPF</label>
								<input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
							</div>

							<div class="checkbox">
								<label> 
									<input type="checkbox" value="sim" name="spam" checked>
									Quero receber spam da Mirror Fashion
								</label>
							</div>
						</fieldset>

						<fieldset class="col-md-6">
							<legend>Cartão de Crédito</legend>

							<div class="form-group">
								<label for="numero-cartao">Número - CVV</label>
								<input type="text" class="form-control" name="numero-cartao" data-mask="9999 9999 9999 - 999" id="numero-cartao" >
							</div>

							<div class="form-group">
								<label for="bandeira-cartao">Bandeira</label>
								<select class="form-control" name="bandeira-cartao" id="bandeira-cartao">
									<option value="master">MasterCard</option>
									<option value="visa">Visa</option>
									<option value="amex">American Express</option>
								</select>
							</div>

							<div class="form-group">
								<label for="validade-cartao">Validade</label>
								<input type="month" class="form-control" name="validade-cartao" id="validade-cartao">
							</div>
						</fieldset>
					</div><!-- Fim row form -->

					<button type="submit" class="btn-lg btn-primary pull-right">
						<span class="glyphicon glyphicon-thumbs-up"></span>
						Confirmar Pedido
					</button>
				</form>

		</div><!-- Fim row" -->
	</div><!-- Fim container -->
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/inputmask-plugin.js"></script>
	<script src="js/total.js"></script>


</body>
</html>