<?php
	interface AdicionarProduto{
		public function salvar();
	}
	abstract class AbstractProdutosCadastrados{
		private $nome;
		private $valorBase;
		private $facaPergunta1;
		private $facaPergunta2;
		private $facaPergunta3;
		private $facaPergunta4;
		private $facaPergunta5;
		private $opcao1;
		private $opcao2;
		private $opcao3;
		private $opcao4;
		private $opcao5;
		
		protected getNome(){
			return $this->nome;
		}
		protected getValorBase(){
			return $this->valorBase;
		}
		protected getFacaPergunta1(){
			return $this->facaPergunta;
		}
		protected getFacaPergunta2(){
			return $this->facaPergunta;
		}
		protected getFacaPergunta3(){
			return $this->facaPergunta;
		}
		protected getFacaPergunta4(){
			return $this->facaPergunta;
		}
		protected getFacaPergunta5(){
			return $this->facaPergunta;
		}
		protected getOpcao1(){
			return $this->opcao1;
		}
		protected getOpcao2(){
			return $this->opcao2;
		}
		protected getOpcao3(){
			return $this->opcao3;
		}
		protected getOpcao4(){
			return $this->opcao4;
		}
		protected getOpcao5(){
			return $this->opcao5;
		}
		
		// __SET
		
		public setNome($nome){
			$this->nome = $nome;
		}
		public setValorBase($base){
			$this->valorBase = $base;
		}
		public getFacaPergunta1($p){
			$this->facaPergunta = $p;
		}
		public getFacaPergunta2($p){
			return $this->facaPergunta = $p;
		}
		public getFacaPergunta3($p){
			return $this->facaPergunta = $p;
		}
		public getFacaPergunta4($p){
			return $this->facaPergunta = $p;
		}
		public getFacaPergunta5($p){
			return $this->facaPergunta = $p;
		}
		public setOpcao1($opiniao){
			$this->opiniao1  = $opiniao;
		}
		public setOpcao2($opcao){
			$this->opcao2  = $opcao;
		}
		public setOpcao3($opcao){
			$this->opcao3  = $opcao;
		}
		public setOpcao4($opcao){
			$this->opcao4  = $opcao;
		}
		public setOpcao5($opcao){
			$this->opcao5  = $opcao;
		}
		// METODO
		public function salvar();
	}
?>