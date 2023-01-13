<?php include "includes.php";
	$puxaSliders = $banners->rsDados();
	$texto  = $textos->rsDados(13);
	$texto1 = $textos->rsDados(14);
	$texto2 = $textos->rsDados(15);
	$texto3 = $textos->rsDados(16);
	$texto4 = $textos->rsDados(17);
	$texto5 = $textos->rsDados(18);
	$puxaBlogs = $blogs->rsDados('', 'rand()', '3');
?>
<!DOCTYPE html>
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<meta name="description"
		content="<?php if(isset($metastags->meta_description_principal) && !empty($metastags->meta_description_principal)){echo $metastags->meta_description_principal;}?>" />
	<meta name="keywords"
		content="<?php if(isset($metastags->meta_keywords_principal) && !empty($metastags->meta_keywords_principal)){echo $metastags->meta_keywords_principal;}?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- SITE TITLE -->
	<title>
		<?php if(isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)){echo $metastags->meta_title_principal;}?>
	</title>
	<!-- FAVICON AND TOUCH ICONS  -->
	<?php if(isset($infoSistema->favicon) && !empty($infoSistema->favicon)){?>
	<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
	<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
	<?php }?>
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
	<!-- BOOTSTRAP CSS -->
	<link href="<?php echo SITE_URL;?>/css/bootstrap.min.css" rel="stylesheet">
	<!-- FONT ICONS -->
	<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet"
		crossorigin="anonymous">
	<link href="<?php echo SITE_URL;?>/css/flaticon.css" rel="stylesheet">
	<!-- PLUGINS STYLESHEET -->
	<link href="<?php echo SITE_URL;?>/css/menu.css" rel="stylesheet">
	<link href="<?php echo SITE_URL;?>/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet" id="effect">
	<link href="<?php echo SITE_URL;?>/css/magnific-popup.css" rel="stylesheet">
	<link href="<?php echo SITE_URL;?>/css/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo SITE_URL;?>/css/owl.theme.default.min.css" rel="stylesheet">
	<link href="<?php echo SITE_URL;?>/css/animate.css" rel="stylesheet">
	<link href="<?php echo SITE_URL;?>/css/jquery.datetimepicker.min.css" rel="stylesheet">
	<!-- TEMPLATE CSS -->
	<link href="<?php echo SITE_URL;?>/css/style.css" rel="stylesheet">
	<!-- RESPONSIVE CSS -->
	<link href="<?php echo SITE_URL;?>/css/responsive.css" rel="stylesheet">
</head>

<body>

	<!-- PAGE CONTENT
		============================================= -->
	<div id="page" class="page">
		<!-- HEADER
			============================================= -->
		<?php include "header.php" ?>
		<!-- END HEADER -->
		<!-- HERO-11
			============================================= -->
		<section id="hero-2" class="hero-section division">
				<!-- SLIDER -->
				<div class="slider blue-nav">
			    	<ul class="slides">
                        <?php foreach($puxaSliders as $banner){?>
				     	<!-- SLIDE #1 -->
				      	<li id="slide-1" class="active" style="opacity: 1; transform: translateX(0px) translateY(0px);">
					        <!-- Background Image -->
				        	<img src="<?php echo SITE_URL;?>/img/<?php echo $banner->foto;?>" class="d-none d-md-block d-lg-block" >
				        	<img src="<?php echo SITE_URL;?>/img/<?php echo $banner->foto_mobile;?>" class="d-block d-sm-none" >
							<!-- Image Caption -->
		       				<div class="caption d-flex align-items-center left-align" style="opacity: 1; transform: translateX(0px) translateY(0px);">
		       					<div class="container">
		       						<div class="row">
		       							<div class="col-md-9 col-lg-7">
		       								<div class="caption-txt">
						       					<!-- Title -->
						       					<h2 class="white-color" style="line-height: 1;">
						       					    <?php echo $banner->titulo1;?></h2>
						       					<h3 class="white-color" ><?php echo $banner->titulo2;?></h3>
												<!-- Button -->
												<?php if(isset($banner->tem_botao) && $banner->tem_botao == 'S'){?>
													<a href="<?php echo $banner->link_botao;?>" class="btn btn-pink pink-hover"><?php echo $banner->nome_botao;?></a>
											<?php }?>

											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

					    </li>	<!-- END SLIDE #1 -->
                        <?php }?>
				    </ul>
			  	<!--<ul class="indicators"><li class="indicator-item active"></li><li class="indicator-item"></li><li class="indicator-item"></li></ul></div>	-->
			  	<!-- END SLIDER -->
		</section>	
		
		<!-- SERVICES-2
			============================================= -->
		<section id="services-2" class="wide-140 services-section division">
			<div class="container">
				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-lg-10 offset-lg-1 section-title">

						<!-- Title 	-->
						<h3 class="h3-md steelblue-color"><?php echo $texto->titulo?></h3>

						<!-- Text -->
						<p><?php echo $texto->texto?></p>

					</div>
				</div>

				<div class="row">
					<!-- SERVICE BOX #1 -->
					<div class="col-sm-6 col-lg-4">
						<div class="sbox-2 wow fadeInUp" data-wow-delay="0.4s">
							<a >

								<!-- Icon  -->
								<div class="sbox-2-icon icon-xl">
								<!--	<i class="fas fa-sun"></i> -->
									<img src="<?php echo SITE_URL;?>/images/1.png" width="100">
								</div>

								<!-- Title -->
								<h5 class="h5-sm sbox-2-title steelblue-color">Recurso Renovável e Alternativo</h5>

							</a>
						</div>
					</div>
					<!-- SERVICE BOX #2 -->
					<div class="col-sm-6 col-lg-4">
						<div class="sbox-2 wow fadeInUp" data-wow-delay="0.6s">
							<a >

								<!-- Icon  -->
								<div class="sbox-2-icon icon-xl">
								<!--	<i class="fas fa-solar-panel"></i> -->
									<img src="<?php echo SITE_URL;?>/images/2.png" width="100">
								</div>

								<!-- Title -->
								<h5 class="h5-sm sbox-2-title steelblue-color">Economia Sem Abrir Mão do Conforto</h5>

							</a>
						</div>
					</div>
					<!-- SERVICE BOX #3 -->
					<div class="col-sm-6 col-lg-4">
						<div class="sbox-2 wow fadeInUp" data-wow-delay="0.8s">
							<a >

								<!-- Icon  -->
								<div class="sbox-2-icon icon-xl">
								<!--	<i class="far fa-lightbulb"></i> -->
								<img src="<?php echo SITE_URL;?>/images/3.png" width="100">
								</div>

								<!-- Title -->
								<h5 class="h5-sm sbox-2-title steelblue-color">Pouca Manutenção e Longa Vida Útil</h5>

							</a>
						</div>
					</div>
				</div> 
					<div class="row">
					<!-- SERVICE BOX #1 -->
					<div class="col-sm-6 col-lg-4">
						<div class="sbox-2 wow fadeInUp" data-wow-delay="0.4s">
							<a >

								<!-- Icon  -->
								<div class="sbox-2-icon icon-xl">
								<!--	<i class="fas fa-sun"></i> -->
									<img src="<?php echo SITE_URL;?>/images/4.png" width="100">
								</div>

								<!-- Title -->
								<h5 class="h5-sm sbox-2-title steelblue-color">Valoriza Seu Imóvel e a Sua Marca</h5>

							</a>
						</div>
					</div>
					<!-- SERVICE BOX #2 -->
					<div class="col-sm-6 col-lg-4">
						<div class="sbox-2 wow fadeInUp" data-wow-delay="0.6s">
							<a >

								<!-- Icon  -->
								<div class="sbox-2-icon icon-xl">
								<!--	<i class="fas fa-solar-panel"></i> -->
								<img src="<?php echo SITE_URL;?>/images/5.png" width="100">
								</div>

								<!-- Title -->
								<h5 class="h5-sm sbox-2-title steelblue-color">Instalação Rápida e Sem Sujeira</h5>

							</a>
						</div>
					</div>
					<!-- SERVICE BOX #3 -->
					<div class="col-sm-6 col-lg-4">
						<div class="sbox-2 wow fadeInUp" data-wow-delay="0.8s">
							<a >

								<!-- Icon  -->
								<div class="sbox-2-icon icon-xl">
								<!--	<i class="far fa-lightbulb"></i> -->
									<img src="<?php echo SITE_URL;?>/images/6.png" width="100">
								</div>

								<!-- Title -->
								<h5 class="h5-sm sbox-2-title steelblue-color">Energia Limpa e Sustentável</h5>

							</a>
						</div>
					</div>
				</div> 
			</div> <!-- End container -->
		</section> <!-- END SERVICES-2 -->

		<!-- BANNER-2
			============================================= -->
		<section id="banner-2" class="pt-80 banner-section division">
			<div class="bg-scroll bg-inner bg-image division">
				<div class="container white-color">
					<div class="row d-flex align-items-center">
						<!-- CALL TO ACTION IMAGE -->
						<div class="col-lg-5">
							<div class="banner-2-img">
								<img class="img-fluid" src="images/banner.jpg" alt="banner-image" />
							</div>
						</div>
						<!-- BANNER TEXT -->
						<div class="col-lg-6 offset-lg-1">
							<div class="banner-txt pc-30 wow fadeInUp" data-wow-delay="0.4s" >
								<!-- Section ID -->
								<!-- Title  -->
								<h3 class="h3-lg"><?php echo $texto4->titulo?></h3>
								<!-- Text -->
								<p><?php echo $texto4->texto?>
								</p>
								<!-- Button -->
								<a href="sobre" class="btn btn-tra-white blue-hover">Saiba Mais</a> 
							</div>
						</div> <!-- END BANNER TEXT -->
					</div> <!-- End row -->
				</div> <!-- End container -->
			</div> <!-- End Inner Background -->
		</section> <!-- END BANNER-2 -->


		<!-- STATISTIC-3
			============================================= -->
		<div id="statistic-3" class="wide-60 statistic-section division">
			<div class="container">
				<div class="row d-flex align-items-center">
					<!-- TEXT BLOCK -->
					<div class="col-lg-6">
						<div class="txt-block pc-30 mb-40 wow fadeInUp" data-wow-delay="0.4s">
							<!-- Section ID -->
							
							<!-- Title -->
							<h3 class="h3-md steelblue-color"><?php echo $texto1->titulo?></h3>
							<!-- Text -->
							<p><?php echo $texto1->texto?>
							</p>
							<!-- Statistic Holder -->
							<div class="statistic-holder">
								<div class="row">
									<!-- STATISTIC BLOCK #1 -->
									<div class="col-sm-4">
										<div class="statistic-block icon-xl">
											<!-- Icon  -->
										<!--	<i class="fas fa-sun"></i>  -->
											<img src="<?php echo SITE_URL;?>/images/8.png" width="100">
											<!-- Text -->
										<!--	<h5 class="statistic-number steelblue-color">9,<span
													class="count-element">632</span></h5> -->
											<p>Geração de Energia</p>
										</div>
									</div>

									<!-- STATISTIC BLOCK #2 -->
									<div class="col-sm-4">
										<div class="statistic-block icon-xl">

											<!-- Icon  -->
										<!--	<i class="fas fa-solar-panel"></i>  -->
											<img src="<?php echo SITE_URL;?>/images/9.png" width="100">

											<!-- Text -->
										<!--	<h5 class="statistic-number steelblue-color"><span
													class="count-element">178</span></h5> -->
											<p>Estrutura</p>

										</div>
									</div>

									<!-- STATISTIC BLOCK #3 -->
									<div class="col-sm-4">
										<div class="statistic-block icon-xl">

											<!-- Icon  -->
										<!--	<i class="far fa-lightbulb"></i>  -->
											<img src="<?php echo SITE_URL;?>/images/7.png" width="100">

											<!-- Text -->
										<!--	<h5 class="statistic-number steelblue-color"><span
													class="count-element">864</span></h5> -->
											<p>Economia</p>

										</div>
									</div>

								</div>
							</div> <!-- End Statistic Holder -->


						</div>
					</div> <!-- END TEXT BLOCK -->


					<!-- STATISTIC IMAGE -->
					<div class="col-lg-6">
						<div class="statistic-img text-center mb-40 wow fadeInUp" data-wow-delay="0.6s">
							<img class="img-fluid" src="img/<?php echo $texto1->foto?>" alt="statistic-image" />
						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- End container -->
		</div> <!-- END STATISTIC-3 -->




		




		<!-- BANNER-6
			============================================= -->
		<section id="banner-6" class=" banner-section division">
			<div class="container white-color">
				<div class="row d-flex align-items-center">


					<!-- BANNER TEXT -->
					<div class="col-lg-9 icon-xl">

						<!-- Icon -->
					<!--	<span class="flaticon-072-hospital-5"></span> -->
						<img src="<?php echo SITE_URL;?>/images/icon-simulador.png" width="80" class="icone-simulador">

						<!-- Text -->
						<div class="banner-txt">
							<h4 class="h4-lg"><?php echo $texto2->titulo?></h4>
							<?php echo $texto2->texto?>
						</div>

					</div>


					<!-- BANNER BUTTON -->
					<div class="col-lg-3 ">
						<div class="banner-btn text-right">
							<a href="simulador" class="btn btn-md btn-orange btn-tra-white blue-hover">Simular</a>
						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END BANNER-6 -->

		<section id="blog-1" class=" wide-60 blog-section division">
			<div class="container">
				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-lg-10 offset-lg-1 section-title">
						<h3 class="h3-md steelblue-color">
							<?php echo $texto5->titulo;?>
						</h3>
						<p>
							<?php echo $texto5->texto;?>
						</p>
					</div>
				</div>

				<!-- BLOG POSTS HOLDER -->
				<div class="row">
					<!-- BLOG POST #1 -->
					<?php foreach($puxaBlogs as $blog){?>
					<div class="col-lg-4">
						<div class="blog-post wow fadeInUp" data-wow-delay="0.4s">
							<!-- BLOG POST IMAGE -->
							<div class="blog-post-img1">
								<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $blog->foto;?>"
									alt="<?php echo $blog->descricao_imagem;?>"
									title="<?php echo $blog->legenda_imagem;?>" />
							</div>

							<!-- BLOG POST TITLE -->
							<div class="blog-post-txt">
								<!-- Post Title -->
								<h5 class="h5 steelblue-color">
									<a href="<?php echo SITE_URL;?>/blog/<?php echo $blog->url_amigavel;?>">
										<?php echo $blog->titulo;?>
									</a>
								</h5>
								<p>
									<?php echo $blog->breve;?>
								</p>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="all-posts-btn mb-40 wow fadeInUp" data-wow-delay="1s">
							<a href="<?php echo SITE_URL;?>/blog" class="btn btn-orange orange-hover">Ver Mais</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End container -->
		</section>


		<!-- FOOTER-1
			============================================= -->
		<?php include "footer.php"?>
		<!-- END FOOTER-1 -->




	</div> <!-- END PAGE CONTENT -->




	<!-- EXTERNAL SCRIPTS
		============================================= -->
	<script src="<?php echo SITE_URL;?>/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/bootstrap.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/modernizr.custom.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.easing.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.appear.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.stellar.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/menu.js"></script>
	<script src="<?php echo SITE_URL;?>/js/sticky.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.scrollto.js"></script>
	<script src="<?php echo SITE_URL;?>/js/materialize.js"></script>
	<script src="<?php echo SITE_URL;?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/isotope.pkgd.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/hero-form.js"></script>
	<script src="<?php echo SITE_URL;?>/js/contact-form.js"></script>
	<script src="<?php echo SITE_URL;?>/js/comment-form.js"></script>
	<script src="<?php echo SITE_URL;?>/js/appointment-form.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.datetimepicker.full.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.validate.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo SITE_URL;?>/js/wow.js"></script>

	<!-- Custom Script -->
	<script src="<?php echo SITE_URL;?>/js/custom.js"></script>

	<script>
		new WOW().init();
	</script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

	<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
	<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		-->
	<!-- End Google Analytics -->

</body>



</html>