<?php 
$puxaTreinamentosHeader = $treinamentos->rsDados();
$puxaSolucoesHeader = $solucoes->rsDados(); 
date_default_timezone_set('America/Sao_Paulo');
?>
<header id="header" class="header">


	<!-- MOBILE HEADER -->
	<div class="wsmobileheader clearfix">
		<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
		<span class="smllogo"><a href="<?php echo SITE_URL;?>/."><img src="<?php echo SITE_URL;?>/images/logo3.png"
					alt="mobile-logo" /></a></span>
		<!-- <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a> -->
	</div>


	


	<!-- NAVIGATION MENU -->
	<div class="wsmainfull menu clearfix">
		<div class="wsmainwp clearfix">

			<!-- LOGO IMAGE -->
			<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
			<div class="desktoplogo"><a href="<?php echo SITE_URL;?>/."><img
						src="<?php echo SITE_URL;?>/images/logo3.png" alt="header-logo"></a></div>

			<!-- MAIN MENU -->
			<nav class="wsmenu clearfix">
				<ul class="wsmenu-list">
					<li class="nl-simple" aria-haspopup="true"><a href="<?php echo SITE_URL;?>/.">Home</a></li>
					<li class="nl-simple" aria-haspopup="true"><a href="<?php echo SITE_URL;?>/sobre">Quem Somos</a>
					</li>
					<li aria-haspopup="true"><a href="#">Soluções <span class="wsarrow"></span></a>
						<ul class="sub-menu">
							<?php foreach($puxaSolucoesHeader as $puxaSolucaoHeader){?>
							<li aria-haspopup="true"><a
									href="<?php echo SITE_URL;?>/solucao/<?php echo $puxaSolucaoHeader->url_amigavel;?>">
									<?php echo $puxaSolucaoHeader->titulo;?>
								</a></li>
							<?php }?>
						</ul>
					</li>
					<li class="nl-simple" aria-haspopup="true"><a href="<?php echo SITE_URL;?>/simulador">Simulador</a></li>
					<li class="nl-simple" aria-haspopup="true"><a href="<?php echo SITE_URL;?>/blog">Blog</a></li>
					
					<li class="nl-simple" aria-haspopup="true"><a href="<?php echo SITE_URL;?>/contato">Contato</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>