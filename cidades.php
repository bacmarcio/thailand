<?php include "includes.php";
$id = '';
if(isset($_GET['uf'])){
    if(empty($_GET['uf'])){
        header('Location: simulador.php');
    }else{
        $id = $_GET['uf'];
        
    }
}
$Chamacidade = $cidades->rsDados($id);
//$cidades->selectCidades('', $_GET['id_estado'], 'id_cidade[]', $_GET['id_cidade']);
?>
 <select name="cidade" id="cod_cidades"  class="form-control" required>
    <?php foreach($Chamacidade as $cidade) {?>
		<option value="<?php echo $cidade->nome?>" <?php //if($cidade->id == $selecionado) { echo 'selected="selected"'; } ?>><?php echo $cidade->nome;?></option>
	<?php }?>
</select>