<?php 

	/**
	* 
	*/
	class Usuario{


		private $idUsuario;
		private $login;
		private $senha;
		private $cadastro;
		
		function __construct(){
		
		}

		public function getIdUsuario(){
			return $this->idUsuario;
		}

		public function setIdUsuario($id){
			$this->idUsuario = $id;
		}


		public function getLogin(){
			return $this->login;
		}

		public function setLogin($login){
			$this->login = $login;
		}


		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}


		public function getCadastro(){
			return $this->cadastro;
		}

		public function setCadastro($cadastro){
			$this->cadastro =  $cadastro;
		}




		/* esse metodo seleciona um usuario do BD pelo id que recebeseta para os metodos get e set todo conteudo que esta do BD */

		public function loadByID($id){

			
			$sql = new Sql();
			$result = $sql->select("Select * from tb_usuarios where idusuario = :ID",array(

				":ID" => $id
			));

			if(count($result) > 0 ){
			
				$row = $result[0];
				$this->setIdUsuario($row['idusuario']);
				$this->setLogin($row['deslogin']);
				$this->setSenha($row['dessenha']);
				$this->setCadastro(new DateTime($row['dtcdastro'])); 

			}else{
				echo "Não há nenhum usuario com esse registro no BD";
			}

		}

		/* esse metodo é chamado de metodo magico pois é executado todas vez que necessitamos imprimir um objeto na tela nós precisamos apenas dar um echo no objeto */
		public function __toString(){
			//$hora = date_default_timezone_set("America/Sao_Paulo");
			return json_encode(array(
				"idusuario"=>$this->getIdUsuario(),
				"login"=> $this->getLogin(),
				"senha"=>$this->getSenha(),
				"dtcadastro"=>$this->getCadastro()->format("d/m/Y H:i:s")

			));
		}


		/* 
			carrega uma lista dos usuarios que estão no BD
			Para fazer um metodo statico não podemos utilizar a palavra this para se refeernciar aos objetos da classe 

		*/
		public static function listarUsuarios(){

			$sql = new Sql();

			return $sql->select("SELECT * from tb_usuarios order by deslogin");

		}




		/* recebe como parametro um nome e pesquisa  no banco todos os nomes que possui semelhança com esse nome. Retorna uma lista de todos os nomes que há no BD que parecem com o nome informado */


		public static function pesquisa($login){
			$sql = new Sql();
			return $sql->select("SELECT * from tb_usuarios where deslogin like :SEARCH order by deslogin",array(
				':SEARCH'=>"%".$login."%"
			));
		}


		public function login($login, $senha){
			
			$sql = new Sql();

			$result = $sql->select("SELECT * from tb_usuarios where deslogin = :LOGIN and dessenha = :PASSWORD",array(

				":LOGIN"		=>$login,
				":PASSWORD"		=>$senha
			));

			if (count($result)) {
				$row = $result[0];
				$this->setIdUsuario($row['idusuario']);
				$this->setLogin($row['deslogin']);
				$this->setSenha($row['dessenha']);
				$this->setCadastro(new DateTime($row['dtcdastro'])); 
			}else{

				echo "Usuario não cadastrado !";
			}

		}


	}



	
	

 ?>