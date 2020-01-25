		<footer class="container-fluid">
			<div class="row">
				<div class="offset-md-1 col-md-5 py-5">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.svg" alt="" class="img-fluid logo-footer">
					<p>Suscríbete a nuestro newsletter</p>
	                <?php 
	                    // Argumentos para una busqueda de post type
	                    $args = array(
	                      'post_type' => 'correo-footer', // Nombre del post type
	                      'order' => 'ASC'
	                    );
	                    $correos = new WP_Query($args);
	                    if ($correos->posts):
	                      // Foreach para recorrer el resultado de la busqueda
	                        foreach ($correos->posts as $correo):
	                          $correo_desc = $correo->code;
	                  ?>
	                  <?php
	                     endforeach;
	                     endif; 

	                    ?>
	                    <div class="form-footer text-center text-md-left">
	                    	<?php echo $correo_desc;?>
	                    </div>
				</div>
				<div class="col-md-6 bg-blue py-5">
					<div class="row">
						<div class="col-md-6">
							<?php
							$defaults = array(
								'theme_location'    => 'principal-menu',
								'container'             => 'false',
								'menu_class'            => 'navbar-nav'
							);
							wp_nav_menu( $defaults );

							?>						
						</div>
						<div class="col-md-5 p-md-0 color-white">
							<ul class="datos">
								<li class="ubication">
									Sede principal
									<span>Medellín, Colombia</span>
								</li>
								<li class="phone">
									Contacto
									<span>3178469689</span>
									<span>(4)513 15 43</span>
								</li>
								<li class="redes">
									<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/ig.svg" alt="" class="img-fluid"></a>
									<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/in.svg" alt="" class="img-fluid"></a>
									<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt="" class="img-fluid"></a>
								</li>
							</ul>
						</div>
					</div>					
				</div>
			</div>
		</footer>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2tg95tRLV0b3omGIVAB3gD7WXVyjCNSU"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>