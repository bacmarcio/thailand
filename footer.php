		<?php $textoRodape = $textos->rsDados(4);?>
		<footer id="footer-1" class="bg-image pt-20 pb-20 footer division">
			<div class="container">
				<!-- FOOTER CONTENT -->
				<div class="row">
					<!-- FOOTER INFO -->
					<div class="col-md-6 col-lg-4 mt-20">
						<div class="footer-info mb-10">
							<!-- Footer Logo -->
							<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80  pixels) -->
							<img src="<?php echo SITE_URL;?>/images/logo3.png" alt="footer-logo" />

							<!-- Text -->
							<p class="p-sm mt-20">
								<?php echo $textoRodape->texto;?>
							</p>

							<!-- Social Icons -->
							<div class="footer-socials-links mt-10">
								<ul class="foo-socials text-center clearfix">
									<?php if(isset($infoSistema->instagram) && !empty($infoSistema->instagram)){?>
                                    <li><a href="<?php echo $infoSistema->instagram;?>" target="_blank" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	
                                    <?php }?>
                                    <?php if(isset($infoSistema->youtube) && !empty($infoSistema->youtube)){?>
                                    <li><a href="<?php echo $infoSistema->youtube;?>" target="_blank" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>	
                                    <?php }?>
                                    <?php if(isset($infoSistema->twitter) && !empty($infoSistema->twitter)){?>
                                    <li><a href="<?php echo $infoSistema->twitter;?>" target="_blank" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                                    <?php }?>
                                    <?php if(isset($infoSistema->facebook) && !empty($infoSistema->facebook)){?>
                                    <li><a href="<?php echo $infoSistema->facebook;?>" target="_blank" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <?php }?>
								</ul>
							</div>
						</div>
					</div>

					<!-- FOOTER CONTACTS -->
					<div class="col-md-6 col-lg-4 mt-90 d-none d-sm-block">
					
						<div class="footer-box mb-10 mtn-4">
							<!-- Title -->
							<h5 class="h5-xs">Nossa Localização</h5>

							<!-- Address -->
							<p><?php echo $infoSistema->endereco;?></p>
							<p>CEP: <?php echo $infoSistema->cep_loja;?></p>

							<!-- Email -->
							<p class="foo-email mt-20">
							    <a href="mailto:<?php echo $infoSistema->email1;?>"><?php echo $infoSistema->email1;?></a>
							</p>
							<!-- Phone -->
							<p><?php echo $infoSistema->telefone1;?></p>
							<p><?php echo $infoSistema->telefone2;?></p>
						</div>
					</div>

					<!-- FOOTER WORKING HOURS -->
					<div class="col-md-6 col-lg-4 mt-90 d-none d-sm-block">
					
						<div class="footer-box mb-10 mtn-4">
							<!-- Title -->
							<h5 class="h5-xs">Menu</h5>

							<!-- Working Hours -->
							<p class="p-sm"><a href="<?php echo SITE_URL;?>/."><span>Home</span></a></p>
                            <p class="p-sm"><a href="<?php echo SITE_URL;?>/sobre"><span>Quem Somos</span></a></p>
                            <p class="p-sm"><a href="<?php echo SITE_URL;?>/simulador"><span>Simulador</span></a></p>
							<p class="p-sm"><a href="<?php echo SITE_URL;?>/blog"><span>Blog</span></a></p>
                            <p class="p-sm"><a href="<?php echo SITE_URL;?>/contato"><span>Contato</span></a></p>
						</div>
					</div>

				</div>
				<!-- END FOOTER CONTENT -->

				<!-- FOOTER COPYRIGHT -->
				<div class="bottom-footer">
					<div class="row">
						<div class="col-md-12">
							<p class="footer-copyright">
								&copy;  2009-<?php echo date('Y');?> Feito com <i class="fa fa-heart" style="color: red;"></i> por <span><a href="http://hoogli.com.br/" target="_blank"><img src="<?php echo SITE_URL;?>/images/hoogli_logo.svg" alt="Hoogli-Marketing-Digital-Brasilia-(61)-3436-1999" style="margin-top: 3px; width:60px;"></a></span>. Todos os direitos reservados.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End container -->
		</footer>
		<?php include "flutuante/flutuante.php";?>
		<!-- END FOOTER-1 -->