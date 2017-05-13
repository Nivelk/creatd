<!doctype hmtl>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">		
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>		
		<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>		
		<script type="text/javascript" src="../js/scrip-jquary.js"></script>		
		<script type="text/javascript" src="../js/ajax.js"></script>		
		<script type="text/javascript" src="../js/script.js"></script>		
	</head>
		<body>
			
				
				
				
					<!-- Aqui irá ter um listagem do banco de dados com produtos Cadastrados -->
					<header>
						Cadastro | 
						<a href="configuracaoproduto.php">Configuração de produtos</a>
					</header>
					<div class="container">
						<center><form action="#" method="post" class="form-produto"><br>
							Insira uma imagem do Produto<br><center>
							<span c lass="upload-wrapper">
							<input class="upload-file" type="file"onchange="javascript:submit()" placeholder="Insirir imagem"></center><br>
							<img c lass="upload-button" src="../img/add-imagem.png">
							</span><br><br>
							Produto<br><br>
							
							
							Material e Medida<br><br>
							<select class="campo-produto">
								<option>Cartão de Visita </option>	
								<option>Banner</option>	
								<option>Faixa</option>	
								<option>Adesivo</option>	
								<option>Tag</option>	
								<option>Folder</option>	
								<option>Flyers</option>	
								<option>Panfletos</option>	
								<option>Cartão de Visita</option>	
								<option>Cartão de Visita</option>	
								<option>Cartão de Visita</option>	
							</select><br><br>
							
							Informações do Produto<br><br><input type="text" class="campo-produto">
							</form></center>
						<center><a href="../adm.php"><div class="bt-cadastrar">Editar  Produto <strong>+</strong></div></a><br/></center>
					</div>
					
					<div class="fundo-preto">
					  
					</div>
						<div class="container">
						    
							<center><form action="#" action="post" class="form-configurar-produto">
							    <center><h3>Configure o preço dos Produtos Aqui</h3></center>
								Valor Base:<br><input type="text" class="campo-configurar-produto"><br><br>
								Valor do Material:<br><input type="text" class="campo-configurar-produto"><br><br>
								<input type="submit" value="Salvar" class="bt-salvar">
							</form>	</center>	
						</div><br>
		</body>
				
</html>	