<?php
	require_once"abstracts/abstractAdm.php";
	class AcessAdm extends AbstractAcessAdm{		
		public function myEmail($myEmail){
			if(strpos($myEmail,"@") == false){
				echo"<script>alert('Verifica se email esta certo!');history.back();</script>";
			}else{
				$this->setEmail($myEmail);
			}	
		}
		public function mySenha($mySenha){
			if(strlen($mySenha) >= 8){
				$this->setSenha($mySenha);
			}else{
				echo"<script>alert('Verifica sua senha!);history.back();</script>";
			}
			
		}
		public function acess(){
			require_once"config.php";
			$check = $conn->query("SELECT * FROM acesso_adm WHERE email = '{$this->getEmail()}' AND senha = '{$this->getSenha()}'");
			$id = $check->fetch_row();
			if($check->num_rows == true){
				session_start();
				$_SESSION["id_adm"] = $id[0];
				header("location:adm.php");
			}else{
				echo"<script>alert('Erro! email e senha não confere.');history.back();</script>";
			}
		}
		public function getOut($getOut){
			if($getOut == true){
				session_start();
				session_destroy();
				header("location:index.php");
			}	
		}
	}
?>