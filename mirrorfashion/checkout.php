<!DOCTYPE html>
<html>

   <head>
		
	    
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/open-iconic-bootstrap.css">
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Checkout Mirror Fashion</title>

	 </head>


   <body>
	
	   	<div class="jumbotron jumbotron-fluid">
	   		<div class="container">
	   	   		<h1 class="display-4">Ótima escolha!</h1>
	   	   		<p class="lead">Obrigado por comprar na Mirror Fashion!
	   	   		Preencha seus dados para efetivar a compra.</p>
	   	   	</div>
	   	</div>

	   	<div class="container">
		   	<div class="row">
		   		<div class="col-md-4 col-xl-3">   				   	
   				   	<div class="card mb-3">
			   		
				   		<div class="card-header">
						   	Sua compra
						</div>

						<div class="card-body">
							<img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan" class="img-thumbmail mb-3">
							<dl>
						   	   	<dt>Produto</dt>
						   	   	<dd><?=$_POST['nome']?></dd>

						   	   	<dt>Cor</dt>
						   	   	<dd><?= $_POST['cor']?></dd>

						   	   	<dt>Tamanho</dt>
						   	   	<dd><?= $_POST['tamanho']?></dd>

						   	   	<dt>Preco</dt>
						   	   	<dd id="preco"><?=$_POST['preco']?></dd>
							</dl>
						</div>
					</div>

					<div class=" card mb-3">
						<div class="card-body">
							
							<div class="form-group">
								<label for="qtd">Quantidade:</label>
								<input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
							</div>

							<div class="form-group">
								<label for="total">Total:</label>
								<output for="qtd preco" id="total" class="form-control">R$ 129,90</output> 
							</div>


						</div>
					</div>
							



				</div>
			</div>	
			

			<form class="col-md-8 col-xl-9">
				<row>
					<fieldset class="col-lg-6">

						<legend>Dados pessoais</legend>

						<div class="form-group">
							<label for="nome">Nome completo</label>
							<input type="text" class="form-group" id="nome" name="nome" autofocus required>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">@</span>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="mail@exemplo.com">
							</div>						
						</div>

						<div class="form-group">
							<label for="cpf" >CPF</label>
							<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00"data-mask="999.999.999-99" required>
						</div>

						<div class="form-group custom-control custom-checkbox">
						  	<input type="checkbox" class="custom-control-input" id="newsletter" value="sim" checked>
						  	<label class="custom-control-label" for="newsletter">
						  		Quero receber Newsletter da Mirror Fashion
						  	</label>
						</div>

					</fieldset>

					<fieldset class="col-lg-6">

						<legend>Cartão de crédito</legend>

						<div class="form-group">
							<label for="numero-cartao">Número - CVV</label>
							<input type="text" name="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
						</div>

						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">	
									<label class="input-group-text" for="bandeira-cartao">Bandeira</label>
								</div>

									<select class="custom-select" id="bandeira-cartao">						
										<option disabled selected> Selecione uma opção...</option>
										<option value="master">MasterCard</option>
										<option value="visa">Visa</option>
										<option value="amex">American Express</option>
									</select>
							</div>	
							
						</div>

						<div class="form-group">
							<label for="validade-cartao">Validade</label>
							<input type="month" class="form-control" id=validade-cartao name="validade-cartao">

						</div>

					</fieldset>
				</row>

				<button type="submit" class="btn bnt-primary btn-lg">
					<span class="oi oi-thumb-up"></span>
					Confirmar	Pedido
				</button>

			</form>

		</div>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/inputmask-plugin.js"></script>
		<script src="js/total.js"></script>


	</body>
</html>