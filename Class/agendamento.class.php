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
	
				$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
				$tituloEn = filter_input(INPUT_POST, 'titulo_en', FILTER_SANITIZE_SPECIAL_CHARS);
				$tituloTh = filter_input(INPUT_POST, 'titulo_th', FILTER_SANITIZE_SPECIAL_CHARS);
				//$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
				$descricao = $_POST['descricao'];
				$descricaoEn = $_POST['descricao_en'];
				$descricaoTh = $_POST['descricao_th'];
				$id_cat = filter_input(INPUT_POST, 'id_cat', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_title = filter_input(INPUT_POST, 'meta_title', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_description = filter_input(INPUT_POST, 'meta_description', FILTER_SANITIZE_SPECIAL_CHARS);
				$urlAmigavel = gerarTituloSEO($titulo);
				
					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_agendamento (foto, titulo, titulo_en, titulo_th, descricao, descricao_en, descricao_th, id_cat, meta_title, meta_keywords, meta_description, url_amigavel) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, upload('foto', $pastaArquivos, 'N'));   
						$stm->bindValue(2, $titulo);   
						$stm->bindValue(3, $tituloEn);   
						$stm->bindValue(4, $tituloTh);   
						$stm->bindValue(5, $descricao);
						$stm->bindValue(6, $descricaoEn);
						$stm->bindValue(7, $descricaoTh);
						$stm->bindValue(8, $id_cat);   
						$stm->bindValue(9, $meta_title);   
						$stm->bindValue(10, $meta_keywords);   
						$stm->bindValue(11, $meta_description); 
						$stm->bindValue(12, $urlAmigavel);   
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

				

				$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
				$tituloEn = filter_input(INPUT_POST, 'titulo_en', FILTER_SANITIZE_SPECIAL_CHARS);
				$tituloTh = filter_input(INPUT_POST, 'titulo_th', FILTER_SANITIZE_SPECIAL_CHARS);
				//$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
				$descricao = $_POST['descricao'];
				$descricaoEn = $_POST['descricao_en'];
				$descricaoTh = $_POST['descricao_th'];
				$id_cat = filter_input(INPUT_POST, 'id_cat', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_title = filter_input(INPUT_POST, 'meta_title', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords', FILTER_SANITIZE_SPECIAL_CHARS);
				$meta_description = filter_input(INPUT_POST, 'meta_description', FILTER_SANITIZE_SPECIAL_CHARS);
				$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
				$urlAmigavel = gerarTituloSEO($titulo);

				
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_agendamento SET foto=?, titulo=?, titulo_en=?, titulo_th=?, descricao, descricao_en=?, descricao_th=?, id_cat=?, meta_title=?, meta_keywords=?, meta_description=?, url_amigavel=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, upload('foto', $pastaArquivos, 'N'));   
					$stm->bindValue(2, $titulo);   
					$stm->bindValue(3, $tituloEn);   
					$stm->bindValue(4, $tituloTh);   
					$stm->bindValue(5, $descricao);
					$stm->bindValue(6, $descricaoEn);
					$stm->bindValue(7, $descricaoTh);
					$stm->bindValue(8, $id_cat);   
					$stm->bindValue(9, $meta_title);   
					$stm->bindValue(10, $meta_keywords);   
					$stm->bindValue(11, $meta_description);
					$stm->bindValue(12, $urlAmigavel);
					$stm->bindValue(13, $id);   
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