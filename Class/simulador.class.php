<?php
$SimuladorInstanciada = '';
	if(empty($SimuladorInstanciada)) {
		if(file_exists('Connection/conexao.php')) {
			require_once('Connection/con-pdo.php');
			require_once('funcoes.php');
		} else {
			require_once('../Connection/con-pdo.php');
			require_once('../funcoes.php');
		}
	
	class Simulador {
		
		private $pdo = null;  

		private static $Simulador = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Simulador)):    
				self::$Simulador = new Simulador($conexao);   
			endif;
			return self::$Simulador;    
		}
		
		
		function rsDados($id='', $uf='', $cidade='', $orderBy='', $limite='') {
			
			/// FILTROS
			$nCampos = 0;
			$sql='';
			$sqlOrdem='';
			$sqlLimite='';
			
			if($id <> '') {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}
			if($uf <> '') {
				$sql .= " and uf = ?"; 
				$nCampos++;
				$campo[$nCampos] = $uf;
			}
			if($cidade <> '') {
				$sql .= " and municipio = ?"; 
				$nCampos++;
				$campo[$nCampos] = $cidade;
			}
						
		
			/// ORDEM		
			if($orderBy <> '') {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if($limite <> '') {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM simulador where 1=1 $sql GROUP BY uf $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				if(isset($_GET['busca']) && $_GET['busca'] <> '') {
					$stm->bindValue($i, "%{$_GET['busca']}%");
					$i++;
					$stm->bindValue($i, "%{$_GET['busca']}%");
					$i++;
					$stm->bindValue($i, "%{$_GET['busca']}%");
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($stm);
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
	
	$SimuladorInstanciada = 'S';
}