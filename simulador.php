<?php include "includes.php";
$texto = $textos->rsDados(19);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#066065" />
    <title>
        <?php if(isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)){echo $metastags->meta_title_contato;}?>
    </title>
    <meta name="description"
        content="<?php if(isset($metastags->meta_description_contato) && !empty($metastags->meta_description_contato)){echo $metastags->meta_description_contato;}?>" />
    <meta name="keywords"
        content="<?php if(isset($metastags->meta_keywords_contato) && !empty($metastags->meta_keywords_contato)){echo $metastags->meta_keywords_contato;}?>">
    <?php if(isset($infoSistema->favicon) && !empty($infoSistema->favicon)){?>
    <link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
    <link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
    <?php }?>
    <meta name="author" content="Adriano Monteiro">
    <link href="<?php echo SITE_URL;?>/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- FONT ICONS -->
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" />
    <link href="<?php echo SITE_URL;?>/css/flaticon.css" rel="stylesheet" />
    <!-- PLUGINS STYLESHEET -->
    <link href="<?php echo SITE_URL;?>/css/menu.css" rel="stylesheet" />
    <link href="<?php echo SITE_URL;?>/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet" id="effect" />
    <link href="<?php echo SITE_URL;?>/css/animate.css" rel="stylesheet" />
    <!-- TEMPLATE CSS -->
    <link href="<?php echo SITE_URL;?>/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE CSS -->
    <link href="<?php echo SITE_URL;?>/css/responsive.css" rel="stylesheet" />
    <?php include "inc-tagmanager-head.php";?>
    <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
</head>

<body>
    <?php include "inc-tagmanager-body.php";?>
    <div id="page" class="page">
        <?php include "header.php";?>
        <!-- CONTACTS-1
			============================================= -->
        <section id="contacts-1" class="wide-60 contacts-section division">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 section-title">
                        <h3 id="contato" class="h3-md steelblue-color"><?php echo $texto->titulo;?></h3>
                        <p><?php echo $texto->texto;?></p>
                    </div>
                </div>
                <div id="janela_Calcular">    
      <div class="col-sm-12">
              <h2 class="text-capitalize steelblue-color">Simulador</h2>
              <div class="about_headline padding_bottom wow fadeIn" >
                 <form class="callus" method="post" action="">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" name="endereco" class="form-control" placeholder="Endereço">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" name="telefone" class="form-control" placeholder="Telefone">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                        
                          <select name="estado" id="cod_estados"  class="form-control" required onChange="AtualizaJanela('cidades.php?uf='+this.value, 'Cidades');">
                            <option value="">Estado</option>
                            <?php $estado = $estados->rsDados('', 'nome ASC');?>
                            <?php foreach($estado as $itemEstados){ ?>
                              <option value="<?php echo $itemEstados->uf?>"><?php echo $itemEstados->nome?></option>
                            <?php }?>
                          </select>
                          
                        </div>
                      </div>
            <div class="col-sm-6">
              <div class="form-group">
                 <span id="janela_Cidades">
                   <select name="cidade" id="cod_cidades"  class="form-control" required>
                      <option value="">-- Escolha um estado --</option>
                   </select>
				          </span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <select name="tipoLigacao" id="tipoLigacao" class="form-control" required>
                  <option value="">Tipo de Ligação</option>
                  <option value="Monofasica">Monofásica</option>
                  <option value="Bifasica">Bifásica</option>
                  <option value="Trifasica">Trifásica</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <select name="tensao" id="" class="form-control" required>
                  <option value="">Tensão em volts</option>
                  <option value="127">127</option>
                  <option value="220">220</option>
                  <option value="380">380</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <select name="tipoConsumidor" class="form-control" required>
                  <option value="">Tipo de Consumidor</option>
                  <option value="Residencial">Residencial</option>
                  <option value="Comercial">Comercial</option>
                  <option value="Industrial">Industrial</option>
                  <option value="Rural">Rural</option>
                </select>
              </div>
            </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <select name="tipoPredio" class="form-control" required>
                    <option value="">Tipo de construção a instalar</option>
                    <option value="Residencia">Residência</option>
                    <option value="Predio Residencial">Prédio Residencial</option>
                    <option value="Propriedade Agricola">Propriedade Agrícola</option>
                  </select>
                </div>
              </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <select name="tipoSuperficie" class="form-control" required>
                      <option value="">Tipo de superfície a instalar</option>
                      <option value="Telhado de Fibrocimento">Telhado de Fibrocimento</option>
                      <option value="Telha de Barro">Telha de Barro</option>
                      <option value="Laje">Laje</option>
                      <option value="Solo">Solo</option>
                    </select>
                  </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" name="consumo" id="consumo" required class="form-control" placeholder="Consumo médio desejado" >               
              </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" id="valor" name="valorFatura" required class="form-control" placeholder="Valor da conta em R$" >               
          </div>
          <button type="button" class="btn btn-orange orange-hover submit" onClick="if(document.getElementById('consumo').value == ''){alert('Favor insira um consumo!');}else{AtualizaJanela('calcular.php?estado='+document.getElementById('cod_estados').value+'&cidade='+document.getElementById('cod_cidades').value+'&consumo='+document.getElementById('consumo').value, 'Calcular');}">Calcular</button>
    </div>
    
        
             <!--<input type="hidden" name="acao" value="calcular">-->
    </div>
    </form>


            </div> <!-- End container -->
        </section> <!-- END CONTACTS-1 -->

        <?php include "footer.php";?>
    </div> <!-- END PAGE CONTENT -->
    <script src="<?php echo SITE_URL;?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo SITE_URL;?>/js/bootstrap.min.js"></script>
    <script src="<?php echo SITE_URL;?>/js/modernizr.custom.js"></script>
    <script src="<?php echo SITE_URL;?>/js/menu.js"></script>
    <script src="<?php echo SITE_URL;?>/js/sticky.js"></script>
    <script src="<?php echo SITE_URL;?>/js/jquery.scrollto.js"></script>
    <script src="<?php echo SITE_URL;?>/js/materialize.js"></script>
    <script src="<?php echo SITE_URL;?>/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo SITE_URL;?>/js/load.js"></script>
    <!-- Custom Script -->
    <script src="<?php echo SITE_URL;?>/js/custom.js"></script>

</body>

</html>