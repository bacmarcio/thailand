<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: brasil-tailandia.php');
    }else{
        $id = $_GET['id'];        
    }
}
$brasilTailandia->editar();
$editaBrasilTailandia = $brasilTailandia->rsDados($id);
$puxaCategorias = $brasilTailandia->rsCatServicos();

?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Capital Prime">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title><?php echo $lang['PAINEL'].' - '.$lang['PARA_EMBAIXADA']?></title>
    <link href="dist/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
       <?php include "header.php";?>
       <?php include "inc-menu-lateral.php";?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Item</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="tailandia.php" class="text-muted">Sobre a Tail??ndia</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-body">
                                    <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Imagem </label>
                                                <input class="form-control" type="file" name="foto"  />
                                                <div class="clearfix">&nbsp;</div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Categoria</label>
                                            <select name="id_cat" id="" class="form-control">
                                                <?php foreach($puxaCategorias as $itemCategoria){?>
                                                <option value="<?php echo $itemCategoria->id;?>"<?php if($itemCategoria->id === $editaBrasilTailandia->id){echo "selected";}?>><?php echo $itemCategoria->nome;?></option>
                                                <?php }?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">T??tulo em Portugu??s</label>
                                                    <input type="text" class="form-control" name="titulo" value="<?php if(isset($editaBrasilTailandia->titulo) && !empty($editaBrasilTailandia->titulo)){ echo $editaBrasilTailandia->titulo;}?>" >
                                                </div>
                                            </div>
                                           
                                        </div>
                                  
                                      
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Descri????o em Portugu??s</label>
                                                   <textarea name="descricao" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaBrasilTailandia->descricao) && !empty($editaBrasilTailandia->descricao)){ echo $editaBrasilTailandia->descricao;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>

                                        <div class="row">
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Title in English</label>
                                                    <input type="text" class="form-control" name="titulo_en" value="<?php if(isset($editaBrasilTailandia->titulo_en) && !empty($editaBrasilTailandia->titulo_en)){ echo $editaBrasilTailandia->titulo_en;}?>" >
                                                </div>
                                            </div>
                                           
                                        </div>
                                  
                                      
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Description in English</label>
                                                   <textarea name="descricao_en" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaBrasilTailandia->descricao_en) && !empty($editaBrasilTailandia->descricao_en)){ echo $editaBrasilTailandia->descricao_en;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>

                                        <div class="row">
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">???????????????????????????????????????????????????</label>
                                                    <input type="text" class="form-control" name="titulo_th" value="<?php if(isset($editaBrasilTailandia->titulo_th) && !empty($editaBrasilTailandia->titulo_th)){ echo $editaBrasilTailandia->titulo_th;}?>" >
                                                </div>
                                            </div>
                                           
                                        </div>
                                  
                                      
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">?????????????????????????????????????????????????????????</label>
                                                   <textarea name="descricao_th" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaBrasilTailandia->descricao_th) && !empty($editaBrasilTailandia->descricao_th)){ echo $editaBrasilTailandia->descricao_th;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                        <br>
                                        <h4 class="card-title">Metas Tags</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Title</label>
                                                    <input type="text" class="form-control" name="meta_title" value="<?php if(isset($editaBrasilTailandia->meta_title) && !empty($editaBrasilTailandia->meta_title)){ echo $editaBrasilTailandia->meta_title;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords" value="<?php if(isset($editaBrasilTailandia->meta_keywords) && !empty($editaBrasilTailandia->meta_keywords)){ echo $editaBrasilTailandia->meta_keywords;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"><?php if(isset($editaBrasilTailandia->meta_description) && !empty($editaBrasilTailandia->meta_description)){ echo $editaBrasilTailandia->meta_description;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                           
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaBrasilTailandia">
                                    <input type="hidden" name="id" value="<?php echo $editaBrasilTailandia->id;?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
           <?php include "footer.php";?>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="vendor/ckeditor/ckeditor.js"></script>
</body>
</html>