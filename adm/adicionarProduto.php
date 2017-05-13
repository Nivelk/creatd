<?php
	require_once"classProdutosCadastrados.php";
		
		$produto = new ProdutosCadastrados();
		$produto->setNome($_POST["nomeProduto"]);
		
		print_r($produto);
?>