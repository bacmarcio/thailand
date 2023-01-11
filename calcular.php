<?php include "includes.php";
$_POST['acao']="calcular";

$Pegasimulador = Simulador::getInstance(Conexao::getInstance());

$simulador = $Pegasimulador->rsDados('', $_GET['estado'], $_GET['cidade']);

//echo "aqui: ".$simulador[0]->municipio;
//echo "aqui2: ".$simulador[0]->uf;
//print_r($_POST);
//exit;



if ($_POST['acao']=='calcular') {
    /*$potenciaDeRadiacao = "5,2357";*/
    $potenciaDeRadiacao = $simulador[0]->anual_kwh;
    $consumoDiario = $_GET['consumo']/30;
    $eficienciaDoProjeto = 0.75;
    $potenciaNecessaria = $consumoDiario/$potenciaDeRadiacao;
    $potenciaInstalada = $potenciaNecessaria/$eficienciaDoProjeto;
    $volumeDeGeracaoDeEnergia = $_GET['consumo']*300;
    $valorDoKWp = 8000;
    $valorDoProjeto = $potenciaInstalada * $valorDoKWp;
	
	$porcentagemMinimoProjeto1 = (5*100)/100 ;
	 $porcentagemValorMinimo = ($valorDoProjeto * $porcentagemMinimoProjeto1)/100;
	$valorMinimoProjeto = $valorDoProjeto - $porcentagemValorMinimo;
	
	$porcentagemMaximoProjeto1 =  (20*100)/100;
	$porcentagemValorMaximo = ($valorDoProjeto * $porcentagemMaximoProjeto1)/100;
	$valorMaximoProjeto = $valorDoProjeto + $porcentagemValorMaximo;
    $custoDoKwhProduzido = $valorMaximoProjeto/$volumeDeGeracaoDeEnergia;
	$numeroPaineis = ($potenciaNecessaria/0.315);
	$areaMinima = round($numeroPaineis)*2;

// echo "<pre> potencia cidade".$potenciaDeRadiacao;
// echo "</pre>";	
//	echo "<pre> eficiencia".$eficienciaDoProjeto;
// echo "</pre>";	
//
// echo "<pre> consumo diario".$consumoDiario;
// echo "</pre>";
//
// echo "<pre> potencia".$potenciaNecessaria;
// echo "</pre>";
//
// echo "<pre> instalada".$potenciaInstalada;
// echo "</pre>";
//
// echo "<pre> valor do projeto: ".number_format($valorDoProjeto,2,',','.');
// echo "</pre>";
//
// echo "<pre> valor minimo".number_format($valorMinimoProjeto,2,',','.');
// echo "</pre>";
//	echo "<pre> valor minimo1: ".$aqui;
// echo "</pre>";
//
// echo "<pre> valor maximo".number_format($valorMaximoProjeto,2,',','.');
// echo "</pre>";
//
// echo "<pre> custo".$custoDoKwhProduzido;
// echo "</pre>";

//exit;
//$valorMaximoProjeto;
//echo $valorDoProjeto;
//exit;

   // echo "<script>window.location='simulador.php?tipo=calculo'</script>";
   // exit;

}?>

<!-- <style>
    	
		.clickable{
		    cursor: pointer;   
		}

		.panel-heading div {
			margin-top: -18px;
			font-size: 15px;
		}
		.panel-heading div span{
			margin-left:5px;
		}
		.panel-body{
			display: none;
		}
		.table{
			font-family: Arial, Helvetica, sans-serif;
			font-weight: bold;
		}
		

</style> -->

<div class="container">
    	<div class="row">
			<div class="col-md-10 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title steelblue-color">FICHA TÉCNICA DO SEU GERADOR</h3>
					</div>
					<table class="table table-hover table-responsive steelblue-color" id="dev-table">
						<tbody>
							<tr>
								<td>Potência instalada mínima do projeto para suprir a demanda esperada (em KWp) </td>
								<td><?php echo $potenciaNecessaria;?></td>
							</tr>
							<tr>
								<td>O valor do projeto ficará entre (a depender dos detalhes a serem confirmados sobre o projeto)</td>
								<td>R$ <?php echo number_format($valorMinimoProjeto,2,',','.');?> a R$ <?php echo number_format($valorMaximoProjeto,2,',','.');?></td>
							</tr>
							<tr>
								<td>Número de painéis fotovoltaicos</td>
								<td><?php echo round($numeroPaineis);?> de 315Wp</td>
							</tr>
							<tr>
								<td>Peso médio do sistema por metro quadrado de superfície</td>
								<td>17 kg/m²</td>
							</tr>
							<tr>
								<td>Área mínima necessária para instalar o sistema</td>
								<td><?php echo $areaMinima;?> em m²</td>
							</tr>
							<tr>
								<td>Custo do kwh produzido ao longo de 25 anos (tempo de duração do projeto) em R$</td>
								<td>R$ <?php echo number_format($custoDoKwhProduzido,2,',','.');?> KWh gerado</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<!--<button type="button" class="btn btn-primary">Imprimir</button>-->
				<button type="button" class="btn btn-orange orange-hover submit" onclick="window.location='simulador.php'">Calcular Novamente</button>
			</div>
		</div>
	</div>




             
  
 