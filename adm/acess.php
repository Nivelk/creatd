<?php
	require_once"class_adm/classAdm.php";
	error_reporting(0);
		$adm = new AcessAdm();
		$adm->myEmail($_POST["usuario"]);
		$adm->mySenha($_POST["senha"]);
		$adm->acess();
		$adm->getOut($_GET["getout"]);
?>