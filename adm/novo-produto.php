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
	</head>
		<body>
			<header>Cadastrar Produto</header><br/>	
			<div class="container">
				<form action="php/processo-add-produto.php" method="post" class="form-adm">
					Imagem do Produto<br/>
					<!-- colocar um imput file para inserir imagem junto com o produto-->
					<input type="file">	<br>
					Nome<br/><font color="red">*</font><input type="text" name="nome" class="campo" placeholder="Digite o nome do Produto"><br/><br/>
						Tipo de Produto<br><select>
							<h3>Cartões de Visita</h3>
							<option>Banner</option>	
							<option>Faixa</option>	
							<option>Adesivo</option>	
							<option>tag</option>	
							<option>Folder</option>	
							<option>Flyers</option>	
							<option>Panfletos</option>	
							<option>Calendario</option>	
							
						</select><br><br>
						
						Material<br><select>
							<h3>Cartões de Visita</h3>
							<option>Cartões de Visita Frente</option>	
							<option>Frente e Verso</option>	
							<option>Frente Verniz Total</option>	
							<option>Frente e Verso Verniz Total</option>	
							<option>Frente Verniz Localizado</option>	
							<option>Frente e Verso Verniz Localizado</option>
							<option>Laminação Fosca sem Verniz</option>
						</select><br><br>		
					Descrição<br/><font color="red">*</font><input type="text" name="descricao" class="campo" placeholder="Digite a descrição do produto"><br/>	
					Prazo de Entrega<br/><font color="red">*</font><input type="text" name="prazo" class="prazo" placeholder="Dias uteis"><br/>	
					Preço</br/><font color="red">*</font><input type="text" class="preco" name="preco" placeholder="R$ 0,00"><br/>	
					<br/><font color="red">*</font><input type="submit" value="Salvar"class="bt-cadastrar"><br/><!-- Quando salvar retornar para painel-->
				</form>
			</div>
		</body>
				
</html>	