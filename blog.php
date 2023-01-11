<?php 
include "includes.php";
$puxaBlogs = $blogs->rsDados();
$outrosBlog = $blogs->rsDados('', 'rand()', '8');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="theme-color" content="#171515"/>
		<title><?php if(isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)){echo $metastags->meta_title_contato;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_contato) && !empty($metastags->meta_description_contato)){echo $metastags->meta_description_contato;}?>"/>
		<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_contato) && !empty($metastags->meta_keywords_contato)){echo $metastags->meta_keywords_contato;}?>">
    <?php if(isset($infoSistema->favicon) && !empty($infoSistema->favicon)){?>
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
		<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
    <?php }?>
    <meta name="author" content="Adriano Monteiro">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="<?php echo SITE_URL;?>/css/bootstrap.min.css" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">		
		<link href="<?php echo SITE_URL;?>/css/flaticon.css" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="<?php echo SITE_URL;?>/css/menu.css" rel="stylesheet">	
		<link id="effect" href="<?php echo SITE_URL;?>/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
		<link href="<?php echo SITE_URL;?>/css/magnific-popup.css" rel="stylesheet">	
		<link href="<?php echo SITE_URL;?>/css/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo SITE_URL;?>/css/owl.theme.default.min.css" rel="stylesheet">
		<link href="<?php echo SITE_URL;?>/css/animate.css" rel="stylesheet">
		<link href="<?php echo SITE_URL;?>/css/jquery.datetimepicker.min.css" rel="stylesheet">
				
		<!-- TEMPLATE CSS -->
		<link href="<?php echo SITE_URL;?>/css/style.css" rel="stylesheet">
		
		<!-- RESPONSIVE CSS -->
		<link href="<?php echo SITE_URL;?>/css/responsive.css" rel="stylesheet"> 
		<?php include "inc-tagmanager-head.php";?>
	</head>
	<body>
		<?php include "inc-tagmanager-body.php";?>
<!-- 		<div id="loader-wrapper">
			<div id="loader"><div class="loader-inner"></div></div>
		</div> -->
		<div id="page" class="page">
			<?php include "header.php";?>
			<div id="blog-page" class="wide-100 blog-page-section division">
				<div class="container">
				 	<div class="row">


				 		<!-- BLOG POSTS HOLDER -->
				 		<div class="col-lg-8">
				 			<div class="posts-holder pr-30">

								<?php foreach($puxaBlogs as $blog){?>
				 				<div class="blog-post">
			 			 			<div class="blog-post-img">
										<img class="img-fluid" src="<?php echo SITE_URL;?>/img/<?php echo $blog->foto;?>" alt="<?php echo $blog->descricao_imagem;?>" title="<?php echo $blog->legenda_imagem;?>" />	
									</div>
									<div class="blog-post-txt">
										<h5 class="h5-xl steelblue-color"><a href="<?php echo SITE_URL;?>/blog/<?php echo $blog->url_amigavel;?>"><?php echo $blog->titulo;?></a></h5>
										<p><?php echo $blog->breve;?></p>
									</div>
								</div>
								<?php }?>
								<!-- <div class="blog-page-pagination b-top">
									<nav aria-label="Page navigation">
										<ul class="pagination justify-content-center primary-theme">
	    									<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-long-arrow-alt-left"></i></a></li>
										    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
										    <li class="page-item"><a class="page-link" href="#">2</a> </li>
										    <li class="page-item"><a class="page-link" href="#">3</a></li>
										    <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
	 									</ul>	
	 								</nav>					
								</div> -->
				 			</div>
				 		</div>	 <!-- END BLOG POSTS HOLDER -->

<?php include "inc-lateral-blog.php";?>

				 		
				 	</div>	<!-- End row -->	
				 </div>	 <!-- End container -->
			</div>	<!-- END BLOG PAGE CONTENT -->

        <?php include "footer.php";?>
		</div>	<!-- END PAGE CONTENT -->



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
		<script src="<?php echo SITE_URL;?>/js/custom.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script> 
			new WOW().init();
$(function () {
			$("#pesquisa_lateral").autocomplete({
                    source: '<?php echo SITE_URL;?>/proc_pesq_msg.php'
                });

                $("#pesquisa_lateral").autocomplete( "instance" )._renderItem = function( ul, item ) {
  return $( "<li class='col-lg-3 col-md-12 col-xs-12 link-list'>" )
    .data("item.autocomplete", item)
    .append( "<div style='font-size:20px; background: #f0f0f0;'><a href='<?php echo SITE_URL;?>/blog/"+ item.url_amigavel +"'>"+ item.value + "</a></div>")
    .appendTo( ul );
};
            });
		</script>
	</body>
</html>	