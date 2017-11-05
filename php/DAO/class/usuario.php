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

		




		/* esse metodo seleciona um usuario do BD pelo id que recebeseta para os metodos get e set todo conteudo que esta do BD */
		public function loadByID($id){
			
			$sql = new Sql();
			$result = $sql->select("Select * from tb_usuarios where idusuario = :ID",array(

				":ID" => $id
			));

			if(count($result) > 0 ){
			
				$this->setData($result[0]);

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


		/* 	carrega uma lista dos usuarios que estão no BD
			Para fazer um metodo statico não podemos utilizar a palavra this para se refeernciar aos objetos da classe 	*/
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



		/* seta para os metodos get e set os parametros recebidos */
		public function setData($data){

			$this->setIdUsuario($data['idusuario']);
			$this->setLogin($data['deslogin']);
			$this->setSenha($data['dessenha']);
			$this->setCadastro(new DateTime($data['dtcdastro'])); 

		}


		/* verifica se o usuario tem cadastro no BD com o login e a senha informados */
		public function login($login, $senha){
			
			$sql = new Sql();
			$result = $sql->select("SELECT * from tb_usuarios where deslogin = :LOGIN and dessenha = :PASSWORD",array(

				":LOGIN"		=>$login,
				":PASSWORD"		=>$senha
			));

			if (count($result)) {
				
				$this->setData($result[0]);
			}else{

				echo "Usuario não cadastrado !";
			}

		}



		public function insert(){

			$sql = new sql();

			/* cria uma prosidure dentro do mysql. Não sei ainda o que é prosidure */
			$result = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)",array(

				':LOGIN'=>$this->getLogin(),
				':PASSWORD'=>$this->getSenha()
			));

			if (count($result)) {				
				$this->setData($result[0]);
			}
		}


		public function update($login, $password){

			$this->setLogin($login);
			$this->setSenha($password);

			$sql = new Sql();

			$sql->query("UPDATE tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID",array(
				":LOGIN"=>$this->getLogin(),
				":PASSWORD"=>$this->getSenha(),
				":ID"=>$this->getIdUsuario()

			));


		}


		public function delete(){

			$sql = new Sql();

			$sql->query("DELETE from tb_usuarios where idusuario = :ID",array(
				":ID"=>$this->getIdUsuario()
			));


			/* serve para zerar o objeto*/

			$this->setIdUsuario(0);
			$this->setSenha("");
			$this->setLogin("");
			$this->setCadastro(new DateTime());

		}



		/* get and setters */
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





	}



	
	

 ?>