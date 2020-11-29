<?php
	class Usuario {
		private $id_usuario;		
		private $nome;		
		private $email;		
		private $senha;		
		private $telefone;		
		private $foto_perfil;		
		private $profissao;		
		private $avalicao_user;
		
		public function __construct($id_usuario, $nome, $email, $senha, $telefone, $foto_perfil, $profissao, $avalicao_user) {
			$this->id_usuario = $id_usuario;
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
			$this->telefone = $telefone;
			$this->foto_perfil = $foto_perfil;
			$this->profissao = $profissao;
			$this->avalicao_user = $avalicao_user;
		}

		public function getIdUsuario() {
			return $this->id_usuario;
		}
		public function getNome() {
			return $this->nome;
		}
		public function getEmail() {
			return $this->email;
		}
		public function getSenha() {
			return $this->senha;
		}
		public function getTelefone() {
			return $this->telefone;
		}
		public function getFotoPerfil() {
			return $this->foto_perfil;
		}
		public function getProfissao() {
			return $this->profissao;
		}
		public function getAvalicaoUser() {
			return $this->avalicao_user;
		}


		public function setNome($nome) {
			$this->nome = $nome;
		}
		public function setEmail($email) {
			$this->email = $email;
		}
		public function setSenha($senha) {
			$this->senha = $senha;
		}
		public function setTelefone($telefone) {
			$this->telefone = $telefone;
		}
		public function setFotoPerfil($foto) {
			$this->foto_perfil = $foto;
		}
		public function setProfissao($profissao) {
			$this->profissao = $profissao;
		}
		public function setAvalicaoUser($avalicacao) {
			$this->avalicao_user = $avalicacao;
		}
	}
?> 