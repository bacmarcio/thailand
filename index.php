<?php 
session_start();
include "includes.php";
$puxaSobre = $sobre->rsDados();
$puxaCatTailandia = $tailandia->rsCatServicos();
$puxaTailandia = $tailandia->rsDados();
$puxaBrasilTailandia = $brasilTailandia->rsDados();
$puxaServicos = $servicos->rsDados();
$puxaEventos = $eventos->rsDados();



include "header.php";
?>
<!--====== HEADER PART ENDS ======-->

<!--====== trENDING NEWS PART START ======-->

<section class="trending-news-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">


                <div class="row">
                <?php foreach ($puxaServicos as $itemServicos) {
                    
                    if($_SESSION['lang']=== 'en'){
                        $titulo = $itemServicos->titulo_en;
                    }
                    elseif($_SESSION['lang']==='th') {
                        $titulo = $itemServicos->titulo_th;
                    }
                    else
                    {
                        $titulo = $itemServicos->titulo;
                    }
                    
                    ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="trending-news-post-items">
                            
                            <div class="gallery_item">
                                <div class="gallery_item_thumb">
                                    <img class="icon-service" src="<?php echo SITE_URL?>/img/<?php echo $itemServicos->foto?>" alt="gallery">
                                    <!-- <div class="icon"><i class="fas fa-bolt"></i></div> -->
                                </div>
                                <div class="gallery_item_content">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#"><?php echo $lang['SAIBA_MAIS']?></a>
                                        </div>
                                        
                                    </div>
                                    <h4 class="title"><a href="<?php echo SITE_URL?>/servico-consular/<?php echo $itemServicos->url_amigavel?>"><?php echo $titulo?></a>
                                    </h4>
                                </div>
                            </div>
                            
                            
                        </div>
                           
                        
                    </div>
                    <?php }?>
                    
                </div>
            </div>
            <div class="col-lg-4">


                <div class="Categories-post mt-40">
                    <div class="section-title d-flex justify-content-between align-items-center">
                        <h3 class="title"><?php echo $lang['EVENTOS']?></h3>
                        <!-- <a href="#">ALL SEE</a> -->
                    </div>
                    <div class="Categories-item">
                   <?php foreach ($puxaEventos as $itemEvento) {
                    
                    if($_SESSION['lang']=== 'en'){
                        $titulo = $itemEvento->titulo_en;
                    }
                    elseif($_SESSION['lang']==='th') {
                        $titulo = $itemEvento->titulo_th;
                    }
                    else
                    {
                        $titulo = $itemEvento->titulo;
                    }
                    
                    ?>
                       
                    <div class="item">
                            <img src="<?php echo SITE_URL?>/img/<?php echo $itemEvento->foto;?>" alt="categories">
                            <div class="Categories-content">
                                <a href="<?php echo SITE_URL?>/<?php echo $itemEvento->url_amigavel?>">
                                    <span><?php echo $titulo;?></span>
                                    <img src="<?php echo SITE_URL?>/images/arrow.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <?php }?>

                        <!-- <div class="item">
                            <img src="<?php echo SITE_URL?>/images/categories-2.jpg" alt="categories">
                            <div class="Categories-content">
                                <a href="#">
                                    <span>Entertainment</span>
                                    <img src="<?php echo SITE_URL?>/images/arrow.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo SITE_URL?>/images/categories-3.jpg" alt="categories">
                            <div class="Categories-content">
                                <a href="#">
                                    <span>Financial</span>
                                    <img src="<?php echo SITE_URL?>/images/arrow.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo SITE_URL?>/images/categories-4.jpg" alt="categories">
                            <div class="Categories-content">
                                <a href="#">
                                    <span>Business</span>
                                    <img src="<?php echo SITE_URL?>/images/arrow.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo SITE_URL?>/images/categories-5.jpg" alt="categories">
                            <div class="Categories-content">
                                <a href="#">
                                    <span>Scientists</span>
                                    <img src="<?php echo SITE_URL?>/images/arrow.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo SITE_URL?>/images/categories-6.jpg" alt="categories">
                            <div class="Categories-content">
                                <a href="#">
                                    <span>International’s</span>
                                    <img src="<?php echo SITE_URL?>/images/arrow.svg" alt="">
                                </a>
                            </div>
                        </div> -->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php include "footer.php";?>
