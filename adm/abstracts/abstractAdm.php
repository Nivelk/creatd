<?php
	interface Adm{
		public function myEmail($myEmail);
		public function mySenha($mySenha);
		public function acess();
		public function getOut($getOut);
	}
	abstract class AbstractAcessAdm implements Adm{
		private $email;
		private $senha;
		
		protected function getEmail(){
			return $this->email;
		}
		protected function getSenha(){
			return $this->senha;
		}
		protected function setEmail($email){
			$this->email = $email;
		}
		protected function setSenha($senha){
			$this->senha = $senha;
		}
		
		public function myEmail($myEmail){}
		public function mySenha($mySenha){}
		public function acess(){}
		public function getOut($getOut){}
	}
?>