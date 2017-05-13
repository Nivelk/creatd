<?php
	$conn = new mysqli("localhost","root","","creatd");
		if($conn->connect_error){
			die("Erro no banco da CreatD!");
		}
?>