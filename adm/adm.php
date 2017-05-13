<?php
	session_start();
	if($_SESSION["id_adm"] == false){
		header("location:login-adm.php");
	}
?>
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
			<header>
				<div class="container-fluid">
				Creat<strong>D</strong> | Administrador 1.5.0
				<div class="notificacao"><img src="icon/icon-home.png"> &nbsp &nbsp <img src="icon/icon-notificacao.png"> &nbsp &nbsp <a href="index.php"><img src="icon/icon-sair.png"></a></div>
				</div>
				
			</header>	
			<div class="menu-lateral">
				<div class="bt-menu-lateral">Produtos</div>
					<div class="bt-menu-sub"><a href="produtos.php">Produtos</a></div>	
					<div class="bt-menu-sub"><a href="relatoriosprodutos.php">Relatorios de Produtos</a></div>			
				<div class="bt-menu-lateral2">Vendas</div>
				<div class="bt-menu-sub2">Pedidos realizados</div>	
					<div class="bt-menu-sub2">Pedidos pendentes</div>	
					<div class="bt-menu-sub2">Incluir pedido manual</div>	
					<div class="bt-menu-sub2">Clientes</div>	
					<div class="bt-menu-lateral3">Marketing</div>
						<div class="bt-menu-sub3">Banner | SlideShow</div>	
						<div class="bt-menu-sub3">Otimização | SEO</div>	
						<div class="bt-menu-sub3">Carrinho Abandonado</div>	
						<div class="bt-menu-sub3">E-mail Marketing</div>
						<div class="bt-menu-sub3">newsletter</div>
					<div class="bt-menu-lateral3">Análise de Arquivos</div>	
					
			</div>
					
				<div class=" painelmobile">
					Você está Acessando de um Dispositov Móvel<br/>Acesse o Painel de
					
					<div class="menu-lateral-mobile">
						<button>Menu</button>
							<div class="bt-menu-sub-mobile">Adicionar Produto</div>	
							<div class="bt-menu-sub-mobile">Adicionar Produto</div>	
							<div class="bt-menu-sub-mobile">Adicionar Produto</div>	
							<div class="bt-menu-sub-mobile">Adicionar Produto</div>	
							<div class="bt-menu-sub-mobile">Adicionar Produto</div>	
							<div class="bt-menu-sub-mobile">Adicionar Produto</div>	
								
					</div>
							
				</div>
						<div class="container">
							<div class="col-xs-4 col-sm-8 col-lg-12 div">
								<div class="logo-adm" width="100%">Creat<strong><font color="#37709E">D</font></strong><font size="3">Administrador 1.5.0</font></div>
							</div>		
						</div>		
					<div class="container conteudomobile">conteudo</div>
							
			
			
				
		</body>
				
</html>	