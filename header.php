<!doctype html>
<html lang="pt-br">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Embaixada Real da Tailândia em Brasília</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="./css/magnific-popup.css">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="./css/nice-select.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="./css/slick.css">

    <!--====== stellarnav css ======-->
    <link rel="stylesheet" href="./css/stellarnav.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="./css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="./css/style.css">


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
                            <a href="index.html">
                                <img src="./images/logo-p.png" width="100" alt="">
                            </a>
                            <h2 class="header-text-logo">Embaixada Real da Tailandia</h2>

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
                                    <li><a class="active" href="">Inicio</a>

                                    </li>
                                    <li><a href="#">Sobre a Embaixada</a>
                                        <ul>
                                            <?php foreach ($puxaSobre as $itemSobre) { ?>
                                                <li>
                                                    <a href="<?php echo SITE_URL?>/<?php echo $itemSobre->url_amigavel?>"><?php echo $itemSobre->titulo?></a>
                                                </li>
                                            <?php }?>       
                                        </ul>
                                    </li>
                                    <li><a href="">Sobre a Tailândia</a>

                                        <ul>
                                        <?php foreach($puxaCatTailandia as $itemCat) { 
                                            $puxaTailandiaComCat = $tailandia->rsDados('','','',$itemCat->id);?>
                                            <li class="has-sub"><a href="#"><?php echo $itemCat->nome?></a>
                                               
                                            <ul>
                                            <?php if(isset($puxaTailandiaComCat[0]->id)){?>
                                                    <li><a href="<?php echo SITE_URL?>/<?php echo $puxaTailandiaComCat[0]->url_amigavel?>"><?php echo $puxaTailandiaComCat[0]->titulo?></a>
                                                    </li>
                                                    <?php }?>
                                                    
                                                </ul> 
                                                
                                                
                                            </li>
                                            
                                            <?php }?>
                                            <?php $puxaTailandia = $tailandia->rsDados();?>
                                            <?php foreach ($puxaTailandia as $itemTailandia) { 
                                                if($itemTailandia->id_cat == ""){ 
                                            ?>
                                                
                                           
                                            <li class=""><a href="<?php echo SITE_URL?>/<?php echo $itemTailandia->url_amigavel?>"><?php echo $itemTailandia->titulo?></a>
                                            <?php }?>
                                            <?php }?>
                                        </ul>
                                        
                                    </li>
                                    <li><a href="">Tailandia e Brasil </a>
                                        <ul>
                                            <?php foreach ($puxaBrasilTailandia as $itemBrasilTalilandia) {?>
                                               
                                            <li><a href="<?php echo SITE_URL?>/<?php echo $itemBrasilTalilandia->url_amigavel?>"><?php echo $itemBrasilTalilandia->titulo?></a>
                                            <?php }?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="">Serviços Consular</a></li>
                                    <li><a href="">Multimidia</a></li>
                                    <li><a href="contact.html">Fale Conosco</a></li>
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
                                <select>
                                    <option value="1">Português</option>
                                    <option value="2">English</option>
                                    <option value="3">ภาษาไทย</option>

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