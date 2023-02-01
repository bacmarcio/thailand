<?php 
session_start();
include "includes.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: /');
    }else{
        $id = $_GET['id'];        
    }
}

$descEmbaixada = $sobre->rsDados('', '', '', '', '', $id);
$listaEmbaixada = $sobre->rsDados('', '', '', '', $descEmbaixada[0]->id);

if($_SESSION['lang']=== 'en'){
    $tituloEmbaixada = $descEmbaixada[0]->titulo_en;
    $descricaoEmbaixada = $descEmbaixada[0]->descricao_en;
}
elseif($_SESSION['lang']==='th') {
    $tituloEmbaixada = $descEmbaixada[0]->titulo_th;
    $descricaoEmbaixada = $descEmbaixada[0]->descricao_th;
}
else
{
    $tituloEmbaixada = $descEmbaixada[0]->titulo;
    $descricaoEmbaixada = $descEmbaixada[0]->descricao;
}


include "header.php";
?>
<!--====== HEADER PART ENDS ======-->

<!--====== trENDING NEWS PART START ======-->

<section class="trending-news-area">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
                    <div class="about-author-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo SITE_URL?>/"><?php echo $lang['INICIO']?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $lang['SOBRE_EMBAIXADA']?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="post-layout-top-content">
                        <div class="post-content">
                            <h3 class="title"><?php echo $tituloEmbaixada?></h3>
                        </div>
                        
                        <div class="post-text mt-30">
                            <?php echo $descricaoEmbaixada?>
                        </div>
                    </div>
                </div>
            <div class="col-lg-4">


                <div class="Categories-post mt-40">
                    <div class="section-title d-flex justify-content-between align-items-center">
                        <h3 class="title"><?php echo $lang['SOBRE_EMBAIXADA']?></h3>
                        <!-- <a href="#">ALL SEE</a> -->
                    </div>
                    <div class="Categories-item">
                   <?php foreach ($listaEmbaixada as $itemEmbaixada) {
                    
                    if($_SESSION['lang']=== 'en'){
                        $titulo = $itemEmbaixada->titulo_en;
                    }
                    elseif($_SESSION['lang']==='th') {
                        $titulo = $itemEmbaixada->titulo_th;
                    }
                    else
                    {
                        $titulo = $itemEmbaixada->titulo;
                    }
                    
                    ?>
                       
                    <div class="item">
                            <img src="<?php echo SITE_URL?>/images/tailandes.jpg" alt="categories">
                            <div class="Categories-content">
                                <a href="<?php echo SITE_URL?>/sobre-a-embaixada/<?php echo $itemEmbaixada->url_amigavel?>">
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