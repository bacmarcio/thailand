<?php
@ session_start();
$BrasilTailandiaInstanciada = '';
if(empty($BrasilTailandia)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../funcoes.php');
	}
	
	class BrasilTailandia {
		
		private $pdo = null;  

		private static $BrasilTailandia = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$BrasilTailandia)):    
				self::$BrasilTailandia = new BrasilTailandia($conexao);   
			endif;
			return self::$BrasilTailandia;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $idCat='', $idDiferente='', $url_amigavel='') {
			
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

			if(!empty($idDiferente)) {
				$sql .= " and id != ?"; 
				$nCampos++;
				$campo[$nCampos] = $idDiferente;
			}

			if(!empty($url_amigavel)) {
				$sql .= " and url_amigavel = ?"; 
				$nCampos++;
				$campo[$nCampos] = $url_amigavel;
			}
		
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_brasil_tailandia where 1=1 $sql $sqlOrdem $sqlLimite";
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
			if(isset($_POST['acao']) && $_POST['acao'] == 'addBrasilTailandia') {
	
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
						
						$sql = "INSERT INTO tbl_brasil_tailandia (foto, titulo, titulo_en, titulo_th, descricao, descricao_en, descricao_th, id_cat, meta_title, meta_keywords, meta_description, url_amigavel) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
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
								window.location='brasil-tailandia.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='brasil-tailandia.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaBrasilTailandia') {

				

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
				
					$sql = "UPDATE tbl_brasil_tailandia SET foto=?, titulo=?, titulo_en=?, titulo_th=?, descricao=?, descricao_en=?, descricao_th=?, id_cat=?, meta_title=?, meta_keywords=?, meta_description=?, url_amigavel=? WHERE id=?";   
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
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirBrasilTailandia') {
				
				try{   
					$sql = "DELETE FROM tbl_brasil_tailandia WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

				echo "	<script>
								window.location='tailandia.php';
								</script>";
								exit;

			}
		}

		function rsCatServicos($id='', $orderBy='', $limite='') {
			
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
		
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_cat_brasil_tailandia where 1=1 $sql $sqlOrdem $sqlLimite";
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

	}
	
	$BrasilTailandiaInstanciada = 'S';
}