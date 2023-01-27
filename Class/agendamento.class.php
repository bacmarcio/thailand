<?php
@ session_start();
$AgendamentoInstanciada = '';
if(empty($AgendamentoInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../funcoes.php');
	}
	
	class Agendamento {
		
		private $pdo = null;  

		private static $Agendamento = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Agendamento)):    
				self::$Agendamento = new Agendamento($conexao);   
			endif;
			return self::$Agendamento;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $idCat='') {
			
			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = ''; 
			$sqlLimite = '';
			if(!empty($id)) {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}
			if(!empty($idCat)) {
				$sql .= " and id_cat = ?"; 
				$nCampos++;
				$campo[$nCampos] = $idCat;
			}
		
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_agendamento where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1) {
					return($rsDados[0]);
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}

		function add($redireciona='') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'addAgendamento') {
	
				$solicitante = filter_input(INPUT_POST, 'solicitante', FILTER_SANITIZE_SPECIAL_CHARS);
				$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
				$telefone = filter_input(INPUT_POST, '$telefone', FILTER_SANITIZE_SPECIAL_CHARS);
				//$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
				$id_pais = filter_input(INPUT_POST, 'id_pais', FILTER_SANITIZE_SPECIAL_CHARS);
				$id_servico = filter_input(INPUT_POST, 'id_servico', FILTER_SANITIZE_SPECIAL_CHARS);
				$id_data = filter_input(INPUT_POST, 'id_data', FILTER_SANITIZE_SPECIAL_CHARS);
				$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS);
				$reagendamento = filter_input(INPUT_POST, 'reagendamento', FILTER_SANITIZE_SPECIAL_CHARS);
				
					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_agendamento (solicitante, email, telefone, id_pais, id_servico, id_data, status, reagendamento) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $solicitante);   
						$stm->bindValue(2, $email);   
						$stm->bindValue(3, $telefone);   
						$stm->bindValue(4, $id_pais);
						$stm->bindValue(5, $id_servico);
						$stm->bindValue(6, $id_data);
						$stm->bindValue(7, $status);   
						$stm->bindValue(8, $reagendamento);    
						$stm->execute(); 
						$idBanner = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}

					
					echo "	<script>
								window.location='agendamento.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='agendamento.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaAgendamento') {

				$solicitante = filter_input(INPUT_POST, 'solicitante', FILTER_SANITIZE_SPECIAL_CHARS);
				$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
				$telefone = filter_input(INPUT_POST, '$telefone', FILTER_SANITIZE_SPECIAL_CHARS);
				//$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
				$id_pais = filter_input(INPUT_POST, 'id_pais', FILTER_SANITIZE_SPECIAL_CHARS);
				$id_servico = filter_input(INPUT_POST, 'id_servico', FILTER_SANITIZE_SPECIAL_CHARS);
				$id_data = filter_input(INPUT_POST, 'id_data', FILTER_SANITIZE_SPECIAL_CHARS);
				$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS);
				$reagendamento = filter_input(INPUT_POST, 'reagendamento', FILTER_SANITIZE_SPECIAL_CHARS);
				$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

				
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_agendamento SET solicitante=?, email=?, telefone=?, id_pais=?, id_servico, id_data=?, status=?, reagendamento=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $solicitante);   
					$stm->bindValue(2, $email);   
					$stm->bindValue(3, $telefone);   
					$stm->bindValue(4, $id_pais);
					$stm->bindValue(5, $id_servico);
					$stm->bindValue(6, $id_data);
					$stm->bindValue(7, $status);   
					$stm->bindValue(8, $reagendamento);
					$stm->bindValue(9, $id);   
					$stm->execute(); 
					
					
					
					
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

				echo "	<script>
							window.location='{$redireciona}';
							</script>";
							exit;
			}
		}
		
		function excluir() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirAgendamento') {
				
				try{   
					$sql = "DELETE FROM tbl_agendamento WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

				echo "	<script>
								window.location='agendamento.php';
								</script>";
								exit;

			}
		}

		

	}
	
	$AgendamentoInstanciada = 'S';
}