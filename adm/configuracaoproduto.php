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
			<header>Cadastro | Configuração de produtos</header>
					<div class="container">
						<center>
					<form action="adicionarProduto.php" method="post" class="form-produto"><br>
							<h1>Adicionar Produto</h1>
							<br><br>
							Nome: <br><input type="text" class="campo-produto" name="nomeProduto"><br><br>
							Valor Base<br><input type="text"class="campo-produto"><br><br><hr>
							
							
								<?php
									for($etapa = 1;$etapa <=5; $etapa ++){
									?>
										<script type="text/javascript">
											$(function(){
												$(".optionHide").css({"display":"none"});
												$('#bt-etapa-<?php echo $etapa;?>').click(function(){
													$('#campo-produto-<?php echo $etapa;?>').slideToggle();
												});
												var option<?php echo $etapa;?> = 0;
												
												$(".<?php echo $etapa;?>Etapa_option").click(function(){
													option<?php echo $etapa;?>++;
														if(option<?php echo $etapa;?>==1){
															$(".1_option_<?php echo $etapa;?>Etapa").css({"display":"block"});
														}else if(option<?php echo $etapa;?>==2){
															$(".2_option_<?php echo $etapa;?>Etapa").css({"display":"block"});
														}else if(option<?php echo $etapa;?>==3){
															$(".3_option_<?php echo $etapa;?>Etapa").css({"display":"block"});
														}else if(option<?php echo $etapa;?>==4){
															$(".4_option_<?php echo $etapa;?>Etapa").css({"display":"block"});
														}else if(option<?php echo $etapa;?>==5){
															$(".5_option_<?php echo $etapa;?>Etapa").css({"display":"block"});
														}
												});
											});
										</script>
										<!-- Inicio codigo para <?php echo $etapa;?>° etapa-->
										<div class="bt-etapa" id="bt-etapa-<?php echo $etapa;?>"><?php echo $etapa;?>° Etapa <span style="width:120px; border:solid 1px green; heigth:50px; color:green;">+</span></div>
										<div id="campo-produto-<?php echo $etapa;?>">
											<span style="margin-left:-550px; font-size:20px; color:#666;"><br></span> <br><center>Faça a Pergunta</center><br><input type="text" class="campo-produto facaPergunta-<?php echo $etapa;?>"><br><br>
											<div class="btn btn-primary <?php echo $etapa;?>Etapa_option">Acrescentar Opções</div><br><br>
											<div class="optionAtribut">
												<?php
													for($option = 1;$option <=5; $option++){
												?>
													<div class="<?php echo $option;?>_option_<?php echo $etapa;?>Etapa optionHide">
														<?php echo $option;?> Opções <input type="text" id="campo-produto-opcao" class="campo-produto">		
														Custo <input type="text" id="campo-produto-opcao" class="campo-produto">
														<br><br>
													</div>
													<br>
												<?php
													}
												?>
											</div>	
										</div>
										<hr>
										<!-- Fim Codigo para <?php echo $etapa;?>° etapa -->
									<?php	
									}
								?>
									<?php
										$mais = "<strong>+</strong>";
									?>
									<center><input type="submit" class="bt-cadastrar" value="Salvar <?php echo $mais;?>"/><br/></center>		
					</form>
						</center>
						
					</div>
					
					
						
		</body>
				
</html>	