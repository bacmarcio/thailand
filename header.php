<?php 
$headerSobre = $sobre->rsDados();
$headerServicos = $servicos->rsDados(1);
$puxaCatTailandia = $tailandia->rsCatServicos();
$headerTailandia = $tailandia->rsDados();
$headerBrasilTailandia = $brasilTailandia->rsDados();
?>
<!doctype html>
<html lang="pt-br">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title><?php echo $lang['PARA_EMBAIXADA']?></title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo SITE_URL?>/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo SITE_URL?>/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="<?php echo SITE_URL?>/css/font-awesome.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?php echo SITE_URL?>/css/magnific-popup.css">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="<?php echo SITE_URL?>/css/nice-select.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?php echo SITE_URL?>/css/slick.css">

    <!--====== stellarnav css ======-->
    <link rel="stylesheet" href="<?php echo SITE_URL?>/css/stellarnav.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?php echo SITE_URL?>/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo SITE_URL?>/css/style.css">
    <?php if(isset($_SESSION['lang']) && $_SESSION['lang']=='th'){?>
    <link rel="stylesheet" href="<?php echo SITE_URL?>/css/thai.css">   
    <?php }?>


</head>

<body class="home-1-bg">

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div>
            <div class="nb-spinner"></div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="header-topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <!-- <div class="topbar-trending">
                            <span>trending</span>
                            <div class="trending-slider">
                                <div class="trending-item">
                                    <p>Top 10 Best Movies of 2018 So Far: Great Movies To Watch Now </p>
                                </div>
                                <div class="trending-item">
                                    <p>Top 10 Best Movies of 2018 So Far: Great Movies To Watch Now </p>
                                </div>
                                <div class="trending-item">
                                    <p>Top 10 Best Movies of 2018 So Far: Great Movies To Watch Now </p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-4">
                        <div class="topbar-social d-flex align-items-center">
                            <!-- <p>Thursday, March 26, 2020</p> -->
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-centerbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="logo">
                            <a href="<?php echo SITE_URL?>/">
                                <img src="<?php echo SITE_URL?>/images/logo-p.png" width="100" alt="">
                            </a>
                            <h2 class="header-text-logo"><?php echo $lang['PARA_EMBAIXADA']?></h2>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="header-menubar">
            <div class="container">
                <div class="row align-items-center" style="margin-right: -25px !important; margin-left: -25px !important;">
                    <div class="col-lg-11 col-sm-3 col-11">
                        <div class="header-menu">
                            <div class="stellarnav">
                                <ul>
                                    <li><a class="active" href="<?php echo SITE_URL?>/"><?php echo $lang['INICIO']?></a>

                                    </li>
                                    <li><a href="#"><?php echo $lang['SOBRE_EMBAIXADA']?></a>
                                        <ul>
                                            <?php foreach ($headerSobre as $itemSobre) { 
                                                if($_SESSION['lang']=== 'en'){
                                                    $titulo = $itemSobre->titulo_en;
                                                }
                                                elseif($_SESSION['lang']==='th') {
                                                    $titulo = $itemSobre->titulo_th;
                                                }
                                                else
                                                {
                                                    $titulo = $itemSobre->titulo;
                                                }
                                                ?>
                                                <li>
                                                    <a href="<?php echo SITE_URL?>/sobre-a-embaixada/<?php echo $itemSobre->url_amigavel?>"><?php echo $titulo?></a>
                                                </li>
                                            <?php }?>       
                                        </ul>
                                    </li>
                                    <li><a href=""><?php echo $lang['SOBRE_TAILANDIA']?></a>

                                        <ul>
                                        <?php foreach($puxaCatTailandia as $itemCat) { 
                                                $puxaTailandiaComCat = $tailandia->rsDados('','','',$itemCat->id);
                                                print_r($puxaTailandiaComCat);
                                                if($_SESSION['lang']=== 'en')
                                                {
                                                    $cat = $itemCat->nome_en;
                                                    
                                                    if(isset($puxaTailandiaComCat->titulo_en) && !empty($puxaTailandiaComCat->titulo_en))
                                                    { $tituloCom = $puxaTailandiaComCat->titulo_en;}
                                                }
                                                elseif($_SESSION['lang']==='th') 
                                                {
                                                    $cat = $itemCat->nome_th;
                                                    if(isset($puxaTailandiaComCat->titulo_th) && !empty($puxaTailandiaComCat->titulo_th))
                                                    { $tituloCom = $puxaTailandiaComCat->titulo_th;}
                                                }
                                                else
                                                {
                                                    $cat = $itemCat->nome;
                                                    if(isset($puxaTailandiaComCat->titulo) && !empty($puxaTailandiaComCat->titulo))
                                                    { $tituloCom = $puxaTailandiaComCat->titulo;}
                                                }
                                            ?>
                                            <li class="has-sub"><a href="#"><?php echo $cat?></a>
                                               
                                            <ul>
                                           
                                                <li>
                                                    <a href="<?php echo SITE_URL?>/tailandia/<?php echo $puxaTailandiaComCat->url_amigavel?>">
                                                    dsdada
                                                    </a>
                                                </li>
                                                    
                                                    
                                                </ul> 
                                                
                                                
                                            </li>
                                            
                                            <?php }?>
                                            <?php $puxaTailandia = $tailandia->rsDados();?>
                                            <?php foreach ($puxaTailandia as $itemTailandia) { 

                                                    if($_SESSION['lang']=== 'en'){
                                                        
                                                        $tituloSem = $itemTailandia->titulo_en;
                                                    }
                                                    elseif($_SESSION['lang']==='th') {
                                                        
                                                        $tituloSem = $itemTailandia->titulo_th;
                                                    }
                                                    else
                                                    {
                                                        
                                                        $tituloSem = $itemTailandia->titulo;
                                                    }
                                                
                                                if($itemTailandia->id_cat == ""){ ?>
                                                
                                           
                                            <li class=""><a href="<?php echo SITE_URL?>/tailandia/<?php echo $itemTailandia->url_amigavel?>"><?php echo $tituloSem?></a>
                                            <?php }?>
                                            <?php }?>
                                        </ul>
                                        
                                    </li>




                                    <li><a href=""><?php echo $lang['TAILANDIA_BRASIL']?></a>
                                        <ul>
                                            <?php foreach ($headerBrasilTailandia as $itemBrasilTalilandia) {?>
                                               
                                            <li><a href="<?php echo SITE_URL?>/brasil-tailandia/<?php echo $itemBrasilTalilandia->url_amigavel?>"><?php echo $itemBrasilTalilandia->titulo?></a>
                                            <?php }?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo SITE_URL?>/servico-consular/<?php echo $headerServicos->url_amigavel?>"><?php echo $lang['SERVICO_CONSULAR']?></a></li>
                                    <li><a href="#"><?php echo $lang['MULTIMIDIA']?></a></li>
                                    <li><a href="#"><?php echo $lang['CONTATO']?></a></li>
                                </ul>
                            </div><!-- .stellarnav -->
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-9 col-1">
                        <div class="header-menu-rightbar">
                            <!-- <div class="header-menu-search">
                                <ul>
                                    <li><a href="#"><i class="fal fa-search"></i></a></li>
                                    <li><a href="#"><i class="fal fa-user-circle"></i></a></li>
                                </ul>
                            </div> -->
                            <div class="nice-select-item">
                                <select id="lang">
                                    <option value="<?php echo SITE_URL?>/home/pt" <?php if($_SESSION['lang']== 'pt'){echo "selected";}?> >Português</option>
                                    <option value="<?php echo SITE_URL?>/home/en" <?php if($_SESSION['lang']== 'en'){echo "selected";}?> >English</option>
                                    <option value="<?php echo SITE_URL?>/home/th" <?php if($_SESSION['lang']== 'th'){echo "selected";}?> >ภาษาไทย</option>

                                </select>
                            </div>
                            <!-- <div class="header-temperature">
                                <div class="icon">
                                    <img src="images/temperature-icon.svg" alt="">
                                </div>
                                <div class="temperature-content text-center">
                                    <h5 class="title">13 <sup>0<sub>C</sub></sup></h5>
                                    <p>San Francisco</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>